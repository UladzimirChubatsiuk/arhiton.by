;(function ($) {
  'use strict';

  function closeOffcanvas() {
    $('body').removeClass('overflow offcanvas');
    $('.js-gtco-nav-toggle').removeClass('active').attr('aria-expanded', 'false');
  }

  function ensureOffcanvasMenu() {
    var page = $('#page');
    var menu = $('.menu-1 > ul').first();

    if (!page.length || !menu.length || $('#gtco-offcanvas').length) {
      return;
    }

    page.prepend('<div id="gtco-offcanvas" />');
    page.prepend('<a href="#" class="js-gtco-nav-toggle gtco-nav-toggle" aria-label="Открыть меню" aria-expanded="false"><i></i></a>');
    $('#gtco-offcanvas').append(menu.clone());
  }

  function bindOffcanvasMenu() {
    $(document).on('click', '.js-gtco-nav-toggle', function (event) {
      var toggle = $(this);
      var isOpen = !$('body').hasClass('offcanvas');

      event.preventDefault();
      $('body').toggleClass('overflow offcanvas', isOpen);
      toggle.toggleClass('active', isOpen).attr('aria-expanded', isOpen ? 'true' : 'false');
    });

    $(document).on('click', function (event) {
      var container = $('#gtco-offcanvas, .js-gtco-nav-toggle');

      if (!container.length || container.is(event.target) || container.has(event.target).length > 0) {
        return;
      }

      closeOffcanvas();
    });

    $(window).on('resize', function () {
      if (window.innerWidth > 768) {
        closeOffcanvas();
      }
    });
  }

  $(function () {
    ensureOffcanvasMenu();
    bindOffcanvasMenu();
  });
})(jQuery);
