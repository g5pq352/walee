<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-yellow">
	<?php include 'topmenu.php'; ?>

	<div class="stepWrap">
		<img src="images/step-1.svg" class="show-for-large">
		<img src="images/step-1-mobile.svg" class="hide-for-large">
	</div>

	<div class="confirmWrap">
		<div class="note text-center">請勾選適合您的方案後, 前往結帳</div>

		<section class="ryder-tableWrap">
			<ul class="head-area show-for-large">
				<li></li>
				<li>商品</li>
				<li>方案</li>
				<li>價格明細</li>
			</ul>

			<form action="checkout.php">
				<div class="body-area">
					<div class="info-area grid-x align-middle">
						<div class="pic large-order-1 small-order-2"><img src="images/pd-1.jpg"></div>
						<div class="name large-order-2 small-order-1">娃力嬰兒床</div>
					</div>
					<div class="planWrap">
						<ul class="planList">
							<li class="grid-x align-middle">
								<div class="radio-item">
									<input type="radio" name="plan" id="p1" value="1">
									<label for="p1">
										<div>單筆付清</div>
										<span>綁約<i>12</i>個月</span>
									</label>
								</div>
								<div class="article-area">
									<div class="pay-items grid-x">
										<div class="remake">首付</div>

										<div class="payment">
											<div class="title-area-item">
												<div class="title-area grid-x align-middle">
													<div class="num grid-x align-center-middle">01</div>
													<div class="title">保證金</div>
													<div class="price">12,000</div>
													<div class="unit">元</div>
												</div>
												<div class="title-area grid-x align-middle">
													<div class="num grid-x align-center-middle">02</div>
													<div class="title">一次性消費</div>
													<div class="price">6,880</div>
													<div class="unit">元</div>
												</div>
											</div>
											<div class="total-area grid-x align-middle">
												<div class="ch">合計 <span class="show-for-large">$</span></div>
												<div class="price">18,880</div>
												<div class="unit">元</div>
											</div>
										</div>
									</div>

									<div class="pay-items gray grid-x align-middle">
										<div class="remake">月費</div>

										<div class="payment">
											<div class="total-area grid-x align-middle">
												<div class="ch">每月 <span class="show-for-large">$</span></div>
												<div class="price">980</div>
												<div class="unit">元</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="grid-x align-middle">
								<div class="radio-item two">
									<input type="radio" name="plan" id="p2" value="2">
									<label for="p2">
										<div><i>12</i>期<br class="show-for-large">分期付款</div>
										<span>綁約<i>12</i>個月</span>
									</label>
								</div>
								<div class="article-area">
									<div class="pay-items grid-x">
										<div class="remake">首付</div>

										<div class="payment">
											<div class="title-area-item">
												<div class="title-area grid-x align-middle">
													<div class="num grid-x align-center-middle">01</div>
													<div class="title">保證金</div>
													<div class="price">12,000</div>
													<div class="unit">元</div>
												</div>
												<div class="title-area grid-x align-middle">
													<div class="num grid-x align-center-middle">02</div>
													<div class="title">一次性消費</div>
													<div class="price">7,680</div>
													<div class="unit">元</div>
												</div>
											</div>
											<div class="total-area grid-x align-middle">
												<div class="ch">合計 <span class="show-for-large">$</span></div>
												<div class="price">19,860</div>
												<div class="unit">元</div>
											</div>
											<div class="total-area month grid-x align-middle">
												<div class="ch">月付 <span class="show-for-large">$</span></div>
												<div class="price">1,640</div>
												<div class="unit">元</div>
											</div>
										</div>
									</div>

									<div class="pay-items gray grid-x align-middle">
										<div class="remake">月費</div>

										<div class="payment">
											<div class="total-area grid-x align-middle">
												<div class="ch">每月 <span class="show-for-large">$</span></div>
												<div class="price">980</div>
												<div class="unit">元</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="btn-area grid-x align-center">
					<button class="btn">
						<div class="arrow-go">
							<div class="grid-x align-center-middle">
								<div class="title">確認送出</div>
								<svg width="59.52" height="56.3" viewBox="0 0 59.52 56.3">
									<path d="M32.85,56.3c-1.97-.04-6.61-.02-8.52-.18-8.75-.49-16.9-5.84-21.07-13.5C.35,37.57-.18,31.64,.05,25.95-.12,12.11,12.02,0,25.88,.06c1.99,0,6.6-.13,8.52-.02,8.86,.3,17.25,5.55,21.58,13.27,2.48,4.25,3.51,9.24,3.45,14.13,1.19,15.57-10.9,29.01-26.58,28.84h0Zm0-1.89c12.99,.02,24.08-11.23,24.06-24.14,.22-5.47-.15-10.99-2.95-15.81-3.92-7.12-11.51-12.13-19.67-12.58-1.82-.16-6.52-.13-8.41-.17C12.64,1.37,1.1,12.69,1.08,25.96c-.21,5.52,.25,11.28,3.18,16.11,4.09,7.19,11.91,12.1,20.19,12.36,1.84,.11,6.52-.03,8.42-.03h0Z" style="fill: #968375;"/>
									<g class="svg-arrow">
										<path d="M20.43,19.3c5.51,1.95,10.93,3.96,16.37,6.1,2.18,.94,2.02,4.29-.19,5.06,0,0-2.3,.95-2.3,.95-4.46,1.83-9.39,3.82-13.87,5.53-.18,.07-.39-.02-.46-.21-.07-.18,.02-.38,.19-.45,3.02-1.37,6.05-2.72,9.1-4.04,1.51-.65,5.4-2.31,6.87-2.93,1.22-.43,1.29-2.26,.13-2.77-2.24-.92-4.63-1.82-6.89-2.75-3.08-1.24-6.14-2.51-9.2-3.82-.41-.17-.16-.83,.26-.67h0Z" style="fill: #968375;"/>
										<path d="M33.2,23.98s4.39,1.82,6.69,2.14c2.84,.4,2.44,2.86,.41,3.4-2.07,.56-1.55-.03-6.76,2.21l4.21-2.79-1.37-3.06-3.19-1.91Z" style="fill: #968375;"/>
									</g>
								</svg>
							</div>
						</div>
					</button>
				</div>
			</form>
		</section>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>