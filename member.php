<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-yellow">
	<?php include 'topmenu.php'; ?>

	<div class="memberWrap grid-x">
		<div class="info-container cell large-shrink show-for-large">
			<div class="info-area">
				<div class="name-area">
					<div class="hello"><img src="images/man.svg"></div>
					<div class="name">林很好</div>
				</div>

				<ul class="memberList">
					<li>
						<div class="title"><a href="sharing.php">共享方案</a></div>
					</li>
					<li>
						<div class="title"><a href="record.php">訂單列表</a></div>
					</li>
					<li class="current">
						<div class="title"><a href="member.php">會員資訊</a></div>
					</li>
					<li>
						<div class="title"><a href="contact.php">聯絡客服</a></div>
					</li>
					<li>
						<div class="title"><a href="javascript:;" id="logout">登出</a></div>
					</li>
				</ul>
			</div>
		</div>

		<div class="members-innerWrap cell large-auto">
			<section>
				<div class="head-area text-center show-for-large">
					<div class="en">MEMBER ACCOUNT</div>
					<div class="ch">會員帳號</div>
				</div>
				<div class="head-area-mobile text-center hide-for-large">
					<div class="ch">會員帳號</div>
					<div class="en">MEMBER ACCOUNT</div>
				</div>

				<form action="" method="POST" class="accountForm">
					<div class="member-item">
						<ul class="ordermanList">
							<li class="grid-x align-middle">
								<div class="title cell shrink">電子信箱</div>
								<div class="text">gooddesign1122@gmail.com</div>
							</li>
							<li class="grid-x align-middle">
								<div class="title cell shrink">舊密碼</div>
								<input class="cell auto five-p" type="password" name="" id="" placeholder="請輸入舊密碼">
							</li>
							<li class="grid-x align-middle">
								<div class="title cell shrink">新密碼</div>
								<input class="cell auto five-p" type="password" name="" id="" placeholder="BBB12345678">
							</li>
							<li class="grid-x align-middle">
								<div class="title cell shrink">密碼確認</div>
								<input class="cell auto five-p" type="password" name="" id="" placeholder="BBB12345678">
							</li>
						</ul>
					</div>
					<div class="btn-area grid-x align-center">
						<button class="btn">
							<div class="arrow-go">
								<div class="grid-x align-center-middle">
									<div class="title">修 改</div>
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
            

			<section>
				<div class="head-area text-center show-for-large">
					<div class="en">MEMBER PROFILE</div>
					<div class="ch">會員資料</div>
				</div>
				<div class="head-area-mobile text-center hide-for-large">
					<div class="ch">會員資料</div>
					<div class="en">MEMBER PROFILE</div>
				</div>

				<form action="" method="POST" class="profileForm">
					<div class="member-item profile">
						<ul class="ordermanList">
							<li class="grid-x align-middle">
								<div class="title cell shrink">姓 名</div>
								<input class="cell auto four-p" type="text" name="" id="" value="林很好">
							</li>
							<li class="grid-x align-middle">
								<div class="title cell shrink">性 別</div>
								<div class="cell auto grid-x">
									<div class="radio-item">
										<input type="radio" name="gender" id="g1">
										<label for="g1">男性</label>
									</div>
									<div class="radio-item">
										<input type="radio" name="gender" id="g2" checked>
										<label for="g2">女性</label>
									</div>
								</div>
							</li>
							<li class="grid-x align-middle">
								<div class="title cell shrink">生 日</div>
								<input class="cell auto four-p" type="date" name="" id="" value="1993-02-18">
							</li>
							<li class="grid-x align-middle">
								<div class="title cell shrink">手機號碼</div>
								<input class="cell auto four-p" type="text" name="" id="" value="09756258745">
							</li>
							<li class="grid-x align-top">
								<div class="title cell shrink">地址</div>

								<div class="address-area cell auto six-p">
									<div class="city-area twzipcode">
										<div class="city" data-role="county"></div>
										<div class="area" data-role="district"></div>
										<div class="code is-zip" data-role="zipcode" data-value="558"></div>
									</div>
									<input type="text" name="reciver-add" class="add" value="中山路一段51號4樓" placeholder="請填寫詳細地址">
								</div>
							</li>
							<li class="zip-mobile grid-x align-middle hide-for-large">
								<div class="zip-come-mobile cell shrink"></div>
								<!-- <input type="text" name="address" id="" class="address cell auto" value="中山路一段51號4樓" placeholder="請填寫詳細地址"> -->
							</li>
						</ul>
					</div>
					<div class="btn-area grid-x align-center">
						<button class="btn">
							<div class="arrow-go">
								<div class="grid-x align-center-middle">
									<div class="title">修 改</div>
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
	</div>

	<!-- confirm fancy -->
	<div class="m-fancyWrap confirm-fancyWrap">
		<div class="fancy-closeBlock"></div>

		<!-- code here -->
		<div class="confirm-fancyContainer">

			<div class="innerWrap">
				<div class="fancy-close"><svg width="32.12" height="32.12" viewBox="0 0 32.12 32.12">
				<line x1="1.25" y1="30.87" x2="30.87" y2="1.25" class="cls-1"/>
				<line x1="1.25" y1="1.25" x2="30.87" y2="30.87" class="cls-1"/>
				<path d="M5.71,4s10.63,10.01,18.93,1.78c8.92-8.85-8.59,8.73-8.59,8.73L5.71,4Z" class="cls-2"/>
			</svg></div>

				<div class="content">確認送出資料</div>

				<div class="confirm-btn">
					<div class="grid-x align-center-middle"><a href="member.php">是</a></div>
					<div class="grid-x align-center-middle" id="confirm-close">否</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
<?php include 'changeColorMember.php'; ?>
</html>

<script>
	$('.twzipcode').twzipcode({
		readonly: true,
	});
	$(".address-area select").niceSelect();
	$("select[name='county']").change(function(){
		$(".address-area select").niceSelect("update");
	})

	if(device == 'mobile'){
		$(".zip-come-mobile").html( $(".is-zip") )
		$(".twzipcode .is-zip").remove()
	}
</script>