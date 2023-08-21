<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="loginWrap grid-x align-center">
		<div class="login-container cell large-shrink">
			<div class="head"><img src="images/login-head.svg"></div>

			<form action="member.php" method="POST" class="loginForm cell large-auto">
				<div class="field-container">
					<div class="item grid-x align-middle">
						<div class="title cell shrink">手機</div>
						<input type="text" name="" id="" class="cell auto">
					</div>
					<div class="item grid-x align-middle">
						<div class="title cell shrink">密碼</div>
						<input type="password" name="" id="" class="cell auto">
					</div>
				</div>

				<button class="btn"><img src="images/btn-login.svg"></button>

				<div class="join"><a href="join.php"><img src="images/btn-join.svg"></a></div>
				<div class="forgot"><a href="forgot.php"><img src="images/btn-forgot.svg"></a></div>
			</form>
		</div>

		<div class="buy-container">
			<div class="head"><img src="images/buy-head.svg"></div>

			<div class="content">
				無須登入會員流程，快速獲得您所需<br>
				的消費內容!
			</div>

			<div class="btn"><a href="product.php"><img src="images/btn-buy.svg"></a></div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>