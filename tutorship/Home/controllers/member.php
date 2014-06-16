<?php 

	// define("ROOT", $_SERVER['DOCUMENT_ROOT']);
	
	// include_once ROOT.'/Home/controllers/is_login.php';
	include_once ROOT.'/Home/models/memberModel.class.php';
	

	


	// 判断到底是哪个表传来的数据
	
	if (isset($_POST['name']) && !(empty($_POST['name']))) {
		//表示是会员个人详细信息查询
		$name = addslashes(trim($_POST['name']));
		$member = new memberModel($name);

		$result = $member->M_member();

		$Uid = $result['Uid'];
		$username = $result['user_name'];
		$useremail = $result['user_email'];
		$ip = $result['reg_ip'];
		$integral = $result['user_integral'];
		$coin = $result['user_coin'];
		$time = $result['reg_time'];
	}

	if (isset($_POST['upname']) && !(empty($_POST['upname'])) ) {
		// 表示是会员上传资料的信息查询
		$upname = addslashes(trim($_POST['upname']));
		$member = new memberModel($upname);
		
		$result = $member->M_upload();

		foreach ($result as $v) {
			$data[] = $v[0];
		}

		foreach ($data as $vs) {
			$datas[] = $vs;
		}
		echo "<pre/>";
		var_dump($datas);


	}









	



?>










