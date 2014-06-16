<?php 
	class memberModel{

		private $user;


		function __construct($name){
			$this->user = $name;
		}

		function M_member(){
			$userData = $this->sql_member();
			return $userData;
		}

		// 连接数据库查询
		private function sql_member(){
			
			$sql = "select * from member where Uid = '".$this->user."'";
			$data = $this->result_member($sql);

			foreach ($data as $key => $value) {
				$userData = $value;
			}
			$userData['reg_ip'] = long2ip($userData['reg_ip']);
			return $userData;
		}

		private function result_member($sql){
			include_once ROOT.'/Include/common.php';
			include_once ROOT.'/Include/pdo.class.php';
			$database = new Database();
			// 检查用户名是否重复
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

		function M_upload(){
			$id = $this->id();
			$data = array();
		
			foreach ($id as $key=> $v) {
			
				$Did = $v['Did'];
				$res = $this->result_upload($Did);

			
				foreach ($res as $va) {
					$data = $va;					
				}
				// $da = array_push($datas, $data);	
				
				$userData[][] = $data;
				
			}
		
			return $userData;
		}


		private function result_upload($Did){
			include_once ROOT.'/Include/common.php';
			include_once ROOT.'/Include/pdo.class.php';
			$sql = "select * from datas  where Did = '".$Did."'";
			$database2 = new Database();
			// 检查用户名是否重复
			$res = $database2->query($sql);
			$count = $res->fetchColumn();
			// 查询的结果小于0，这就说明没有此用户名
			if ($count < 0) {
				return false;
			}
			// $param = 'PDO::FETCH_ASSOC';
			$database2->prepare($sql);
			$result = $database2->resultset();

			return $result;
		}


		private function id(){
			include_once ROOT.'/Include/common.php';
			include_once ROOT.'/Include/pdo.class.php';
			$sql = "select Did from member_data  where Uid = '".$this->user."'and link = 1";
			$database = new Database();
			// 检查用户名是否重复
			$res = $database->query($sql);
			$count = $res->fetchColumn();
			// 查询的结果小于0，这就说明没有此用户名
			if ($count < 0) {
				return false;
			}
			// $param = 'PDO::FETCH_ASSOC';
			$database->prepare($sql);
			$id = $database->resultset();

			return $id;
		}







	}












