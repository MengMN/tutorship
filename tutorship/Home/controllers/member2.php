<?php 
	define("ROOT", $_SERVER['DOCUMENT_ROOT']);
	
	include_once ROOT.'/Home/models/MdataModel.class.php';

	// 判断到底是哪个表传来的数据
	$option = addslashes(trim($_POST['option']));
	$Uid = addslashes(trim($_POST['Uid']));
	$username = addslashes(trim($_POST['username']));
	$useremail = addslashes(trim($_POST['useremail']));
	$integra = addslashes(trim($_POST['integra']));
	$coin = addslashes(trim($_POST['coin']));


	if ($option === 'update') {
		$user = new MdataModel($Uid,$username,$useremail,$integra,$coin);

		$result = $user->update();

		if ( is_bool($result) && $result == '1') {
			echo "修改成功！";
		}else{
			echo "修改失败！";
		}
	} else if ($option ==='delete') {
		$user = new MdataModel($Uid,$username,$useremail,$integra,$coin);

		$result = $user->delete();

		if ( is_bool($result) && $result == '1') {
			echo "删除成功！";
		}else{
			echo "删除失败！";
		}
	}
	
	

		

