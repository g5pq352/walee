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
					<div class="deco"><img src="images/member-current.svg"></div>
					<div class="title"><a href="member.php">會員資訊</a></div>
				</li>
				<li class="current">
					<div class="deco"><img src="images/member-current.svg"></div>
					<div class="title"><a href="coupon.php">優惠券</a></div>
				</li>
				<li>
					<div class="deco"><img src="images/member-current.svg"></div>
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
					<div class="deco"><img src="images/member-current.svg"></div>
					<div class="title"><a href="login.php">登出</a></div>
				</li>
			</ul>
		</div>

		<div class="member-innerWrap cell large-auto">
			<div class="couponWrap">
				<div class="coupon-th">
					<div>名稱</div>
					<div>優惠碼</div>
					<div>使用期限</div>
				</div>

				<ul class="couponList">
					<li>
						<div class="bd">
							<img src="images/coupon-bd.svg" class="show-for-large">
							<img src="images/coupon-bd-mobile.svg" class="hide-for-large">
						</div>
						<div>消費滿800折50</div>
						<div>D15687</div>
						<div>2022/06/30</div>
						<div class="copy"><span>複製優惠碼</span></div>
					</li>
					<li>
						<div class="bd">
							<img src="images/coupon-bd.svg" class="show-for-large">
							<img src="images/coupon-bd-mobile.svg" class="hide-for-large">
						</div>
						<div>消費滿800折50</div>
						<div>D15687</div>
						<div>2022/06/30</div>
						<div class="copy"><span>複製優惠碼</span></div>
					</li>
					<li class="is-disable">
						<div class="bd">
							<img src="images/coupon-bd-white.svg" class="show-for-large">
							<img src="images/coupon-bd-white-mobile.svg" class="hide-for-large">
						</div>
						<div>消費滿800折50</div>
						<div>D15687</div>
						<div>2022/06/30</div>
						<div class="used">已使用!</div>
					</li>
					<li class="is-disable">
						<div class="bd">
							<img src="images/coupon-bd-white.svg" class="show-for-large">
							<img src="images/coupon-bd-white-mobile.svg" class="hide-for-large">
						</div>
						<div>消費滿800折50</div>
						<div>D15687</div>
						<div>2022/06/30</div>
						<div class="used">已使用!</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>