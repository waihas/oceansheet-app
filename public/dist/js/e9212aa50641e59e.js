"use strict";
/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_pages_dashboard_connections_GDriveSelector_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/dashboard/connections/GDriveSelector.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/dashboard/connections/GDriveSelector.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ \"./node_modules/@babel/runtime/regenerator/index.js\");\n/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);\n\n\nfunction asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }\n\nfunction _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, \"next\", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, \"throw\", err); } _next(undefined); }); }; }\n\n//\n//\n//\n//\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({\n  data: function data() {\n    return {\n      pickerApiLoaded: false,\n      developerKey: \"AIzaSyDnUBzVRUIu2DFA9NE28Fbqru7Q5dei4Pw\",\n      clientId: \"727914357338-l3hhcebf48cfesv4r2733vpjia40l8ft.apps.googleusercontent.com\",\n      scope: \"https://www.googleapis.com/auth/drive.readonly\",\n      oauthToken: null\n    };\n  },\n  mounted: function mounted() {\n    var gDrive = document.createElement(\"script\");\n    gDrive.setAttribute(\"type\", \"text/javascript\");\n    gDrive.setAttribute(\"src\", \"https://apis.google.com/js/api.js\");\n    document.head.appendChild(gDrive);\n  },\n  methods: {\n    driveIconClicked: function driveIconClicked() {\n      var _this = this;\n\n      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee() {\n        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee$(_context) {\n          while (1) {\n            switch (_context.prev = _context.next) {\n              case 0:\n                console.log(\"Clicked\");\n                _context.next = 3;\n                return gapi.load(\"auth2\", function () {\n                  console.log(\"Auth2 Loaded\");\n                  gapi.auth2.authorize({\n                    client_id: _this.clientId,\n                    scope: _this.scope,\n                    immediate: false\n                  }, _this.handleAuthResult);\n                });\n\n              case 3:\n                gapi.load(\"picker\", function () {\n                  console.log(\"Picker Loaded\");\n                  _this.pickerApiLoaded = true;\n\n                  _this.createPicker();\n                });\n\n              case 4:\n              case \"end\":\n                return _context.stop();\n            }\n          }\n        }, _callee);\n      }))();\n    },\n    handleAuthResult: function handleAuthResult(authResult) {\n      console.log(\"Handle Auth result\", authResult);\n\n      if (authResult && !authResult.error) {\n        this.oauthToken = authResult.access_token;\n        this.createPicker();\n      }\n    },\n    createPicker: function createPicker() {\n      console.log(\"Create Picker\", google.picker);\n\n      if (this.pickerApiLoaded && this.oauthToken) {\n        var picker = new google.picker.PickerBuilder().enableFeature(google.picker.Feature.MULTISELECT_ENABLED).addView(google.picker.ViewId.DOCS).setOAuthToken(this.oauthToken).setDeveloperKey(\"AIzaSyDnUBzVRUIu2DFA9NE28Fbqru7Q5dei4Pw\").setCallback(this.pickerCallback).build();\n        picker.setVisible(true);\n      }\n    },\n    pickerCallback: function pickerCallback(data) {\n      return _asyncToGenerator( /*#__PURE__*/_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().mark(function _callee2() {\n        var url, name;\n        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default().wrap(function _callee2$(_context2) {\n          while (1) {\n            switch (_context2.prev = _context2.next) {\n              case 0:\n                console.log(\"PickerCallback\", data);\n                url = \"nothing\";\n                name = \"nothing\";\n\n                if (data[google.picker.Response.ACTION] === google.picker.Action.PICKED) {\n                  // Array of Picked Files\n                  console.log(docs);\n                }\n\n              case 4:\n              case \"end\":\n                return _context2.stop();\n            }\n          }\n        }, _callee2);\n      }))();\n    }\n  }\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9ub2RlX21vZHVsZXMvYmFiZWwtbG9hZGVyL2xpYi9pbmRleC5qcz8/Y2xvbmVkUnVsZVNldC01WzBdLnJ1bGVzWzBdLnVzZVswXSEuL25vZGVfbW9kdWxlcy92dWUtbG9hZGVyL2xpYi9pbmRleC5qcz8/dnVlLWxvYWRlci1vcHRpb25zIS4vcmVzb3VyY2VzL2pzL3BhZ2VzL2Rhc2hib2FyZC9jb25uZWN0aW9ucy9HRHJpdmVTZWxlY3Rvci52dWU/dnVlJnR5cGU9c2NyaXB0Jmxhbmc9anMmLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7QUFLQTtBQUNBLE1BREEsa0JBQ0E7QUFDQTtBQUNBLDRCQURBO0FBRUEsNkRBRkE7QUFHQSwwRkFIQTtBQUlBLDZEQUpBO0FBS0E7QUFMQTtBQU9BLEdBVEE7QUFXQSxTQVhBLHFCQVdBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSxHQWhCQTtBQWtCQTtBQUNBLG9CQURBLDhCQUNBO0FBQUE7O0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUNBO0FBREE7QUFBQSx1QkFFQTtBQUNBO0FBQ0EsdUNBQ0E7QUFDQSw2Q0FEQTtBQUVBLHNDQUZBO0FBR0E7QUFIQSxtQkFEQSxFQU1BLHNCQU5BO0FBUUEsaUJBVkEsQ0FGQTs7QUFBQTtBQWFBO0FBQ0E7QUFDQTs7QUFDQTtBQUNBLGlCQUpBOztBQWJBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBa0JBLEtBbkJBO0FBcUJBLG9CQXJCQSw0QkFxQkEsVUFyQkEsRUFxQkE7QUFDQTs7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBLEtBM0JBO0FBNkJBLGdCQTdCQSwwQkE2QkE7QUFDQTs7QUFDQTtBQUNBLHVEQUNBLGFBREEsQ0FDQSx5Q0FEQSxFQUVBLE9BRkEsQ0FFQSx5QkFGQSxFQUdBLGFBSEEsQ0FHQSxlQUhBLEVBSUEsZUFKQSxDQUlBLHlDQUpBLEVBS0EsV0FMQSxDQUtBLG1CQUxBLEVBTUEsS0FOQTtBQU9BO0FBQ0E7QUFDQSxLQXpDQTtBQTJDQSxrQkEzQ0EsMEJBMkNBLElBM0NBLEVBMkNBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQ0E7QUFDQSxtQkFGQSxHQUVBLFNBRkE7QUFHQSxvQkFIQSxHQUdBLFNBSEE7O0FBSUE7QUFDQTtBQUNBO0FBQ0E7O0FBUEE7QUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFRQTtBQW5EQTtBQWxCQSIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvanMvcGFnZXMvZGFzaGJvYXJkL2Nvbm5lY3Rpb25zL0dEcml2ZVNlbGVjdG9yLnZ1ZT83YzY1Il0sInNvdXJjZXNDb250ZW50IjpbIjx0ZW1wbGF0ZT5cbiAgICBcbjwvdGVtcGxhdGU+XG5cbjxzY3JpcHQ+XG5leHBvcnQgZGVmYXVsdCB7XG4gICAgZGF0YSgpIHtcbiAgICAgICAgcmV0dXJuIHtcbiAgICAgICAgICAgIHBpY2tlckFwaUxvYWRlZDogZmFsc2UsXG4gICAgICAgICAgICBkZXZlbG9wZXJLZXk6IFwiQUl6YVN5RG5VQnpWUlVJdTJERkE5TkUyOEZicXJ1N1E1ZGVpNFB3XCIsXG4gICAgICAgICAgICBjbGllbnRJZDogXCI3Mjc5MTQzNTczMzgtbDNoaGNlYmY0OGNmZXN2NHIyNzMzdnBqaWE0MGw4ZnQuYXBwcy5nb29nbGV1c2VyY29udGVudC5jb21cIixcbiAgICAgICAgICAgIHNjb3BlOiBcImh0dHBzOi8vd3d3Lmdvb2dsZWFwaXMuY29tL2F1dGgvZHJpdmUucmVhZG9ubHlcIixcbiAgICAgICAgICAgIG9hdXRoVG9rZW46IG51bGxcbiAgICAgICAgfVxuICAgIH0sXG5cbiAgICBtb3VudGVkKCkge1xuICAgICAgICBsZXQgZ0RyaXZlID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudChcInNjcmlwdFwiKTtcbiAgICAgICAgZ0RyaXZlLnNldEF0dHJpYnV0ZShcInR5cGVcIiwgXCJ0ZXh0L2phdmFzY3JpcHRcIik7XG4gICAgICAgIGdEcml2ZS5zZXRBdHRyaWJ1dGUoXCJzcmNcIiwgXCJodHRwczovL2FwaXMuZ29vZ2xlLmNvbS9qcy9hcGkuanNcIik7XG4gICAgICAgIGRvY3VtZW50LmhlYWQuYXBwZW5kQ2hpbGQoZ0RyaXZlKTtcbiAgICB9LFxuXG4gICAgbWV0aG9kczoge1xuICAgICAgICBhc3luYyBkcml2ZUljb25DbGlja2VkKCkge1xuICAgICAgICAgICAgY29uc29sZS5sb2coXCJDbGlja2VkXCIpO1xuICAgICAgICAgICAgYXdhaXQgZ2FwaS5sb2FkKFwiYXV0aDJcIiwgKCkgPT4ge1xuICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKFwiQXV0aDIgTG9hZGVkXCIpO1xuICAgICAgICAgICAgICAgIGdhcGkuYXV0aDIuYXV0aG9yaXplKFxuICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgY2xpZW50X2lkOiB0aGlzLmNsaWVudElkLFxuICAgICAgICAgICAgICAgICAgICBzY29wZTogdGhpcy5zY29wZSxcbiAgICAgICAgICAgICAgICAgICAgaW1tZWRpYXRlOiBmYWxzZVxuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgdGhpcy5oYW5kbGVBdXRoUmVzdWx0XG4gICAgICAgICAgICAgICAgKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgZ2FwaS5sb2FkKFwicGlja2VyXCIsICgpID0+IHtcbiAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhcIlBpY2tlciBMb2FkZWRcIik7XG4gICAgICAgICAgICAgICAgdGhpcy5waWNrZXJBcGlMb2FkZWQgPSB0cnVlO1xuICAgICAgICAgICAgICAgIHRoaXMuY3JlYXRlUGlja2VyKCk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSxcblxuICAgICAgICBoYW5kbGVBdXRoUmVzdWx0KGF1dGhSZXN1bHQpIHtcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKFwiSGFuZGxlIEF1dGggcmVzdWx0XCIsIGF1dGhSZXN1bHQpO1xuICAgICAgICAgICAgaWYgKGF1dGhSZXN1bHQgJiYgIWF1dGhSZXN1bHQuZXJyb3IpIHtcbiAgICAgICAgICAgICAgICB0aGlzLm9hdXRoVG9rZW4gPSBhdXRoUmVzdWx0LmFjY2Vzc190b2tlbjtcbiAgICAgICAgICAgICAgICB0aGlzLmNyZWF0ZVBpY2tlcigpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9LFxuXG4gICAgICAgIGNyZWF0ZVBpY2tlcigpIHtcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKFwiQ3JlYXRlIFBpY2tlclwiLCBnb29nbGUucGlja2VyKTtcbiAgICAgICAgICAgIGlmICh0aGlzLnBpY2tlckFwaUxvYWRlZCAmJiB0aGlzLm9hdXRoVG9rZW4pIHtcbiAgICAgICAgICAgICAgICB2YXIgcGlja2VyID0gbmV3IGdvb2dsZS5waWNrZXIuUGlja2VyQnVpbGRlcigpXG4gICAgICAgICAgICAgICAgLmVuYWJsZUZlYXR1cmUoZ29vZ2xlLnBpY2tlci5GZWF0dXJlLk1VTFRJU0VMRUNUX0VOQUJMRUQpXG4gICAgICAgICAgICAgICAgLmFkZFZpZXcoZ29vZ2xlLnBpY2tlci5WaWV3SWQuRE9DUylcbiAgICAgICAgICAgICAgICAuc2V0T0F1dGhUb2tlbih0aGlzLm9hdXRoVG9rZW4pXG4gICAgICAgICAgICAgICAgLnNldERldmVsb3BlcktleShcIkFJemFTeURuVUJ6VlJVSXUyREZBOU5FMjhGYnFydTdRNWRlaTRQd1wiKVxuICAgICAgICAgICAgICAgIC5zZXRDYWxsYmFjayh0aGlzLnBpY2tlckNhbGxiYWNrKVxuICAgICAgICAgICAgICAgIC5idWlsZCgpO1xuICAgICAgICAgICAgICAgIHBpY2tlci5zZXRWaXNpYmxlKHRydWUpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9LFxuXG4gICAgICAgIGFzeW5jIHBpY2tlckNhbGxiYWNrKGRhdGEpIHtcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKFwiUGlja2VyQ2FsbGJhY2tcIiwgZGF0YSk7XG4gICAgICAgICAgICB2YXIgdXJsID0gXCJub3RoaW5nXCI7XG4gICAgICAgICAgICB2YXIgbmFtZSA9IFwibm90aGluZ1wiO1xuICAgICAgICAgICAgaWYgKGRhdGFbZ29vZ2xlLnBpY2tlci5SZXNwb25zZS5BQ1RJT05dID09PSBnb29nbGUucGlja2VyLkFjdGlvbi5QSUNLRUQpIHtcbiAgICAgICAgICAgICAgICAvLyBBcnJheSBvZiBQaWNrZWQgRmlsZXNcbiAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhkb2NzKTsgICBcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgIH1cbn1cbjwvc2NyaXB0PiJdLCJuYW1lcyI6W10sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/dashboard/connections/GDriveSelector.vue?vue&type=script&lang=js&\n");

/***/ }),

/***/ "./resources/js/pages/dashboard/connections/GDriveSelector.vue":
/*!*********************************************************************!*\
  !*** ./resources/js/pages/dashboard/connections/GDriveSelector.vue ***!
  \*********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var _GDriveSelector_vue_vue_type_template_id_4125be40___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./GDriveSelector.vue?vue&type=template&id=4125be40& */ \"./resources/js/pages/dashboard/connections/GDriveSelector.vue?vue&type=template&id=4125be40&\");\n/* harmony import */ var _GDriveSelector_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./GDriveSelector.vue?vue&type=script&lang=js& */ \"./resources/js/pages/dashboard/connections/GDriveSelector.vue?vue&type=script&lang=js&\");\n/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ \"./node_modules/vue-loader/lib/runtime/componentNormalizer.js\");\n\n\n\n\n\n/* normalize component */\n;\nvar component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__[\"default\"])(\n  _GDriveSelector_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__[\"default\"],\n  _GDriveSelector_vue_vue_type_template_id_4125be40___WEBPACK_IMPORTED_MODULE_0__.render,\n  _GDriveSelector_vue_vue_type_template_id_4125be40___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,\n  false,\n  null,\n  null,\n  null\n  \n)\n\n/* hot reload */\nif (false) { var api; }\ncomponent.options.__file = \"resources/js/pages/dashboard/connections/GDriveSelector.vue\"\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcGFnZXMvZGFzaGJvYXJkL2Nvbm5lY3Rpb25zL0dEcml2ZVNlbGVjdG9yLnZ1ZS5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7O0FBQTZGO0FBQzNCO0FBQ0w7OztBQUc3RDtBQUNBLENBQW1HO0FBQ25HLGdCQUFnQix1R0FBVTtBQUMxQixFQUFFLG9GQUFNO0FBQ1IsRUFBRSxzRkFBTTtBQUNSLEVBQUUsK0ZBQWU7QUFDakI7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOztBQUVBO0FBQ0EsSUFBSSxLQUFVLEVBQUUsWUFpQmY7QUFDRDtBQUNBLGlFQUFlIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL3BhZ2VzL2Rhc2hib2FyZC9jb25uZWN0aW9ucy9HRHJpdmVTZWxlY3Rvci52dWU/NTQzOCJdLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgeyByZW5kZXIsIHN0YXRpY1JlbmRlckZucyB9IGZyb20gXCIuL0dEcml2ZVNlbGVjdG9yLnZ1ZT92dWUmdHlwZT10ZW1wbGF0ZSZpZD00MTI1YmU0MCZcIlxuaW1wb3J0IHNjcmlwdCBmcm9tIFwiLi9HRHJpdmVTZWxlY3Rvci52dWU/dnVlJnR5cGU9c2NyaXB0Jmxhbmc9anMmXCJcbmV4cG9ydCAqIGZyb20gXCIuL0dEcml2ZVNlbGVjdG9yLnZ1ZT92dWUmdHlwZT1zY3JpcHQmbGFuZz1qcyZcIlxuXG5cbi8qIG5vcm1hbGl6ZSBjb21wb25lbnQgKi9cbmltcG9ydCBub3JtYWxpemVyIGZyb20gXCIhLi4vLi4vLi4vLi4vLi4vbm9kZV9tb2R1bGVzL3Z1ZS1sb2FkZXIvbGliL3J1bnRpbWUvY29tcG9uZW50Tm9ybWFsaXplci5qc1wiXG52YXIgY29tcG9uZW50ID0gbm9ybWFsaXplcihcbiAgc2NyaXB0LFxuICByZW5kZXIsXG4gIHN0YXRpY1JlbmRlckZucyxcbiAgZmFsc2UsXG4gIG51bGwsXG4gIG51bGwsXG4gIG51bGxcbiAgXG4pXG5cbi8qIGhvdCByZWxvYWQgKi9cbmlmIChtb2R1bGUuaG90KSB7XG4gIHZhciBhcGkgPSByZXF1aXJlKFwiL1VzZXJzL21hYy9EZXNrdG9wL29jZWFuc2hlZXQtYXBwL25vZGVfbW9kdWxlcy92dWUtaG90LXJlbG9hZC1hcGkvZGlzdC9pbmRleC5qc1wiKVxuICBhcGkuaW5zdGFsbChyZXF1aXJlKCd2dWUnKSlcbiAgaWYgKGFwaS5jb21wYXRpYmxlKSB7XG4gICAgbW9kdWxlLmhvdC5hY2NlcHQoKVxuICAgIGlmICghYXBpLmlzUmVjb3JkZWQoJzQxMjViZTQwJykpIHtcbiAgICAgIGFwaS5jcmVhdGVSZWNvcmQoJzQxMjViZTQwJywgY29tcG9uZW50Lm9wdGlvbnMpXG4gICAgfSBlbHNlIHtcbiAgICAgIGFwaS5yZWxvYWQoJzQxMjViZTQwJywgY29tcG9uZW50Lm9wdGlvbnMpXG4gICAgfVxuICAgIG1vZHVsZS5ob3QuYWNjZXB0KFwiLi9HRHJpdmVTZWxlY3Rvci52dWU/dnVlJnR5cGU9dGVtcGxhdGUmaWQ9NDEyNWJlNDAmXCIsIGZ1bmN0aW9uICgpIHtcbiAgICAgIGFwaS5yZXJlbmRlcignNDEyNWJlNDAnLCB7XG4gICAgICAgIHJlbmRlcjogcmVuZGVyLFxuICAgICAgICBzdGF0aWNSZW5kZXJGbnM6IHN0YXRpY1JlbmRlckZuc1xuICAgICAgfSlcbiAgICB9KVxuICB9XG59XG5jb21wb25lbnQub3B0aW9ucy5fX2ZpbGUgPSBcInJlc291cmNlcy9qcy9wYWdlcy9kYXNoYm9hcmQvY29ubmVjdGlvbnMvR0RyaXZlU2VsZWN0b3IudnVlXCJcbmV4cG9ydCBkZWZhdWx0IGNvbXBvbmVudC5leHBvcnRzIl0sIm5hbWVzIjpbXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/pages/dashboard/connections/GDriveSelector.vue\n");

/***/ }),

/***/ "./resources/js/pages/dashboard/connections/GDriveSelector.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************!*\
  !*** ./resources/js/pages/dashboard/connections/GDriveSelector.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_GDriveSelector_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./GDriveSelector.vue?vue&type=script&lang=js& */ \"./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/dashboard/connections/GDriveSelector.vue?vue&type=script&lang=js&\");\n /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_GDriveSelector_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__[\"default\"]); //# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvcGFnZXMvZGFzaGJvYXJkL2Nvbm5lY3Rpb25zL0dEcml2ZVNlbGVjdG9yLnZ1ZT92dWUmdHlwZT1zY3JpcHQmbGFuZz1qcyYuanMiLCJtYXBwaW5ncyI6Ijs7Ozs7QUFBb08sQ0FBQyxpRUFBZSxtTkFBRyxFQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL3BhZ2VzL2Rhc2hib2FyZC9jb25uZWN0aW9ucy9HRHJpdmVTZWxlY3Rvci52dWU/NWRlYiJdLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgbW9kIGZyb20gXCItIS4uLy4uLy4uLy4uLy4uL25vZGVfbW9kdWxlcy9iYWJlbC1sb2FkZXIvbGliL2luZGV4LmpzPz9jbG9uZWRSdWxlU2V0LTVbMF0ucnVsZXNbMF0udXNlWzBdIS4uLy4uLy4uLy4uLy4uL25vZGVfbW9kdWxlcy92dWUtbG9hZGVyL2xpYi9pbmRleC5qcz8/dnVlLWxvYWRlci1vcHRpb25zIS4vR0RyaXZlU2VsZWN0b3IudnVlP3Z1ZSZ0eXBlPXNjcmlwdCZsYW5nPWpzJlwiOyBleHBvcnQgZGVmYXVsdCBtb2Q7IGV4cG9ydCAqIGZyb20gXCItIS4uLy4uLy4uLy4uLy4uL25vZGVfbW9kdWxlcy9iYWJlbC1sb2FkZXIvbGliL2luZGV4LmpzPz9jbG9uZWRSdWxlU2V0LTVbMF0ucnVsZXNbMF0udXNlWzBdIS4uLy4uLy4uLy4uLy4uL25vZGVfbW9kdWxlcy92dWUtbG9hZGVyL2xpYi9pbmRleC5qcz8/dnVlLWxvYWRlci1vcHRpb25zIS4vR0RyaXZlU2VsZWN0b3IudnVlP3Z1ZSZ0eXBlPXNjcmlwdCZsYW5nPWpzJlwiIl0sIm5hbWVzIjpbXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/pages/dashboard/connections/GDriveSelector.vue?vue&type=script&lang=js&\n");

/***/ }),

/***/ "./resources/js/pages/dashboard/connections/GDriveSelector.vue?vue&type=template&id=4125be40&":
/*!****************************************************************************************************!*\
  !*** ./resources/js/pages/dashboard/connections/GDriveSelector.vue?vue&type=template&id=4125be40& ***!
  \****************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_GDriveSelector_vue_vue_type_template_id_4125be40___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_GDriveSelector_vue_vue_type_template_id_4125be40___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_GDriveSelector_vue_vue_type_template_id_4125be40___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./GDriveSelector.vue?vue&type=template&id=4125be40& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/dashboard/connections/GDriveSelector.vue?vue&type=template&id=4125be40&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/dashboard/connections/GDriveSelector.vue?vue&type=template&id=4125be40&":
/*!*******************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/dashboard/connections/GDriveSelector.vue?vue&type=template&id=4125be40& ***!
  \*******************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"render\": () => (/* binding */ render),\n/* harmony export */   \"staticRenderFns\": () => (/* binding */ staticRenderFns)\n/* harmony export */ });\nvar render = function () {\n  var _vm = this\n  var _h = _vm.$createElement\n  var _c = _vm._self._c || _h\n  return _c(\"div\")\n}\nvar staticRenderFns = []\nrender._withStripped = true\n\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9ub2RlX21vZHVsZXMvdnVlLWxvYWRlci9saWIvbG9hZGVycy90ZW1wbGF0ZUxvYWRlci5qcz8/dnVlLWxvYWRlci1vcHRpb25zIS4vbm9kZV9tb2R1bGVzL3Z1ZS1sb2FkZXIvbGliL2luZGV4LmpzPz92dWUtbG9hZGVyLW9wdGlvbnMhLi9yZXNvdXJjZXMvanMvcGFnZXMvZGFzaGJvYXJkL2Nvbm5lY3Rpb25zL0dEcml2ZVNlbGVjdG9yLnZ1ZT92dWUmdHlwZT10ZW1wbGF0ZSZpZD00MTI1YmU0MCYuanMiLCJtYXBwaW5ncyI6Ijs7Ozs7QUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL3BhZ2VzL2Rhc2hib2FyZC9jb25uZWN0aW9ucy9HRHJpdmVTZWxlY3Rvci52dWU/OTFkNiJdLCJzb3VyY2VzQ29udGVudCI6WyJ2YXIgcmVuZGVyID0gZnVuY3Rpb24gKCkge1xuICB2YXIgX3ZtID0gdGhpc1xuICB2YXIgX2ggPSBfdm0uJGNyZWF0ZUVsZW1lbnRcbiAgdmFyIF9jID0gX3ZtLl9zZWxmLl9jIHx8IF9oXG4gIHJldHVybiBfYyhcImRpdlwiKVxufVxudmFyIHN0YXRpY1JlbmRlckZucyA9IFtdXG5yZW5kZXIuX3dpdGhTdHJpcHBlZCA9IHRydWVcblxuZXhwb3J0IHsgcmVuZGVyLCBzdGF0aWNSZW5kZXJGbnMgfSJdLCJuYW1lcyI6W10sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/pages/dashboard/connections/GDriveSelector.vue?vue&type=template&id=4125be40&\n");

/***/ })

}]);