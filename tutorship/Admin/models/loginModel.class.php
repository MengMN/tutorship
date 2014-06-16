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
		private function database_check(){
			include_once ROOT.'/Include/common.php';
			include_once ROOT.'/Include/pdo.class.php';
			$database = new Database();
			// 检查用户名是否重复
			$sql = "select count(*) from member where user_name = '".$this->username."' and user_pass =".$this->password."'";
			$res = $database->query($sql);
			$count = $res->fetchColumn();
			// 查询的结果小于0，这就说明没有此用户名
			if ($count < 0) {
				return false;
			}
			return true;
		}












		
	}










