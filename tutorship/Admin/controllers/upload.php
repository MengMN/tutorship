<?php 

	// 判断是否登录
	define("ROOT", $_SERVER['DOCUMENT_ROOT']);
	session_start();


	if (!isset($_SESSION['username'])) {
		echo "你还没有登录！没有此功能！";
		echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"1; URL=http://www.tutorship.com/Admin/views/upload.php\">";
		die();
	}




	// 判断验证码是否正确

	$verify = strtolower(addslashes(trim($_POST['verify'])));
	$verify_s = strtolower(addslashes(trim($_SESSION['code'])));


	if (!($verify === $verify_s) ) {
		header("refresh:1; http://www.tutorship.com/Admin/views/upload.php");
		exit();
	}
	//登录后，进行数据库插入

	$dataCid = addslashes(trim($_POST['dataCategory']));
	$dataDescript = addslashes(trim($_POST['dataDescript']));
	$coin = addslashes(trim($_POST['coin']));

	$username =  addslashes(trim($_SESSION['username']));
	$dataName = addslashes(trim($_SESSION['data_name']));
	$dataAnother = addslashes(trim($_SESSION['data_another']));
	$dataSize = addslashes(trim($_SESSION['data_size']));
	$dataType = addslashes(trim($_SESSION['data_type']));
	// $time = addslashes(trim($_SESSION['data_update']));
	$data_address = addslashes(trim($_SESSION['data_address']));
	// 连接数据库查询
	include_once ROOT.'/Admin/models/uploadModel.class.php';

	$upload = new uploadModel($username,$dataCid,$dataName,$dataAnother,$dataSize,$dataDescript,$dataType,$coin,$data_address);

	$result = $upload->upload();

	
	if (is_bool($result) && $result == true ) {
		echo "上传文件成功!";
		echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"3; URL=http://www.tutorship.com/Admin/views/upload.php\">";
		die();
	}else{
		echo "上传文件失败！";
		echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"3; URL=http://www.tutorship.com/Admin/views/upload.php\">";
		die();
	}








