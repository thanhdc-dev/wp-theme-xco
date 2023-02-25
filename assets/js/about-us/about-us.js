/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************!*\
  !*** ./js/about-us.js ***!
  \************************/
// box-utility
jQuery('.counter-number').each(function () {
  var $this = jQuery(this);
  var countTo = $this.attr('data-count');
  jQuery({
    countNum: $this.text()
  }).animate({
    countNum: countTo
  }, {
    duration: 8000,
    easing: 'linear',
    step: function step() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function complete() {
      $this.text(this.countNum);
      //alert('finished');
    }
  });
});

// box-testimonial
jQuery(".box-testimonial .owl-carousel").owlCarousel({
  items: 1,
  loop: true,
  nav: true,
  navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
  dots: false,
  dotsEach: true,
  autoplay: true,
  autoplayTimeout: 5000
});
wow = new WOW({
  boxClass: 'wow',
  animateClass: 'animated',
  offset: 0,
  mobile: false,
  live: true
});
wow.init();
/******/ })()
;