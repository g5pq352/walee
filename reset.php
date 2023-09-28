<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-yellow">
	<?php include 'topmenu.php'; ?>

	<div class="loginWrap">
		<div class="login-container">
			<div class="head">
				<div class="ch">重設密碼</div>
				<div class="en">PASSWORD</div>
			</div>

			<form action="login.php" method="POST" class="loginForm cell large-auto">
				<div class="field-container">
					<div class="item grid-x align-middle">
						<div class="title cell shrink">密碼</div>
						<input type="password" name="" id="" class="cell auto" placeholder="請輸入您的新密碼">
					</div>
					<div class="item grid-x align-middle">
						<div class="title cell shrink">確認新密碼</div>
						<input type="password" name="" id="" class="cell auto" placeholder="請輸入您的新密碼">
					</div>
				</div>

				<div class="btn-area grid-x align-center">
					<button class="btn">
						<div class="arrow-go">
							<div class="grid-x align-center-middle">
								<div class="title submit">送 出</div>
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
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>