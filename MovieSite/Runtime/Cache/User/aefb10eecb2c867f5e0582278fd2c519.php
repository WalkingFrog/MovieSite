<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>登录 - 铁头宿舍</title>
	<style type="text/css">
		*{
			padding: 0;
			margin: 0;
		}
	</style>
	<link rel="shortcut icon" href="/TTT/Public/Theme/Common/images/logo.png">
	<link rel="stylesheet" type="text/css" href="/TTT/Public/Theme/Common/css/common.css">
	<link rel="stylesheet" type="text/css" href="/TTT/Public/Theme/Common/css/log.css">

	<script src="/TTT/Plugin/jquery.min.js"></script>
	<script type="text/javascript">
		ROOT 	= "/TTT";
		INDEX 	= "/TTT/index.php";
	</script>
	<script src="/TTT/Public/Theme/Common/js/common.js"></script>
</head>
<body>
<div class="header">
	<div class="header-main">
		<ul class="nav">
			<li><a href="javascript:;" class="title">铁头影城</a></li>
			<li>
				<a href="javascript:;" onmouseover="tbPanelShow();" onmouseout="tbPanelHide();">淘宝店</a>
				<div class="hover-content tb"><i></i>
					<img class="logo" src="/TTT/Public/Theme/Common/images/logo.png" alt="">
					<h1>铁头宿舍</h1>
					<p>嫩头青的夜场影院</p>
					<img class="ewm" src="/TTT/Public/Theme/Common/images/qr.png" alt="">
					<p class="is">- 淘宝店铺 -</p>
				</div>
			</li>
			<li>
				<a href="javascript:;" onmouseover="zfbPanelShow();" onmouseout="zfbPanelHide();">赞助我们</a>
				<div class="hover-content zfb"><i></i>
					<img class="logo" src="/TTT/Public/Theme/Common/images/logo.png" alt="">
					<h1>铁头宿舍</h1>
					<p>嫩头青的夜场影院</p>
					<img class="ewm" src="/TTT/Public/Theme/Common/images/qr.png" alt="">
					<p class="is">- 支付宝 -</p>
				</div>
			</li>
		</ul>
	</div>
</div>
<div class="container">
	<ul class="rotate">
		<li class="rotate-item"></li>
	</ul>
	<div class="log-panel">
		<div class="form">
			<div class="form-option">
				<a href="javascript:;" onclick="logOptShow(this);">登录</a>
				<a href="javascript:;" onclick="regOptShow(this);" class="unchoosen">注册</a>
			</div>
			<div class="form-login" style="display: block;">
				<div class="row">
					<label for="user">邮箱</label>
					<input type="text" id="user" placeholder="邮箱">
				</div>
				<div class="row">
					<label for="password">登录密码</label>
					<input type="password" id="password" placeholder="登录密码">
				</div>
				<div class="row short">
					<a href="javascript:;" class="btn-forget">忘记密码</a>
					<em class="tip"></em>
				</div>
				<input type="button" id="login" onclick="ajaxLogin();" value="登录">
			</div>
			<div class="form-reg" style="display: none;">
				<div class="row">
					<label for="mail">邮箱</label>
					<input type="text" id="mail" placeholder="邮箱">
				</div>
				<div class="row">
					<label for="vertify">验证码</label>
					<input type="text" id="vertify" placeholder="验证码">
					<input type="button" id="get_vertify" onclick="ajaxGetVertify();" value="发送验证码">
				</div>
				<div class="row">
					<label for="password">登录密码</label>
					<input type="password" id="pwd" placeholder="登录密码(6-20位)">
				</div>
				<div class="row short">
					<em class="tip"></em>
				</div>
				<input type="button" id="reg" onclick="ajaxReg();" value="注册">
			</div>
			
		</div>
	</div>
</div>

<div class="footer">
	<a href="javascript:;">合作伙伴</a>
	<a href="javascript:;">友情链接</a>
	<a href="javascript:;">淘宝</a>
	<a href="javascript:;">关于我们</a>
	<div class="copyright">
		<a href="javascript:;">Copyright © 2017-2018</a>
		<a href="javascript:;">铁头影城</a>
	</div>
</div>

</body>
</html>