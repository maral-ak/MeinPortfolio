
(function($) {
  "use strict";

  var search = function() {
    $('.search').click(function(e) {
      $(window).scrollTop(0);
      if (!$('.search').hasClass('active'))
        $('.search').addClass('active');
      else
        $('.search').removeClass('active');
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
               $('nav').removeClass('static-top').addClass('fixed-top').addClass('bg-color');
           } else {
               $('nav').removeClass('fixed-top').addClass('static-top').removeClass('bg-color');
           }
       });
    });

  $(window).on('load', function() {
    AOS.init({
      easing: 'ease',
      duration: 1000,
      once: true
    });
  });
})(jQuery);


