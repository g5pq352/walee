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
		<div class="head"><img src="images/confirm-detail-head.svg"></div>

		<section class="ryder-tableWrap">
			<ul class="head-area">
				<li>產品名稱</li>
				<li>價格</li>
				<li>數量</li>
				<li>小計</li>
			</ul>

			<div class="body-area" id="app">
				<section class="plist">
					<item v-for="post in posts" :post="post"></item>
				</section>

				<div class="total-area flex-container align-right align-middle">
					<div class="title">小計</div>
					<div class="total">NT.{{total}}</div>
				</div>

				<div class="gonext"><a href="checkout.php"><img src="images/gostep2.svg"></a></div>
			</div>
		</section>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>