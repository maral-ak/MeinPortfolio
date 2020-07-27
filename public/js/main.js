
(function($) {
  "use strict";

  var burgerMenu = function() {
    $('.burger').click(function(e) {
      $(window).scrollTop(0);
      if (!$('.burger').hasClass('active'))
        $('.burger').addClass('active');
      else
        $('.burger').removeClass('active');
    });
  }
  burgerMenu();

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

  $(document).ready(function(){
      var scroll_pos = 0;
      $(document).scroll(function() {
          scroll_pos = $(this).scrollTop();
          if(scroll_pos >= 10) {
              $("nav").css('background-color', 'white');
          } else {
              $("nav").css('background-color', 'transparent');
          }
      });
  });

})(jQuery);

AOS.init({
  easing: 'ease',
  duration: 1000,
  once: true
});
var scroll_pos = 0;
$(document).scroll(function() {
    scroll_pos = $(this).scrollTop();
    if(scroll_pos >= 10) {
        $("nav").css('background-color', 'white');
    } else {
        $("nav").css('background-color', 'transparent');
    }
});

