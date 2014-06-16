<?php 

	class userModel{

		private $username;
		// public $userData;


		function __construct($username){
			
			$flag = $this->is_login($username);

			if ($flag === 0) {
				$msg = "请先登录！";
				return $msg;
			}
			$this->username = $username;


		}


		// 判断用户是否已经登录了
		private function is_login($username){
			if (empty($username)) {
				return flase;
			}
			return true;
		}

		// 查询用户的基本信息
		function person_query(){
			$data = $this->database_query($this->username);
			if (!is_array($data)) {
				return false;
			}
		

			foreach ($data as $value) {

				$userData = $value;

			}
			$userData['reg_ip'] = long2ip($userData['reg_ip']);
			
			return $userData;
		}
		// 连接数据库查询用户信息
		private function database_query($username){

			include_once ROOT.'/Include/pdo.class.php';
			$database = new Database();
			// 检查用户名是否重复
			$sql = "select * from member where user_name = '".$username."'";
			$res = $database->query($sql);
			$count = $res->fetchColumn();
			// 查询的结果小于0，这就说明没有此用户名
			if ($count < 0) {
				return false;
			}
			// $param = 'PDO::FETCH_ASSOC';
			$database->prepare($sql);
			$result = $database->resultset();

			return $result;
		}
	

		// 退出
		public function layOut(){
			// 连接session类，注销掉session
			// 销毁session
			

			$_SESSION = array();
			// 删除客户端的在COOKIE中的sessionid
			if (isset($_COOKIE[session_name()])) {
				setcookie(session_name(), '', time()-3600);
			}
			// 彻底销毁session
			session_destroy();


		}


























	}



















