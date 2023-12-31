(() => {
    var __webpack_modules__ = [ , () => {
        jQuery.extend(jQuery.expr[":"], {
            focusable: function focusable(el) {
                return jQuery(el).is("a, button, :input, [tabindex]");
            }
        });
    }, (__unused_webpack_module, __webpack_exports__, __webpack_require__) => {
        "use strict";
        __webpack_require__.r(__webpack_exports__);
        __webpack_require__.d(__webpack_exports__, {
            default: () => __WEBPACK_DEFAULT_EXPORT__
        });
        function _defineProperties(target, props) {
            for (var i = 0; i < props.length; i++) {
                var descriptor = props[i];
                descriptor.enumerable = descriptor.enumerable || false;
                descriptor.configurable = true;
                if ("value" in descriptor) descriptor.writable = true;
                Object.defineProperty(target, descriptor.key, descriptor);
            }
        }
        function _createClass(Constructor, protoProps, staticProps) {
            if (protoProps) _defineProperties(Constructor.prototype, protoProps);
            if (staticProps) _defineProperties(Constructor, staticProps);
            Object.defineProperty(Constructor, "prototype", {
                writable: false
            });
            return Constructor;
        }
        function _classCallCheck(instance, Constructor) {
            if (!(instance instanceof Constructor)) {
                throw new TypeError("Cannot call a class as a function");
            }
        }
        var CollapsableMenu = _createClass((function CollapsableMenu($) {
            _classCallCheck(this, CollapsableMenu);
            $(".kenta-collapsable-menu.collapsable").each((function(_, menu) {
                $(menu).find(".menu-item-has-children, .page_item_has_children").each((function(_, item) {
                    var $submenu = $(item).find("> .sub-menu, > .children");
                    var $toggle = $(item).find("> a .kenta-dropdown-toggle");
                    $submenu.hide();
                    $toggle.on("click", (function(ev) {
                        ev.stopPropagation();
                        ev.preventDefault();
                        $toggle.toggleClass("active");
                        $submenu.slideToggle(300);
                    }));
                }));
            }));
        }));
        const __WEBPACK_DEFAULT_EXPORT__ = CollapsableMenu;
    }, (__unused_webpack_module, __webpack_exports__, __webpack_require__) => {
        "use strict";
        __webpack_require__.r(__webpack_exports__);
        __webpack_require__.d(__webpack_exports__, {
            default: () => __WEBPACK_DEFAULT_EXPORT__
        });
        function _defineProperties(target, props) {
            for (var i = 0; i < props.length; i++) {
                var descriptor = props[i];
                descriptor.enumerable = descriptor.enumerable || false;
                descriptor.configurable = true;
                if ("value" in descriptor) descriptor.writable = true;
                Object.defineProperty(target, descriptor.key, descriptor);
            }
        }
        function _createClass(Constructor, protoProps, staticProps) {
            if (protoProps) _defineProperties(Constructor.prototype, protoProps);
            if (staticProps) _defineProperties(Constructor, staticProps);
            Object.defineProperty(Constructor, "prototype", {
                writable: false
            });
            return Constructor;
        }
        function _classCallCheck(instance, Constructor) {
            if (!(instance instanceof Constructor)) {
                throw new TypeError("Cannot call a class as a function");
            }
        }
        var Menu = _createClass((function Menu($) {
            _classCallCheck(this, Menu);
            var $menuItem = $(".sf-menu .menu-item");
            $menuItem.on("mouseover", (function() {
                $(this).addClass("sfHover");
            }));
            $menuItem.on("mouseleave", (function() {
                var $this = $(this);
                setTimeout((function() {
                    $this.removeClass("sfHover");
                }), 300);
            }));
        }));
        const __WEBPACK_DEFAULT_EXPORT__ = Menu;
    }, (__unused_webpack_module, __webpack_exports__, __webpack_require__) => {
        "use strict";
        __webpack_require__.r(__webpack_exports__);
        __webpack_require__.d(__webpack_exports__, {
            default: () => __WEBPACK_DEFAULT_EXPORT__
        });
        function _defineProperties(target, props) {
            for (var i = 0; i < props.length; i++) {
                var descriptor = props[i];
                descriptor.enumerable = descriptor.enumerable || false;
                descriptor.configurable = true;
                if ("value" in descriptor) descriptor.writable = true;
                Object.defineProperty(target, descriptor.key, descriptor);
            }
        }
        function _createClass(Constructor, protoProps, staticProps) {
            if (protoProps) _defineProperties(Constructor.prototype, protoProps);
            if (staticProps) _defineProperties(Constructor, staticProps);
            Object.defineProperty(Constructor, "prototype", {
                writable: false
            });
            return Constructor;
        }
        function _classCallCheck(instance, Constructor) {
            if (!(instance instanceof Constructor)) {
                throw new TypeError("Cannot call a class as a function");
            }
        }
        var Toggle = _createClass((function Toggle($) {
            _classCallCheck(this, Toggle);
            var _this = this;
            var scrollBarWidth = window.innerWidth - document.documentElement.clientWidth;
            if (scrollBarWidth > 0) {
                document.body.style.setProperty("--scrollbar-width", "".concat(scrollBarWidth, "px"));
            }
            $("[data-toggle-target]").each((function() {
                var $this = $(this);
                if ($this.hasClass("kenta-toggleable")) {
                    return;
                }
                $this.addClass("kenta-toggleable");
                $(this).on("click", (function() {
                    var el = $(this);
                    var $target = $(el.data("toggle-target"));
                    var $showFocus = $(el.data("toggle-show-focus"));
                    var $hiddenFocus = $(el.data("toggle-hidden-focus"));
                    $target.toggleClass("active");
                    if ($target.hasClass("active")) {
                        $(document.body).addClass("kenta-modal-visible");
                        if ($showFocus && $showFocus.first()) {
                            setTimeout((function() {
                                return $showFocus.first().focus();
                            }), 100);
                        }
                    } else {
                        setTimeout((function() {
                            $(document.body).removeClass("kenta-modal-visible");
                        }), 300);
                        if ($hiddenFocus && $hiddenFocus.first()) {
                            setTimeout((function() {
                                return $hiddenFocus.first().focus();
                            }), 100);
                        }
                    }
                }));
            }));
        }));
        const __WEBPACK_DEFAULT_EXPORT__ = Toggle;
    }, (__unused_webpack_module, __webpack_exports__, __webpack_require__) => {
        "use strict";
        __webpack_require__.r(__webpack_exports__);
        __webpack_require__.d(__webpack_exports__, {
            default: () => __WEBPACK_DEFAULT_EXPORT__
        });
        function _defineProperties(target, props) {
            for (var i = 0; i < props.length; i++) {
                var descriptor = props[i];
                descriptor.enumerable = descriptor.enumerable || false;
                descriptor.configurable = true;
                if ("value" in descriptor) descriptor.writable = true;
                Object.defineProperty(target, descriptor.key, descriptor);
            }
        }
        function _createClass(Constructor, protoProps, staticProps) {
            if (protoProps) _defineProperties(Constructor.prototype, protoProps);
            if (staticProps) _defineProperties(Constructor, staticProps);
            Object.defineProperty(Constructor, "prototype", {
                writable: false
            });
            return Constructor;
        }
        function _classCallCheck(instance, Constructor) {
            if (!(instance instanceof Constructor)) {
                throw new TypeError("Cannot call a class as a function");
            }
        }
        var FocusRedirect = _createClass((function FocusRedirect($) {
            _classCallCheck(this, FocusRedirect);
            $("[data-redirect-focus]").each((function() {
                var $this = $(this);
                var $target = $($this.data("redirect-focus"));
                $this.on("keydown", (function(ev) {
                    var tabKey = ev.keyCode === 9;
                    var shiftKey = ev.shiftKey;
                    var $focusable = $this.find(":focusable:visible:not(.lotta-customizer-shortcut)");
                    var $last = $focusable.last();
                    var $first = $focusable.first();
                    var active = document.activeElement;
                    if (tabKey && !shiftKey && $last.is(active)) {
                        ev.preventDefault();
                        $target.focus();
                    }
                    if (tabKey && shiftKey && $first.is(active)) {
                        ev.preventDefault();
                        $target.focus();
                    }
                }));
                $target.on("keydown", (function(ev) {
                    if (!$this.is(":visible")) {
                        return;
                    }
                    var tabKey = ev.keyCode === 9;
                    var shiftKey = ev.shiftKey;
                    var $focusable = $this.find(":focusable:visible");
                    var $last = $focusable.last();
                    var $first = $focusable.first();
                    if (tabKey && !shiftKey) {
                        ev.preventDefault();
                        $first.focus();
                    }
                    if (tabKey && shiftKey) {
                        ev.preventDefault();
                        $last.focus();
                    }
                }));
            }));
        }));
        const __WEBPACK_DEFAULT_EXPORT__ = FocusRedirect;
    }, (__unused_webpack_module, __webpack_exports__, __webpack_require__) => {
        "use strict";
        __webpack_require__.r(__webpack_exports__);
        __webpack_require__.d(__webpack_exports__, {
            default: () => __WEBPACK_DEFAULT_EXPORT__
        });
        function _defineProperties(target, props) {
            for (var i = 0; i < props.length; i++) {
                var descriptor = props[i];
                descriptor.enumerable = descriptor.enumerable || false;
                descriptor.configurable = true;
                if ("value" in descriptor) descriptor.writable = true;
                Object.defineProperty(target, descriptor.key, descriptor);
            }
        }
        function _createClass(Constructor, protoProps, staticProps) {
            if (protoProps) _defineProperties(Constructor.prototype, protoProps);
            if (staticProps) _defineProperties(Constructor, staticProps);
            Object.defineProperty(Constructor, "prototype", {
                writable: false
            });
            return Constructor;
        }
        function _classCallCheck(instance, Constructor) {
            if (!(instance instanceof Constructor)) {
                throw new TypeError("Cannot call a class as a function");
            }
        }
        var Popup = _createClass((function Popup($) {
            _classCallCheck(this, Popup);
            $("[data-popup-target]").each((function() {
                var $this = $(this);
                var $target = $($this.data("popup-target"));
                var show = function show() {
                    $target.stop().animate({
                        opacity: "show",
                        marginTop: "0"
                    }, 300);
                };
                var hide = function hide() {
                    $target.stop().animate({
                        opacity: "hide",
                        marginTop: "10"
                    }, 150);
                };
                if ($this.data("popup-on-hover")) {
                    $this.hover(show, hide);
                } else {
                    $this.click(show, hide);
                }
            }));
        }));
        const __WEBPACK_DEFAULT_EXPORT__ = Popup;
    }, (__unused_webpack_module, __webpack_exports__, __webpack_require__) => {
        "use strict";
        __webpack_require__.r(__webpack_exports__);
        __webpack_require__.d(__webpack_exports__, {
            default: () => __WEBPACK_DEFAULT_EXPORT__
        });
        function _defineProperties(target, props) {
            for (var i = 0; i < props.length; i++) {
                var descriptor = props[i];
                descriptor.enumerable = descriptor.enumerable || false;
                descriptor.configurable = true;
                if ("value" in descriptor) descriptor.writable = true;
                Object.defineProperty(target, descriptor.key, descriptor);
            }
        }
        function _createClass(Constructor, protoProps, staticProps) {
            if (protoProps) _defineProperties(Constructor.prototype, protoProps);
            if (staticProps) _defineProperties(Constructor, staticProps);
            Object.defineProperty(Constructor, "prototype", {
                writable: false
            });
            return Constructor;
        }
        function _classCallCheck(instance, Constructor) {
            if (!(instance instanceof Constructor)) {
                throw new TypeError("Cannot call a class as a function");
            }
        }
        var ToTop = _createClass((function ToTop($) {
            _classCallCheck(this, ToTop);
            var $scrollTop = $("#scroll-top");
            $(window).on("scroll", (function() {
                if ($(this).scrollTop() > 200) {
                    $scrollTop.addClass("active");
                } else {
                    $scrollTop.removeClass("active");
                }
            }));
            $scrollTop.on("click", (function() {
                $("html, body").scrollTop(0);
                return false;
            }));
        }));
        const __WEBPACK_DEFAULT_EXPORT__ = ToTop;
    }, , , , , , (__unused_webpack_module, __webpack_exports__, __webpack_require__) => {
        "use strict";
        __webpack_require__.r(__webpack_exports__);
        __webpack_require__.d(__webpack_exports__, {
            default: () => __WEBPACK_DEFAULT_EXPORT__
        });
        function _classCallCheck(instance, Constructor) {
            if (!(instance instanceof Constructor)) {
                throw new TypeError("Cannot call a class as a function");
            }
        }
        function _defineProperties(target, props) {
            for (var i = 0; i < props.length; i++) {
                var descriptor = props[i];
                descriptor.enumerable = descriptor.enumerable || false;
                descriptor.configurable = true;
                if ("value" in descriptor) descriptor.writable = true;
                Object.defineProperty(target, descriptor.key, descriptor);
            }
        }
        function _createClass(Constructor, protoProps, staticProps) {
            if (protoProps) _defineProperties(Constructor.prototype, protoProps);
            if (staticProps) _defineProperties(Constructor, staticProps);
            Object.defineProperty(Constructor, "prototype", {
                writable: false
            });
            return Constructor;
        }
        var Particles = function() {
            function Particles($) {
                var _this = this;
                _classCallCheck(this, Particles);
                if (!window.particlesJS) {
                    return;
                }
                $(".kenta-particles-canvas").each((function(i, el) {
                    var $canvas = $(el);
                    var config = JSON.parse($canvas.attr("data-kenta-particles"));
                    particlesJS($canvas.attr("id"), _this.overrideConfig($canvas, config));
                }));
            }
            _createClass(Particles, [ {
                key: "overrideConfig",
                value: function overrideConfig($canvas, config) {
                    var detect_on = $canvas.data("kenta-particle-detect-on");
                    var quantity = Number($canvas.data("kenta-particle-quantity"));
                    var speed = Number($canvas.data("kenta-particle-speed"));
                    var size = Number($canvas.data("kenta-particle-size"));
                    var shape = $canvas.data("kenta-particle-shape");
                    var particle_color = this.getColorValue($canvas.data("kenta-particle-color"));
                    var line_color = this.getColorValue($canvas.data("kenta-particle-line-color") || particle_color);
                    if ("default" !== detect_on && "" !== detect_on && undefined !== detect_on) {
                        config.interactivity.detect_on = detect_on;
                    }
                    if ("" !== size && undefined !== size && size > 0) {
                        config.particles.size.value = size;
                    }
                    if ("" !== quantity && undefined !== quantity && quantity > 0) {
                        config.particles.number.value = quantity;
                    }
                    if ("" !== particle_color && undefined !== particle_color) {
                        config.particles.color.value = particle_color;
                    }
                    if ("" !== line_color && undefined !== line_color) {
                        if (config.particles.line_linked) {
                            config.particles.line_linked.color = line_color;
                        } else {
                            if (config.particles.links) {
                                config.particles.links.color = line_color;
                            } else {
                                config.particles.links = {
                                    color: line_color
                                };
                            }
                        }
                    }
                    if ("default" !== shape && "" !== shape && undefined !== shape) {
                        config.particles.shape.type = shape;
                    }
                    if ("" !== speed && undefined !== speed && speed > 0) {
                        config.particles.move.speed = speed;
                    }
                    config.background = {};
                    config.fullScreen = {
                        enable: false
                    };
                    return config;
                }
            }, {
                key: "getColorValue",
                value: function getColorValue(color) {
                    if (!color || color === "" || color === "__INITIAL_VALUE__") {
                        return "";
                    }
                    if (color.indexOf("var") > -1) {
                        var value = getComputedStyle(document.documentElement).getPropertyValue(color.replace(/var\(/, "").replace(/\)/, "")).trim().replace(/\s/g, "");
                        if (value.indexOf("#") === -1 && value.indexOf("rgb") === -1) {
                            return "rgb(".concat(value, ")");
                        }
                        return value;
                    }
                    return color;
                }
            } ]);
            return Particles;
        }();
        const __WEBPACK_DEFAULT_EXPORT__ = Particles;
    } ];
    var __webpack_module_cache__ = {};
    function __webpack_require__(moduleId) {
        var cachedModule = __webpack_module_cache__[moduleId];
        if (cachedModule !== undefined) {
            return cachedModule.exports;
        }
        var module = __webpack_module_cache__[moduleId] = {
            exports: {}
        };
        __webpack_modules__[moduleId](module, module.exports, __webpack_require__);
        return module.exports;
    }
    (() => {
        __webpack_require__.n = module => {
            var getter = module && module.__esModule ? () => module["default"] : () => module;
            __webpack_require__.d(getter, {
                a: getter
            });
            return getter;
        };
    })();
    (() => {
        __webpack_require__.d = (exports, definition) => {
            for (var key in definition) {
                if (__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
                    Object.defineProperty(exports, key, {
                        enumerable: true,
                        get: definition[key]
                    });
                }
            }
        };
    })();
    (() => {
        __webpack_require__.o = (obj, prop) => Object.prototype.hasOwnProperty.call(obj, prop);
    })();
    (() => {
        __webpack_require__.r = exports => {
            if (typeof Symbol !== "undefined" && Symbol.toStringTag) {
                Object.defineProperty(exports, Symbol.toStringTag, {
                    value: "Module"
                });
            }
            Object.defineProperty(exports, "__esModule", {
                value: true
            });
        };
    })();
    var __webpack_exports__ = {};
    (() => {
        "use strict";
        __webpack_require__.r(__webpack_exports__);
        var _modules_focusable__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(1);
        var _modules_focusable__WEBPACK_IMPORTED_MODULE_0___default = __webpack_require__.n(_modules_focusable__WEBPACK_IMPORTED_MODULE_0__);
        var _modules_collapsable_menu__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(2);
        var _modules_menu__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(3);
        var _modules_toggle__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(4);
        var _modules_focus_redirect__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(5);
        var _modules_popup__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(6);
        var _modules_to_top__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(7);
        var _modules_particles__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(13);
        if (wp.customize && wp.customize.selectiveRefresh) {
            wp.customize.selectiveRefresh.bind("partial-content-rendered", (function() {
                "use strict";
                if (window.ScrollReveal) ScrollReveal().sync();
                new _modules_collapsable_menu__WEBPACK_IMPORTED_MODULE_1__["default"](jQuery);
                new _modules_menu__WEBPACK_IMPORTED_MODULE_2__["default"](jQuery);
                new _modules_toggle__WEBPACK_IMPORTED_MODULE_3__["default"](jQuery);
                new _modules_focus_redirect__WEBPACK_IMPORTED_MODULE_4__["default"](jQuery);
                new _modules_popup__WEBPACK_IMPORTED_MODULE_5__["default"](jQuery);
                new _modules_to_top__WEBPACK_IMPORTED_MODULE_6__["default"](jQuery);
                new _modules_particles__WEBPACK_IMPORTED_MODULE_7__["default"](jQuery);
            }));
            wp.customize.bind("preview-ready", (function() {
                wp.customize.preview.bind("lotta-panel-open", (function(id) {
                    if (id === "kenta_global_preloader") {
                        jQuery(".kenta-preloader-wrap > div").fadeIn(150);
                        jQuery(".kenta-preloader-wrap").fadeIn(375);
                    }
                }));
                wp.customize.preview.bind("lotta-panel-close", (function(id) {
                    if (id === "kenta_global_preloader") {
                        jQuery(".kenta-preloader-wrap > div").fadeOut(150);
                        jQuery(".kenta-preloader-wrap").fadeOut(375);
                    }
                }));
            }));
        }
    })();
})();