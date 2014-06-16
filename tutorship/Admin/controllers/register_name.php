<?php
session_start();
 foreach ($_GET as $key => $value) {
 	$choice = $key;
 }

 if ($choice ==='verify') {
 	$verify = strtolower(addslashes(trim($_GET['verify'])));
	$verify_s =  addslashes(trim($_SESSION['code']));
	if ($verify != $verify_s ) {
		echo "<span class='check_name'>";
	 	echo "验证码输入错误";
	 	echo "</span>";
	 	die();	
	} else {
		echo "<span class='success'>";
	 	echo "验证码输入正确";
	 	echo "</span>";
	 	die();
	}
 }
switch ($choice) {
	case 'username':
		$Name = addslashes(trim($_GET['username'])); 
		$option = 'user_name';
		break;
	case 'email':
		$Name = addslashes(trim($_GET['email']));
		$option = 'user_email';
		break;	
	default:
		return $Name;
		break;
}


	// 数据库连接文件	
	define("ROOT", $_SERVER["DOCUMENT_ROOT"]);	
	include_once ROOT.'/Include/common.php';
	include_once ROOT.'/Include/pdo.class.php';
  	// 检测用户名

	$sql="SELECT user_name FROM member WHERE ".$option." = '".$Name."'";

    $conn = new Database();
    $conn->prepare($sql);


    $conn->execute();

    $count = $conn->rowCount();

	 if ($count > 0) {
	 	echo "<span class='check_name'>";
	 	echo "已被他人注册，请重新填写";
	 	echo "</span>";	
	 }else{
	 	echo "<span class='success'>";
	 	echo "可用";
	 	echo "</span>";

	 }





