<?php 

	class searchModel{

		private $row;//查询得到的行数
		private $dataName;


		function __construct($name){
			$this->dataName = $name;
		}


		function getRow(){
			return $this->row;
		}

		function query($name,$page,$num){
			$data = $this->database_query($name,$page,$num);

			return $data;
		}

		private function database_query($name,$page,$num){
			$nums = $page*$num;
			include_once ROOT.'/Include/common.php';
			include_once ROOT.'/Include/pdo.class.php';
			$database = new Database();
			$sql1 = "select * from datas where data_name like '%".$name."%'";
			$database->prepare($sql1);
			$result1 = $database->resultset();
			$this->row = $database->rowCount();
			
			$sql2 = "select * from datas where data_name like '%".$name."%' order by Did desc limit ".$nums.",".$num."  ";
			$database->prepare($sql2);
			$result = $database->resultset();	
			return $result;
			
			
		}

 // 查询也可以这么写
		// private function database_query($name){
		// 	include_once ROOT.'/Include/common.php';
		// 	include_once ROOT.'/Include/pdo.class.php';
		// 	$database = new Database();
		// 	$sql = "select * from datas where data_name like '%".$name."%'";
		// 	$res = $database->query($sql);
		// 	$result = $res->fetchAll();	

		// 		echo "<pre/>";
		// 		var_dump($result);
		// 	// return $result;
		// }

		function query2($Did){
			$data = $this->database_query2($Did);
			return $data;
		}
		
		private function database_query2($Did){
			include_once ROOT.'/Include/common.php';
			include_once ROOT.'/Include/pdo.class.php';
			$database3 = new Database();
			$sql = "select * from datas where Did = :Did";
			$database3->prepare($sql);
			$database3->bind(':Did',$Did);
			$result = $database3->resultset();											
			return $result;
		}








	}







