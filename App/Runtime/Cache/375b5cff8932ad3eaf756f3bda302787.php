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
	<!-- Docs nav ================================================== -->
	<div class="page-header" style="border:none; font-size:14px; ">
		<ul class="nav nav-tabs">
		  <li <?php if($_GET['content'] == 'customer' || $_GET['content'] == ''): ?>class="active"<?php endif; ?>><a  href="<?php echo U('customer/index');?>"><img src="__PUBLIC__/img/customer_icon.png"/>&nbsp; <?php echo L('CUSTOMER');?></a></li>
		  <li <?php if($_GET['content'] == 'resource' ): ?>class="active"<?php endif; ?>><a  href="<?php echo U('customer/index','content=resource');?>"><img src="__PUBLIC__/img/customer_source_icon.png"/>&nbsp; <?php echo L('CUSTOMER_POOL');?></a></li>
		  <li><a href="<?php echo U('contacts/index');?>"><img src="__PUBLIC__/img/contacts_icon.png"/> &nbsp;<?php echo L('LINKMAN');?></a></li>
		  <li><a href="<?php echo U('customer/cares');?>"><img src="__PUBLIC__/img/cares_icon.png"/> &nbsp;<?php echo L('CUMTOMER_CARE');?></a></li>
		  <li><a href="<?php echo U('customer/analytics');?>"><img src="__PUBLIC__/img/tongji.png"/> &nbsp;<?php echo L('CLIENT_STATISTICS');?></a></li>
		</ul>
	</div>
	<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
	<?php if($_GET['content'] != 'resource'): ?><p class="view">
		<b><?php echo L('UNIFIED_CUSTOMER_VIEW');?></b>
		<img src=" __PUBLIC__/img/by_owner.png"/> <a href="<?php echo U('customer/index');?>" <?php if($_GET['by']== null): ?>class="active"<?php endif; ?>><?php echo L('ALL');?></a> |
		<a href="<?php echo U('customer/index','by=me');?>" <?php if($_GET['by']== 'me'): ?>class="active"<?php endif; ?>><?php echo L('MY_CLIENTS');?></a> | 
		<a href="<?php echo U('customer/index','by=sub');?>" <?php if($_GET['by']== 'sub'): ?>class="active"<?php endif; ?>><?php echo L('SUBORDINATES_TO_THE_CUSTOMER');?></a> &nbsp;  &nbsp; 
		<img src="__PUBLIC__/img/by_time.png"/> 
		<a href="<?php echo U('customer/index','by=today');?>" <?php if($_GET['by']== 'today'): ?>class="active"<?php endif; ?>><?php echo L('TODAY_IS_NEW');?></a> | 
		<a href="<?php echo U('customer/index','by=week');?>" <?php if($_GET['by']== 'week'): ?>class="active"<?php endif; ?>><?php echo L('THIS_WEEK_THE_NEW');?></a> | 
		<a href="<?php echo U('customer/index','by=month');?>" <?php if($_GET['by']== 'month'): ?>class="active"<?php endif; ?>><?php echo L('THIS_MONTH_THE_NEW');?></a>&nbsp;|&nbsp;
		<a href="<?php echo U('customer/index','by=focus');?>" <?php if($_GET['by']== 'focus'): ?>class="active"<?php endif; ?>>我关注的</a>&nbsp;|&nbsp;
		<a href="<?php echo U('customer/index','by=myshare');?>" <?php if($_GET['by']== 'myshare'): ?>class="active"<?php endif; ?>>我共享的</a>&nbsp;|&nbsp;
		<a href="<?php echo U('customer/index','by=share');?>" <?php if($_GET['by']== 'share'): ?>class="active"<?php endif; ?>>共享给我的</a>&nbsp;&nbsp;
		<a href="<?php echo U('customer/index','by=deleted');?>" <?php if($_GET['by']== 'deleted'): ?>class="active"<?php endif; ?>><img src="__PUBLIC__/img/task_garbage.png"/> <?php echo L('RECYCLE_BIN');?></a>
		&nbsp; <img src=" __PUBLIC__/img/seach.png"/><a href="<?php echo U('customer/search');?>"><?php echo L('ADVANCED_SEARCH');?></a>
	</p><?php endif; ?>
	<div class="row">	
		<div class="span12">
			<ul class="nav pull-left">
				<?php if($_SESSION['admin']== 1 or $_GET['by']!= 'deleted'): ?><div class="btn-group pull-left">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							&nbsp;<?php echo L('BATCH_OPERATION');?>
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
						<?php if($_GET['by']!= 'share'): ?><li><a id="delete"  style="margin-right: 5px;" href="javascript:void(0)"><?php echo L('BATCH_REMOVE');?></a></li><?php endif; ?>
						<?php if($_GET['content']== 'resource'): ?><li><a id="batch_receive"  style="margin-right: 5px;" href="javascript:void(0)"><?php echo L('BATCH_TO_RECEIVE');?></a></li>
							<li><a id="batch_assign"  style="margin-right: 5px;" href="javascript:void(0)"><?php echo L('MASS_DISTRIBUTION');?></a></li>
						<?php elseif($_GET['by']!= 'deleted'): ?>
							<li><a id="remove"  style="margin-right: 5px;" href="javascript:void(0)"><?php echo L('BATCH_INTO_THE_CUSTOMER_POOL');?></a></li>
							<li><a id="all_focus"  style="margin-right: 5px;" href="javascript:void(0)"><?php echo L('ALL_FOCUS');?></a></li>
							<li><a id="share"  style="margin-right: 5px;" href="javascript:void(0)"><?php echo L('SHARE');?></a></li>
							<li><a id="close_focus"  style="margin-right: 5px;" href="javascript:void(0)"><?php echo L('CLOSE_FOCUS');?></a></li>
							<li><a id="close_share" style="margin-right: 5px;" href="javascript:void(0)"><?php echo L('CLOSE_SHARE');?></a></li><?php endif; ?>
						</ul>&nbsp;&nbsp;
					</div><?php endif; ?>
				<li class="pull-left">
					<form class="form-inline" id="searchForm" action="" method="get">
						<ul class="nav pull-left">			
						<li class="pull-left" >
							<select style="width:auto" id="field" onchange="changeCondition()" name="field">
								<option class="" value="">--<?php echo L('PLEASE_SELECT_A_FILTER_CONDITION');?>--</option>
								<?php if(is_array($field_list)): $i = 0; $__LIST__ = $field_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option class="<?php echo ($v['form_type']); ?>" value="<?php echo ($v[field]); ?>" rel="customer"><?php echo ($v[name]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
								<?php if($_GET['content']!= 'resource'): ?><option class="role" value="owner_role_id"><?php echo L('PRINCIPAL');?></option><?php endif; ?>
								<option class="date" value="create_time"><?php echo L('CREATION_TIME');?></option>
								<option class="date" value="update_time"><?php echo L('MODIFICATION_TIME');?></option>
							</select>&nbsp;&nbsp;
						</li>
						<li id="conditionContent" class="pull-left">
							<select id="condition" style="width:auto" name="condition" onchange="changeSearch()">
								<option value="contains"><?php echo L('INCLUDE');?></option>
								<option value="not_contain"><?php echo L('EXCLUSIVE');?></option>
								<option value="is"><?php echo L('YES');?></option>
								<option value="isnot"><?php echo L('ISNOT');?></option>						
								<option value="start_with"><?php echo L('BEGINNING_CHARACTER');?></option>
								<option value="end_with"><?php echo L('TERMINATION_CHARACTER');?></option>
								<option value="is_empty"><?php echo L('Mandatory');?></option>
								<option value="is_not_empty"><?php echo L('ISNOTEMPTY');?></option>
							</select>&nbsp;&nbsp;
						</li>
						<li id="searchContent" class="pull-left">
							<input id="search" type="text" class="input-medium search-query" name="search"/>&nbsp;&nbsp;
						</li>
						<li class="pull-left"> 
							<input type="hidden" name="m" value="customer"/>
							<input type="hidden" name="act" id="act" value="index"/>
							<input type="hidden" name="daochu" id="daochu" value=""/>
							<input type="hidden" name="current_page" id="current_page" value=""/>
							<input type="hidden" name="export_limit" id="export_limit" value=""/>
							<?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?>
							<button type="button" id="dosearch" class="btn"> <img src="__PUBLIC__/img/search.png"/>  <?php echo L('SEARCH');?></button>
							&nbsp;
						</li>
						<li class="pull-left">
							<div class="btn-group">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									<img src="__PUBLIC__/img/sms.png">&nbsp;<?php echo L('SEND_SMS');?>
									<span class="caret"></span>
								</a>
								
								<ul class="dropdown-menu">
									<li><a id="all_send"  href="javascript:void(0)"><?php echo L('ALL_SEND');?></a></li>
									<li><a id="page_send" href="javascript:void(0)"><?php echo L('PAGE_SEND');?></a></li>
									<li><a id="check_send" href="javascript:void(0)"><?php echo L('CHECK_SEND');?></a></li>
								</ul>
							</div>
							<div class="btn-group">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									<img src="__PUBLIC__/img/email.png">&nbsp;<?php echo L('SEND_EMAIL');?>
									<span class="caret"></span>
								</a>	
								<ul class="dropdown-menu">
									<li><a id="all_send_email"  href="javascript:void(0)"><?php echo L('ALL_SEND');?></a></li>
									<li><a id="page_send_email" href="javascript:void(0)"><?php echo L('PAGE_SEND');?></a></li>
									<li><a id="check_send_email" href="javascript:void(0)"><?php echo L('CHECK_SEND');?></a></li>
								</ul>
							</div>
						</li>
						</ul>				
						<input type="hidden" name="content" <?php if($_GET['content']): ?>value="resource"<?php endif; ?>/>
					</form>
				</li>
			</ul>
			<div class="pull-right">
				<a href="<?php echo U('Customer/add');?>" class="btn btn-primary"><i class="icon-plus"></i>&nbsp; <?php echo L('CREATE_NEW_CUSTOMER');?></a>&nbsp;
				<div class="btn-group">
					<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> <i class="icon-wrench"></i>&nbsp; <?php echo L('CLIENT_TOOLS');?><span class="caret"></span></button>
					<ul class="dropdown-menu">
						<!-- <li><a href="<?php echo U('customer/analytics');?>" id="analytics"  class="link"> <i class="icon-align-left"> </i>客户统计</a></li> -->
						<li><a id="import_excel" class="link" href="javascript:void(0);"><i class="icon-upload"></i> <?php echo L('IMPORT_CUSTOMER');?></a></li>
						<li><a href="javascript:void(0);" id="excelExport"  class="link"> <i class="icon-download"> </i> <?php echo L('EXPORT_CUSTOMERS');?></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="span12">
			<form id="form1" action="" method="post">
				<input type="hidden" name="owner_role" id="hidden_owner_id" value="0"/>
				<input type="hidden" name="message_alert" id="hidden_message" value="0"/>
				<input type="hidden" name="sms_alert" id="hidden_sms" value="0"/>
				<input type="hidden" name="email_alert" id="hidden_email" value="0"/>
				<input type="hidden" name="operating_type" id="operating_type" value=""/>
				<table class="table table-hover table-striped table_thead_fixed">
					<?php if($customerlist == null): ?><tr><td>----<?php echo L('TEMPORARILY_NO_DATA');?>----</td></tr>
					<?php else: ?>
					<thead>
						<tr id="childNodes_num">
							<th><input type="checkbox" id="check_all"/></th>
						<?php if($_GET['content']!= 'resource' and $_GET['by']!= 'deleted'): ?><th width="10px">&nbsp;</th><?php endif; ?>
                            <?php if(is_array($field_array)): $i = 0; $__LIST__ = $field_array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(C('ismobile') == 1 and $i <= 1): ?><th><?php echo ($vo["name"]); ?></th>
								<?php elseif(C('ismobile') != 1): ?>
									<th><?php echo ($vo["name"]); ?></th><?php endif; endforeach; endif; else: echo "" ;endif; ?>
							<?php if($_GET['content']!= 'resource'): ?><th><?php echo L('PRINCIPAL');?></th><?php endif; ?>
							<?php if(C('ismobile') != 1): ?><th><?php echo L('FOUNDER');?></th><?php endif; ?>
							<?php if((C('ismobile') != 1) and ($_GET['by']== 'deleted')): ?><th><?php echo L('DELETE_THE_PEOPLE');?></th><th><?php echo L('DELETE_THE_TIME');?></th><?php endif; ?>
							<th>
								<?php if($_GET['asc_order'] == 'customer.create_time'): ?><a href="<?php echo U('customer/index','desc_order=customer.create_time&'.$parameter);?>"><?php echo L('CREATION_TIME');?>&nbsp;<img src="__PUBLIC__/img/arrow_up.png"></a>
								<?php elseif($_GET['desc_order'] == 'customer.create_time'): ?>
									<a href="<?php echo U('customer/index','asc_order=customer.create_time&'.$parameter);?>"><?php echo L('CREATION_TIME');?>&nbsp;<img src="__PUBLIC__/img/arrow_down.png"></a>
								<?php else: ?>
									<a href="<?php echo U('customer/index','desc_order=customer.create_time&'.$parameter);?>"><?php echo L('CREATION_TIME');?></a><?php endif; ?>
							</th>
							<th>
								<?php if($_GET['asc_order'] == 'customer.update_time'): ?><a href="<?php echo U('customer/index','desc_order=customer.update_time&'.$parameter);?>">更新时间&nbsp;<img src="__PUBLIC__/img/arrow_up.png"></a>
								<?php elseif($_GET['desc_order'] == 'customer.update_time'): ?>
									<a href="<?php echo U('customer/index','asc_order=customer.update_time&'.$parameter);?>">更新时间&nbsp;<img src="__PUBLIC__/img/arrow_down.png"></a>
								<?php else: ?>
									<a href="<?php echo U('customer/index','desc_order=customer.update_time&'.$parameter);?>">更新时间</a><?php endif; ?>
							</th>
							<?php if($_GET['asc_order'] == 'customer.update_time' and ($_GET['content']!= 'resource' && $_GET['by']!= 'deleted')): ?><th><a href="<?php echo U('customer/index','desc_order=customer.update_time&'.$parameter);?>"><?php echo L('FROM_THE_DUE_DAY');?>&nbsp;<img src="__PUBLIC__/img/arrow_up.png"></a></th>
							<?php elseif($_GET['desc_order'] == 'customer.update_time' and ($_GET['content']!= 'resource' && $_GET['by']!= 'deleted')): ?>
								<th><a href="<?php echo U('customer/index','asc_order=customer.update_time&'.$parameter);?>"><?php echo L('FROM_THE_DUE_DAY');?>&nbsp;<img src="__PUBLIC__/img/arrow_down.png"></a></th>
							<?php elseif($_GET['content']!= 'resource' && $_GET['by']!= 'deleted'): ?>
								<th><a href="<?php echo U('customer/index','desc_order=customer.update_time&'.$parameter);?>"><?php echo L('FROM_THE_DUE_DAY');?></a></th><?php endif; ?>
							<th><?php echo L('OPERATION');?></th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<td id="td_colspan">
							<?php if($_GET['content']!= 'resource' and $_GET['by']!= 'deleted'): ?><p><span class="starIcon"><?php echo L('INFUSE');?></span><i class="yes-gz"></i><span  class="starIcon">已关注</span><i class="no-gz"></i><span  class="starIcon">未关注</span></p><?php endif; ?>
								<?php echo ($page); ?><div style="width:130px;float:left;">每页显示<select style="width:auto;display:inline-block;" id="listrows" name="listrows" rel="<?php echo ($listrows); ?>"><option value="15">15</option><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="40">40</option><option value="50">50</option><option value="60">60</option><option value="70">70</option><option value="80">80</option><option value="90">90</option><option value="100">100</option></select>条</div>
<script type="text/javascript">
function changeURLArg(url,arg,arg_val){ 
	var pattern=arg+'=([^&]*)'; 
	var replaceText=arg+'='+arg_val; 
	if(url.match(pattern)){ 
	var tmp='/('+ arg+'=)([^&]*)/gi'; 
	        tmp=url.replace(eval(tmp),replaceText); 
	return tmp; 
	    }else{ 
	if(url.match('[?]')){ 
	return url+'&'+replaceText; 
	        }else{ 
	return url+'?'+replaceText; 
	        } 
	    } 
	return url+'n'+arg+'n'+arg_val; 
} 
var list_rows = $("#listrows").attr('rel');
$("#listrows").val(list_rows);
$("#listrows").change(function(){
	var every_listrows = $(this).val();
	var this_url = window.location.search;
	if(this_url.indexOf("listrows") > 0){
		window.location = changeURLArg(this_url,'listrows',every_listrows);
	}else{
		window.location = this_url+"&listrows="+every_listrows;
	}
});
</script>
							</td>
						</tr>
					</tfoot>
					<tbody>
						<?php if(is_array($customerlist)): $i = 0; $__LIST__ = $customerlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td>
									<input name="customer_id[]" class="check_list" type="checkbox" value="<?php echo ($vo["customer_id"]); ?>"/>
								</td>
								<?php $focus_id = M('CustomerFocus')->where('user_id =%d and customer_id=%d',session('role_id'),$vo['customer_id'])->getField('focus_id'); ?>
							<?php if($_GET['content']!= 'resource' and $_GET['by']!= 'deleted'): ?><td><?php if($focus_id): ?><a href="<?php echo U('customer/batchclose', 'customer_id='.$vo['customer_id']);?>"><span class="yes-gz" title="取消关注"></span></a><?php else: ?><a href="<?php echo U('customer/batchfocus', 'customer_id='.$vo['customer_id']);?>"><span class="no-gz" title="关注"></span><?php endif; ?></td><?php endif; ?>
                                <?php if(is_array($field_array)): $i = 0; $__LIST__ = $field_array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if(C('ismobile') == 1 and $i <= 1): ?><td>
											<?php if($v['field'] == 'name'): ?><a href="<?php echo U('customer/view', 'id='.$vo['customer_id']);?>"><?php endif; ?>
												<span style="color:#<?php echo ($v['color']); ?>">
												<?php if($v['form_type'] == 'datetime'): echo (date('Y-m-d',$vo[$v['field']])); ?>
												<?php else: ?>
												<?php echo ($vo[$v['field']]); endif; ?>
												</span>
											<?php if($v['field'] == 'name'): ?></a><?php endif; ?>
										</td>
									<?php elseif(C('ismobile') != 1): ?>
										<td>
											<?php if($v['field'] == 'name'): ?><a href="<?php echo U('customer/view', 'id='.$vo['customer_id']);?>"><?php endif; ?>
												<span style="color:#<?php echo ($v['color']); ?>">
												<?php if($v['form_type'] == 'datetime'): echo (date('Y-m-d',$vo[$v['field']])); ?>
												<?php else: ?>
												<?php echo ($vo[$v['field']]); endif; ?>
												</span>
											<?php if($v['field'] == 'name'): ?></a><?php endif; ?>
										</td><?php endif; endforeach; endif; else: echo "" ;endif; ?>
								<?php if($_GET['content']!= 'resource'): ?><td><?php if(!empty($vo["owner"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a><?php endif; ?></td><?php endif; ?>	
								<?php if(C('ismobile') != 1): ?><td>
										<?php if(!empty($vo["creator"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["creator"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["creator"]["user_name"]); ?></a><?php endif; ?>
									</td><?php endif; ?>
								<?php if((C('ismobile') != 1) and ($_GET['by']== 'deleted')): ?><td><?php if(!empty($vo["delete_role"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["delete_role"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["delete_role"]["user_name"]); ?></a><?php endif; ?></td>
									<td><?php echo (date('Y-m-d',$vo["create_time"])); ?></td>
									<td><?php echo (date('Y-m-d',$vo["update_time"])); ?></td>
									<td><?php echo (date('Y-m-d',$vo["delete_time"])); ?></td>
								<?php elseif(C('ismobile') != 1): ?>
									<td><?php echo (date('Y-m-d',$vo["create_time"])); ?></td>
									<td><?php echo (date('Y-m-d',$vo["update_time"])); ?></td><?php endif; ?>
								<?php if($_GET['content']!= 'resource' && $_GET['by']!= 'deleted'): ?><td>
										<?php if(!$vo['is_locked'] && $vo['days'] <= 7): ?><font color="red"><?php echo ($vo["days"]); echo L('DAY');?></font><?php elseif(!$vo['is_locked']): ?><font color="blue"><?php echo ($vo["days"]); echo L('DAY');?></font><?php endif; ?>
									</td><?php endif; ?>			
								<td>
									<a href="<?php echo U('customer/view', 'id='.$vo['customer_id'].'&content='); echo ($_GET['content']); ?>"><?php echo L('CHECK');?></a>&nbsp;
									<?php if($_GET['by']== 'deleted'): ?><a href="<?php echo U('customer/revert', 'id=' . $vo['customer_id']);?>"><?php echo L('REDUCTION');?></a>&nbsp;
									<?php else: ?>
										<a href="<?php echo U('customer/edit', 'id='.$vo['customer_id']);?>"><?php echo L('COMPILE');?></a>&nbsp;<?php endif; ?>
									<?php if($_GET['content']== 'resource'): ?><a rel="<?php echo ($vo['customer_id']); ?>" class="fenpei" href="javascript:void(0)"><?php echo L('DISTRIBUTION');?></a> &nbsp;
										<a href="<?php echo U('customer/receive', 'customer_id='.$vo['customer_id']);?>"><?php echo L('RECEIVE');?></a><?php endif; ?>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody><?php endif; ?>
				</table>
			</form>
		</div>
	</div>
</div>
<div class="hide" id="dialog-import" title="<?php echo L('IMPORT_DATE');?>">loading...</div>
<div class="hide" id="dialog-role-info" title="<?php echo L('EMPLOYEE_INFORMATION');?>">loading...</div>
<div class="hide" id="dialog-fenpei" title="<?php echo L('DISTRIBUTION_OF_CUSTOMERS');?>">loading...</div>
<div class="hide" id="dialog-assign" title="<?php echo L('DISTRIBUTION_OF_CUSTOMERS');?>">loading...</div>
<div class="hide" id="dialog-share" title="客户共享">loading...</div>
<script type="text/javascript">

var url = "<?php echo U('customer/getcurrentstatus');?>";
var limit_size = 1000;
var count = <?php echo ($count); ?>;
var i = 1;  
function remainTime(){
	var id_array = new Array(); 
	$("input[class='check_list']:checked").each(function() {   
		id_array.push($(this).val());
	});
	$.get(url,function(data){
		if(data.data == 0){
			if((i-1)*limit_size < count){
				$("#act").val('excel');	
				$("#daochu").val(id_array);
				$("#current_page").val(i);
				$("#export_limit").val(limit_size);
				$("#searchForm").submit();
				setTimeout("remainTime()",1000); 
				i++; 
			}else{
				$("#act").val('');	
				i = 1;
			}
		}else{
			setTimeout("remainTime()",1000); 
		}
	}, 'json');
}
<?php if(C('ismobile') == 1): ?>width=$('.container').width() * 0.9;<?php else: ?>width=600;<?php endif; ?>
$("#dialog-share").dialog({
    autoOpen: false,
    modal: true,
	width: 530,
	maxHeight: 600,
	position: ["center",100]
});
$("#dialog-role-info").dialog({
    autoOpen: false,
    modal: true,
	width: width,
	maxHeight: 400,
	position: ["center",100]
});
$("#dialog-import").dialog({
	autoOpen: false,
	modal: true,
	width: width,
	maxHeight: 400,
	position: ["center",100]
});
$("#dialog-fenpei").dialog({
	autoOpen: false,
	modal: true,
	width: width,
	maxHeight: 400,
	position: ["center",100],
	buttons: {
		"Ok": function () {
			$('#fenpei_form').submit();
			$(this).dialog("close");
		},
		"Cancel": function () {
			$(this).dialog("close");
		}
	}
});
$("#dialog-assign").dialog({
	autoOpen: false,
	modal: true,
	width: width,
	maxHeight: 400,
	position: ["center",100],
	buttons: {
		"Ok": function () {
			var owner_role_id = $('input[name="owner_role_id"]').val();
			var message_alert = $('input:checkbox[name="message_alert"]:checked').val();
			var sms_alert = $('input:checkbox[name="sms_alert"]:checked').val();
			var email_alert = $('input:checkbox[name="email_alert"]:checked').val();
			
			$("#hidden_owner_id").val(owner_role_id);
			$("#hidden_message").val(message_alert);
			$("#hidden_sms").val(sms_alert);
			$("#hidden_email").val(email_alert);
			
			$("#form1").attr('action', '<?php echo U("customer/receive");?>');
			$('#operating_type').val('assign');
			$("#form1").submit();
			$(this).dialog("close");
		},
		"Cancel": function () {
			$(this).dialog("close");
		}
	}
});
function changeContent(){
	a = $("#select1  option:selected").val();
	window.location.href="<?php echo U('customer/index', 'by=');?>"+a;
}
<?php if($customerlist != null): ?>$nodes_num = document.getElementById("childNodes_num").children.length;
	$("#td_colspan").attr('colspan',$nodes_num);<?php endif; ?>
$(function(){
	$("#excelExport").click(function(){
		if(count > limit_size){
			if(confirm('当前导出量过大，将分几次导出，可能需要您等待一段时间，是否继续?')){
				remainTime();
			}
		}else{
			if(confirm("<?php echo L('CONFIRM_EXPORT_CUSTOMER');?>")){
				remainTime();
			}
		}
		/* if(confirm("<?php echo L('CONFIRM_EXPORT_CUSTOMER');?>")){
			$("#act").val('excel');	
			$("#searchForm").submit();
		} */
	})	
	
	
	$("#check_all").click(function(){
		$("input[class='check_list']").prop('checked', $(this).prop("checked"));
	});
	$('#delete').click(function(){
		if(confirm('<?php echo L('Confirm_to_delete');?>')){
			<?php if($_SESSION['admin']== 1 and $_GET['by']== 'deleted'): ?>$("#form1").attr('action', '<?php echo U("customer/completedelete","content=".$_GET['content']);?>');
				$("#form1").submit();
			<?php else: ?>
				$("#form1").attr('action', '<?php echo U("customer/delete","content=".$_GET['content']);?>');
				$("#form1").submit();<?php endif; ?>
		}
	});
	$('#remove').click(function(){
		if(confirm('<?php echo L('CONFIRMED_IN_THE_CUSTOMER_POOL');?>')){
			$("#form1").attr('action', '<?php echo U("customer/remove");?>');
			$('#operating_type').attr('value', 'remove');
			$("#form1").submit();
		}
	});
	$("#import_excel").click(function(){
		$('#dialog-import').dialog('open');
		$('#dialog-import').load('<?php echo U("customer/excelimport");?>');
	});
	$(".role_info").click(function(){
		$role_id = $(this).attr('rel');
		$('#dialog-role-info').dialog('open');
		$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
	});
	$("#check_send").click(function(){
		var id_array = new Array();
		$("input[class='check_list']:checked").each(function(){  
			id_array.push($(this).val());
		});
		if(id_array.length == 0){
			alert('<?php echo L('YOU_HAVE_NOT_CHOSEN_ANY_CUSTOMERS');?>');
		}else{
			var customer_ids = id_array.join(",");
			window.open("<?php echo U('setting/sendSms', 'model=customer&customer_ids=');?>"+customer_ids);
		}
	});
	$("#check_send_email").click(function(){
		var id_array = new Array();
		$("input[class='check_list']:checked").each(function(){  
			id_array.push($(this).val());
		});
		
		if(id_array.length == 0){
			alert('<?php echo L('YOU_HAVE_NOT_CHOSEN_ANY_CUSTOMERS');?>');
		}else{
			var customer_ids = id_array.join(",");
			window.open("<?php echo U('setting/sendemail', 'model=customer&customer_ids=');?>"+customer_ids);
		}
	});
	
	$("#page_send").click(function(){
		var id_array = new Array();
		$("input[class='check_list']").each(function(){
			id_array.push($(this).val());
		});
		if(id_array.length == 0){
			alert('<?php echo L('YOU_HAVE_NOT_CHOSEN_ANY_CUSTOMERS');?>');
		}else{
			var customer_ids = id_array.join(",");
			window.open("<?php echo U('setting/sendSms', 'model=customer&customer_ids=');?>"+customer_ids);
		}
	});
	$("#page_send_email").click(function(){
		var id_array = new Array();
		$("input[class='check_list']").each(function(){
			id_array.push($(this).val());
		});
		if(id_array.length == 0){
			alert('<?php echo L('YOU_HAVE_NOT_CHOSEN_ANY_CUSTOMERS');?>');
		}else{
			var customer_ids = id_array.join(",");
			window.open("<?php echo U('setting/sendemail', 'model=customer&customer_ids=');?>"+customer_ids);
		}
	});
	$("#all_send_email").click(function(){
		window.open("<?php echo U('setting/sendemail', 'model=customer&customer_ids=all');?>");
	});
	
	$("#all_send").click(function(){
		$("#act").val('sms');
		$("#searchForm").submit();
	});
	
	$(".fenpei").click(function(){
		$customer_id = $(this).attr('rel');
		$('#dialog-fenpei').dialog('open');
		$('#dialog-fenpei').load('<?php echo U("customer/fenpei","customer_id=");?>'+$customer_id);
	});
	$('#batch_assign').click(function(){
		$('#dialog-assign').dialog('open');
		$('#dialog-assign').load('<?php echo U("customer/fenpei");?>');
	});
	$('#batch_receive').click(function(){
		if(confirm('<?php echo L('SURE_YOU_WANT_TO_BATCH_TO_RECEIVE');?>')){
			$("#form1").attr('action', '<?php echo U("customer/receive");?>');
			$('#operating_type').attr('value', 'receive');
			$("#form1").submit();
		}
	});
	$("#dosearch").click(function(){
		result = checkSearchForm();
		if(result){
			$("#act").val('search');
			$("#searchForm").submit();
		}
	});
	
	$("#share").click(function(){
		var id_array = new Array();
		$("input[class='check_list']:checked").each(function(){
			id_array.push($(this).val());
		});
		if(id_array.length == 0){
			alert('<?php echo L('YOU_HAVE_NOT_CHOSEN_ANY_CUSTOMERS');?>');
		}else{
			var customer_ids = id_array.join(",");
			$('#dialog-share').dialog('open');
			$('#dialog-share').load("<?php echo U("customer/share");?>","customer_id="+customer_ids);
		}
	});
	
	$("#close_share").click(function(){
		if(confirm('确定批量取消分享？')){
			$("#form1").attr('action', '<?php echo U("customer/close_share");?>');
			$("#form1").submit();
		}
	});
	
	$('#all_focus').click(function(){
		if(confirm('确定批量添加关注？')){
			$("#form1").attr('action', '<?php echo U("customer/batchfocus");?>');
			$("#form1").submit();
		}
	});
	$('#close_focus').click(function(){
		if(confirm('确定批量取消关注？')){
			$("#form1").attr('action', '<?php echo U("customer/batchclose");?>');
			$("#form1").submit();
		}
	});
	

	<?php if($_GET['field']!= null): ?>$("#field option[value='<?php echo ($_GET['field']); ?>']").prop("selected", true);changeCondition();
		$("#condition option[value='<?php echo ($_GET['condition']); ?>']").prop("selected", true);changeSearch();
		$("#search").val('<?php echo ($_GET['search']); ?>');
		<?php if($_GET['state']): ?>new PCAS("state","city","area","<?php echo ($_GET['state']); ?>","<?php echo ($_GET['city']); ?>","<?php echo ($_GET['area']); ?>");<?php endif; ?>
	<?php else: ?>
		$("#field option[value='status_id']").prop("selected", true);changeCondition();<?php endif; ?>
});
	
</script>

</body>
</html>