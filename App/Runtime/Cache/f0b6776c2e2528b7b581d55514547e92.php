<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<title><?php echo L('LOGIN_TITLE');?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content=""/>
	<meta name="author" content="<?php echo L('AUTHOR');?>"/>
	<link type="text/css" href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" />
	<link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css" rel="stylesheet" />
	<link type="text/css" href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" />
	<link href="__PUBLIC__/css/docs.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/>
    <script type="text/javascript">
        var browserInfo = {browser:"", version: ""};
        var ua = navigator.userAgent.toLowerCase();
        if (window.ActiveXObject) {
            browserInfo.browser = "IE";
            browserInfo.version = ua.match(/msie ([\d.]+)/)[1];
            if(browserInfo.version <= 7){
                if(confirm("您的ie浏览器版本过低，建议使用chorme浏览器，\n点击【确定】转到下载页面")){}
                location.href = 'http://www.google.cn/intl/zh-CN/chrome/browser/';
            }
        }
    </script>
	<script src="__PUBLIC__/js/jquery-1.9.0.min.js" type="text/javascript"></script>
	<script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script>
	<script src="__PUBLIC__/js/WdatePicker.js" type="text/javascript"></script>
	<script src="__PUBLIC__/js/5kcrm.js" type="text/javascript"></script>
	<!--[if lte IE 6]>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/bootstrap-ie6.css">
	<![endif]-->
	<!--[if lte IE 7]>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/ie.css">
	<![endif]-->
	<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font-awesome-ie7.min.css" />
	<![endif]-->
	<!--[if lt IE 9]>
	<link type="text/css" href="__PUBLIC__/css/jquery.ui.1.10.0.ie.css" rel="stylesheet"/>
	<![endif]-->	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="__PUBLIC__/js/respond.min.js"></script>
	<![endif]-->
</head>
<style type="text/css">
body {
	padding-top: 60px;
	padding-bottom: 40px;
	background-color: #f5f5f5;
}
.form-signin {
	max-width: 400px;
	padding: 19px 29px 29px;
	margin: 0 auto 20px;
	background-color: #fff;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
	margin-bottom: 10px;
}
.form-signin input[type="text"],
.form-signin input[type="password"] {
	font-size: 16px;
	height: auto;
	margin-bottom: 15px;
	padding: 7px 9px;
}
.wukong {
	margin-top:30px;
	padding-top:10px;
	border-top:1px solid #e5e5e5;		
}
.logo{
	width:50px;
	height:50px;
}
</style>
<body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true">
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div>
			<a class="brand" href="<?php echo (__APP__); ?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a>
		</div> 
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="span8">
			<h4><img src="__PUBLIC__/img/index_notice.png" style="width:17.5px;"/> <?php echo L('SYSTEM_ANNOUNCEMENT');?></h4>
			<div class="hero-unit">
			<?php if(is_array($announcement_list)): $k = 0; $__LIST__ = $announcement_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><p><?php echo ($k); ?>、<a onclick="javascript:show(<?php echo ($vo['announcement_id']); ?>);" style="font-size: 14px;color:#<?php echo ($vo["color"]); ?>"><?php echo ($vo["title"]); ?></a> <?php if((time()-$vo['update_time']) < 86400*7): ?>&nbsp; <img src="./Public/img/new.gif"><?php endif; ?> &nbsp; (<?php echo L('UPDATE_DATE');?>：<?php echo (date("Y-m-d H:i",$vo["update_time"])); ?>)
				</p>
				<div id="content<?php echo ($vo['announcement_id']); ?>" class="hide"><?php echo ($vo["content"]); ?></div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="span4">
		  <div style="border-left:1px solid #eee;"><form action="" method="post" class="form-signin">
			<fieldset>
			<legend><h3><?php echo L('USER_LOGIN');?><small> - <?php echo C('defaultinfo.name');?></small></h3></legend>					
			<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
			<?php echo L('USER_NAME');?>：<input type="text" name="name" class="text-input" placeholder="<?php echo L('USER_NAME');?>"/><br/>
			<?php echo L('LOGIN_PASSWORD');?>：<input type="password" name="password" class="text-input" placeholder="<?php echo L('PASSWORD');?>"/>
			<br/>
			<label class="checkbox"><input type="checkbox" name="autologin"/> <?php echo L('AUTO_LOGIN_IN_THREE_DAYS');?></label>
			<input name="submit" class="btn btn-primary" type="submit" value="<?php echo L('LOGIN');?>"/> &nbsp; <a href="<?php echo U('user/lostpw');?>"><?php echo L('FORGET_PASSWORD');?></a>
			</fieldset>
			<div class="row-fluid wukong">
				<div class="span3"><img src="<?php if(C("defaultinfo.logo")): echo C('defaultinfo.logo'); else: ?>__PUBLIC__/img/logo_img.png<?php endif; ?>" class="logo" alt="<?php echo C('defaultinfo.name');?>"/></div>
				<div class="span9">
					<p><?php echo L('RIGHTS');?></p>
					<p><small>
						<a href="http://www.5kcrm.com/index.php?m=Doc" target="_blank"><?php echo L('USING_HELP');?></a>
						<span class="muted">&middot;</span>
						<a href="http://www.5kcrm.com/" target="_blank"><?php echo L('TECHNICAL_SUPPORT');?></a>
						<span class="muted">&middot;</span>
						<a href="http://www.5kcrm.com/" target="_blank"><?php echo L('CONTACT_US');?></a>
					</small></p>
				</div>
			</div>
		  </form></div>
		</div>
	</div>
</div>
<div id="dialog-message" class="hide" title="<?php echo L('ANNOUNCEMENT');?>">loading...</div>
<script type="text/javascript">
$('#dialog-message').dialog({
	autoOpen: false,
	modal: true,
	width: 600,
	maxHeight: 400,
	position :["center",100]
});
function show(id) {
	$('#dialog-message').dialog('open');
	content = $("#content" + id).html();
	$('#dialog-message').html(content);
}
</script>
</body>
</html>