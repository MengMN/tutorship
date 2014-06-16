<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/Public/Css/css.css">
	<link rel="stylesheet" href="/Public/Css/upload.css">
	<title>上传资料</title>
</head>
<body>
	<?php 
  		define("ROOT", $_SERVER["DOCUMENT_ROOT"]);
		include_once ROOT.'/Admin/views/header.htm';
	 ?>

	<div id="uploadify">
		<div id="m-wrap">
			<form action="/Admin/controllers/upload.php" enctype="multipart/form-data" method="post">
				<label class="fileup">
					<span>文件上传：</span>
					<span class="pos">
						<input type="file" name="file" id="file" >
					</span>
					
				</label>
				<label class="describe">
					<div>资料说明:</div>
					<span class="pos txt">
						<textarea name="" id="" cols="30" rows="10"></textarea>
						<span class="tip">还可以输入300字</span>
					</span>
				</label>
				<label class="category">
					<span>资料分类:</span>
					<span class="pos">
						<div class="all">
							<ul>
								<li>计算机等级考试</li>
							</ul>
						</div>
						<div class="second">
							<ul>
								<li>一级</li>
								<li>二级</li>
								<li>三级</li>
								<li>四级</li>
							</ul>
						</div>
						<div class="child">
							<ul>
								<li>计算机基础及WPS Office应用</li>
								<li>计算机基础及MS Office应用</li>
								<li>计算机基础及Photoshop应用</li>
							</ul>
						</div>
					</span>
				</label>
				<label class="up-verify">
					<span>文件上传：</span>
					<span class="pos">
						<input type="text" name="verify1" id="verify" placeholder="验证码">
					</span>
					<span class="verify_img">
						<img src="./Action/code.php" onclick="javascript:this.src='./Action/code.php?tm='+Math.random();" />
					</span>
				</label>
				<label>
					<span>设置权限:</span>
					<span class="pos">
						<input type="checkbox" name="" id="">公开
						<input type="checkbox" name="" id="">私有
					</span>
				</label>
				<label>
					<span>设置币值:</span>
					<span class="pos">
						<input type="checkbox" name="" id="">1个
						<input type="checkbox" name="" id="">2个
						<input type="checkbox" name="" id="">5个
					</span>
				</label>
				<label class="acti">
					<span class="subm">
						<input type="submit" value="提交">
					</span>
				</label>
			</form>
			<div class="note">
				<span>注意：</span>
				<ul>
					<li>上传大小不得超过50M</li>
					<li>支持格式：TXT, DOC,XLS, RAR, PPT, PDF, ZIP, JPG等.</li>
					<li><span style="color:red;">禁止上传任何政治敏感、色情以及侵犯他人版权的音视频等资料.</span></li>
			  		<li>上传资料表示您完全接受等级考试辅导系统的<a href="" target="_blank" style="text-decoration:underline;">原则条款</a>.</li>
			  		<li><a style="text-decoration:underline;" href="/help/rhsczl.html" target="_blank">如何上传资料?</a></li>
				</ul>	
			</div>
		</div>
	</div>
		<form action="/Admin/controllers/upload.php" enctype="multipart/form-data" method="post">
				<label class="category">
					<span>资料分类:</span>
					<span class="pos">
						<div class="all">
							<ul>
								<li>计算机等级考试</li>
							</ul>
						</div>
						<div class="second">
							<ul>
								<li>一级</li>
								<li>二级</li>
								<li>三级</li>
								<li>四级</li>
							</ul>
						</div>
						<div class="child">
							<ul>
								<li><?php $Cid = 1; ?>计算机基础及WPS Office应用</li>
								<li>计算机基础及MS Office应用</li>
								<li>计算机基础及Photoshop应用</li>
							</ul>
						</div>
					</span>
				</label>

				<label class="describe">
					<div>资料说明:</div>
					<span class="pos txt">
						<textarea name="" id="" cols="30" rows="10"></textarea>
						<span class="tip">还可以输入300字</span>
					</span>
				</label>
				<label>
					<span>设置币值:</span>
					<span class="pos">
						<input type="checkbox" name="" id="">1个
						<input type="checkbox" name="" id="">2个
						<input type="checkbox" name="" id="">5个
					</span>
				</label>
				
				<label class="up-verify">
					<span>验证码：</span>
					<span class="pos">
						<input type="text" name="verify1" id="verify" placeholder="验证码">
					</span>
					<span class="verify_img">
						<img src="/Admin/controllers/code.php" onclick="javascript:this.src='/Admin/controllers/code.php?tm='+Math.random();" />
					</span>
				</label>
				<label class="acti">
					<span class="subm">
						<input type="submit" value="提交">
					</span>
				</label>
				
				
			</form>
	<?php include_once ROOT.'/Admin/views/footer.htm'; ?>
</body>
</html>