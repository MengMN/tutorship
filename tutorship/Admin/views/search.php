<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/Public/Css/css.css">
	<link rel="stylesheet" href="/Public/Css/data.css">
	<title> <?php //$name ?> </title>
</head>
<body>
	<?php

		define("ROOT", $_SERVER["DOCUMENT_ROOT"]);
		$Did = null;
		include_once ROOT.'/Include/common.php';
		include_once ROOT.'/Admin/views/header.htm';
		include_once ROOT.'/Admin/controllers/search.php';
		
		
		include_once ROOT.'/Include/page.class.php';
		$current_page=isset($_GET['page'])?intval($_GET['page']):1;//获取用户GET提交的page，如果没有就默  
		
		$dataName = $_GET['dataName'];
		$t = new Page($num, $row, $current_page, 5,$dataName);  		
		
		

	?>
	<div class="g-wrap">
		<div id="content">
					
			
			<?php 
			foreach ($data as $key => $v) {
				
				if ($key < $num) {

					echo "<div class=\"sr\">";	
					echo "	<label class=\"lb1\">";	
					echo "		<span class=\"pic\"></span>";	
					echo "		<span class=\"dataTitle\"><a href=\"/Admin/views/download.php?Did=".$v['Did']."\">".$v['data_name']."</a></span>";	
					echo "	<span class=\"dataInfo\">";	
					echo "		<span class=\"times\">下载次数：".$v['data_times']." 次</span>";	
					echo "		<span class=\"coins\">所需币值：".$v['data_coin']." 币值</span>";	
					echo "		<span class=\"dataTime\">上传时间：".date('Y年m月d日', strtotime($v['data_update']))."</span>";	
					echo "	</span>";	
					echo "</div>";
				}
				
			}	
			 ?>
			<div id="page">
				
			<?php 

			
			 echo $t->subPageCss2();  

			 ?>
				
			</div>
			
		</div>
	</div>

	<?php include_once ROOT.'/Admin/views/footer.htm';	 ?>
</body>
</html>