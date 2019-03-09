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
	<div class="page-header" style="border:none; font-size:14px;">
		<ul class="nav nav-tabs">
		  <li class="active">
			<a href="<?php echo U('business/index');?>"><img src="__PUBLIC__/img/shangji.png"/>&nbsp; <?php echo L('BUSINESS');?></a>
		  </li>
		  <li><a href="<?php echo U('business/analytics');?>"><img src="__PUBLIC__/img/tongji.png"/> &nbsp;<?php echo L('STATISTICS');?></a></li>
		
		</ul>
	</div>
	<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
	<p class="view"><b><?php echo L('VIEW_NAV');?></b>
		<img src=" __PUBLIC__/img/by_owner.png"/> <a href="<?php echo U('business/index');?>" <?php if($_GET['by']== null): ?>class="active"<?php endif; ?>><?php echo L('ALL');?></a> |
		<a href="<?php echo U('business/index','by=me');?>" <?php if($_GET['by']== 'me'): ?>class="active"<?php endif; ?>><?php echo L('I_AM_IN_CHARGE_OF_THE');?></a> | 
		<a href="<?php echo U('business/index','by=create');?>" <?php if($_GET['by']== 'create'): ?>class="active"<?php endif; ?>><?php echo L('I_CREATED');?></a> | 
		<a href="<?php echo U('business/index','by=sub');?>" <?php if($_GET['by']== 'sub'): ?>class="active"<?php endif; ?>><?php echo L('SUBORDINATES_RESPONSIBLE_FOR');?></a> | 
		<a href="<?php echo U('business/index','by=subcreate');?>" <?php if($_GET['by']== 'subcreate'): ?>class="active"<?php endif; ?>><?php echo L('SUBORDINATES_CREATED');?></a>&nbsp;  &nbsp; 
		<img src="__PUBLIC__/img/by_time.png"/> 
		<a href="<?php echo U('business/index','by=today');?>" <?php if($_GET['by']== 'today'): ?>class="active"<?php endif; ?>><?php echo L('TODAY_NEED_TO_CONTACT');?></a> | 
		<a href="<?php echo U('business/index','by=week');?>" <?php if($_GET['by']== 'week'): ?>class="active"<?php endif; ?>><?php echo L('THIS_WEEK_NEED_TO_CONTACT');?></a> | 
		<a href="<?php echo U('business/index','by=month');?>" <?php if($_GET['by']== 'month'): ?>class="active"<?php endif; ?>><?php echo L('THIS_MONTH_NEED_TO_CONTACT');?></a> | 
		<a href="<?php echo U('business/index','by=d7');?>" <?php if($_GET['by']== 'd7'): ?>class="active"<?php endif; ?>><?php echo L('7_did_not_contact');?></a> | 
		<a href="<?php echo U('business/index','by=d15');?>" <?php if($_GET['by']== 'd15'): ?>class="active"<?php endif; ?>><?php echo L('15_did_not_contact');?></a> | 
		<a href="<?php echo U('business/index','by=d30');?>" <?php if($_GET['by']== 'd30'): ?>class="active"<?php endif; ?>><?php echo L('30_did_not_contact');?></a> |  
		<a href="<?php echo U('business/index','by=add');?>" <?php if($_GET['by']== 'add'): ?>class="active"<?php endif; ?>><?php echo L('RECENTLY_CREATED');?></a> | 
		<a href="<?php echo U('business/index','by=update');?>" <?php if($_GET['by']== 'update'): ?>class="active"<?php endif; ?>><?php echo L('RECENT_UPDATES');?></a>&nbsp;  &nbsp; 
		<a href="<?php echo U('business/index','by=deleted');?>" <?php if($_GET['by']== 'deleted'): ?>class="active"<?php endif; ?>><img src="__PUBLIC__/img/task_garbage.png"/> <?php echo L('RECYCLE_BIN');?></a>
	</p>
	<div class="row">
		<div class="span12">
			<ul class="nav pull-left">
				<?php if($_SESSION['admin']== 1 or $_GET['by']!= 'deleted'): ?><li class="pull-left"><a id="delete"  class="btn" style="margin-right: 8px;"><i class="icon-remove"></i><?php echo L('DELETE');?></a></li><?php endif; ?>
				<li class="pull-left">
				<form class="form-inline" id="searchForm" action="" method="get">
					<ul class="nav pull-left">
						<li class="pull-left">
							<select id="field" style="width:auto" onchange="changeCondition()" name="field">
								<option class="" value="">--<?php echo L('PLEASE_SELECT_A_FILTER_CONDITION');?>--</option>
								<?php if(is_array($search_field_array)): $i = 0; $__LIST__ = $search_field_array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if($v['field'] == 'status_id'): ?><option class="business_status" value="<?php echo ($v[field]); ?>" rel="business"><?php echo ($v[name]); ?></option>
									<?php else: ?>
										<option class="<?php echo ($v['form_type']); ?>" value="<?php echo ($v[field]); ?>" rel="business"><?php echo ($v[name]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
								<option class="role" value="owner_role_id"><?php echo L('PRINCIPAL');?></option>
								<option class="date" value="create_time"><?php echo L('CREATION_TIME');?></option>
								<option class="date" value="update_time"><?php echo L('MODIFICATION_TIME');?></option>
							</select>&nbsp;&nbsp;
						</li>
						<li id="conditionContent" class="pull-left">
							<select id="condition" style="width:auto" name="condition" onchange="changeSearch()">
								<option value="contains"><?php echo L('INCLUDE');?></option>
								<option value="is"><?php echo L('YES');?></option>								
								<option value="start_with"><?php echo L('BEGINNING_CHARACTER');?></option>
								<option value="end_with"><?php echo L('TERMINATION_CHARACTER');?></option>
								<option value="is_empty"><?php echo L('MANDATORY');?></option>
							</select>&nbsp;&nbsp;
						</li>
						<li id="searchContent" class="pull-left">
							<input id="search" type="text" class="input-medium search-query" name="search"/>&nbsp;&nbsp;
						</li>
						<li class="pull-left">
							<input type="hidden" name="m" value="business"/>
							<input type="hidden" name="act" id="act" value="index"/>
							<input type="hidden" name="daochu" id="daochu" value=""/>
							<input type="hidden" name="current_page" id="current_page" value=""/>
							<input type="hidden" name="export_limit" id="export_limit" value=""/>
							<?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?>
							<button type="submit" id="dosearch" class="btn"> <img src="__PUBLIC__/img/search.png"/>   <?php echo L('SEARCH');?></button>
						</li>
					</ul>
				</form>
				</li>
			</ul>
			<div class="pull-right">
				<a class="btn btn-primary" href="<?php echo U('business/add');?>"><i class="icon-plus"></i>&nbsp; <?php echo L('ADD_THE_BUSINESS_OPPORTUNITIES');?></a>&nbsp;
				<div class="btn-group">
					<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"> </i>&nbsp; <?php echo L('BUSINESS_TOOL');?> <span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="javascript:void(0);" id="excelExport" class="link"><i class="icon-download"></i><?php echo L('EXPORT_BUSINESS_OPPORTUNITIES');?></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="span12">
			<form id="form1"  method="post">
			<table class="table table-hover table-striped table_thead_fixed">
				<?php if(!empty($list)): ?><thead>
						<tr id="childNodes_num">
							<th><input class="check_all" id="check_all" type="checkbox" /> &nbsp;</th>
							<th width="20px">&nbsp;</th>
							<?php if(is_array($field_array)): $i = 0; $__LIST__ = $field_array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(C('ismobile') == 1 and $i <= 1): ?><th><?php echo ($vo["name"]); ?></th>
								<?php elseif(C('ismobile') != 1): ?>
									<th><?php echo ($vo["name"]); ?></th><?php endif; endforeach; endif; else: echo "" ;endif; ?>
							<th><?php echo L('PRINCIPAL');?></th>
							<th><?php echo L('FOUNDER');?></th>
							<?php if((C('ismobile') != 1) and ($_GET['by']== 'deleted')): ?><th><?php echo L('DELETE_THE_PEOPLE');?></th>
								<th><?php echo L('DELETE_THE_TIME');?></th><?php endif; ?>
							<th>
								<?php if($_GET['asc_order'] == 'create_time'): ?><a href="<?php echo U('business/index','desc_order=create_time&'.$parameter);?>">
										<?php echo L('CREATION_TIME');?>&nbsp;<img src="__PUBLIC__/img/arrow_up.png">
									</a>
								<?php elseif($_GET['desc_order'] == 'create_time'): ?>
									<a href="<?php echo U('business/index','asc_order=create_time&'.$parameter);?>">
										<?php echo L('CREATION_TIME');?>&nbsp;<img src="__PUBLIC__/img/arrow_down.png">
									</a>
								<?php else: ?>
									<a href="<?php echo U('business/index','desc_order=create_time&'.$parameter);?>"><?php echo L('CREATION_TIME');?></a><?php endif; ?>
							</th>
							<th>
								<?php if($_GET['asc_order'] == 'update_time'): ?><a href="<?php echo U('business/index','desc_order=update_time&'.$parameter);?>">
										 更新时间&nbsp;<img src="__PUBLIC__/img/arrow_up.png">
									</a>
								<?php elseif($_GET['desc_order'] == 'update_time'): ?>
									<a href="<?php echo U('business/index','asc_order=update_time&'.$parameter);?>">
										更新时间&nbsp;<img src="__PUBLIC__/img/arrow_down.png">
									</a>
								<?php else: ?>
									<a href="<?php echo U('business/index','desc_order=update_time&'.$parameter);?>">更新时间</a><?php endif; ?>
							</th>
							<th>操作</th>
						</tr>
					</thead>
					<tfoot>
						<?php if($_GET['by']== 'deleted'): ?><tr><td id="td_colspan"><p><?php echo L('INFUSE');?> <img src="__PUBLIC__/img/task_owner.png"/> <?php echo L('I_AM_IN_CHARGE_OF_THE');?> &nbsp; <img src="__PUBLIC__/img/task_creator.png"/><?php echo L('I_CREATED');?> &nbsp; </p><?php echo ($page); ?><div style="width:130px;float:left;">每页显示<select style="width:auto;display:inline-block;" id="listrows" name="listrows" rel="<?php echo ($listrows); ?>"><option value="15">15</option><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="40">40</option><option value="50">50</option><option value="60">60</option><option value="70">70</option><option value="80">80</option><option value="90">90</option><option value="100">100</option></select>条</div>
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
</script></td></tr>
						<?php else: ?><tr><td id="td_colspan"><p><?php echo L('INFUSE');?> <img src="__PUBLIC__/img/task_owner.png"/> <?php echo L('I_AM_IN_CHARGE_OF_THE');?> &nbsp; <img src="__PUBLIC__/img/task_creator.png"/><?php echo L('I_CREATED');?> &nbsp; </p><?php echo ($page); ?><div style="width:130px;float:left;">每页显示<select style="width:auto;display:inline-block;" id="listrows" name="listrows" rel="<?php echo ($listrows); ?>"><option value="15">15</option><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="40">40</option><option value="50">50</option><option value="60">60</option><option value="70">70</option><option value="80">80</option><option value="90">90</option><option value="100">100</option></select>条</div>
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
</script></td></tr><?php endif; ?>
					</tfoot>
					<tbody>
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							<td><input type="checkbox" class="check_list" name="business_id[]" value="<?php echo ($vo["business_id"]); ?>"/> &nbsp;
							</td>
							<td>
								<?php if(session('role_id') == $vo['owner_role_id'] ): ?><img src="__PUBLIC__/img/task_owner.png"/><?php elseif(session('role_id') == $vo['creator_role_id'] ): ?><img src="__PUBLIC__/img/task_creator.png"/><?php endif; ?>
							</td>
							<?php if(is_array($field_array)): $i = 0; $__LIST__ = $field_array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if(C('ismobile') == 1 and $i <= 1): ?><td>
										<?php if($v['field'] == 'name'): ?><a href="<?php echo U('business/view', 'id='.$vo['business_id']);?>">
											<span style="color:#<?php echo ($v['color']); ?>"><?php echo ($vo[$v['field']]); ?></span></a><?php endif; ?>
									</td>		
								<?php elseif(C('ismobile') != 1): ?>
									<td>
										<?php if($v['field'] == 'name'): ?><a href="<?php echo U('business/view', 'id='.$vo['business_id']);?>">
											<span style="color:#<?php echo ($v['color']); ?>"><?php echo ($vo[$v['field']]); ?></span></a>
										<?php elseif($v['field'] == 'contacts_id'): ?>
											<a  href="<?php echo U('contacts/view','id='.$vo['contacts_id']);?>"><?php echo ($vo['contacts_name']); ?></a></span>
										<?php elseif($v['field'] == 'customer_id'): ?>
											<a  href="<?php echo U('customer/view','id='.$vo['customer_id']);?>"><?php echo ($vo['customer_name']); ?></a>
										<?php elseif($v['field'] == 'status_id'): ?>
											<?php echo ($vo['status_name']); ?>
										<?php elseif($v['field'] == 'nextstep_time' and $vo[$v['field']] < (strtotime(date('Y-m-d'))+86400) and $vo[$v['field']] >= 0 and $vo[$v['field']] > (strtotime(date('Y-m-d')))): ?>
											<span style="color:green"><?php echo (date('Y-m-d',$vo[$v['field']])); ?></span>
										<?php elseif($v['field'] == 'nextstep_time' and $vo[$v['field']] < strtotime(date('Y-m-d')) and $vo[$v['field']] > 0): ?>
											<span style="color:red"><?php echo (date('Y-m-d',$vo[$v['field']])); ?></span>
										<?php elseif($v['form_type'] == 'datetime' and $vo[$v['field']] > 0): ?>
											<span style="color:#<?php echo ($v['color']); ?>"><?php echo (date('Y-m-d',$vo[$v['field']])); ?></span>
										<?php else: ?>
											<span style="color:#<?php echo ($v['color']); ?>"><?php if(!empty($vo[$v['field']])): echo ($vo[$v['field']]); endif; ?></span><?php endif; ?>
									</td><?php endif; endforeach; endif; else: echo "" ;endif; ?>
							
							
							<td>
								<?php if(!empty($vo["owner"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a><?php endif; ?>
							</td>
							<td>
								<?php if(!empty($vo["creator"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["creator"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["creator"]["user_name"]); ?></a><?php endif; ?>
							</td>
							</if>
							<?php if($_GET['by']== 'deleted'): if(C('ismobile') != 1): ?><td><a class="role_info" rel="<?php echo ($vo["delete_role"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["delete_role"]["user_name"]); ?></a></td><td><?php echo (date('Y-m-d',$vo["delete_time"])); ?></td><?php endif; ?>
							<td>
								<a href="<?php echo U('business/view','id='.$vo['business_id']);?>" title="<?php echo L('CHECK');?>"><?php echo L('CHECK');?></a>&nbsp;
								<a href="<?php echo U('business/revert','id='.$vo['business_id']);?>" title="<?php echo L('REDUCTION');?>"><?php echo L('REDUCTION');?></a>
							</td>
							<?php else: ?>
							<?php if(C('ismobile') != 1): ?><td><?php echo (date('Y-m-d',$vo["create_time"])); ?></td><?php endif; ?>
							<td><?php echo (date('Y-m-d',$vo["update_time"])); ?></td>
							<td>
								<a href="<?php echo U('business/view','id='.$vo['business_id']);?>" title="<?php echo L('CHECK');?>"><?php echo L('CHECK');?></a>&nbsp;
								<a class="advance" rel="<?php echo ($vo["business_id"]); ?>" href="javascript:void(0)"><?php echo L('BOOST');?></a>&nbsp;
								<a href="<?php echo U('business/edit','id='.$vo['business_id']);?>" title="<?php echo L('COMPILE');?>"><?php echo L('COMPILE');?></a>
							</td><?php endif; ?>											
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				<?php else: ?>
					<tr><td>----<?php echo L('TEMPORARILY_NO_DATA');?>----</td></tr><?php endif; ?>
			</table>
			</form>
		</div>
	</div>
</div>
<div class="hide" id="dialog-role-info" title="<?php echo L('EMPLOYEE_INFORMATION');?>">loading...</div>
<div class="hide" id="dialog-advance" title="<?php echo L('ADVANCE_INFORMATION');?>">loading...</div>
<script type="text/javascript">
var url = "<?php echo U('business/getcurrentstatus');?>";
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
$("#dialog-advance").dialog({
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
$(function(){
	$("#check_all").click(function(){
		$("input[class='check_list']").prop('checked', $(this).prop("checked"));
	});
});
function changeContent(){
	a = $("#select1  option:selected").val();
	window.location.href="<?php echo U('business/index', 'by=');?>"+a;
}
$(".advance").click(function(){
	id = $(this).attr('rel');
	$('#dialog-advance').dialog('open');
	$('#dialog-advance').load('<?php echo U("business/advance","id=");?>'+id);
});
$(function(){

<?php if($_GET['field']!= null): ?>$("#field option[value='<?php echo ($_GET['field']); ?>']").prop("selected", true);changeCondition();
	$("#condition option[value='<?php echo ($_GET['condition']); ?>']").prop("selected", true);changeSearch();
	$("#search").prop('value', '<?php echo ($_GET['search']); ?>');
	<?php if($_GET['state']): ?>new PCAS("state","city","area","<?php echo ($_GET['state']); ?>","<?php echo ($_GET['city']); ?>","<?php echo ($_GET['area']); ?>");<?php endif; endif; ?>
	$("#excelExport").click(function(){
		if(count > limit_size){
			if(confirm('当前导出量过大，将分几次导出，可能需要您等待一段时间，是否继续?')){
				remainTime();
			}
		}else{
			if(confirm("<?php echo L('ARE_YOU_SURE_YOU_WANT_TO_EXPORT_THE_BUSINESS_OPPORTUNITIES');?>")){
				remainTime();
			}
		}
		/* if(confirm("<?php echo L('ARE_YOU_SURE_YOU_WANT_TO_EXPORT_THE_BUSINESS_OPPORTUNITIES');?>")){
			$("#act").val('excel');	
			$("#searchForm").submit();
		} */
	})	
	
	$("#dosearch").click(function(){
		result = checkSearchForm();
		if(result) $("#act").val('search');$("#searchForm").submit();
	});
	
	$('#delete').click(function(){
		if(confirm('<?php echo L('ARE_YOU_SURE_YOU_WANT_TO_DELETE');?>')){
		<?php if($_SESSION['admin']== 1 and $_GET['by']== 'deleted'): ?>$("#form1").attr('action', '<?php echo U("business/completedelete");?>');
			$("#form1").submit();
		<?php else: ?>
			$("#form1").attr('action', '<?php echo U("business/delete");?>');
			$("#form1").submit();<?php endif; ?>
		}
	});
	$(".role_info").click(function(){
		$role_id = $(this).attr('rel');
		$('#dialog-role-info').dialog('open');
		$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
	});
})
<?php if($list != null): ?>$nodes_num = document.getElementById("childNodes_num").children.length;
	$("#td_colspan").attr('colspan',$nodes_num);<?php endif; ?>
</script>

</body>
</html>