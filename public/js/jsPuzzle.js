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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/jsPuzzle.js":
/*!**********************************!*\
  !*** ./resources/js/jsPuzzle.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("var select = false;\nvar c = \"inc\";\nvar pos_s = \"\";\nvar id_s = \"\";\nvar rompecabezas = {\n  _arr_pos_r: new Array(),\n  _arr_pos_a: new Array(),\n  _mostrar: function _mostrar() {\n    rompecabezas._arr_pos_r.length = 0;\n    var piezas = 9;\n    var tb = document.createElement('table');\n    tb.border = 1;\n    tb.align = 'center';\n    tb.cellPadding = 0;\n    tb.cellSpacing = 0;\n    var dp = document.createElement('div');\n    dp.id = 'posiciones';\n    dp.className = 'posic';\n    var ar = Math.sqrt(piezas);\n    var c = 0;\n    var tam_img = 300;\n    var pos_img = tam_img / ar;\n\n    for (var fil = 1; fil <= ar; fil++) {\n      var tr = document.createElement('tr');\n\n      for (var cel = 1; cel <= ar; cel++) {\n        c++;\n        var td = document.createElement('td');\n        td.className = 'pieza';\n        td.id = 'pos_' + c;\n        td.style.width = pos_img + 'px';\n        td.style.height = pos_img + 'px';\n        var dbp = document.createElement('div');\n        dbp.id = 'val_bp_' + c;\n        var p = Math.round((pos_img * cel - pos_img) * -1) + 'px ' + Math.round((fil * pos_img - pos_img) * -1) + 'px';\n        td.style.backgroundPosition = p;\n\n        rompecabezas._arr_pos_r.push(p);\n\n        dbp.innerHTML = p;\n        dp.appendChild(dbp);\n\n        td.onclick = function () {\n          rompecabezas._cambiaBGP(this.id);\n\n          rompecabezas._compruebaFin();\n        };\n\n        tr.appendChild(td);\n      }\n\n      tb.appendChild(tr);\n    }\n\n    if (!rompecabezas._get(\"div_content\")) {\n      var cont = document.createElement('div');\n      cont.id = 'div_content';\n      cont.appendChild(tb);\n      cont.appendChild(dp);\n      document.body.appendChild(cont);\n    } else {\n      rompecabezas._get(\"div_content\").innerHTML = '';\n\n      rompecabezas._get(\"div_content\").appendChild(tb);\n\n      rompecabezas._get(\"div_content\").appendChild(dp);\n\n      rompecabezas._get(\"posiciones\").removeClass('posic');\n\n      rompecabezas._get(\"posiciones\").innerHTML = '';\n      rompecabezas._get(\"posiciones\").className = 'posic';\n    }\n  },\n  _barajar: function _barajar() {\n    var num_alt = null;\n    var arr = new Array();\n    var resp = \"no\";\n    var i = -1;\n    var repite = \"no\";\n    var pie = 9;\n    var pie1 = pie + 1;\n\n    while (arr.length < pie) {\n      repite = \"no\";\n      num_alt = Math.floor(Math.random() * pie1);\n\n      if (num_alt != 0) {\n        if (arr.length == 0) {\n          i++;\n          arr[i] = num_alt;\n        } else {\n          for (j = 0; j <= arr.length - 1; j++) {\n            if (arr[j] == num_alt) {\n              repite = \"si\";\n            }\n          }\n\n          if (repite != \"si\") {\n            i++;\n            arr[i] = num_alt;\n          }\n        }\n      }\n    }\n\n    var id = 0;\n\n    for (k = 0; k <= arr.length - 1; k++) {\n      id = k - -1;\n      rompecabezas._get(\"pos_\" + id).style.backgroundPosition = rompecabezas._get(\"val_bp_\" + arr[k]).innerHTML;\n    }\n  },\n  _cambiaBGP: function _cambiaBGP(id) {\n    if (select == false) {\n      pos_s = rompecabezas._get(id).style.backgroundPosition;\n      id_s = id;\n      select = true;\n      rompecabezas._get(id_s).style.boxShadow = '1px 1px 14px #FFF,-1px -1px 14px #FFF, 1px -1px 14px #FFF,-1px 1px 14px #FFF';\n    } else {\n      var pos_n = rompecabezas._get(id).style.backgroundPosition;\n\n      var id_n = id;\n      c = \"com\";\n      select = false;\n    }\n\n    if (c == \"com\") {\n      rompecabezas._get(id_n).style.backgroundPosition = pos_s;\n      rompecabezas._get(id_s).style.backgroundPosition = pos_n;\n      c = \"inc\";\n      rompecabezas._get(id_s).style.boxShadow = '';\n    }\n  },\n  _compruebaFin: function _compruebaFin() {\n    var pie = 9;\n    var fin = false;\n    rompecabezas._arr_pos_a.length = 0;\n\n    for (var i = 1; i <= pie; i++) {\n      rompecabezas._arr_pos_a.push(rompecabezas._get(\"pos_\" + i).style.backgroundPosition);\n    }\n\n    for (var j = 0; j < rompecabezas._arr_pos_r.length; j++) {\n      if (rompecabezas._arr_pos_r[j] != rompecabezas._arr_pos_a[j]) {\n        fin = false;\n        break;\n      } else {\n        fin = true;\n      }\n    }\n\n    setTimeout(function () {\n      if (fin) {\n        alert(\"LO RESOLVISTE COMPADRE!!\");\n      }\n    }, 600);\n  },\n  _get: function _get(id) {\n    return document.getElementById(id);\n  }\n};\n\nwindow.onload = function () {\n  rompecabezas._mostrar();\n\n  rompecabezas._barajar();\n};//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvanNQdXp6bGUuanM/ZGFhYiJdLCJuYW1lcyI6WyJzZWxlY3QiLCJjIiwicG9zX3MiLCJpZF9zIiwicm9tcGVjYWJlemFzIiwiX2Fycl9wb3NfciIsIkFycmF5IiwiX2Fycl9wb3NfYSIsIl9tb3N0cmFyIiwibGVuZ3RoIiwicGllemFzIiwidGIiLCJkb2N1bWVudCIsImNyZWF0ZUVsZW1lbnQiLCJib3JkZXIiLCJhbGlnbiIsImNlbGxQYWRkaW5nIiwiY2VsbFNwYWNpbmciLCJkcCIsImlkIiwiY2xhc3NOYW1lIiwiYXIiLCJNYXRoIiwic3FydCIsInRhbV9pbWciLCJwb3NfaW1nIiwiZmlsIiwidHIiLCJjZWwiLCJ0ZCIsInN0eWxlIiwid2lkdGgiLCJoZWlnaHQiLCJkYnAiLCJwIiwicm91bmQiLCJiYWNrZ3JvdW5kUG9zaXRpb24iLCJwdXNoIiwiaW5uZXJIVE1MIiwiYXBwZW5kQ2hpbGQiLCJvbmNsaWNrIiwiX2NhbWJpYUJHUCIsIl9jb21wcnVlYmFGaW4iLCJfZ2V0IiwiY29udCIsImJvZHkiLCJyZW1vdmVDbGFzcyIsIl9iYXJhamFyIiwibnVtX2FsdCIsImFyciIsInJlc3AiLCJpIiwicmVwaXRlIiwicGllIiwicGllMSIsImZsb29yIiwicmFuZG9tIiwiaiIsImsiLCJib3hTaGFkb3ciLCJwb3NfbiIsImlkX24iLCJmaW4iLCJzZXRUaW1lb3V0IiwiYWxlcnQiLCJnZXRFbGVtZW50QnlJZCIsIndpbmRvdyIsIm9ubG9hZCJdLCJtYXBwaW5ncyI6IkFBQUEsSUFBSUEsTUFBTSxHQUFHLEtBQWI7QUFDQSxJQUFJQyxDQUFDLEdBQUcsS0FBUjtBQUNBLElBQUlDLEtBQUssR0FBRyxFQUFaO0FBQ0EsSUFBSUMsSUFBSSxHQUFHLEVBQVg7QUFFQSxJQUFJQyxZQUFZLEdBQUc7QUFDakJDLFlBQVUsRUFBRyxJQUFJQyxLQUFKLEVBREk7QUFFakJDLFlBQVUsRUFBRyxJQUFJRCxLQUFKLEVBRkk7QUFHakJF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NkJqQyxZQUFZLENBQUN1QyxJQUFiLENBQWtCLFNBQU9RLENBQXpCLEVBQTRCckIsS0FBNUIsQ0FBa0NNLGtCQUEvRDtBQUNBOztBQUNELFNBQUksSUFBSXFCLENBQUMsR0FBQyxDQUFWLEVBQVlBLENBQUMsR0FBQ3JELFlBQVksQ0FBQ0MsVUFBYixDQUF3QkksTUFBdEMsRUFBNkNnRCxDQUFDLEVBQTlDLEVBQWlEO0FBQ2hELFVBQUdyRCxZQUFZLENBQUNDLFVBQWIsQ0FBd0JvRCxDQUF4QixLQUE4QnJELFlBQVksQ0FBQ0csVUFBYixDQUF3QmtELENBQXhCLENBQWpDLEVBQTREO0FBQzNESyxXQUFHLEdBQUcsS0FBTjtBQUNBO0FBQ0EsT0FIRCxNQUdLO0FBQ0pBLFdBQUcsR0FBRyxJQUFOO0FBQ0E7QUFDRDs7QUFFQ0MsY0FBVSxDQUFDLFlBQVU7QUFDbkIsVUFBR0QsR0FBSCxFQUFPO0FBQ1JFLGFBQUssQ0FBQywwQkFBRCxDQUFMO0FBQ0E7QUFDQSxLQUpTLEVBSVIsR0FKUSxDQUFWO0FBS0YsR0FuSWlCO0FBcUlsQnJCLE1BQUksRUFBRSxjQUFTeEIsRUFBVCxFQUFZO0FBQ2pCLFdBQU9QLFFBQVEsQ0FBQ3FELGNBQVQsQ0FBd0I5QyxFQUF4QixDQUFQO0FBQ0E7QUF2SWlCLENBQW5COztBQXlJQStDLE1BQU0sQ0FBQ0MsTUFBUCxHQUFnQixZQUFVO0FBQ3pCL0QsY0FBWSxDQUFDSSxRQUFiOztBQUNBSixjQUFZLENBQUMyQyxRQUFiO0FBQ0EsQ0FIRCIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9qc1B1enpsZS5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbInZhciBzZWxlY3QgPSBmYWxzZTtcclxudmFyIGMgPSBcImluY1wiO1xyXG52YXIgcG9zX3MgPSBcIlwiO1xyXG52YXIgaWRfcyA9IFwiXCI7XHJcblxyXG52YXIgcm9tcGVjYWJlemFzID0ge1xyXG4gIF9hcnJfcG9zX3IgOiBuZXcgQXJyYXkoKSxcclxuICBfYXJyX3Bvc19hIDogbmV3IEFycmF5KCksIFxyXG4gIF9tb3N0cmFyOiBmdW5jdGlvbigpe1xyXG4gICAgcm9tcGVjYWJlemFzLl9hcnJfcG9zX3IubGVuZ3RoID0gMDtcclxuXHRcdHZhciBwaWV6YXMgPSA5O1xyXG5cdFx0dmFyIHRiID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgndGFibGUnKTtcclxuXHRcdHRiLmJvcmRlciA9IDE7XHJcblx0XHR0Yi5hbGlnbiA9ICdjZW50ZXInO1xyXG5cdFx0dGIuY2VsbFBhZGRpbmcgPSAwO1xyXG5cdFx0dGIuY2VsbFNwYWNpbmcgPSAwO1xyXG5cdFx0dmFyIGRwID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnZGl2Jyk7XHJcblx0XHRkcC5pZCA9ICdwb3NpY2lvbmVzJztcclxuXHRcdGRwLmNsYXNzTmFtZSA9ICdwb3NpYyc7XHJcblx0XHR2YXIgYXIgPSBNYXRoLnNxcnQocGllemFzKTtcclxuXHRcdHZhciBjID0gMDtcclxuXHRcdHZhciB0YW1faW1nID0gMzAwO1xyXG5cdFx0dmFyIHBvc19pbWcgPSB0YW1faW1nIC8gYXI7XHJcblx0XHRmb3IodmFyIGZpbD0xO2ZpbDw9YXI7ZmlsKyspe1xyXG5cdFx0XHR2YXIgdHIgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCd0cicpO1xyXG5cdFx0XHRmb3IodmFyIGNlbD0xO2NlbDw9YXI7Y2VsKyspe1xyXG5cdFx0XHRcdGMrKztcclxuXHRcdFx0XHR2YXIgdGQgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCd0ZCcpO1xyXG5cdFx0XHRcdHRkLmNsYXNzTmFtZSA9ICdwaWV6YSc7XHJcblx0XHRcdFx0dGQuaWQgPSAncG9zXycrYztcclxuXHRcdFx0XHR0ZC5zdHlsZS53aWR0aCA9IHBvc19pbWcrJ3B4JztcclxuXHRcdFx0XHR0ZC5zdHlsZS5oZWlnaHQgPSBwb3NfaW1nKydweCc7XHJcblx0XHRcdFx0dmFyIGRicCA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2RpdicpO1xyXG5cdFx0XHRcdGRicC5pZCA9ICd2YWxfYnBfJytjO1xyXG5cdFx0XHRcdHZhciBwID0gTWF0aC5yb3VuZCgoKHBvc19pbWcqY2VsKS1wb3NfaW1nKSAqIC0xKSsncHggJytNYXRoLnJvdW5kKCgoZmlsICogcG9zX2ltZyktcG9zX2ltZykgKiAtMSkrJ3B4JztcclxuXHRcdFx0XHR0ZC5zdHlsZS5iYWNrZ3JvdW5kUG9zaXRpb24gPSBwO1xyXG5cdFx0XHRcdHJvbXBlY2FiZXphcy5fYXJyX3Bvc19yLnB1c2gocCk7XHJcblx0XHRcdFx0ZGJwLmlubmVySFRNTCA9IHA7XHJcblx0XHRcdFx0ZHAuYXBwZW5kQ2hpbGQoZGJwKTtcclxuXHRcdFx0XHR0ZC5vbmNsaWNrID0gZnVuY3Rpb24oKXtcclxuXHRcdFx0XHRcdHJvbXBlY2FiZXphcy5fY2FtYmlhQkdQKHRoaXMuaWQpO1xyXG5cdFx0XHRcdFx0cm9tcGVjYWJlemFzLl9jb21wcnVlYmFGaW4oKTtcclxuXHRcdFx0XHR9XHJcblx0XHRcdFx0dHIuYXBwZW5kQ2hpbGQodGQpO1xyXG5cdFx0XHR9XHJcblx0XHRcdHRiLmFwcGVuZENoaWxkKHRyKTtcclxuXHRcdH1cclxuXHRcdGlmKCFyb21wZWNhYmV6YXMuX2dldChcImRpdl9jb250ZW50XCIpKXtcclxuXHRcdFx0dmFyIGNvbnQgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdkaXYnKTtcclxuXHRcdFx0Y29udC5pZCA9ICdkaXZfY29udGVudCc7XHJcblx0XHRcdGNvbnQuYXBwZW5kQ2hpbGQodGIpO1xyXG5cdFx0XHRjb250LmFwcGVuZENoaWxkKGRwKTtcclxuXHRcdFx0ZG9jdW1lbnQuYm9keS5hcHBlbmRDaGlsZChjb250KTtcclxuXHRcdH1lbHNle1xyXG5cdFx0XHRyb21wZWNhYmV6YXMuX2dldChcImRpdl9jb250ZW50XCIpLmlubmVySFRNTCA9ICcnO1xyXG5cdFx0XHRyb21wZWNhYmV6YXMuX2dldChcImRpdl9jb250ZW50XCIpLmFwcGVuZENoaWxkKHRiKTtcclxuXHRcdFx0cm9tcGVjYWJlemFzLl9nZXQoXCJkaXZfY29udGVudFwiKS5hcHBlbmRDaGlsZChkcCk7XHJcblx0XHRcdHJvbXBlY2FiZXphcy5fZ2V0KFwicG9zaWNpb25lc1wiKS5yZW1vdmVDbGFzcygncG9zaWMnKTtcclxuXHRcdFx0cm9tcGVjYWJlemFzLl9nZXQoXCJwb3NpY2lvbmVzXCIpLmlubmVySFRNTCA9ICcnO1xyXG5cdFx0XHRyb21wZWNhYmV6YXMuX2dldChcInBvc2ljaW9uZXNcIikuY2xhc3NOYW1lID0gJ3Bvc2ljJztcclxuXHRcdH1cclxuXHR9LFxyXG5cdF9iYXJhamFyOiBmdW5jdGlvbigpe1xyXG5cdFx0dmFyIG51bV9hbHQgPSBudWxsO1xyXG5cdFx0dmFyIGFyciA9IG5ldyBBcnJheSgpO1xyXG5cdFx0dmFyIHJlc3AgPSBcIm5vXCI7XHJcblx0XHR2YXIgaSA9IC0xO1xyXG5cdFx0dmFyIHJlcGl0ZSA9IFwibm9cIjtcclxuXHRcdHZhciBwaWUgPSA5O1xyXG5cdFx0dmFyIHBpZTEgPSBwaWUgKyAxO1xyXG5cdFx0d2hpbGUoYXJyLmxlbmd0aCA8IHBpZSl7XHJcblx0XHRcdHJlcGl0ZSA9IFwibm9cIjtcclxuXHRcdFx0bnVtX2FsdCA9IE1hdGguZmxvb3IoTWF0aC5yYW5kb20oKSpwaWUxKTtcclxuXHRcdFx0aWYobnVtX2FsdCAhPSAwKXtcclxuXHRcdFx0XHRpZihhcnIubGVuZ3RoID09IDApe1xyXG5cdFx0XHRcdFx0aSsrO1xyXG5cdFx0XHRcdFx0YXJyW2ldID0gbnVtX2FsdDtcclxuXHRcdFx0XHR9ZWxzZXtcclxuXHRcdFx0XHRcdGZvcihqPTA7ajw9YXJyLmxlbmd0aC0xO2orKyl7XHJcblx0XHRcdFx0XHRcdGlmKGFycltqXSA9PSBudW1fYWx0KXtcclxuXHRcdFx0XHRcdFx0XHRyZXBpdGUgPSBcInNpXCI7XHJcblx0XHRcdFx0XHRcdH1cclxuXHRcdFx0XHRcdH1cclxuXHRcdFx0XHRcdGlmKHJlcGl0ZSAhPSBcInNpXCIpe1xyXG5cdFx0XHRcdFx0XHRpKys7XHJcblx0XHRcdFx0XHRcdGFycltpXSA9IG51bV9hbHQ7XHJcblx0XHRcdFx0XHR9XHJcblx0XHRcdFx0fVxyXG5cdFx0XHR9XHJcblx0XHR9XHJcblx0XHR2YXIgaWQgPSAwO1x0XHJcblx0XHRmb3Ioaz0wOyBrPD1hcnIubGVuZ3RoLTE7aysrKXtcclxuXHRcdFx0aWQgPSBrLSgtMSk7XHJcblx0XHRcdHJvbXBlY2FiZXphcy5fZ2V0KFwicG9zX1wiK2lkKS5zdHlsZS5iYWNrZ3JvdW5kUG9zaXRpb24gPSByb21wZWNhYmV6YXMuX2dldChcInZhbF9icF9cIithcnJba10pLmlubmVySFRNTDtcclxuXHRcdH1cclxuXHRcdFxyXG5cdH0sXHJcblx0X2NhbWJpYUJHUDogZnVuY3Rpb24oaWQpe1xyXG5cdFx0aWYoc2VsZWN0ID09IGZhbHNlKXtcclxuXHRcdFx0cG9zX3MgPSByb21wZWNhYmV6YXMuX2dldChpZCkuc3R5bGUuYmFja2dyb3VuZFBvc2l0aW9uO1xyXG5cdFx0XHRpZF9zID0gaWQ7XHJcblx0XHRcdHNlbGVjdCA9IHRydWU7XHJcbiAgICAgIHJvbXBlY2FiZXphcy5fZ2V0KGlkX3MpLnN0eWxlLmJveFNoYWRvdyA9ICcxcHggMXB4IDE0cHggI0ZGRiwtMXB4IC0xcHggMTRweCAjRkZGLCAxcHggLTFweCAxNHB4ICNGRkYsLTFweCAxcHggMTRweCAjRkZGJztcclxuXHRcdH1lbHNle1xyXG5cdFx0XHR2YXIgcG9zX24gPSAgcm9tcGVjYWJlemFzLl9nZXQoaWQpLnN0eWxlLmJhY2tncm91bmRQb3NpdGlvbjtcclxuXHRcdFx0dmFyIGlkX24gPSBpZDtcclxuXHRcdFx0YyA9IFwiY29tXCI7XHJcblx0XHRcdHNlbGVjdCA9IGZhbHNlO1xyXG5cdFx0fVxyXG5cdCBcclxuXHRcdGlmKGMgPT0gXCJjb21cIil7IHJvbXBlY2FiZXphcy5fZ2V0KGlkX24pLnN0eWxlLmJhY2tncm91bmRQb3NpdGlvbiA9IHBvc19zOyByb21wZWNhYmV6YXMuX2dldChpZF9zKS5zdHlsZS5iYWNrZ3JvdW5kUG9zaXRpb24gPSBwb3NfbjtcclxuXHRcdFx0YyA9IFwiaW5jXCI7XHJcbiAgICAgIHJvbXBlY2FiZXphcy5fZ2V0KGlkX3MpLnN0eWxlLmJveFNoYWRvdyA9ICcnO1xyXG5cdFx0fVxyXG5cdH0sXHJcblx0X2NvbXBydWViYUZpbjogZnVuY3Rpb24oKXtcclxuXHRcdHZhciBwaWUgPSA5O1xyXG5cdFx0dmFyIGZpbiA9IGZhbHNlO1xyXG5cdFx0cm9tcGVjYWJlemFzLl9hcnJfcG9zX2EubGVuZ3RoID0gMDtcclxuXHRcdGZvcih2YXIgaT0xO2k8PXBpZTtpKyspe1xyXG5cdFx0XHRyb21wZWNhYmV6YXMuX2Fycl9wb3NfYS5wdXNoKHJvbXBlY2FiZXphcy5fZ2V0KFwicG9zX1wiK2kpLnN0eWxlLmJhY2tncm91bmRQb3NpdGlvbik7XHJcblx0XHR9XHJcblx0XHRmb3IodmFyIGo9MDtqPHJvbXBlY2FiZXphcy5fYXJyX3Bvc19yLmxlbmd0aDtqKyspe1xyXG5cdFx0XHRpZihyb21wZWNhYmV6YXMuX2Fycl9wb3NfcltqXSAhPSByb21wZWNhYmV6YXMuX2Fycl9wb3NfYVtqXSl7XHJcblx0XHRcdFx0ZmluID0gZmFsc2U7XHJcblx0XHRcdFx0YnJlYWs7XHJcblx0XHRcdH1lbHNle1xyXG5cdFx0XHRcdGZpbiA9IHRydWU7XHJcblx0XHRcdH1cclxuXHRcdH1cclxuXHRcdFxyXG4gICAgc2V0VGltZW91dChmdW5jdGlvbigpe1xyXG4gICAgICBpZihmaW4pe1xyXG5cdFx0XHQgIGFsZXJ0KFwiTE8gUkVTT0xWSVNURSBDT01QQURSRSEhXCIpXHJcblx0XHQgIH1cclxuICAgIH0sNjAwKTtcclxuXHR9LFxyXG5cdFxyXG5cdF9nZXQ6IGZ1bmN0aW9uKGlkKXtcclxuXHRcdHJldHVybiBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChpZCk7XHJcblx0fVxyXG59O1xyXG53aW5kb3cub25sb2FkID0gZnVuY3Rpb24oKXtcclxuXHRyb21wZWNhYmV6YXMuX21vc3RyYXIoKTtcclxuXHRyb21wZWNhYmV6YXMuX2JhcmFqYXIoKTtcclxufVxyXG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/jsPuzzle.js\n");

/***/ }),

/***/ 1:
/*!****************************************!*\
  !*** multi ./resources/js/jsPuzzle.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\DAW2Reto2\resources\js\jsPuzzle.js */"./resources/js/jsPuzzle.js");


/***/ })

/******/ });