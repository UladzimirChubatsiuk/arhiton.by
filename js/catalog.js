(function () {
  'use strict';

  var state = {
    category: 'all',
    q: '',
    sort: 'manual'
  };

  var catalogData = null;
  var activeGalleryProduct = null;
  var activeGalleryIndex = 0;
  var galleryBound = false;
  var collator = new Intl.Collator('ru', { sensitivity: 'base' });

  function normalizeString(value) {
    return String(value || '')
      .toLowerCase()
      .replace(/\s+/g, ' ')
      .trim();
  }

  function safeCategory(category, categories) {
    if (category === 'all') {
      return 'all';
    }
    var found = categories.some(function (item) {
      return item.slug === category;
    });
    return found ? category : 'all';
  }

  function parseStateFromUrl(categories) {
    var params = new URLSearchParams(window.location.search);
    var next = {
      category: params.get('category') || 'all',
      q: params.get('q') || '',
      sort: params.get('sort') || 'manual'
    };

    if (['manual', 'name_asc', 'name_desc'].indexOf(next.sort) === -1) {
      next.sort = 'manual';
    }

    next.category = safeCategory(next.category, categories);
    return next;
  }

  function syncStateToUrl() {
    var params = new URLSearchParams();
    if (state.category && state.category !== 'all') {
      params.set('category', state.category);
    }
    if (state.sort && state.sort !== 'manual') {
      params.set('sort', state.sort);
    }
    if (state.q) {
      params.set('q', state.q);
    }

    var queryString = params.toString();
    var newUrl = queryString ? window.location.pathname + '?' + queryString : window.location.pathname;
    window.history.replaceState({}, '', newUrl);
  }

  function buildCard(product) {
    var col = document.createElement('div');
    col.className = 'col-md-4 col-sm-6 col-xs-12';

    var card = document.createElement('div');
    card.className = 'catalog-card';

    var media = document.createElement('div');
    media.className = 'catalog-card-media';

    var image = document.createElement('img');
    image.className = 'img-responsive';
    image.loading = 'lazy';
    image.decoding = 'async';

    var firstImage = product.images && product.images.length ? product.images[0] : null;
    image.src = firstImage ? firstImage.src : 'images/no_tovar.png';
    image.alt = firstImage ? firstImage.alt : product.name;

    image.addEventListener('click', function () {
      openGallery(product, 0);
    });

    media.appendChild(image);

    var title = document.createElement('h2');
    var titleButton = document.createElement('button');
    titleButton.type = 'button';
    titleButton.className = 'catalog-card-title-button';
    titleButton.textContent = product.name;
    titleButton.setAttribute('aria-label', 'Открыть фото товара ' + product.name);
    titleButton.addEventListener('click', function () {
      openGallery(product, 0);
    });
    title.appendChild(titleButton);

    var dimensions = document.createElement('p');
    dimensions.className = 'role';
    dimensions.textContent = 'Габаритные размеры: ' + product.dimensions;

    var actions = document.createElement('div');
    actions.className = 'catalog-card-actions';

    var photoBtn = document.createElement('button');
    photoBtn.type = 'button';
    photoBtn.className = 'btn btn-special btn-outline';
    photoBtn.textContent = 'Фото';
    photoBtn.addEventListener('click', function () {
      openGallery(product, 0);
    });

    var orderBtn = document.createElement('button');
    orderBtn.type = 'button';
    orderBtn.className = 'btn btn-special';
    orderBtn.textContent = 'Заказать';
    orderBtn.addEventListener('click', function () {
      if (typeof window.openOrderPopup === 'function') {
        window.openOrderPopup({
          productName: product.name,
          category: product.category
        });
      }
    });

    actions.appendChild(photoBtn);
    actions.appendChild(orderBtn);

    card.appendChild(media);
    card.appendChild(title);
    card.appendChild(dimensions);
    card.appendChild(actions);
    col.appendChild(card);

    return col;
  }

  function sortProducts(products) {
    var sorted = products.slice();

    if (state.sort === 'name_asc') {
      sorted.sort(function (a, b) {
        return collator.compare(a.name, b.name);
      });
      return sorted;
    }

    if (state.sort === 'name_desc') {
      sorted.sort(function (a, b) {
        return collator.compare(b.name, a.name);
      });
      return sorted;
    }

    sorted.sort(function (a, b) {
      return (a.sortOrder || 0) - (b.sortOrder || 0);
    });
    return sorted;
  }

  function filterProducts() {
    var normalizedQuery = normalizeString(state.q);

    var filtered = catalogData.products.filter(function (product) {
      if (product.available === false) {
        return false;
      }

      if (state.category !== 'all' && product.category !== state.category) {
        return false;
      }

      if (!normalizedQuery) {
        return true;
      }

      var keywords = Array.isArray(product.keywords) ? product.keywords.join(' ') : '';
      var haystack = normalizeString(product.name + ' ' + product.dimensions + ' ' + keywords);
      return haystack.indexOf(normalizedQuery) !== -1;
    });

    return sortProducts(filtered);
  }

  function toggleStates(filteredCount) {
    var emptyEl = document.getElementById('catalogEmpty');
    var soonEl = document.getElementById('catalogSoon');
    var resultCountEl = document.getElementById('catalogResultCount');

    emptyEl.style.display = 'none';
    soonEl.style.display = 'none';

    if (state.category !== 'all') {
      var categoryHasProducts = catalogData.products.some(function (product) {
        return product.available !== false && product.category === state.category;
      });

      if (!categoryHasProducts) {
        soonEl.style.display = 'block';
      } else if (filteredCount === 0) {
        emptyEl.style.display = 'block';
      }
    } else if (filteredCount === 0) {
      emptyEl.style.display = 'block';
    }

    resultCountEl.textContent = 'Найдено товаров: ' + filteredCount;
  }

  function renderCatalog() {
    var grid = document.getElementById('catalogGrid');
    var products = filterProducts();

    grid.innerHTML = '';
    products.forEach(function (product) {
      grid.appendChild(buildCard(product));
    });

    toggleStates(products.length);
    syncStateToUrl();
  }

  function updateCategoryButtons() {
    var buttons = document.querySelectorAll('[data-category]');
    Array.prototype.forEach.call(buttons, function (button) {
      if (button.getAttribute('data-category') === state.category) {
        button.classList.add('is-active');
      } else {
        button.classList.remove('is-active');
      }
    });
  }

  function bindControls() {
    var search = document.getElementById('catalogSearch');
    var sort = document.getElementById('catalogSort');
    var buttons = document.querySelectorAll('[data-category]');

    Array.prototype.forEach.call(buttons, function (button) {
      button.addEventListener('click', function () {
        state.category = button.getAttribute('data-category') || 'all';
        updateCategoryButtons();
        renderCatalog();
      });
    });

    search.addEventListener('input', function () {
      state.q = search.value.trim();
      renderCatalog();
    });

    sort.addEventListener('change', function () {
      state.sort = sort.value;
      renderCatalog();
    });

    search.value = state.q;
    sort.value = state.sort;
    updateCategoryButtons();
  }

  function closeGallery() {
    var modal = document.getElementById('catalogGalleryModal');
    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden', 'true');
    activeGalleryProduct = null;
    activeGalleryIndex = 0;
  }

  function renderGallery() {
    var imageEl = document.getElementById('catalogGalleryImage');
    var thumbsEl = document.getElementById('catalogGalleryThumbs');

    if (!activeGalleryProduct || !activeGalleryProduct.images.length) {
      closeGallery();
      return;
    }

    var image = activeGalleryProduct.images[activeGalleryIndex];
    imageEl.src = image.src;
    imageEl.alt = image.alt || activeGalleryProduct.name;

    thumbsEl.innerHTML = '';

    activeGalleryProduct.images.forEach(function (item, index) {
      var thumbBtn = document.createElement('button');
      thumbBtn.type = 'button';
      thumbBtn.className = 'catalog-gallery-thumb' + (index === activeGalleryIndex ? ' is-active' : '');

      var thumbImg = document.createElement('img');
      thumbImg.src = item.src;
      thumbImg.alt = item.alt || activeGalleryProduct.name;
      thumbImg.loading = 'lazy';
      thumbImg.decoding = 'async';

      thumbBtn.appendChild(thumbImg);
      thumbBtn.addEventListener('click', function () {
        activeGalleryIndex = index;
        renderGallery();
      });

      thumbsEl.appendChild(thumbBtn);
    });
  }

  function changeGalleryStep(direction) {
    if (!activeGalleryProduct || !activeGalleryProduct.images.length) {
      return;
    }

    var count = activeGalleryProduct.images.length;
    activeGalleryIndex = (activeGalleryIndex + direction + count) % count;
    renderGallery();
  }

  function openGallery(product, index) {
    var modal = document.getElementById('catalogGalleryModal');

    if (!product.images || !product.images.length) {
      return;
    }

    activeGalleryProduct = product;
    activeGalleryIndex = index || 0;

    renderGallery();

    modal.classList.add('is-open');
    modal.setAttribute('aria-hidden', 'false');
  }

  window.openCatalogGalleryImages = function (images, title, startIndex) {
    if (!Array.isArray(images) || !images.length) {
      return;
    }

    activeGalleryProduct = {
      name: title || 'Галерея',
      images: images.filter(function (item) {
        return item && item.src;
      })
    };

    if (!activeGalleryProduct.images.length) {
      activeGalleryProduct = null;
      return;
    }

    activeGalleryIndex = startIndex || 0;
    openGallery(activeGalleryProduct, activeGalleryIndex);
  };

  function bindGallery() {
    var modal = document.getElementById('catalogGalleryModal');
    var closeBtn = document.getElementById('catalogGalleryClose');
    var prevBtn = document.getElementById('catalogGalleryPrev');
    var nextBtn = document.getElementById('catalogGalleryNext');

    if (galleryBound || !modal || !closeBtn || !prevBtn || !nextBtn) {
      return;
    }

    galleryBound = true;

    closeBtn.addEventListener('click', closeGallery);
    prevBtn.addEventListener('click', function () {
      changeGalleryStep(-1);
    });
    nextBtn.addEventListener('click', function () {
      changeGalleryStep(1);
    });

    modal.addEventListener('click', function (event) {
      if (event.target === modal) {
        closeGallery();
      }
    });

    document.addEventListener('keydown', function (event) {
      if (!modal.classList.contains('is-open')) {
        return;
      }

      if (event.key === 'Escape') {
        closeGallery();
      } else if (event.key === 'ArrowLeft') {
        changeGalleryStep(-1);
      } else if (event.key === 'ArrowRight') {
        changeGalleryStep(1);
      }
    });
  }

  function startCatalog(data) {
    var requiredEls = [
      document.getElementById('catalogGrid'),
      document.getElementById('catalogSearch'),
      document.getElementById('catalogSort'),
      document.getElementById('catalogGalleryModal')
    ];

    if (requiredEls.some(function (el) { return !el; })) {
      return;
    }

    catalogData = data;
    state = parseStateFromUrl(catalogData.categories);

    bindControls();
    bindGallery();
    renderCatalog();
  }

  function init() {
    bindGallery();

    var grid = document.getElementById('catalogGrid');
    if (!grid) {
      return;
    }

    fetch('data/products.json')
      .then(function (response) {
        if (!response.ok) {
          throw new Error('Не удалось загрузить каталог');
        }
        return response.json();
      })
      .then(startCatalog)
      .catch(function () {
        var count = document.getElementById('catalogResultCount');
        var empty = document.getElementById('catalogEmpty');
        if (count) {
          count.textContent = 'Ошибка загрузки каталога.';
        }
        if (empty) {
          empty.style.display = 'block';
          empty.textContent = 'Не удалось загрузить данные каталога. Попробуйте обновить страницу.';
        }
      });
  }

  document.addEventListener('DOMContentLoaded', init);
})();

