<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>悟空CRM安装向导</title>
        <link rel="stylesheet" href="__PUBLIC__/Install/css/install.css" />
		<style>
			.server td{border:none;line-height: 30px;}
			.server fieldset table{margin:10px;auto;}
			.tdleft{text-align:right;}
			.tdright{text-align:left;}
			#wait{  color: #F03939;font-size: 16px; font-weight: 600;}
		</style>
    </head>
    <body>
        <div class="wrap">
            <div class="header">
				<h1 class="logo">悟空软件</h1>
				<span class="anzhuang">|&nbsp;&nbsp;安装向导</span>
				<div class="version">悟空CRM 简体中文 【<?php echo C("VERSION");?>】 <?php echo C("RELEASE");?></div>
			</div>
			<div style="min-height: 280px;">
			<h1 style="  text-align: center;font-size: 36px;color: #1B5590; line-height: 127px;">恭喜您, 安装成功！</h1>
			<p style="text-align:center">即将为您跳转至登录界面 <span id="wait">3</span> 秒</p>
			</div>
			<div style="clear:both;"></div>
        </div>    
        </div>
        <div class="footer"><a href="http://www.5kcrm.com" target="_blank">© 2012 - 2016 悟空CRM & 卡卡罗特软件科技有限公司 豫ICP备13004021号</a>  </div>
    </body>
	<script type="text/javascript">
	window.onload = function(){
		var wait = document.getElementById('wait'),href = "./index.php";
		var interval = setInterval(function(){
			var time = --wait.innerHTML;
			if(time == 0) {
				location.href = href;
				clearInterval(interval);
			};
		}, 1000);
	}
	</script>
</html>