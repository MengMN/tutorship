<!DOCTYPE html>
<meta charset="UTF-8">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="/Public/Css/css.css" />
	<link rel="stylesheet" href="/Public/Css/computer.css" />
	<script type="text/javascript" src="/Public/Js/main.js"></script>
	<script type="text/javascript" src="/Public/Js/jquery-1.11.0.min.js"></script>
	<script>
		function choice() {
			var c = document.getElementsByClassName("opt");
			c[0].style.display = "block";
		}
	</script>	
	<title>head</title>
</head>
<?php 
define("ROOT", $_SERVER["DOCUMENT_ROOT"]);
		include_once ROOT.'/Include/common.php';
		include_once ROOT.'/Admin/views/header.htm';



		include_once ROOT.'/Include/pdo.class.php';
		$database = new Database();
		$sql = "select * from datas  order by data_times desc";
		$database->prepare($sql);
		$result = $database->resultset();


	?>
<div class="g-wrap">
	<div id="content">		
		<div class="sideBar">
			<div class="Title-item">
					计算机等级考试
			</div>							
			<div class="level1 layout">					
				<div class="level-title" onclick="level_show()">
					一级
				</div>
				<div class="level1-content ct">
					<div id="item" class="rt11">
						<a href="">计算机基础及WPS Office应用</a>
					</div>
					<div id="item" class="rt12">
						<a href="">计算机基础及MS Office应用</a>
					</div>
					<div id="item" class="rt13">
						<a href="">计算机基础及Photoshop应用</a>
					</div>						
				</div>					
			</div>
			<div class="level2 layout">
				<div class="level-title" onclick="level_show(this)">
					二级
				</div>
				<div class="level2-content ct">
					<div id="item" class="rt21">
						<a href="">C语言程序设计    </a>
					</div>
					<div id="item" class="rt22">
						<a href="">VB语言程序设计   </a>
					</div>
					<div id="item" class="rt23">
						<a href="">VFP数据库程序设计</a>
					</div>						
					<div id="item" class="rt24">
						<a href="">Java语言程序设计</a>
					</div>						
					<div id="item" class="rt25">
						<a href="">VFP数据库程序设计</a>
					</div>						
					<div id="item" class="rt26">
						<a href="">Access数据库程序设计</a>
					</div>						
					<div id="item" class="rt27">
						<a href="">C++语言程序设计</a>
					</div>						
					<div id="item" class="rt28">
						<a href="">MySQL数据库程序设计</a>
					</div>						
					<div id="item" class="rt29">
						<a href="">Web程序设计</a>
					</div>						
					<div id="item" class="rt20">
						<a href="">MS Office高级应用</a>
					</div>						
				</div>
			</div>
			<div class="level3 layout">
				<div class="level-title" onclick="level_show(this)">
					三级
				</div>
				<div class="level3-content ct">
					<div id="item" class="rt31">
						<a href="">网络技术</a>
					</div>
					<div id="item" class="rt32">
						<a href="">数据库技术</a>
					</div>
					<div id="item" class="rt33">
						<a href="">软件测试技术</a>
					</div>						
					<div id="item" class="rt34">
						<a href="">信息安全技术</a>
					</div>						
					<div id="item" class="rt35">
						<a href="">嵌入式系统开发技术</a>
					</div>						
				</div>
			</div>
			<div class="level4 layout">
				<div class="level-title" onclick="level_show(this)">
					四级
				</div>
				<div class="level4-content ct">
					<div id="item" class="rt41">
						<a href="">网络工程师</a>
					</div>
					<div id="item" class="rt42">
						<a href="">数据库工程师</a>
					</div>
					<div id="item" class="rt43">
						<a href="">软件测试工程师</a>
					</div>						
					<div id="item" class="rt44">
						<a href="">信息安全工程师</a>
					</div>						
					<div id="item" class="rt45">
						<a href="">嵌入式系统开发工程师</a>
					</div>						
				</div>
			</div>
		</div>
		<div class="cont">
			<ul>
				<li class="Item1">
					<span class="it1" onclick="choice()">名称/格式</span>
					<ul class="opt">
							<li>txt</li>
							<li>doc</li>
							<li>ppt</li>
							<li>pdf</li>
							<li>rar</li>
							<li>exe</li>
							<li>pic</li>
							<li>swf</li>
							<li>pic</li>
							<li>其他</li>
						</ul>
					<span class="it2">积分要求</span>
					<span class="it3">下载次数</span>
					<span class="it4">资料大小</span>
					<span class="it5">上传时间</span>
				</li>
				
				<?php 
					foreach ($result as $v) {
						$did = $v['Did'];
						$name = $v['data_name'];
						$times =$v['data_times'];
						$coin =$v['data_coin'];
						$time = $v['data_update'];
						$size = $v['data_size'];
echo <<<EQT
				<li class="Item2">
					<span class="it1"><a href="/Admin/views/download.php?Did=$did">$name</a></span>
					<span class="it2">$coin</span>
					<span class="it3">$times</span>
					<span class="it4">25M</span>
					<span class="it5">2014-5-30</span>
				</li>
EQT;
}
				 ?>
			
			</ul>
		</div>
		<div class="page">
			总共1/100页 上一页 1 2 3 4   下一页 尾页
		</div>
	</div>
</div>
<?php include_once ROOT.'/Admin/views/footer.htm'; ?>