<?php 
	
	

	// include_once '../../Include/common.php';
	// include_once ROOT.'/Admin/models/userModel.class.php';
	// 退出
	session_start();
	$username = addslashes(trim($_SESSION['username']));
	define("ROOT", $_SERVER["DOCUMENT_ROOT"]);
	include_once ROOT.'/Admin/models/userModel.class.php';
	$user = new userModel($username);
	$user->layOut();





	
	header("Location:http://www.tutorship.com/Admin/views/index.php");