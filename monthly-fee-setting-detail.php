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
                <div class="en">MONTHLY FEE SETTING DETAILS</div>
                <div class="ch">月費明細</div>
            </div>
            <div class="head-area-mobile text-center hide-for-large month">
				<div class="ch">月費明細</div>
				<div class="en">MONTHLY FEE <br class="hide-for-large">SETTING DETAILS</div>
			</div>

            <div class="setting-itemsWrap month">
                <section>
                    <div class="item grid-x align-middle">
                        <div class="title cell shrink">寶寶名稱 / 暱稱</div>
                        <input type="text" class="cell auto" value="巧虎" readonly>
                    </div>
                    <div class="item grid-x align-middle">
                        <div class="title cell shrink">出生 / 預產年月</div>
                        <input type="text" class="cell auto" value="2023／09" readonly>
                    </div>
                    <div class="item grid-x align-middle">
                        <div class="title cell shrink">希望送貨日期</div>
                        <input type="text" class="cell auto" value="2023／09／21" readonly>
                    </div>
                    <div class="item grid-x align-middle">
                        <div class="title cell shrink">月費起始日期</div>
                        <input type="text" class="cell auto" value="" readonly>
                    </div>
                    <div class="item grid-x align-middle">
                        <div class="title cell shrink">實際送貨日期</div>
                        <input type="text" class="cell auto" value="" readonly>
                    </div>
                    <div class="item grid-x align-middle">
                        <div class="title cell shrink">保留補償天數</div>
                        <input type="text" class="cell auto" value="" readonly>
                    </div>
                </section>
            </div>

            <div class="month-paymentWrap">
                <div class="head-area text-center show-for-large">
                    <div class="en">MONTHLY PAYMENT DETAILS</div>
                    <div class="ch">月費付款紀錄</div>
                </div>
                <div class="head-area-mobile text-center hide-for-large month">
                    <div class="ch">月費付款紀錄</div>
                    <div class="en">MONTHLY <br class="hide-for-large">PAYMENT DETAILS</div>
                </div>

                <div class="month-payment">
                    <ul class="tag-area">
                        <li>付款日期</li>
                        <li>付款狀態</li>
                        <li>金 額</li>
                    </ul>

                    <ul class="month-paymentList">
                        <li class="fail">
                            <div class="date">2024/01/21</div>
                            <div class="payment">扣款失敗<span class="pay"><a href="javascript:;"><i>付款</i><img src="images/record-arrow.svg"></a></span></div>
                            <div class="price">899 <i>元</i></div>
                        </li>
                        <li>
                            <div class="date">2023/12/21</div>
                            <div class="payment">已繳款</div>
                            <div class="price">899 <i>元</i></div>
                        </li>
                        <li>
                            <div class="date">2023/11/21</div>
                            <div class="payment">已繳款</div>
                            <div class="price">899 <i>元</i></div>
                        </li>
                        <li>
                            <div class="date">2023/10/21</div>
                            <div class="payment">已繳款</div>
                            <div class="price">899 <i>元</i></div>
                        </li>
                        <li>
                            <div class="date">2023/09/21</div>
                            <div class="payment">已繳款</div>
                            <div class="price">899 <i>元</i></div>
                        </li>
                    </ul>
                </div>
            </div>
		</div>
	</div>

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
                    <div class="grid-x align-center-middle"><a href="record.php">是</a></div>
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
