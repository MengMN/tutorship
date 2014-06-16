<?php 
	// 判断一个用户是否登录了
	define("ROOT", $_SERVER['DOCUMENT_ROOT']);
	session_start();





	//验证码	
	$verify = strtolower(addslashes(trim($_POST['verify']))) ;
	$verify_s = addslashes(trim($_SESSION['code']));
	if ($verify != $verify_s ) {
		header("Location: http://www.tutorship.com/Admin/views/login.htm");
		exit();
	} 

	
	// 登录功能
	$username = addslashes(trim($_POST['Lusername']));
	$password = md5(addslashes(trim($_POST['Lpassword'])));
	$password = substr($password, 0, 20);

	//引入数据库连接文件


	include_once ROOT.'/Admin/models/loginModel.class.php';

	// 查找用户名与密码是否对应
	$loginModel = new loginModel($username,$password);
	$log = $loginModel->login();
	if ($log === false) {
		header("refresh:3;url=http://www.tutorship.com/Admin/views/login.htm");
		echo "<h3>";
		echo "用户名或密码错误，请重新登录！";
		echo "</h3>";
		// header("Location: http://www.tutorship.com/Admin/views/login.htm");
		die();
	}



	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;


	header("refresh:1;url=http://www.tutorship.com/Admin/views/index.php");





