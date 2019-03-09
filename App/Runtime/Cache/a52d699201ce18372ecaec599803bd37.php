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
	<!-- Docs nav ================================================== -->
	<div style="margin-top:10px; font-size:14px;">
		<ul class="nav nav-tabs">
		  <li class="active">
			<a href="<?php echo U('task/index');?>"><img src="__PUBLIC__/img/renwu.png"/>&nbsp; <?php echo L('TASK');?></a>
		  </li>
		  <li><a href="<?php echo U('task/analytics');?>"><img src="__PUBLIC__/img/tongji.png"/> &nbsp;<?php echo L('STATISTICS');?></a></li>
		</ul>
	</div>
	<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
	<p class="view"><b><?php echo L('VIEW_NAV');?></b>
	<img src=" __PUBLIC__/img/by_owner.png"/> <a href="<?php echo U('task/index');?>" <?php if($_GET['by']== null): ?>class="active"<?php endif; ?>><?php echo L('ALL');?></a> |
	<a href="<?php echo U('task/index','by=me');?>" <?php if($_GET['by']== 'me'): ?>class="active"<?php endif; ?>><?php echo L('MY_TASK');?></a> | 
	<a href="<?php echo U('task/index','by=create');?>" <?php if($_GET['by']== 'create'): ?>class="active"<?php endif; ?>><?php echo L('I_ASSIGNED_TASKS');?></a>  &nbsp;  &nbsp; 
	<img src=" __PUBLIC__/img/by_status.png"/> <a href="<?php echo U('task/index','by=s1');?>" <?php if($_GET['by']== 's1'): ?>class="active"<?php endif; ?>><?php echo L('NOT_START');?></a> | 	
	<a href="<?php echo U('task/index','by=s2');?>" <?php if($_GET['by']== 's2'): ?>class="active"<?php endif; ?>><?php echo L('DELAY');?></a> | 	
	<a href="<?php echo U('task/index','by=s3');?>" <?php if($_GET['by']== 's3'): ?>class="active"<?php endif; ?>><?php echo L('ONGOING');?></a> | 	
	<a href="<?php echo U('task/index','by=s4');?>" <?php if($_GET['by']== 's4'): ?>class="active"<?php endif; ?>><?php echo L('COMPLETED');?></a> | 	
	<a href="<?php echo U('task/index','by=closed');?>" <?php if($_GET['by']== 'closed'): ?>class="active"<?php endif; ?>><?php echo L('CLOSED');?></a>  &nbsp;  &nbsp; 
	<img src="__PUBLIC__/img/by_time.png"/> <a href="<?php echo U('task/index','by=today');?>" <?php if($_GET['by']== 'today'): ?>class="active"<?php endif; ?>><?php echo L('TODAY_DEADLINE');?></a> | 
	<a href="<?php echo U('task/index','by=week');?>" <?php if($_GET['by']== 'week'): ?>class="active"<?php endif; ?>><?php echo L('THIS_WEEK_DEADLINE');?></a> | 
	<a href="<?php echo U('task/index','by=month');?>" <?php if($_GET['by']== 'month'): ?>class="active"<?php endif; ?>><?php echo L('THIS_MONTH_DEADLINE');?></a> |
	<a href="<?php echo U('task/index','by=add');?>" <?php if($_GET['by']== 'add'): ?>class="active"<?php endif; ?>><?php echo L('RECENTLY_ASSIGN');?></a> | 
	<a href="<?php echo U('task/index','by=update');?>" <?php if($_GET['by']== 'update'): ?>class="active"<?php endif; ?>><?php echo L('RECENTLY_UPDATE');?></a> &nbsp;  &nbsp; 
	<a href="<?php echo U('task/index','by=deleted');?>" <?php if($_GET['by']== 'deleted'): ?>class="active"<?php endif; ?>><img src="__PUBLIC__/img/task_garbage.png"/> <?php echo L('RECYCLE_BIN');?></a> &nbsp;  &nbsp; 
	</p>
	<div class="row"> 
		
		<div class="span12" style="height:36px;">
			<ul class="nav pull-left">
				<li class="pull-left"><?php if(session('?admin') or $_GET['by']!= 'deleted'): ?><a id="delete"  class="btn"><i class="icon-remove"></i>&nbsp;<?php echo L('DELETE');?></a><?php endif; ?>&nbsp; </li>
				<li class="pull-left">
				<form class="form-inline" id="searchForm" action="" method="get">
					<ul class="nav pull-left">
					<li class="pull-left">&nbsp; 
						<select id="field" style="width:auto" onchange="changeCondition()" name="field">
							<option class="all" value="all"><?php echo L('ANY_FIELDS');?></option>
							<option class="word" value="subject"><?php echo L('TASK_SUBJECT');?></option>
							<option class="role" value="owner_role_id"><?php echo L('EXECUTOR');?></option>
							<option class="role" value="creator_role_id"><?php echo L('CREATOR_ROLE');?></option>
							<option class="task_status" value="status"><?php echo L('TASK_STATUS');?></option>
							<option class="task_priority" value="priority"><?php echo L('PRECEDENCE');?></option>
							<option class="word" value="description"><?php echo L('DESCRIPTION');?></option>
							<option class="date" value="due_date"><?php echo L('DEADLINE');?></option>
							<option class="date" value="create_date"><?php echo L('CREATE_DATE');?></option>
							<option class="date" value="update_date"><?php echo L('UPDATE_DATE');?></option>
						</select>&nbsp;&nbsp;
					</li>
					<li id="conditionContent" class="pull-left">
						<select id="condition" style="width:auto" name="condition" onchange="changeSearch()">
							<option value="contains"><?php echo L('CONTAINS');?></option>
							<option value="is"><?php echo L('IS');?></option>
							<option value="start_with"><?php echo L('START_WITH');?></option>
							<option value="end_with"><?php echo L('END_WITH');?></option>
							<option value="is_empty"><?php echo L('IS_EMPTY');?></option>
						</select>&nbsp;&nbsp;
					</li>
					<li id="searchContent" class="pull-left">
						<input id="search" type="text" class="input-medium search-query" name="search"/>&nbsp;&nbsp;
					</li>
					<li class="pull-left">
						<input type="hidden" name="m" value="Task"/>
						<input type="hidden" name="act" id="act" value="index"/>
						<input type="hidden" name="daochu" id="daochu" value=""/>
						<input type="hidden" name="current_page" id="current_page" value=""/>
						<input type="hidden" name="export_limit" id="export_limit" value=""/>
						<?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?>
						<input type="submit" id="dosearch" class="btn" value="<?php echo L('SEARCH');?>"/>
					</li></ul>
				</form>
				</li>
			</ul>
			<div class="pull-right">
				<a href="<?php echo U('task/add');?>" class="btn btn-primary"><i class="icon-plus"></i>&nbsp; <?php echo L('CREATE_TASK');?></a>&nbsp;
				<div class="btn-group">
					<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> <i class="icon-wrench"></i>&nbsp; <?php echo L('TASK_TOOLS');?><span class="caret"></span></button>
					<ul class="dropdown-menu">
						<!--<li><a href="javascript:return(0);" id="import_excel"  class="link">导入任务</a></li>-->
						<li><a href="javascript:return(0);" id="excelExport" class="link"><i class="icon-download"></i> <?php echo L('IMPORT_TASK');?></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="span12">
			<form id="form1" action="" method="post">
				<table class="table table-hover table-striped table_thead_fixed">
					<?php if(empty($task_list)): ?><tr><td><?php echo L('EMPTY_TPL_DATA');?></td></tr>
					<?php else: ?>
						<thead>
							<tr>
								<th><input type="checkbox" id="control_all" name="control_all"/></th>
								<th width="20px">&nbsp;</th>
								<th><?php echo L('THEME');?></th>
								<th><?php echo L('RELATED_INFO');?></th>
								<th><?php echo L('EXECUTOR');?></th>	
								<?php if(C('ismobile') != 1): ?><th><?php echo L('STATUS');?></th>
								<th><?php echo L('PRECEDENCE');?></th><?php endif; ?>
								<?php if(C('ismobile') != 1 and $_GET['by']== 'deleted'): ?><th><?php echo L('DELETE_ROLE');?></th>
									<th><?php echo L('DELETE_TIME');?></th>
								<?php elseif(C('ismobile') != 1): ?>
									<th><?php echo L('CREATOR_ROLE');?></th>
									<th>
										<?php if($_GET['asc_order'] == 'due_date'): ?><a href="<?php echo U('task/index','desc_order=due_date&'.$parameter);?>">
												<?php echo L('END_DATE');?>&nbsp;<img src="__PUBLIC__/img/arrow_up.png">
											</a>
										<?php elseif($_GET['desc_order'] == 'due_date'): ?>
											<a href="<?php echo U('task/index','asc_order=due_date&'.$parameter);?>">
												<?php echo L('END_DATE');?>&nbsp;<img src="__PUBLIC__/img/arrow_down.png">
											</a>
										<?php elseif($_GET['by']== 's4'): ?>
											完成时间&nbsp;<img src="__PUBLIC__/img/arrow_down.png">
										<?php else: ?>
											<a href="<?php echo U('task/index','desc_order=due_date&'.$parameter);?>"><?php echo L('END_DATE');?></a><?php endif; ?>
									</th><?php endif; ?>
								<th><?php echo L('OPERATING');?></th>
							</tr>
						</thead>
						<tfoot>
							<tr><td colspan="10">
								<p><?php echo L('NOTE');?> <img src="__PUBLIC__/img/task_owner.png"/> <?php echo L('MY_RESPONSIBLE');?> &nbsp; <img src="__PUBLIC__/img/task_creator.png"/><?php echo L('I_ASSIGNED');?> &nbsp; </p><?php echo ($page); ?><div style="width:130px;float:left;">每页显示<select style="width:auto;display:inline-block;" id="listrows" name="listrows" rel="<?php echo ($listrows); ?>"><option value="15">15</option><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="40">40</option><option value="50">50</option><option value="60">60</option><option value="70">70</option><option value="80">80</option><option value="90">90</option><option value="100">100</option></select>条</div>
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
							</td></tr>
						</tfoot>
						<tbody>
							<?php if(is_array($task_list)): $i = 0; $__LIST__ = $task_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
									<td>
										<input name="task_id[]" class="check_list" type="checkbox" value="<?php echo ($vo["task_id"]); ?>"/>
									</td>
									<td>	
										<!-- <?php if(session('role_id') == $vo['owner_role_id'] ): ?><img src="__PUBLIC__/img/task_owner.png"/><?php elseif(session('role_id') == $vo['creator_role_id'] ): ?><img src="__PUBLIC__/img/task_creator.png"/><?php endif; ?> -->
										<?php if(session('role_id') == $vo['creator_role_id']): ?><img src="__PUBLIC__/img/task_creator.png" />
											<?php else: ?>
												<?php if(is_array($vo['owner'])): $i = 0; $__LIST__ = $vo['owner'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if(!empty($v["user_name"])): ?><input type="hidden" rel="<?php echo ($v["role_id"]); ?>" />
														<?php if(session('role_id') == $v['role_id']): ?><img src="__PUBLIC__/img/task_owner.png" /><?php endif; endif; endforeach; endif; else: echo "" ;endif; endif; ?>
																				
									</td>
									<td><a href="<?php echo U('task/view','id='.$vo['task_id']);?>"><?php echo ($vo["subject"]); ?></a></td>
									<td><?php echo ($vo["module"]["module_name"]); ?> <?php echo ($vo["module"]["name"]); ?></td>
									<td>
										<?php if(is_array($vo['owner'])): $i = 0; $__LIST__ = $vo['owner'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if(!empty($v["user_name"])): ?><a class="role_info" rel="<?php echo ($v["role_id"]); ?>" href="javascript:void(0)"><?php echo ($v["user_name"]); ?>,</a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
									</td>
									<?php if(C('ismobile') != 1): ?><td><?php echo ($vo["status"]); ?></td>
									<td><?php echo ($vo["priority"]); ?></td><?php endif; ?>
									<?php if(C('ismobile') != 1 and $_GET['by']== 'deleted'): ?><td><?php if(!empty($vo["deletor"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["deletor"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["deletor"]["user_name"]); ?></a><?php endif; ?></td>
										<td><?php if(!empty($vo["delete_time"])): echo (date("Y-m-d H:i",$vo["delete_time"])); endif; ?></td>
									<?php elseif(C('ismobile') != 1): ?>
										<td><?php if(!empty($vo["creator"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["creator"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["creator"]["user_name"]); ?></a><?php endif; ?></td>
										
										<?php if($_GET['by']== 's4'): ?><td>
												<span style="color:green;"><?php if($vo["finish_date"] != 0): echo (date("Y-m-d H:i",$vo["finish_date"])); endif; ?></span>
											</td>
										<?php else: ?>
										
										<td>
										<?php if($vo['due_date'] <= 0){ ?>
										<?php }elseif ($vo['diff_days'] > 0) { ?><img src="__PUBLIC__/img/task_mtime.png"/> <?php echo L('DAYS_LEFT', array($vo['diff_days']));?>
										<?php } elseif($vo['diff_days'] < 0) { ?>
										<img width="12px" src="__PUBLIC__/img/task_alert.png"/>&nbsp;&nbsp;<span style="color:red;"><?php echo L('OVERDUE_DAYS', array(abs($vo['diff_days'])));?></span>
										<?php } else{ ?><img src="__PUBLIC__/img/task_ltime.png"/>&nbsp;<span style="color:rgb(255, 0, 224);"><?php echo L('COMPLETED_TODAY');?></span>
										<?php } ?>
										</td><?php endif; endif; ?>
									
									
									<td>
										<a href="<?php echo U('task/view','id='.$vo['task_id']);?>"><?php echo L('VIEW');?></a>&nbsp;
										<?php if($_GET['by']!= 'deleted'): ?><a href="<?php echo U('task/edit','id='.$vo['task_id']);?>"><?php echo L('EDIT');?></a>&nbsp;
										<?php else: ?>
											<a href="<?php echo U('task/revert','id='.$vo['task_id']);?>" title="<?php echo L('RESET');?>"><?php echo L('RESET');?></a><?php endif; ?>
										 <?php if($vo['isclose'] == 0 and $_GET['by']!= 'deleted' and ($vo['creator']['role_id'] == $_SESSION['role_id'] or $_SESSION['admin']== 1 )): ?><a href="<?php echo U('task/close','id='.$vo['task_id']);?>"><?php echo L('CLOSE');?> &nbsp;</a><?php elseif($_GET['by']!= 'deleted' and $vo['isclose'] == 1 and ($vo['creator']['role_id'] == $_SESSION['role_id'] or $_SESSION['admin']== 1 ) ): ?><a href="<?php echo U('task/open','id='.$vo['task_id']);?>"><?php echo L('OPEN');?> &nbsp;</a><?php endif; ?> 
									</td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody><?php endif; ?>
				</table>
			</form>
		</div>
	</div>
</div>
<div class="hide" id="dialog-import" title="<?php echo L('IMPORT_DATA');?>">loading...</div>
<div class="hide" id="dialog-role-info" title="<?php echo L('DIALOG_USER_INFO');?>">loading...</div>
<script type="text/javascript">
var url = "<?php echo U('task/getcurrentstatus');?>";
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
function changeContent(){
	a = $("#select1  option:selected").val();
	window.location.href="<?php echo U('task/index','by=');?>"+a;
}

$(function(){
<?php if($_GET['field']!= null): ?>$("#field option[value='<?php echo ($_GET['field']); ?>']").prop("selected", true);changeCondition();
	$("#condition option[value='<?php echo ($_GET['condition']); ?>']").prop("selected", true);changeSearch();
	$("#search").prop('value', '<?php echo ($_GET['search']); ?>');<?php endif; ?>
	$("#control_all").click(function(){
		$("input[class='check_list']").prop('checked', $(this).prop("checked"));
	});
	$('#delete').click(function(){
		if(confirm("<?php echo L('CONFIRM_DELETE');?>")){
		<?php if($_SESSION['admin']== 1 and $_GET['by']== 'deleted'): ?>$("#form1").attr('action', '<?php echo U("task/completedelete");?>');
			$("#form1").submit();
		<?php else: ?>
			$("#form1").attr('action', '<?php echo U("task/delete");?>');
			$("#form1").submit();<?php endif; ?>
		}
	});
	

	$("#excelExport").click(function(){
		if(count > limit_size){
			if(confirm('当前导出量过大，将分几次导出，可能需要您等待一段时间，是否继续?')){
				remainTime();
			}
		}else{
			if(confirm("<?php echo L('CONFIRM_TO_IMPORT');?>")){
				remainTime();
			}
		}
		/*if(confirm("<?php echo L('CONFIRM_TO_IMPORT');?>")){ 
			$("#act").val('excel');	
			$("#searchForm").submit();
		}*/
	})
	
	$("#dosearch").click(function(){
		result = checkSearchForm();
		if(result) $("#act").val('search');$("#searchForm").submit();
	});
	
	$("#import_excel").click(function(){
		$('#dialog-import').dialog('open');
		$('#dialog-import').load('<?php echo U("task/excelimport");?>');
	});
	$(".role_info").click(function(){
		$role_id = $(this).attr('rel');
		$('#dialog-role-info').dialog('open');
		$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
	});
});
</script>

</body>
</html>