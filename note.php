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
			<li class="current"><a href="note.php">
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
			<li><a href="note4.php">
				<img class="show-for-large" src="images/shopnote-cat-4.svg"><img class="show-for-large" src="images/shopnote-cat-4-hover.svg">
				<img class="hide-for-large" src="images/shopnote-cat-4-mobile.svg"><img class="hide-for-large" src="images/shopnote-cat-4-hover-mobile.svg">
			</a></li>
		</ul>

		<div class="article-area">
			<div class="flag"><img src="images/shopnote-flag-1.svg"></div>

			<ul class="noteList">
				<li>
					<div class="title">電話訂購</div>
					<div class="content">
						請撥打<a href="tel:+886423012180">04-23012180</a>至門市訂購，確認產品規格、數量，配送收件資料及聯絡方式，<br>
						我們將為您安排處理。
					</div>
				</li>
				<li>
					<div class="title">傳真訂購</div>
					<div class="content">
						請列印訂購單，詳細填妥訂購產品資料後，麻煩傳真至<a href="tel:+886423029068">04-23029068</a>訂購，<br>
						資料傳送後請來電<a href="tel:+886423012180">04-23012180</a>確認是否收到傳真訂單，人員會與您核對完整訂購內容。<br>
					</div>
				</li>
				<li>
					<div class="title">門市選購</div>
					<div class="content">歡迎親臨至 <a href="https://www.google.com.tw/maps?q=台中市西區模範街12巷5號1樓" target="_blank">台中市西區模範街12巷5號1樓</a> 直接現場購買喔！</div>
				</li>
				<li>
					<div class="title">線上訂購</div>
					<div class="content">於官網上選購產品，並詳細填妥完整配送資料，選取付款方式後，即完成訂單。</div>
				</li>
			</ul>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>