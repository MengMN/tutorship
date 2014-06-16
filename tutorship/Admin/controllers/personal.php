<?php 
	// session_start();
	if (empty($_SESSION['username'])) {
		echo "请先登录，才能够到个人中心";
		die();
	}
	// 用户已经登录了，从数据库里得到数据
	include_once ROOT.'/Include/common.php';
	include_once ROOT.'/Admin/models/userModel.class.php';

	$username = $_SESSION['username'];

	$user = new userModel($username);
	$result = $user->person_query();

	$Uid = $result['Uid'];
	$username = $result['user_name'];
	$useremail = $result['user_email'];
	$ip = $result['reg_ip'];
	$integral = $result['user_integral'];
	$coin = $result['user_coin'];
	$time = $result['reg_time'];


