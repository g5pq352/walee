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
				<li>
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
				<li class="current">
					<div class="deco">
						<img src="images/member-current.svg" class="show-for-large">
						<img src="images/member-current-mobile.svg" class="hide-for-large">
					</div>
					<div class="title"><a href="recipients.php">常用收件人</a></div>
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
			<form action="javascript:;" method="POST" class="recipientsForm">
				<div class="recipients-container">
					<div class="head">新增常用收件人</div>

					<div class="field-container">
						<div class="item grid-x align-middle">
							<div class="title cell shrink">收件人</div>
							<input type="text" name="" id="" class="cell auto">
						</div>
						<div class="item grid-x align-top address-container">
							<div class="title cell shrink">收件地址</div>

							<div class="address-area cell auto">
								<div class="city-area twzipcode">
									<div id="city" data-role="county"></div>
									<div id="area" data-role="district"></div>
									<div id="add" data-role="zipcode"></div>
								</div>

								<div class="add-area">
									<input type="text" name="" id="" value="">
								</div>
							</div>
						</div>
						<div class="item grid-x align-middle">
							<div class="title cell shrink">收件人手機</div>
							<input type="text" name="" id="" class="cell auto">
						</div>
					</div>
				</div>

				<button class="recipients-add"><img src="images/recipients-add.svg"></button>
			</form>

			<section class="recipientsList">
				<form action="javascript:;" method="POST" class="recipientsForm">
					<div class="recipients-default is-default">
						<svg xmlns="http://www.w3.org/2000/svg" width="108.63" height="39.34" viewBox="0 0 108.63 39.34">
						  <g>
						    <path class="cls-1" d="M108.13,29.05a8.91,8.91,0,0,0-6.52,6.16H7A8.94,8.94,0,0,0,.5,29.05V6.66A9,9,0,0,0,7,.5h94.58a8.93,8.93,0,0,0,6.52,6.16Z"/>
						    <line class="cls-3" x1="10.02" y1="6.48" x2="10.02" y2="29.59"/>
						    <line class="cls-3" x1="100.16" y1="6.48" x2="100.16" y2="29.59"/>
						    <text class="cls-2" transform="translate(22 23.65)">設為預設</text>
						  </g>
						</svg>
					</div>

					<div class="recipients-container">
						<div class="head">01常用收件人</div>

						<div class="field-container">
							<div class="item grid-x align-middle">
								<div class="title cell shrink">收件人</div>
								<input type="text" name="" id="" class="cell auto" value="王小明">
							</div>
							<div class="item grid-x align-top address-container">
								<div class="title cell shrink">收件地址</div>

								<div class="address-area cell auto">
									<div class="city-area twzipcode">
										<div id="city" data-role="county" data-value="臺北市"></div>
										<div id="area" data-role="district"></div>
										<div id="add" data-role="zipcode"></div>
									</div>

									<div class="add-area">
										<input type="text" name="" id="" value="中山路一段51號4樓">
									</div>
								</div>
							</div>
							<div class="item grid-x align-middle">
								<div class="title cell shrink">收件人手機</div>
								<input type="text" name="" id="" class="cell auto" value="09287368916">
							</div>
						</div>
					</div>

					<ul class="btn-area grid-x align-right">
						<li class="cell shrink"><img src="images/recipients-edit.svg"></li>
						<li class="cell shrink"><img src="images/recipients-del.svg"></li>
					</ul>
				</form>

				<form action="javascript:;" method="POST" class="recipientsForm">
					<div class="recipients-default">
						<svg xmlns="http://www.w3.org/2000/svg" width="108.63" height="39.34" viewBox="0 0 108.63 39.34">
						  <g>
						    <path class="cls-1" d="M108.13,29.05a8.91,8.91,0,0,0-6.52,6.16H7A8.94,8.94,0,0,0,.5,29.05V6.66A9,9,0,0,0,7,.5h94.58a8.93,8.93,0,0,0,6.52,6.16Z"/>
						    <line class="cls-3" x1="10.02" y1="6.48" x2="10.02" y2="29.59"/>
						    <line class="cls-3" x1="100.16" y1="6.48" x2="100.16" y2="29.59"/>
						    <text class="cls-2" transform="translate(22 23.65)">設為預設</text>
						  </g>
						</svg>
					</div>

					<div class="recipients-container">
						<div class="head">02常用收件人</div>

						<div class="field-container">
							<div class="item grid-x align-middle">
								<div class="title cell shrink">收件人</div>
								<input type="text" name="" id="" class="cell auto" value="王小明">
							</div>
							<div class="item grid-x align-top address-container">
								<div class="title cell shrink">收件地址</div>

								<div class="address-area cell auto">
									<div class="city-area twzipcode">
										<div id="city" data-role="county" data-value="新北市"></div>
										<div id="area" data-role="district"></div>
										<div id="add" data-role="zipcode"></div>
									</div>

									<div class="add-area">
										<input type="text" name="" id="" value="中山路一段51號4樓">
									</div>
								</div>
							</div>
							<div class="item grid-x align-middle">
								<div class="title cell shrink">收件人手機</div>
								<input type="text" name="" id="" class="cell auto" value="09287368916">
							</div>
						</div>
					</div>

					<ul class="btn-area grid-x align-right">
						<li class="cell shrink"><img src="images/recipients-edit.svg"></li>
						<li class="cell shrink"><img src="images/recipients-del.svg"></li>
					</ul>
				</form>
			</section>
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
</script>