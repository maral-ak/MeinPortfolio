
(function($) {
  "use strict";

  var search = function() {
    $('.search').click(function(e) {
      $(window).scrollTop(0);
      if (!$('nav.search').hasClass('active'))
        $('nav.search').addClass('active');
      else
        $('nav.search').removeClass('active');
    });
  }
  search();

  var siteIstotope = function() {
    var $container = $('#portfolio-grid').isotope({
      itemSelector: '.item',
      isFitWidth: true
    });

    $(window).resize(function() {
      $container.isotope({
        columnWidth: '.col-sm-3'
      });
    });

    $container.isotope({
      filter: '*'
    });

    $('#filters').on('click', 'a', function(e) {
      e.preventDefault();
      var filterValue = $(this).attr('data-filter');
      $container.isotope({
        filter: filterValue
      });
      $('#filters a').removeClass('active');
      $(this).addClass('active');
    });
  }
  $(window).on('load', function() {
    siteIstotope();
  });

  $(document).ready(function() {
      var scroll_pos = 0;
      $(document).scroll(function () {
          scroll_pos = $(this).scrollTop();
          if (scroll_pos > 0) {
              $('.site-top-header').removeClass('static-top').addClass('fixed-top').addClass('bg-color');
          } else {
              $('.site-top-header').removeClass('fixed-top').addClass('static-top').removeClass('bg-color');
          }
      });
    });
  //   $('body').scrollspy({
  //       target: '#mainNav',
  //       offset: 75
  //   });
  //
  //   // Collapse Navbar
  //   var navbarCollapse = function() {
  //       if ($("#mainNav").offset().top > 100) {
  //           $("#mainNav").addClass("navbar-scrolled");
  //       } else {
  //           $("#mainNav").removeClass("navbar-scrolled");
  //       }
  //   };
  //   // Collapse now if page is not at top
  //   navbarCollapse();
  //   // Collapse the navbar when page is scrolled
  //   $(window).scroll(navbarCollapse);


    $(window).on('load', function() {
    AOS.init({
      easing: 'ease',
      duration: 1000,
      once: true
    });
  });
})(jQuery);


