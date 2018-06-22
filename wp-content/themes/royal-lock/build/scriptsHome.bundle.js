/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
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
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/js/scripts-entry.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/js/helpers.js":
/*!***************************!*\
  !*** ./src/js/helpers.js ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\n(function ($) {\n\t$(document).on('click', 'a[href^=\"#\"]', function (e) {\n\t\t// target element id\n\t\tvar id = $(this).attr('href');\n\n\t\tconsole.log($(e.target));\n\n\t\tif ($(e.target).closest('a').hasClass('carousel-control')) {\n\t\t\treturn;\n\t\t}\n\t\tif ($(e.target).closest('a').hasClass('menu-toggle')) {\n\t\t\treturn;\n\t\t}\n\n\t\t// target element\n\t\tvar $id = $(id);\n\t\tif ($id.selector === '#') {\n\t\t\treturn;\n\t\t}\n\t\tif ($id.length === 0) {\n\t\t\treturn;\n\t\t}\n\n\t\t// prevent standard hash navigation (avoid blinking in IE)\n\t\te.preventDefault();\n\n\t\t// top position relative to the document\n\t\tvar pos = $id.offset().top;\n\n\t\t// animated top scrolling\n\t\t$('body, html').animate({ scrollTop: pos }, { duration: 200 });\n\t});\n})(jQuery);\n\n/**\r\n * File skip-link-focus-fix.js.\r\n *\r\n * Helps with accessibility for keyboard only users.\r\n *\r\n * Learn more: https://git.io/vWdr2\r\n */\n(function () {\n\tvar isWebkit = navigator.userAgent.toLowerCase().indexOf('webkit') > -1,\n\t    isOpera = navigator.userAgent.toLowerCase().indexOf('opera') > -1,\n\t    isIe = navigator.userAgent.toLowerCase().indexOf('msie') > -1;\n\n\tif ((isWebkit || isOpera || isIe) && document.getElementById && window.addEventListener) {\n\t\twindow.addEventListener('hashchange', function () {\n\t\t\tvar id = location.hash.substring(1),\n\t\t\t    element;\n\n\t\t\tif (!/^[A-z0-9_-]+$/.test(id)) {\n\t\t\t\treturn;\n\t\t\t}\n\n\t\t\telement = document.getElementById(id);\n\n\t\t\tif (element) {\n\t\t\t\tif (!/^(?:a|select|input|button|textarea)$/i.test(element.tagName)) {\n\t\t\t\t\telement.tabIndex = -1;\n\t\t\t\t}\n\n\t\t\t\telement.focus();\n\t\t\t}\n\t\t}, false);\n\t}\n})();\n\n/**\r\n * File navigation.js.\r\n *\r\n * Handles toggling the navigation menu for small screens and enables TAB key\r\n * navigation support for dropdown menus.\r\n */\n(function () {\n\tvar container, button, menu, links, subMenus, i, len;\n\n\tcontainer = document.getElementById('site-navigation');\n\tif (!container) {\n\t\treturn;\n\t}\n\n\tbutton = container.getElementsByTagName('button')[0];\n\tif ('undefined' === typeof button) {\n\t\treturn;\n\t}\n\n\tmenu = container.getElementsByTagName('ul')[0];\n\n\t// Hide menu toggle button if menu is empty and return early.\n\tif ('undefined' === typeof menu) {\n\t\tbutton.style.display = 'none';\n\t\treturn;\n\t}\n\n\tmenu.setAttribute('aria-expanded', 'false');\n\tif (-1 === menu.className.indexOf('nav-menu')) {\n\t\tmenu.className += ' nav-menu';\n\t}\n\n\tbutton.onclick = function () {\n\t\tif (-1 !== container.className.indexOf('toggled')) {\n\t\t\tcontainer.className = container.className.replace(' toggled', '');\n\t\t\tbutton.setAttribute('aria-expanded', 'false');\n\t\t\tmenu.setAttribute('aria-expanded', 'false');\n\t\t} else {\n\t\t\tcontainer.className += ' toggled';\n\t\t\tbutton.setAttribute('aria-expanded', 'true');\n\t\t\tmenu.setAttribute('aria-expanded', 'true');\n\t\t}\n\t};\n\n\t// Get all the link elements within the menu.\n\tlinks = menu.getElementsByTagName('a');\n\tsubMenus = menu.getElementsByTagName('ul');\n\n\t// Set menu items with submenus to aria-haspopup=\"true\".\n\tfor (i = 0, len = subMenus.length; i < len; i++) {\n\t\tsubMenus[i].parentNode.setAttribute('aria-haspopup', 'true');\n\t}\n\n\t// Each time a menu link is focused or blurred, toggle focus.\n\tfor (i = 0, len = links.length; i < len; i++) {\n\t\tlinks[i].addEventListener('focus', toggleFocus, true);\n\t\tlinks[i].addEventListener('blur', toggleFocus, true);\n\t}\n\n\t/**\r\n  * Sets or removes .focus class on an element.\r\n  */\n\tfunction toggleFocus() {\n\t\tvar self = this;\n\n\t\t// Move up through the ancestors of the current link until we hit .nav-menu.\n\t\twhile (-1 === self.className.indexOf('nav-menu')) {\n\n\t\t\t// On li elements toggle the class .focus.\n\t\t\tif ('li' === self.tagName.toLowerCase()) {\n\t\t\t\tif (-1 !== self.className.indexOf('focus')) {\n\t\t\t\t\tself.className = self.className.replace(' focus', '');\n\t\t\t\t} else {\n\t\t\t\t\tself.className += ' focus';\n\t\t\t\t}\n\t\t\t}\n\n\t\t\tself = self.parentElement;\n\t\t}\n\t}\n})();\n\n//# sourceURL=webpack:///./src/js/helpers.js?");

/***/ }),

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\n(function ($) {\n\n\t// Body Transition\n\t$(window).load(function () {\n\t\t$('body').addClass('dom-ready');\n\t});\n\n\t$(document).on('click touch', '.menu-toggle', function (e) {\n\t\t$('.navi').toggleClass('on');\n\t\t$('.menu-toggle i').toggleClass('fa-times fa-bars');\n\t});\n\n\t$(document).on('change', '#faq', function (e) {\n\n\t\te.preventDefault();\n\n\t\tvar val = $('#faq').val();\n\n\t\t$.ajax({\n\t\t\tmethod: \"POST\",\n\t\t\turl: ajaxscript.ajax_url,\n\t\t\tdata: {\n\t\t\t\taction: 'get_faq',\n\t\t\t\tfaq: val\n\t\t\t},\n\t\t\tsuccess: function success(r) {\n\t\t\t\tr = JSON.parse(r);\n\t\t\t\t$('#faq-answer').empty().html(r);\n\t\t\t}\n\t\t});\n\t});\n})(jQuery);\n\n//# sourceURL=webpack:///./src/js/main.js?");

/***/ }),

/***/ "./src/js/scripts-entry.js":
/*!*********************************!*\
  !*** ./src/js/scripts-entry.js ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("\n\n__webpack_require__(/*! ./helpers */ \"./src/js/helpers.js\");\n\n__webpack_require__(/*! ./main */ \"./src/js/main.js\");\n\n//# sourceURL=webpack:///./src/js/scripts-entry.js?");

/***/ })

/******/ });