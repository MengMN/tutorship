<?php 
	session_start();
	if (empty($_SESSION['username'])) {
		header("refresh:3;url=http://www.tutorship.com/Home/views/login.php");
		die();
	}	














