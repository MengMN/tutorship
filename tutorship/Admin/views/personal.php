<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人中心</title>
	<link rel="stylesheet" href="/Public/Css/css.css" />
	<link rel="stylesheet" href="/Public/Css/personal.css" />
</head>
<body>
	<?php 
		define("ROOT", $_SERVER["DOCUMENT_ROOT"]);
		include_once ROOT.'/Admin/views/header.htm';
		include_once ROOT.'/Admin/controllers/personal.php';
	?>
	<div id="personal">
		<div id="personal-wrap">
			<h5>基本信息表：</h5>
			<div class="personal-left">
				<span class="title">用户ID:</span>
				<span class="title">用户名:</span>
				<span class="title">用户邮箱:</span>
				<span class="title">积分:</span>
				<span class="title">网站币:</span>
				<span class="title">注册时间:</span>
				<span class="title">注册ip:</span>
			</div>
			<div class="personal-right">
				<span class="title"><?php echo $Uid?></span>
				<span class="title"><?php echo $username?></span>
				<span class="title"><?php echo $useremail ?></span>
				<span class="title"><?php echo $integral ?></span>
				<span class="title"><?php echo $coin ?></span>
				<span class="title"><?php echo $time ?></span>
				<span class="title"><?php echo $ip ?></span>
			</div>
		</div>
		<div id="personal-wrap">
			<h5>用户下载历史</h5>
			<div class="personal-left">
				<span class="title">用户ID:</span>
				<span class="title">用户名:</span>
				<span class="title">用户邮箱:</span>
				<span class="title">积分:</span>
				<span class="title">网站币:</span>
				<span class="title">注册时间:</span>
				<span class="title">注册ip:</span>
			</div>
			<div class="personal-right">
				<span class="title"><?php echo $Uid?></span>
				<span class="title"><?php echo $username?></span>
				<span class="title"><?php echo $useremail ?></span>
				<span class="title"><?php echo $integral ?></span>
				<span class="title"><?php echo $coin ?></span>
				<span class="title"><?php echo $time ?></span>
				<span class="title"><?php echo $ip ?></span>
			</div>
		</div>
		<div id="personal-wrap">
			<h5>用户上传历史</h5>
			<div class="personal-left">
				<span class="title">用户ID:</span>
				<span class="title">用户名:</span>
				<span class="title">用户邮箱:</span>
				<span class="title">积分:</span>
				<span class="title">网站币:</span>
				<span class="title">注册时间:</span>
				<span class="title">注册ip:</span>
			</div>
			<div class="personal-right">
				<span class="title"><?php echo $Uid?></span>
				<span class="title"><?php echo $username?></span>
				<span class="title"><?php echo $useremail ?></span>
				<span class="title"><?php echo $integral ?></span>
				<span class="title"><?php echo $coin ?></span>
				<span class="title"><?php echo $time ?></span>
				<span class="title"><?php echo $ip ?></span>
			</div>
		</div>
		

	</div>
</body>
</html>













