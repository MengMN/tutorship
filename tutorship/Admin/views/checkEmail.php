<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/Public/Css/css.css">
	<link rel="stylesheet" href="/Public/Css/checkEmail.css">
	<title>邮箱认证页面</title>
</head>
<body>
	<?php
		define("ROOT", $_SERVER["DOCUMENT_ROOT"]) ;
		include ROOT.'/Admin/views/header.htm'; 
	?>
	<div id="checkEmail">
		邮件已发送，请登录邮箱验证
	</div>
</body>
</html>