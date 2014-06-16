<?php
	 // 判断用户是否登录了
	session_start();
	 if (!empty($_SESSIION['username'])) {
	 	header("refresh:3;url=http://www.tutorship.com/Home/views/index.php");
	 }
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登录</title>
	<link rel="stylesheet" href="/Home/public/CSS/home.css">
</head>
<body>
	<div id="l-wrap">
		<div class="back">
			<img src="/Home/public/Image/back5.jpg" class="i-back">
			<div class="l-logo">
				<img class="i-logo" src="/Home/public/Image/logo.jpg">
			</div>
			<div class="subject">
				计算机等级考试辅导系统
			</div> 
			<div id="login">
			<form action="/Home/controllers/login.php" method="post">
				<label>
					<span>管理员账号：</span>
					<input type="text" name="admin" placeholder="网站管理员账号">
				</label>
				<label>
					<span>管理员密码：</span>
					<input type="password" name="pass" placeholder="网站管理员账号">
				</label>
				<label class="label-verify">
					<span>验 &nbsp;证  &nbsp;码：</span>
					<input type="text" name="verify" class="verify" placeholder="验证码" >
					<span class="verify_img">
						<img src="/Admin/controllers/code.php" onclick="javascript:this.src='/Admin/controllers/code.php?tm='+Math.random();" />
					</span>

				</label>
		
				<label class="la-sub">
					<input  class="l-sub" type="submit" value="登录">
				</label>
			</form>
		</div>
		</div>
		
		

	</div>

	
</body>
</html>