<!DOCTYPE html>
<meta charset="UTF-8">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="/Public/Css/css.css" />
	<script type="text/javascript" src="/Public/Js/common.js"></script>
	<script type="text/javascript" src="/Public/Js/jquery-1.11.0.min.js"></script>	
	<title>head</title>
</head>
	<?php 
		define("ROOT", $_SERVER["DOCUMENT_ROOT"]);

		include_once ROOT.'/Include/common.php';

		include_once ROOT.'/Include/pdo.class.php';
		$database = new Database();
		$sql = "select * from datas  order by data_times desc limit 0,10";
		$database->prepare($sql);
		$result = $database->resultset();
		include_once ROOT.'/Admin/views/header.htm';
	
		




	?>
	<div class="g-wrap">
		<div id="content">
			<div class="newPost">
				<div class="new title">
					最新上传资料
					<span class="more">上传时间</span>
				</div>
				<div class="new-content">
					<ul>
					<?php 
					foreach ($result as $v) {
						$did = $v['Did'];
						$name = $v['data_name'];
						$times =$v['data_times'];
						$time = $v['data_update'];
echo <<<EQT
<li class="new-ct">
	<span class="np1">
		<a href="/Admin/views/download.php?Did=$did"  target="_blank" title="$name">$name</a>
	</span>
	<span class="np2">25M</span>
	<span class="np3">2014-5-30</span>
</li>
EQT;

					


}

					 ?>
						
						<!-- <li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288920.html" title="艺术概论 (王宏建) 课后答案 文化艺术出版社">艺术概论 (王宏建) 课后答案 文化艺术出版社</a></span>
							<span class="np2">q@q_1927578(洛阳师范学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288809.html" title="Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社">Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社</a></span>
							<span class="np2">s@s_1926576(无锡职业技术学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1">
								<a href="" target="_blank" title="财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社">财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社</a>
							</span>
							<span class="np2">q@q_1930223(西北民族大学)</span>
							<span class="np3">2013-08-25</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288920.html" title="艺术概论 (王宏建) 课后答案 文化艺术出版社">艺术概论 (王宏建) 课后答案 文化艺术出版社</a></span>
							<span class="np2">q@q_1927578(洛阳师范学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288809.html" title="Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社">Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社</a></span>
							<span class="np2">s@s_1926576(无锡职业技术学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1">
								<a href="" target="_blank" title="财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社">财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社</a>
							</span>
							<span class="np2">q@q_1930223(西北民族大学)</span>
							<span class="np3">2013-08-25</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288920.html" title="艺术概论 (王宏建) 课后答案 文化艺术出版社">艺术概论 (王宏建) 课后答案 文化艺术出版社</a></span>
							<span class="np2">q@q_1927578(洛阳师范学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288809.html" title="Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社">Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社</a></span>
							<span class="np2">s@s_1926576(无锡职业技术学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288809.html" title="Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社">Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社</a></span>
							<span class="np2">s@s_1926576(无锡职业技术学院)</span>
							<span class="np3">2013-08-22</span>
						</li> -->
					</ul>				
				</div>
			</div>
			<div class="newReply">
				<div class="new title">
					最新热门资料
					<span class="more"><a href="">更多</a></span>
				</div>
				<div class="new-content">
					<ul>
						<li class="new-ct">
							<span class="np1">
								<a href="" target="_blank" title="财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社">财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社</a>
							</span>
							<span class="np2">q@q_1930223(西北民族大学)</span>
							<span class="np3">2013-08-25</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288920.html" title="艺术概论 (王宏建) 课后答案 文化艺术出版社">艺术概论 (王宏建) 课后答案 文化艺术出版社</a></span>
							<span class="np2">q@q_1927578(洛阳师范学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288809.html" title="Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社">Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社</a></span>
							<span class="np2">s@s_1926576(无锡职业技术学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1">
								<a href="" target="_blank" title="财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社">财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社</a>
							</span>
							<span class="np2">q@q_1930223(西北民族大学)</span>
							<span class="np3">2013-08-25</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288920.html" title="艺术概论 (王宏建) 课后答案 文化艺术出版社">艺术概论 (王宏建) 课后答案 文化艺术出版社</a></span>
							<span class="np2">q@q_1927578(洛阳师范学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288809.html" title="Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社">Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社</a></span>
							<span class="np2">s@s_1926576(无锡职业技术学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1">
								<a href="" target="_blank" title="财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社">财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社</a>
							</span>
							<span class="np2">q@q_1930223(西北民族大学)</span>
							<span class="np3">2013-08-25</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288920.html" title="艺术概论 (王宏建) 课后答案 文化艺术出版社">艺术概论 (王宏建) 课后答案 文化艺术出版社</a></span>
							<span class="np2">q@q_1927578(洛阳师范学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288809.html" title="Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社">Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社</a></span>
							<span class="np2">s@s_1926576(无锡职业技术学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288809.html" title="Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社">Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社</a></span>
							<span class="np2">s@s_1926576(无锡职业技术学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
					</ul>				
				</div>
			</div>
			<div class="hot">
				<div class="new title">
					热点
					<span class="more"><a href="">更多</a></span>
				</div>
				<div class="new-content">
					<ul>
						<li class="new-ct">
							<span class="np1">
								<a href="" target="_blank" title="财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社">财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社</a>
							</span>
							<span class="np2">q@q_1930223(西北民族大学)</span>
							<span class="np3">2013-08-25</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288920.html" title="艺术概论 (王宏建) 课后答案 文化艺术出版社">艺术概论 (王宏建) 课后答案 文化艺术出版社</a></span>
							<span class="np2">q@q_1927578(洛阳师范学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288809.html" title="Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社">Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社</a></span>
							<span class="np2">s@s_1926576(无锡职业技术学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1">
								<a href="" target="_blank" title="财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社">财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社</a>
							</span>
							<span class="np2">q@q_1930223(西北民族大学)</span>
							<span class="np3">2013-08-25</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288920.html" title="艺术概论 (王宏建) 课后答案 文化艺术出版社">艺术概论 (王宏建) 课后答案 文化艺术出版社</a></span>
							<span class="np2">q@q_1927578(洛阳师范学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288809.html" title="Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社">Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社</a></span>
							<span class="np2">s@s_1926576(无锡职业技术学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1">
								<a href="" target="_blank" title="财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社">财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社</a>
							</span>
							<span class="np2">q@q_1930223(西北民族大学)</span>
							<span class="np3">2013-08-25</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288920.html" title="艺术概论 (王宏建) 课后答案 文化艺术出版社">艺术概论 (王宏建) 课后答案 文化艺术出版社</a></span>
							<span class="np2">q@q_1927578(洛阳师范学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288809.html" title="Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社">Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社</a></span>
							<span class="np2">s@s_1926576(无锡职业技术学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288809.html" title="Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社">Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社</a></span>
							<span class="np2">s@s_1926576(无锡职业技术学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
					</ul>				
				</div>
			</div>
			<div class="newPublic">
				<div class="new title">
					最新公告
					<span class="more"><a href="">更多</a></span>
				</div>
				<div class="new-content">
					<ul>
						<li class="new-ct">
							<span class="np1">
								<a href="" target="_blank" title="财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社">财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社</a>
							</span>
							<span class="np2">q@q_1930223(西北民族大学)</span>
							<span class="np3">2013-08-25</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288920.html" title="艺术概论 (王宏建) 课后答案 文化艺术出版社">艺术概论 (王宏建) 课后答案 文化艺术出版社</a></span>
							<span class="np2">q@q_1927578(洛阳师范学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288809.html" title="Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社">Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社</a></span>
							<span class="np2">s@s_1926576(无锡职业技术学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1">
								<a href="" target="_blank" title="财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社">财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社</a>
							</span>
							<span class="np2">q@q_1930223(西北民族大学)</span>
							<span class="np3">2013-08-25</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288920.html" title="艺术概论 (王宏建) 课后答案 文化艺术出版社">艺术概论 (王宏建) 课后答案 文化艺术出版社</a></span>
							<span class="np2">q@q_1927578(洛阳师范学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288809.html" title="Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社">Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社</a></span>
							<span class="np2">s@s_1926576(无锡职业技术学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1">
								<a href="" target="_blank" title="财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社">财经法规与会计职业道德 (刘玉梅) 课后答案 东北财经大学出版社</a>
							</span>
							<span class="np2">q@q_1930223(西北民族大学)</span>
							<span class="np3">2013-08-25</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288920.html" title="艺术概论 (王宏建) 课后答案 文化艺术出版社">艺术概论 (王宏建) 课后答案 文化艺术出版社</a></span>
							<span class="np2">q@q_1927578(洛阳师范学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288809.html" title="Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社">Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社</a></span>
							<span class="np2">s@s_1926576(无锡职业技术学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
						<li class="new-ct">
							<span class="np1"><a target="_blank" href="http://www.daanwang.com/khda/t288809.html" title="Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社">Java程序设计及实训 (黄能耿) 课后答案 机械工业出版社</a></span>
							<span class="np2">s@s_1926576(无锡职业技术学院)</span>
							<span class="np3">2013-08-22</span>
						</li>
					</ul>				
				</div>
			</div>
		</div>		
	</div>

<?php include_once ROOT.'/Admin/views/footer.htm'; ?>





	




	



	



	




	



	



	



	







