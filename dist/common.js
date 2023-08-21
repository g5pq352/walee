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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(1);


/***/ }),
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

$(window).on("resize", function () {
	if ($(this).width() > 1025) {
		if (window.device == 'mobile') {
			location.reload();
		}
		window.device = 'desktop';
	} else {
		if (window.device == 'desktop') {
			location.reload();
		}
		window.device = 'mobile';
	}
}).trigger("resize");

if (navigator.appVersion.indexOf("Mac") != -1) {
	$("body").get(0).style.setProperty('--lock', "15px");
} else {
	$("body").get(0).style.setProperty('--lock', "17px");
}

$("#preload").delay(500).fadeOut(500);

var RyderMarquee = function () {
	function RyderMarquee(el) {
		var direct = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0;

		_classCallCheck(this, RyderMarquee);

		this.hero = $(el).parent().get(0);
		this.wrapper = el;
		this.delta = 0;
		this.transform = 0;
		this.step = device == 'mobile' ? 0.6 : 0.8;
		this.direct = direct % 2;
		this.hover = false;

		if (this.direct == 1) {
			this.wrapper.style.transform = 'translate3d(-' + this.wrapper.getBoundingClientRect().width / 2 + 'px, 0, 0)';
			this.transform = -this.wrapper.getBoundingClientRect().width / 2;
		}

		// $(el).hover(() => {
		// 	this.hover = true
		// }, () => {
		// 	this.hover = false
		// })
	}

	_createClass(RyderMarquee, [{
		key: 'animate',
		value: function animate() {
			if (!this.hover) {
				this.transform += this.step;
			}

			if (this.direct == 1) {
				if (this.transform > 0) {
					this.transform = -this.wrapper.getBoundingClientRect().width / 2;
				}
				this.wrapper.style.transform = 'translate3d(' + this.transform + 'px, 0, 0)';
			} else {
				if (this.transform > this.wrapper.getBoundingClientRect().width / 2) {
					this.transform = 0;
				}
				this.wrapper.style.transform = 'translate3d(-' + this.transform + 'px, 0, 0)';
			}
		}
	}, {
		key: 'render',
		value: function render() {
			this.scrollY = $(window).scrollTop();

			var bounding = this.hero.getBoundingClientRect();
			var distance = window.innerHeight + this.scrollY - (bounding.top + this.scrollY);
			var percentage = distance / ((window.innerHeight + bounding.height) / 100);

			if (percentage > 0 && percentage < 100) {
				this.animate();
			}
		}
	}, {
		key: 'create',
		value: function create() {
			gsap.ticker.add(this.render.bind(this));
		}
	}]);

	return RyderMarquee;
}();

$(".marquee").each(function (i, el) {
	var $copy = $(el).contents().clone();
	$(el).append($copy);

	var ryderMarquee = new RyderMarquee(el, i).create();
});

$(".scrolldown").on("click", function () {
	gsap.to(window, {
		duration: 1.2,
		scrollTo: $(window).height(),
		ease: Power2.easeInOut
	});
});

$(".openmenu").on("click", function () {
	$(".menu-fixed").addClass("is-show");
});
$(".hamburger").on("click", function () {
	$(".menu-fixed").removeClass("is-show");
});

$(".menuList >li").hover(function () {
	$(this).find(".submenuList").stop(true).slideDown(300);
}, function () {
	$(this).find(".submenuList").stop(true).slideUp(300);
});

// const $menu_tl = gsap.timeline({
// 	paused: true,
// }).from([
// 	$(".topmenu-fixed .topmenuList li"),
// 	$(".topmenu-fixed .member-area li"),
// 	$(".topmenu-fixed .cart")
// ], {
// 	duration: 1,
// 	opacity: 0,
// 	y: -120,
// 	stagger: {
// 		each: .123,
// 		from: "end",
// 	},
// 	ease: "circle.out"
// })


// let _menuopen = false


// ScrollTrigger.create({
// 	toggleActions: "play none play none", //重覆觸發
// 	trigger: "body",
// 	start: () => window.innerHeight + ' 50%',
// 	end: "bottom top", // no end
// 	onToggle: self => {
// 		if (self.isActive) {
// 			if (_menuopen) { return false; }
// 			$menu_tl.play(0)
// 			_menuopen = true
// 		} else {
// 			// $menu_tl.reverse()
// 		}
// 	},
// 	// markers: true,
// });


// new SplitText('.ryder-split .item', {
// 	type: "chars",
// })


// $(".ryder-split").each(function(i, el) {
// 	const _h = parseInt(el.dataset.h)
// 	const _hover = parseInt(el.dataset.hover)

// 	const $item1 = $(".item >div:nth-child(3n-2)", el)
// 	const $item2 = $(".item >div:nth-child(3n-1)", el)
// 	const $item3 = $(".item >div:nth-child(3n)", el)

// 	const $tl1 = gsap.timeline({
// 		paused: true,
// 		repeat: -1,
// 		delay: .02,
// 	}).to($item1, {
// 		duration: 0.3,
// 		y: _h * 0.8,
// 		ease: 'power1.out',
// 	}).to($item1, {
// 		duration: 0.3,
// 		y: 0,
// 		ease: 'power3.in',
// 	})

// 	const $tl2 = gsap.timeline({
// 		paused: true,
// 		repeat: -1,
// 		delay: .05,
// 	}).to($item2, {
// 		duration: 0.3,
// 		y: _h,
// 		ease: 'power1.out',
// 	}).to($item2, {
// 		duration: 0.3,
// 		y: 0,
// 		ease: 'power3.in',
// 	})

// 	const $tl3 = gsap.timeline({
// 		paused: true,
// 		repeat: -1,
// 	}).to($item3, {
// 		duration: 0.3,
// 		y: _h * 0.6,
// 		ease: 'power1.out',
// 	}).to($item3, {
// 		duration: 0.3,
// 		y: 0,
// 		ease: 'power3.in',
// 	})


// 	if (_hover == '1') {
// 		$(el).parent().hover(function() {
// 			$tl1.play()
// 			$tl2.play()
// 			$tl3.play()
// 		}, function() {
// 			$tl1.pause(0)
// 			$tl2.pause(0)
// 			$tl3.pause(0)
// 		})
// 	} else {
// 		$tl1.play()
// 		$tl2.play()
// 		$tl3.play()
// 	}
// })


$(".fancy-close, .fancy-closeBlock, .dialog-fancyContainer .btn").on("click", function () {
	$(".m-fancyWrap").removeClass("is-show");
	gsap.delayedCall(0.5, function () {
		$("body").removeClass("is-lock");
	});
});

$(".addtocart").on("click", function () {
	$(".cart-fancyWrap").addClass("is-show").scrollTop(0);
	$("body").addClass("is-lock");
});

$(".hamburger-area").on("click", function () {
	$(this).toggleClass("is-open");
	$(".mobile-topmenuWrap").fadeToggle(500);
});

// topmenu.php
Vue.component('menu-item', {
	data: function data() {
		return {};
	},

	props: ['post'],
	template: '\n  \t<div class="item">\n  \t\t<div class="pic-area grid-x align-middle">\n  \t\t\t<div class="close cell shrink" @click="del"><img src="images/xxx.svg"></div>\n  \t\t\t<div class="pic cell shrink show-for-large"><img src="images/pd-1.jpg"></div>\n  \t\t\t<div class="title cell auto">{{post.title}}</div>\n  \t\t</div>\n\n  \t\t<div class="amount-area grid-x align-center-middle">\n  \t\t\t<div class="desc cell shrink" @click="desc"><img src="images/desc.svg"></div>\n  \t\t\t<input type="text cell shrink" name="" id="" v-model="post.count">\n  \t\t\t<div class="asc cell shrink" @click="inc"><img src="images/asc.svg"></div>\n  \t\t</div>\n\n  \t\t<div class="subtotal">NT.{{post.price}}</div>\n  \t</div>\n\t',
	methods: {
		inc: function inc() {
			this.post.count++;
		},
		desc: function desc() {
			if (this.post.count > 1) {
				this.post.count--;
			}
		},
		del: function del() {
			var _this = this;

			Swal.fire({
				template: '#my-template'
			}).then(function (result) {
				if (result.isConfirmed) {
					vm_menu.posts = vm_menu.posts.filter(function (_ref) {
						var id = _ref.id;
						return id != _this.post.id;
					});
				}
			});
		}
	}
});

// confirm.php
Vue.component('item', {
	data: function data() {
		return {};
	},

	props: ['post'],
	template: '\n  \t<div class="item">\n  \t\t<div class="pic-area grid-x align-middle">\n  \t\t\t<div class="close cell shrink" @click="del"><img src="images/xxx.svg"></div>\n  \t\t\t<div class="pic cell shrink"><img src="images/pd-1.jpg"></div>\n  \t\t\t<div class="title cell auto">{{post.title}}</div>\n  \t\t</div>\n\n  \t\t<div class="price">NT.{{post.price}}</div>\n\n  \t\t<div class="amount-area grid-x align-center-middle">\n  \t\t\t<div class="desc cell shrink" @click="desc"><img src="images/desc.svg"></div>\n  \t\t\t<input type="text cell shrink" name="" id="" v-model="post.count">\n  \t\t\t<div class="asc cell shrink" @click="inc"><img src="images/asc.svg"></div>\n  \t\t</div>\n\n  \t\t<div class="subtotal">NT.{{post.price * post.count}}</div>\n  \t</div>\n\t',
	methods: {
		inc: function inc() {
			this.post.count++;
		},
		desc: function desc() {
			if (this.post.count > 1) {
				this.post.count--;
			}
		},
		del: function del() {
			var _this2 = this;

			var answer = confirm("確認要刪除該產品嗎？");
			if (answer) {
				vm.posts = vm.posts.filter(function (_ref2) {
					var id = _ref2.id;
					return id != _this2.post.id;
				});
			}
		}
	}
});

var posts = [{
	id: 1,
	count: 1,
	price: 240,
	title: '杏仁薄片 18包/3小盒'
}, {
	id: 2,
	count: 2,
	price: 150,
	title: '杏仁薄片 6包/3小盒'
}];

var vm = new Vue({
	el: '#app',
	data: {
		posts: posts
	},
	computed: {
		total: function total() {
			var total = 0;
			this.posts.map(function (_ref3) {
				var count = _ref3.count,
				    price = _ref3.price;

				total += count * price;
			});
			return total;
		}
	},
	methods: {},
	mounted: function mounted() {}
});

var vm_menu = new Vue({
	el: '#menuapp',
	data: {
		posts: posts
	},
	computed: {
		total: function total() {
			var total = 0;
			this.posts.map(function (_ref4) {
				var count = _ref4.count,
				    price = _ref4.price;

				total += count * price;
			});
			return total;
		}
	},
	methods: {},
	mounted: function mounted() {}
});

$("[data-r]").each(function (i, el) {

	if (device == 'mobile' && $(el).data("mobile-r") != undefined) {
		var _p = $(el).data("mobile-r");
	} else {
		var _p = $(el).data("r");
	}

	var _st_default = {
		trigger: el,
		start: "top 80%",
		end: "bottom 0%",
		toggleActions: "play reverse play reverse"
		// markers: true,
	};

	var _st = Object.assign(_st_default, _p.scrollTrigger);

	var _t = $(el).offset().top;
	var _hook = $(window).height() * _st.start.replace(/[^0-9]/g, '') / 100;

	if (_t <= _hook) {
		_p.delay = _p.delay != undefined ? _p.delay += 1 : 1;
	}

	delete _p.scrollTrigger;

	var _setting = {
		scrollTrigger: _st,
		duration: 2,
		// opacity: 0,
		ease: "power2.out"
	};

	if (_p != '' && "stagger" in _p) {
		var $el = $(el).children();
	} else {
		var $el = el;
	}

	var _obj = Object.assign(_setting, _p);

	gsap.from($el, _obj);
});

/***/ })
/******/ ]);