<?php 

	class updateModel{

		private $Did;
		private $times;



		public function __construct($Did,$times)
		{
			$this->Did = $Did;
			$this->times = $times;
			
		}


		function update(){
			include_once ROOT.'/Include/pdo.class.php';
			$database = new Database();
			$sql = "update datas set data_time = :times where Did = :Did"
			$database->prepare($sql);
			$database->bind('times',$this->times);
			$database->bind(':Did',$this->Did);
			$database2->execute();
			$row = $database->rowCount();
			// echo $row;
			// die();

			if ($row < 0) {
				return false;
			}
			return true;
		}


	}










