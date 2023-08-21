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

$(".marquee").each(function (i, el) {
	var $copy = $(el).contents().clone()
	$(el).append($copy)

	var ryderMarquee = new RyderMarquee(el, i).create()
})

$(".scrolldown").on("click", function () {
	gsap.to(window, {
		duration: 1.2,
		scrollTo: $(window).height(),
		ease: Power2.easeInOut,
	});
})

$(".openmenu").on("click", function(){
	$(".menu-fixed").addClass("is-show")
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





$(".fancy-close, .fancy-closeBlock, .dialog-fancyContainer .btn").on("click", function() {
	$(".m-fancyWrap").removeClass("is-show")
	gsap.delayedCall(0.5, function() {
		$("body").removeClass("is-lock")
	});
})


$(".addtocart").on("click", function() {
	$(".cart-fancyWrap").addClass("is-show").scrollTop(0)
	$("body").addClass("is-lock")
})





$(".hamburger-area").on("click", function() {
	$(this).toggleClass("is-open")
	$(".mobile-topmenuWrap").fadeToggle(500)
})







// topmenu.php
Vue.component('menu-item', {
	data() {
		return {}
	},
	props: [
		'post',
	],
	template: `
  	<div class="item">
  		<div class="pic-area grid-x align-middle">
  			<div class="close cell shrink" @click="del"><img src="images/xxx.svg"></div>
  			<div class="pic cell shrink show-for-large"><img src="images/pd-1.jpg"></div>
  			<div class="title cell auto">{{post.title}}</div>
  		</div>

  		<div class="amount-area grid-x align-center-middle">
  			<div class="desc cell shrink" @click="desc"><img src="images/desc.svg"></div>
  			<input type="text cell shrink" name="" id="" v-model="post.count">
  			<div class="asc cell shrink" @click="inc"><img src="images/asc.svg"></div>
  		</div>

  		<div class="subtotal">NT.{{post.price}}</div>
  	</div>
	`,
	methods: {
		inc() {
			this.post.count++
		},
		desc() {
			if (this.post.count > 1) {
				this.post.count--
			}
		},
		del() {
			Swal.fire({
				template: '#my-template',
			}).then((result) => {
				if (result.isConfirmed) {
					vm_menu.posts = vm_menu.posts.filter(({ id }) => id != this.post.id)
				}
			})
		},
	},
})



// confirm.php
Vue.component('item', {
	data() {
		return {}
	},
	props: [
		'post',
	],
	template: `
  	<div class="item">
  		<div class="pic-area grid-x align-middle">
  			<div class="close cell shrink" @click="del"><img src="images/xxx.svg"></div>
  			<div class="pic cell shrink"><img src="images/pd-1.jpg"></div>
  			<div class="title cell auto">{{post.title}}</div>
  		</div>

  		<div class="price">NT.{{post.price}}</div>

  		<div class="amount-area grid-x align-center-middle">
  			<div class="desc cell shrink" @click="desc"><img src="images/desc.svg"></div>
  			<input type="text cell shrink" name="" id="" v-model="post.count">
  			<div class="asc cell shrink" @click="inc"><img src="images/asc.svg"></div>
  		</div>

  		<div class="subtotal">NT.{{post.price * post.count}}</div>
  	</div>
	`,
	methods: {
		inc() {
			this.post.count++
		},
		desc() {
			if (this.post.count > 1) {
				this.post.count--
			}
		},
		del() {
			var answer = confirm("確認要刪除該產品嗎？");
			if (answer) {
				vm.posts = vm.posts.filter(({ id }) => id != this.post.id)
			}
		},
	},
})


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
}]


const vm = new Vue({
	el: '#app',
	data: {
		posts,
	},
	computed: {
		total() {
			let total = 0
			this.posts.map(({ count, price }) => {
				total += count * price
			})
			return total
		}
	},
	methods: {},
	mounted() { },
})

const vm_menu = new Vue({
	el: '#menuapp',
	data: {
		posts,
	},
	computed: {
		total() {
			let total = 0
			this.posts.map(({ count, price }) => {
				total += count * price
			})
			return total
		}
	},
	methods: {},
	mounted() { },
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