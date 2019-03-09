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
	<div class="page-header" style="border:none; font-size:14px;">
		<ul class="nav nav-tabs">
		    <li <?php if($_GET['by']!= 'public'): ?>class="active"<?php endif; ?>>
				<a href="<?php echo U('leads/index');?>"><img src="__PUBLIC__/img/task_checked2.png"/>&nbsp; <?php echo L('LEADS');?></a>
		    </li>
			<li <?php if($_GET['by']== 'public'): ?>class="active"<?php endif; ?>>
				<a href="<?php echo U('leads/index','by=public');?>"><img src="__PUBLIC__/img/customer_source_icon.png"/>&nbsp;<?php echo L('LEADS_POOL');?></a>
			</li>
		    <li><a href="<?php echo U('leads/analytics');?>"><img src="__PUBLIC__/img/tongji.png"/> &nbsp;<?php echo L('STATISTICS');?></a></li>
		</ul>
	</div>
	<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
	<?php if($_GET['by']!= 'public'): ?><p class="view"><b><?php echo L('VIEW_NAV');?></b>
		<img src=" __PUBLIC__/img/by_owner.png"/> <a href="<?php echo U('leads/index');?>" <?php if($_GET['by']== null): ?>class="active"<?php endif; ?>><?php echo L('ALL');?></a> |
		<a href="<?php echo U('leads/index','by=me');?>" <?php if($_GET['by']== 'me'): ?>class="active"<?php endif; ?>><?php echo L('MY_RESPONSIBLE');?></a> |
		<a href="<?php echo U('leads/index','by=sub');?>" <?php if($_GET['by']== 'sub'): ?>class="active"<?php endif; ?>><?php echo L('SUBORDINATE_RESPONSIBLE');?></a> | 
		<a href="<?php echo U('leads/index','by=subcreate');?>" <?php if($_GET['by']== 'subcreate'): ?>class="active"<?php endif; ?>><?php echo L('SUBORDINATE_CREATE');?></a> | 
		<a href="<?php echo U('leads/index','by=transformed');?>" <?php if($_GET['by']== 'transformed'): ?>class="active"<?php endif; ?>><?php echo L('CONVERTED_LEADS');?></a> 	 
		<img src="__PUBLIC__/img/by_time.png"/> 
		<a href="<?php echo U('leads/index','by=today');?>" <?php if($_GET['by']== 'today'): ?>class="active"<?php endif; ?>><?php echo L('CONTACT_TODAY');?></a> | 
		<a href="<?php echo U('leads/index','by=week');?>" <?php if($_GET['by']== 'week'): ?>class="active"<?php endif; ?>><?php echo L('CONTACT_THIS_WEEK');?></a> | 
		<a href="<?php echo U('leads/index','by=month');?>" <?php if($_GET['by']== 'month'): ?>class="active"<?php endif; ?>><?php echo L('CONTACT_THIS_MONTH');?></a> |
		<a href="<?php echo U('leads/index','by=d7');?>" <?php if($_GET['by']== 'd7'): ?>class="active"<?php endif; ?>><?php echo L('NON_CONTACT_SEVEN_DAYS');?></a> | 
		<a href="<?php echo U('leads/index','by=d15');?>" <?php if($_GET['by']== 'd15'): ?>class="active"<?php endif; ?>><?php echo L('NON_CONTACT_FIFTEEN_DAYS');?></a> | 
		<a href="<?php echo U('leads/index','by=d30');?>" <?php if($_GET['by']== 'd30'): ?>class="active"<?php endif; ?>><?php echo L('NON_CONTACT_THIRTY_DAYS');?></a> | 	
		<a href="<?php echo U('leads/index','by=add');?>" <?php if($_GET['by']== 'add'): ?>class="active"<?php endif; ?>><?php echo L('RECENTLY_CREATED');?></a> | 
		<a href="<?php echo U('leads/index','by=update');?>" <?php if($_GET['by']== 'update'): ?>class="active"<?php endif; ?>><?php echo L('RECENTLY_MODIFIED');?></a>  &nbsp;
		<a href="<?php echo U('leads/index','by=deleted');?>" <?php if($_GET['by']== 'deleted'): ?>class="active"<?php endif; ?>><img src="__PUBLIC__/img/task_garbage.png"/> <?php echo L('RECYCLE_BIN');?></a>
		</p><?php endif; ?>
	<div class="row">		
		<div class="span12">
			<ul class="nav pull-left">
				<?php if($_SESSION['admin']== 1 or $_GET['by']!= 'deleted'): ?><li class="pull-left">
					<div class="btn-group pull-left">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							&nbsp;<?php echo L('BATCH_OPERATION');?>
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a id="delete"><?php echo L('BATCH_DELETE');?></a></li>
							<?php if($_GET['by']== 'public'): ?><li><a id="batch_receive" href="javascript:void(0)"><?php echo L('BATCH_RECEIVE');?></a></li>
							<li><a id="batch_assign" href="javascript:void(0)"><?php echo L('BATCH_ASSIGN');?></a></li>
							<?php elseif($_GET['by']!= 'deleted' and $_GET['by']!= 'transformed'): ?>
							<li><a id="remove" href="javascript:void(0)"><?php echo L('BATCH_LEADS_INTO_THE_POOL');?></a></li><?php endif; ?>
						</ul>
					</div> &nbsp;&nbsp; 
					</li><?php endif; ?>
				<li class="pull-left">
					<form class="form-inline" id="searchForm"  action="" method="get">
						<ul class="nav pull-left">
							<li class="pull-left">
								<select style="width:auto" id="field" onchange="changeCondition()" name="field">
									<option class="" value=""><?php echo L('SEARCH_OPTION');?></option>
									<?php if(is_array($field_list)): $i = 0; $__LIST__ = $field_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option class="<?php echo ($v['form_type']); ?>" value="<?php echo ($v[field]); ?>" rel="leads"><?php echo ($v[name]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
									<?php if($_GET['by']!= 'public'): ?><option class="role" value="owner_role_id"><?php echo L('OWNER_ROLE');?></option><?php endif; ?>
									<option class="date" value="create_time"><?php echo L('CREATE_TIME');?></option>
									<option class="date" value="update_time"><?php echo L('UPDATE_TIME');?></option>
								</select>&nbsp;&nbsp;
							</li>
							<li id="conditionContent" class="pull-left">
								<select id="condition" style="width:auto" name="condition" onchange="changeSearch()">
									<option value="contains"><?php echo L('CONTAINS');?></option>
									<option value="not_contain"><?php echo L('NOT_CONTAIN');?></option>
									<option value="is"><?php echo L('IS');?></option>
									<option value="isnot"><?php echo L('ISNOT');?></option>						
									<option value="start_with"><?php echo L('START_WITH');?></option>
									<option value="end_with"><?php echo L('END_WITH');?></option>
									<option value="is_empty"><?php echo L('IS_EMPTY');?></option>
									<option value="is_not_empty"><?php echo L('IS_NOT_EMPTY');?></option>
								</select>&nbsp;&nbsp;
							</li>
							<li id="searchContent" class="pull-left"><input id="search" type="text" class="input-medium search-query" name="search"/>&nbsp;&nbsp;</li>
							<li class="pull-left">
								<input type="hidden" name="m" value="leads"/>
								<input type="hidden" name="act" id="act" value="index"/>
								<input type="hidden" name="daochu" id="daochu" value=""/>
								<input type="hidden" name="current_page" id="current_page" value=""/>
								<input type="hidden" name="export_limit" id="export_limit" value=""/>
								<?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?>
								<button type="submit" id="dosearch" class="btn"> <img src="__PUBLIC__/img/search.png"/><?php echo L('SEARCH');?></button> &nbsp;
							</li>
							<li class="pull-left">
								<div class="btn-group" style="margin-right:5px;">
									<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
										<img src="__PUBLIC__/img/sms.png"></i>&nbsp;<?php echo L('SEND_SMS');?>
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
					</form>
				</li>				
			</ul>
			<div class="pull-right">					
				<a href="<?php echo U('leads/add');?>" class="btn btn-primary"><i class="icon-plus"></i>&nbsp; <?php echo L('CREATE_LEADS');?></a>&nbsp;
				<div class="btn-group">
					<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"> </i>&nbsp; <?php echo L(LEADS_TOOLS);?> <span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="javascript:return(0);" id="import_excel"  class="link"><i class="icon-upload"></i><?php echo L('IMPORT_LEADS');?></a></li>
						<li><a href="javascript:void(0);" id="excelExport" class="link"><i class="icon-download"></i><?php echo L('EXPORT_LEADS');?></a></li>
					</ul>
				</div>
			</div>	
		</div>
		<div class="span12">				
			<form id="form1" action="" method="post">
			<input type="hidden" name="owner_id" id="hidden_owner_id" value="0"/>
			<input type="hidden" name="message" id="hidden_message" value="0"/>
			<input type="hidden" name="sms" id="hidden_sms" value="0"/>
			<input type="hidden" name="email" id="hidden_email" value="0"/>
			<table class="table table-hover table-striped table_thead_fixed">
				<?php if(empty($leadslist)): ?><tr><td><?php echo L('EMPTY_TPL_DATA');?></td></tr>
				<?php else: ?>
					<thead>						
						<tr id="childNodes_num">
							<th><input type="checkbox" id="check_all"/></th>
                            <?php if(is_array($field_array)): $i = 0; $__LIST__ = $field_array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(C('ismobile') == 1 and $i <= 1): ?><th><?php echo ($vo["name"]); ?></th>
								<?php elseif(C('ismobile') != 1): ?>
									<th><?php echo ($vo["name"]); ?></th><?php endif; endforeach; endif; else: echo "" ;endif; ?>
							<?php if($_GET['by']!= 'public'): ?><th><?php echo L('OWNER_ROLE');?></th><?php endif; ?>
							<th><?php echo L('CREATOR_ROLE');?></th>
							<th>
								<?php if($_GET['asc_order'] == 'create_time'): ?><a href="<?php echo U('leads/index','desc_order=create_time&'.$parameter);?>">
										<?php echo L('CREATE_TIME');?>&nbsp;<img src="__PUBLIC__/img/arrow_up.png">
									</a>
								<?php elseif($_GET['desc_order'] == 'create_time'): ?>
									<a href="<?php echo U('leads/index','asc_order=create_time&'.$parameter);?>">
										<?php echo L('CREATE_TIME');?>&nbsp;<img src="__PUBLIC__/img/arrow_down.png">
									</a>
								<?php else: ?>
									<a href="<?php echo U('leads/index','desc_order=create_time&'.$parameter);?>"><?php echo L('CREATE_TIME');?></a><?php endif; ?>
							</th>
							<?php if($_GET['asc_order'] == 'have_time' and ($_GET['by']!= 'public' && $_GET['by']!= 'deleted')): ?><th>
									<a href="<?php echo U('leads/index','desc_order=have_time&'.$parameter);?>">
										<?php echo L('DEADLINE');?>&nbsp;<img src="__PUBLIC__/img/arrow_up.png">
									</a>
								</th>
							<?php elseif($_GET['desc_order'] == 'have_time' and ($_GET['by']!= 'public' && $_GET['by']!= 'deleted')): ?>
								<th>
									<a href="<?php echo U('leads/index','asc_order=have_time&'.$parameter);?>">
										<?php echo L('DEADLINE');?>&nbsp;<img src="__PUBLIC__/img/arrow_down.png">
									</a>
								</th>
							<?php elseif($_GET['by']!= 'public' && $_GET['by']!= 'deleted'): ?>
								<th>
									<a href="<?php echo U('leads/index','desc_order=have_time&'.$parameter);?>"><?php echo L('DEADLINE');?></a>
								</th><?php endif; ?>
							<?php if($_GET['by']== 'transformed'): ?><th><?php echo L('CONVERT_TO_CUSTOMER');?></th>
								<th><?php echo L('CONVERT_TO_CONTACTS');?></th>
							<?php else: ?>
								<th><?php echo L('OPERATING');?></th><?php endif; ?>
						</tr>
					</thead>
					<tfoot>
						<tr>
								<td id="td_colspan"><?php echo ($page); ?><div style="width:130px;float:left;">每页显示<select style="width:auto;display:inline-block;" id="listrows" name="listrows" rel="<?php echo ($listrows); ?>"><option value="15">15</option><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="40">40</option><option value="50">50</option><option value="60">60</option><option value="70">70</option><option value="80">80</option><option value="90">90</option><option value="100">100</option></select>条</div>
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
</script></td>				
						</tr>
					</tfoot>
					<tbody>
						<?php if(is_array($leadslist)): $i = 0; $__LIST__ = $leadslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td>
									<input name="leads_id[]" class="check_list" type="checkbox" value="<?php echo ($vo["leads_id"]); ?>"/> 
								</td>
                                <?php if(is_array($field_array)): $i = 0; $__LIST__ = $field_array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if(C('ismobile') == 1 and $i <= 1): ?><td>
											<?php if($v['field'] == 'name'): ?><a href="<?php echo U('leads/view', 'id='.$vo['leads_id']);?>">
											<span style="color:#<?php echo ($v['color']); ?>"><?php echo ($vo[$v['field']]); ?></span></a>
											<?php elseif($v['field'] == 'nextstep_time' and $vo[$v['field']] < (strtotime(date('Y-m-d'))+86400) and $vo[$v['field']] >= 0 and $vo[$v['field']] > (strtotime(date('Y-m-d')))): ?>
												<span style="color:green"><?php echo (date('Y-m-d',$vo[$v['field']])); ?></span>
											<?php elseif($v['field'] == 'nextstep_time' and $vo[$v['field']] < strtotime(date('Y-m-d')) and $vo[$v['field']] > 0): ?>
												<span style="color:red"><?php echo (date('Y-m-d',$vo[$v['field']])); ?></span>
											<?php elseif($v['form_type'] == 'datetime' and $vo[$v['field']] > 0): ?>
												<span style="color:#<?php echo ($v['color']); ?>"><?php echo (date('Y-m-d',$vo[$v['field']])); ?></span>
											<?php else: ?>
												<span style="color:#<?php echo ($v['color']); ?>"><?php if(!empty($vo[$v['field']])): echo ($vo[$v['field']]); endif; ?></span><?php endif; ?>
										</td>
									<?php elseif(C('ismobile') != 1): ?>
										<td>
											<?php if($v['field'] == 'name'): ?><a href="<?php echo U('leads/view', 'id='.$vo['leads_id']);?>">
											<span style="color:#<?php echo ($v['color']); ?>"><?php echo ($vo[$v['field']]); ?></span></a>
											<?php elseif($v['field'] == 'nextstep_time' and $vo[$v['field']] < (strtotime(date('Y-m-d'))+86400) and $vo[$v['field']] >= 0 and $vo[$v['field']] > (strtotime(date('Y-m-d')))): ?>
												<span style="color:green"><?php echo (date('Y-m-d',$vo[$v['field']])); ?></span>
											<?php elseif($v['field'] == 'nextstep_time' and $vo[$v['field']] < strtotime(date('Y-m-d')) and $vo[$v['field']] > 0): ?>
												<span style="color:red"><?php echo (date('Y-m-d',$vo[$v['field']])); ?></span>
											<?php elseif($v['form_type'] == 'datetime' and $vo[$v['field']] > 0): ?>
												<span style="color:#<?php echo ($v['color']); ?>"><?php echo (date('Y-m-d',$vo[$v['field']])); ?></span>
											<?php else: ?>
												<span style="color:#<?php echo ($v['color']); ?>"><?php if(!empty($vo[$v['field']])): echo ($vo[$v['field']]); endif; ?></span><?php endif; ?>
										</td><?php endif; endforeach; endif; else: echo "" ;endif; ?>
								<?php if($_GET['by']!= 'public'): ?><td>
									<a class="role_info" rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a>
								</td><?php endif; ?>
								<td><?php echo ($vo["creator"]["user_name"]); ?></a></td>
								<td><?php echo (date('Y-m-d',$vo["create_time"])); ?></td>
								<?php if($_GET['by']!= 'public' && $_GET['by']!= 'deleted'): ?><td>
										<?php if($vo['days'] > 7 ): ?><font color="blue"><?php echo ($vo["days"]); echo L('DAYS');?>
										<?php elseif($vo['days'] <= 7 and $vo['days'] > 0): ?><font color="red"><?php echo ($vo["days"]); echo L('DAYS');?></font>
										<?php elseif(isset($vo['days'])): ?>
											 <font color="red"><?php echo ($vo["days"]); echo L('DAYS');?></font>
										<?php else: ?>
											 <?php echo ($vo["days"]); endif; ?>
									</td><?php endif; ?>
								<?php if($_GET['by']!= 'transformed'): ?><td>
									<a href="<?php echo U('leads/view', 'id=' . $vo['leads_id']);?>"><?php echo L('VIEW');?></a>&nbsp;<?php endif; ?>
								<?php if(($_GET['by']!= 'transformed') and ($_GET['by']!= 'deleted')): ?><a href="<?php echo U('customer/add','leads_id='.$vo['leads_id']);?>"><?php echo L('CONVERT');?></a>&nbsp;<?php endif; ?>
								<?php if(($_GET['by']!= 'transformed') and ($_GET['by']!= 'deleted')): ?><a href="<?php echo U('leads/edit', 'id=' . $vo['leads_id']);?>"><?php echo L('EDIT');?></a>&nbsp;<?php endif; ?>
								<?php if(($_GET['by']!= 'transformed') and ($_GET['by']== 'public')): ?><a href="<?php echo U('leads/receive', 'id=' . $vo['leads_id']);?>"><?php echo L('RECEIVE');?></a>&nbsp;<?php endif; ?>
								<?php if(($_GET['by']!= 'transformed') and ($_GET['by']== 'public')): ?><a rel="<?php echo ($vo['leads_id']); ?>" class="fenpei" href="javascript:void(0)"><?php echo L('ASSIGN');?></a>&nbsp;<?php endif; ?>&nbsp;
								<?php if(($_GET['by']!= 'transformed') and ($_GET['by']== 'deleted')): ?><a href="<?php echo U('leads/revert', 'id=' . $vo['leads_id']);?>"><?php echo L('RESET');?></a>&nbsp;<?php endif; ?>
								<?php if($_GET['by']!= 'transformed'): ?>&nbsp; </td><?php endif; ?>
								<?php if($_GET['by']== 'transformed'): ?><td><?php if(!empty($vo["customer_id"])): ?><a href="<?php echo U('customer/view', 'id=' . $vo['customer_id']);?>"><?php echo ($vo["customer_name"]); ?></a><?php endif; ?></td>
									<td><?php if(!empty($vo["contacts_id"])): ?><a href="<?php echo U('contacts/view', 'id=' . $vo['contacts_id']);?>"><?php echo ($vo["contacts_name"]); ?></a><?php endif; ?></td><?php endif; ?>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody><?php endif; ?>	
			</table>	
			</form>	
		</div>		
	</div>
</div>
<div class="hide" id="dialog-import" title="<?php echo L('IMPORT_DATA');?>">loading...</div>
<div class="hide" id="dialog-role-info" title="<?php echo L('USER_INFO');?>">loading...</div>
<div class="hide" id="dialog-fenpei" title="<?php echo L('LEADS_ASSIGN');?>">loading...</div>
<div class="hide" id="dialog-assign" title="<?php echo L('LEADS_ASSIGN');?>">loading...</div>
<script type="text/javascript">
var url = "<?php echo U('leads/getcurrentstatus');?>";
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
<?php if(C('ismobile') == 1): ?>width=$('.container').width() * 0.9;<?php else: ?>width=800;<?php endif; ?>
$("#dialog-import").dialog({
    autoOpen: false,
    modal: true,
	width: width,
	maxHeight: 400,
	position: ["center",100]
});
$("#dialog-role-info").dialog({
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
			
			$("#form1").attr('action', '<?php echo U("leads/batchassign");?>');
			$("#form1").submit();
			$(this).dialog("close");
		},
		"Cancel": function () {
			$(this).dialog("close");
		}
	}
});
$(function(){
<?php if($_GET['field']!= null): ?>$("#field option[value='<?php echo ($_GET['field']); ?>']").prop("selected", true);changeCondition();
	$("#condition option[value='<?php echo ($_GET['condition']); ?>']").prop("selected", true);changeSearch();
	$("#search").prop('value', '<?php echo ($_GET['search']); ?>');<?php endif; ?>
<?php if($_GET['state']): ?>new PCAS("state","city","area","<?php echo ($_GET['state']); ?>","<?php echo ($_GET['city']); ?>","<?php echo ($_GET['area']); ?>");<?php endif; ?>
	
	$("#excelExport").click(function(){
		if(count > limit_size){
			if(confirm('当前导出量过大，将分几次导出，可能需要您等待一段时间，是否继续?')){
				remainTime();
			}
		}else{
			if(confirm("<?php echo L('CONFIRM_EXPORT_LEADS');?>")){
				remainTime();
			}
		}
		/*if(confirm("<?php echo L('CONFIRM_EXPORT_LEADS');?>")){
			$("#act").val('excel');	
			$("#searchForm").submit();
		}*/
	})	
	
	$("#check_all").click(function(){
		$("input[class='check_list']").prop('checked', $(this).prop("checked"));
	});
	$('#delete').click(function(){
		if(confirm("<?php echo L('CONFIRM_DELETE');?>")){
			<?php if($_SESSION['admin']== 1 and $_GET['by']== 'deleted'): ?>$("#form1").attr('action', '<?php echo U("leads/completedelete");?>');
				$("#form1").submit();
			<?php else: ?>
				$("#form1").attr('action', '<?php echo U("leads/delete");?>');
				$("#form1").submit();<?php endif; ?>
		}
	});
	$('#remove').click(function(){
		if(confirm("<?php echo L('CONFIRM_PUT_LEADS_INTO_THE_POOL');?>")){
			$("#form1").attr('action', '<?php echo U("leads/remove");?>');
			$("#form1").submit();
		}
	});
	$('#batch_receive').click(function(){
		if(confirm("<?php echo L('CONFIRM_BATCH_RECEIVE_LEADS');?>")){
			$("#form1").attr('action', '<?php echo U("leads/batchReceive");?>');
			$("#form1").submit();
		}
	});
	$('#batch_assign').click(function(){
		$('#dialog-assign').dialog('open');
		$('#dialog-assign').load('<?php echo U("leads/assigndialog");?>');
	});
	$('#transform').click(function(){
		$("#form1").attr('action', '<?php echo U("leads/transform");?>');
		$("#form1").submit();
	});	
	$("#import_excel").click(function(){
		$('#dialog-import').dialog('open');
		$('#dialog-import').load('<?php echo U("leads/excelimport");?>');
	});
	$(".role_info").click(function(){
		$role_id = $(this).attr('rel');
		$('#dialog-role-info').dialog('open');
		$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
	});
	$(".fenpei").click(function(){
		$id = $(this).attr('rel');
		$('#dialog-fenpei').dialog('open');
		$('#dialog-fenpei').load('<?php echo U("leads/fenpei","id=");?>'+$id);
	});
	$("#check_send").click(function(){
		var id_array = new Array();
		$("input[class='check_list']:checked").each(function(){  
			id_array.push($(this).val());
		});
		if(id_array.length == 0){
			alert("<?php echo L('PLEASE_CHOOSE_THE_LEADS');?>");
		}else{
			var leads_ids = id_array.join(",");
			window.open("<?php echo U('setting/sendSms', 'model=leads&leads_ids=');?>"+leads_ids);
		}
	});
	$("#check_send_email").click(function(){
		var id_array = new Array();
		$("input[class='check_list']:checked").each(function(){  
			id_array.push($(this).val());
		});
		if(id_array.length == 0){
			alert("<?php echo L('PLEASE_CHOOSE_THE_LEADS');?>");
		}else{
			var leads_ids = id_array.join(",");
			window.open("<?php echo U('setting/sendemail', 'model=leads&leads_ids=');?>"+leads_ids);
		}
	});
	
	$("#page_send").click(function(){
		var id_array = new Array();
		$("input[class='check_list']").each(function(){
			id_array.push($(this).val());
		});
		if(id_array.length == 0){
			alert("<?php echo L('PLEASE_CHOOSE_THE_LEADS');?>");
		}else{
			var leads_ids = id_array.join(",");
			window.open("<?php echo U('setting/sendSms', 'model=leads&leads_ids=');?>"+leads_ids);
		}
	});
	$("#page_send_email").click(function(){
		var id_array = new Array();
		$("input[class='check_list']").each(function(){
			id_array.push($(this).val());
		});
		if(id_array.length == 0){
			alert("<?php echo L('PLEASE_CHOOSE_THE_LEADS');?>");
		}else{
			var leads_ids = id_array.join(",");
			window.open("<?php echo U('setting/sendemail', 'model=leads&leads_ids=');?>"+leads_ids);
		}
	});
	
	$("#all_send").click(function(){
		$("#act").val('sms');
		$("#searchForm").submit();
	});
	$("#all_send_email").click(function(){
		window.open("<?php echo U('setting/sendemail', 'model=leads&leads_ids=all');?>");
	});
	
	$("#dosearch").click(function(){
		result = checkSearchForm();
		if(result) $("#act").val('search');$("#searchForm").submit();
	});
});
<?php if($leadslist != null): ?>$nodes_num = document.getElementById("childNodes_num").children.length;
	$("#td_colspan").attr('colspan',$nodes_num);<?php endif; ?>
</script>

</body>
</html>