<?php 


	include 'database.class.php';

	// 定义数据库配置，用户名，数据库密码，数据库名称
	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "root");
	define("DB_NAME", "Level_Examination");

	// 实例化对象,,l
	$database = new Database();

	$database->query('INSERT INTO mytable (FName, LName, Age, Gender) VALUES (:fname, :lname, :age, :gender)');

	$database->bind(':fname', 'John');
	$database->bind(':lname', 'Smith');
	$database->bind(':age', '24');
	$database->bind(':gender', 'male');

	$database->execute();

	echo $database->lastInsertId();






























