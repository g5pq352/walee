<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-darkyellow">
	<?php include 'topmenu.php'; ?>

	<div class="memberWrap grid-x">
		<div class="info-container cell large-shrink">
			<div class="name-area">
				<div class="hello"><img src="images/hello.svg"></div>
				<div class="name">陳嘉明</div>
				<div class="deco"><img src="images/member-deco.svg"></div>
			</div>

			<ul class="memberList">
				<li class="current">
					<div class="deco">
						<img src="images/member-current.svg" class="show-for-large">
						<img src="images/member-current-mobile.svg" class="hide-for-large">
					</div>
					<div class="title"><a href="member.php">會員資訊</a></div>
				</li>
				<li>
					<div class="deco">
						<img src="images/member-current.svg" class="show-for-large">
						<img src="images/member-current-mobile.svg" class="hide-for-large">
					</div>
					<div class="title"><a href="coupon.php">優惠券</a></div>
				</li>
				<li>
					<div class="deco">
						<img src="images/member-current.svg" class="show-for-large">
						<img src="images/member-current-mobile.svg" class="hide-for-large">
					</div>
					<div class="title"><a href="record.php">訂單紀錄</a></div>
				</li>
				<li>
					<div class="deco">
						<img src="images/member-current.svg" class="show-for-large">
						<img src="images/member-current-mobile.svg" class="hide-for-large">
					</div>
					<div class="title"><a href="recipients.php">常用購買收件人</a></div>
				</li>
				<li>
					<div class="deco">
						<img src="images/member-current.svg" class="show-for-large">
						<img src="images/member-current-mobile.svg" class="hide-for-large">
					</div>
					<div class="title"><a href="login.php">登出</a></div>
				</li>
			</ul>
		</div>

		<div class="member-innerWrap cell large-auto">
			<form action="javascript:;" method="POST" class="memberForm">
				<div class="memberdata-container">
					<div class="head"><img src="images/member-head-1.svg"></div>

					<div class="field-container">
						<div class="item grid-x align-middle">
							<div class="title cell shrink">帳號</div>
							<div class="content cell auto">0928574159</div>
						</div>
						<div class="item grid-x align-middle">
							<div class="title cell shrink">舊密碼</div>
							<input type="password" name="" id="" class="cell auto">
						</div>
						<div class="item grid-x align-middle">
							<div class="title cell shrink">新密碼</div>
							<input type="password" name="" id="" class="cell auto">
						</div>
						<div class="item grid-x align-middle">
							<div class="title cell shrink">新密碼確認</div>
							<input type="password" name="" id="" class="cell auto">
						</div>
					</div>
				</div>

				<div class="memberbasic-container">
					<div class="head"><img src="images/member-head-2.svg"></div>

					<div class="field-container">
						<div class="item grid-x align-middle">
							<div class="title cell shrink">姓名</div>
							<input type="text" name="" id="" class="cell auto" value="陳嘉明">
						</div>
						<div class="item grid-x align-middle">
							<div class="title cell shrink">電子信箱</div>
							<input type="text" name="" id="" class="cell auto" value="chiawiasina@gmail.com">
						</div>
						<div class="item grid-x align-middle">
							<div class="title cell shrink">手機</div>
							<input type="text" name="" id="" class="cell auto" value="0928574159">
						</div>
						<div class="item grid-x align-middle">
							<div class="title cell shrink">生日</div>
							<input type="text" name="" id="" class="cell auto" value="1996/04/15">
						</div>
						<div class="item grid-x align-top address-container">
							<div class="title cell shrink">地址</div>

							<div class="address-area cell auto">
								<div class="city-area grid-x align-middle twzipcode">
									<div class="cell large-shrink">
										<div id="city" data-role="county" data-value="新北市"></div>
									</div>

									<div class="cell large-shrink">
										<div id="area" data-role="district"></div>
									</div>

									<div class="cell large-auto">
										<div id="add" data-role="zipcode"></div>
									</div>
								</div>

								<div class="add-area">
									<input type="text" name="" id="" value="中山路一段51號4樓">
								</div>
							</div>
						</div>
					</div>
				</div>

				<button class="btn"><img src="images/btn-editok.svg"></button>
			</form>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>

<script>
	$('.twzipcode').twzipcode({
		readonly: true,
	});


	$(".memberWrap .memberForm .btn").on("click", function () {
		$(".dialog-fancyWrap").addClass("is-show")
	})
</script>