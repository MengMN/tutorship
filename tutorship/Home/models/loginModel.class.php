<?php

	class loginModel{
		private $username = null;
		private $useremail = null;
		private $password;



		function __construct($username,$password){
			// 判断用户输入的是用户名还是邮箱
			if ((strpos($username, '@')) === false ) {
				$this->username = $username;
			}else{
				$this->useremail = $username;
			}
			$this->password = $password;
		}
		// 登录
		public function login(){
			// 连接数据库，检查用户名或密码是否正确
			include_once ROOT.'/Include/common.php';
			include_once ROOT.'/Include/pdo.class.php';
			$database = new Database();
			if (is_null($this->username) && !(is_null($this->useremail))) {
				$sql = "select count(*) from member where user_email = '".$this->useremail."' and user_pass ='".$this->password."'";
			}else{
				$sql = "select count(*) from member where user_name = '".$this->username."' and user_pass ='".$this->password."'";
			}
			// 检查用户名/邮箱重复
			$login = $database->query($sql);
			$count = $login->fetchColumn();
			
			// 查询的结果行数大于0，这就说明数据正确
			if ($count > 0) {
				return true;
			}
			return false;
		}

		// 连接数据库检查用户名与密码是否对应
		function database_check(){
			include_once ROOT.'/Include/common.php';
			include_once ROOT.'/Include/pdo.class.php';
			$database = new Database();
			// 检查用户名是否重复
			$sql = "select Uid from member where user_name = :username and user_pass = :password";
			$database->prepare($sql);
			$database->bind(':username',$this->username);
			$database->bind(':password',$this->password);
			$database->execute();
			if ( ($count = $database->rowCount()) < 0 ) {
				return false;
			}
			$data = $database->resultset();

			foreach ($data as $key => $value) {
				$Uid= $value['Uid'];	
			}
			$sql2 = "select count(*) from member_group where Uid =".$Uid." and Gid = 2 ";
			$login = $database->query($sql2);
			$count = $login->fetchColumn();
		
			if ($count > 0) {
				return true;
			}
			return false;
			
		}











		
	}










