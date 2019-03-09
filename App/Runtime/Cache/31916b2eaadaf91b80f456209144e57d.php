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
<style>
table tbody tr{cursor:move;}
</style>
	<div class="container">
		<div class="page-header">
			<h4><?php echo L('THE_MENU_SETTINGS');?></h4>
		</div>
		<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
		
		
		<ul class="nav nav-tabs">
			<li <?php if($_GET['type'] != 'simple'): ?>class="active"<?php endif; ?>><a href="#tab1" data-toggle="tab"><?php echo L('NAVIGATION_MENU_SETTINGS');?></a></li>
			<li <?php if($_GET['type'] == 'simple'): ?>class="active"<?php endif; ?>><a href="#tab2" data-toggle="tab"><?php echo L('QUICKLY_ADD_MENU_SETTINGS');?></a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane <?php if($_GET['type'] != simple): ?>active<?php endif; ?>" id="tab1">
				<div class="row">
					<div class="span12">
						<div class="nav pull-left">
							<input type="button" id="sort_btn" class="btn" value="<?php echo L('SAVE_THE_LOCATION');?>"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span4" id="postion_top">
						<h4><?php echo L('NAVIGATION_LOCATION_AT_THE_TOP');?></h4>
						<table class="table table-hover">
							<thead>
								<tr>
								   <th width="25%"><?php echo L('MENU');?></th>
								   <th><?php echo L('LINK');?></th>						   
								</tr>
							</thead>
							<tbody>
								<?php if(empty($postion["top"])): ?><tr><td colspan="2"><?php echo L('THIS_POSITION_IS_NOT_TO_ADD_THE_MENU');?></td></tr>
								<?php else: ?>
									<?php if(is_array($postion["top"])): $i = 0; $__LIST__ = $postion["top"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["title"] != ''): ?><tr>
											<td><input type="hidden" class="list" name="list[]" value="<?php echo ($vo["id"]); ?>"/><?php echo ($vo["title"]); ?></td>
											<td><a href="<?php echo ($vo["url"]); ?>" target="_blank"><?php if(strlen($vo['url']) > 40): echo (substr($vo["url"],0,40)); ?>...<?php else: echo ($vo["url"]); endif; ?></a></td>
										</tr><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
								<tr>
									<td colspan="2">&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="span4" id="postion_more">
						<h4><?php echo L('NAVIGATION_LOCATION_MORE');?></h4>
						<table class="table table-hover">
							<thead>
								<tr>
								   <th width="25%"><?php echo L('MENU');?></th>
								   <th><?php echo L('LINK');?></th>						   
								</tr>
							</thead>
							<tbody>
								<?php if(empty($postion["more"])): ?><tr><td colspan="2"><?php echo L('THIS_POSITION_IS_NOT_TO_ADD_THE_MENU');?></td></tr>
								<?php else: ?>
								<?php if(is_array($postion["more"])): $i = 0; $__LIST__ = $postion["more"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["title"] != ''): ?><tr>
										<td><input type="hidden" class="list" name="list[]" value="<?php echo ($vo["id"]); ?>"/><?php echo ($vo["title"]); ?></td>
										<td><a href="<?php echo ($vo["url"]); ?>" target="_blank"><?php if(strlen($vo['url']) > 40): echo (substr($vo["url"],0,40)); ?>...<?php else: echo ($vo["url"]); endif; ?></a></td>
									</tr><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
								<tr>
									<td colspan="2">&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="span4" id="postion_user">
						<h4><?php echo L('NAVIGATION_LOCATION_PERSONAL_CENTER');?></h4>
						<table class="table table-hover">
							<thead>
								<tr>
								   <th width="25%"><?php echo L('MENU');?></th>
								   <th><?php echo L('LINK');?></th>						   
								</tr>
							</thead>
							<tbody>
								<?php if(empty($postion["user"])): ?><tr><td colspan="2"><?php echo L('THIS_POSITION_IS_NOT_TO_ADD_THE_MENU');?></td></tr>
								<?php else: ?>
								<?php if(is_array($postion["user"])): $i = 0; $__LIST__ = $postion["user"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["title"] != ''): ?><tr>
										<td><input type="hidden" class="list" name="list[]" value="<?php echo ($vo["id"]); ?>"/><?php echo ($vo["title"]); ?></td>
										<td><a href="<?php echo ($vo["url"]); ?>" target="_blank"><?php if(strlen($vo['url']) > 40): echo (substr($vo["url"],0,40)); ?>...<?php else: echo ($vo["url"]); endif; ?></a></td>
									</tr><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
								<tr>
									<td colspan="2">&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="tab-pane <?php if($_GET['type'] == 'simple'): ?>active<?php endif; ?>" id="tab2">
				<div class="row">
					<div class="span12">
						<div class="nav pull-left">
							<input type="button" id="menu_sort_btn" class="btn" value="<?php echo L('SAVE_THE_LOCATION');?>"/>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="span4" id="menu_select">
						<h4><?php echo L('THE_SELECTED_OPTIONS');?></h4>
						<table class="table table-hover">
							<thead>
								<tr>
								   <th width="25%"><?php echo L('MENU');?></th>
								   <th><?php echo L('LINK');?></th>						   
								</tr>
							</thead>
							<tbody>
								<?php if(empty($simple_menu)): ?><tr><td colspan="2"><?php echo L('THIS_POSITION_IS_NOT_TO_ADD_THE_MENU');?></td></tr>
								<?php else: ?>
								<?php if(is_array($simple_menu)): $i = 0; $__LIST__ = $simple_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
										<td><input type="hidden" class="menu" name="menu[]" value="<?php echo ($vo["module"]); ?>"/><?php echo ($vo["module_name"]); ?></td>
										<td><a href="<?php echo ($vo["url"]); ?>" target="_blank"><?php echo ($vo["url"]); ?></a></td>
									</tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
								<tr>
									<td colspan="2">&nbsp;</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="span2" style="margin-top: 100px;text-align: center;">
						<p><img src="__PUBLIC__/img/left_arrow.png"/></p><p style="text-align:left;"><?php echo L('PLEASE_SEND_THE_RIGHT');?></p>
					</div>
					<div class="span4" id="menu_all">
						<h4><?php echo L('ALL_THE_OPTIONS');?></h4>
						<table class="table table-hover">
							<thead>
								<tr>
								   <th width="25%"><?php echo L('MENU');?></th>
								   <th><?php echo L('LINK');?></th>						   
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type="hidden" class="menu" name="menu[]" value="log"/><?php echo L('LOG');?></td>
									<td>/index.php?m=log&a=mylog_add</td>
								</tr>
								<tr>
									<td><input type="hidden" class="menu" name="menu[]" value="business"/><?php echo L('BUSINESS');?></td>
									<td>/index.php?m=business&a=add</td>
								</tr>
								<tr>
									<td><input type="hidden" class="menu" name="menu[]" value="knowledge"/><?php echo L('KNOWLEDGE');?></td>
									<td>/index.php?m=knowledge&a=add</td>
								</tr>
								<tr>
									<td><input type="hidden" class="menu" name="menu[]" value="product"/><?php echo L('PRODUCT');?></td>
									<td>/index.php?m=product&a=add</td>
								</tr>
								<tr>
									<td><input type="hidden" class="menu" name="menu[]" value="customer"/><?php echo L('CUSTOMER');?></td>
									<td>/index.php?m=customer&a=add</td>
								</tr>
								<tr>
									<td><input type="hidden" class="menu" name="menu[]" value="contacts"/><?php echo L('CONTACTS');?></td>
									<td>/index.php?m=contacts&a=add</td>
								</tr>
								<tr>
									<td><input type="hidden" class="menu" name="menu[]" value="announcement"/><?php echo L('ANNOUNCEMENT');?></td>
									<td>/index.php?m=announcement&a=add</td>
								</tr>
								<tr>
									<td><input type="hidden" class="menu" name="menu[]" value="event"/><?php echo L('EVENT');?></td>
									<td>/index.php?m=event&a=add</td>
								</tr>
								<tr>
									<td><input type="hidden" class="menu" name="menu[]" value="contract"/><?php echo L('CONTRACT');?></td>
									<td>/index.php?m=contract&a=add</td>
								</tr>
								<tr>
									<td><input type="hidden" class="menu" name="menu[]" value="task"/><?php echo L('TASK');?></td>
									<td>/index.php?m=task&a=add</td>
								</tr>
								<tr>
									<td><input type="hidden" class="menu" name="menu[]" value="receivables"/><?php echo L('THE_ACCOUNTS_RECEIVABLE');?></td>
									<td>/index.php?m=finance&a=add&t=receivables</td>
								</tr>
								<tr>
									<td><input type="hidden" class="menu" name="menu[]" value="payables"/><?php echo L('THE_ACCOUNTS_PAYABLE');?></td>
									<td>/index.php?m=finance&a=add&t=payables</td>
								</tr>
								<tr>
									<td><input type="hidden" class="menu" name="menu[]" value="receivingorder"/><?php echo L('VOUCHER');?></td>
									<td>/index.php?m=finance&a=add&t=receivingorder</td>
								</tr>
								<tr>
									<td><input type="hidden" class="menu" name="menu[]" value="paymentorder"/><?php echo L('PAYMENT_ORDER');?></td>
									<td>/index.php?m=finance&a=add&t=paymentorder</td>
								</tr>
								<tr>
									<td colspan="2">&nbsp;</td>
								</tr>
								</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	$(function(){
		$("table tbody").sortable({connectWith: "table tbody"});
		$("#sort_btn").click(
			function() {
				var postion_top = new Array();
				$.each($("#postion_top .list"), function(i, item){postion_top.push(item.value)});
				var postion_user = new Array();
				$.each($("#postion_user .list"), function(i, item){postion_user.push(item.value)});
				var postion_more = new Array();
				$.each($("#postion_more .list"), function(i, item){postion_more.push(item.value)});
				$.get('<?php echo U("navigation/index");?>',{postion_top:postion_top.join(','), postion_user:postion_user.join(','), postion_more:postion_more.join(',')}, function(data){
					if (data.status == 1) {
						$(".page-header").after('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>' + data.info + '</div>');
					} else {
						$(".page-header").after('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button>' + data.info + '</div>');
					}
				}, 'json');
			}		
		);
		$("#menu_sort_btn").click(
			function() {
				var menu_select = new Array();
				$.each($("#menu_select .menu"), function(i, item){menu_select.push(item.value)});
				
				$.get('<?php echo U("navigation/settingMenu");?>',{menu_select:menu_select.join(',')}, function(data){
					if (data.status == 1) {
						$(".page-header").after('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>' + data.info + '</div>');
					} else {
						$(".page-header").after('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button>' + data.info + '</div>');
					}
				}, 'json');
			}		
		);
	});
</script>

</body>
</html>