<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="qaWrap" id="faqApp">
		<div class="head-area">
			<div class="ch">常見問題</div>
			<div class="en">Q&A</div>
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
								<div class="item grid-x align-middle">
									<div class="num grid-x align-center-middle">Q1</div>
									<div class="title">下單後續有哪些流程呢?</div>
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
								<div class="item grid-x align-middle">
									<div class="num grid-x align-center-middle">Q2</div>
									<div class="title">如租賃未滿3年是否可以退租?</div>
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
								<div class="item grid-x align-middle">
									<div class="num grid-x align-center-middle">Q3</div>
									<div class="title">產品如何保存？</div>
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
								<div class="item grid-x align-middle">
									<div class="num grid-x align-center-middle">Q4</div>
									<div class="title">產品適合糖尿病患者食用嗎？</div>
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
								<div class="item grid-x align-middle">
									<div class="num grid-x align-center-middle">Q5</div>
									<div class="title">產品如何保存？</div>
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
								<div class="item grid-x align-middle">
									<div class="num grid-x align-center-middle">Q6</div>
									<div class="title">產品適合糖尿病患者食用嗎？</div>
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
								<div class="item grid-x align-middle">
									<div class="num grid-x align-center-middle">Q1</div>
									<div class="title">下單後續有哪些流程呢?</div>
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
								<div class="item grid-x align-middle">
									<div class="num grid-x align-center-middle">Q2</div>
									<div class="title">如租賃未滿3年是否可以退租?</div>
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
								<div class="item grid-x align-middle">
									<div class="num grid-x align-center-middle">Q1</div>
									<div class="title">下單後續有哪些流程呢?</div>
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
								<div class="item grid-x align-middle">
									<div class="num grid-x align-center-middle">Q2</div>
									<div class="title">如租賃未滿3年是否可以退租?</div>
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
								<div class="item grid-x align-middle">
									<div class="num grid-x align-center-middle">Q1</div>
									<div class="title">下單後續有哪些流程呢?</div>
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
								<div class="item grid-x align-middle">
									<div class="num grid-x align-center-middle">Q2</div>
									<div class="title">如租賃未滿3年是否可以退租?</div>
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
		mounted() {},
		updated() {},
	})
</script>