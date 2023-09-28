<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>
</head>

<body class="is-yellow">
	<?php include 'topmenu.php'; ?>

	<div class="joinWrap">
		<div class="innerWrap">
			<div class="head">
				<div class="ch">會員註冊</div>
				<div class="en">SIGN UP</div>
			</div>

			<form action="javascript:;" method="POST" class="joinForm">
				<div class="joinForm-items">
					<div class="field-container">
						<div class="item grid-x align-middle">
							<div class="title cell shrink">姓名</div>
							<input type="text" name="" id="" class="cell auto" placeholder="請填寫真實姓名">
						</div>
						<div class="item grid-x align-middle">
							<div class="title cell shrink">性別</div>
							<div class="cell auto grid-x">
								<div class="radio-item">
									<input type="radio" name="gender" id="g1">
									<label for="g1">男性</label>
								</div>
								<div class="radio-item">
									<input type="radio" name="gender" id="g2">
									<label for="g2">女性</label>
								</div>
							</div>
						</div>
						<div class="item grid-x align-middle">
							<div class="title cell shrink">手機號碼</div>
							<input type="text" name="" id="" class="cell auto" placeholder="09********">
						</div>
						<div class="item grid-x align-middle">
							<div class="title cell shrink">生日</div>
							<input type="date" name="" id="" class="cell auto">
						</div>
					</div>
					<div class="field-container address">
						<div class="item grid-x">
							<div class="title cell shrink">地址</div>
							<div class="address-area twzipcode cell auto">
								<div class="addressList">
									<div data-role="county"></div>
									<div data-role="district"></div>
									<div data-role="zipcode" class="is-zip"></div>
								</div>
								<input type="text" name="address" id="" class="address" placeholder="地址">
							</div>
						</div>
						<div class="item grid-x zip-mobile hide-for-large">
							<div class="zip-come-mobile cell shrink"></div>
							<!-- <input type="text" name="address" id="" class="address cell auto" placeholder="地址"> -->
						</div>
					</div>
					<div class="field-container email">
						<div class="item grid-x align-middle">
							<div class="title cell shrink">電子信箱</div>
							<input type="text" name="" id="" class="cell auto" placeholder="請填寫真實信箱 此為未來登入帳號">
						</div>
					</div>
					<div class="field-container">
						<div class="item grid-x align-middle">
							<div class="title cell shrink">密碼</div>
							<input type="password" name="" id="" class="cell auto" placeholder="AAA00000">
						</div>
						<div class="item grid-x align-middle">
							<div class="title cell shrink">確認密碼</div>
							<input type="password" name="" id="" class="cell auto" placeholder="AAA00000">
						</div>
					</div>
				</div>

				<div class="terms-container">
					<div class="terms-area">
						請點選 閱讀 <span class="agree">註冊會員條款</span>
						<!-- <input type="radio" name="terms" id="t1"> -->
						<!-- <label for="t1">我已閱讀，並同意條款</label> -->
					</div>
				</div>

				<div class="text-center">
					<div class="arrow-go"><button class="submit">
						<div class="grid-x align-center-middle">
							<div class="title">前往註冊</div>
							<svg width="59.52" height="56.3" viewBox="0 0 59.52 56.3">
								<path d="M32.85,56.3c-1.97-.04-6.61-.02-8.52-.18-8.75-.49-16.9-5.84-21.07-13.5C.35,37.57-.18,31.64,.05,25.95-.12,12.11,12.02,0,25.88,.06c1.99,0,6.6-.13,8.52-.02,8.86,.3,17.25,5.55,21.58,13.27,2.48,4.25,3.51,9.24,3.45,14.13,1.19,15.57-10.9,29.01-26.58,28.84h0Zm0-1.89c12.99,.02,24.08-11.23,24.06-24.14,.22-5.47-.15-10.99-2.95-15.81-3.92-7.12-11.51-12.13-19.67-12.58-1.82-.16-6.52-.13-8.41-.17C12.64,1.37,1.1,12.69,1.08,25.96c-.21,5.52,.25,11.28,3.18,16.11,4.09,7.19,11.91,12.1,20.19,12.36,1.84,.11,6.52-.03,8.42-.03h0Z" style="fill: #968375;"/>
								<g class="svg-arrow">
									<path d="M20.43,19.3c5.51,1.95,10.93,3.96,16.37,6.1,2.18,.94,2.02,4.29-.19,5.06,0,0-2.3,.95-2.3,.95-4.46,1.83-9.39,3.82-13.87,5.53-.18,.07-.39-.02-.46-.21-.07-.18,.02-.38,.19-.45,3.02-1.37,6.05-2.72,9.1-4.04,1.51-.65,5.4-2.31,6.87-2.93,1.22-.43,1.29-2.26,.13-2.77-2.24-.92-4.63-1.82-6.89-2.75-3.08-1.24-6.14-2.51-9.2-3.82-.41-.17-.16-.83,.26-.67h0Z" style="fill: #968375;"/>
									<path d="M33.2,23.98s4.39,1.82,6.69,2.14c2.84,.4,2.44,2.86,.41,3.4-2.07,.56-1.55-.03-6.76,2.21l4.21-2.79-1.37-3.06-3.19-1.91Z" style="fill: #968375;"/>
								</g>
							</svg>
						</div>
					</button></div>
				</div>
			</form>
		</div>
	</div>

	<div class="m-fancyWrap has-scrollbar terms-fancyWrap">
		<div class="fancy-closeBlock"></div>

		<!-- code here -->
		<div class="terms-fancyContainer">

			<div class="items-area">
				<div class="fancy-close"><svg width="32.12" height="32.12" viewBox="0 0 32.12 32.12">
					<line x1="1.25" y1="30.87" x2="30.87" y2="1.25" class="cls-1"/>
					<line x1="1.25" y1="1.25" x2="30.87" y2="30.87" class="cls-1"/>
					<path d="M5.71,4s10.63,10.01,18.93,1.78c8.92-8.85-8.59,8.73-8.59,8.73L5.71,4Z" class="cls-2"/>
				</svg></div>

				<div class="head">
					<div class="en">MEMBERSHIP TERMS</div>
					<div class="ch">註冊會員條款</div>
				</div>

				<div class="title">娃力分享有限公司</div>

				<div class="content">
					親愛的會員您好，我們以推廣「質感共享」商業模式做為未來從事種樹儲碳工作的經濟基礎, 誠摯歡迎您加入娃力分享的行列，為維護您的權益，請仔細閱讀下述說明：本約定條款的目的，是為了保護您以及娃力分享的利益，凡欲申請加入娃力分享會員者，均應事先充分閱讀且瞭解本聲明書之內容，並在認同此一內容精神與同意遵守相關規定下申請加入成為娃力分享會員。本公司因應經營之需要得於任何時候修改本條款之內容，並以公告之方式通知會員，將不再另行個別通知修改後的條款。若您於條款修改公告後仍繼續使用本公司網站，即表示您同意修改後的條款並遵守。如果您點選「我同意」或類似語意的選項、或在娃力分享網站進行訂購、付款、消費或進行相關行為，就視為您事先已經知悉、並同意本約定條款的所有約定。如您不同意本條款之全部或部分內容，請勿註冊，並請立即停止使用本服務。本條款之具體約定內容如後：<br>
					<br>
					<b>一、 會員資料</b><br>
					1.	會員如未滿二十歲者，於消費前應先經其法定代理人之同意。一經訂購消費，即視為已取得法定代理人之同意。<br>
					2.	您的註冊或登錄資料義務：您須提供正確、最新及完整的資料，如果事後有變更，應即時至本網站更新。您務必主動更新、維護個人會員資料，若您提供任何錯誤、不完整的資料，導致運作成本增加，娃力分享有權訴求額外補償運作費用。<br>
					3.	若您提供任何錯誤或不實的資料，本網站有權暫停或終止您的帳號，並拒絕您使用本網站服務。所有使用會員帳號和密碼進入本網站後之行為，均視為該帳號及密碼持有人之行為。請您妥善保管個人資料、付款資料（包含信用卡資料）、會員帳號及密碼以避免外洩。<br>
					<br>
					<b>二、 會員的守法義務及承諾</b><br>
					1.	您承諾絕不為任何非法目的或以任何非法方式使用本服務，並承諾遵守中華民國相關法規及一切使用網際網路之國際慣例。
					2.	您若係中華民國以外之使用者，並同意遵守所屬國家或地域之法令。
					3.	您同意並保證不得利用本服務從事侵害他人權益或違法之行為，包括但不限於：<br>
					<ul>
						<li>不得公布或傳送任何誹謗、侮辱、具威脅性、攻擊性、不雅、猥褻、不實、違反公共秩序或善良風俗或其他不法之文字、圖片或任何形式的檔案於本服務上。</li>
						<li>侵害本公司相關品牌, 服務, 名譽、隱私權、營業秘密、商標權、著作權、專利權、其他智慧財產權及其他權利。</li>
						<li>違反依法律或契約所應負之義務。</li>
						<li>冒用他人名義使用本服務。</li>
						<li>傳輸或散布電腦病毒、後門程式或影響本網站或其他使用者電腦之正常運作者。</li>
						<li>從事未經娃力分享事前授權之商業行為。</li>
						<li>若有正當理由認為不當之內容。有以上情況發生，娃力分享可以立即、在不告知的狀況下終止服務關係。</li>
					</ul>
					<br>
					<b>三、 智慧財產權之聲明</b><br>
					本網站所使用之軟體或程式、公佈之所有圖文、檔案、資訊、網頁設計或其他內容、表徵，除法律另有規定外，均擁有智慧財產權與其他權利。任何非權利人未得到事先書面同意，不得逕自重製、改作、散佈或為其他妨礙權利人權益之行為。<br>
					<br>
					<b>四、 系統安全</b><br>
					1.本系統不以任何明示或默示的方式擔保您所上載或傳輸的資料將被正常顯示或處理、亦不擔保資料傳輸的正確性；如果您發現本系統有錯誤或疏失，請立即通知娃力分享。<br>
					2.本系統會定期備份資料，但是除非本系統有故意或重大過失，本系統不對任何資料的失誤刪除、或備份錯誤或失敗負責。<br>
					<br>
					<b>五、 契約之解釋</b><br>
					本約定條款及相關網頁上所定各條、各項及相關約定之內容，如該條、該項、或該相關約定內容之全部或一部經法院認定為無效或不構成契約內容之一部，不影響其餘條項或其餘約定內容之效力；經法院認定為無效或不構成契約內容之一部之條項或約定內容，應依相關法令規定所允許之最大可能範圍內，為與原條項或原約定內容相符之解釋或補充。<br>
					因本約定條款及相關網頁上所定之任一條項或相關約定所取得或可主張之權利，其行使或不行使，不影響依本約定條款及相關網頁上所定其他條項或相關約定所取得或可主張之權利之行使或不行使。依消費者保護法第十一條第二項之規定，定型化契約條款如有疑義時，應為有利於消費者之解釋。<br>
					<br>
					<b>六、 其他約定</b><br>
					您瞭解並同意，如果娃力分享電子商務、及與其相關之權利義務關係及交易等合約移轉予第三人，則娃力分享電子商務之權利義務關係、相關交易、以及相關資料等，包括且不限於相關之權利義務關係等，亦得一併移轉予該第三人承受、並由該第三人繼續提供服務。<br>
					您瞭解並同意，如果娃力分享因故依法或依約必須對您負擔賠償或補償責任，則娃力分享之賠償或補償責任，應以退還有爭議之該筆交易之實收金額為賠償或補償責任之上限。<br>
					<br>
					<div class="info">
						公司名稱：娃力分享有限公司 <br>
						統一編號： 94066476<br>
						公司地址：高雄市鼓山區鼓山三路5巷1號<br>
					</div>
					<br>
					<b>七、 本聲明書之效力、準據法與管轄法院</b><br>
					您在娃力分享所進行的所有線上訂購、交易或行為，以及本約定條款，都以中華民國法令為準據法。<br>
					所有因為您在娃力分享進行線上訂購、交易或行為，以及因本約定條款所發生的糾紛，如果因此而涉訟，都以台灣高雄地方法院為第一審管轄法院。但不得排除消費者保護法第四十七條及民事訴訟法第四百三十六條之九規定之小額訴訟管轄法院之適用。<br>
					本聲明書中，任何條款之全部或一部份無效時，不影響其他約定之效力。會員與本公司之權利義務關係，應依網路規範及中華民國法令解釋及規章、慣例為 依據處理。若產生任何爭議以台灣高雄地方法院為第一審管轄法院。本公司的任何聲明、條款如有未盡完善之處，將以最大誠意，依誠實信用、平等互惠原則，共商解決之道。<br>
				</div>

				<div class="terms-area text-center">
					<input type="radio" name="terms" id="t1">
					<label for="t1">我已閱讀，並同意條款</label>
				</div>
			</div>
		</div>
	</div>

	<div class="m-fancyWrap verify-fancyWrap">
		<div class="fancy-closeBlock"></div>

		<!-- code here -->
		<div class="verify-fancyContainer">

			<div class="innerWrap">
				<div class="fancy-close"><svg width="32.12" height="32.12" viewBox="0 0 32.12 32.12">
					<line x1="1.25" y1="30.87" x2="30.87" y2="1.25" class="cls-1"/>
					<line x1="1.25" y1="1.25" x2="30.87" y2="30.87" class="cls-1"/>
					<path d="M5.71,4s10.63,10.01,18.93,1.78c8.92-8.85-8.59,8.73-8.59,8.73L5.71,4Z" class="cls-2"/>
				</svg></div>

				<div class="head-area">
					<div class="en">VERIFYING EMAIL ADDRESS</div>
					<div class="ch">驗證電子信箱</div>
				</div>

				<div class="title">林很好  您好</div>

				<div class="content">
					已寄送驗證信件至您的信箱<br>
					請至信箱進行驗證，完成註冊會員流程<br>
					謝謝!
				</div>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
</html>

<script>
	$(".agree").on("click", function () {
		$(".terms-fancyWrap").addClass("is-show").scrollTop(0)
		$("body").addClass("is-lock")
	})

	$(".submit").on("click", function () {
		$(".verify-fancyWrap").addClass("is-show").scrollTop(0)
		$("body").addClass("is-lock")
	})

	$(".fancy-close, .fancy-closeBlock, input[name='terms']").on("click", function () {
		$(".m-fancyWrap").removeClass("is-show")
		gsap.delayedCall(0.5, function () {
			$("body").removeClass("is-lock")
		});
	})

	$('.twzipcode').twzipcode({
		readonly: true,
	});
	
	$("select").niceSelect();
	$("select[name='county']").change(function(){
		$("select").niceSelect("update");
	})

	if(device == 'mobile'){
		$(".zip-come-mobile").html( $(".is-zip") )
		$(".twzipcode .is-zip").remove()
	}
</script>