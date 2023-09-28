<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="index-BannerWrap" data-depth="0.5">
		<div class="slogan text-rd-en" data-delay=".75">
			one crib<br>
			for<br>
			one tree
		</div>

		<ul id="bannerList"></ul>

		<div id="index-in-number" class="num-area grid-x align-bottom">
			<div class="now">0<span></span></div>
			<div class="line">/</div>
			<div class="total">0<span></span></div>
		</div>

		<ul id="index-in-dots" class="grid-x align-middle"><!-- js 產生 --></ul>
	</div>

	<div class="index-switchWrap">
		<div class="index-switch-item grid-x">
			<div class="article-area cell large-auto show-for-large">
				<div class="switch-content">
					<div data-switch="0">
						<div class="ch text-rd-ch">人類共同的氣候問題</div>
						<div class="en text-rd-en">GLOBAL WARMING ISSUES</div>
						<div class="content content-show" data-delay=".5">氣溫年年升高，全球暖化導致世界各地的極端氣候: 頻繁出現的洪災旱災、高溫熱浪、森林大火，正蠶食著我們的居住環境，威脅著這個美麗的星球；若無法及時改善現況、扭轉頹勢，我們代代相傳的的生活環境如何守護呢? 千里之行,始於足下,這只能靠你我即刻行動，從日常小處著手。其中，改變傳統對物品「私有化」的觀念，轉而擁抱「群體共享」意識，才能減緩目前過度生產造成的汙染與地球資源超限使用的速度。</div>
					</div>
					<div data-switch="1">
						<div class="ch text-rd-ch">木工職人的反思與行動</div>
						<div class="en text-rd-en">A WOODWORKER’S<br>REASSESSMENT AND ACTIONS</div>
						<div class="content content-show" data-delay=".5">身為訂製家具木工職人，我們觀察到有個一直存在、卻未被提起的問題:「嬰兒床使用時間短,用過即丟造成森林資源嚴重浪費」。為了找尋解決方案，我們著手檢視整個過程:從消費、生產、設計和物流中每一個環節，秉持「永續」與「共享」的核心價值帶入討論，最終開發出實際可行的產品與服務方案，還進一步構思出執行的共享系統。同時我們也提出「質感共享」的觀念,也就是指我們應該設計製造並維護高質感好物,讓許多嬰兒能夠接續共享使用。從我們的角度看，就如同許多新生嬰兒透過共享高質感嬰兒床，積聚每一份小小的力量，努力改變自己的未來。這也是「娃力」品牌名稱的由來。記得有一天下午，熟識的老木工隔著震耳的鉋木機器聲，問起新品牌名稱。我在他耳邊大聲回答:「娃力!」結果他更大聲地問:「蝦毀? 換汝?」( uānn- lí，“換你”的台語發音)。雖然是個不經意的玩笑，但事後回想卻覺得「換汝」一個接一個的精神，其實非常符合循環永續的概念，呼應著品牌的初心。</div>
					</div>
					<div data-switch="2">
						<div class="en-big text-rd-en">ONE CRIB FOR ONE TREE<br>TO SAVE OUR HOME PLANET</div>
						<div class="content content-show" data-delay=".5">一張可循環使用的質感嬰兒床，就可以避免許多不必要的森林資浪費與運輸、生產所帶來的能源消耗與汙染。所以改善這個問題其實不難，只要我們願意去做。除此之外，我們更承諾未來會執行並紀錄「每生產一張嬰兒床就種一棵樹」的理念，讓減碳儲碳的書面計算化為雙手雙腳的實際行動。</div>
						<div class="deco show-for-large"><img src="images/switch-deco.png"></div>
					</div>
				</div>
			</div>
			<div class="pic-area cell large-shrink" id="switch-pic" data-index="0">
				<div class="items-area grid-x">
					<div class="item-1 cell auto">
						<div class="item" style="background: url('images/switch-1.jpg') left center / cover no-repeat"></div>
						<div class="item" style="background: url('images/switch-2.jpg') left center / cover no-repeat"></div>
						<div class="item" style="background: url('images/switch-3.jpg') left center / cover no-repeat"></div>
					</div>
					<div class="item-2 cell auto">
						<div class="item" style="background: url('images/switch-3.jpg') right center / cover no-repeat"></div>
						<div class="item" style="background: url('images/switch-2.jpg') right center / cover no-repeat"></div>
						<div class="item" style="background: url('images/switch-1.jpg') right center / cover no-repeat"></div>
					</div>
				</div>

				<ul id="switch-dots" class="grid-x align-center"></ul>
			</div>
			<div class="article-area cell large-auto hide-for-large">
				<ul class="switch-content">
					<li>
						<div class="ch text-rd-ch">人類共同的氣候問題</div>
						<div class="en text-rd-en">GLOBAL WARMING ISSUES</div>
						<div class="content content-show" data-delay=".5">氣溫年年升高，全球暖化導致世界各地的極端氣候: 頻繁出現的洪災旱災、高溫熱浪、森林大火，正蠶食著我們的居住環境，威脅著這個美麗的星球；若無法及時改善現況、扭轉頹勢，我們代代相傳的的生活環境如何守護呢? 千里之行,始於足下,這只能靠你我即刻行動，從日常小處著手。其中，改變傳統對物品「私有化」的觀念，轉而擁抱「群體共享」意識，才能減緩目前過度生產造成的汙染與地球資源超限使用的速度。</div>
					</li>
					<li>
						<div class="ch text-rd-ch">木工職人的反思與行動</div>
						<div class="en text-rd-en">A WOODWORKER’S<br>REASSESSMENT AND ACTIONS</div>
						<div class="content content-show" data-delay=".5">身為訂製家具木工職人，我們觀察到有個一直存在、卻未被提起的問題:「嬰兒床使用時間短,用過即丟造成森林資源嚴重浪費」。為了找尋解決方案，我們著手檢視整個過程:從消費、生產、設計和物流中每一個環節，秉持「永續」與「共享」的核心價值帶入討論，最終開發出實際可行的產品與服務方案，還進一步構思出執行的共享系統。同時我們也提出「質感共享」的觀念,也就是指我們應該設計製造並維護高質感好物,讓許多嬰兒能夠接續共享使用。從我們的角度看，就如同許多新生嬰兒透過共享高質感嬰兒床，積聚每一份小小的力量，努力改變自己的未來。這也是「娃力」品牌名稱的由來。記得有一天下午，熟識的老木工隔著震耳的鉋木機器聲，問起新品牌名稱。我在他耳邊大聲回答:「娃力!」結果他更大聲地問:「蝦毀? 換汝?」( uānn- lí，“換你”的台語發音)。雖然是個不經意的玩笑，但事後回想卻覺得「換汝」一個接一個的精神，其實非常符合循環永續的概念，呼應著品牌的初心。</div>
					</li>
					<li>
						<div class="en-big show-for-large text-rd-en">ONE CRIB FOR ONE TREE<br>TO SAVE OUR HOME PLANET</div>
						<div class="ch hide-for-large text-rd-ch">人類共同的氣候問題</div>
						<div class="en hide-for-large text-rd-en">GLOBAL WARMING ISSUES</div>
						<div class="content content-show" data-delay=".5">一張可循環使用的質感嬰兒床，就可以避免許多不必要的森林資浪費與運輸、生產所帶來的能源消耗與汙染。所以改善這個問題其實不難，只要我們願意去做。除此之外，我們更承諾未來會執行並紀錄「每生產一張嬰兒床就種一棵樹」的理念，讓減碳儲碳的書面計算化為雙手雙腳的實際行動。</div>
						<div class="deco show-for-large"><img src="images/switch-deco.png"></div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="index-simpleWrap">
		<div class="index-simple-item grid-x">
			<div class="info-area cell large-shrink">
				<div class="head-area">
					<div class="en text-rd-en">SIMPLE & EASY LIFE</div>
					<div class="ch text-rd-ch">安心省力的服務</div>
				</div>
				<div class="total">6<i>FEATURES</i></div>
			</div>
			<div class="article-area cell large-auto">
				<div class="swiper simpleSliderWrap">
					<ul class="swiper-wrapper simpleSlider">
						<li class="swiper-slide">
							<div class="pic"><img src="images/simple-1.png"></div>
							<div class="content-area grid-x">
								<div class="num cell large-shrink show-for-large"><span>01</span></div>
								<div class="title-area cell large-auto">
									<div class="title">								<div class="num cell large-shrink hide-for-large"><span>01</span></div>節省時間</div>
									<div class="content">與家具工房HAAP Furniture合作，嚴格把關，100%台灣製造的優質產品，讓爸爸媽媽不需再費力貨比三家，把寶貴的周末假期留給自己。</div>
								</div>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="pic"><img src="images/simple-2.png"></div>
							<div class="content-area grid-x">
								<div class="num cell large-shrink show-for-large"><span>02</span></div>
								<div class="title-area cell large-auto">
									<div class="title"><div class="num cell large-shrink hide-for-large"><span>02</span></div>輕鬆付款</div>
									<div class="content">官網直接下單，透過專業第三方金流服務公司，降低個資外流風險；依照個人需求，享受信用卡單筆或分期與定期定額月費付款服務，量入為出，聰明理財，輕鬆無負擔。</div>
								</div>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="pic"><img src="images/simple-3.png"></div>
							<div class="content-area grid-x">
								<div class="num cell large-shrink show-for-large"><span>03</span></div>
								<div class="title-area cell large-auto">
									<div class="title"><div class="num cell large-shrink hide-for-large"><span>03</span></div>到府安裝</div>
									<div class="content">專業人員到府安裝服務，爸爸媽媽不需要花時間研究繁雜說明書，揮汗DIY又負擔組裝不牢固造成安全風險。</div>
								</div>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="pic"><img src="images/simple-4.png"></div>
							<div class="content-area grid-x">
								<div class="num cell large-shrink show-for-large"><span>04</span></div>
								<div class="title-area cell large-auto">
									<div class="title"><div class="num cell large-shrink hide-for-large"><span>04</span></div>一鍵退還</div>
									<div class="content">當孩子夠大，不再需要使用嬰兒床時，只要登入官網內的會員中心，即可輕鬆申請停約，程序簡單方便。</div>
								</div>
							</div>
						</li>
						<li class="swiper-slide">
							<div class="pic"><img src="images/simple-5.png"></div>
							<div class="content-area grid-x">
								<div class="num cell large-shrink show-for-large"><span>05</span></div>
								<div class="title-area cell large-auto">
									<div class="title"><div class="num cell large-shrink hide-for-large"><span>05</span></div>到府拆收</div>
									<div class="content">停約程序完成後，即有專業人員到府拆收，不須為後續處理嬰兒床事務煩惱，立刻還給您開闊舒適的生活空間。</div>
								</div>
							</div>
						</li>
						<li class="swiper-slide">
						<div class="pic"><img src="images/simple-6.png"></div>
							<div class="content-area grid-x">
								<div class="num cell large-shrink show-for-large"><span>06</span></div>
								<div class="title-area cell large-auto">
									<div class="title"><div class="num cell large-shrink hide-for-large"><span>06</span></div>回廠檢修</div>
									<div class="content">每張嬰兒床都有個別的編號，用以追蹤回廠檢修履歷，其目的是確保每個寶寶都能使用到100% 安全、衛生、舒適的嬰兒床。</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="simple-next arrow-go show-for-large"><svg width="99.3" height="93.98" viewBox="0 0 99.3 93.98">
					<path d="M55.17,93.98l-9.55-.07-2.39-.02-2.43-.14c-.81-.07-1.63-.04-2.42-.19l-2.4-.38c-6.39-1.11-12.53-3.67-17.74-7.5-5.23-3.8-9.63-8.73-12.77-14.36C2.31,65.68,.52,59.31,.13,52.89l-.12-2.41c-.03-.8,0-1.59-.01-2.39,0-1.59-.01-3.18,.02-4.78l.11-2.41c.04-.8,.05-1.61,.2-2.41l.36-2.39c.06-.4,.11-.8,.19-1.19l.3-1.17c1.47-6.28,4.36-12.21,8.38-17.27,4.02-5.06,9.25-9.12,15.05-11.97C30.42,1.65,36.89,.13,43.38,.07L52.93,0h2.39s2.44,.1,2.44,.1c.81,.06,1.63,.02,2.43,.16l2.41,.35c6.42,1.03,12.63,3.52,17.95,7.31,5.34,3.75,9.82,8.71,13.06,14.39,3.26,5.68,5.08,12.14,5.52,18.67l.13,2.45c.03,.81,.01,1.6,.02,2.4,0,1.6,.04,3.17,0,4.79l-.12,2.45c-.05,.82-.05,1.64-.21,2.45l-.37,2.43c-.07,.4-.11,.81-.2,1.21l-.31,1.19c-1.51,6.38-4.5,12.39-8.62,17.47-4.11,5.1-9.45,9.15-15.34,11.94-5.9,2.79-12.42,4.23-18.93,4.2Zm0-1.89c6.23-.06,12.43-1.52,18-4.25,5.57-2.73,10.56-6.65,14.41-11.51,3.84-4.86,6.59-10.54,8.03-16.55l.29-1.12c.08-.38,.12-.76,.18-1.14l.35-2.29c.15-.76,.15-1.54,.2-2.31l.12-2.32c.04-1.57,.02-3.18,.03-4.76,0-.79,.02-1.6,0-2.38l-.11-2.32c-.36-6.16-2.03-12.29-5.08-17.69-3.02-5.41-7.25-10.13-12.28-13.78-5.01-3.68-10.9-6.13-17.03-7.2l-2.31-.37c-.77-.15-1.55-.12-2.33-.19l-2.33-.13-2.38-.02-9.55-.06c-12.51-.1-24.97,5.7-32.87,15.52-3.94,4.89-6.8,10.65-8.27,16.75l-.3,1.14c-.08,.38-.13,.78-.19,1.16l-.36,2.33c-.16,.77-.16,1.56-.21,2.35l-.13,2.36c-.05,1.58-.01,3.18-.02,4.77,0,.79-.01,1.6,.02,2.38l.12,2.36c.01,1.58,.32,3.13,.55,4.68l.18,1.17,.29,1.14,.59,2.28c.16,.77,.49,1.49,.75,2.23l.81,2.21c.69,1.41,1.33,2.85,2.1,4.22,3.12,5.45,7.44,10.2,12.57,13.81,5.11,3.64,11.07,6.02,17.23,7l2.32,.34c.77,.14,1.56,.1,2.33,.15l2.34,.1h2.39s9.55-.08,9.55-.08Z" style="fill: #968375;"/>
					<g class="svg-arrow">
						<path d="M36.92,33.18c4.9,1.71,9.76,3.51,14.62,5.33,2.44,.89,4.85,1.85,7.27,2.77l1.82,.7,.91,.35c.32,.13,.55,.19,.97,.39,1.54,.67,2.57,2.4,2.46,4.06-.03,.83-.31,1.66-.81,2.35-.48,.69-1.23,1.21-1.94,1.5l-3.6,1.48c-2.4,.98-4.79,1.99-7.2,2.94-4.81,1.94-9.63,3.86-14.48,5.69-.29,.11-.61-.04-.72-.33-.1-.28,.03-.58,.29-.71,4.72-2.17,9.47-4.25,14.22-6.31,2.37-1.05,4.77-2.04,7.15-3.06l3.58-1.52c.93-.38,1.48-1.18,1.51-2.12,.04-.93-.46-1.82-1.31-2.21-.16-.1-.56-.23-.83-.35l-.9-.36-1.81-.72c-2.41-.96-4.83-1.89-7.23-2.88-4.81-1.95-9.61-3.91-14.37-5.96-.28-.12-.41-.45-.29-.74,.12-.27,.42-.4,.7-.31Z" style="fill: #968375;"/>
						<path d="M56.87,40.5s6.87,2.84,10.45,3.35c4.44,.63,3.82,4.47,.65,5.32s-2.42-.05-10.56,3.46l6.59-4.36-2.14-4.79-4.98-2.98Z" style="fill: #968375;"/>
					</g>
				</svg></div>
			</div>

			<div class="swiper-pagination simple-pagination"></div>
		</div>
	</div>

	<div class="index-scrollWrap">
		<div class="scroll-overlay">
			<div class="overlay"></div>
		</div>

		<div class="scroll-item">
			<div class="item item-1">
				<div class="item-all" id="scroll-animate">
					<div class="pic"><img src="images/baby-index.png"></div>
				</div>

				<div class="item-all" id="scroll-animate-2">
					<div class="pic"><img src="images/baby-index-2.png"></div>
				</div>

				<div class="head-area">
					<div class="logo"><svg width="279.94" height="79.4" viewBox="0 0 279.94 79.4">
						<path d="M143.22,68.11c0-.93,.27-1.63,.81-2.07,.54-.45,1.37-.67,2.5-.67h17.37v-10.98h-11.39c-1.46,0-2.56,.24-3.31,.71v-3.45c0-1.82,1.1-2.74,3.31-2.74h11.39v-5.69c0-2.31,.19-3.45,.57-3.45h4.56c.38,0,.57,1.15,.57,3.45v5.69h11.11c1.5,0,2.63-.23,3.37-.7v3.44c0,1.83-1.12,2.74-3.37,2.74h-11.11v10.98h14.27c1.5,0,2.63-.24,3.38-.7v3.44c0,1.78-1.13,2.67-3.38,2.67h-37.34c-2.21,0-3.31-.89-3.31-2.67Zm-2.11-37.28c.09-1.26-.68-1.9-2.32-1.9h-4.85c-1.27,7.46-2.25,12.68-2.95,15.69-.14,.56-.21,1.03-.21,1.41,0,.42,.09,.77,.28,1.05,.2,.28,.5,.54,.92,.77l5.49,3.52c1.92-4.97,3.14-11.82,3.66-20.55Zm-17.94,37.7c0-.84,.8-1.8,2.39-2.88,4.13-2.72,7.29-5.86,9.49-9.42-.75-.75-2.08-1.78-4.01-3.1-1.5-1.03-2.9-2.04-4.22-3.03-.56-.42-.96-.86-1.19-1.33-.24-.47-.36-1.03-.36-1.69,0-.6,.12-1.55,.36-2.81l2.81-15.13h-2.74c-1.09,0-1.99,.24-2.75,.71v-3.45c0-1.82,1.08-2.74,3.24-2.74h2.95l1.41-10.62c.19-1.31,.51-2.29,.99-2.92,.47-.63,1.12-.95,1.97-.95,1.88,0,2.81,.94,2.81,2.82l-1.48,11.53h6.12c3.57,0,5.35,1.73,5.35,5.2,0,3.75-.33,7.86-.99,12.31-.79,5.59-1.99,10.11-3.59,13.58,2.02,1.65,3.51,2.99,4.47,4.05,.96,1.05,1.44,1.89,1.44,2.49,0,1.97-1.01,2.95-3.03,2.95-.42,0-1.03-.28-1.82-.87-.8-.59-1.72-1.47-2.75-2.64l-.91-1.05c-1.41,2.11-2.86,4.03-4.37,5.77-1.26,1.5-2.88,2.93-4.85,4.29-1.88,1.32-3.26,1.97-4.15,1.97-1.74,0-2.61-1-2.61-3.03Zm23.99-32.98c0-1.83,1.12-2.74,3.37-2.74h13.37v-9.5h-10.48c-1.41,0-2.48,.24-3.23,.7v-3.44c0-1.78,1.08-2.67,3.23-2.67h10.48v-5.35c0-2.35,.19-3.51,.57-3.51h4.56c.38,0,.57,1.17,.57,3.51v5.35h10.54c.8,0,1.58-.38,2.32-1.13v3.44c0,2.07-.77,3.1-2.32,3.1h-10.54v9.5h14.14c1.45,0,2.56-.24,3.3-.71v3.45c0,1.82-1.1,2.74-3.3,2.74h-33.21c-1.49,0-2.62,.24-3.37,.7v-3.44Z" style="fill: #024737;"/>
						<path d="M236.43,71.76c-2.62,0-3.94-1.15-3.94-3.44,0-.94,.28-1.69,.85-2.25,.47-.47,1.99-.77,4.57-.92,3.99-.19,6.49-.8,7.53-1.83,.61-.56,1.15-2.23,1.61-5.03,.47-2.79,.83-6.6,1.06-11.43l.85-15.05c.05-1.22-.26-2.14-.92-2.78-.66-.64-1.56-.95-2.74-.95h-20.82c-.7,11.4-2.86,20.21-6.47,26.45-3.71,6.42-8.68,11.42-14.91,14.98-1.22,.7-2.21,1.22-2.95,1.55-.76,.33-1.36,.49-1.83,.49-2.02,0-3.03-1.12-3.03-3.37,0-1.22,.7-2.18,2.11-2.88,8.16-4.13,14.05-10.13,17.65-18.01,.9-1.97,1.6-4.49,2.12-7.56,.52-3.07,.91-6.95,1.19-11.64h-17.44c-.8,0-1.58,.37-2.32,1.12v-3.44c0-2.3,.77-3.44,2.32-3.44h17.72l.13-9.71c.1-2.25,1.1-3.38,3.03-3.38,2.12,0,3.17,1.22,3.17,3.66,0,2.07-.04,5.21-.14,9.43h22.37c2.91,0,4.91,.57,6.02,1.72,1.1,1.15,1.65,3.09,1.65,5.81,0,5.2-.37,12.54-1.13,22.01-.56,6.94-1.22,11.51-1.97,13.71-1.41,4.13-6.51,6.19-15.33,6.19Z" style="fill: #024737;"/>
						<path d="M279.94,69.53c0,5.45-4.42,9.87-9.87,9.87s-9.88-4.41-9.88-9.87,4.42-9.87,9.88-9.87,9.87,4.41,9.87,9.87Z" style="fill: #024737;"/>
						<path d="M70.77,62.49c0,5.45-4.42,9.87-9.87,9.87s-9.88-4.41-9.88-9.87,4.42-9.88,9.88-9.88,9.87,4.42,9.87,9.88Z" style="fill: #024737;"/>
						<path d="M19.74,9.87c0,5.46-4.42,9.87-9.88,9.87S0,15.32,0,9.87,4.42,0,9.87,0s9.88,4.42,9.88,9.87Z" style="fill: #024737;"/>
						<path d="M45.25,9.87c0,5.46-4.42,9.87-9.87,9.87s-9.87-4.41-9.87-9.87S29.92,0,35.38,0s9.87,4.42,9.87,9.87Z" style="fill: #024737;"/>
						<path d="M70.73,9.87c0,5.46-4.42,9.87-9.87,9.87s-9.88-4.41-9.88-9.87S55.41,0,60.86,0s9.87,4.42,9.87,9.87Z" style="fill: #024737;"/>
						<path d="M96.23,9.87c0,5.46-4.41,9.87-9.87,9.87s-9.87-4.41-9.87-9.87S80.91,0,86.36,0s9.87,4.42,9.87,9.87Z" style="fill: #024737;"/>
						<path d="M19.74,35.89c0,5.46-4.42,9.87-9.88,9.87S0,41.35,0,35.89s4.42-9.87,9.87-9.87,9.88,4.41,9.88,9.87Z" style="fill: #024737;"/>
						<path d="M45.25,35.89c0,5.46-4.42,9.87-9.87,9.87s-9.87-4.41-9.87-9.87,4.41-9.87,9.87-9.87,9.87,4.41,9.87,9.87Z" style="fill: #024737;"/>
						<path d="M96.23,35.89c0,5.46-4.41,9.87-9.87,9.87s-9.87-4.41-9.87-9.87,4.41-9.87,9.87-9.87,9.87,4.41,9.87,9.87Z" style="fill: #024737;"/>
						<path d="M19.76,62.37c0,5.46-4.41,9.88-9.87,9.88S.03,67.82,.03,62.37s4.42-9.87,9.87-9.87,9.87,4.42,9.87,9.87Z" style="fill: #024737;"/>
						<path d="M45.27,62.37c0,5.46-4.42,9.88-9.87,9.88s-9.88-4.42-9.88-9.88,4.42-9.87,9.88-9.87,9.87,4.42,9.87,9.87Z" style="fill: #024737;"/>
						<path d="M96.26,62.37c0,5.46-4.42,9.88-9.87,9.88s-9.88-4.42-9.88-9.88,4.42-9.87,9.88-9.87,9.87,4.42,9.87,9.87Z" style="fill: #024737;"/>
					</svg></div>
					<div class="en">
						one crib for one tree<br>
						to save our home planet
					</div>
				</div>

				<div class="title-area">
					<div class="title">換汝守護</div>
					<div class="content">
						守護汝个囝仔<br>
						守護伊个未來<br>
						讓你我的涓滴綠念匯聚成河
					</div>
				</div>

				<div class="video" id="video">
					<!-- <video src=""></video> -->
					<div class="pic"></div>
				</div>
			</div>
			<div class="item item-2"></div>
			<div class="item item-3"></div>
			<div class="item item-4"></div>
		</div>
	</div>

	<div class="index-infoWrap">
		<div class="deco-1"><img src="images/index-deco-1.png"></div>
		<div class="deco-2 show-for-large"><img src="images/index-deco-2.png"></div>
		
		<div class="index-info text-center">
			<div class="ch text-rd-ch">100% 台灣設計與製造</div>
			<div class="en text-rd-en">DESIGNED AND MADE IN TAIWAN</div>
			<div class="content content-show" data-delay=".5">我們在台灣找尋生產供應鏈，在地製造除了可以比較好地管理產品品質之外，同時也可以減少運輸油耗又可以增加在地工作機會</div>
		</div>
	</div>

	<div class="index-picGroupWrap grid-x">
		<div class="cell auto">
			<div class="item"><a href="product.php">
				<div class="pic-area">
					<div class="more show-for-large"><img src="images/group-more.svg"></div>
					<div class="pic"><img src="images/group-1.jpg"></div>
					<div class="text show-for-large">HAAP FURNITURE</div>
				</div>
				<div class="title grid-x align-middle"><span class="grid-x align-center-middle show-for-large">01</span>HAAP Furniture</div>
			</a></div>
			<div class="group-1 grid-x show-for-large">
				<div class="item cell large-auto"><a href="product.php">
					<div class="pic-area">
						<div class="more show-for-large"><img src="images/group-more.svg"></div>
						<div class="pic"><img src="images/group-3.jpg"></div>
						<div class="text show-for-large">NORDIC ASTHETICS AND NIPPON HUMAN FACTORS</div>
					</div>
					<div class="title grid-x align-middle"><span class="grid-x align-center-middle">03</span>北歐家具美學與日系家具的尺度</div>
				</a></div>
				<div class="item cell large-auto"><a href="product.php">
					<div class="pic-area">
						<div class="more show-for-large"><img src="images/group-more.svg"></div>
						<div class="pic"><img src="images/group-4.jpg"></div>
						<div class="deco-1"><img src="images/group-deco-1.svg"></div>
						<div class="deco-2"><img src="images/group-deco-2.svg"></div>
						<div class="text show-for-large two">PRODUCT SAFETY TESTING</div>
					</div>
					<div class="title grid-x align-middle"><span class="grid-x align-center-middle">04</span>CNS11676  產品測試合格</div>
				</a></div>
			</div>
		</div>
		<div class="group-item cell large-shrink">
			<div class="group-1 grid-x hide-for-large">
				<div class="item cell large-auto"><a href="product.php">
					<div class="pic-area">
						<div class="more show-for-large"><img src="images/group-more.svg"></div>
						<div class="pic"><img src="images/group-4.jpg"></div>
						<div class="deco-1 show-for-large"><img src="images/group-deco-1.svg"></div>
						<div class="deco-2 show-for-large"><img src="images/group-deco-2.svg"></div>
						<div class="text show-for-large two">PRODUCT SAFETY TESTING</div>
					</div>
					<div class="title grid-x align-middle">CNS11676  產品測試合格</div>
				</a></div>
				<div class="item cell large-auto"><a href="product.php">
					<div class="pic-area">
						<div class="more show-for-large"><img src="images/group-more.svg"></div>
						<div class="pic"><img src="images/group-3.jpg"></div>
						<div class="text show-for-large">NORDIC ASTHETICS AND NIPPON HUMAN FACTORS</div>
					</div>
					<div class="title grid-x align-middle">北歐家具美學與<br class="hide-for-large">日系家具的尺度</div>
				</a></div>
			</div>
			<div class="group-2">
				<div class="item"><a href="product.php">
					<div class="pic-area">
						<div class="more show-for-large"><img src="images/group-more.svg"></div>
						<div class="pic"><img src="images/group-2.jpg"></div>
						<div class="deco-1 hide-for-large"><img src="images/group-deco-1.svg"></div>
						<div class="deco-2 hide-for-large"><img src="images/group-deco-2.svg"></div>
						<div class="text show-for-large two">SUSTAINABLE DESIGN</div>
					</div>
					<div class="title grid-x align-middle"><span class="grid-x align-center-middle show-for-large">02</span>為環保而生的<br class="hide-for-large">永續設計</div>
				</a></div>
				<div class="group-3 item"><a href="product.php">
					<div class="pic-area">
						<div class="more show-for-large"><img src="images/group-more.svg"></div>
						<div class="pic"><img src="images/group-5.jpg"></div>
						<div class="text show-for-large">PRODUCT SAFETY TESTING</div>
					</div>
					<div class="title grid-x align-middle"><span class="grid-x align-center-middle show-for-large">05</span>新科技 POE <br class="hide-for-large">彈性體空氣床墊</div>
				</a></div>
			</div>
		</div>
	</div>

	<div class="index-goto text-center">
		<div class="en text-rd-en">one crib for one tree <br class="hide-for-large">to save our home planet</div>
		<a href="sharing.php"><div class="arrow-go">
			<div class="grid-x align-center-middle">
				<div class="title">換我守護</div>
				<svg width="99.37" height="93.98" viewBox="0 0 99.37 93.98">
					<path d="M55.23,93.98c-4.57-.09-12.34,.1-16.8-.42-13.75-1.58-26.27-10.16-32.91-22.25C.57,62.84-.3,52.9,.08,43.3,.17,19.64,19.79,.18,43.43,.07c4.58,.03,12.34-.27,16.81,.2,20.76,2.02,37.88,19.86,38.94,40.72,.29,6.02,.38,12.23-.76,18.18-4.13,20.15-22.65,35.05-43.2,34.81h0Zm0-1.89c19.6-.06,36.77-14.3,40.73-33.43,1.08-5.73,.99-11.71,.77-17.52-.76-18.8-15.82-35.66-34.38-38.66-5.33-1.04-13.43-.64-18.91-.77C23.87,1.35,5.89,15.93,2,35.12c-.84,4.23-.98,8.67-.91,12.97-.05,3.52,.24,7.13,.87,10.59,.17,.73,.7,2.67,.88,3.43,.86,2.97,2.17,5.96,3.66,8.67,6.57,11.66,18.8,19.8,32.12,21.15,4.36,.45,12.15,.15,16.61,.18h0Z"/>
					<g class="svg-arrow">
						<path d="M36.98,33.18c7.95,2.79,15.85,5.76,23.71,8.79,.6,.26,1.25,.44,1.87,.74,3.42,1.52,3.18,6.64-.29,7.91-8.37,3.47-16.81,6.91-25.28,10.12-.65,.24-1.08-.73-.43-1.03,8.23-3.77,16.61-7.37,24.96-10.89,.93-.38,1.48-1.18,1.51-2.12,.07-1.34-.92-2.2-2.14-2.56-.56-.23-2.13-.83-2.71-1.07-7.24-2.85-14.45-5.78-21.6-8.84-.64-.27-.27-1.28,.41-1.04h0Z"/>
						<path d="M56.93,40.5s6.87,2.84,10.45,3.35c4.44,.63,3.82,4.47,.65,5.32-3.24,.87-2.42-.05-10.56,3.46l6.59-4.36-2.14-4.79-4.98-2.98Z"/>
					</g>
				</svg>
			</div>
		</div></a>
	</div>

	<div class="index-blogWrap">
		<div class="head text-rd-ch">說說娃力</div>

		<div class="index-blog-item grid-x">
			<div class="en cell large-shrink text-rd-en">BLOG</div>

			<div class="article-area cell large-auto">
				<ul class="blogList">
					<li><a href="rearing_detail.php">
						<div class="pic-area">
							<div class="pic"><img src="images/blog-1.jpg"></div>
							<div class="more"><img src="images/blog-more.svg"></div>
						</div>
						<div class="content-area grid-x">
							<div class="title-area cell auto">
								<div class="title">淺談 : 從搖籃到搖籃</div>
								<div class="content">與台灣家具訂製工房HAAP Furniture 合作，以最合適的工法與選材，和周密設計與品管，製造最優質的產品，不需到處貨比三家浪費您寶貴的時間</div>
							</div>
							<div class="cats cell shrink">植人職人</div>
						</div>
					</a></li>
					<li><a href="rearing_detail.php">
						<div class="pic-area">
							<div class="pic"><img src="images/blog-2.jpg"></div>
							<div class="more"><img src="images/blog-more.svg"></div>
						</div>
						<div class="content-area grid-x">
							<div class="title-area cell auto">
								<div class="title">嬰兒床內擺放知識多!</div>
								<div class="content">與台灣家具訂製工房HAAP Furniture 合作，以最合適的工法與選材，和周密設計與品管，製造最優質的產品，不需到處貨比三家浪費您寶貴的時間與台灣家具訂製工房HAAP Furniture 合作，以最合適的工法與選材，和周密設計與品管，製造最優質的產品，不需到處貨比三家浪費您寶貴的時間</div>
							</div>
							<div class="cats cell shrink">阿媽教汝</div>
						</div>
					</a></li>
				</ul>
			</div>
		</div>

		<div class="deco"><img src="images/blog-deco.png"></div>
	</div>

	<div class="index-marqueeWrap">
		<ul class="text-marquee marquee">
			<li><img src="images/text-marquee.svg"></li>
			<li><img src="images/text-marquee.svg"></li>
			<li><img src="images/text-marquee.svg"></li>
		</ul>

		<ul class="marquee"></ul>

		<ul class="index-marqueeList marqueeHover">
			<li><img src="images/index-marquee-1.jpg"></li>
			<li><img src="images/index-marquee-2.jpg"></li>
			<li><img src="images/index-marquee-3.jpg"></li>
			<li><img src="images/index-marquee-4.jpg"></li>
		</ul>
	</div>

	<div class="index-shareListWrap">
		<div class="shareListWrap grid-x align-bottom align-center">
			<div class="shareList-item">
				<div class="head text-center">SEE MORE ON</div>
				<div class="share-row grid-x align-bottom">
					<div class="deco"><svg width="35.34" height="62.52" viewBox="0 0 35.34 62.52">
						<path d="M3.78,1.08l31.51,60.82c.11,.21,.03,.46-.18,.57-.2,.1-.45,.03-.56-.16L.27,3C-.28,2.05,.04,.82,1,.27,1.96-.28,3.18,.04,3.73,1c.01,.02,.03,.06,.04,.08Z" style="fill: #DBC4B6;"/>
					</svg></div>
					<nav class="shareList">
						<a href="https://www.facebook.com/creeb.co/"><svg width="38.64" height="38.64" viewBox="0 0 38.64 38.64">
							<path d="M17.17,28.94v-11.13h-1.81v-1.79h1.81v-.61c0-1.81,.4-3.47,1.49-4.51,.88-.85,2.05-1.2,3.15-1.2,.83,0,1.55,.19,2,.37l-.32,1.81c-.35-.16-.83-.29-1.49-.29-2,0-2.51,1.76-2.51,3.74v.69h3.12v1.79h-3.12v11.13h-2.32Z" style="fill: #024737;"/>
							<path d="M20.06,29.51h-3.46v-11.13h-1.81v-2.93l1.81-.04c0-2.21,.56-3.87,1.67-4.92,.9-.87,2.16-1.36,3.54-1.36,1.09,0,1.91,.29,2.22,.42l.42,.18-.53,2.99-.67-.31c-.35-.16-.77-.24-1.26-.24-.9,0-1.94,.36-1.94,3.16v.12h3.12v2.93h-3.12v11.13Zm-2.32-1.14h1.18v-11.13h3.12v-.65h-3.12v-1.26c0-3.56,1.67-4.3,3.08-4.3,.37,0,.72,.04,1.05,.11l.12-.68c-.33-.09-.8-.19-1.35-.19-.63,0-1.82,.13-2.75,1.04-.88,.84-1.32,2.21-1.32,4.1v1.18h-1.81v.65h1.81v11.13Z" style="fill: #024737;"/>
							<circle cx="19.32" cy="19.32" r="18.18" style="fill: none; stroke: #024737; stroke-miterlimit: 10; stroke-width: 2.27px;"/>
						</svg></a>
						<a href="https://www.instagram.com/creeb.co/"><svg width="37.48" height="37.48" viewBox="0 0 37.48 37.48">
							<path d="M27,8.67c0,1.02,.83,1.85,1.85,1.85s1.85-.83,1.85-1.85-.83-1.85-1.85-1.85-1.85,.83-1.85,1.85Z" style="fill: #024737;"/>
							<rect x="1.14" y="1.14" width="35.21" height="35.21" rx="10.01" ry="10.01" style="fill: none; stroke: #024737; stroke-miterlimit: 10; stroke-width: 2.27px;"/>
							<rect x="10.48" y="10.48" width="16.52" height="16.52" rx="8.26" ry="8.26" style="fill: none; stroke: #024737; stroke-miterlimit: 10; stroke-width: 2.27px;"/>
						</svg></a>
					</nav>
					<div class="deco"><svg width="35.34" height="62.52" viewBox="0 0 35.34 62.52">
						<path d="M35.07,3L.79,62.31c-.12,.2-.37,.27-.58,.15-.2-.11-.27-.36-.16-.56L31.56,1.08c.51-.98,1.72-1.36,2.7-.86,.98,.51,1.36,1.72,.86,2.7-.01,.03-.03,.06-.04,.08Z" style="fill: #DBC4B6;"/>
					</svg></div>
				</div>
			</div>
		</div>
	</div>
	

	<?php include 'footer.php'; ?>
</body>

<?php include 'script.php'; ?>
<?php include 'changeColor.php'; ?>
</html>

<script>
	if(device == 'mobile'){
		$(".topmenu-fixed").addClass("is-index-mobile")

		var _windowH = $(window).height() - 50
		$(window).on("scroll", () => {
			var _scrollTop = $(window).scrollTop()

			if (_scrollTop > _windowH) {
				$(".topmenu-fixed").removeClass("is-index-mobile")
				return false;
			} else {
				$(".topmenu-fixed").addClass("is-index-mobile")
			}
		})


		var $switch = $(".switch-content").flickity({
			"prevNextButtons": false,
			"pageDots": false,
			"wrapAround": true,
			"imagesLoaded": true,
			"fade": true,
			"cellAlign": "center",
			"adaptiveHeight": true,
			"arrowShape": ""
		});

		var flkty = $switch.data('flickity');
		var cellElements = $switch.flickity('getCellElements');

		for (var i = 0; i < cellElements.length; i++) {
			$("<li></li>").appendTo( $("#switch-dots") )
		}

		$("#switch-dots li").first().addClass("current")

		$("#switch-dots li").on("click", function () {
			$switch.flickity('select', $(this).index())
		})

		$switch.on( 'change.flickity', function( event, index ) {
			$("#switch-pic").attr("data-index", index)
			$("#switch-dots li").eq(index).addClass("current").siblings().removeClass("current")
		});
		
	}else{
		var _windowH = $(window).height()
		$(window).on("scroll", () => {
			var _scrollTop = $(window).scrollTop()

			if (_scrollTop > _windowH) {
				$(".topmenu-fixed").removeClass("is-white")
				return false;
			} else {
				$(".topmenu-fixed").addClass("is-white")
			}
		})
	}

	


	var $carousel = $("#bannerList").vegas({
		overlay: false,
		transition: 'fade', 
		transitionDuration: 2000,
		delay: 5000,
		animation: 'myAnimation1',
		animationDuration: 12000,
		slides: [
			{ src: 'images/index-banner-1.jpg' },
			{ src: 'images/index-banner-2.jpg' },
			{ src: 'images/index-banner-3.jpg' },
			{ src: 'images/index-banner-4.jpg' }
		],
	});


	$carousel.on('vegasinit', function (e, index, slideSettings) {
		var _total = index.slides.length

		for (var i = 0; i < _total; i++) {
			$("<li></li>").appendTo($("#index-in-dots"))
		}
		$("#index-in-dots li").first().addClass("current")

		$("#index-in-dots li").on("click", function () {
			$carousel.vegas('jump', $(this).index());
		})

		$("#index-in-number .total span").html(_total)
	});

	$carousel.on('vegaswalk', function (e, index, slideSettings) {
		$("#index-in-dots li").eq(index).addClass("current").siblings().removeClass("current")
		
		$("#index-in-number .now span").html(index + 1)
	});

	if(device == 'desktop'){
		ScrollTrigger.create({
			toggleActions: "play reverse play reverse",
			trigger: "#switch-pic",
			start: "top 14%",
			endTrigger: ".index-switchWrap",
			end: "90% bottom",
			pin: true,
			// markers: true,
		});

		var $switch = $("[data-switch]").get().reverse()

		$(window).scroll(function() {
			var scrollTop = $(this).scrollTop()

			$($switch).each((i, el) => {
				var _index = el.dataset.switch
				var _b = scrollTop + $(el).height() * 0.4

				if (_b > $(el).offset().top) {
					$("#switch-pic").attr("data-index", _index)

					return false
				}
			})
		}).trigger("scroll")
	}

	if(device == 'mobile'){
		var swiper = new Swiper(".simpleSliderWrap", {
			slidesPerView: 1,
			slidesPerGroup: 1,
			spaceBetween: -165,
			speed: 500,
			loop: true,
			navigation: {
				nextEl: ".simple-next",
			},
			pagination: {
				el: ".simple-pagination",
			},
		});
	}else{
		var swiper = new Swiper(".simpleSliderWrap", {
			slidesPerView: 3,
			slidesPerGroup: 1,
			spaceBetween: 80,
			speed: 1000,
			loop: true,
			navigation: {
				nextEl: ".simple-next",
			},
		});
	}
	

	// -----------------------------------------
	// 縮縮定位
	ScrollTrigger.create({
		toggleActions: "play reverse play reverse",
		trigger: ".scroll-overlay",
		start: "top top",
		endTrigger: ".index-scrollWrap",
		end: "bottom bottom",
		pin: true,
		// markers: true,
	});
	// 縮縮動態
	if(device == 'mobile'){
		ScrollTrigger.create({
			trigger: '.index-scrollWrap',
			start: "top top",
			end: "bottom top",
			endTrigger: '.scroll-item .item-1',
			toggleActions: "play reverse play reverse",
			scrub: 1,
			animation: gsap.to('.overlay', { clipPath: 'inset(50% 25% 50% 25% round 30px)', filter: 'blur(5px)', }),
			// markers: true,
		})
	}else{
		ScrollTrigger.create({
			trigger: '.index-scrollWrap',
			start: "top top",
			end: "bottom top",
			endTrigger: '.scroll-item .item-1',
			toggleActions: "play reverse play reverse",
			scrub: 1,
			animation: gsap.to('.overlay', { clipPath: 'inset(50% round 28px)', filter: 'blur(5px)', }),
			// markers: true,
		})
	}
	// -----------------------------------------

	// -----------------------------------------
	// info定位
	ScrollTrigger.create({
		toggleActions: "play reverse play reverse",
		trigger: ".index-scrollWrap",
		start: "top top",
		endTrigger: ".index-scrollWrap",
		end: "bottom bottom",
		pin: '.scroll-item .head-area',
		// markers: true,
	});
	// info動態
	gsap.to('.scroll-item .head-area', {
		scrollTrigger: {
			toggleActions: "play reverse play reverse",
			trigger: '.scroll-item .item-2',
			start: "center center",
			end: "center center",
			scrub: 1.2,
			// markers: true
		},
		opacity: 1,
		ease: 'none'
	})

	// content定位
	ScrollTrigger.create({
		toggleActions: "play reverse play reverse",
		trigger: ".index-scrollWrap",
		start: "top top",
		endTrigger: ".index-scrollWrap",
		end: "bottom bottom",
		pin: '.scroll-item .title-area',
		// markers: true,
	});
	// content動態
	gsap.to('.scroll-item .title-area >div', {
		scrollTrigger: {
			toggleActions: "play reverse play reverse",
			trigger: '.scroll-item .item-2',
			start: "center center",
			end: "center center",
			scrub: 1.2,
			// markers: true
		},
		opacity: 1,
		stagger: .5,
		ease: 'none'
	})
	// -----------------------------------------

	// -----------------------------------------
	// 嬰兒床上視角定位
	gsap.delayedCall(0.5, function() {
		ScrollTrigger.create({
			trigger: ".index-scrollWrap",
			start: "top top",
			endTrigger: ".index-scrollWrap",
			end: "bottom bottom",
			pin: "#scroll-animate",
			// markers: true,
		});
	});
	// 嬰兒床上視角淡入
	gsap.fromTo("#scroll-animate .pic", {
		opacity: 0,
		scale: .55,
	}, {
		scrollTrigger: {
			toggleActions: "play reverse play reverse",
			trigger: '.scroll-item .item-2',
			start: "top center",
			end: "center center",
			scrub: 1.2,
			// markers: true
		},
		opacity: 1,
		scale: 1,
		ease: 'none'
	})
	// 嬰兒床上視角淡出
	gsap.fromTo("#scroll-animate .pic", {
		opacity: 1,
	}, {
		scrollTrigger: {
			toggleActions: "play reverse play reverse",
			trigger: '.scroll-item .item-2',
			start: "bottom center",
			end: "bottom center",
			scrub: 1.2,
			// markers: true
		},
		opacity: 0,
		ease: 'none'
	})

	gsap.set("#scroll-animate .pic", {
		opacity: 0,
	})
	

	// 嬰兒床前視角定位
	gsap.delayedCall(0.5, function() {
		ScrollTrigger.create({
			trigger: ".index-scrollWrap",
			start: "top top",
			endTrigger: ".index-scrollWrap",
			end: "bottom bottom",
			pin: "#scroll-animate-2",
			// markers: true,
		});
	})
	// 嬰兒床前視角淡出
	gsap.to("#scroll-animate-2 .pic", {
		scrollTrigger: {
			toggleActions: "play reverse play reverse",
			trigger: '.scroll-item .item-3',
			start: "top center",
			end: "top center",
			scrub: 1.2,
			// markers: true
		},
		opacity: 1,
		ease: 'none'
	})
	// -----------------------------------------

	// -----------------------------------------
	// 後面影片定位
	ScrollTrigger.create({
		trigger: ".index-scrollWrap",
		start: "top top",
		endTrigger: ".index-scrollWrap",
		end: "bottom bottom",
		pin: "#video",
		// markers: true,
	});
	// 後面影片淡入
	gsap.to("#video", {
		scrollTrigger: {
			toggleActions: "play reverse play reverse",
			trigger: '.scroll-item .item-3',
			start: "top center",
			end: "center center",
			scrub: 1.2,
			// markers: true
		},
		opacity: 1,
		ease: 'none'
	})
	// -----------------------------------------
	if(device == 'mobile'){
		gsap.to(".scroll-item .title-area .title", {
			scrollTrigger: {
				toggleActions: "play reverse play reverse",
				trigger: '.scroll-item .item-3',
				start: "top center",
				end: "center center",
				scrub: 1.2,
				// markers: true
			},
			color: "#fff",
		})
		gsap.to(".scroll-item .title-area .content", {
			scrollTrigger: {
				toggleActions: "play reverse play reverse",
				trigger: '.scroll-item .item-3',
				start: "top center",
				end: "center center",
				scrub: 1.2,
				// markers: true
			},
			color: "#E2D8BF",
		})
	}else{
		gsap.to(".scroll-item .title-area >div", {
			scrollTrigger: {
				toggleActions: "play reverse play reverse",
				trigger: '.scroll-item .item-3',
				start: "top center",
				end: "center center",
				scrub: 1.2,
				// markers: true
			},
			color: "#fff",
		})
		gsap.to(".scroll-item .head-area .en", {
			scrollTrigger: {
				toggleActions: "play reverse play reverse",
				trigger: '.scroll-item .item-3',
				start: "top center",
				end: "center center",
				scrub: 1.2,
				// markers: true
			},
			color: "#0B5B46",
		})
	}
	gsap.to(".scroll-item .head-area svg path", {
		scrollTrigger: {
			toggleActions: "play reverse play reverse",
			trigger: '.scroll-item .item-3',
			start: "top center",
			end: "center center",
			scrub: 1.2,
			// markers: true
		},
		fill: "#fff",
	})
</script>