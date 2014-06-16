<?php
// 判断用户是否登录
session_start();
// echo $_SESSION['username'];
// var_dump($_SESSION);
// die();

if (!(isset($_SESSION['username']))) {
 	echo "对不起，你没有登录，不能进行下载";
 	die();
 } 

define("ROOT", $_SERVER["DOCUMENT_ROOT"]);

// 判断用户的积分还有多少
include_once ROOT.'/Admin/controllers/personal.php';

if ($data_coin > $coin) {
	echo "对不起，您的网站币值不足！";
 	die();
}

require ROOT.'/Include/utils.php';

if (false === ($file_path = filter_input(INPUT_GET, 'file'))) {
    die('not follow!');
}

require ROOT.'/Admin/models/Downloader.class.php';

$file_path = base64_decode(strrev(base64_decode($file_path)));

isWin($file_path)  and ($file_path = convert2gbk($file_path));

$downloader = new Downloader($file_path);
$downloader->output();


include_once ROOT.'/Admin/models/updateModel.class.php';

$times++;

$update = new updateModel($Did,$times);


$result = $update->update();




