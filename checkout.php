<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-yellow">
	<?php include 'topmenu.php'; ?>

	<div class="stepWrap">
		<img src="images/step-2.svg" class="show-for-large">
		<img src="images/step-2-mobile.svg" class="hide-for-large">
	</div>

	<section class="checkoutWrap">
		<div class="head-area">
			<div class="en">FILL THE FORM</div>
			<div class="ch">資訊填寫</div>
		</div>

		<div class="checkout-itemsWrap">
			<div class="checkout-item grid-x align-top">
				<div class="title-area cell large-shrink grid-x align-middle">
					<div class="num grid-x align-center-middle">01</div>
					<div class="title-item">
						<div class="title">會員資料</div>
					</div>
				</div>

				<section class="cell large-auto">
					<ul class="ordermanList">
						<li class="grid-x align-middle">
							<div class="title cell shrink">姓名</div>
							<input class="cell auto five-p" type="text" name="order-name" id="" value="陳嘉明">
						</li>
						<li class="grid-x align-middle">
							<div class="title cell shrink">電子信箱</div>
							<input class="cell auto five-p" type="text" name="order-mail" id="" value="chaweshan@gmail.com">
						</li>
						<li class="grid-x align-middle">
							<div class="title cell shrink">手機號碼</div>
							<input class="cell auto five-p" type="text" name="order-cell" id="" value="0928245697">
						</li>
					</ul>
				</section>
			</div>

			<div class="checkout-item grid-x align-top">
				<div class="title-area cell large-shrink grid-x align-middle">
					<div class="num grid-x align-center-middle">02</div>
					<div class="title-item">
						<div class="title">收件人資料</div>

						<ul class="reciver-chooseList cell large-shrink grid-x align-middle">
							<li class="cell shrink">
								<input type="radio" name="same" id="same1">
								<label for="same1">會員本人</label>
							</li>
						</ul>
					</div>
				</div>

				<section class="cell large-auto">
					<ul class="ordermanList">
						<li class="grid-x align-middle">
							<div class="title cell shrink">姓名</div>
							<input class="cell auto five-p" type="text" name="reciver-name" id="" value="">
						</li>
						<li class="grid-x align-middle">
							<div class="title cell shrink">手機號碼</div>
							<input class="cell auto five-p" type="text" name="reciver-cell" id="" value="">
						</li>
						<li class="grid-x align-middle">
							<div class="title cell shrink">電話號碼</div>
							<input class="cell auto five-p" type="text" name="reciver-phone" id="" value="">
						</li>
						<li class="grid-x align-top">
							<div class="title cell shrink">地址</div>

							<div class="address-area cell auto six-p">
								<div class="city-area twzipcode">
									<div class="city" data-role="county"></div>
									<div class="area" data-role="district"></div>
									<div class="code is-zip" data-role="zipcode"></div>
								</div>
								<input type="text" name="reciver-add" class="add show-for-large" value="中山路一段51號4樓">
							</div>
						</li>
						<li class="zip-mobile grid-x align-middle hide-for-large">
							<div class="zip-come-mobile cell shrink"></div>
							<input type="text" name="address" id="" class="address cell auto" placeholder="地址">
						</li>
						<li class="grid-x align-top">
							<div class="title cell shrink">居住樓層</div>
							<div class="radio-floor">
								<div class="">
									<input type="radio" name="floor" id="floor1">
									<label for="floor1">無電梯</label>
									<span class="skr-floor">
										<select name="stories" id="">
											<option value=""></option>
											<option value="2">2樓</option>
											<option value="3">3樓</option>
											<option value="4">4樓</option>
											<option value="5">5樓</option>
											<option value="6">6樓</option>
											<option value="7">7樓</option>
											<option value="8">8樓</option>
											<option value="9">9樓</option>
											<option value="10">10樓</option>
										</select>
									</span>
									<span class="note">2樓以上每一樓層 <i>+100</i> 元</span>
								</div>
								<div class="">
									<input type="radio" name="floor" id="floor2">
									<label for="floor2">有電梯</label>
								</div>
							</div>
						</li>
						<li class="grid-x align-top">
							<div class="title cell large-shrink">備註</div>
							<textarea class="cell large-auto six-p"></textarea>
						</li>
						<li class="grid-x align-top type-invoice">
							<div class="title cell shrink">發票類型</div>
							<div class="grid-x align-middle cell auto">
								<div class="radio-invoice cell large-shrink">
									<input type="radio" name="type-invoice" id="type-invoice1" value="0">
									<label for="type-invoice1">二聯式發票(個人)</label>
								</div>
								<div class="radio-invoice cell large-shrink">
									<input type="radio" name="type-invoice" id="type-invoice2" value="1">
									<label for="type-invoice2">三聯式發票(公司行號)</label>
								</div>
							</div>
						</li>
						<li class="grid-x align-top vehicle">
							<div class="title cell shrink">載具類型</div>
							<div class="grid-x align-middle cell auto">
								<div class="radio-invoice cell large-shrink">
									<input type="radio" name="vehicle" id="vehicle1" value="0">
									<label for="vehicle1">會員載具</label>
								</div>
								<div class="radio-invoice cell large-shrink">
									<input type="radio" name="vehicle" id="vehicle2" value="1">
									<label for="vehicle2">手機條碼載具</label>
								</div>
								<div class="radio-invoice cell large-shrink">
									<input type="radio" name="vehicle" id="vehicle3" value="2">
									<label for="vehicle3">自然人憑證條碼載具</label>
								</div>
							</div>
						</li>
						<li class="grid-x align-middle" id="vehicle-number">
							<div class="title cell shrink">載具號碼</div>
							<input class="cell auto six-p" type="text" name="" id="" value="">
						</li>
						<li class="grid-x align-middle" id="heading">
							<div class="title cell shrink">公司抬頭</div>
							<input class="cell auto six-p" type="text" name="" id="" value="">
						</li>
						<li class="grid-x align-middle" id="tax-id">
							<div class="title cell shrink">統一編號</div>
							<input class="cell auto six-p" type="text" name="" id="" value="">
						</li>
					</ul>
				</section>
			</div>
		</div>
	</section>

	<section class="checkout-tableWrap">
		<div class="flag">
			<div class="en">ORDER DETAILS</div>
			<div class="ch">訂單明細</div>
		</div>

		<div class="body-area">
			<div class="items-area">
				<div class="pic show-for-large"><img src="images/pd-1.jpg"></div>
				<div class="title">娃力嬰兒床</div>
				<div class="plan">
					<?php if(isset($_GET['plan']) && $_GET['plan'] == 1) : ?>
						單筆付清
					<?php else : ?>
						12期<br class="show-for-large">分期付款
					<?php endif ?>
				</div>
				<ul class="plist">
					<li class="grid-x align-middle">
						<div class="num grid-x align-center-middle">01</div>
						<div class="project">保證金</div>
						<div class="price">12,000</div>
						<div class="unit">元</div>
					</li>
					<li class="grid-x align-middle">
						<div class="num grid-x align-center-middle">02</div>
						<div class="project">一次性消費</div>
						<div class="price">6,880</div>
						<div class="unit">元</div>
					</li>
					<li class="grid-x align-middle">
						<div class="num grid-x align-center-middle">03</div>
						<div class="project">偏遠地區</div>
						<div class="price">400</div>
						<div class="unit">元</div>
					</li>
					<li class="grid-x align-middle">
						<div class="num grid-x align-center-middle">04</div>
						<div class="project">樓層運費</div>
						<div class="price">100</div>
						<div class="unit">元</div>
					</li>
				</ul>
			</div>
			
			<div class="total-area grid-x align-right align-bottom">
				<div class="ch">小計</div>
				<div class="price">19,380</div>
				<div class="unit">元</div>
			</div>
		</div>

		<div class="btn-area grid-x align-center">
			<div class="arrow-go"><a href="finish.php">
				<div class="grid-x align-center-middle">
					<div class="title">前往結帳</div>
					<svg width="59.52" height="56.3" viewBox="0 0 59.52 56.3">
						<path d="M32.85,56.3c-1.97-.04-6.61-.02-8.52-.18-8.75-.49-16.9-5.84-21.07-13.5C.35,37.57-.18,31.64,.05,25.95-.12,12.11,12.02,0,25.88,.06c1.99,0,6.6-.13,8.52-.02,8.86,.3,17.25,5.55,21.58,13.27,2.48,4.25,3.51,9.24,3.45,14.13,1.19,15.57-10.9,29.01-26.58,28.84h0Zm0-1.89c12.99,.02,24.08-11.23,24.06-24.14,.22-5.47-.15-10.99-2.95-15.81-3.92-7.12-11.51-12.13-19.67-12.58-1.82-.16-6.52-.13-8.41-.17C12.64,1.37,1.1,12.69,1.08,25.96c-.21,5.52,.25,11.28,3.18,16.11,4.09,7.19,11.91,12.1,20.19,12.36,1.84,.11,6.52-.03,8.42-.03h0Z" style="fill: #968375;"/>
						<g class="svg-arrow">
							<path d="M20.43,19.3c5.51,1.95,10.93,3.96,16.37,6.1,2.18,.94,2.02,4.29-.19,5.06,0,0-2.3,.95-2.3,.95-4.46,1.83-9.39,3.82-13.87,5.53-.18,.07-.39-.02-.46-.21-.07-.18,.02-.38,.19-.45,3.02-1.37,6.05-2.72,9.1-4.04,1.51-.65,5.4-2.31,6.87-2.93,1.22-.43,1.29-2.26,.13-2.77-2.24-.92-4.63-1.82-6.89-2.75-3.08-1.24-6.14-2.51-9.2-3.82-.41-.17-.16-.83,.26-.67h0Z" style="fill: #968375;"/>
							<path d="M33.2,23.98s4.39,1.82,6.69,2.14c2.84,.4,2.44,2.86,.41,3.4-2.07,.56-1.55-.03-6.76,2.21l4.21-2.79-1.37-3.06-3.19-1.91Z" style="fill: #968375;"/>
						</g>
					</svg>
				</div>
			</a></div>
		</div>
	</section>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>

<script>
	$("#same1").on("click", function () {
		$("[name='reciver-name']").val( $("[name='order-name']").val() )
		$("[name='reciver-cell']").val( $("[name='order-cell']").val() )
	})

	$('.twzipcode').twzipcode({
		readonly: true,
	});
	$(".address-area select").niceSelect();
	$("select[name='county']").change(function(){
		$(".address-area select").niceSelect("update");
	})
	

	$("#heading, #vehicle-number, #tax-id").hide()


	$("input[name='type-invoice']").on("change", function(){
		$("input[name='vehicle']").prop('checked', false)

		$("#heading, #vehicle-number, #tax-id").hide()
		$(".vehicle .radio-invoice").hide()

		if($(this).val() == 1) {
			$("#heading, #tax-id").show()

			$(".vehicle .radio-invoice").eq(0).show()
		}else{
			// $("#vehicle-number").show()

			$(".vehicle .radio-invoice").show()
		}
	})

	$("input[name='vehicle']").on("change", function(){
		if($(this).val() == 0) {
			if($("input[name='type-invoice']:checked").val() == 0){
				$("#vehicle-number").show()
			}
		}else{
			$("#vehicle-number").hide()
		}
	})

	if(device == 'mobile'){
		$(".zip-come-mobile").html( $(".is-zip") )
		$(".twzipcode .is-zip").remove()
	}
</script>