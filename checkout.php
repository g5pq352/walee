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
		<section>
			<div class="head"><img src="images/pay-head.svg"></div>

			<ul class="payList">
				<li>
					<input type="radio" name="pay" id="pay1">
					<label for="pay1">ATM帳戶轉帳</label>
				</li>
				<li>
					<input type="radio" name="pay" id="pay2">
					<label for="pay2">貨到付款</label>
				</li>
			</ul>
		</section>

		<section>
			<div class="head"><img src="images/take-head.svg"></div>

			<ul class="payList">
				<li>
					<input type="radio" name="take" id="take1">
					<label for="take1">宅配</label>
				</li>
				<li>
					<input type="radio" name="take" id="take2">
					<label for="take2">門市取貨</label>
				</li>
			</ul>
		</section>

		<section>
			<div class="head"><img src="images/man-head.svg"></div>

			<ul class="ordermanList">
				<li class="grid-x align-top">
					<div class="title cell large-shrink">訂購人</div>
					<input class="cell large-auto" type="text" name="order-name" id="" value="陳嘉明">
				</li>
				<li class="grid-x align-top">
					<div class="title cell large-shrink">電子信箱</div>
					<input class="cell large-auto" type="text" name="order-mail" id="" value="chaweshan@gmail.com">
				</li>
				<li class="grid-x align-top">
					<div class="title cell large-shrink">訂購人手機</div>
					<input class="cell large-auto" type="text" name="order-phone" id="" value="0928245697">
				</li>
				<li class="grid-x align-top">
					<div class="title cell large-shrink">地址</div>

					<div class="address-area cell large-auto">
						<div class="city-area twzipcode order-address">
							<div class="city" data-role="county"></div>
							<div class="area" data-role="district"></div>
							<div class="code" data-role="zipcode"></div>
						</div>
						<input type="text" name="order-add" class="add" value="中山路一段51號4樓">
					</div>
				</li>
			</ul>
		</section>

		<section>
			<div class="reciver-head-area grid-x align-middle">
				<div class="flag cell large-shrink"><img src="images/reciver-head.svg"></div>

				<ul class="reciver-chooseList cell large-shrink grid-x align-middle">
					<li class="cell shrink">
						<input type="radio" name="same" id="same1">
						<label for="same1">同訂購人</label>
					</li>
					<li class="cell shrink">
						<input type="radio" name="same" id="same2">
						<label for="same2">載入常用收件人</label>
					</li>
				</ul>
			</div>

			<ul class="ordermanList">
				<li class="grid-x align-top">
					<div class="title cell large-shrink">收件人</div>
					<input class="cell large-auto" type="text" name="reciver-name" id="" value="">
				</li>
				<li class="grid-x align-top">
					<div class="title cell large-shrink">電子信箱</div>
					<input class="cell large-auto" type="text" name="reciver-mail" id="" value="">
				</li>
				<li class="grid-x align-top">
					<div class="title cell large-shrink">收件人手機</div>
					<input class="cell large-auto" type="text" name="reciver-phone" id="" value="">
				</li>
				<li class="grid-x align-top">
					<div class="title cell large-shrink">地址</div>

					<div class="address-area cell large-auto">
						<div class="city-area twzipcode reciver-address">
							<div class="city" data-role="county"></div>
							<div class="area" data-role="district"></div>
							<div class="code" data-role="zipcode"></div>
						</div>
						<input type="text" name="reciver-add" class="add" value="中山路一段51號4樓">
					</div>
				</li>
				<li class="grid-x align-top">
					<div class="title cell large-shrink">統編</div>
					<input class="cell large-auto" type="text" name="" id="" value="">
				</li>
				<li class="grid-x align-bottom">
					<div class="title cell large-shrink">備註</div>
					<textarea class="cell large-auto"></textarea>
				</li>
			</ul>
		</section>

		<section>
			<div class="head"><img src="images/invoice-head.svg"></div>

			<ul class="payList">
				<li>
					<input type="radio" name="invoice" id="invoice1">
					<label for="invoice1">隨貨附上</label>
				</li>
				<li>
					<input type="radio" name="invoice" id="invoice2">
					<label for="invoice2"><input type="text" name="" id="invoice" size="60"></label>
				</li>
			</ul>
		</section>

		<section>
			<div class="head"><img src="images/discount-head.svg"></div>

			<div class="discount-area grid-x align-middle">
				<input type="text" name="" id="" class="cell auto">
				<div class="btn cell shrink">
					<img src="images/discount-btn.svg" class="show-for-large">
					<img src="images/discount-btn-mobile.svg" class="hide-for-large">
				</div>
			</div>
		</section>
	</section>

	<section class="checkout-tableWrap">
		<div class="flag"><img src="images/detail-head.svg"></div>

		<ul class="head-area">
			<li>產品名稱</li>
			<li>價格</li>
			<li>數量</li>
			<li>小計</li>
		</ul>

		<div class="body-area">
			<section class="plist">
				<div class="item">
					<div class="pic-area grid-x align-middle">
						<div class="pic cell shrink"><img src="images/pd-1.jpg"></div>
						<div class="title cell auto">杏仁薄片   18包/3小盒</div>
					</div>

					<div class="price">NT.240</div>

					<div class="checkout-num">1</div>

					<div class="subtotal">NT.240</div>
				</div>
			</section>
		</div>
	</section>

	<section class="deliveryWrap">
		<div class="head"><img src="images/delivery-head.svg"></div>

		<div class="delivery-area flex-container align-justify align-middle">
			<div class="title">黑貓本島宅配</div>
			<div class="price">NT.150</div>
		</div>

		<ul class="total-area">
			<li class="grid-x align-right">
				<div class="title cell shrink">小計</div>
				<div class="content cell shrink">NT.1,065</div>
			</li>
			<!-- <li class="grid-x align-right">
				<div class="title cell shrink">首購優惠</div>
				<div class="content cell shrink">-NT.50</div>
			</li> -->
			<!-- <li class="grid-x align-right">
				<div class="title cell shrink">總運費</div>
				<div class="content cell shrink">NT.150</div>
			</li> -->
			<li class="grid-x align-right">
				<div class="title cell shrink"><i><img src="images/total-deco.svg"></i>總計</div>
				<div class="content is-big cell shrink">NT.1,065</div>
			</li>
		</ul>

		<div class="send"><a href="finish.php"><img src="images/send-btn.svg"></a></div>
	</section>

	<div class="m-fancyWrap recipients-fancyWrap">
		<div class="fancy-closeBlock"></div>
		<!-- <div class="fancy-close"><img src="images/fancy-close.svg"></div> -->

		<!-- code here -->
		<div class="recipients-fancyContainer">
			<div class="head"><img src="images/refanhead.svg"></div>

			<div class="info-sliderWrap">
				<ul class="infoList">
					<li>
						<div class="item grid-x">
							<div class="title cell shrink">姓名</div>
							<div class="content cell large-auto" name="fancy-name">陳嘉明</div>
						</div>
						<div class="item grid-x align-top">
							<div class="title cell shrink">地址</div>
							<div class="address-area cell large-auto">
								<div class="city-area">
									<span name="fancy-code">207</span>
									<span name="fancy-city">新北市</span>
									<span name="fancy-area">萬里區</span>
								</div>
								<div class="add" name="fancy-add">中山路一段65號4樓</div>
							</div>
						</div>
						<div class="item grid-x">
							<div class="title cell shrink">手機</div>
							<div class="content cell large-auto" name="fancy-phone">0928574159</div>
						</div>
					</li>
					<li>
						<div class="item grid-x">
							<div class="title cell shrink">姓名</div>
							<div class="content cell large-auto" name="fancy-name">陳嘉明2</div>
						</div>
						<div class="item grid-x align-top">
							<div class="title cell shrink">地址</div>
							<div class="address-area cell large-auto">
								<div class="city-area">
									<span name="fancy-code">207</span>
									<span name="fancy-city">新北市</span>
									<span name="fancy-area">萬里區</span>
								</div>
								<div class="add" name="fancy-add">中山路一段65號4樓</div>
							</div>
						</div>
						<div class="item grid-x">
							<div class="title cell shrink">手機</div>
							<div class="content cell large-auto" name="fancy-phone">0928574159</div>
						</div>
					</li>
				</ul>

				<div class="prev"><img src="images/ref-prev.svg"></div>
				<div class="next"><img src="images/ref-next.svg"></div>
			</div>

			<div class="btn"><img src="images/ref-btn.svg"></div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
</html>

<script>
	var $carousel_rec = $(".info-sliderWrap .infoList").flickity({
		"prevNextButtons": false,
		"pageDots": false,
		"wrapAround": true,
		"autoPlay": false,
		"cellAlign": "center",
		"imagesLoaded": true,
		"arrowShape": ""
	});

	$(".info-sliderWrap .prev").on("click", function () {
		$carousel_rec.flickity('previous');
	})

	$(".info-sliderWrap .next").on("click", function () {
		$carousel_rec.flickity('next');
	})





	$("#same1").on("click", function () {
		$("[name='reciver-name']").val( $("[name='order-name']").val() )
		$("[name='reciver-mail']").val( $("[name='order-mail']").val() )
		$("[name='reciver-phone']").val( $("[name='order-phone']").val() )
		$("[name='reciver-add']").val( $("[name='order-add']").val() )

		$(".order-address").twzipcode('get', (county, district, zipcode) => {
	    $(".reciver-address").twzipcode('set', {
        'county': county,
        'district': district,
        'zipcode': zipcode,
	    });
		});
	})





	$("#same2").on("click", function () {
		$(".recipients-fancyWrap").addClass("is-show").scrollTop(0)
		$("body").addClass("is-lock")
	})


	$(".recipients-fancyContainer .btn").on("click", function () {
		$(".m-fancyWrap").removeClass("is-show")
		gsap.delayedCall(0.5, function () {
			$("body").removeClass("is-lock")
		});


		$("[name='reciver-name']").val( $(".infoList li.is-selected [name='fancy-name']").text() )
		$("[name='reciver-phone']").val( $(".infoList li.is-selected [name='fancy-phone']").text() )
		$("[name='reciver-add']").val( $(".infoList li.is-selected [name='fancy-add']").text() )

    $(".reciver-address").twzipcode('set', {
      'county': $(".infoList li.is-selected [name='fancy-city']").text(),
      'district': $(".infoList li.is-selected [name='fancy-area']").text(),
      'zipcode': $(".infoList li.is-selected [name='fancy-code']").text(),
    });
	})





	$('.twzipcode').twzipcode({
		readonly: true,
	});
</script>