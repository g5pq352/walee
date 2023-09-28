<!DOCTYPE html>
<html>
<head>
	<?php include 'html_head.php'; ?>

	<style>
	body{
		background-color: #F9F4ED;
	}
	</style>
</head>

<body>
	<?php include 'topmenu.php'; ?>

	<div class="memberWrap text-center">
		<div class="member-man">
			<div class="head"><svg width="104.24" height="98.5" viewBox="0 0 104.24 98.5">
				<rect x="0" y="0" width="104.24" height="98.5" rx="44.82" ry="44.82" style="fill: #024737;"/>
				<circle cx="52.12" cy="33.72" r="12.34" style="fill: #f9f4ed;"/>
				<path d="M44.98,55.47h14.27c8.98,0,16.27,7.29,16.27,16.27v4.12c0,.7-.57,1.27-1.27,1.27H29.98c-.7,0-1.27-.57-1.27-1.27v-4.12c0-8.98,7.29-16.27,16.27-16.27Z" style="fill: #f9f4ed;"/>
			</svg></div>
			<div class="name">林很好</div>
		</div>

		<ul class="memberList-mobile grid-y">
			<li><a href="sharing.php">共享方案</a></li>
			<li><a href="record.php">訂單列表</a></li>
			<li><a href="member.php">會員資訊</a></li>
			<li><a href="contact.php">聯絡客服</a></li>
			<li><a href="javascript:;" id="logout">登出</a></li>
		</ul>
	</div>

	<?php include 'footer.php'; ?>
</body>
<?php include 'script.php'; ?>
<?php include 'changeColorMember.php'; ?>
</html>

<script>
	$('.twzipcode').twzipcode({
		readonly: true,
	});
	$(".address-area select").niceSelect();
	$("select[name='county']").change(function(){
		$(".address-area select").niceSelect("update");
	})

	if(device == 'mobile'){
		$(".zip-come-mobile").html( $(".is-zip") )
		$(".twzipcode .is-zip").remove()
	}
</script>