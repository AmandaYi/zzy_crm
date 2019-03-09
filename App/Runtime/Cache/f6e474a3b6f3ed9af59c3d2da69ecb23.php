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
<script src="__PUBLIC__/js/PCASClass.js" type="text/javascript"></script>
<div class="container">
	<div class="page-header">
		<h4><?php echo L('SYSTEM_SETTING');?></h4>
	</div>
	<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>	
	<div class="tabbable">
		<ul class="nav nav-tabs">
			<li class="active"><a href="<?php echo U('setting/defaultInfo');?>"><?php echo L('BASIC_SYSTEM_SETTING');?></a></li>
			<li><a href="<?php echo U('setting/smtp');?>"><?php echo L('SMTP_SETTING');?></a></li>
			<li><a href="<?php echo U('setting/fields');?>"><?php echo L('CUSTOMIZING_FIELDS_SETTING');?></a></li>		
			<li><a href="<?php echo U('navigation/setting');?>"><?php echo L('SYSTEM_NAVIGATION_SETTING');?></a></li>

		</ul>
		<div class="row">
			<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo U('setting/defaultInfo');?>" method="post">
				<table class="span6 table">
					<thead>
						<tr>
							<th colspan="2"><?php echo L('THE_DEFAULT_INFORMATION');?></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="tdleft"><?php echo L('SYSTEM_NAME');?></td>  
							<td>
								<input name="name" id="name" type="text" value="<?php echo ($defaultinfo["name"]); ?>">
							</td>
						</tr>
						<tr>
							<td class="tdleft"><?php echo L('SYSTEM_DESCRIBE');?></td>  
							<td>
								<input name="description" id="description" type="text" value="<?php echo ($defaultinfo["description"]); ?>">
							</td>
						</tr>
						<tr>
							<td class="tdleft"><?php echo L('SYSTEM_LOGO');?></td>  
							<td>
								<input name="logo" type="file"> <?php echo L('SUGGEST_SIZE');?>
								<?php if($defaultinfo['logo'] != ''): ?><br/><img src="<?php echo ($defaultinfo["logo"]); ?>" style="width:50px;"/><?php endif; ?>
							</td>
						</tr>
						<tr>
							<td class="tdleft"><?php echo L('THE_DEFAULT_AREA');?></td>  
							<td>
								<select id="state" name="state" class="input-medium"></select>
								<select id="city" name="city" class="input-medium"></select>
							</td>
						</tr>
						<tr>
							<th colspan="2"><?php echo L('SECURITY_AND_DEBUGGING');?></th>
						</tr>
						<tr>
							<td class="tdleft"><?php echo L('ALLOW_THE_UPLOAD_FILE_TYPE');?></td>  
							<td>
								<input name="allow_file_type" id="name" type="text" value="<?php echo ($defaultinfo["allow_file_type"]); ?>">
								<br/><span style="color:red;"><?php echo L('USE_COMMAS_BETWEEN_TYPES');?> </span>
							</td>
						</tr>
						<tr>
							<td class="tdleft"><?php echo L('CLEAR_THE_CACHE');?></td>  
							<td>
								<input type="button" class="btn" id="clear" value="<?php echo L('EMPTY');?>"/>
							</td>
						</tr>
						<tr>
							<td class="tdleft"><?php echo L('DEBUG_MODE');?></td>  
							<td>
								<input type="button" class="btn" id="opendebug" value="<?php echo L('OPEN');?>"/> &nbsp;
								<input type="button" class="btn" id="closedebug" value="<?php echo L('CLOSE');?>"/>
							</td>
						</tr>
						<tr>
							<th colspan="2"><?php echo L('OTHER_SETTING');?></th>
						</tr>
						<tr>
							<td class="tdleft"><?php echo L('THE_CONTRACT_TIME_TO_REMIND');?></td>  
							<td>
								<?php echo L('AHEAD_OF_TIME');?><input type="text" style="width:50px;" name="contract_alert_time" value="<?php echo (($defaultinfo['contract_alert_time'])?($defaultinfo['contract_alert_time']):30); ?>"/><?php echo L('DAY');?>
							</td>
						</tr>
						<tr>
							<td class="tdleft"><?php echo L('CONTRACT_PREFIX');?></td>  
							<td>
								<input class="input-small" type="text" name="contract_custom" value="<?php echo (($contract_custom)?($contract_custom):'5k_crm'); ?>"><font color="red"><?php echo L('MODIFY_PREFIX');?>
							</td>
						</tr>
						<tr>
							<td class="tdleft"><?php echo L('TASK_ALLOCATION_MODE');?></td>
							<td>
								<input name="task_model" type="radio" <?php if($defaultinfo["task_model"] != 2): ?>checked="checked"<?php endif; ?> value="1"/><?php echo L('ALLOW_ONLY_ASSIGNED_TO_THE_LOWER');?> &nbsp;  &nbsp; 
								<input <?php if($defaultinfo["task_model"] == 2): ?>checked="checked"<?php endif; ?>  name="task_model" type="radio" value="2"/><?php echo L('RANDOM_DISTRIBUTION');?>
							</td>
						</tr>
						<tr>
							<td class="tdleft"><?php echo L('CUSTOMER_POOL_RECOVERY_CYCLE');?></td>
							<td>
								<input class="input-small" type="text" id="customer_outdays" name="customer_outdays" value="<?php echo ($customer_outdays); ?>" size="5"/><?php echo L('DAY');?>
							</td>
						</tr>
						<tr>
							<td class="tdleft"><?php echo L('CUSTOMERS_RECEIVE_CYCLE');?></td>
							<td>
								<select name="customer_limit_condition" class="input-small">
									<option value="day" <?php if('day' == $customer_limit_condition): ?>selected="selected"<?php endif; ?>><?php echo L('TODAY');?></option>
									<option value="week" <?php if('week' == $customer_limit_condition): ?>selected="selected"<?php endif; ?>><?php echo L('THIS_WEEK');?></option>
									<option value="month" <?php if('month' == $customer_limit_condition): ?>selected="selected"<?php endif; ?>><?php echo L('THIS_MONTH');?></option>
								</select>
								<?php echo L('WITHIN_LIMITS_TO_RECEIVE');?>
								<input class="input-small" type="text" id="customer_limit_counts" name="customer_limit_counts" value="<?php echo ($customer_limit_counts); ?>" size="5"/><?php echo L('CI');?>
							</td>
						</tr>
						<tr>
							<td class="tdleft"><?php echo L('LEADS_POOL_RECOVERY_CYCLE');?></td>
							<td>
								<input class="input-small" type="text" id="leads_outdays" name="leads_outdays" value="<?php echo ($leads_outdays); ?>" size="5"/><?php echo L('DAY');?>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>  
							<td>
								<input name="submit" class="btn btn-primary" type="submit" value="<?php echo L('SAVE');?>"/>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div> <!-- End #main-content -->
</div>
<script type="text/javascript">
$(function(){
	new PCAS("state","city","<?php echo ($defaultinfo["state"]); ?>","<?php echo ($defaultinfo["city"]); ?>");
	$('#clear').click(function(){
		if(confirm('<?php echo L('SURE_YOU_WANT_TO_EMPTY_THE_CACHE');?>')){
			$.get("<?php echo U('setting/clearcache');?>", function(result){
				if(result.status == 1){
					alert('<?php echo L('HAVE_TO_EMPTY_THE_CACHE');?>');
				}else{
					alert('<?php echo L('EMPTY_THE_CACHE_FAUILRE');?>');
				}
			});
		}
	});
	$('#opendebug').click(function(){
		$.get("<?php echo U('setting/opendebug');?>", function(result){
			if(result.status == 1){
				alert('<?php echo L('DEBUG_MODE_HAS_BEEN_OPEN');?>');
			}else if(result.status == 2){
				alert('<?php echo L('CONFIGURATION_FILE_NOT_WRITE_PERMISSIONS');?>');
			}
		});
	});
	$('#closedebug').click(function(){
		$.get("<?php echo U('setting/closedebug');?>", function(result){
			if(result.status == 1){
				alert('<?php echo L('DEBUG_MODE_HAS_BEEN_CLOSE');?>');
			}else if(result.status == 2){
				alert('<?php echo L('CONFIGURATION_FILE_NOT_WRITE_PERMISSIONS');?>');
			}
		});
	});
});
</script>

</body>
</html>