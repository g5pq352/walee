<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-yellow">
	<?php include 'topmenu.php'; ?>

	<div class="qaWrap" id="faqApp">
		<div class="head-area">
			<div class="ch text-vue-ch" data-delay=".75">常見問題</div>
			<div class="en text-vue-en" data-delay=".75">Q&A</div>
		</div>

		<div class="qaCatsWrap">
			<ul class="qaCats grid-x align-center">
				<li :class="{'current': cat == 0}" @click="cat = 0">運送</li>
				<li :class="{'current': cat == 1}" @click="cat = 1">付款</li>
				<li :class="{'current': cat == 2}" @click="cat = 2">檢修</li>
				<li :class="{'current': cat == 3}" @click="cat = 3">其他</li>
			</ul>
		</div>

		<div class="innerWrap cell large-auto" >
			<transition name="fade" mode="out-in">
				<section class="question-container" v-if="cat == 0" key="a0">
					<ul class="qaList">
						<li>
							<div class="title-area grid-x align-justify align-middle" v-on:click="open">
								<div class="item grid-x align-top">
									<div class="num grid-x align-center-middle cell shrink">Q1</div>
									<div class="title cell auto">下單後續有哪些流程呢?</div>
								</div>
								<div class="plus"></div>
							</div>
							<div class="answer">
								<div class="content">
									超過12個月租期後，即解除綁約限制。任何時間進入官網「我的訂單」，點選停止租約即可，下個月即停止扣款，我司客服專員會安排下個月到期日之後算起10天內，到府拆裝回廠，進行清消檢修SOP 。
								</div>
							</div>
						</li>
						<li>
							<div class="title-area grid-x align-justify align-middle" v-on:click="open">
								<div class="item grid-x align-top">
									<div class="num grid-x align-center-middle cell shrink">Q2</div>
									<div class="title cell auto">如租賃未滿3年是否可以退租?</div>
								</div>
								<div class="plus"></div>
							</div>
							<div class="answer">
								<div class="content">
									超過12個月租期後，即解除綁約限制。任何時間進入官網「我的訂單」，點選停止租約即可，下個月即停止扣款，我司客服專員會安排下個月到期日之後算起10天內，到府拆裝回廠，進行清消檢修SOP 。
								</div>
							</div>
						</li>
						<li>
							<div class="title-area grid-x align-justify align-middle" v-on:click="open">
								<div class="item grid-x align-top">
									<div class="num grid-x align-center-middle cell shrink">Q3</div>
									<div class="title cell auto">產品如何保存？</div>
								</div>
								<div class="plus"></div>
							</div>
							<div class="answer">
								<div class="content">
									超過12個月租期後，即解除綁約限制。任何時間進入官網「我的訂單」，點選停止租約即可，下個月即停止扣款，我司客服專員會安排下個月到期日之後算起10天內，到府拆裝回廠，進行清消檢修SOP 。
								</div>
							</div>
						</li>
						<li>
							<div class="title-area grid-x align-justify align-middle" v-on:click="open">
								<div class="item grid-x align-top">
									<div class="num grid-x align-center-middle cell shrink">Q4</div>
									<div class="title cell auto">產品適合糖尿病患者食用嗎？</div>
								</div>
								<div class="plus"></div>
							</div>
							<div class="answer">
								<div class="content">
									超過12個月租期後，即解除綁約限制。任何時間進入官網「我的訂單」，點選停止租約即可，下個月即停止扣款，我司客服專員會安排下個月到期日之後算起10天內，到府拆裝回廠，進行清消檢修SOP 。
								</div>
							</div>
						</li>
						<li>
							<div class="title-area grid-x align-justify align-middle" v-on:click="open">
								<div class="item grid-x align-top">
									<div class="num grid-x align-center-middle cell shrink">Q5</div>
									<div class="title cell auto">產品如何保存？</div>
								</div>
								<div class="plus"></div>
							</div>
							<div class="answer">
								<div class="content">
									超過12個月租期後，即解除綁約限制。任何時間進入官網「我的訂單」，點選停止租約即可，下個月即停止扣款，我司客服專員會安排下個月到期日之後算起10天內，到府拆裝回廠，進行清消檢修SOP 。
								</div>
							</div>
						</li>
						<li>
							<div class="title-area grid-x align-justify align-middle" v-on:click="open">
								<div class="item grid-x align-top">
									<div class="num grid-x align-center-middle cell shrink">Q6</div>
									<div class="title cell auto">產品適合糖尿病患者食用嗎？</div>
								</div>
								<div class="plus"></div>
							</div>
							<div class="answer">
								<div class="content">
									超過12個月租期後，即解除綁約限制。任何時間進入官網「我的訂單」，點選停止租約即可，下個月即停止扣款，我司客服專員會安排下個月到期日之後算起10天內，到府拆裝回廠，進行清消檢修SOP 。
								</div>
							</div>
						</li>
					</ul>
				</section>

				<section class="question-container" v-if="cat == 1" key="a1">
					<ul class="qaList">
						<li>
							<div class="title-area grid-x align-justify align-middle" v-on:click="open">
								<div class="item grid-x align-top">
									<div class="num grid-x align-center-middle cell shrink">Q1</div>
									<div class="title cell auto">下單後續有哪些流程呢?</div>
								</div>
								<div class="plus"></div>
							</div>
							<div class="answer">
								<div class="content">
									超過12個月租期後，即解除綁約限制。任何時間進入官網「我的訂單」，點選停止租約即可，下個月即停止扣款，我司客服專員會安排下個月到期日之後算起10天內，到府拆裝回廠，進行清消檢修SOP 。
								</div>
							</div>
						</li>
						<li>
							<div class="title-area grid-x align-justify align-middle" v-on:click="open">
								<div class="item grid-x align-top">
									<div class="num grid-x align-center-middle cell shrink">Q2</div>
									<div class="title cell auto">如租賃未滿3年是否可以退租?</div>
								</div>
								<div class="plus"></div>
							</div>
							<div class="answer">
								<div class="content">
									超過12個月租期後，即解除綁約限制。任何時間進入官網「我的訂單」，點選停止租約即可，下個月即停止扣款，我司客服專員會安排下個月到期日之後算起10天內，到府拆裝回廠，進行清消檢修SOP 。
								</div>
							</div>
						</li>
					</ul>
				</section>

				<section class="question-container" v-if="cat == 2" key="a2">
					<ul class="qaList">
						<li>
							<div class="title-area grid-x align-justify align-middle" v-on:click="open">
								<div class="item grid-x align-top">
									<div class="num grid-x align-center-middle cell shrink">Q1</div>
									<div class="title cell auto">下單後續有哪些流程呢?</div>
								</div>
								<div class="plus"></div>
							</div>
							<div class="answer">
								<div class="content">
									超過12個月租期後，即解除綁約限制。任何時間進入官網「我的訂單」，點選停止租約即可，下個月即停止扣款，我司客服專員會安排下個月到期日之後算起10天內，到府拆裝回廠，進行清消檢修SOP 。
								</div>
							</div>
						</li>
						<li>
							<div class="title-area grid-x align-justify align-middle" v-on:click="open">
								<div class="item grid-x align-top">
									<div class="num grid-x align-center-middle cell shrink">Q2</div>
									<div class="title cell auto">如租賃未滿3年是否可以退租?</div>
								</div>
								<div class="plus"></div>
							</div>
							<div class="answer">
								<div class="content">
									超過12個月租期後，即解除綁約限制。任何時間進入官網「我的訂單」，點選停止租約即可，下個月即停止扣款，我司客服專員會安排下個月到期日之後算起10天內，到府拆裝回廠，進行清消檢修SOP 。
								</div>
							</div>
						</li>
					</ul>
				</section>

				<section class="question-container" v-if="cat == 3" key="a3">
					<ul class="qaList">
						<li>
							<div class="title-area grid-x align-justify align-middle" v-on:click="open">
								<div class="item grid-x align-top">
									<div class="num grid-x align-center-middle cell shrink">Q1</div>
									<div class="title cell auto">下單後續有哪些流程呢?</div>
								</div>
								<div class="plus"></div>
							</div>
							<div class="answer">
								<div class="content">
									超過12個月租期後，即解除綁約限制。任何時間進入官網「我的訂單」，點選停止租約即可，下個月即停止扣款，我司客服專員會安排下個月到期日之後算起10天內，到府拆裝回廠，進行清消檢修SOP 。
								</div>
							</div>
						</li>
						<li>
							<div class="title-area grid-x align-justify align-middle" v-on:click="open">
								<div class="item grid-x align-top">
									<div class="num grid-x align-center-middle cell shrink">Q2</div>
									<div class="title cell auto">如租賃未滿3年是否可以退租?</div>
								</div>
								<div class="plus"></div>
							</div>
							<div class="answer">
								<div class="content">
									超過12個月租期後，即解除綁約限制。任何時間進入官網「我的訂單」，點選停止租約即可，下個月即停止扣款，我司客服專員會安排下個月到期日之後算起10天內，到府拆裝回廠，進行清消檢修SOP 。
								</div>
							</div>
						</li>
					</ul>
				</section>
			</transition>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
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
		el: '#faqApp',
		data: {
			cat: 0,
		},
		computed: {},
		methods: {
			open: function(event) {
				$(event.currentTarget).closest("li").toggleClass("is-open")
				$(event.currentTarget).closest("li").find(".answer").slideToggle(400)
			},
		},
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
</script>