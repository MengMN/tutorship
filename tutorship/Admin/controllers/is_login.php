<?php 
	session_start();

	include_once ROOT.'/Admin/models/checkModel.class.php';
	
	$login = new checkModel();

	$username = addslashes(trim($_SESSION['username']));
	
	$result = $login->is_login($username);

	if (is_bool($result) && $result === 0) {
		echo "你登录了！";
	}else{
		echo "你还没有登录！";
	}












