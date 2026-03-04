(function (window) {
  'use strict';

  var popupForm = document.getElementById('popupForm');
  var closePopup = document.getElementById('closePopup');
  var closeMessage = document.getElementById('closeMessage');
  var successMessage = document.getElementById('successMessage');
  var formContent = document.getElementById('formContent');
  var orderForm = document.getElementById('orderForm');
  var productSelect = document.getElementById('product');
  var selectedProductNameInput = document.getElementById('selectedProductName');
  var btnSpecial = document.getElementById('btn-special');

  function closePopupForm() {
    if (!popupForm) {
      return;
    }
    popupForm.style.display = 'none';
  }

  function showSuccessMessage() {
    if (formContent) {
      formContent.style.display = 'none';
    }
    if (successMessage) {
      successMessage.style.display = 'block';
    }
  }

  function setPopupContext(context) {
    if (!context) {
      if (selectedProductNameInput) {
        selectedProductNameInput.value = '';
      }
      return;
    }

    if (context.category && productSelect) {
      var categoryToFormValue = {
        bench: 'product1',
        trash: 'product2',
        vases: 'product3',
        furniture: 'product4',
        bicycle: 'product5',
        enclosure: 'product6'
      };
      var targetValue = categoryToFormValue[context.category] || context.category;
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
    popupForm.style.display = 'flex';
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

      var formData = new FormData(orderForm);
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'process-order.php', true);

      xhr.onreadystatechange = function () {
        if (xhr.readyState !== 4) {
          return;
        }

        if (xhr.status === 200 && String(xhr.responseText).trim() === 'success') {
          showSuccessMessage();
          return;
        }

        alert('Произошла ошибка, попробуйте позже.');
      };

      xhr.onerror = function () {
        alert('Не удалось отправить заявку. Проверьте соединение и попробуйте снова.');
      };

      xhr.send(formData);
    });
  }

  if (btnSpecial) {
    btnSpecial.addEventListener('click', function () {
      openPopup(null);
    });
  }
})(window);

