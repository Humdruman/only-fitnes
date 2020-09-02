/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/*!*******************************************************!*\
  !*** ./components/dpch/reviewsPhotoSlider/app/app.js ***!
  \*******************************************************/
/***/ (function(module, exports) {

	'use strict';
	
	document.addEventListener('DOMContentLoaded', function () {
	  if (window.innerWidth > 760) {
	    $('.reviews-photo-slider').slick({
	      infinite: true,
	      slidesToShow: 3,
	      slidesToScroll: 3,
	      dots: true,
	      appendDots: $('.reviews-photo-append-dots')
	    });
	  } else {
	    $('.reviews-photo-slider').slick({
	      infinite: true,
	      slidesToShow: 1,
	      slidesToScroll: 1,
	      dots: false
	    });
	  }
	
	  window.addEventListener("resize", function () {
	    if (window.innerWidth > 760) {
	      $('.reviews-photo-slider').slick({
	        infinite: true,
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        dots: true,
	        appendDots: $('.reviews-photo-append-dots')
	      });
	    } else {
	      $('.reviews-photo-slider').slick({
	        infinite: true,
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        dots: true,
	        appendDots: $('.reviews-photo-append-dots')
	      });
	    }
	  });
	});

/***/ })
/******/ ]);
//# sourceMappingURL=script.js.map