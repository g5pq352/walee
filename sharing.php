<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="sharingWrap">
		<div class="head-ch text-vue-ch" data-delay=".75">共享方案</div>

		<div class="sharing" id="sharingApp">
			<div class="head-en text-vue-en" data-delay=".75">SHARING PLAN</div>

			<div class="sharing-items">
				<ul class="sharingCats">
					<li :class="{'current': cat == 0}" @click="cat = 0">
						<div class="en">PLAN A</div>
						<div class="ch">單筆付清</div>
					</li>
					<li :class="{'current': cat == 1}" @click="cat = 1">
						<div class="en">PLAN B</div>
						<div class="ch">12期分期付款</div>
					</li>
				</ul>

				<transition>	
					<article class="sharing-item" v-if="cat == 0" key="a0">
						<div class="items-area">
							<div class="item grid-x">
								<div class="title-area cell shrink">
									<div class="grid-y align-middle head"><span>首付</span></div>
									<div class="note">綁約<i>12</i>個月</div>
								</div>
								<div class="content-area cell auto">
									<div class="beat align-middle align-justify">
										<div class="num grid-x align-center-middle">01</div>
										<div class="title">保證金</div>
										<div class="price">
											<span>12,000<i>元</i></span>
											<div class="note">(停租後退還)</div>
										</div>
									</div>
									<div class="plus">+</div>
									<div class="beat align-middle align-justify">
										<div class="num grid-x align-center-middle">02</div>
										<div class="title">一次性消費</div>
										<div class="price">
											<span>6,880<i>元</i></span>
											<div class="note">(不可退還)</div>
										</div>
									</div>
									<div class="total grid-x align-justify align-bottom">
										<div class="gon">合計</div>
										<div class="">
											18,880
											<i>元</i>
										</div>
									</div>
								</div>
							</div>
							<div class="item grid-x">
								<div class="title-area cell shrink">
									<span class="sec grid-x align-center-middle head"><span>月費</span></span>
								</div>
								<div class="content-area cell auto">
									<div class="total grid-x align-justify align-bottom">
										<div class="gon">每月</div>
										<div class="">
											980
											<i>元</i>
										</div>
										<div class="note">(每月定期定額)</div>
									</div>
								</div>
							</div>
						</div>
						<div class="remake">
							<ul class="remakeList show-for-large">
								<li class="grid-x align-top">
									<div class="title cell shrink">保證金:</div>
									<div class="content cell auto">僅提供收據， 停約結算後無息退還。</div>
								</li>
								<li class="grid-x align-top">
									<div class="title cell shrink">一次性消費項目:</div>
									<div class="content cell auto">提供電子發票， 停約後不可退還，  內容主要包括嬰兒貼身軟裝、運輸、  組裝服務、  包裝耗材。</div>
								</li>
								<li class="grid-x align-top">
									<div class="title cell shrink">偏鄉地區</div>
									<div class="content cell auto download">
										<a href="images/偏遠加計運費.pdf" target="_blank"><span>運費表下載</span><img src="images/sharing-download.svg" class="icon"></a>
									</div>
								</li>
							</ul>
							<ul class="remakeList hide-for-large">
								<li>
									<div class="content"><i class="title">保證金：</i>僅提供收據， 停約結算後無息退還。</div>
								</li>
								<li>
									<div class="content"><i class="title">一次性消費項目：</i>提供電子發票， 停約後不可退還，  內容主要包括嬰兒貼身軟裝、運輸、  組裝服務、  包裝耗材。</div>
								</li>
								<li>
									<div class="content download">
										<a href="javascript:;"><i class="title">偏鄉地區</i><span>運費表下載</span><img src="images/sharing-download.svg" class="icon"></a>
									</div>
								</li>
							</ul>
						</div>
					</article>

					<article class="sharing-item" v-if="cat == 1" key="a1">
						<div class="items-area">
							<div class="item grid-x">
								<div class="title-area cell shrink">
									<div class="grid-y align-middle head"><span>首付</span></div>
									<div class="note">綁約<i>12</i>個月</div>
								</div>
								<div class="content-area cell auto">
									<div class="beat align-middle align-justify">
										<div class="num grid-x align-center-middle">01</div>
										<div class="title">保證金</div>
										<div class="price">
											<span>12,000<i>元</i></span>
											<div class="note">(停租後退還)</div>
										</div>
									</div>
									<div class="plus">+</div>
									<div class="beat align-middle align-justify">
										<div class="num grid-x align-center-middle">02</div>
										<div class="title">一次性消費</div>
										<div class="price">
											<span>7,680<i>元</i></span>
											<div class="note">(不可退還)</div>
										</div>
									</div>
									<div class="total grid-x align-justify align-bottom">
										<div class="gon">合計</div>
										<div class="">
											19,860
											<i>元</i>
										</div>
									</div>
									<div class="total month grid-x align-justify align-bottom">
										<div class="gon">月付</div>
										<div class="">
											1,640
											<i>元</i>
										</div>
									</div>
								</div>
							</div>
							<div class="item grid-x">
								<div class="title-area cell shrink">
									<div class="sec grid-x align-center-middle head"><span>月費</span></div>
								</div>
								<div class="content-area cell auto">
									<div class="total grid-x align-justify align-bottom">
										<div class="gon">每月</div>
										<div class="">
											980
											<i>元</i>
										</div>
										<div class="note">(每月定期定額)</div>
									</div>
								</div>
							</div>
						</div>
						<div class="remake">
							<ul class="remakeList show-for-large">
								<li class="grid-x align-top">
									<div class="title cell shrink">保證金:</div>
									<div class="content cell auto">僅提供收據， 停約結算後無息退還。</div>
								</li>
								<li class="grid-x align-top">
									<div class="title cell shrink">一次性消費項目:</div>
									<div class="content cell auto">提供電子發票， 停約後不可退還，  內容主要包括嬰兒貼身軟裝、運輸、  組裝服務、  包裝耗材。</div>
								</li>
								<li class="grid-x align-top">
									<div class="title cell shrink">偏鄉地區</div>
									<div class="content cell auto download">
										<a href="images/偏遠加計運費.pdf" target="_blank"><span>運費表下載</span><img src="images/sharing-download.svg" class="icon"></a>
									</div>
								</li>
							</ul>
							<ul class="remakeList hide-for-large">
								<li>
									<div class="content"><i class="title">保證金：</i>僅提供收據， 停約結算後無息退還。</div>
								</li>
								<li>
									<div class="content"><i class="title">一次性消費項目：</i>提供電子發票， 停約後不可退還，  內容主要包括嬰兒貼身軟裝、運輸、  組裝服務、  包裝耗材。</div>
								</li>
								<li>
									<div class="content download">
										<a href="javascript:;"><i class="title">偏鄉地區</i><span>運費表下載</span><img src="images/sharing-download.svg" class="icon"></a>
									</div>
								</li>
							</ul>
						</div>
					</article>
				</transition>
			</div>

			<div class="lelecoco text-center">
				<div class="rule">詳細流程與相關規定請閱讀<a href="contract.php" target="_blank">娃力共享合約條款</a></div>

				<div class="agree">
					<div class="terms-area">
						<input type="radio" name="terms" id="t1">
						<label for="t1">我已閱讀並同意相關服務條款</label>
					</div>
				</div>

				<div class="goto">
					<a href="confirm.php"><div class="arrow-go">
						<div class="grid-x align-center-middle">
							<div class="title">換我守護</div>
							<svg width="99.37" height="93.98" viewBox="0 0 99.37 93.98">
								<path d="M55.23,93.98c-4.57-.09-12.34,.1-16.8-.42-13.75-1.58-26.27-10.16-32.91-22.25C.57,62.84-.3,52.9,.08,43.3,.17,19.64,19.79,.18,43.43,.07c4.58,.03,12.34-.27,16.81,.2,20.76,2.02,37.88,19.86,38.94,40.72,.29,6.02,.38,12.23-.76,18.18-4.13,20.15-22.65,35.05-43.2,34.81h0Zm0-1.89c19.6-.06,36.77-14.3,40.73-33.43,1.08-5.73,.99-11.71,.77-17.52-.76-18.8-15.82-35.66-34.38-38.66-5.33-1.04-13.43-.64-18.91-.77C23.87,1.35,5.89,15.93,2,35.12c-.84,4.23-.98,8.67-.91,12.97-.05,3.52,.24,7.13,.87,10.59,.17,.73,.7,2.67,.88,3.43,.86,2.97,2.17,5.96,3.66,8.67,6.57,11.66,18.8,19.8,32.12,21.15,4.36,.45,12.15,.15,16.61,.18h0Z"/>
								<g class="svg-arrow">
									<path d="M36.98,33.18c7.95,2.79,15.85,5.76,23.71,8.79,.6,.26,1.25,.44,1.87,.74,3.42,1.52,3.18,6.64-.29,7.91-8.37,3.47-16.81,6.91-25.28,10.12-.65,.24-1.08-.73-.43-1.03,8.23-3.77,16.61-7.37,24.96-10.89,.93-.38,1.48-1.18,1.51-2.12,.07-1.34-.92-2.2-2.14-2.56-.56-.23-2.13-.83-2.71-1.07-7.24-2.85-14.45-5.78-21.6-8.84-.64-.27-.27-1.28,.41-1.04h0Z"/>
									<path d="M56.93,40.5s6.87,2.84,10.45,3.35c4.44,.63,3.82,4.47,.65,5.32-3.24,.87-2.42-.05-10.56,3.46l6.59-4.36-2.14-4.79-4.98-2.98Z"/>
								</g>
							</svg>
						</div>
					</div></a>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
<?php include 'changeColor.php'; ?>
</html>

<script>
	function shuffleArray(array) {
		for (var i = array.length - 1; i > 0; i--) {
			var j = Math.floor(Math.random() * (i + 1));
			var temp = array[i];
			array[i] = array[j];
			array[j] = temp;
		}
		return array;
	}

	new Vue({
		el: '#sharingApp',
		data: {
			cat: 0,
		},
		computed: {},
		methods: {},
		filters: {},
		mounted() {
			$(".text-vue-ch").each(function (i, el) {
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
					delay: .75,
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
			
			$(".text-vue-en").each(function (i, el) {
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
					delay: .75,
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
		},
		updated() {},
	})

	if(device == 'desktop'){
		var _windowH = $("#sharingApp").offset().top
		$(window).on("scroll", () => {
			var _scrollTop = $(window).scrollTop()

			if (_scrollTop > _windowH * 0.9) {
				$(".topmenu-fixed").removeClass("is-white")
				return false;
			} else {
				$(".topmenu-fixed").addClass("is-white")
			}
		})
	}
</script>