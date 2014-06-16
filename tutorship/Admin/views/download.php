<!DOCTYPE html>
<meta charset="UTF-8">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="/Public/Css/css.css" />
	<link rel="stylesheet" href="/Public/Css/download.css" />
	<script type="text/javascript" src="/Public/Js/download.js"></script>
	<title>内容页面</title>
</head>
<?php 
	define("ROOT", $_SERVER["DOCUMENT_ROOT"]);
	include_once ROOT.'/Include/common.php';
	include_once ROOT.'/Admin/views/header.htm';
	include_once ROOT.'/Admin/controllers/search2.php';	
	// echo $file_address	;
	// include_once ROOT.'/Admin/controllers/download.php';		
?>
<div class="g-wrap">
	<div id="content">
		<div id="ct-left">
			<div class="ct-title">
				<?php echo $name; ?>
			</div>
			<div class="ct-content">
				<div class="summary">
					<!-- <img src="/Public/Image/icon_txt.gif" alt=""> -->
					<span>资料摘要：</span>
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $descrip;  ?>
				</div>
				<div class="information ">
					<ul>
						<!-- <li class="stars">资料星级: ★☆☆☆☆</li> -->
						<li>资料格式: <?php echo $type ?> </li>
						<li>下载次数: <?php echo $times ?> </li>
						<!-- <li>上 传 者: </li> -->
						<li>上传时间: <?php echo $update ?> </li>
						<li>资料大小: <?php echo $size ?> </li>
						<li>所需积分: <?php echo $coin ?> </li>
					</ul>
					<?php
				    	$file = realpath('../uploads/'.$another_name);
				    	$filename = base64_encode(strrev(base64_encode($file)));
					?>

				<a href="/Admin/controllers/download.php?Did=$Did&time=$times&coin=$data_coin&file=<?php echo $filename; ?>">
					<span>
					</span>
				</a>
						
					</a> 
					
				</div>				
			</div>

			<!-- <div class="appraisal">
				<ul>
					<li>
						<img src="/Public/Image/gx_jh1.gif" alt="">
					</li>
					<li>相关评论39条</li>
					<li class="gf">
						<img src="/Public/Image/gx_fbpl.gif" alt="">
					</li>
					<li class="post">发表评论</li>
				</ul>
				<div class="discuzz">
					<span>发表评论:</span>
					<span class="tip">为维护健康文明的社区氛围,请不要发表具有谩骂,诽谤,广告,宣传等内容的评论。</span>
					<span class="text">
						<textarea name="" id="" cols="30" rows="10" placeholder="输入评论"></textarea>
					</span>
					<span>请输入验证码:</span>
					<span>
						<input type="text">
					</span>
					<span>
						验证码图片
					</span>
					<span>看不清，换一张</span>
					<br/>
					<span class="action">
						<input type="submit" value="提交">
						<span onclick="div_close()">取消</span>
					</span>
				</div>
				<div class="publish">
					<ul>
						<li>
							<span class="tp1">评论者：85ming</span>
							<span class="tp2">太可恶了，只有一半，而且我看过前半部分了，白花了1积分。。。
							</span>
							<span class="tp3">2013-06-27 </span>
						</li>
						<li>
							<span class="tp1">评论者：85ming</span>
							<span class="tp2">太可恶了，只有一半，而且我看过前半部分了，白花了1积分。。。
							</span>
							<span class="tp3">2013-06-27 </span>
						</li>
						<li>
							<span class="tp1">评论者：85ming</span>
							<span class="tp2">太可恶了，只有一半，而且我看过前半部分了，白花了1积分。。。
							</span>
							<span class="tp3">2013-06-27 </span>
						</li>
						<li>
							<span class="tp1">评论者：85ming</span>
							<span class="tp2">太可恶了，只有一半，而且我看过前半部分了，白花了1积分。。。
							</span>
							<span class="tp3">2013-06-27 </span>
						</li>
						<li>
							<span class="tp1">评论者：85ming</span>
							<span class="tp2">太可恶了，只有一半，而且我看过前半部分了，白花了1积分。。。
							</span>
							<span class="tp3">2013-06-27 </span>
						</li>
						<li>
							<span class="tp1">评论者：85ming</span>
							<span class="tp2">太可恶了，只有一半，而且我看过前半部分了，白花了1积分。。。
							</span>
							<span class="tp3">2013-06-27 </span>
						</li>
						<li>
							<span class="tp1">评论者：85ming</span>
							<span class="tp2">太可恶了，只有一半，而且我看过前半部分了，白花了1积分。。。
							</span>
							<span class="tp3">2013-06-27 </span>
						</li>
						<li>
							<span class="tp1">评论者：85ming</span>
							<span class="tp2">太可恶了，只有一半，而且我看过前半部分了，白花了1积分。。。
							</span>
							<span class="tp3">2013-06-27 </span>
						</li>
						<li>
							<span class="tp1">评论者：85ming</span>
							<span class="tp2">太可恶了，只有一半，而且我看过前半部分了，白花了1积分。。。
							</span>
							<span class="tp3">2013-06-27 </span>
						</li>
						<li>
							<span class="tp1">评论者：85ming</span>
							<span class="tp2">太可恶了，只有一半，而且我看过前半部分了，白花了1积分。。。
							</span>
							<span class="tp3">2013-06-27 </span>
						</li>
						<li>
							<span class="tp1">评论者：85ming</span>
							<span class="tp2">太可恶了，只有一半，而且我看过前半部分了，白花了1积分。。。
							</span>
							<span class="tp3">2013-06-27 </span>
						</li>
						<li>
							<span class="tp1">评论者：85ming</span>
							<span class="tp2">太可恶了，只有一半，而且我看过前半部分了，白花了1积分。。。
							</span>
							<span class="tp3">2013-06-27 </span>
						</li>
						<li>
							<span class="tp1">评论者：85ming</span>
							<span class="tp2">太可恶了，只有一半，而且我看过前半部分了，白花了1积分。。。
							</span>
							<span class="tp3">2013-06-27 </span>
						</li>
						<li>
							<span class="tp1">评论者：85ming</span>
							<span class="tp2">太可恶了，只有一半，而且我看过前半部分了，白花了1积分。。。
							</span>
							<span class="tp3">2013-06-27 </span>
						</li>
						<li>
							<span class="tp1">评论者：85ming</span>
							<span class="tp2">太可恶了，只有一半，而且我看过前半部分了，白花了1积分。。。
							</span>
							<span class="tp3">2013-06-27 </span>
						</li>
						<li>
							<div class="page2">
								总共1/100页 上一页 1 2 3 4   下一页 尾页
							</div>
						</li>
					</ul>
					
				</div>
			</div> -->
		</div>
		<div id="ct-right">
			<a href="/Admin/views/upload.php">
				<button id="upload">
					
				</button>
			</a> 							
			<!-- <div class="related">
				<div class="re-title">
					相关资料
				</div>
				<div class="re-ct">
					<ul>
						<li><a href="">11111111111</a></li>
						<li><a href="">11111111111</a></li>
						<li><a href="">11111111111</a></li>
						<li><a href="">11111111111</a></li>
						<li><a href="">11111111111</a></li>
						<li><a href="">11111111111</a></li>
						<li><a href="">11111111111</a></li>
						<li><a href="">11111111111</a></li>
						<li><a href="">11111111111</a></li>
						<li><a href="">11111111111</a></li>
					</ul>
				</div>
			</div> -->
			<div class="related">
					<div class="re-title">
						热门资料
					</div>
					<div class="re-ct">
						<ul>
						<?php 

						include_once ROOT.'/Include/pdo.class.php';
						$database = new Database();
						$sql = "select Did,data_name from datas  order by data_times desc limit 0,10";
						$database->prepare($sql);
						$result = $database->resultset();
					foreach ($result as $v) {
						$Dids = $v['Did'];
						$names = $v['data_name'];
						
echo <<<EQT
							<li><a href="/Admin/views/download.php?Did=$Dids">$names</a></li>

EQT;
}



						 ?>

							
						</ul>
					</div>
				</div>
		</div>
	</div>
</div>


			
<?php include_once ROOT.'/Admin/views/footer.htm'; ?>



