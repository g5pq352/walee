<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="yellow-50">
	<?php include 'topmenu.php'; ?>

	<div class="shopnoteWrap" id="app">
		<div class="head">
			<img src="images/shopnote-head.svg" class="show-for-large">
			<img src="images/shopnote-head-mobile.svg" class="hide-for-large">
		</div>

		<ul class="shopnote-catList flex-container">
			<li><a href="note.php">
				<img class="show-for-large" src="images/shopnote-cat-1.svg"><img class="show-for-large" src="images/shopnote-cat-1-hover.svg">
				<img class="hide-for-large" src="images/shopnote-cat-1-mobile.svg"><img class="hide-for-large" src="images/shopnote-cat-1-hover-mobile.svg">
			</a></li>
			<li><a href="note2.php">
				<img class="show-for-large" src="images/shopnote-cat-2.svg"><img class="show-for-large" src="images/shopnote-cat-2-hover.svg">
				<img class="hide-for-large" src="images/shopnote-cat-2-mobile.svg"><img class="hide-for-large" src="images/shopnote-cat-2-hover-mobile.svg">
			</a></li>
			<li><a href="note3.php">
				<img class="show-for-large" src="images/shopnote-cat-3.svg"><img class="show-for-large" src="images/shopnote-cat-3-hover.svg">
				<img class="hide-for-large" src="images/shopnote-cat-3-mobile.svg"><img class="hide-for-large" src="images/shopnote-cat-3-hover-mobile.svg">
			</a></li>
			<li class="current"><a href="note4.php">
				<img class="show-for-large" src="images/shopnote-cat-4.svg"><img class="show-for-large" src="images/shopnote-cat-4-hover.svg">
				<img class="hide-for-large" src="images/shopnote-cat-4-mobile.svg"><img class="hide-for-large" src="images/shopnote-cat-4-hover-mobile.svg">
			</a></li>
		</ul>

		<div class="article-area">
			<div class="flag"><img src="images/shopnote-flag-4.svg"></div>

			<ul class="noteList">
				<li>
					<div class="title">
						本公司不會以電話主動請您提供個人資料；如有更改付款方式、<br>
						訂單確認等事宜，亦不會要求提供您提供ATM匯款帳號全碼，煩請多加注意！
					</div>
					<!-- <div class="content">
						請於下訂完成後3日內（含六日）完成ＡＴＭ轉帳／匯款作業，並於線上填妥匯款帳號末5碼。<br>
						待款項確認無誤後，人員會盡快安排您的訂單出貨。<br>
						如有任何問題，煩請來電詢問04-23012180告知，謝謝。
					</div> -->
				</li>
			</ul>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>