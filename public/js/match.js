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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/match.js":
/*!*******************************!*\
  !*** ./resources/js/match.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("//alert(mujercitas[1].nombre);\nvar nombres = [];\nvar fotos = []; //var descripcion = [];\n//Parte del Juego\n\nvar juego = function () {\n  for (i = 0; i < mujercitas.length; i++) {\n    //document.write(mujercitas[i].nombre);\n    nombres.push(mujercitas[i].nombre);\n    fotos.push(mujercitas[i].foto); //descripcion.push(mujercitas[i].nombre);\n  } //Array completo de animales\n  //animales = ['gato.jpg','oveja.jpg','pato.jpg','perro.png','vaca.jpg','caballo.jpg'];\n  //Array completo de los nombres de los animales\n  //nombres = ['gato','oveja','pato','perro','vaca','caballo'];\n  //Numero de elementos del array de animales\n\n\n  numElementosMujeres = nombres.length - 1; //Declaro nuevos array vacios con los que voy a trabajar\n\n  imagenes = new Array();\n  arraydescripcion = new Array();\n  arraynombres = new Array();\n\n  do {\n    index = Math.floor(Math.random() * (numElementosMujeres - 0 + 1)) + 0; //Lleno los array pero antes compruebo si todavia no tienen elementos\n\n    if (imagenes.indexOf(animales[index]) == -1) {\n      imagenes.push(fotos[index]);\n      arraynombres.push(nombres[index]);\n      arraydescripcion.push(nombres[index]);\n    }\n  } while (imagenes.length < 3);\n\n  var vidas = 4,\n      lista1,\n      lista2; //Funcion para crear las cartas\n\n  crearCartas = function crearCartas() {\n    try {\n      var contenedor = document.querySelector(\".contenedor\");\n      var item_html = '<div class=\"item\" onclick=\"juego.clic(this)\" data-baraja=\"{baraja}\" data-indice=\"{indice}\"></div>';\n      lista1 = distribuirCartas(arraynombres);\n      lista2 = imagenes;\n      var cartas_html = \"\";\n\n      for (var i = 0; i < arraynombres.length; i++) {\n        //aqui creamos las cartas ocultas y sustituimos sus indices con los nombres de los animales\n        cartas_html += item_html.replace(\"{baraja}\", 1).replace(\"{indice}\", lista1[i]);\n      }\n\n      for (x = 0; x < fotos.length; x++) {\n        //aqui creamos las cartas con fotos de los animales e indices sus nombres\n        var item_html = '<img class=\"item\" onclick=\"juego.clic(this)\" data-baraja=\"{baraja}\" data-indice=\"{indice}\" src=\"../image/' + imagenes[x] + '\" >';\n        cartas_html += item_html.replace(\"{baraja}\", 2).replace(\"{indice}\", arraydescripcion[x]);\n      }\n\n      contenedor.innerHTML = cartas_html;\n    } catch (error) {\n      console.log(error);\n    }\n  }, //Funcion para ejecutar la accion por cada click que hacemos\n  clic = function clic(element) {\n    try {\n      var cartas_activas = document.querySelectorAll(\".sin-fondo-item\");\n\n      if (cartas_activas.length == 2) {\n        for (var i = 0; i < cartas_activas.length; i++) {\n          cartas_activas[i].classList.remove(\"sin-fondo-item\");\n          cartas_activas[i].innerHTML = \"\";\n        }\n\n        restarVidas();\n      }\n\n      if (cartas_activas.length == 1) {\n        if (cartas_activas[0].dataset.indice == element.dataset.indice && cartas_activas[0].dataset.baraja != element.dataset.baraja) {\n          element.innerHTML = \"<span class='numero-carta'></span>\";\n          cartas_activas[0].classList.remove(\"sin-fondo-item\");\n          cartas_activas[0].classList.add(\"checked-item\");\n          element.classList.add(\"checked-item\");\n        } else {\n          element.classList.add(\"sin-fondo-item\");\n          element.innerHTML = \"<span class='numero-carta'>\" + element.dataset.indice + \"</span>\";\n        }\n      } else {\n        element.classList.add(\"sin-fondo-item\");\n        element.innerHTML = \"<span class='numero-carta'>\" + element.dataset.indice + \"</span>\";\n      } //Si todas cartas estan verificadas, nos saca el mensaje de victoria\n\n\n      if (document.querySelectorAll(\".checked-item\").length == arraynombres.length * 2) {\n        var mensaje = document.querySelector(\"#contenedor-mensaje-victoria\");\n\n        if (mensaje.classList.contains(\"ocultar-mensaje\")) {\n          mensaje.classList.remove(\"ocultar-mensaje\");\n        }\n      }\n    } catch (error) {\n      console.log(error);\n    }\n  }, //funcion para restar las vidas por cada fallo que cometemos\n  restarVidas = function restarVidas() {\n    try {\n      if (vidas == 1) {\n        alert(\"Has sido eliminado\");\n        var mensaje = document.querySelector(\"#contenedor-mensaje-derrota\");\n\n        if (mensaje.classList.contains(\"ocultar-mensaje\")) {\n          mensaje.classList.remove(\"ocultar-mensaje\");\n        }\n      }\n\n      document.querySelector(\".puntos\").querySelectorAll(\"img\")[0].remove();\n      --vidas;\n    } catch (error) {\n      console.log(error);\n    }\n  }; //Funcion para repartir las cartas aleatoriamente\n\n  distribuirCartas = function distribuirCartas(arr) {\n    try {\n      var i, j, temp;\n\n      for (i = arr.length - 1; i > 0; i--) {\n        j = Math.floor(Math.random() * (i + 1));\n        temp = arr[i];\n        arr[i] = arr[j];\n        arr[j] = temp;\n      }\n\n      return new Array().concat(arr);\n    } catch (error) {\n      console.log(error);\n    }\n  }, //Funcion para muestrar la hora\n  init = function init() {\n    try {\n      iniciarHora();\n      crearCartas();\n      var botones = document.querySelectorAll(\".btn\");\n\n      for (var i = 0; i < botones.length; i++) {\n        botones[i].addEventListener('click', function () {\n          location.reload(true);\n        }, false);\n      }\n    } catch (error) {\n      console.log(error);\n    }\n  };\n  return {\n    init: init,\n    clic: clic\n  };\n}();\n\nwindow.onload = juego.init();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbWF0Y2guanM/ODM2NSJdLCJuYW1lcyI6WyJub21icmVzIiwiZm90b3MiLCJqdWVnbyIsImkiLCJtdWplcmNpdGFzIiwibGVuZ3RoIiwicHVzaCIsIm5vbWJyZSIsImZvdG8iLCJudW1FbGVtZW50b3NNdWplcmVzIiwiaW1hZ2VuZXMiLCJBcnJheSIsImFycmF5ZGVzY3JpcGNpb24iLCJhcnJheW5vbWJyZXMiLCJpbmRleCIsIk1hdGgiLCJmbG9vciIsInJhbmRvbSIsImluZGV4T2YiLCJhbmltYWxlcyIsInZpZGFzIiwibGlzdGExIiwibGlzdGEyIiwiY3JlYXJDYXJ0YXMiLCJjb250ZW5lZG9yIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiaXRlbV9odG1sIiwiZGlzdHJpYnVpckNhcnRhcyIsImNhcnRhc19odG1sIiwicmVwbGFjZSIsIngiLCJpbm5lckhUTUwiLCJlcnJvciIsImNvbnNvbGUiLCJsb2ciLCJjbGljIiwiZWxlbWVudCIsImNhcnRhc19hY3RpdmFzIiwicXVlcnlTZWxlY3RvckFsbCIsImNsYXNzTGlzdCIsInJlbW92ZSIsInJlc3RhclZpZGFzIiwiZGF0YXNldCIsImluZGljZSIsImJhcmFqYSIsImFkZCIsIm1lbnNhamUiLCJjb250YWlucyIsImFsZXJ0IiwiYXJyIiwiaiIsInRlbXAiLCJjb25jYXQiLCJpbml0IiwiaW5pY2lhckhvcmEiLCJib3RvbmVzIiwiYWRkRXZlbnRMaXN0ZW5lciIsImxvY2F0aW9uIiwicmVsb2FkIiwid2luZG93Iiwib25sb2FkIl0sIm1hcHBpbmdzIjoiQUFBQztBQUVBLElBQUlBLE9BQU8sR0FBRyxFQUFkO0FBQ0EsSUFBSUMsS0FBSyxHQUFHLEVBQVosQyxDQUNBO0FBR0Q7O0FBQ0EsSUFBSUMsS0FBSyxHQUFJLFlBQVU7QUFFbkIsT0FBSUMsQ0FBQyxHQUFDLENBQU4sRUFBU0EsQ0FBQyxHQUFDQyxVQUFVLENBQUNDLE1BQXRCLEVBQThCRixDQUFD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VTtBQUMzQ0Msa0JBQVEsQ0FBQ0MsTUFBVCxDQUFnQixJQUFoQjtBQUNILFNBRkQsRUFFRSxLQUZGO0FBR0g7QUFDSixLQVZELENBV0EsT0FBTTFCLEtBQU4sRUFBWTtBQUNSQyxhQUFPLENBQUNDLEdBQVIsQ0FBWUYsS0FBWjtBQUNIO0FBQ0osR0EvQkQ7QUFpQ0EsU0FBTTtBQUNGcUIsUUFBSSxFQUFFQSxJQURKO0FBRUZsQixRQUFJLEVBQUVBO0FBRkosR0FBTjtBQUlILENBaktXLEVBQVo7O0FBa0tBd0IsTUFBTSxDQUFDQyxNQUFQLEdBQWdCM0QsS0FBSyxDQUFDb0QsSUFBTixFQUFoQiIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9tYXRjaC5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIiAvL2FsZXJ0KG11amVyY2l0YXNbMV0ubm9tYnJlKTtcclxuXHJcbiB2YXIgbm9tYnJlcyA9IFtdO1xyXG4gdmFyIGZvdG9zID0gW107XHJcbiAvL3ZhciBkZXNjcmlwY2lvbiA9IFtdO1xyXG4gXHJcblxyXG4vL1BhcnRlIGRlbCBKdWVnb1xyXG52YXIganVlZ28gPSAoZnVuY3Rpb24oKXtcclxuICAgIFxyXG4gICAgZm9yKGk9MDsgaTxtdWplcmNpdGFzLmxlbmd0aDsgaSsrKXtcclxuICAgICAgICAvL2RvY3VtZW50LndyaXRlKG11amVyY2l0YXNbaV0ubm9tYnJlKTtcclxuICAgICAgICBub21icmVzLnB1c2gobXVqZXJjaXRhc1tpXS5ub21icmUpO1xyXG4gICAgICAgIGZvdG9zLnB1c2gobXVqZXJjaXRhc1tpXS5mb3RvKTtcclxuICAgICAgICAvL2Rlc2NyaXBjaW9uLnB1c2gobXVqZXJjaXRhc1tpXS5ub21icmUpO1xyXG4gICAgfSBcclxuICAgIC8vQXJyYXkgY29tcGxldG8gZGUgYW5pbWFsZXNcclxuICAgICAgICAvL2FuaW1hbGVzID0gWydnYXRvLmpwZycsJ292ZWphLmpwZycsJ3BhdG8uanBnJywncGVycm8ucG5nJywndmFjYS5qcGcnLCdjYWJhbGxvLmpwZyddO1xyXG4gICAgLy9BcnJheSBjb21wbGV0byBkZSBsb3Mgbm9tYnJlcyBkZSBsb3MgYW5pbWFsZXNcclxuICAgICAgICAvL25vbWJyZXMgPSBbJ2dhdG8nLCdvdmVqYScsJ3BhdG8nLCdwZXJybycsJ3ZhY2EnLCdjYWJhbGxvJ107XHJcbiAgICAvL051bWVybyBkZSBlbGVtZW50b3MgZGVsIGFycmF5IGRlIGFuaW1hbGVzXHJcbiAgICBudW1FbGVtZW50b3NNdWplcmVzID0gbm9tYnJlcy5sZW5ndGgtMTtcclxuICAgIFxyXG4gICAgLy9EZWNsYXJvIG51ZXZvcyBhcnJheSB2YWNpb3MgY29uIGxvcyBxdWUgdm95IGEgdHJhYmFqYXJcclxuICAgIGltYWdlbmVzID0gbmV3IEFycmF5KCk7XHJcbiAgICBhcnJheWRlc2NyaXBjaW9uID0gbmV3IEFycmF5KCk7XHJcbiAgICBhcnJheW5vbWJyZXMgPSBuZXcgQXJyYXkoKTtcclxuICAgIGRve1xyXG4gICAgICAgIGluZGV4ID0gTWF0aC5mbG9vcihNYXRoLnJhbmRvbSgpICogKG51bUVsZW1lbnRvc011amVyZXMtMCsxKSkgKyAwO1xyXG4gICAgICAgIC8vTGxlbm8gbG9zIGFycmF5IHBlcm8gYW50ZXMgY29tcHJ1ZWJvIHNpIHRvZGF2aWEgbm8gdGllbmVuIGVsZW1lbnRvc1xyXG4gICAgICAgIGlmKGltYWdlbmVzLmluZGV4T2YoYW5pbWFsZXNbaW5kZXhdKT09LTEpe1xyXG4gICAgICAgICAgICBcclxuICAgICAgICAgICAgaW1hZ2VuZXMucHVzaChmb3Rvc1tpbmRleF0pO1xyXG4gICAgICAgICAgICBhcnJheW5vbWJyZXMucHVzaChub21icmVzW2luZGV4XSk7XHJcbiAgICAgICAgICAgIGFycmF5ZGVzY3JpcGNpb24ucHVzaChub21icmVzW2luZGV4XSk7XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG4gICAgd2hpbGUoaW1hZ2VuZXMubGVuZ3RoPDMpXHJcbiAgICBcclxuICAgIHZhciB2aWRhcyA9IDQsXHJcbiAgICBsaXN0YTEsbGlzdGEyO1xyXG4gICAgICAgIFxyXG4gICAgLy9GdW5jaW9uIHBhcmEgY3JlYXIgbGFzIGNhcnRhc1xyXG4gICAgY3JlYXJDYXJ0YXMgPSBmdW5jdGlvbigpe1xyXG4gICAgICAgIHRyeXtcclxuXHJcbiAgICAgICAgICAgIHZhciBjb250ZW5lZG9yID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5jb250ZW5lZG9yXCIpO1xyXG4gICAgICAgICAgICB2YXIgaXRlbV9odG1sID0gJzxkaXYgY2xhc3M9XCJpdGVtXCIgb25jbGljaz1cImp1ZWdvLmNsaWModGhpcylcIiBkYXRhLWJhcmFqYT1cIntiYXJhamF9XCIgZGF0YS1pbmRpY2U9XCJ7aW5kaWNlfVwiPjwvZGl2Pic7XHJcbiAgICAgICAgICBcclxuICAgICAgICAgICAgbGlzdGExID0gZGlzdHJpYnVpckNhcnRhcyhhcnJheW5vbWJyZXMpO1xyXG4gICAgICAgICAgICBsaXN0YTIgPSAoaW1hZ2VuZXMpO1xyXG5cclxuICAgICAgICAgICAgdmFyIGNhcnRhc19odG1sID0gXCJcIjtcclxuICAgICAgICAgICAgZm9yKHZhciBpID0gMDsgaTxhcnJheW5vbWJyZXMubGVuZ3RoOyBpKyspe1xyXG4gICAgICAgICAgICAgICAgLy9hcXVpIGNyZWFtb3MgbGFzIGNhcnRhcyBvY3VsdGFzIHkgc3VzdGl0dWltb3Mgc3VzIGluZGljZXMgY29uIGxvcyBub21icmVzIGRlIGxvcyBhbmltYWxlc1xyXG4gICAgICAgICAgICAgICAgY2FydGFzX2h0bWwgKz0gaXRlbV9odG1sLnJlcGxhY2UoXCJ7YmFyYWphfVwiLCAxKS5yZXBsYWNlKFwie2luZGljZX1cIixsaXN0YTFbaV0pO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIGZvcih4ID0gMDsgeCA8IGZvdG9zLmxlbmd0aDsgeCsrKXtcclxuICAgICAgICAgICAgICAgIC8vYXF1aSBjcmVhbW9zIGxhcyBjYXJ0YXMgY29uIGZvdG9zIGRlIGxvcyBhbmltYWxlcyBlIGluZGljZXMgc3VzIG5vbWJyZXNcclxuICAgICAgICAgICAgICAgIHZhciBpdGVtX2h0bWwgPSAnPGltZyBjbGFzcz1cIml0ZW1cIiBvbmNsaWNrPVwianVlZ28uY2xpYyh0aGlzKVwiIGRhdGEtYmFyYWphPVwie2JhcmFqYX1cIiBkYXRhLWluZGljZT1cIntpbmRpY2V9XCIgc3JjPVwiLi4vaW1hZ2UvJytpbWFnZW5lc1t4XSsnXCIgPic7XHJcbiAgICAgICAgICAgICAgICBjYXJ0YXNfaHRtbCArPSBpdGVtX2h0bWwucmVwbGFjZShcIntiYXJhamF9XCIsIDIpLnJlcGxhY2UoXCJ7aW5kaWNlfVwiLGFycmF5ZGVzY3JpcGNpb25beF0pO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIGNvbnRlbmVkb3IuaW5uZXJIVE1MID0gY2FydGFzX2h0bWw7XHJcbiAgICAgICAgICAgICBcclxuICAgICAgICB9Y2F0Y2goZXJyb3Ipe1xyXG4gICAgICAgICAgICBjb25zb2xlLmxvZyhlcnJvcik7XHJcbiAgICAgICAgfVxyXG4gICAgfSxcclxuICAgIC8vRnVuY2lvbiBwYXJhIGVqZWN1dGFyIGxhIGFjY2lvbiBwb3IgY2FkYSBjbGljayBxdWUgaGFjZW1vc1xyXG4gICAgY2xpYyA9IGZ1bmN0aW9uKGVsZW1lbnQpe1xyXG4gICAgICAgIHRyeXtcclxuXHJcbiAgICAgICAgICAgIHZhciBjYXJ0YXNfYWN0aXZhcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIuc2luLWZvbmRvLWl0ZW1cIik7XHJcbiAgICAgICAgICAgXHJcbiAgICAgICAgICAgIGlmKGNhcnRhc19hY3RpdmFzLmxlbmd0aCA9PSAyKXtcclxuICAgICAgICAgICAgICAgIGZvcih2YXIgaSA9IDA7IGkgPCBjYXJ0YXNfYWN0aXZhcy5sZW5ndGg7IGkrKyl7XHJcbiAgICAgICAgICAgICAgICAgICAgY2FydGFzX2FjdGl2YXNbaV0uY2xhc3NMaXN0LnJlbW92ZShcInNpbi1mb25kby1pdGVtXCIpO1xyXG4gICAgICAgICAgICAgICAgICAgIGNhcnRhc19hY3RpdmFzW2ldLmlubmVySFRNTCA9IFwiXCI7XHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICByZXN0YXJWaWRhcygpO1xyXG4gICAgICAgICAgICB9XHJcblxyXG4gICAgICAgICAgICBpZihjYXJ0YXNfYWN0aXZhcy5sZW5ndGggPT0gMSl7XHJcbiAgICAgICAgICAgICAgIGlmKGNhcnRhc19hY3RpdmFzWzBdLmRhdGFzZXQuaW5kaWNlID09IGVsZW1lbnQuZGF0YXNldC5pbmRpY2UgXHJcbiAgICAgICAgICAgICAgICAmJiBjYXJ0YXNfYWN0aXZhc1swXS5kYXRhc2V0LmJhcmFqYSAhPSBlbGVtZW50LmRhdGFzZXQuYmFyYWphICl7XHJcbiAgICAgICAgICAgICAgICBcclxuICAgICAgICAgICAgICAgICAgICBlbGVtZW50LmlubmVySFRNTCA9IFwiPHNwYW4gY2xhc3M9J251bWVyby1jYXJ0YSc+PC9zcGFuPlwiOyBcclxuICAgICAgICAgICAgICAgIGNhcnRhc19hY3RpdmFzWzBdLmNsYXNzTGlzdC5yZW1vdmUoXCJzaW4tZm9uZG8taXRlbVwiKTtcclxuICAgICAgICAgICAgICAgIGNhcnRhc19hY3RpdmFzWzBdLmNsYXNzTGlzdC5hZGQoXCJjaGVja2VkLWl0ZW1cIik7XHJcbiAgICAgICAgICAgICAgICBlbGVtZW50LmNsYXNzTGlzdC5hZGQoXCJjaGVja2VkLWl0ZW1cIik7XHJcbiAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgZWxzZXtcclxuICAgICAgICAgICAgICAgICAgICBlbGVtZW50LmNsYXNzTGlzdC5hZGQoXCJzaW4tZm9uZG8taXRlbVwiKTtcclxuICAgICAgICAgICAgICAgICAgICBlbGVtZW50LmlubmVySFRNTCA9IFwiPHNwYW4gY2xhc3M9J251bWVyby1jYXJ0YSc+XCIgKyBlbGVtZW50LmRhdGFzZXQuaW5kaWNlICsgXCI8L3NwYW4+XCI7XHJcbiAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgICAgICBlbGVtZW50LmNsYXNzTGlzdC5hZGQoXCJzaW4tZm9uZG8taXRlbVwiKTtcclxuICAgICAgICAgICAgICAgIGVsZW1lbnQuaW5uZXJIVE1MID0gXCI8c3BhbiBjbGFzcz0nbnVtZXJvLWNhcnRhJz5cIiArIGVsZW1lbnQuZGF0YXNldC5pbmRpY2UgICsgXCI8L3NwYW4+XCI7XHJcbiAgICAgICAgICAgICAgICAgICBcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgLy9TaSB0b2RhcyBjYXJ0YXMgZXN0YW4gdmVyaWZpY2FkYXMsIG5vcyBzYWNhIGVsIG1lbnNhamUgZGUgdmljdG9yaWFcclxuICAgICAgICAgICAgaWYoIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIuY2hlY2tlZC1pdGVtXCIpLmxlbmd0aCA9PSAoYXJyYXlub21icmVzLmxlbmd0aCkqMiApe1xyXG4gICAgICAgICAgICAgICAgICAgIHZhciBtZW5zYWplID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIiNjb250ZW5lZG9yLW1lbnNhamUtdmljdG9yaWFcIik7XHJcbiAgICAgICAgICAgICAgICBpZihtZW5zYWplLmNsYXNzTGlzdC5jb250YWlucyhcIm9jdWx0YXItbWVuc2FqZVwiKSl7XHJcbiAgICAgICAgICAgICAgICAgICAgbWVuc2FqZS5jbGFzc0xpc3QucmVtb3ZlKFwib2N1bHRhci1tZW5zYWplXCIpO1xyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBcclxuICAgICAgICAgICAgfVxyXG5cclxuXHJcbiAgICAgICAgfWNhdGNoKGVycm9yKXtcclxuICAgICAgICAgICAgY29uc29sZS5sb2coZXJyb3IpO1xyXG4gICAgICAgIH1cclxuICAgIH0sXHJcbiAgICAvL2Z1bmNpb24gcGFyYSByZXN0YXIgbGFzIHZpZGFzIHBvciBjYWRhIGZhbGxvIHF1ZSBjb21ldGVtb3NcclxuICAgIHJlc3RhclZpZGFzID0gZnVuY3Rpb24oKXtcclxuICAgICAgICB0cnl7XHJcbiAgICAgICAgICAgIGlmKHZpZGFzID09IDEpe1xyXG4gICAgICAgICAgICAgICAgYWxlcnQoXCJIYXMgc2lkbyBlbGltaW5hZG9cIik7XHJcbiAgICAgICAgICAgICAgICB2YXIgbWVuc2FqZSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjY29udGVuZWRvci1tZW5zYWplLWRlcnJvdGFcIik7XHJcbiAgICAgICAgICAgICAgIGlmKG1lbnNhamUuY2xhc3NMaXN0LmNvbnRhaW5zKFwib2N1bHRhci1tZW5zYWplXCIpKXtcclxuICAgICAgICAgICAgICAgICAgICBtZW5zYWplLmNsYXNzTGlzdC5yZW1vdmUoXCJvY3VsdGFyLW1lbnNhamVcIik7XHJcbiAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLnB1bnRvc1wiKS5xdWVyeVNlbGVjdG9yQWxsKFwiaW1nXCIpWzBdLnJlbW92ZSgpO1xyXG4gICAgICAgICAgICAtLXZpZGFzO1xyXG5cclxuICAgICAgICB9Y2F0Y2goZXJyb3Ipe1xyXG4gICAgICAgICAgICBjb25zb2xlLmxvZyhlcnJvcik7XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG4gICAgLy9GdW5jaW9uIHBhcmEgcmVwYXJ0aXIgbGFzIGNhcnRhcyBhbGVhdG9yaWFtZW50ZVxyXG4gICAgZGlzdHJpYnVpckNhcnRhcyA9IGZ1bmN0aW9uKGFycikge1xyXG4gICAgICAgIHRyeXtcclxuICAgICAgICAgICAgIHZhciBpLGosIHRlbXA7XHJcbiAgICAgICAgICAgICBmb3IoaSA9IGFyci5sZW5ndGggLSAxOyBpID4gMDsgaS0tKXtcclxuICAgICAgICAgICAgICAgICBqID0gTWF0aC5mbG9vcihNYXRoLnJhbmRvbSgpICogKGkgKyAxKSk7XHJcbiAgICAgICAgICAgICAgICAgdGVtcCA9IGFycltpXTtcclxuICAgICAgICAgICAgICAgICBhcnJbaV0gPSBhcnJbal07XHJcbiAgICAgICAgICAgICAgICAgYXJyW2pdID0gdGVtcDtcclxuICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgIHJldHVybiBuZXcgQXJyYXkoKS5jb25jYXQoYXJyKTtcclxuICAgICAgICB9Y2F0Y2goZXJyb3Ipe1xyXG4gICAgICAgICAgICAgY29uc29sZS5sb2coZXJyb3IpO1xyXG4gICAgICAgIH1cclxuICAgICB9LFxyXG4gICAgLy9GdW5jaW9uIHBhcmEgbXVlc3RyYXIgbGEgaG9yYVxyXG4gICAgXHJcbiAgICBpbml0ID0gZnVuY3Rpb24oKXtcclxuICAgICAgICB0cnl7XHJcbiAgICAgICAgICBcclxuICAgICAgICAgICAgaW5pY2lhckhvcmEoKTtcclxuICAgICAgICAgICAgY3JlYXJDYXJ0YXMoKTtcclxuICAgICAgICAgICAgdmFyIGJvdG9uZXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKFwiLmJ0blwiKTtcclxuICAgICAgICAgICAgZm9yKHZhciBpID0gMDsgaTxib3RvbmVzLmxlbmd0aDsgaSsrKXtcclxuICAgICAgICAgICAgICAgIGJvdG9uZXNbaV0uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbigpe1xyXG4gICAgICAgICAgICAgICAgICAgIGxvY2F0aW9uLnJlbG9hZCh0cnVlKTtcclxuICAgICAgICAgICAgICAgIH0sZmFsc2UpXHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9XHJcbiAgICAgICAgY2F0Y2goZXJyb3Ipe1xyXG4gICAgICAgICAgICBjb25zb2xlLmxvZyhlcnJvcik7XHJcbiAgICAgICAgfVxyXG4gICAgfTtcclxuXHJcbiAgICByZXR1cm57XHJcbiAgICAgICAgaW5pdDogaW5pdCxcclxuICAgICAgICBjbGljOiBjbGljXHJcbiAgICB9XHJcbn0pKCk7XHJcbndpbmRvdy5vbmxvYWQgPSBqdWVnby5pbml0KCk7ICJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/match.js\n");

/***/ }),

/***/ 2:
/*!*************************************!*\
  !*** multi ./resources/js/match.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\DAW2Reto2\resources\js\match.js */"./resources/js/match.js");


/***/ })

/******/ });