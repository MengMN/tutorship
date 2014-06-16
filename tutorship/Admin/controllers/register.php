<?php 
	define("ROOT", $_SERVER['DOCUMENT_ROOT']);
	session_start();
	//验证码	
	$verify = addslashes(trim($_POST['verify']));
	$verify_s = addslashes(trim($_SESSION['code']));
	if ($verify != $verify_s ) {
		header("Location: http://www.tutorship.com/Admin/views/register.htm");
		exit();
	} 

	// 引入配置文件
	include ROOT.'/Include/common.php';

	//用户名
	$username = addslashes(trim($_POST['username']));
	//邮箱
	$email = addslashes(trim($_POST['email']));
	//密码
	$password = addslashes(trim($_POST['password']));
	$repass = trim($_POST['repass']);

	if (!($password === $repass)) {
		header("Location: http://www.tutorship.com/Admin/views/register.htm");
		exit();
	}
	//判断邮箱是否认证
	
	//积分默认为0
		
	//网站币默认为20
	
	//注册时间--mysql默认为now()

	//注册ip
	$ip = ip2long($_SERVER['SERVER_ADDR']);
	
/*----------------------检查数据-------------------------------------------*/
	include ROOT.'/Admin/models/registerModel.class.php';

	$registerModel = new registerModel($username,$email,$password,$repass,$ip);
	$reg = $registerModel->check();
	
	// 注册信息失败
	if ( is_string($reg)) {
		echo $reg;
		header("refresh:3;url=http://www.tutorship.com/Admin/views/register.htm");
		echo '正在加载，请稍等...<br>三秒后自动跳转到注册界面';
		die();
	}

	
	// 验证注册信息正确后，插入数据库
	$id = $registerModel->database_insert();
	if (!is_numeric($id)) {
		echo "注册失败，请重新注册";
		header("refresh:3;url=http://www.tutorship.com/Admin/views/register.htm");
		echo '正在加载，请稍等...<br>三秒后自动跳转到注册界面';
		die();
	}

	// 自动跳转到登录界面
	header("refresh:2;url=http://www.tutorship.com/Admin/views/login.htm");
	echo "注册成功，自动跳转到登录界面";






























