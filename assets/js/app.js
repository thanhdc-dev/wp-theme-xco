/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./js/app.js":
/*!*******************!*\
  !*** ./js/app.js ***!
  \*******************/
/***/ (() => {

// Header
// Header - Slider
jQuery(document).ready(function () {
  jQuery('.tp-banner').revolution({
    dottedOverlay: 'none',
    delay: 100000,
    startwidth: 1800,
    startheight: 900,
    hideThumbs: 200,
    thumbWidth: 90,
    thumbHeight: 40,
    thumbAmount: 2,
    navigationType: 'bullet',
    navigationArrows: 'solo',
    navigationStyle: 'round',
    touchenabled: 'on',
    onHoverStop: 'off',
    swipe_velocity: 0.7,
    swipe_min_touches: 1,
    swipe_max_touches: 1,
    drag_block_vertical: false,
    spinner: 'none',
    keyboardNavigation: 'off',
    navigationHAlign: 'center',
    navigationVAlign: 'bottom',
    navigationHOffset: 0,
    navigationVOffset: 20,
    soloArrowLeftHalign: 'left',
    soloArrowLeftValign: 'center',
    soloArrowLeftHOffset: 20,
    soloArrowLeftVOffset: 0,
    soloArrowRightHalign: 'right',
    soloArrowRightValign: 'center',
    soloArrowRightHOffset: 20,
    soloArrowRightVOffset: 0,
    shadow: 0,
    fullWidth: 'on',
    fullScreen: 'off',
    stopLoop: 'off',
    stopAfterLoops: -1,
    stopAtSlide: -1,
    shuffle: 'off',
    autoHeight: 'off',
    forceFullWidth: 'off',
    fullScreenAlignForce: 'off',
    minFullScreenHeight: 0,
    hideNavDelayOnMobile: 1900,
    hideThumbsOnMobile: 'off',
    hideBulletsOnMobile: 'off',
    hideArrowsOnMobile: 'off',
    hideThumbsUnderResolution: 0,
    hideSliderAtLimit: 0,
    hideCaptionAtLimit: 0,
    hideAllCaptionAtLilmit: 0,
    startWithSlide: 0,
    fullScreenOffsetContainer: ''
  });
});
// setTimeout(function () {
//     jQuery('.tp-banner').show().revolution({
//         dottedOverlay: 'none',
//         delay: 5000,
//         startwidth: 1800,
//         startheight: 900,
//
//         hideThumbs: 200,
//         thumbWidth: 90,
//         thumbHeight: 40,
//         thumbAmount: 2,
//
//         navigationType: 'bullet',
//         navigationArrows: 'solo',
//         navigationStyle: 'round',
//
//         touchenabled: 'on',
//         onHoverStop: 'off',
//
//         swipe_velocity: 0.7,
//         swipe_min_touches: 1,
//         swipe_max_touches: 1,
//         drag_block_vertical: false,
//
//         spinner: 'none',
//         keyboardNavigation: 'off',
//
//         navigationHAlign: 'center',
//         navigationVAlign: 'bottom',
//         navigationHOffset: 0,
//         navigationVOffset: 20,
//
//         soloArrowLeftHalign: 'left',
//         soloArrowLeftValign: 'center',
//         soloArrowLeftHOffset: 20,
//         soloArrowLeftVOffset: 0,
//
//         soloArrowRightHalign: 'right',
//         soloArrowRightValign: 'center',
//         soloArrowRightHOffset: 20,
//         soloArrowRightVOffset: 0,
//
//         shadow: 0,
//         fullWidth: 'on',
//         fullScreen: 'off',
//
//         stopLoop: 'off',
//         stopAfterLoops: -1,
//         stopAtSlide: -1,
//
//         shuffle: 'off',
//
//         autoHeight: 'off',
//         forceFullWidth: 'off',
//         fullScreenAlignForce: 'off',
//         minFullScreenHeight: 0,
//         hideNavDelayOnMobile: 1900,
//
//         hideThumbsOnMobile: 'off',
//         hideBulletsOnMobile: 'off',
//         hideArrowsOnMobile: 'off',
//         hideThumbsUnderResolution: 0,
//
//         hideSliderAtLimit: 0,
//         hideCaptionAtLimit: 0,
//         hideAllCaptionAtLilmit: 0,
//         startWithSlide: 0,
//         fullScreenOffsetContainer: ''
//     });
// }, 1000);

function sliderLeftBox() {
  var sliderLeftBoxText = $('.slider-left-box').find('.text');
  var wgSliderWidth = sliderLeftBoxText.width();
  sliderLeftBoxText.css({
    left: '-' + (wgSliderWidth / 2 - 6) + 'px',
    top: '-' + (wgSliderWidth / 2 + 30) + 'px'
  });
}
sliderLeftBox();
$(window).resize(function () {
  sliderLeftBox();
});
var countInterval = 0;
var interval = setInterval(function () {
  sliderLeftBox();
  countInterval++;
  if (countInterval === 40) {
    clearInterval(interval);
  }
}, 100);

// Home page
function setHeightBoxProject() {
  if ($(window).width() > 767) {
    var heightBoxProject = $('.img-get-height-box').height();
    $('.box-project-feature').find('.info').height(heightBoxProject - 120 - 50);
  }
}
setHeightBoxProject();
jQuery(document).ready(function () {
  setHeightBoxProject();
});
$(window).resize(function () {
  setHeightBoxProject();
});
$(".box-testimonial .owl-carousel").owlCarousel({
  items: 1,
  loop: true,
  nav: true,
  navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
  dots: false,
  dotsEach: true,
  autoplay: true,
  autoplayTimeout: 5000
});
$('.menu-mobile').on('click', function (e) {
  $('.main-nav').slideToggle(100);
});
wow = new WOW({
  boxClass: 'wow',
  animateClass: 'animated',
  offset: 0,
  mobile: false,
  live: true
});
wow.init();

/***/ }),

/***/ "./scss/app.scss":
/*!***********************!*\
  !*** ./scss/app.scss ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/app": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/app"], () => (__webpack_require__("./scss/app.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;