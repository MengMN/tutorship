<?php
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

// Define a destination
$targetFolder = '/Admin/uploads'; // Relative to the root


if (!empty($_FILES)) {
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
	
	$fileTypes = array('jpg','jpeg','gif','png','doc','rar','pdf','zip','txt'); // File extensions
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	$type1 = $fileParts['extension'];

	$type2 = array("byte", "KB", "MB", "GB");//定义单位数组 
	$size = $_FILES['Filedata']['size'];//原始值，单位为byte
	$i=0;//选用第几个单位
	while($size >= 1024)//当当前值大于等于1024时，即转换到下一位，如此循环。当然也可设置为1000，或者更低
	{
	    $size = $size/1024;//当前值除以1024
	    $i++;//所选取的单位增加一个
	} 
	$newsize = $size.$type2[$i];//最终结果为最终值加上单位



	$anotherName = date("Ymd His").mt_rand().".".$type1;
	$targetFile = rtrim($targetPath,'/') . '/' . $anotherName;
	
	// Validate the file type

	if (in_array($fileParts['extension'],$fileTypes)) {
		move_uploaded_file($tempFile,iconv("UTF-8","gb2312",$targetFile));
		session_start();
		// 文件原名
		$_SESSION['data_name'] = $_FILES['Filedata']['name'];
		// 文件另外一个名称
		$_SESSION['data_another'] = $anotherName;
		// 文件大小
		$_SESSION['data_size'] = $newsize;
		// 文件类型
		$_SESSION['data_type'] = $type1;
		// 文件存放的地址
		$_SESSION['data_address'] =	$targetFile;	
		echo '文件成功上传';
	} else {
		echo 'Invalid file type.';
		return false;
	}
}
?>