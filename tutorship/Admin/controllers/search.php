<?php 
	// define('ROOT', $_SERVER['DOCUMENT_ROOT']);
	$num = 5;

		if (isset($_GET['page'])) {
			$p = addslashes(trim($_GET['page']));
			// include_once ROOT.'/Admin/controllers/search.php';
			switch ($p) {
				case '0':
					$page = 0;
					break;
				case '1':
					$page = 0;
					break;
				default:
					$page = $p-1;
					break;
			}
			// $page = $p+1;
			$name = addslashes(trim($_GET['dataName']));

			if (!(isset($_GET['dataName']))) {
				echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"3; URL=http://www.tutorship.com/Admin/views/index.php\">";
			}
			include ROOT.'/Admin/models/searchModel.class.php';
			


			$search = new searchModel($name);

			$data = $search->query($name,$page,$num);

			$row = $search->getRow();

			
			
		}elseif (!(isset($_GET['page'])) && isset($_GET['dataName'])) {
			$name = addslashes(trim($_GET['dataName']));
			if (!(isset($_GET['dataName']))) {
				echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT=\"3; URL=http://www.tutorship.com/Admin/views/index.php\">";
			}
			include ROOT.'/Admin/models/searchModel.class.php';
			
			$search = new searchModel($name);

			$data = $search->query($name,0,$num);

			$row = $search->getRow();
		
		
		} 
