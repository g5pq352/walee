<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="memberWrap record bg-white grid-x">
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
					<li class="current">
						<div class="title"><a href="record.php">訂單列表</a></div>
					</li>
					<li>
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

		<div class="setting-innerWrap cell large-auto">
            <div class="head-area text-center show-for-large">
                <div class="en">PAYMENT DETAILS</div>
                <div class="ch">訂單明細</div>
            </div>
            <div class="head-area-mobile text-center hide-for-large">
				<div class="ch">訂單明細</div>
				<div class="en">PAYMENT DETAILS</div>
			</div>

           <div class="record-detailWrap">
                <div class="detail">
                    訂單成立日 : 2023/09/21<br>
                    訂單編號 : 2110137553<br>
                    訂單狀態： 已付款<br>
                    收件人姓名 : 林很好<br>
                    收件人手機號碼 : 09756258745<br>
                    收件人電話號碼 : 04-2310-0703<br>
                    收件人地址 : 558南投縣鹿谷鄉竹林村田頭巷123-5號3樓<br>
                    備註 : 無
                </div>
                
                <section class="checkout-tableWrap record">
                    <div class="body-area">
                        <div class="items-area">
                            <div class="pic show-for-large"><img src="images/pd-1.jpg"></div>
                            <div class="title">娃力嬰兒車</div>
                            <div class="plan">
                                單筆付清
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
                </section>
           </div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
<?php include 'changeColorMember.php'; ?>
</html>

<script>
	$(".confirm-close").on("click", function(){
        $(".m-fancyWrap").removeClass("is-show")
    })
</script>