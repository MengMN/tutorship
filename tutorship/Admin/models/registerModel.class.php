<?php 
	// 这个类的主要作用是用来实体化注册对象的
	
	class registerModel{
		
		// 这个实体类的数据--从表单那里得到的数据
		private $username;
		private $password;
		private $useremail;
		private $repass;
		private $ip;


		/**
		 * 构造函数
		 * @param  [type] $user_name  用户名
		 * @param  [type] $user_email 用户邮箱
		 * @param  [type] $user_pass  用户密码
		 * @param  [type] $user_repass  重复密码
		 * @return [type]             [description]
		 */
		function  __construct($user_name,$user_email,$user_pass,$user_repass,$ip){
			$this->username = $user_name;
			$this->password = $user_pass;
			$this->useremail = $user_email;
			$this->repass = $user_repass;
			$this->ip = $ip;
		}

		// 简单检查用户名，密码，邮箱
		// 利用私有函数连接数据库再次检查用户名，邮箱
		function check(){
			// 用户名由不大于20位字母、数字组成
			if (!preg_match('/^[_0-9a-z]{6,16}$/i', $this->username)) {
				return $this->error('1');
			}
			// 密码由6-20位字母、数字、下划线组成
			if (!preg_match('/^[_0-9a-z]{6,16}$/i', $this->password)) {
				return $this->error('2');
			}
			// 密码和重复密码要一致
			if ($this->password != $this->repass) {
				return $this->error('3');
			}
			// 邮箱是否包含@
			$pos = strpos($this->useremail,'@');

			if ($pos === false) {
				return $this->error('4');
			}
			
			if (($check = $this->database_check()) != 1) {
				return $check;
			}
			
			return true;
		}

		/*
		 * 错误信息返回
		 * @param  numbel $num 错误信息指定
		 * @return 布尔型     ture
		 */
		private function error($num){
			if(!is_numeric($num)){
				echo "错误级别不是用数字表示的！";
				return $num;
			}
			$error = '';
			switch ($num) {
				case '1':
					$error = "错误级别为".$num.":用户名由6-20位字母、数字和下划线组成";
					break;
				case '2':
					$error = "错误级别为".$num.":密码由6-20位字母、数字和下划线组成";
					break;
				case '3':
					$error = "错误级别为".$num.":密码和重复密码不一致";
					break;
				case '4':
					$error = "错误级别为".$num.":邮箱格式不正确";
					break;
				case '5':
					$error = "错误级别为".$num.":用户名已经被注册";
					break;
				case '6':
					$error = "错误级别为".$num.":此邮箱已经被注册";
					break;
				case '7':
					$error = "错误级别为".$num.":插入信息不成功";
					break;
				
				default:
					$error = true;
					break;
			}
			return $error;
		}

		// 连接数据库检查注册信息
		private function database_check(){
			include_once ROOT.'/Include/common.php';
			include_once ROOT.'/Include/pdo.class.php';
			$database = new Database();
			// 检查用户名是否重复
			$sql = "select COUNT(*) from member where user_name = '".$this->username."'";
			$res = $database->prepare($sql);
			$count = $database->rowCount();
			// 查询的结果行数大于0，这就说明用户名已被注册
			if ($count > 0) {
				return $this->error('5');
			}

			// 检查邮箱是否重复
			$sql = "select COUNT(*) from member where user_email = '".$this->useremail."'";
			$res = $database->query($sql);
			$count = $res->fetchColumn();
			// 查询的结果行数大于0，这就说明邮箱已被注册
			if ($count > 0) {
				return $this->error('6');
			}

			return true;
		}

		// 连接数据库插入注册信息，并返回注册的ID
		function database_insert(){

			$password = md5($this->password);
			include_once ROOT.'/Include/pdo.class.php';
			$database2 = new Database();
			$sql = "INSERT INTO Member(user_name,user_pass,user_email,user_integral,user_coin,reg_time,reg_ip)
		VALUES(:username,:password,:email,0,20,now(),:ip)";
			$database2->prepare($sql);
			$database2->bind(':username',$this->username);
			$database2->bind(':password',$password);
			$database2->bind(':email',$this->useremail);
			$database2->bind(':ip',$this->ip);
			$database2->execute();
			if ( ($count = $database2->rowCount()) < 0 ) {
				return $this->error('7');
			}

			$id = $database2->lastInsertId();
			return $id;
		}



















	}











