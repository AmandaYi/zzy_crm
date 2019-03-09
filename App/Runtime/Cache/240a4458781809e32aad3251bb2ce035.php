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
	<div class="page-header">
		<h4><?php echo L('EVENT');?></h4>
	</div>
	<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
	<p class="view"><b><?php echo L('VIEW_NAV');?></b>
	<img src=" __PUBLIC__/img/by_owner.png"/>  <a href="<?php echo U('event/index');?>" <?php if($_GET['by']== null): ?>class="active"<?php endif; ?>><?php echo L('ALL');?></a> |
	<a href="<?php echo U('event/index','by=me');?>" <?php if($_GET['by']== 'me'): ?>class="active"<?php endif; ?>><?php echo L('MY_RESPONSIBLE');?></a> |
	<a href="<?php echo U('event/index','by=sub');?>" <?php if($_GET['by']== 'sub'): ?>class="active"<?php endif; ?>><?php echo L('SUBORDINATE_RESPONSIBLE');?></a> | 
	<a href="<?php echo U('event/index','by=create');?>" <?php if($_GET['by']== 'create'): ?>class="active"<?php endif; ?>><?php echo L('MY_CREATE');?></a> | 
	<a href="<?php echo U('event/index','by=not_close');?>" <?php if($_GET['by']== 'not_close'): ?>class="active"<?php endif; ?>><?php echo L('NOTCLOSE');?></a>| 
	<a href="<?php echo U('event/index','by=isclose');?>" <?php if($_GET['by']== 'isclose'): ?>class="active"<?php endif; ?>><?php echo L('CLOSED');?></a> &nbsp; &nbsp; &nbsp; &nbsp;
	<img src="__PUBLIC__/img/by_time.png"/> 
	<a href="<?php echo U('event/index','by=today');?>" <?php if($_GET['by']== 'today'): ?>class="active"<?php endif; ?>><?php echo L('TODAY_SCHEDULE');?></a> | 
	<a href="<?php echo U('event/index','by=week');?>" <?php if($_GET['by']== 'week'): ?>class="active"<?php endif; ?>><?php echo L('WEEK_SCHEDULE');?></a> | 
	<a href="<?php echo U('event/index','by=month');?>" <?php if($_GET['by']== 'month'): ?>class="active"<?php endif; ?>><?php echo L('MONTH_SCHEDULE');?></a> | 
	<a href="<?php echo U('event/index','by=add');?>" <?php if($_GET['by']== 'add'): ?>class="active"<?php endif; ?>><?php echo L('RECENTLY_CREATED');?></a> | 
	<a href="<?php echo U('event/index','by=update');?>" <?php if($_GET['by']== 'update'): ?>class="active"<?php endif; ?>><?php echo L('RECENT_UPDATES');?></a>
	</p>
	<div class="row">
		<div class="span12">
			<ul class="nav pull-left">
				<li class="pull-left"><a id="delete"  class="btn" style="margin-right:8px;"><i class="icon-remove"></i><?php echo L('DELETE');?></a></li>
				<li class="pull-left">
					<form class="form-inline" id="searchForm" action="" method="get">
					<ul class="nav pull-left">
						<li class="pull-left">
							<select style="width:auto" name="field" id="field" onchange="changeCondition()">
								<option class="all" value="all"><?php echo L('ANY_FIELD');?></option>
								<option class="word" value="subject"><?php echo L('HEADLINE');?></option>
								<option class="word" value="description"><?php echo L('CONTENT');?></option>
								<option class="role" value="owner_role_id"><?php echo L('OWNER_ROLE');?></option>
								<option class="date" value="start_date"><?php echo L('START_TIME');?></option>
								<option class="date" value="end_date"><?php echo L('END_TIME');?></option>
								<option class="date" value="create_date"><?php echo L('CREATE_TIME');?></option>
								<option class="date" value="update_date"><?php echo L('UPDATE_TIME');?></option>
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
							<input type="hidden" name="m" value="Event"/>
							<input type="hidden" name="act" id="act" value="index"/>
							<input type="hidden" name="daochu" id="daochu" value=""/>
							<input type="hidden" name="current_page" id="current_page" value=""/>
							<input type="hidden" name="export_limit" id="export_limit" value=""/>
							<?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?>
							<button type="submit" id="dosearch" class="btn"> <img src="__PUBLIC__/img/search.png"/>  <?php echo L('SEARCH');?></button>
						</li>
					</ul>
					</form>
				</li>
			</ul>
			<div class="pull-right">
				<a href="<?php echo U('event/add');?>" class="btn btn-primary"><i class="icon-plus"></i> &nbsp;<?php echo L('NEW_SCHEDULE');?></a>&nbsp;
				<div class="btn-group">
					<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"></i>  &nbsp;<?php echo L('SCHEDULING_TOOLS');?><span class="caret"></span></button>
					<ul class="dropdown-menu">
						<!--<li><a href="javascript:return(0);" id="import_excel"  class="link">导入日程</a></li>-->
						<li><a href="javascript:return(0);" id="excelExport" class="link"><i class="icon-download"></i>&nbsp;<?php echo L('EXPORT_THE_SCHEDULE');?></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="span12">
			<form id="form1" method="post">
				<table class="table table-hover table-striped table_thead_fixed"> 
					<?php if($eventlist == null): ?><tr><td><?php echo L('EMPTY_TPL_DATA');?></td></tr>
					<?php else: ?>
					<thead> 
						<tr>
							<th><input type="checkbox" name="check_all" id="check_all"/></th>
							<th><?php echo L('THEME');?></th>
							<th>
								<?php if($_GET['asc_order'] == 'start_date'): ?><a href="<?php echo U('event/index','desc_order=start_date&'.$parameter);?>">
										<?php echo L('START_DATE_TIME');?>&nbsp;<img src="__PUBLIC__/img/arrow_up.png">
									</a>
								<?php elseif($_GET['desc_order'] == 'start_date'): ?>
									<a href="<?php echo U('event/index','asc_order=start_date&'.$parameter);?>">
										<?php echo L('START_DATE_TIME');?>&nbsp;<img src="__PUBLIC__/img/arrow_down.png">
									</a>
								<?php else: ?>
									<a href="<?php echo U('event/index','desc_order=start_date&'.$parameter);?>"><?php echo L('START_DATE_TIME');?></a><?php endif; ?>
							</th> 
							<th>
								<?php if($_GET['asc_order'] == 'end_date'): ?><a href="<?php echo U('event/index','desc_order=end_date&'.$parameter);?>">
										<?php echo L('END_DATE_TIME');?>&nbsp;<img src="__PUBLIC__/img/arrow_up.png">
									</a>
								<?php elseif($_GET['desc_order'] == 'end_date'): ?>
									<a href="<?php echo U('event/index','asc_order=end_date&'.$parameter);?>">
										<?php echo L('END_DATE_TIME');?>&nbsp;<img src="__PUBLIC__/img/arrow_down.png">
									</a>
								<?php else: ?>
									<a href="<?php echo U('event/index','desc_order=end_date&'.$parameter);?>"><?php echo L('END_DATE_TIME');?></a><?php endif; ?>
							</th>
							<th><?php echo L('SCHEDULE_SITE');?></th>
							<th><?php echo L('OWNER_ROLE');?></th>
							<th><?php echo L('OPERATING');?></th>
						</tr>
					</thead>
					<tfoot>
						<tr><td colspan="7"><?php echo ($page); ?><div style="width:130px;float:left;">每页显示<select style="width:auto;display:inline-block;" id="listrows" name="listrows" rel="<?php echo ($listrows); ?>"><option value="15">15</option><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="40">40</option><option value="50">50</option><option value="60">60</option><option value="70">70</option><option value="80">80</option><option value="90">90</option><option value="100">100</option></select>条</div>
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
					</tfoot>
					<tbody>
						<?php if(is_array($eventlist)): $i = 0; $__LIST__ = $eventlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td>
									<input name="event_id[]" class="check_list" type="checkbox" value="<?php echo ($vo["event_id"]); ?>"/>
								</td>
								<td><a href="<?php echo U('event/view', 'id='.$vo['event_id']);?>" title="<?php echo ($vo["subject"]); ?>"><?php echo cutString($vo['subject'],20);?></a></td>
								<?php if(C('ismobile') != 1): ?><td><?php if(!empty($vo["start_date"])): echo (date("Y-m-d",$vo["start_date"])); endif; ?></td>
								<td><?php if(!empty($vo["end_date"])): echo (date("Y-m-d",$vo["end_date"])); endif; ?></td><?php endif; ?>
								<td><?php echo ($vo["venue"]); ?></td>
								<td><?php if(!empty($vo["owner"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a><?php endif; ?></td>
								<td> <a href="<?php echo U('event/view', 'id='.$vo['event_id']);?>"><?php echo L('VIEW');?></a> &nbsp;
									<a href="<?php echo U('event/edit', 'id='.$vo['event_id']);?>"><?php echo L('EDITING');?></a> &nbsp;
									<?php if($_GET['by']== isclose): ?><a href="<?php echo U('event/open', 'id='.$vo['event_id']);?>"><?php echo L('OPEN');?></a><?php else: ?><a href="<?php echo U('event/close', 'id='.$vo['event_id']);?>" /><?php echo L('CLOSE');?></a><?php endif; ?>
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
var url = "<?php echo U('event/getcurrentstatus');?>";
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
function changeContent(){
	a = $("#select1  option:selected").val();
	window.location.href="<?php echo U('event/index', 'by=');?>"+a;
}
$(function(){
<?php if($_GET['field']!= null): ?>$("#field option[value='<?php echo ($_GET['field']); ?>']").prop("selected", true);changeCondition();
	$("#condition option[value='<?php echo ($_GET['condition']); ?>']").prop("selected", true);changeSearch();
	$("#search").prop('value', '<?php echo ($_GET['search']); ?>');<?php endif; ?>
	$("#check_all").click(function(){
		$("input[class='check_list']").prop('checked', $(this).prop("checked"));
	});
	
	$("#excelExport").click(function(){
		if(count > limit_size){
			if(confirm('当前导出量过大，将分几次导出，可能需要您等待一段时间，是否继续?')){
				remainTime();
			}
		}else{
			if(confirm("<?php echo L('CONFIRM_EXPORT_EVENT');?>")){
				remainTime();
			}
		}
		/*if(confirm("<?php echo L('CONFIRM_EXPORT_EVENT');?>")){ 
			$("#act").val('excel');	
			$("#searchForm").submit();
		}*/
	})
	
	$("#dosearch").click(function(){
		result = checkSearchForm();
		if(result) $("#act").val('search');$("#searchForm").submit();
	});
	
	$('#delete').click(function(){
		if(confirm('<?php echo L('CONFIRM_TO_DELETE');?>')){
			$("#form1").attr('action', '<?php echo U("event/delete");?>');
			$("#form1").submit();
		}
	});
	$("#import_excel").click(function(){
		$('#dialog-import').dialog('open');
		$('#dialog-import').load('<?php echo U("event/excelimport");?>');
	});
	$(".role_info").click(function(){
		$role_id = $(this).attr('rel');
		$('#dialog-role-info').dialog('open');
		$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
	});
})
</script>

</body>
</html>