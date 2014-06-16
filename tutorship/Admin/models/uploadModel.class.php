<?php 
	class uploadModel{
		private $username;
		private $Cid;
		private $data_name;
		private $data_another;
		private $data_size;
		private $data_descrip;
		private $data_type;
		// private $data_update;
		private $data_coin;
		private $data_verify;
		private $data_address;

		function __construct($username,$dataCid,$dataName,$dataAnother,$dataSize,$dataDescript,$dataType,$coin,$data_address){
			$this->username  = $username;
			$this->Cid  = $dataCid;
			$this->data_name  = $dataName;
			$this->data_another  = $dataAnother;
			$this->data_size  = $dataSize;
			$this->data_descrip  = $dataDescript;
			$this->data_type  = $dataType;
			// $this->data_update  = $time;
			$this->data_coin  = $coin;
			$this->data_address  = $data_address;
		}

		function upload(){
			$id = $this->data_insert();
			
			if (is_numeric($id)) {
				$flag = $this->data_cat_insert($id);
				
				if ( is_bool($flag) && $flag == '0' ) {
					return false;
				}
				$Uid = $this->member_query();
				
				$flag2 = $this->member_data_insert($Uid,$id);
				if ( !is_bool($flag2) && !$flag2 == '0' ) {
					return false;
				}
				return true;
			}
			return false;
		}

		// 资料上传数据库返回资料的ID号
		private function data_insert(){
			include_once ROOT.'/Include/common.php';
			include_once ROOT.'/Include/pdo.class.php';
			$database = new Database();
			$sql = "INSERT INTO datas(data_name,data_another,data_size,data_descrip,data_type,data_update,data_coin,data_address)
		VALUES(:data_name,:data_another,:data_size,:data_descrip,:data_type,now(),:data_coin,:data_address)";
			$database->prepare($sql);
			$database->bind(':data_name',$this->data_name);
			$database->bind(':data_another',$this->data_another);
			$database->bind(':data_size',$this->data_size);
			$database->bind(':data_descrip',$this->data_descrip);
			$database->bind(':data_type',$this->data_type);
			// $database->bind(':data_update',now());
			$database->bind(':data_coin',$this->data_coin);
			$database->bind(':data_address',$this->data_address);
			$database->execute();
			if ( ($count = $database->rowCount()) < 0 ) {
				return false;
			}

			$id = $database->lastInsertId();
			return $id;
		}
		// 根据用户ID和分类的ID，将信息存入数据类别关联表 
		private function data_cat_insert($id){
			include_once ROOT.'/Include/common.php';
			include_once ROOT.'/Include/pdo.class.php';
			$database2 = new Database();
			$sql = "INSERT INTO datas_cat(Did,Cid)
		VALUES(:Did,:Cid)";
			$database2->prepare($sql);
			$database2->bind(':Did',$id);
			$database2->bind(':Cid',$this->Cid);
			$database2->execute();
			$count2 = $database2->rowCount();
			
			if ( $count2 < 0 ) {
				return false;
			}
			return true;
		}

		// 根据用户名得到用户的ID
		private function member_query(){
			include_once ROOT.'/Include/common.php';
			include_once ROOT.'/Include/pdo.class.php';
			$database4 = new Database();
			$sql = "select Uid from member where user_name = '".$this->username."'";
			$res = $database4->query($sql);
			$Uid = $res->fetchColumn();

			return $Uid;
		}
		// 根据用户ID和资料的ID，将信息存入用户数据关联表
		private function member_data_insert($Uid,$id){
			include_once ROOT.'/Include/common.php';
			include_once ROOT.'/Include/pdo.class.php';
			$database3 = new Database();
			$sql = "INSERT INTO member_data(Uid,Did,link) VALUES(:Uid,:Did,'1')";
			$database3->prepare($sql);
			$database3->bind(':Uid',$Uid);
			$database3->bind(':Did',$id);
			$database3->execute();
			$count3 = $database3->rowCount();

			if ($count3 < 0 ) {
				return false;
			}
			return true;
		}




















	}







