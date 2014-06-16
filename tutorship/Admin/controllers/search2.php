<?php 
	// define('ROOT', $_SERVER['DOCUMENT_ROOT']);
	
	if (!(isset($_GET['Did'])) || empty($_GET['Did'])) {
		header("Location: http://www.tutorship.com/Admin/views/index.php");
	}

	$Did= addslashes(trim($_GET['Did']));

	include ROOT.'/Admin/models/searchModel.class.php';
	
	$search = new searchModel($Did);

	$data = $search->query2($Did);

	foreach ($data as $v) {
		$shuju = $v;
	}

	$Did = $shuju['Did'];
	$size=$shuju['data_size'];
	$descrip=$shuju['data_descrip'];
	$type=$shuju['data_type'];
	$update=$shuju['data_update'];
	$another_name=$shuju['data_another'];
	$name=$shuju['data_name'].$type;
	$coin=$shuju['data_coin'];
	$times=$shuju['data_times'];
	$address=$shuju['data_address'];


	// $file_address = $address."/".$another_name;











