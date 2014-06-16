<link rel="stylesheet" href="/Home/public/CSS/home.css">

		<div id="member">
<?php 
	define("ROOT", $_SERVER['DOCUMENT_ROOT']);
	
	include_once ROOT.'/Home/controllers/member.php';
	

	


	// 判断到底是哪个表传来的数据
	
	if (isset($_POST['name']) && !(empty($_POST['name']))) {

		print <<<EQT
		<form action="/Home/controllers/member2.php" method="post">
				<div class="M-title">
					<span class="sp1 title">用户ID</span>
					<span class="sp2 title">用户名</span>
					<span class="sp3 title">用户邮箱</span>
					<span class="sp4 title">积分</span>
					<span class="sp5 title">网站币</span>
					<span class="sp6 title">注册时间</span>
					<span class="sp7 title">注册ip</span>
				</div>
				<div class="M-title">
					<span class="sp1 title"><input type="hidden" name="Uid" value="$Uid">$Uid</span> 
					<span class="sp2 title"><input type="text" name="username" value="$username"></span> 
					<span class="sp3 title"><input type="text" name="useremail" value="$useremail"></span> 
					<span class="sp4 title"><input type="text" name="integra" value="$integral"></span> 
					<span class="sp5 title"><input type="text" name="coin" value="$coin"></span> 
					<span class="sp6 title">$time</span> 
					<span class="sp7 title">$ip</span> 
				</div>
				<div class="M-title">
					<input type="submit" name="option" value="update">
					<input type="submit" name="option" value="delete">
				</div>
			</form>
EQT;
}
 ?>



		</div>