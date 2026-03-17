(function (window) {
  'use strict';

  var popupForm = document.getElementById('popupForm');
  var closePopup = document.getElementById('closePopup');
  var closeMessage = document.getElementById('closeMessage');
  var successMessage = document.getElementById('successMessage');
  var formContent = document.getElementById('formContent');
  var orderForm = document.getElementById('orderForm');
  var submitButton = orderForm ? orderForm.querySelector('[type="submit"]') : null;
  var productSelect = document.getElementById('product');
  var selectedProductNameInput = document.getElementById('selectedProductName');
  var btnSpecial = document.getElementById('btn-special');
  var reviewOriginalButtons = document.querySelectorAll('.js-review-original');
  var reviewCards = document.querySelectorAll('.js-review-card');
  var reviewShowMoreButton = document.getElementById('reviewShowMore');
  var reviewsExpanded = false;
  var isSubmitting = false;
  var defaultSubmitLabel = submitButton ? submitButton.textContent : '';
  var statusMessageEl = null;

  function getStatusMessageEl() {
    if (!orderForm) {
      return null;
    }

    if (!statusMessageEl) {
      statusMessageEl = document.createElement('div');
      statusMessageEl.className = 'popup-form-status';
      statusMessageEl.setAttribute('role', 'status');
      statusMessageEl.setAttribute('aria-live', 'polite');
      orderForm.appendChild(statusMessageEl);
    }

    return statusMessageEl;
  }

  function setStatusMessage(message, type) {
    var statusEl = getStatusMessageEl();
    if (!statusEl) {
      return;
    }

    statusEl.textContent = message || '';
    statusEl.className = 'popup-form-status' + (type ? ' is-' + type : '');
  }

  function setSubmittingState(nextState) {
    if (!orderForm || !submitButton) {
      return;
    }

    isSubmitting = nextState;
    submitButton.disabled = nextState;
    submitButton.classList.toggle('is-loading', nextState);
    submitButton.textContent = nextState ? 'Отправляем...' : defaultSubmitLabel;

    Array.prototype.forEach.call(orderForm.elements, function (field) {
      if (!field || field === submitButton) {
        return;
      }
      field.disabled = nextState;
    });

    if (nextState) {
      setStatusMessage('Заявка отправляется. Обычно это занимает несколько секунд.', 'loading');
    } else if (getStatusMessageEl()) {
      setStatusMessage('', '');
    }
  }

  function closePopupForm() {
    if (!popupForm) {
      return;
    }
    popupForm.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('popup-open');
    popupForm.style.display = 'none';
  }

  function showSuccessMessage() {
    if (formContent) {
      formContent.style.display = 'none';
    }
    if (successMessage) {
      successMessage.style.display = 'block';
    }
    if (orderForm) {
      orderForm.reset();
    }
    if (selectedProductNameInput) {
      selectedProductNameInput.value = '';
    }
    setStatusMessage('', '');
  }

  function showRequestError(message) {
    setStatusMessage(message || 'Произошла ошибка, попробуйте позже.', 'error');
    alert(message || 'Произошла ошибка, попробуйте позже.');
  }

  function setPopupContext(context) {
    if (!context) {
      if (selectedProductNameInput) {
        selectedProductNameInput.value = '';
      }
      return;
    }

    if (context.category && productSelect) {
      var targetValue = context.category;
      var hasCategoryOption = Array.prototype.some.call(productSelect.options, function (option) {
        return option.value === targetValue;
      });
      if (hasCategoryOption) {
        productSelect.value = targetValue;
      }
    }

    if (selectedProductNameInput) {
      selectedProductNameInput.value = context.productName || '';
    }
  }

  function openPopup(context) {
    if (!popupForm) {
      return;
    }

    if (formContent) {
      formContent.style.display = 'block';
    }
    if (successMessage) {
      successMessage.style.display = 'none';
    }

    setPopupContext(context || null);
    popupForm.setAttribute('aria-hidden', 'false');
    document.body.classList.add('popup-open');
    popupForm.style.display = 'flex';

    window.setTimeout(function () {
      var firstField = orderForm ? orderForm.querySelector('input, select, textarea') : null;
      if (firstField) {
        firstField.focus();
      }
    }, 0);
  }

  window.openOrderPopup = function (context) {
    openPopup(context || null);
  };

  if (closeMessage) {
    closeMessage.addEventListener('click', closePopupForm);
  }

  if (closePopup) {
    closePopup.addEventListener('click', closePopupForm);
  }

  if (popupForm) {
    popupForm.addEventListener('click', function (event) {
      if (event.target === popupForm) {
        closePopupForm();
      }
    });
  }

  if (orderForm) {
    orderForm.addEventListener('submit', function (event) {
      event.preventDefault();

      if (isSubmitting) {
        return;
      }

      var formData = new FormData(orderForm);
      var xhr = new XMLHttpRequest();
      xhr.open('POST', '/process-order.php', true);
      setSubmittingState(true);

      xhr.onreadystatechange = function () {
        if (xhr.readyState !== 4) {
          return;
        }

        setSubmittingState(false);

        var response = null;

        try {
          response = JSON.parse(xhr.responseText);
        } catch (error) {
          response = null;
        }

        if (xhr.status === 200 && response && response.status === 'success') {
          showSuccessMessage();
          return;
        }

        showRequestError(response && response.message ? response.message : 'Произошла ошибка, попробуйте позже.');
      };

      xhr.onerror = function () {
        setSubmittingState(false);
        showRequestError('Не удалось отправить заявку. Проверьте соединение и попробуйте снова.');
      };

      xhr.send(formData);
    });
  }

  if (btnSpecial) {
    btnSpecial.addEventListener('click', function () {
      openPopup(null);
    });
  }

  function getVisibleReviewLimit() {
    return window.innerWidth < 768 ? 2 : 4;
  }

  function updateReviewsVisibility() {
    var visibleLimit = getVisibleReviewLimit();
    var shouldShowButton;

    if (!reviewCards.length || !reviewShowMoreButton) {
      return;
    }

    Array.prototype.forEach.call(reviewCards, function (card, index) {
      var shouldHide = !reviewsExpanded && index >= visibleLimit;
      card.classList.toggle('is-hidden', shouldHide);
    });

    shouldShowButton = !reviewsExpanded && reviewCards.length > visibleLimit;
    reviewShowMoreButton.hidden = !shouldShowButton;
    reviewShowMoreButton.style.display = shouldShowButton ? 'inline-block' : 'none';
  }

  if (reviewShowMoreButton) {
    reviewShowMoreButton.addEventListener('click', function () {
      reviewsExpanded = true;
      updateReviewsVisibility();
    });
  }

  if (reviewCards.length) {
    updateReviewsVisibility();
    window.addEventListener('resize', updateReviewsVisibility);
  }

  Array.prototype.forEach.call(reviewOriginalButtons, function (button) {
    button.addEventListener('click', function () {
      if (typeof window.openCatalogGalleryImages !== 'function') {
        return;
      }

      window.openCatalogGalleryImages([
        {
          src: button.getAttribute('data-image-src'),
          alt: button.getAttribute('data-image-alt') || 'Оригинал отзыва'
        }
      ], button.getAttribute('data-gallery-title') || 'Оригинал отзыва', 0);
    });
  });
})(window);

