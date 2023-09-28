<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-yellow">
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

		<div class="member-innerWrap cell large-auto">
			<div class="head-area text-center show-for-large">
				<div class="en">ORDER LIST</div>
				<div class="ch">訂單列表</div>
			</div>
			<div class="head-area-mobile text-center hide-for-large">
				<div class="ch">訂單列表</div>
				<div class="en">ORDER LIST</div>
			</div>

			<div class="recordWrap">
				<div class="record-th show-for-large">
					<div>訂單編號</div>
					<div>日期</div>
					<div>訂單狀態</div>
					<div>月費設定</div>
					<div>產品編號</div>
				</div>

				<ul class="recordList show-for-large">
					<li>
						<div class="info-area">
							<div>2110137553</div>
							<div>2022/05/28</div>
							<div class="relative">已付款<span class="detail detail-style"><a href="record_detail.php"><i>明細</i></a></span></div>
							<div class="relative"><span class="red">未設定</span><span class="set"><a href="monthly-fee-setting.php"><i>設定</i><img src="images/record-arrow.svg"></a></span></div>
							<div>未到府</div>
							<div><span class="detail-style"><a href="contract-termination.php"><i>停約申請</i><img src="images/record-arrow.svg"></a></span></div>
						</div>
					</li>

					<li>
						<div class="info-area">
							<div>2110137553</div>
							<div>2022/05/28</div>
							<div class="relative"><span class="red">未付款</span><span class="pay"><i>付款</i><img src="images/record-arrow.svg"></span></div>
							<div class="relative"><span class="red">未設定</span></div>
							<div>未到府</div>
							<div><span class="detail-style"><a href="contract-termination-detail.php"><i>停約紀錄</i><img src="images/record-arrow.svg"></a></span></div>
						</div>
					</li>

					<li>
						<div class="info-area">
							<div>2110137553</div>
							<div>2022/05/28</div>
							<div class="relative">已付款<span class="detail detail-style"><a href="record_detail.php"><i>明細</i></a></span></div>
							<div class="relative"><span class="detail-style"><a href="monthly-fee-setting-detail.php"><i>月費明細</i></a></span></div>
							<div>未到府</div>
							<div></div>
						</div>
					</li>

					<li class="done">
						<div class="finish">合約結束</div>
						<div class="info-area">
							<div>2110137553</div>
							<div>2022/05/28</div>
							<div class="relative">已付款<span class="detail detail-style"><a href="record_detail.php"><i>明細</i></a></span></div>
							<div class="relative"><span class="detail-style"><a href="monthly-fee-setting-detail.php"><i>月費明細</i></a></span></div>
							<div>17235695</div>
							<div><span class="detail-style"><a href="contract-termination-detail-finish.php"><i>合約紀錄</i><img src="images/record-arrow.svg"></a></span></div>
						</div>
					</li>
				</ul>

				<ul class="recordList hide-for-large">
					<li>
						<div class="info-area">
							<div class="item grid-x align-middle">
								<div class="title">訂單編號</div>
								<div>2110137553</div>
							</div>
							<div class="item grid-x align-middle">
								<div class="title">日 期</div>
								<div>2022/05/28</div>
							</div>
							<div class="item grid-x align-middle">
								<div class="title">訂單狀態</div>
								<div class="relative">已付款<span class="detail detail-style"><a href="record_detail.php"><i>明細</i></a></span></div>
							</div>
							<div class="item grid-x align-middle">
								<div class="title">月費設定</div>
								<div class="relative"><span class="red">未設定</span><span class="set"><a href="monthly-fee-setting.php"><i>設定</i><img src="images/record-arrow.svg"></a></span></div>
							</div>
							<div class="item grid-x align-middle">
								<div class="title">產品編號</div>
								<div>未到府</div>
							</div>
						</div>
						<div class="last-data text-center"><div><span class="detail-style"><a href="contract-termination.php"><i>停約申請</i><img src="images/record-arrow.svg"></a></span></div></div>
					</li>
					<li>
						<div class="info-area">
							<div class="item grid-x align-middle">
								<div class="title">訂單編號</div>
								<div>2110137553</div>
							</div>
							<div class="item grid-x align-middle">
								<div class="title">日 期</div>
								<div>2022/05/28</div>
							</div>
							<div class="item grid-x align-middle">
								<div class="title">訂單狀態</div>
								<div class="relative">已付款<span class="detail detail-style"><a href="record_detail.php"><i>明細</i></a></span></div>
							</div>
							<div class="item grid-x align-middle">
								<div class="title">月費設定</div>
								<div class="relative"><span class="detail-style"><a href="monthly-fee-setting-detail.php"><i>月費明細</i></a></span></div>
							</div>
							<div class="item grid-x align-middle">
								<div class="title">產品編號</div>
								<div>未到府</div>
							</div>
						</div>
						<div class="last-data text-center"><div><span class="detail-style"><a href="contract-termination-detail.php"><i>停約紀錄</i><img src="images/record-arrow.svg"></a></span></div></div>
					</li>
					<li>
						<div class="info-area">
							<div class="item grid-x align-middle">
								<div class="title">訂單編號</div>
								<div>2110137553</div>
							</div>
							<div class="item grid-x align-middle">
								<div class="title">日 期</div>
								<div>2022/05/28</div>
							</div>
							<div class="item grid-x align-middle">
								<div class="title">訂單狀態</div>
								<div class="relative"><span class="red">未付款</span><span class="pay"><i>付款</i><img src="images/record-arrow.svg"></span></div>
							</div>
							<div class="item grid-x align-middle">
								<div class="title">月費設定</div>
								<div class="relative"><span class="red">未設定</span><span class="set"><a href="monthly-fee-setting.php"><i>設定</i><img src="images/record-arrow.svg"></a></span></div>
							</div>
							<div class="item grid-x align-middle">
								<div class="title">產品編號</div>
								<div>未到府</div>
							</div>
						</div>
					</li>
					<li class="done">
						<div class="finish">合約結束</div>
						<div class="info-area">
							<div class="item grid-x align-middle">
								<div class="title">訂單編號</div>
								<div>2110137553</div>
							</div>
							<div class="item grid-x align-middle">
								<div class="title">日 期</div>
								<div>2022/05/28</div>
							</div>
							<div class="item grid-x align-middle">
								<div class="title">訂單狀態</div>
								<div class="relative">已付款<span class="detail detail-style"><a href="record_detail.php"><i>明細</i></a></span></div>
							</div>
							<div class="item grid-x align-middle">
								<div class="title">月費設定</div>
								<div class="relative"><span class="detail-style"><a href="monthly-fee-setting-detail.php"><i>月費明細</i></a></span></div>
							</div>
							<div class="item grid-x align-middle">
								<div class="title">產品編號</div>
								<div>未到府</div>
							</div>
						</div>
						<div class="last-data text-center"><div><span class="detail-style"><a href="contract-termination-detail-finish.php"><i>合約紀錄</i><img src="images/record-arrow.svg"></a></span></div></div>
					</li>
				</ul>

				<div class="pages-module text-center">
					<div class="pages grid-x align-center-middle">
						<a href="javascript:;" class="prev"><img src="images/prev.svg"></a>
						<a href="javascript:;" class="current">1</a>
						<a href="javascript:;">2</a>
						<a href="javascript:;">3</a>
						<a href="javascript:;" class="next"><img src="images/next.svg"></a>
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
	
</script>