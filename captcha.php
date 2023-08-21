<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-darkyellow">
	<?php include 'topmenu.php'; ?>

	<div class="joinWrap">
		<div class="captcha-container">
			<div class="head"><img src="images/captcha-head.svg"></div>
			<div class="ok"><img src="images/captcha-ok.svg"></div>

			<form class="captchaForm" action="index.php" method="POST">
				<div class="note">請於時間內輸入手機簡訊驗證碼</div>
				<div class="field">
					<input type="text" name="" id="" placeholder="輸入驗證碼">
				</div>
				<button class="btn"><img src="images/btn-send.svg"></button>
			</form>

			<div class="resent-area">
				<div class="note">如未收到簡訊，請按重新發送</div>
				<button class="btn"><img src="images/btn-resend.svg"></button>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>