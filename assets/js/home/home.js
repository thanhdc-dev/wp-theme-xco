/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************!*\
  !*** ./js/home.js ***!
  \********************/
// Home page
function setHeightBoxProject() {
  if (jQuery(window).width() > 767) {
    var heightBoxProject = jQuery('.img-get-height-box').height();
    jQuery('.box-project-feature').find('.info').height(heightBoxProject - 120 - 50);
  }
}
setHeightBoxProject();
jQuery(document).ready(function () {
  setHeightBoxProject();
});
jQuery(window).resize(function () {
  setHeightBoxProject();
});
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
jQuery('.menu-mobile').on('click', function (e) {
  jQuery('.main-nav').slideToggle(100);
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