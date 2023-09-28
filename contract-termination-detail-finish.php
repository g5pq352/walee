<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-yellow">
	<?php include 'topmenu.php'; ?>

	<div class="memberWrap record grid-x">
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
                <div class="en">CEASE RENTAL APPLICATION RECORDS</div>
                <div class="ch">停約紀錄</div>
            </div>
            <div class="head-area-mobile text-center hide-for-large">
				<div class="ch">停約紀錄</div>
				<div class="en">CEASE RENTAL <br class="hide-for-large">APPLICATION RECORDS</div>
			</div>

            <div class="contract-terminationWrap">
                <div class="checkout-itemsWrap">
                    <div class="checkout-item grid-x align-top">
                        <div class="title-area cell large-shrink grid-x align-middle">
                            <div class="num grid-x align-center-middle">01</div>
                            <div class="title-item">
                                <div class="title">申請資料</div>
                            </div>
                        </div>

                        <section class="cell large-auto">
                            <ul class="ordermanList">
                                <li class="grid-x align-middle">
                                    <div class="title cell shrink">申請日期</div>
                                    <input class="cell auto five-p" type="date" name="" id="" value="2023-09-21" readonly>
                                </li>
                                <li class="grid-x align-middle">
                                    <div class="title cell shrink">收貨聯絡人</div>
                                    <input class="cell auto five-p" type="text" name="" id="" value="林很好" readonly>
                                </li>
                                <li class="grid-x align-middle">
                                    <div class="title cell shrink">收貨手機號碼</div>
                                    <input class="cell auto five-p" type="text" name="" id="" value="09756258745" readonly>
                                </li>
                                <li class="grid-x align-top address-mt">
                                    <div class="title cell shrink">地址</div>

                                    <div class="address-area cell auto six-p">
                                        <div class="city-area twzipcode">
                                            <input type="text" value="南投縣" readonly>
                                            <input type="text" value="鹿谷鄉" readonly>
                                            <input type="text" value="558" class="is-zip" readonly>
                                        </div>
                                        <input type="text" class="add" name="" value="竹林村田頭巷123-5號" readonly>
                                    </div>
                                </li>
                                <li class="zip-mobile grid-x align-middle hide-for-large">
                                    <div class="zip-come-mobile cell shrink"></div>
                                    <!-- <input type="text" name="address" id="" class="address cell auto" value="竹林村田頭巷123-5號" readonly> -->
                                </li>
                            </ul>
                        </section>
                    </div>

                    <div class="checkout-item grid-x align-top">
                        <div class="title-area cell large-shrink grid-x align-middle">
                            <div class="num grid-x align-center-middle">02</div>
                            <div class="title-item">
                                <div class="title">保證金退款帳號</div>
                            </div>
                        </div>

                        <section class="cell large-auto">
                            <ul class="ordermanList">
                                <li class="grid-x align-middle">
                                    <div class="title cell shrink">戶名</div>
                                    <input class="cell auto five-p" type="text" name="" id="" value="林很好" readonly>
                                </li>
                                <li class="grid-x align-middle">
                                    <div class="title cell shrink">銀行代碼</div>
                                    <input class="cell auto five-p" type="text" name="" id="" value="700" readonly>
                                </li>
                                <li class="grid-x align-middle">
                                    <div class="title cell shrink">匯款帳號</div>
                                    <input class="cell auto five-p" type="text" name="" id="" value="018-6755-23594" readonly>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>

            <div class="contract-reviewWrap">
                <div class="head-area text-center show-for-large">
                    <div class="en">CONTRACT REVIEW</div>
                    <div class="ch">合約回顧</div>
                </div>
                <div class="head-area-mobile text-center hide-for-large">
                    <div class="ch">合約回顧</div>
                    <div class="en">CONTRACT REVIEW</div>
                </div>

                <div class="contract-review">
                    <div class="contract-review-item">
                        <ul class="ordermanList">
                            <li class="grid-x align-middle">
                                <div class="title cell shrink">訂單編號</div>
                                <input class="cell auto five-p" type="text" value="2110137553" readonly>
                            </li>
                            <li class="grid-x align-middle">
                                <div class="title cell shrink">產品編號</div>
                                <input class="cell auto five-p" type="text" value="32525476" readonly>
                            </li>
                            <li class="grid-x align-middle">
                                <div class="title cell shrink">月費起始日期</div>
                                <input class="cell auto five-p" type="text" value="2023／09／20" readonly>
                            </li>
                            <li class="grid-x align-middle">
                                <div class="title cell shrink">實際送貨日期</div>
                                <input class="cell auto five-p" type="text" value="2023／09／24" readonly>
                            </li>
                            <li class="grid-x align-middle">
                                <div class="title cell shrink">保留補償天數</div>
                                <input class="cell auto five-p" type="text" value="4天" readonly>
                            </li>
                            <li class="grid-x align-middle">
                                <div class="title cell shrink">停約申請日期</div>
                                <input class="cell auto five-p" type="text" value="2023／10／10" readonly>
                            </li>
                            <li class="grid-x align-middle">
                                <div class="title cell shrink">月費停扣日期</div>
                                <input class="cell auto five-p" type="text" value="2023／10／20" readonly>
                            </li>
                            <li class="grid-x align-middle">
                                <div class="title cell shrink">結算到約日期</div>
                                <input class="cell auto five-p" type="text" value="2023／10／24" readonly>
                            </li>
                            <li class="grid-x align-middle">
                                <div class="title cell shrink">實際收貨日期</div>
                                <input class="cell auto five-p" type="text" value="2023／10／24" readonly>
                            </li>
                        </ul>
                    </div>
                    <div class="contract-review-item">
                        <div class="detail-head-area">
                            <div class="en">ORDER DETAILS</div>
                            <div class="ch">保證金退款紀錄</div>
                        </div>

                        <ul class="ordermanList">
                            <li class="grid-x align-middle">
                                <div class="title cell shrink">原保證金</div>
                                <input class="cell auto five-p" type="text" value="12000 元" readonly>
                            </li>
                            <li class="grid-x align-middle">
                                <div class="title cell shrink">零件毀損補償金</div>
                                <input class="cell auto five-p" type="text" value="500 元" readonly>
                            </li>
                            <li class="grid-x align-middle">
                                <div class="title cell shrink">違約補償金</div>
                                <input class="cell auto five-p" type="text" value="500 元" readonly>
                            </li>
                            <li class="grid-x align-middle">
                                <div class="title cell shrink">違約補償金</div>
                                <input class="cell auto five-p" type="text" value="11000 元" readonly>
                            </li>
                            <li class="grid-x align-middle">
                                <div class="title cell shrink">保證金退款日期</div>
                                <input class="cell auto five-p" type="text" value="2024／10／30" readonly>
                            </li>
                        </ul>
                    </div>
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
    if(device == 'mobile'){
		$(".zip-come-mobile").html( $(".is-zip") )
		$(".twzipcode .is-zip").remove()
	}
</script>