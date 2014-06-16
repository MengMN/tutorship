<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="/Public/Js/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="/Public/Js/jquery.uploadify.min.js" type="text/javascript"></script>
	<script src="/Public/Js/upload.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="/Public/Css/uploadify.css">
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
			<form enctype="multipart/form-data" method="post">
				<label class="fileup">
						<span>文件上传：</span>
						<span class="pos fileup1">
							<input id="file_upload" name="file_upload" type="file" multiple="true">
						</span>

					</label>
					
					<div id="queue"></div>
						
					<label class="acti">
						<span class="subm">
								<span class="upl-1">
									<a href="javascript:$('#file_upload').uploadify('settings', 'formData', {'typeCode':document.getElementById('id_file').value});$('#file_upload').uploadify('upload','*')">上传</a>
								</span>
								<span class="upl-2">
									<a href="javascript:$('#file_upload').uploadify('cancel','*')">重置上传队列</a>
								</span>
							<input type="hidden" value="1215154" name="tmpdir" id="id_file">
						</span>
					</label>
			</form>
			<form action="/Admin/controllers/upload.php" enctype="multipart/form-data" method="post">
				<!-- <label class="fileup">
					<span>文件名字：</span>
					<span class="pos fileup1">
						<input type="text" name="dataTitle">
					</span>
				</label> -->
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
								<li onclick="select(0);">一级</li>
								<li onclick="select(1);">二级</li>
								<li onclick="select(2);">三级</li>
								<li onclick="select(3);">四级</li>
							</ul>
						</div>
						<div class="child">
							<ul>
								<li onclick="choose(11);">计算机基础及WPS Office应用</li>
								<li onclick="choose(12);">计算机基础及MS Office应用</li>
								<li onclick="choose(13);">计算机基础及Photoshop应用</li>
							</ul>
						</div>
						<div class="child">
							<ul>
								<li onclick="choose(21);">C语言程序设计</li>
								<li onclick="choose(22);">VB语言程序设计</li>
								<li onclick="choose(23);">VFP数据库程序设计</li>
								<li onclick="choose(24);">Java语言程序设计</li>
								<li onclick="choose(25);">VFP数据库程序设计</li>
								<li onclick="choose(26);">Access数据库程序设计</li>
								<li onclick="choose(27);">C++语言程序设计</li>
								<li onclick="choose(28);">MySQL数据库程序设计</li>
								<li onclick="choose(29);">Web程序设计</li>
								<li onclick="choose(20);">MS Office高级应用</li>
							</ul>
						</div>
						<div class="child">
							<ul>
								<li onclick="choose(31);">网络技术</li>
								<li onclick="choose(32);">数据库技术</li>
								<li onclick="choose(33);">软件测试技术</li>
								<li onclick="choose(34);">信息安全技术</li>
								<li onclick="choose(35);">嵌入式系统开发技术</li>
							</ul>
						</div>
						<div class="child">
							<ul>
								<li onclick="choose(41);">网络工程师</li>
								<li onclick="choose(42);">数据库工程师</li>
								<li onclick="choose(43);">软件测试工程师</li>
								<li onclick="choose(44);">信息安全工程师</li>
								<li onclick="choose(45);">嵌入式系统开发工程师</li>
							</ul>
						</div>
					</span>
				</label>
				<label class="fileup">
					<span>资料类别：</span>
					<span class="pos fileup1">
						<input type="text" name="dataCategory" id="category">
					</span>
				</label>

				<label class="describe">
					<div>资料说明:</div>
					<span class="pos txt">
						<textarea name="dataDescript" id="" cols="30" rows="10"></textarea>
						<span class="tip">还可以输入300字</span>
					</span>
				</label>
				<label>
					<span>设置币值:</span>
					<span class="pos">
						<input type="radio" name="coin" checked="checked">0个
						<input type="radio" name="coin" >1个
						<input type="radio" name="coin" >2个
						<input type="radio" name="coin" >5个
					</span>
				</label>
				
				<label class="up-verify">
					<span>验证码：</span>
					<span class="pos">
						<input type="text" name="verify" id="verify" placeholder="验证码">
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
			<div class="note">
				<span>注意：</span>
				<ul>
					<li>上传大小不得超过50M。</li>
					<li>支持格式：TXT, DOC, RAR, PPT, PDF, ZIP, JPG等。</li>
					<li><span style="color:red;">禁止上传任何政治敏感、色情以及侵犯他人版权的音视频等资料。</span></li>
			  		<li>上传资料表示您完全接受等级考试辅导系统的<a href="" target="_blank" style="text-decoration:underline;">原则条款</a>。</li>
			  		
				</ul>	
			</div>

		</div>
	</div>


	<script type="text/javascript">
		
		<?php $timestamp = time();?>
		var img_id_upload=new Array();//初始化数组，存储已经上传的图片名
		var i=0;//初始化数组下标
		$(function() {
		    $('#file_upload').uploadify({
		  		
		    	'auto'     : false,//关闭自动上传
		    	'removeTimeout' : 1,//文件队列上传完成1秒后删除
		        'swf'      : '/Public/Css/uploadify.swf',
		        'uploader' : '/Admin/controllers/uploadify.php',
		        'method'   : 'post',//方法，服务端可以用$_POST数组获取数据
				'buttonText' : '选择文件',//设置按钮文本
		        'multi'    : false,//允许同时上传多张图片
		        'uploadLimit' : 10,//一次最多只允许上传10张图片
		        //'fileTypeDesc' : 'Image Files',//只允许上传图像
		        'fileTypeExts' : '*.txt; *.gif; *.jpg; *.png; *.doc; *.rar; *.pdf; *.mp3',//限制允许上传的图片后缀
		        'fileSizeLimit' : '50MB',//限制上传的图片不得超过200KB 
		        'onUploadSuccess' : function(file, data, response) {//每次成功上传后执行的回调函数，从服务端返回数据到前端
		               img_id_upload[i]=data;
		               i++;
					   alert(data);
		        },
		        'onQueueComplete' : function(queueData) {//上传队列全部完成后执行的回调函数
		           // if(img_id_upload.length>0)
		           // alert('成功上传的文件有：'+encodeURIComponent(img_id_upload));
		        }  
		    });
		});
	</script>

	<?php include_once ROOT.'/Admin/views/footer.htm'; ?>
</body>
</html>