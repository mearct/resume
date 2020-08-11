(function($) {
  'use strict';

  var browserWindow = $(window);

  // :: 1.0 Preloader Active Code
  browserWindow.on('load', function() {
    $('#preloader').fadeOut('slow', function() {
      $(this).remove();
    });
  });

  // :: 2.0 Nav Active Code
  if ($.fn.classyNav) {
    $('#vcardNav').classyNav();
  }

  // :: 3.0 Masonary Gallery Active Code
  if ($.fn.imagesLoaded) {
    $('.vcard-portfolio').imagesLoaded(function() {
      // filter items on button click
      $('.portfolio-menu').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
          filter: filterValue
        });
      });
      // init Isotope
      var $grid = $('.vcard-portfolio').isotope({
        itemSelector: '.single-portfolio-area',
        percentPosition: true,
        masonry: {
          columnWidth: '.single-portfolio-area'
        }
      });
    });
  }

  // :: 4.0 Gallery Menu Style Active Code
  $('.portfolio-menu button.btn').on('click', function() {
    $('.portfolio-menu button.btn').removeClass('active');
    $(this).addClass('active');
  })

  // :: 5.0 Mobile Menu Active Code
  $('.nav-toggle').on('click', function() {
    $('.vcard-nav').toggleClass('on');
  })
  $('.vcard-nav').on('click', function() {
    $(this).removeClass('on');
  })

  // :: 6.0 Image Popup Active Code
  if ($.fn.magnificPopup) {
    $('.img-url').magnificPopup({
      type: 'image',
      gallery: {
        enabled: true
      }
    });
  }

  // :: 7.0 ScrollUp Active Code
  if ($.fn.scrollUp) {
    browserWindow.scrollUp({
      scrollSpeed: 1500,
      scrollText: '<i class="fa fa-angle-up"></i>'
    });
  }

  // :: 8.0 CouterUp Active Code
  if ($.fn.counterUp) {
    $('.counter').counterUp({
      delay: 10,
      time: 2000
    });
  }

  // :: 9.0 Testimonials Slides Active Code
  if ($.fn.owlCarousel) {
    $(".testimonial-slides").owlCarousel({
      items: 3,
      loop: true,
      center: true,
      autoplay: true,
      smartSpeed: 1500,
      margin: 30,
      nav: true,
      navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
      responsive: {
        320: {
          items: 1
        },
        576: {
          items: 2
        },
        992: {
          items: 3
        }
      }
    })
  }

  // :: 10.0 Sticky Active Code
  browserWindow.on('scroll', function() {
    if (browserWindow.scrollTop() > 0) {
      $('.header-area').addClass('sticky');
    } else {
      $('.header-area').removeClass('sticky');
    }
  });

  // :: 11.0 wow Active Code
  if (browserWindow.width() > 767) {
    new WOW().init();
  }

  // :: 12.0 Progress Bar Active Code
  if ($.fn.circleProgress) {
    $('#circle1').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle2').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle3').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle4').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle5').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle6').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle7').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle8').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle9').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle10').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle11').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle12').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle13').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle14').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle15').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle16').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle17').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle18').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle19').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle20').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle21').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle22').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle23').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle24').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle25').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle26').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle27').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle28').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle29').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle30').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle31').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle32').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle33').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle34').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle35').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle36').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle37').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle38').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle39').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle40').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle41').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle42').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle43').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle44').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle45').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle46').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle47').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle48').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle49').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });
    $('#circle50').circleProgress({
      size: 180,
      emptyFill: "rgba(0, 0, 0, .0)",
      fill: '#ffb016',
      thickness: '16',
      reverse: true
    });

  }

  // :: 13.0 onePageNav Active Code
  if ($.fn.onePageNav) {
    $('#vcardMenu').onePageNav({
      currentClass: 'active',
      scrollSpeed: 2000,
      easing: 'easeOutQuad'
    });
  }

  // :: 14.0 Nice Scroll Active Code
  if ($.fn.niceScroll) {
    $(".page-content").niceScroll({
      cursorborder: "0 solid transparent",
    });
  }

  // :: 15.0 Tooltip Active Code
  if ($.fn.tooltip) {
    $('[data-toggle="tooltip"]').tooltip();
  }

  // :: 16.0 prevent default a click
  $('a[href="#"]').on('click', function($) {
    $.preventDefault()
  });

})(jQuery);
