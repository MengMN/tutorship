<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/Home/public/css/home.css">
	<script type="text/javascript" src="/Home/public/JS/home.js"></script>
	<script type="text/javascript" src="/Home/public/JS/jquery-1.11.0.min.js"></script>
	<title>网站后台</title>
</head>
<body>
	<div id="g-wrap">
		<header>
			<div class="logo">
				<img src="/Home/public/Image/logo.jpg" alt="等级考试网上辅导系统" />
			</div>
			<ul>
				<li class="choose" onclick="select(0);">系统管理</li>
				<li class="choose" onclick="select(1);">用户管理</li>
				<li class="choose" onclick="select(2);">新闻管理</li>
				<li class="choose" onclick="select(3);">资料管理</li>
			</ul>
		</header>
		<nav class="nav system">
			<ul>
				<li onclick="ajax('S_category');">资料分类管理</li>
				<li onclick="ajax('D_search');">前台皮肤管理</li>
			</ul>
		</nav>
		<nav class="nav member">
			<ul>
				<li onclick="ajax('M_member');">会员个人信息</li>
				<li onclick="ajax('M_upload');">会员上传资料记录</li>
				<li onclick="ajax('M_download');">会员下载资料记录</li>
			</ul>
		</nav>
		<nav class="nav news">
			<ul>
				<li onclick="ajax('M_search');">新闻查找</li>
				<li onclick="ajax('M_search');">新闻添加</li>
			</ul>
		</nav>
		<nav class="nav data">
			<ul>
				<li onclick="ajax('M_search');">资料查找</li>
				<li onclick="ajax('M_search');">资料审核</li>
				<li onclick="ajax('M_search');">资料屏蔽</li>
				<li onclick="ajax('M_search');">热门资料</li>
				<li onclick="ajax('M_search');">资料下载记录</li>
			</ul>
		</nav>
		<div id="content">







			
		</div>
	</div>
	
</body>
</html>