Flickity.prototype._createPrevNextCells = function() {
	this.on('select', this.setPrevNextCells);
};

Flickity.prototype.setPrevNextCells = function() {
	// remove classes
	changeSlideClasses(this.previousSlide, 'remove', 'is-prev');
	changeSlideClasses(this.nextSlide, 'remove', 'is-next');
	// set slides
	this.previousSlide = this.slides[(this.selectedIndex - 1 + this.slides.length) % this.slides.length];
	this.nextSlide = this.slides[(this.selectedIndex + 1 + this.slides.length) % this.slides.length];
	// add classes
	changeSlideClasses(this.previousSlide, 'add', 'is-prev');
	changeSlideClasses(this.nextSlide, 'add', 'is-next');

	// move index
	this.prev_dotsSlide = (this.selectedIndex - 1 + this.slides.length) % this.slides.length;
	this.next_dotsSlide = (this.selectedIndex + 1 + this.slides.length) % this.slides.length;
};

function changeSlideClasses(slide, method, className) {
	if (!slide) {
		return;
	}
	slide.getCellElements().forEach(function(cellElem) {
		cellElem.classList[method](className);
	});
}


$(window).on("resize", function() {
	if ($(this).width() > 1025) {
		if (window.device == 'mobile') {
			location.reload()
		}
		window.device = 'desktop';
	} else {
		if (window.device == 'desktop') {
			location.reload()
		}
		window.device = 'mobile';
	}
}).trigger("resize")




if (navigator.appVersion.indexOf("Mac") != -1) {
	$("body").get(0).style.setProperty('--lock', "15px");
} else {
	$("body").get(0).style.setProperty('--lock', "17px");
}




$("#preload").delay(500).fadeOut(500)


class RyderMarquee {
	constructor(el, direct = 0) {
		this.hero = $(el).parent().get(0)
		this.wrapper = el
		this.delta = 0
		this.transform = 0
		this.step = (device == 'mobile') ? 0.6 : 0.8
		this.direct = direct % 2
		this.hover = false

		if (this.direct == 1) {
			this.wrapper.style.transform = `translate3d(-${this.wrapper.getBoundingClientRect().width / 2}px, 0, 0)`;
			this.transform = -this.wrapper.getBoundingClientRect().width / 2
		}

		// $(el).hover(() => {
		// 	this.hover = true
		// }, () => {
		// 	this.hover = false
		// })
	}

	animate() {
		if (!this.hover) {
			this.transform += this.step
		}

		if (this.direct == 1) {
			if (this.transform > 0) {
				this.transform = -this.wrapper.getBoundingClientRect().width / 2;
			}
			this.wrapper.style.transform = `translate3d(${this.transform}px, 0, 0)`;
		} else {
			if (this.transform > this.wrapper.getBoundingClientRect().width / 2) {
				this.transform = 0;
			}
			this.wrapper.style.transform = `translate3d(-${this.transform}px, 0, 0)`;
		}
	}

	render() {
		this.scrollY = $(window).scrollTop()

		const bounding = this.hero.getBoundingClientRect();
		const distance = (window.innerHeight + this.scrollY) - (bounding.top + this.scrollY);
		const percentage = distance / ((window.innerHeight + bounding.height) / 100);

		if (percentage > 0 && percentage < 100) {
			this.animate();
		}
	}

	create() {
		gsap.ticker.add(this.render.bind(this));
	}
}
class RyderMarqueeHover {
	constructor(el, direct = 0) {
		this.hero = $(el).parent().get(0)
		this.wrapper = el
		this.delta = 0
		this.transform = 0
		this.step = (device == 'mobile') ? 0.6 : 0.8
		this.direct = direct % 2
		this.hover = false

		if (this.direct == 1) {
			this.wrapper.style.transform = `translate3d(-${this.wrapper.getBoundingClientRect().width / 2}px, 0, 0)`;
			this.transform = -this.wrapper.getBoundingClientRect().width / 2
		}

		if(device != 'mobile'){
			$(el).hover(() => {
				this.hover = true
			}, () => {
				this.hover = false
			})
		}
	}

	animate() {
		if (!this.hover) {
			this.transform += this.step
		}

		if (this.direct == 1) {
			if (this.transform > 0) {
				this.transform = -this.wrapper.getBoundingClientRect().width / 2;
			}
			this.wrapper.style.transform = `translate3d(${this.transform}px, 0, 0)`;
		} else {
			if (this.transform > this.wrapper.getBoundingClientRect().width / 2) {
				this.transform = 0;
			}
			this.wrapper.style.transform = `translate3d(-${this.transform}px, 0, 0)`;
		}
	}

	render() {
		this.scrollY = $(window).scrollTop()

		const bounding = this.hero.getBoundingClientRect();
		const distance = (window.innerHeight + this.scrollY) - (bounding.top + this.scrollY);
		const percentage = distance / ((window.innerHeight + bounding.height) / 100);

		if (percentage > 0 && percentage < 100) {
			this.animate();
		}
	}

	create() {
		gsap.ticker.add(this.render.bind(this));
	}
}

$(".marquee").each(function (i, el) {
	var $copy = $(el).contents().clone()
	$(el).append($copy)

	var ryderMarquee = new RyderMarquee(el, i).create()
})

$(".marqueeHover").each(function (i, el) {
	var $copy = $(el).contents().clone()
	$(el).append($copy)

	var ryderMarquee = new RyderMarqueeHover(el, i).create()
})


$("[data-depth]").each(function (i, el) {
	if(device == 'desktop'){
		gsap.to(el, {
			scrollTrigger: {
				trigger: el,
				start: "top top",
				end: "bottom top",
				scrub: true,
			},
			y: `${$(window).height() * el.dataset.depth}px`,
			ease: "none",
		});
	}
})

$(".scrolldown").on("click", function () {
	gsap.to(window, {
		duration: 1.2,
		scrollTo: $(window).height(),
		ease: Power2.easeInOut,
	});
})

if(device == 'mobile'){
	// $(".mobile-bg").css("height", $(".menu-fixed .menuListWrap").height() + 76 + 38)
	var $menu_tl = gsap.timeline({
		paused: true,
	}).from(".menu-fixed .color-bg", {
		width: 0,
		duration: .75,
		ease: "circle.out"
	}).from(".menu-fixed .mobile-bg", {
		width: 0,
		duration: .75,
		ease: "circle.out"
	}, 0).fromTo($(".menuList-mobile li"), {
		opacity: 0,
		y: 20,
	}, {
		duration: 1,
		y: 0,
		opacity: 1,
		stagger: 0.05,
		ease: "circle.out"
	}, "<.5").fromTo('.menu-fixed .menuListWrap .items-area', {
		opacity: 0,
	}, {
		opacity: 1,
		duration: 1,
		ease: "none",
	}, "<1")
}else{
	var $menu_tl = gsap.timeline({
		paused: true,
	}).from(".menu-fixed .color-bg", {
		width: 0,
		duration: .75,
		ease: "circle.out"
	}).fromTo($(".menuList li"), {
		opacity: 0,
		y: 20,
	}, {
		duration: 1,
		y: 0,
		opacity: 1,
		stagger: 0.05,
		ease: "circle.out"
	}).fromTo('.menu-fixed .menuListWrap .items-area', {
		opacity: 0,
	}, {
		opacity: 1,
		duration: 1,
		ease: "none",
	}, "<.5").fromTo('.menu-fixed .info-area .pic', {
		x: 420,
		opacity: 0,
	}, {
		opacity: 1,
		duration: 1,
		x: 0,
		ease: "circle.out"
	}, "<.25")
}





$(".openmenu").on("click", function(){
	$(".menu-fixed").addClass("is-show")

	$menu_tl.play(0)
})
$(".hamburger").on("click", function(){
	$(".menu-fixed").removeClass("is-show")
})

$(".menuList >li").hover(function() {
	$(this).find(".submenuList").stop(true).slideDown(300)
}, function() {
	$(this).find(".submenuList").stop(true).slideUp(300)
})


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



if(device != 'mobile'){
	function shuffleArray(array) {
		for (var i = array.length - 1; i > 0; i--) {
			var j = Math.floor(Math.random() * (i + 1));
			var temp = array[i];
			array[i] = array[j];
			array[j] = temp;
		}
		return array;
	}

	$(".text-rd-ch").each(function (i, el) {
		var _delay = $(el).data("delay") != "" ? $(el).data("delay") : 0

		var _t = new SplitText(el, {
			type: "chars,words",
			charsClass: "char++",
		})
	
		shuffleArray(_t.chars);
	
		// show
		var _setting_s = {
			scrollTrigger: {
				trigger: el,
				start: "top 80%",
				end: "bottom 50%",
				toggleActions: "play none none none",
	
			},
			delay: _delay,
			duration: 1.5,
			opacity: 0,
			stagger: 0.1,
			// '-webkit-filter': 'blur(3px)',
			ease: "sine.out",
		}
		var _p_s = $(el).data("f")
		var _obj_s = Object.assign(_setting_s, _p_s);
		gsap.from(_t.chars, _obj_s);
	
	})
	
	$(".text-rd-en").each(function (i, el) {
		var _delay = $(el).data("delay") != "" ? $(el).data("delay") : 0

		var _t = new SplitText(el, {
			type: "chars,words",
			charsClass: "char++",
		})
	
		shuffleArray(_t.chars);
	
		// show
		var _setting_s = {
			scrollTrigger: {
				trigger: el,
				start: "top 80%",
				end: "bottom 50%",
				toggleActions: "play none none none",
	
			},
			delay: _delay,
			duration: 1,
			opacity: 0,
			stagger: 0.05,
			// '-webkit-filter': 'blur(3px)',
			ease: "sine.out",
		}
		var _p_s = $(el).data("f")
		var _obj_s = Object.assign(_setting_s, _p_s);
		gsap.from(_t.chars, _obj_s);
	
	})
	
	$(".content-show").each(function (i, el) {
		var _delay = $(el).data("delay") != "" ? $(el).data("delay") : 0

		// show
		var _setting_s = {
			scrollTrigger: {
				trigger: el,
				start: "top 80%",
				end: "bottom 50%",
				toggleActions: "play none none none",
	
			},
			delay: _delay,
			duration: 1.5,
			opacity: 0,
			// '-webkit-filter': 'blur(3px)',
			ease: "sine.out",
		}
		var _p_s = $(el).data("f")
		var _obj_s = Object.assign(_setting_s, _p_s);
		gsap.from($(el), _obj_s);
	})
}


$(".fancy-close, .fancy-closeBlock, .dialog-fancyContainer .btn, #confirm-close").on("click", function() {
	$(".m-fancyWrap").removeClass("is-show")
	gsap.delayedCall(0.5, function() {
		$("body").removeClass("is-lock")
	});
})


$(".addtocart").on("click", function() {
	$(".cart-fancyWrap").addClass("is-show").scrollTop(0)
	$("body").addClass("is-lock")
})


$("#logout").on("click", function() {
	$(".logout-fancyWrap").addClass("is-show").scrollTop(0)
	$("body").addClass("is-lock")
	gsap.delayedCall(1, function() {
		location.href = 'login.php'
	});
})


$(".hamburger-area").on("click", function() {
	$(this).toggleClass("is-open")
	$(".mobile-topmenuWrap").fadeToggle(500)
})

$("#menuList-mobile li a").on("click", function() {
	$(this).closest("li").toggleClass("is-open")
	$(this).closest("li").find(".submenuListWrap").slideToggle(500)
	// $(this).toggleClass("is-open")
	// $(".submenuListWrap", this).slideToggle(500)
})




$("[data-r]").each(function(i, el) {

	if (device == 'mobile' && $(el).data("mobile-r") != undefined) {
		var _p = $(el).data("mobile-r")
	} else {
		var _p = $(el).data("r")
	}

	var _st_default = {
		trigger: el,
		start: "top 80%",
		end: "bottom 0%",
		toggleActions: "play reverse play reverse",
		// markers: true,
	}

	var _st = Object.assign(_st_default, _p.scrollTrigger)

	var _t = $(el).offset().top
	var _hook = $(window).height() * _st.start.replace(/[^0-9]/g, '') / 100

	if (_t <= _hook) {
		_p.delay = (_p.delay != undefined) ? _p.delay += 1 : 1
	}

	delete _p.scrollTrigger

	var _setting = {
		scrollTrigger: _st,
		duration: 2,
		// opacity: 0,
		ease: "power2.out",
	}

	if (_p != '' && "stagger" in _p) {
		var $el = $(el).children()
	} else {
		var $el = el
	}

	var _obj = Object.assign(_setting, _p);

	gsap.from($el, _obj);
})