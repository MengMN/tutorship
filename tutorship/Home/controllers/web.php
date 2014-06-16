<?php 
	// 首先后台都是要先判断是否登录了

	// 知道用户点击的是哪一个，如何触发另一个	
	$option = $_GET['num'];
	echo "<iframe id=\"ct\" src=\"/Home/views/".$option.".php\">";
	echo "</iframe>";

