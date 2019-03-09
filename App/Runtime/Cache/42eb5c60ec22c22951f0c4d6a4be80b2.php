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
	<div class="page-header" style="border:none; font-size:14px; ">
		<ul class="nav nav-tabs">
		   <li class="active"><a  href="<?php echo U('log/index');?>"><img src="__PUBLIC__/img/my_log.png"/>&nbsp; <?php echo L('WORK STATEMENTS');?></a></li>
		   <li><a href="<?php echo U('log/anly');?>"><img src="__PUBLIC__/img/tongji.png"/>&nbsp; <?php echo L('ADVANCES IN STATISTICS');?></a></li>
		</ul>
	</div>
	<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
	<p class="view"><b><?php echo L('VIEW_NAV');?></b>
	<img src=" __PUBLIC__/img/by_owner.png"/> <a href="<?php echo U('log/index');?>" <?php if($_GET['by']== null): ?>class="active"<?php endif; ?>><?php echo L('ALL');?></a> |
	<a href="<?php echo U('log/index','by=me');?>" <?php if($_GET['by']== 'me'): ?>class="active"<?php endif; ?>><?php echo L('MY_LOG');?></a> |
	<a href="<?php echo U('log/index','by=sub');?>" <?php if($_GET['by']== 'sub'): ?>class="active"<?php endif; ?>><?php echo L('SUBORDINATE_LOG');?></a> &nbsp; &nbsp; &nbsp; &nbsp;
	<img src="__PUBLIC__/img/by_time.png"/> <a href="<?php echo U('log/index','by=today');?>" <?php if($_GET['by']== 'today'): ?>class="active"<?php endif; ?>><?php echo L('CREATE_TODAY');?></a> | 
	<a href="<?php echo U('log/index','by=week');?>" <?php if($_GET['by']== 'week'): ?>class="active"<?php endif; ?>><?php echo L('CREATE_THIS_WEEK');?></a> | 
	<a href="<?php echo U('log/index','by=month');?>" <?php if($_GET['by']== 'month'): ?>class="active"<?php endif; ?>><?php echo L('CREATE_THIS_MONTH');?></a> | 
	<a href="<?php echo U('log/index','by=add');?>" <?php if($_GET['by']== 'add'): ?>class="active"<?php endif; ?>><?php echo L('RECENTLY_CREATED');?></a> | 
	<a href="<?php echo U('log/index','by=update');?>" <?php if($_GET['by']== 'update'): ?>class="active"<?php endif; ?>><?php echo L('RECENTLY_MODIFIED');?></a>
	</p>
	<div class="row">
		<div class="span2 knowledgecate">
			<ul class="nav nav-list">
				<li class="active">
					<a href="javascript:void(0);"><?php echo L('VIEW_BY_LOG_CATEGORY');?></a>
				</li>
				<li><a href="<?php echo U('log/index','by='.$_GET['by']);?>" <?php if($_GET['type'] == null): ?>class="active"<?php endif; ?>><i class="icon-white icon-chevron-right"></i><?php echo L('ALL');?></a></li>
				<?php if(is_array($category_list)): $i = 0; $__LIST__ = $category_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('log/index','type='.$vo['category_id'].'&by='.$_GET['by']);?>" <?php if($_GET['type'] == $vo['category_id']): ?>class="active"<?php endif; ?>><i class="icon-chevron-right"></i><?php echo ($vo['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="span10">
			<?php if($_GET['type'] == 1 ){ ?><p style="font-size:14px;"><?php if($_GET['type'] == 1): ?><b><?php echo L('SELECT_MODULE');?></b><a <?php if($_GET['module'] == null): ?>class="active"<?php endif; ?> href="<?php echo U('Log/index','by='.$_GET['by'].'&type=1');?>"><?php echo L('ALL_MODULE');?></a> &nbsp; | &nbsp; 
					<a <?php if($_GET['module'] == 'customer'): ?>class="active"<?php endif; ?> href="<?php echo U('Log/index','r=rCustomerLog&module=customer&by='.$_GET['by'].'&type=1');?>"><?php echo L('CUSTOMER');?></a> &nbsp; | &nbsp; 
					<a <?php if($_GET['module'] == 'contacts'): ?>class="active"<?php endif; ?> href="<?php echo U('Log/index','r=rContactsLog&module=contacts&by='.$_GET['by'].'&type=1');?>"><?php echo L('CONTACTS');?></a> &nbsp; | &nbsp; 
					<a <?php if($_GET['module'] == 'business'): ?>class="active"<?php endif; ?> href="<?php echo U('Log/index','r=rBusinessLog&module=business&by='.$_GET['by'].'&type=1');?>"><?php echo L('BUSINESS');?></a> &nbsp; | &nbsp; 
					<a <?php if($_GET['module'] == 'task'): ?>class="active"<?php endif; ?> href="<?php echo U('Log/index','r=rLogTask&module=task&by='.$_GET['by'].'&type=1');?>"><?php echo L('TASK');?></a> &nbsp; | &nbsp; 
					<a <?php if($_GET['module'] == 'event'): ?>class="active"<?php endif; ?> href="<?php echo U('Log/index','r=rEventLog&module=event&by='.$_GET['by'].'&type=1');?>"><?php echo L('EVENT');?></a> &nbsp; | &nbsp; 
					<a <?php if($_GET['module'] == 'leads'): ?>class="active"<?php endif; ?> href="<?php echo U('Log/index','r=rLeadsLog&module=leads&by='.$_GET['by'].'&type=1');?>"><?php echo L('LEADS');?></a><?php endif; ?></p><?php } ?>
			<ul class="nav pull-left">		
				<li class="pull-left"><a id="delete" class="btn" style="margin-right: 8px;"><i class="icon-remove"></i>&nbsp;<?php echo L('DELETE');?></a> </li>
				<li class="pull-left">
					<form class="form-inline" id="searchForm" onsubmit="return checkSearchForm();" action="index.php" method="get">
						<ul class="nav pull-left">
							<li class="pull-left">
								<select id="field" style="width:auto" onchange="changeCondition()" name="field">
									<option class="all" value="all"><?php echo L('ANY_FIELDS');?></option>
									<option class="role" value="role_id"><?php echo L('ROLE_NAME');?></option>
									<option class="word" value="subject"><?php echo L('SUBJECT');?></option>
									<option class="word" value="content"><?php echo L('CONTENT');?></option>
									<option class="date" value="create_date"><?php echo L('CREATE_TIME');?></option>
									<option class="date" value="update_date"><?php echo L('UPDATE_TIME');?></option>
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
							<li class="pull-left"><input type="hidden" name="m" value="log"/>
							<?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?>
							<?php if($_GET['type']!= null): ?><input type="hidden" name="type" value="<?php echo ($_GET['type']); ?>"/><?php endif; ?>
							<?php if($_GET['module']!= null): ?><input type="hidden" name="module" value="<?php echo ($_GET['module']); ?>"/><?php endif; ?>
							<?php if($_GET['r']!= null): ?><input type="hidden" name="r" value="<?php echo ($_GET['r']); ?>"/><?php endif; ?>
							<button type="submit" class="btn"> <img src="__PUBLIC__/img/search.png"/>  <?php echo L('SEARCH');?></button></li>
						</ul>
					</form>
				</li>
			</ul>
			<div class="pull-right">
				<a href="<?php echo U('log/mylog_add');?>" class="btn btn-primary"><i class="icon-plus"></i>&nbsp; <?php echo L('ADD_LOG');?></a>
			</div>
		</div>
		<div class="span10">
			<form id="form1" method="post">
			<table class="table table-hover table-striped table_thead_fixed">
				<?php if($list == null): ?><tr><td><?php echo L('EMPTY_TPL_DATA');?></td></tr>
				<?php else: ?>
					<thead>
						<tr>
							<th><input id="check_all" class="control_all" type="checkbox" /></th>
							<th width="10px"></th>
							<th><?php echo L('SUBJECT');?></th>
							<th><?php echo L('ROLE_NAME');?></th>
							<th>
								<?php if($_GET['asc_order'] == 'create_date'): ?><a href="<?php echo U('log/index','desc_order=create_date&'.$parameter);?>">
										<?php echo L('CREATE_TIME');?>&nbsp;<img src="__PUBLIC__/img/arrow_up.png">
									</a>
								<?php elseif($_GET['desc_order'] == 'create_date'): ?>
									<a href="<?php echo U('log/index','asc_order=create_date&'.$parameter);?>">
										<?php echo L('CREATE_TIME');?>&nbsp;<img src="__PUBLIC__/img/arrow_down.png">
									</a>
								<?php else: ?>
									<a href="<?php echo U('log/index','desc_order=create_date&'.$parameter);?>"><?php echo L('CREATE_TIME');?></a><?php endif; ?>
							</th>
							<th><?php echo L('UPDATE_TIME');?></th>
							<th><?php echo L('OPERATING');?></th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<td colspan="7">
								<p><?php echo L('NOTE');?> <span style="color:green"><i class="icon-check"></i></span><?php echo L('HAVE_SUPERIORS_COMMENTS');?> &nbsp; &nbsp;  <span style="color:red"><i class="icon-edit"></i></span><?php echo L('NO_SUPERIORS_COMMENTS');?></p>
								<?php echo ($page); ?>
							</td>
						</tr>
					</tfoot>
					<tbody>
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							<td><input class="check_list" type="checkbox" name="log_id[]" value="<?php echo ($vo["log_id"]); ?>"/></td>
							<td><?php if($vo['is_comment']): ?><span style="color:green"><i class="icon-check"></i></span><?php else: ?><span style="color:red"><i class="icon-edit"></i></span><?php endif; ?></td>
							<td>
								<a href="<?php echo U('log/mylog_view','id='.$vo['log_id'].'&type='.$_GET['type'].'&by='.$_GET['by'].'&field='.$_GET['field'].'&condition='.$_GET['condition'].'&search='.$_GET['search']);?>">
									<?php if($vo['subject'] ): echo ($vo["subject"]); else: echo (msubstr($vo['content'],0,35)); ?>...<?php endif; ?>
								</a>
							</td>
							<td><?php if(!empty($vo["creator"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["creator"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["creator"]["user_name"]); ?></a><?php endif; ?></td>
							<td><?php echo (date("Y-m-d H:i",$vo["create_date"])); ?></td>
							<td><?php echo (date("Y-m-d H:i",$vo["update_date"])); ?></td>
							<td>
								<a href="<?php echo U('log/mylog_view','id='.$vo['log_id'].'&type='.$_GET['type'].'&by='.$_GET['by'].'&field='.$_GET['field'].'&condition='.$_GET['condition'].'&search='.$_GET['search']);?>"><?php echo L('VIEW');?></a>&nbsp;&nbsp;
								<a href="<?php echo U('log/mylog_edit','id='.$vo['log_id'].'&type='.$_GET['type']);?>"><?php echo L('EDIT');?></a>
							</td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody><?php endif; ?>
			</table>
			</form>
		</div>
	</div>
</div>
<div class="hide" id="dialog-role-info" title="<?php echo L('DIALOG_USER_INFO');?>">loading...</div>
<script type="text/javascript">
$("#dialog-role-info").dialog({
    autoOpen: false,
    modal: true,
	width: 600,
	maxHeight: 400,
	position: ["center",100]
});
$(function(){
	<?php if($_GET['field']!= null): ?>$("#field option[value='<?php echo ($_GET['field']); ?>']").prop("selected", true);changeCondition();
		$("#condition option[value='<?php echo ($_GET['condition']); ?>']").prop("selected", true);changeSearch();
		$("#search").prop('value', '<?php echo ($_GET['search']); ?>');<?php endif; ?>
	$('#delete').click(function(){
		if( $("input[class='check_list']:checked").length > 0 ){
			if(confirm("<?php echo L('CONFIRM_DELETE');?>")){
				$("#form1").attr('action', '<?php echo U("log/log_delete");?>');
				$("#form1").submit();
			}
		}else{
			alert('<?php echo L("PLEASE SELECT DELETE ITEMS");?>');
		}
	});
	$(".role_info").click(function(){
		$role_id = $(this).attr('rel');
		$('#dialog-role-info').dialog('open');
		$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
	});
	$("#check_all").click(function(){
		$("input[class='check_list']").prop('checked', $(this).prop("checked"));
	});
})
function changeContent(){
	$module = $('#module').val();
	if($module == 6){
		window.location='<?php echo U('Log/index','by='.$_GET['by'].'&type=4');?>';
	}else if($module == 1){
		window.location='<?php echo U('Log/index','r=rCustomerLog&module=customer&by='.$_GET['by'].'&type=1');?>';
	}else if($module == 2){
		window.location = '<?php echo U('Log/index','r=rContactsLog&module=contacts&by='.$_GET['by'].'&type=1');?>';
	}else if($module == 3){
		window.location='<?php echo U('Log/index','r=rBusinessLog&module=business&by='.$_GET['by'].'&type=1');?>';
	}else if($module == 4){
		window.location='<?php echo U('Log/index','r=rLogTask&module=task&by='.$_GET['by'].'&type=1');?>';
	}else if($module == 5){
		window.location='<?php echo U('Log/index','r=rEventLog&module=event&by='.$_GET['by'].'&type=1');?>';
	}
}
</script>

</body>
</html>