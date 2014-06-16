<?php
	session_start();
	define("ROOT", $_SERVER['DOCUMENT_ROOT']);
	


	//验证码	
	$verify = addslashes(trim($_POST['verify']));
	$verify_s = addslashes(trim($_SESSION['code']));

	if ($verify != $verify_s ) {
		header("Location: http://www.tutorship.com/Home/views/login.php");
		exit();
	} 


	// 登录功能
	$username = addslashes(trim($_POST['admin']));
	$password = addslashes(trim($_POST['pass']));

	//引入数据库连接文件
	
	include_once ROOT.'/Home/models/loginModel.class.php';

	// 查找用户名与密码是否对应
	$loginModel = new loginModel($username,$password);

	$result = $loginModel->database_check();
	// echo $result;
	// die();
	if (is_bool($result) && $result == '1') {
		// 后台登录成功
		header("refresh:1;url=http://www.tutorship.com/Home/views/index.php");
		$_SESSION['username'] = $username;
	}else{
		header("refresh:3;url=http://www.tutorship.com/Home/views/login.php");
	}

