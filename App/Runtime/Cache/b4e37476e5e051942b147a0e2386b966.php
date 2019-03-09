<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<title><?php echo C('defaultinfo.name');?> - Powered By <?php echo L('AUTHOR');?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content=""/>
	<meta name="author" content="<?php echo L('AUTHOR');?>"/>
	<link type="text/css" href="__PUBLIC__/css/bootstrap.min.css?t=20140830" rel="stylesheet" />
	<link type="text/css" href="__PUBLIC__/css/bootstrap-responsive.min.css?t=20140830" rel="stylesheet">
	<link type="text/css" href="__PUBLIC__/css/jquery-ui-1.10.0.custom.css?t=20140830" rel="stylesheet" />
	<link type="text/css" href="__PUBLIC__/css/font-awesome.min.css?t=20140830" rel="stylesheet" />
	<link class="docs" href="__PUBLIC__/css/docs.css?t=20140830" rel="stylesheet"/>
	<link rel="shortcut icon" href="__PUBLIC__/ico/favicon.png"/>
    <script type="text/javascript">
        var browserInfo = {browser:"", version: ""};
        var ua = navigator.userAgent.toLowerCase();
        if (window.ActiveXObject) {
            browserInfo.browser = "IE";
            browserInfo.version = ua.match(/msie ([\d.]+)/)[1];
            if(browserInfo.version <= 7){
                if(confirm("您的ie浏览器版本过低，建议使用chorme浏览器")){}
            }
        }
    </script>
	<!--[if lt IE 9]>
	<script src="__PUBLIC__/js/respond.min.js" type="text/javascript"></script>
	<![endif]-->
	<script src="__PUBLIC__/js/jquery-1.9.0.min.js?t=20140830" type="text/javascript"></script>
	<script src="__PUBLIC__/js/bootstrap.min.js?t=20140830" type="text/javascript"></script>
	<script src="__PUBLIC__/js/jquery-ui-1.10.0.custom.min.js?t=20140830" type="text/javascript"></script>
	<script src="__PUBLIC__/js/WdatePicker.js?t=20140830" type="text/javascript"></script>
	<script src="__PUBLIC__/js/gototop.js?t=20140830" type="text/javascript"></script>
	<script src="__PUBLIC__/js/5kcrm_zh-cn.js?t=20140830" type="text/javascript"></script>
	<script src="__PUBLIC__/js/5kcrm.js?t=20140830" type="text/javascript"></script>
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
	<script src="__PUBLIC__/js/ie8-eventlistener.js" type="text/javascript"></script>
	<![endif]-->	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar" data-twttr-rendered="true">
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div style="line-height: 40px;padding-right: 5px;padding-top: 6px;" class="pull-left"><img src="__PUBLIC__/img/logomini.png"/></div>
			<a class="brand" href="<?php echo U('dynamic/index');?>" alt="<?php echo C('defaultinfo.description');?>"><?php echo C('defaultinfo.name');?></a>
			<?php echo W("Navigation");?>
		</div> 
	</div>
</div>
<div class="container">
	<div class="page-header" style="border:none; font-size:14px; ">
		<ul class="nav nav-tabs">
			<li class="active"><a href="<?php echo U('setting/sendsms');?>"><?php echo L('SEND_SMS');?></a></li>
			<li><a href="<?php echo U('setting/smsrecord');?>"><?php echo L('SMS_RECORD');?></a></li>
			<li><a href="<?php echo U('setting/sendemail');?>"><?php echo L('SEND_EMAIL');?></a></li>
		</ul>
	</div>
	<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>	
	<?php if(!empty($contacts)): $first = 0; ?>
			<?php if(is_array($contacts)): $i = 0; $__LIST__ = $contacts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(!is_phone($vo['telephone'])): if($first==0){ $first = 1; }else{ $first = 2; } ?>
					<?php if($first == 1): ?><div class="alert alert-warning"><?php echo L('INVALIDATE_NUMBER_HAVE_BEEN_FILTER');?><br/><?php echo L('DETAILS_SEE_BLOW');?>:<?php endif; ?>
					<?php echo (trim($vo['telephone'])); ?> &nbsp; <?php echo ($vo['name']); ?>[<?php echo L('CUSTOMER');?>:<?php echo ($vo['customer_name']); ?>]、<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			<?php if($first != 0): ?></div><?php endif; endif; ?>
	<div class="row">
		<div class="span12">
			<h4><?php echo L('LEFT_SMS_COUNT');?>: <?php if($current_sms_num < 100): ?><font color="red"><?php echo L('CURRENT_SMS_NUM', array($current_sms_num));?>  <?php echo L('LEFT_SMS_COUNT_NOTIC');?></font><?php else: echo L('CURRENT_SMS_NUM', array($current_sms_num)); endif; ?></h4>
		</div>
		<div>
			<div class="span3 warning pull-left" style="background-color:#f5f5f5;">
				<pre><h4><?php echo L('OPERATING_TIPS');?></h4>
<?php echo L('TIPS_ONE');?><span style="color:red">13166337788</span>
<?php echo L('TIPS_TWO');?>
   <span style="color:red"><br/>13166337788<br/>13166337799</span>
<?php echo L('TIPS_THREE');?><span style="color:red">{</span><span style="color:red">$name}</span><?php echo L('INSTEAD');?><span style="color:red"><?php echo L('PHONE_FORMAT');?></span>:
<span style="color:red">13166337788,<?php echo L('ZHANGSAN');?><br/>13166337799,<?php echo L('LISI');?></span>
4、<span style="color:red"><?php echo L('TIPS_FOUR');?></span>
5、<span><?php echo L('TIPS_FIVE');?></span>
6、<span><?php echo L('TIPS_SIX');?></span>
7、<span><?php echo L('TIPS_SEVEN');?></span>
				</pre>
			</div>
			<form  action="<?php echo U('setting/sendsms');?>" method="post">
			<div class="pull-left">
				<div class="pull-left" style="margin-left:30px;">
					<div class="alert-info alert" style="margin:0px;width:220px;"><?php echo L('INPUT_PHONE_NUMBER');?><br/>&nbsp;<?php echo L('INPUT_NUMBER_TIP');?></div>
					<div><textarea  name="phoneNum" style="min-height: 500px;width:260px;"><?php if(!empty($contacts)): if(is_array($contacts)): $i = 0; $__LIST__ = $contacts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(is_phone($vo['telephone'])): echo (trim($vo['telephone'])); ?>,<?php echo ($vo['name']); ?>,<?php echo ($vo['customer_name']); echo chr(10); endif; endforeach; endif; else: echo "" ;endif; endif; ?></textarea></div>
				</div>
				<div class="pull-left" style="margin-left:30px;">
					<p>
						<select name="template" id="template" style="width:auto;font-size:12px;" onchange="changeContent()">
							<option><?php echo L('SELECT_SMS_TPL');?></option>
							<?php if(is_array($templateList)): $i = 0; $__LIST__ = $templateList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v['template_id']); ?>" rel="<?php echo ($v['content']); ?>"><?php echo ($v['subject']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
						<a href="<?php echo U('sms/index');?>" style="color:red;"><?php echo L('SETTING');?></a>
					</p>
					<div class="alert-info alert" style="margin:0px;width:200px;"><?php echo L('INPUT_SMS_CONTENT');?><br/>&nbsp;<?php echo L('NOTIC');?>:<span style="color:red"><?php echo L('PLEASE_READ_OPERATING_TIPS');?>!</span></div>
					<div>
					<textarea id="smsContent" name="smsContent" placeholder="<?php echo L('INTPUT_CONTENT_HERE');?>" style="height: 300px;width:240px;"></textarea>
					<p><?php echo L('LEFT_CHARACTER');?> <span id="contentCount" style="color:red;">55</span> <?php echo L('LEFT_CHARACTER_TIPS');?></p>
					<p>
						<span id="selecttime" style="display:none;"><?php echo L('SELECT_TIME');?><input type="text" id="sendtime" style="width:auto;" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" name="sendtime" class="Wdate"/></span> <br/>
						<input type="submit" onclick="<?php echo L('SENDING_TIPS');?>" class="btn btn-primary" value="<?php echo L('SEND');?>"/> &nbsp; 
						<input type="checkbox" name="settime" value="1" id="settime"/><?php echo L('REGULARLY_SENT');?> &nbsp; <br/>
					</p>
					</div>
				</div>
			</div>
			</form>
			<div class="span3 warning  pull-left" style="background-color:#f5f5f5;">
				<pre><h4><?php echo L('USE_INTRODUCE');?></h4><?php echo L('INTRODUCE');?>
				</pre>
			</div>
		</div>
	</div> <!-- End #main-content -->
</div>
<script type="text/javascript">
$(document).ready(function(){
    $("#smsContent").keydown(function(){
        var curLength=$("#smsContent").val().length;
        if(curLength == 55){
            alert("<?php echo L('SEND_SPLIT_TIPS');?>" );
			$("#contentCount").hide();
        }else if(curLength < 55){
            $("#contentCount").html(55-$("#smsContent").val().length);
			$("#contentCount").show();
        }else{
			$("#contentCount").hide();
		}
    })
})
$("#settime").click(
	function() {
		if ($("#settime").prop("checked")==true) {
			$("#selecttime").show();
		}else{
			$("#selecttime").hide();
		}
	}	
);

function changeContent(){
	var a = $('#template option:selected').attr('rel');
	if(a){
		$('#smsContent').html(a);
	}else{
		$('#smsContent').html('');
	}
	
}
</script>

</body>
</html>