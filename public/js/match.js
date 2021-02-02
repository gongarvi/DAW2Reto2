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
/******/ 	return __webpack_require__(__webpack_require__.s = 9);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/match.js":
/*!*******************************!*\
  !*** ./resources/js/match.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("//alert(mujercitas[1].nombre);\nvar nombresM = [];\nvar fotosM = [];\nvar mujercitas = JSON.parse(localStorage.getItem(\"mujeres\"));\n\nfor (i = 0; i < mujercitas.length; i++) {\n  nombresM.push(mujercitas[i].nombre + \" \" + mujercitas[i].apellidos);\n  fotosM.push(mujercitas[i].foto);\n} //Parte del Juego\n\n\nvar juego;\n\njuego = function () {\n  numElementos = fotosM.length - 1;\n  imagenes = new Array();\n  arraydescripcion = new Array();\n  arraynombres = new Array();\n\n  do {\n    index = Math.floor(Math.random() * (numElementos - 0 + 1)) + 0;\n\n    if (index <= numElementos && imagenes.indexOf(fotosM[index]) == -1) {\n      imagenes.push(fotosM[index]);\n      arraynombres.push(nombresM[index]);\n      arraydescripcion.push(nombresM[index]);\n    }\n  } while (imagenes.length < numElementos);\n\n  var vidas = 6,\n      lista1,\n      lista2; //Funcion para crear las cartas\n\n  crearCartas = function crearCartas() {\n    try {\n      //var contenedor = document.querySelector('.contenedor');\n      var nombres = document.querySelector('.nombres');\n      var fotos = document.querySelector('.fotos');\n      var item_html = '<div class=\"item\" onclick=\"clic(this)\" data-baraja=\"{baraja}\" data-indice=\"{indice}\"></div>';\n      lista1 = distribuirCartas(arraynombres);\n      lista2 = imagenes;\n      var cartas_html1 = \"\";\n      var cartas_html2 = \"\";\n\n      for (var i = 0; i < arraynombres.length; i++) {\n        //aqui creamos las cartas ocultas y sustituimos sus indices con los nombres de los animales\n        cartas_html1 += item_html.replace(\"{baraja}\", 1).replace(\"{indice}\", lista1[i]);\n      }\n\n      for (x = 0; x < imagenes.length; x++) {\n        //aqui creamos las cartas con fotos de los animales e indices sus nombres\n        var item_html = '<img class=\"item\" onclick=\"clic(this)\" data-baraja=\"{baraja}\" data-indice=\"{indice}\" src=\"../assets/Fotos_mujeres/' + imagenes[x] + '\" height=\"100px\" >';\n        cartas_html2 += item_html.replace(\"{baraja}\", 2).replace(\"{indice}\", arraydescripcion[x]);\n      } //contenedor.innerHTML = cartas_html;\n\n\n      nombres.innerHTML = cartas_html1;\n      fotos.innerHTML = cartas_html2;\n    } catch (error) {\n      console.log(error);\n    }\n  }, //Funcion para ejecutar la accion por cada click que hacemos\n  clic = function clic(element) {\n    try {\n      var cartas_activas = document.querySelectorAll(\".sin-fondo-item\");\n\n      if (cartas_activas.length == 2) {\n        for (var i = 0; i < cartas_activas.length; i++) {\n          cartas_activas[i].classList.remove(\"sin-fondo-item\");\n          cartas_activas[i].innerHTML = \"\";\n        }\n\n        restarVidas();\n      }\n\n      if (cartas_activas.length == 1) {\n        if (cartas_activas[0].dataset.indice == element.dataset.indice && cartas_activas[0].dataset.baraja != element.dataset.baraja) {\n          element.innerHTML = \"<span class='numero-carta'></span>\";\n          cartas_activas[0].classList.remove(\"sin-fondo-item\");\n          cartas_activas[0].classList.add(\"checked-item\");\n          element.classList.add(\"checked-item\");\n        } else {\n          element.classList.add(\"sin-fondo-item\");\n          element.innerHTML = \"<span class='numero-carta'>\" + element.dataset.indice + \"</span>\";\n        }\n      } else {\n        element.classList.add(\"sin-fondo-item\");\n        element.innerHTML = \"<span class='numero-carta'>\" + element.dataset.indice + \"</span>\";\n      } //Si todas cartas estan verificadas, nos saca el mensaje de victoria\n\n\n      if (document.querySelectorAll(\".checked-item\").length == arraynombres.length * 2) {\n        var mensaje = document.querySelector(\"#contenedor-mensaje-victoria\");\n\n        if (mensaje.classList.contains(\"ocultar-mensaje\")) {\n          mensaje.classList.remove(\"ocultar-mensaje\");\n        }\n\n        window.$(\"#guardar\").click(function (evt) {\n          console.log(\"va ha cerrar\");\n          window.location.href = '/juegos';\n          $arrayMujeresAGuardar = new Array();\n\n          for (var i = 0; mujercitas.length > i; i++) {\n            $arrayMujeresAGuardar.push(mujercitas[i].id);\n            console.log(\"puseando mujer\");\n          }\n\n          window.location.href = '/guardarmujerperfil/' + $arrayMujeresAGuardar;\n          console.log(\"¡¡HAS GANADO!!\");\n        });\n      }\n    } catch (error) {\n      console.log(error);\n    }\n  }, //funcion para restar las vidas por cada fallo que cometemos\n  restarVidas = function restarVidas() {\n    try {\n      if (vidas == 1) {\n        var mensaje = document.querySelector(\"#contenedor-mensaje-derrota\");\n\n        if (mensaje.classList.contains(\"ocultar-mensaje\")) {\n          mensaje.classList.remove(\"ocultar-mensaje\");\n        }\n      }\n\n      document.querySelector(\".puntos\").querySelectorAll(\"img\")[0].remove();\n      --vidas;\n    } catch (error) {\n      console.log(error);\n    }\n  }; //Funcion para repartir las cartas aleatoriamente\n\n  distribuirCartas = function distribuirCartas(arr) {\n    try {\n      var i, j, temp;\n\n      for (i = arr.length - 1; i > 0; i--) {\n        j = Math.floor(Math.random() * (i + 1));\n        temp = arr[i];\n        arr[i] = arr[j];\n        arr[j] = temp;\n      }\n\n      return new Array().concat(arr);\n    } catch (error) {\n      console.log(error);\n    }\n  }, init = function init() {\n    try {\n      crearCartas();\n      var botones = document.querySelectorAll(\".btn\");\n\n      for (var i = 0; i < botones.length; i++) {\n        botones[i].addEventListener('click', function () {\n          location.reload(true);\n        }, false);\n      }\n    } catch (error) {\n      console.log(error);\n    }\n  };\n  return {\n    init: init,\n    clic: clic\n  };\n}();\n\nwindow.onload = juego.init();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbWF0Y2guanM/ODM2NSJdLCJuYW1lcyI6WyJub21icmVzTSIsImZvdG9zTSIsIm11amVyY2l0YXMiLCJKU09OIiwicGFyc2UiLCJsb2NhbFN0b3JhZ2UiLCJnZXRJdGVtIiwiaSIsImxlbmd0aCIsInB1c2giLCJub21icmUiLCJhcGVsbGlkb3MiLCJmb3RvIiwianVlZ28iLCJudW1FbGVtZW50b3MiLCJpbWFnZW5lcyIsIkFycmF5IiwiYXJyYXlkZXNjcmlwY2lvbiIsImFycmF5bm9tYnJlcyIsImluZGV4IiwiTWF0aCIsImZsb29yIiwicmFuZG9tIiwiaW5kZXhPZiIsInZpZGFzIiwibGlzdGExIiwibGlzdGEyIiwiY3JlYXJDYXJ0YXMiLCJub21icmVzIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiZm90b3MiLCJpdGVtX2h0bWwiLCJkaXN0cmlidWlyQ2FydGFzIiwiY2FydGFzX2h0bWwxIiwiY2FydGFzX2h0bWwyIiwicmVwbGFjZSIsIngiLCJpbm5lckhUTUwiLCJlcnJvciIsImNvbnNvbGUiLCJsb2ciLCJjbGljIiwiZWxlbWVudCIsImNhcnRhc19hY3RpdmFzIiwicXVlcnlTZWxlY3RvckFsbCIsImNsYXNzTGlzdCIsInJlbW92ZSIsInJlc3RhclZpZGFzIiwiZGF0YXNldCIsImluZGljZSIsImJhcmFqYSIsImFkZCIsIm1lbnNhamUiLCJjb250YWlucyIsIndpbmRvdyIsIiQiLCJjbGljayIsImV2dCIsImxvY2F0aW9uIiwiaHJlZiIsIiRhcnJheU11amVyZXNBR3VhcmRhciIsImlkIiwiYXJyIiwiaiIsInRlbXAiLCJjb25jYXQiLCJpbml0IiwiYm90b25lcyIsImFkZEV2ZW50TGlzdGVuZXIiLCJyZWxvYWQiLCJvbmxvYWQiXSwibWFwcGluZ3MiOiJBQUFDO0FBQ0csSUFBSUEsUUFBUSxHQUFHLEVBQWY7QUFDQSxJQUFJQyxNQUFNLEdBQUcsRUFBYjtBQUVBLElBQUlDLFVBQVUsR0FBQ0Ms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Q0osR0E3QkQ7QUErQkEsU0FBTTtBQUNGNEIsUUFBSSxFQUFFQSxJQURKO0FBRUZ6QixRQUFJLEVBQUVBO0FBRkosR0FBTjtBQUlILENBbEtVLEVBQVI7O0FBa0tFYSxNQUFNLENBQUNnQixNQUFQLEdBQWdCMUQsS0FBSyxDQUFDc0QsSUFBTixFQUFoQiIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy9tYXRjaC5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIiAvL2FsZXJ0KG11amVyY2l0YXNbMV0ubm9tYnJlKTtcclxuICAgIHZhciBub21icmVzTSA9IFtdO1xyXG4gICAgdmFyIGZvdG9zTSA9IFtdO1xyXG5cclxuICAgIHZhciBtdWplcmNpdGFzPUpTT04ucGFyc2UobG9jYWxTdG9yYWdlLmdldEl0ZW0oXCJtdWplcmVzXCIpKTtcclxuXHJcblxyXG4gICAgZm9yKGk9MDsgaTxtdWplcmNpdGFzLmxlbmd0aDsgaSsrKXtcclxuXHJcbiAgICAgICAgbm9tYnJlc00ucHVzaChtdWplcmNpdGFzW2ldLm5vbWJyZStcIiBcIittdWplcmNpdGFzW2ldLmFwZWxsaWRvcyk7XHJcbiAgICAgICAgZm90b3NNLnB1c2gobXVqZXJjaXRhc1tpXS5mb3RvKTtcclxuXHJcbiAgICB9XHJcbiAgICAvL1BhcnRlIGRlbCBKdWVnb1xyXG4gICAgdmFyIGp1ZWdvO1xyXG4gICBqdWVnbyA9IChmdW5jdGlvbigpe1xyXG4gICAgICAgIG51bUVsZW1lbnRvcyA9IGZvdG9zTS5sZW5ndGgtMTtcclxuXHJcbiAgICAgICAgaW1hZ2VuZXMgPSBuZXcgQXJyYXkoKTtcclxuICAgICAgICBhcnJheWRlc2NyaXBjaW9uID0gbmV3IEFycmF5KCk7XHJcbiAgICAgICAgYXJyYXlub21icmVzID0gbmV3IEFycmF5KCk7XHJcbiAgICAgICAgZG97XHJcbiAgICAgICAgICAgIGluZGV4ID0gTWF0aC5mbG9vcihNYXRoLnJhbmRvbSgpICogKG51bUVsZW1lbnRvcy0wKzEpKSArIDA7XHJcbiAgICAgICAgICAgIGlmKGluZGV4PD1udW1FbGVtZW50b3MgJiYgaW1hZ2VuZXMuaW5kZXhPZihmb3Rvc01baW5kZXhdKSA9PSAtMSl7XHJcblxyXG4gICAgICAgICAgICAgICAgaW1hZ2VuZXMucHVzaChmb3Rvc01baW5kZXhdKTtcclxuICAgICAgICAgICAgICAgIGFycmF5bm9tYnJlcy5wdXNoKG5vbWJyZXNNW2luZGV4XSk7XHJcbiAgICAgICAgICAgICAgICBhcnJheWRlc2NyaXBjaW9uLnB1c2gobm9tYnJlc01baW5kZXhdKTtcclxuICAgICAgICAgICAgfVxyXG5cclxuICAgICAgICB9XHJcbiAgICAgICAgd2hpbGUoaW1hZ2VuZXMubGVuZ3RoPG51bUVsZW1lbnRvcyk7XHJcbiAgICB2YXIgdmlkYXMgPSA2LFxyXG4gICAgbGlzdGExLGxpc3RhMjtcclxuXHJcbiAgICAvL0Z1bmNpb24gcGFyYSBjcmVhciBsYXMgY2FydGFzXHJcbiAgICBjcmVhckNhcnRhcyA9IGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgdHJ5e1xyXG5cclxuICAgICAgICAgICAgLy92YXIgY29udGVuZWRvciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5jb250ZW5lZG9yJyk7XHJcbiAgICAgICAgICAgIHZhciBub21icmVzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLm5vbWJyZXMnKTtcclxuICAgICAgICAgICAgdmFyIGZvdG9zID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLmZvdG9zJyk7XHJcbiAgICAgICAgICAgIHZhciBpdGVtX2h0bWwgPSAnPGRpdiBjbGFzcz1cIml0ZW1cIiBvbmNsaWNrPVwiY2xpYyh0aGlzKVwiIGRhdGEtYmFyYWphPVwie2JhcmFqYX1cIiBkYXRhLWluZGljZT1cIntpbmRpY2V9XCI+PC9kaXY+JztcclxuXHJcbiAgICAgICAgICAgIGxpc3RhMSA9IGRpc3RyaWJ1aXJDYXJ0YXMoYXJyYXlub21icmVzKTtcclxuICAgICAgICAgICAgbGlzdGEyID0gKGltYWdlbmVzKTtcclxuXHJcbiAgICAgICAgICAgIHZhciBjYXJ0YXNfaHRtbDEgPSBcIlwiO1xyXG4gICAgICAgICAgICB2YXIgY2FydGFzX2h0bWwyID0gXCJcIjtcclxuICAgICAgICAgICAgZm9yKHZhciBpID0gMDsgaTxhcnJheW5vbWJyZXMubGVuZ3RoOyBpKyspe1xyXG4gICAgICAgICAgICAgICAgLy9hcXVpIGNyZWFtb3MgbGFzIGNhcnRhcyBvY3VsdGFzIHkgc3VzdGl0dWltb3Mgc3VzIGluZGljZXMgY29uIGxvcyBub21icmVzIGRlIGxvcyBhbmltYWxlc1xyXG4gICAgICAgICAgICAgICAgY2FydGFzX2h0bWwxICs9IGl0ZW1faHRtbC5yZXBsYWNlKFwie2JhcmFqYX1cIiwgMSkucmVwbGFjZShcIntpbmRpY2V9XCIsbGlzdGExW2ldKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBmb3IoeCA9IDA7IHggPCBpbWFnZW5lcy5sZW5ndGg7IHgrKyl7XHJcbiAgICAgICAgICAgICAgICAvL2FxdWkgY3JlYW1vcyBsYXMgY2FydGFzIGNvbiBmb3RvcyBkZSBsb3MgYW5pbWFsZXMgZSBpbmRpY2VzIHN1cyBub21icmVzXHJcbiAgICAgICAgICAgICAgICB2YXIgaXRlbV9odG1sID0gJzxpbWcgY2xhc3M9XCJpdGVtXCIgb25jbGljaz1cImNsaWModGhpcylcIiBkYXRhLWJhcmFqYT1cIntiYXJhamF9XCIgZGF0YS1pbmRpY2U9XCJ7aW5kaWNlfVwiIHNyYz1cIi4uL2Fzc2V0cy9Gb3Rvc19tdWplcmVzLycraW1hZ2VuZXNbeF0rJ1wiIGhlaWdodD1cIjEwMHB4XCIgPic7XHJcbiAgICAgICAgICAgICAgICBjYXJ0YXNfaHRtbDIgKz0gaXRlbV9odG1sLnJlcGxhY2UoXCJ7YmFyYWphfVwiLCAyKS5yZXBsYWNlKFwie2luZGljZX1cIixhcnJheWRlc2NyaXBjaW9uW3hdKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAvL2NvbnRlbmVkb3IuaW5uZXJIVE1MID0gY2FydGFzX2h0bWw7XHJcbiAgICAgICAgICAgIG5vbWJyZXMuaW5uZXJIVE1MID0gY2FydGFzX2h0bWwxO1xyXG4gICAgICAgICAgICBmb3Rvcy5pbm5lckhUTUwgPSBjYXJ0YXNfaHRtbDI7XHJcblxyXG4gICAgICAgIH1jYXRjaChlcnJvcil7XHJcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKGVycm9yKTtcclxuICAgICAgICB9XHJcbiAgICB9LFxyXG4gICAgLy9GdW5jaW9uIHBhcmEgZWplY3V0YXIgbGEgYWNjaW9uIHBvciBjYWRhIGNsaWNrIHF1ZSBoYWNlbW9zXHJcbiAgICBjbGljID0gZnVuY3Rpb24oZWxlbWVudCl7XHJcbiAgICAgICAgdHJ5e1xyXG4gICAgICAgICAgICBcclxuICAgICAgICAgICAgdmFyIGNhcnRhc19hY3RpdmFzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi5zaW4tZm9uZG8taXRlbVwiKTtcclxuXHJcbiAgICAgICAgICAgIGlmKGNhcnRhc19hY3RpdmFzLmxlbmd0aCA9PSAyKXtcclxuICAgICAgICAgICAgICAgIGZvcih2YXIgaSA9IDA7IGkgPCBjYXJ0YXNfYWN0aXZhcy5sZW5ndGg7IGkrKyl7XHJcbiAgICAgICAgICAgICAgICAgICAgY2FydGFzX2FjdGl2YXNbaV0uY2xhc3NMaXN0LnJlbW92ZShcInNpbi1mb25kby1pdGVtXCIpO1xyXG4gICAgICAgICAgICAgICAgICAgIGNhcnRhc19hY3RpdmFzW2ldLmlubmVySFRNTCA9IFwiXCI7XHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICByZXN0YXJWaWRhcygpO1xyXG4gICAgICAgICAgICB9XHJcblxyXG4gICAgICAgICAgICBpZihjYXJ0YXNfYWN0aXZhcy5sZW5ndGggPT0gMSl7XHJcbiAgICAgICAgICAgICAgIGlmKGNhcnRhc19hY3RpdmFzWzBdLmRhdGFzZXQuaW5kaWNlID09IGVsZW1lbnQuZGF0YXNldC5pbmRpY2VcclxuICAgICAgICAgICAgICAgICYmIGNhcnRhc19hY3RpdmFzWzBdLmRhdGFzZXQuYmFyYWphICE9IGVsZW1lbnQuZGF0YXNldC5iYXJhamEgKXtcclxuXHJcbiAgICAgICAgICAgICAgICAgICAgZWxlbWVudC5pbm5lckhUTUwgPSBcIjxzcGFuIGNsYXNzPSdudW1lcm8tY2FydGEnPjwvc3Bhbj5cIjtcclxuICAgICAgICAgICAgICAgIGNhcnRhc19hY3RpdmFzWzBdLmNsYXNzTGlzdC5yZW1vdmUoXCJzaW4tZm9uZG8taXRlbVwiKTtcclxuICAgICAgICAgICAgICAgIGNhcnRhc19hY3RpdmFzWzBdLmNsYXNzTGlzdC5hZGQoXCJjaGVja2VkLWl0ZW1cIik7XHJcbiAgICAgICAgICAgICAgICBlbGVtZW50LmNsYXNzTGlzdC5hZGQoXCJjaGVja2VkLWl0ZW1cIik7XHJcbiAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgZWxzZXtcclxuICAgICAgICAgICAgICAgICAgICBlbGVtZW50LmNsYXNzTGlzdC5hZGQoXCJzaW4tZm9uZG8taXRlbVwiKTtcclxuICAgICAgICAgICAgICAgICAgICBlbGVtZW50LmlubmVySFRNTCA9IFwiPHNwYW4gY2xhc3M9J251bWVyby1jYXJ0YSc+XCIgKyBlbGVtZW50LmRhdGFzZXQuaW5kaWNlICsgXCI8L3NwYW4+XCI7XHJcbiAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfWVsc2V7XHJcbiAgICAgICAgICAgICAgICBlbGVtZW50LmNsYXNzTGlzdC5hZGQoXCJzaW4tZm9uZG8taXRlbVwiKTtcclxuICAgICAgICAgICAgICAgIGVsZW1lbnQuaW5uZXJIVE1MID0gXCI8c3BhbiBjbGFzcz0nbnVtZXJvLWNhcnRhJz5cIiArIGVsZW1lbnQuZGF0YXNldC5pbmRpY2UgICsgXCI8L3NwYW4+XCI7XHJcblxyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICAvL1NpIHRvZGFzIGNhcnRhcyBlc3RhbiB2ZXJpZmljYWRhcywgbm9zIHNhY2EgZWwgbWVuc2FqZSBkZSB2aWN0b3JpYVxyXG4gICAgICAgICAgICBpZiggZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi5jaGVja2VkLWl0ZW1cIikubGVuZ3RoID09IChhcnJheW5vbWJyZXMubGVuZ3RoKSoyICl7XHJcbiAgICAgICAgICAgICAgICAgICAgdmFyIG1lbnNhamUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI2NvbnRlbmVkb3ItbWVuc2FqZS12aWN0b3JpYVwiKTtcclxuICAgICAgICAgICAgICAgIGlmKG1lbnNhamUuY2xhc3NMaXN0LmNvbnRhaW5zKFwib2N1bHRhci1tZW5zYWplXCIpKXtcclxuICAgICAgICAgICAgICAgICAgICBtZW5zYWplLmNsYXNzTGlzdC5yZW1vdmUoXCJvY3VsdGFyLW1lbnNhamVcIik7XHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICAgICB3aW5kb3cuJChcIiNndWFyZGFyXCIpLmNsaWNrKGZ1bmN0aW9uIChldnQpIHtcclxuICAgICAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhcInZhIGhhIGNlcnJhclwiKTtcclxuICAgICAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9ICcvanVlZ29zJztcclxuICAgICAgICAgIFxyXG4gICAgICAgICAgICAgICAgICAgICRhcnJheU11amVyZXNBR3VhcmRhciA9IG5ldyBBcnJheSgpO1xyXG4gICAgICAgICAgICAgICAgICAgIGZvciAodmFyIGkgPSAwOyBtdWplcmNpdGFzLmxlbmd0aCA+IGk7IGkrKykge1xyXG4gICAgICAgICAgICAgICAgICAgICAgJGFycmF5TXVqZXJlc0FHdWFyZGFyLnB1c2gobXVqZXJjaXRhc1tpXS5pZCk7XHJcbiAgICAgICAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhcInB1c2VhbmRvIG11amVyXCIpO1xyXG4gICAgICAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24uaHJlZiA9ICcvZ3VhcmRhcm11amVycGVyZmlsLycgKyAkYXJyYXlNdWplcmVzQUd1YXJkYXI7XHJcbiAgICAgICAgICAgICAgICAgICAgY29uc29sZS5sb2coXCLCocKhSEFTIEdBTkFETyEhXCIpO1xyXG4gICAgICAgICAgICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgICAgIH1cclxuXHJcblxyXG4gICAgICAgIH1jYXRjaChlcnJvcil7XHJcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKGVycm9yKTtcclxuICAgICAgICB9XHJcbiAgICB9LFxyXG4gICAgLy9mdW5jaW9uIHBhcmEgcmVzdGFyIGxhcyB2aWRhcyBwb3IgY2FkYSBmYWxsbyBxdWUgY29tZXRlbW9zXHJcbiAgICByZXN0YXJWaWRhcyA9IGZ1bmN0aW9uKCl7XHJcbiAgICAgICAgdHJ5e1xyXG4gICAgICAgICAgICBpZih2aWRhcyA9PSAxKXtcclxuXHJcbiAgICAgICAgICAgICAgICB2YXIgbWVuc2FqZSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjY29udGVuZWRvci1tZW5zYWplLWRlcnJvdGFcIik7XHJcbiAgICAgICAgICAgICAgIGlmKG1lbnNhamUuY2xhc3NMaXN0LmNvbnRhaW5zKFwib2N1bHRhci1tZW5zYWplXCIpKXtcclxuICAgICAgICAgICAgICAgICAgICBtZW5zYWplLmNsYXNzTGlzdC5yZW1vdmUoXCJvY3VsdGFyLW1lbnNhamVcIik7XHJcbiAgICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLnB1bnRvc1wiKS5xdWVyeVNlbGVjdG9yQWxsKFwiaW1nXCIpWzBdLnJlbW92ZSgpO1xyXG4gICAgICAgICAgICAtLXZpZGFzO1xyXG5cclxuICAgICAgICB9Y2F0Y2goZXJyb3Ipe1xyXG4gICAgICAgICAgICBjb25zb2xlLmxvZyhlcnJvcik7XHJcbiAgICAgICAgfVxyXG4gICAgfVxyXG4gICAgLy9GdW5jaW9uIHBhcmEgcmVwYXJ0aXIgbGFzIGNhcnRhcyBhbGVhdG9yaWFtZW50ZVxyXG4gICAgZGlzdHJpYnVpckNhcnRhcyA9IGZ1bmN0aW9uKGFycikge1xyXG4gICAgICAgIHRyeXtcclxuICAgICAgICAgICAgIHZhciBpLGosIHRlbXA7XHJcbiAgICAgICAgICAgICBmb3IoaSA9IGFyci5sZW5ndGggLSAxOyBpID4gMDsgaS0tKXtcclxuICAgICAgICAgICAgICAgICBqID0gTWF0aC5mbG9vcihNYXRoLnJhbmRvbSgpICogKGkgKyAxKSk7XHJcbiAgICAgICAgICAgICAgICAgdGVtcCA9IGFycltpXTtcclxuICAgICAgICAgICAgICAgICBhcnJbaV0gPSBhcnJbal07XHJcbiAgICAgICAgICAgICAgICAgYXJyW2pdID0gdGVtcDtcclxuICAgICAgICAgICAgIH1cclxuICAgICAgICAgICAgIHJldHVybiBuZXcgQXJyYXkoKS5jb25jYXQoYXJyKTtcclxuICAgICAgICB9Y2F0Y2goZXJyb3Ipe1xyXG4gICAgICAgICAgICAgY29uc29sZS5sb2coZXJyb3IpO1xyXG4gICAgICAgIH1cclxuICAgICB9LFxyXG5cclxuICAgIGluaXQgPSBmdW5jdGlvbigpe1xyXG4gICAgICAgIHRyeXtcclxuXHJcbiAgICAgICAgICAgIGNyZWFyQ2FydGFzKCk7XHJcbiAgICAgICAgICAgIHZhciBib3RvbmVzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChcIi5idG5cIik7XHJcbiAgICAgICAgICAgIGZvcih2YXIgaSA9IDA7IGk8Ym90b25lcy5sZW5ndGg7IGkrKyl7XHJcbiAgICAgICAgICAgICAgICBib3RvbmVzW2ldLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24oKXtcclxuICAgICAgICAgICAgICAgICAgICBsb2NhdGlvbi5yZWxvYWQodHJ1ZSk7XHJcbiAgICAgICAgICAgICAgICB9LGZhbHNlKVxyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfVxyXG4gICAgICAgIGNhdGNoKGVycm9yKXtcclxuICAgICAgICAgICAgY29uc29sZS5sb2coZXJyb3IpO1xyXG4gICAgICAgIH1cclxuICAgIH07XHJcblxyXG4gICAgcmV0dXJue1xyXG4gICAgICAgIGluaXQ6IGluaXQsXHJcbiAgICAgICAgY2xpYzogY2xpY1xyXG4gICAgfVxyXG59KSgpO3dpbmRvdy5vbmxvYWQgPSBqdWVnby5pbml0KCk7XHJcblxyXG5cclxuXHJcblxyXG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/match.js\n");

/***/ }),

/***/ 9:
/*!*************************************!*\
  !*** multi ./resources/js/match.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\laravel\reto\resources\js\match.js */"./resources/js/match.js");


/***/ })

/******/ });