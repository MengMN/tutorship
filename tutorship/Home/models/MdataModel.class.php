<?php 
	// 这个类的主要作用是用来实体化注册对象的
	
	class MdataModel{
		
		// 这个实体类的数据--从表单那里得到的数据
		private $Uid;
		private $username;
		private $useremail;
		private $integral;
		private $coin;


		/**
		 * 构造函数
		 * @param  [type] $user_name  用户名
		 * @param  [type] $user_email 用户邮箱
		 * @param  [type] $integra  网站积分
		 * @param  [type] $coin  网站币
		 * @return [type]             [description]
		 */
		function  __construct($Uid,$user_name,$user_email,$integral,$coin){
			$this->Uid = $Uid;
			$this->username = $user_name;
			$this->useremail = $user_email;
			$this->integral = $integral;
			$this->coin = $coin;
		}

		// 更新用户表的数据
		function update(){
			include_once ROOT.'/Include/common.php';
			include_once ROOT.'/Include/pdo.class.php';
			$database2 = new Database();
			$sql = "UPDATE member SET user_name = :username, user_email = :useremail, user_integral = :integral, user_coin = :coin WHERE Uid = :Uid";
			$database2->prepare($sql);
			$database2->bind(':Uid',$this->Uid);
			$database2->bind(':username',$this->username);
			$database2->bind(':useremail',$this->useremail);
			$database2->bind(':integral',$this->integral);
			$database2->bind(':coin',$this->coin);
			$database2->execute();
			if ( ($count = $database2->rowCount()) < 0 ) {
				return false;
			}
			return true;
		

		}
		// 删除用户
		function delete(){
			include_once ROOT.'/Include/common.php';
			include_once ROOT.'/Include/pdo.class.php';
			$database2 = new Database();
			$sql = "DELETE FROM member where Uid = :Uid ";
			$database2->prepare($sql);
			$database2->bind(':Uid',$this->Uid);
			$database2->execute();
			if ( ($count = $database2->rowCount()) < 0 ) {
				return false;
			}
			return true;
		}


		


















	}











