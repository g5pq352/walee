<?php

	require_once('PHPMailer/PHPMailerAutoload.php');
	include 'smtpsetting.php';
	///////////////////////////////////////////////////////////////

	$phpmailer->SetFrom('maysuregun@gmail.com', '娃力');
	$phpmailer->AddReplyTo('maysuregun@gmail.com', '娃力');

	$phpmailer->AddAddress('maysuregun@gmail.com', '娃力');

	$phpmailer->Subject = "娃力 – 「訂單成立」確認信";

	$mailContent = "<div style='max-width: 570px; letter-spacing: 1px; line-height: 1.8;'>"

	."<div>親愛的○○○小姐/先生您好:</div>"
	."<div>很榮幸獲得您對娃力理念的支持與愛護, 您於xxxx年xx月30日填寫訂單已經完成。</div>"
	."<div>訂單內容如下:</div>"
	."<div>訂單編號: CM230500130</div>"
	."<div>成立日期: xxxx/xx/xx</div>"
	."<div>適合您理財需求的方案 A</div>"
	."<div>1. 嬰兒床保證金NTD 12000</div>"
	."<div>2. 一次性消費項目NTD 6880</div>"
	."<div>3. 信用卡分期選項: 單筆</div> <br>"
	."<div>提醒您於7日之內回到會員中心繼續完成訂單刷卡授權，否則系統會自動刪除本訂單。THANK YOU & HAVE A GOOD DAY!</div>"

	."</div>";


	$phpmailer->Body = $mailContent;

	$phpmailer->IsHTML(true);



	if(!$phpmailer->Send()) {

	echo "<div class='err'>傳送時失敗，請稍後再試，或連絡客服！</div>";

	} else {

	echo "感謝您的來信！我們將會儘快回覆您。<br>Thanks for your message, and we'll contact you ASAP.";

	}

?>

<?php

	require_once('PHPMailer/PHPMailerAutoload.php');
	include 'smtpsetting.php';
	///////////////////////////////////////////////////////////////

	$phpmailer->SetFrom('maysuregun@gmail.com', '娃力');
	$phpmailer->AddReplyTo('maysuregun@gmail.com', '娃力');

	$phpmailer->AddAddress('maysuregun@gmail.com', '娃力');

	$phpmailer->Subject = "娃力 – 「訂單授權」確認信";

	$mailContent = "<div style='max-width: 570px; letter-spacing: 1px; line-height: 1.8;'>"

	."<div>親愛的○○○小姐/先生您好:</div>"
	."<div>很榮幸獲得您對娃力工作的支持與愛護, 您於xxxx年xx月30日已完成訂單授權。</div>"
	."<div>訂單內容如下:</div>"
	."<div>訂單編號: CM230500130</div>"
	."<div>成立日期: xxxx/xx/xx</div>"
	."<div>適合您理財需求的方案 A</div>"
	."<div>1. 嬰兒床保證金NTD 12000</div>"
	."<div>2. 一次性消費項目NTD 6880</div>"
	."<div>3. 信用卡分期選項: 單筆</div> <br>"
	."<div>提醒您於7日之內回到會員中心繼續完成訂單刷卡授權，否則系統會自動刪除本訂單。THANK YOU & HAVE A GOOD DAY!</div> <br>"

	."<div>保證金收據</div>"
	."<div>-----------------------------------------------------------------------</div>"
	."<div>日期:   2023年09月30日</div>"
	."<div>收款人: 娃力分享有限公司 統編: 41329513</div>"
	."<div>付款人: ○○○</div>"
	."<div>訂單編號 CM230500130</div>"
	."<div>用途: CCB001嬰兒床保證金</div>"
	."<div>金額NTD 12000元整</div>"
	."<div>附註: 保證金將於到府拆收之後 30天內結算無息退還</div>"
	."<div>-----------------------------------------------------------------------</div>"

	."</div>";


	$phpmailer->Body = $mailContent;

	$phpmailer->IsHTML(true);



	if(!$phpmailer->Send()) {

	echo "<div class='err'>傳送時失敗，請稍後再試，或連絡客服！</div>";

	} else {

	echo "感謝您的來信！我們將會儘快回覆您。<br>Thanks for your message, and we'll contact you ASAP.";

	}

?>

<?php

	require_once('PHPMailer/PHPMailerAutoload.php');
	include 'smtpsetting.php';
	///////////////////////////////////////////////////////////////

	$phpmailer->SetFrom('maysuregun@gmail.com', '娃力');
	$phpmailer->AddReplyTo('maysuregun@gmail.com', '娃力');

	$phpmailer->AddAddress('maysuregun@gmail.com', '娃力');

	$phpmailer->Subject = "娃力 – 「訂單未完成」催款信";

	$mailContent = "<div style='max-width: 570px; letter-spacing: 1px; line-height: 1.8;'>"

	."<div>親愛的○○○小姐/先生您好:</div>"
	."<div>感謝您對娃力的支持與愛護, 誠摯提醒您於xxxx年09月30日所填寫的訂單仍未完成。</div>"
	."<div>您選擇了適合您理財需求的方案 A</div>"
	."<div>1. 嬰兒床保證金NTD 12000</div>"
	."<div>2. 一次性消費項目NTD 6880</div>"
	."<div>3. 信用卡分期選項: 單筆</div> <br>"
	."<div>請至會員中心繼續完成, 如於2023年10月7日前仍未收到您的訂單確認, 系統將會自動刪除本訂單。THANK YOU & HAVE A GOOD DAY!</div>"

	."</div>";


	$phpmailer->Body = $mailContent;

	$phpmailer->IsHTML(true);



	if(!$phpmailer->Send()) {

	echo "<div class='err'>傳送時失敗，請稍後再試，或連絡客服！</div>";

	} else {

	echo "感謝您的來信！我們將會儘快回覆您。<br>Thanks for your message, and we'll contact you ASAP.";

	}

?>

<?php

	require_once('PHPMailer/PHPMailerAutoload.php');
	include 'smtpsetting.php';
	///////////////////////////////////////////////////////////////

	$phpmailer->SetFrom('maysuregun@gmail.com', '娃力');
	$phpmailer->AddReplyTo('maysuregun@gmail.com', '娃力');

	$phpmailer->AddAddress('maysuregun@gmail.com', '娃力');

	$phpmailer->Subject = "娃力 – 「訂單已取消」通知信";

	$mailContent = "<div style='max-width: 570px; letter-spacing: 1px; line-height: 1.8;'>"

	."<div>親愛的○○○小姐/先生您好:</div>"
	."<div>很抱歉通知您，由於未能即時收到您的訂單確認紀錄，系統已取消您於2023年09月30日所填寫的訂單資料，很遺憾目前無法提供適合您的服務，期待您能將寶貴意見提供給我們做為未來持續改善的依據。 THANK YOU & HAVE A GOOD DAY!</div>"

	."</div>";


	$phpmailer->Body = $mailContent;

	$phpmailer->IsHTML(true);



	if(!$phpmailer->Send()) {

	echo "<div class='err'>傳送時失敗，請稍後再試，或連絡客服！</div>";

	} else {

	echo "感謝您的來信！我們將會儘快回覆您。<br>Thanks for your message, and we'll contact you ASAP.";

	}

?>

<?php

	require_once('PHPMailer/PHPMailerAutoload.php');
	include 'smtpsetting.php';
	///////////////////////////////////////////////////////////////

	$phpmailer->SetFrom('maysuregun@gmail.com', '娃力');
	$phpmailer->AddReplyTo('maysuregun@gmail.com', '娃力');

	$phpmailer->AddAddress('maysuregun@gmail.com', '娃力');

	$phpmailer->Subject = "娃力 – 「月費授權」確認信";

	$mailContent = "<div style='max-width: 570px; letter-spacing: 1px; line-height: 1.8;'>"

	."<div>親愛的○○○小姐/先生您好:</div>"
	."<div>很榮幸獲得您對娃力工作的支持與愛護, 您已於xxxx年09月30日完成訂單編號: CM230500130月費授權, 未來扣款日將訂於每月30日。請預約您希望的送貨日期, 我們將盡快聯繫您安排出貨日期。THANK YOU & HAVE A GOOD DAY!</div>"

	."</div>";


	$phpmailer->Body = $mailContent;

	$phpmailer->IsHTML(true);



	if(!$phpmailer->Send()) {

	echo "<div class='err'>傳送時失敗，請稍後再試，或連絡客服！</div>";

	} else {

	echo "感謝您的來信！我們將會儘快回覆您。<br>Thanks for your message, and we'll contact you ASAP.";

	}

?>

<?php

	require_once('PHPMailer/PHPMailerAutoload.php');
	include 'smtpsetting.php';
	///////////////////////////////////////////////////////////////

	$phpmailer->SetFrom('maysuregun@gmail.com', '娃力');
	$phpmailer->AddReplyTo('maysuregun@gmail.com', '娃力');

	$phpmailer->AddAddress('maysuregun@gmail.com', '娃力');

	$phpmailer->Subject = "娃力 – 「預約送貨日期」確認信";

	$mailContent = "<div style='max-width: 570px; letter-spacing: 1px; line-height: 1.8;'>"

	."<div>親愛的○○○小姐/先生您好:</div>"
	."<div>您預約的xxxx/xx/xx送貨日期通知已收到, 由於物流安排變因較多, 日期或有調整, 我們會主動與您協調確認實際送貨日期到府安裝。THANK YOU & HAVE A GOOD DAY!</div>"

	."</div>";


	$phpmailer->Body = $mailContent;

	$phpmailer->IsHTML(true);



	if(!$phpmailer->Send()) {

	echo "<div class='err'>傳送時失敗，請稍後再試，或連絡客服！</div>";

	} else {

	echo "感謝您的來信！我們將會儘快回覆您。<br>Thanks for your message, and we'll contact you ASAP.";

	}

?>

<?php

	require_once('PHPMailer/PHPMailerAutoload.php');
	include 'smtpsetting.php';
	///////////////////////////////////////////////////////////////

	$phpmailer->SetFrom('maysuregun@gmail.com', '娃力');
	$phpmailer->AddReplyTo('maysuregun@gmail.com', '娃力');

	$phpmailer->AddAddress('maysuregun@gmail.com', '娃力');

	$phpmailer->Subject = "娃力 – 「起租日期」確認信";

	$mailContent = "<div style='max-width: 570px; letter-spacing: 1px; line-height: 1.8;'>"

	."<div>親愛的○○○小姐/先生您好:</div>"
	."<div>很高興通知您,　CCB001嬰兒床已於xxxx/xx/xx送貨到府開始共享旅程。月費起始日與到府啟用日期間的差額天數共　　天,　將保留於未來停約申請時結算補償于您。 ENJOY THE JOURNEY WITH YOUR LOVELY BABY!</div>"

	."</div>";


	$phpmailer->Body = $mailContent;

	$phpmailer->IsHTML(true);



	if(!$phpmailer->Send()) {

	echo "<div class='err'>傳送時失敗，請稍後再試，或連絡客服！</div>";

	} else {

	echo "感謝您的來信！我們將會儘快回覆您。<br>Thanks for your message, and we'll contact you ASAP.";

	}

?>

<?php

	require_once('PHPMailer/PHPMailerAutoload.php');
	include 'smtpsetting.php';
	///////////////////////////////////////////////////////////////

	$phpmailer->SetFrom('maysuregun@gmail.com', '娃力');
	$phpmailer->AddReplyTo('maysuregun@gmail.com', '娃力');

	$phpmailer->AddAddress('maysuregun@gmail.com', '娃力');

	$phpmailer->Subject = "娃力 – 「停約申請」確認信";

	$mailContent = "<div style='max-width: 570px; letter-spacing: 1px; line-height: 1.8;'>"

	."<div>親愛的○○○小姐/先生您好:</div>"
	."<div>感謝您對娃力的支持與愛護,我們已於XXXX/XX/XX收到您要求的停約申請。很高興CCB001嬰兒床能夠陪伴您與寶寶一起完成階段性任務,一起拍張照片留下快樂回憶吧～接下來我們會為您安排後續到府拆收程序。THANK YOU & HAVE A GOOD DAY!</div>"

	."</div>";


	$phpmailer->Body = $mailContent;

	$phpmailer->IsHTML(true);



	if(!$phpmailer->Send()) {

	echo "<div class='err'>傳送時失敗，請稍後再試，或連絡客服！</div>";

	} else {

	echo "感謝您的來信！我們將會儘快回覆您。<br>Thanks for your message, and we'll contact you ASAP.";

	}

?>

<?php

	require_once('PHPMailer/PHPMailerAutoload.php');
	include 'smtpsetting.php';
	///////////////////////////////////////////////////////////////

	$phpmailer->SetFrom('maysuregun@gmail.com', '娃力');
	$phpmailer->AddReplyTo('maysuregun@gmail.com', '娃力');

	$phpmailer->AddAddress('maysuregun@gmail.com', '娃力');

	$phpmailer->Subject = "娃力 – 「34足月提醒」通知信";

	$mailContent = "<div style='max-width: 570px; letter-spacing: 1px; line-height: 1.8;'>"

	."<div>親愛的○○○小姐/先生您好:</div>"
	."<div>感謝您一直以來對娃力的支持與愛護，我們紀錄中顯示○○寶貝已經滿34足月了,　在此誠摯提醒您,　CCB001嬰兒床適用年齡為36個月,　您現在即可撥空進入會員中心辦理停約申請喔。THANK YOU & HAVE A GOOD DAY!</div>"

	."</div>";


	$phpmailer->Body = $mailContent;

	$phpmailer->IsHTML(true);



	if(!$phpmailer->Send()) {

	echo "<div class='err'>傳送時失敗，請稍後再試，或連絡客服！</div>";

	} else {

	echo "感謝您的來信！我們將會儘快回覆您。<br>Thanks for your message, and we'll contact you ASAP.";

	}

?>

<?php

	require_once('PHPMailer/PHPMailerAutoload.php');
	include 'smtpsetting.php';
	///////////////////////////////////////////////////////////////

	$phpmailer->SetFrom('maysuregun@gmail.com', '娃力');
	$phpmailer->AddReplyTo('maysuregun@gmail.com', '娃力');

	$phpmailer->AddAddress('maysuregun@gmail.com', '娃力');

	$phpmailer->Subject = "娃力 – 「36足月強制解約」通知信";

	$mailContent = "<div style='max-width: 570px; letter-spacing: 1px; line-height: 1.8;'>"

	."<div>親愛的○○○小姐/先生您好:</div>"
	."<div>感謝您一直以來對娃力的支持與愛護，我們紀錄中顯示○○寶貝已經滿36足月了，在此誠摯提醒您,CCB001嬰兒床適用年齡為36個月，如果繼續使用可能不再適合寶貝的身高與體重的成長狀態，娃力客服將立即主動與您聯繫，完成後續到府拆收工作。THANK YOU & HAVE A GOOD DAY!</div>"

	."</div>";


	$phpmailer->Body = $mailContent;

	$phpmailer->IsHTML(true);



	if(!$phpmailer->Send()) {

	echo "<div class='err'>傳送時失敗，請稍後再試，或連絡客服！</div>";

	} else {

	echo "感謝您的來信！我們將會儘快回覆您。<br>Thanks for your message, and we'll contact you ASAP.";

	}

?>

<?php

	require_once('PHPMailer/PHPMailerAutoload.php');
	include 'smtpsetting.php';
	///////////////////////////////////////////////////////////////

	$phpmailer->SetFrom('maysuregun@gmail.com', '娃力');
	$phpmailer->AddReplyTo('maysuregun@gmail.com', '娃力');

	$phpmailer->AddAddress('maysuregun@gmail.com', '娃力');

	$phpmailer->Subject = "娃力 – 「保證金退還」通知信";

	$mailContent = "<div style='max-width: 570px; letter-spacing: 1px; line-height: 1.8;'>"

	."<div>親愛的○○○小姐/先生您好:</div>"
	."<div>誠摯的通知您，我們已於XXXX/XX/XX將結算保證金返還到您提供的退款銀行帳戶。請參見會員中心訂單回顧了解詳情。我們由衷感謝您對娃力理念的支持與愛護，感謝○○和您一起為守護地球貢獻一己之力，娃力團隊將秉持初衷繼續努力，為地球種更多的樹，一起守護寶貝們的未來。</div>"

	."</div>";


	$phpmailer->Body = $mailContent;

	$phpmailer->IsHTML(true);



	if(!$phpmailer->Send()) {

	echo "<div class='err'>傳送時失敗，請稍後再試，或連絡客服！</div>";

	} else {

	echo "感謝您的來信！我們將會儘快回覆您。<br>Thanks for your message, and we'll contact you ASAP.";

	}

?>