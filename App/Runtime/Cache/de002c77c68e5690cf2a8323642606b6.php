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
	<div class="page-header" style="border:none; font-size:14px;">
		<ul class="nav nav-tabs">
		  <li><a  href="<?php echo U('customer/index');?>"><img src="__PUBLIC__/img/customer_icon.png"/>&nbsp; <?php echo L('CUSTOMER');?></a></li>
		  <li><a  href="<?php echo U('customer/index','content=resource');?>"><img src="__PUBLIC__/img/customer_source_icon.png"/>&nbsp; <?php echo L('CUSTOMER_POOL');?></a></li>
		  <li><a href="<?php echo U('contacts/index');?>"><img src="__PUBLIC__/img/contacts_icon.png"/> &nbsp;<?php echo L('LINKMAN');?></a></li>
		  <li class="active"><a href="<?php echo U('customer/cares');?>"><img src="__PUBLIC__/img/cares_icon.png"/> &nbsp;<?php echo L('cumtomer_care');?></a></li>
		  <li><a href="<?php echo U('customer/analytics');?>"><img src="__PUBLIC__/img/tongji.png"/> &nbsp;<?php echo L('CLIENT_STATISTICS');?></a></li>
		</ul>
	</div>
	<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
	<p class="view">
		<b><?php echo L('CARE_IS_THE_VIEW');?></b>
		<img src=" __PUBLIC__/img/by_owner.png"/> 
		<a href="<?php echo U('customer/cares');?>" <?php if($_GET['by']== null): ?>class="active"<?php endif; ?>><?php echo L('ALL');?></a> |
		<a href="<?php echo U('customer/cares','by=me');?>" <?php if($_GET['by']== 'me'): ?>class="active"<?php endif; ?>><?php echo L('I_AM_IN_CHARGE_OF_THE');?></a> | 
		<a href="<?php echo U('customer/cares','by=sub');?>" <?php if($_GET['by']== 'sub'): ?>class="active"<?php endif; ?>><?php echo L('SUBORDINATES_RESPONSIBLE_FOR');?></a>  &nbsp;  &nbsp; 
		<i class="icon-th-list"></i>
		<a href="<?php echo U('customer/cares','by=email');?>" <?php if($_GET['by']== 'email'): ?>class="active"<?php endif; ?>><?php echo L('EMAIL');?></a> | 
		<a href="<?php echo U('customer/cares','by=phone');?>" <?php if($_GET['by']== 'phone'): ?>class="active"<?php endif; ?>><?php echo L('PHONE');?></a> |
		<a href="<?php echo U('customer/cares','by=message');?>" <?php if($_GET['by']== 'message'): ?>class="active"<?php endif; ?>><?php echo L('NOTE');?></a> |
		<a href="<?php echo U('customer/cares','by=other');?>" <?php if($_GET['by']== 'other'): ?>class="active"<?php endif; ?>><?php echo L('OTHER');?></a>  &nbsp;  &nbsp; 
		<img src="__PUBLIC__/img/by_time.png"/> 
		<a href="<?php echo U('customer/cares','by=today');?>" <?php if($_GET['by']== 'today'): ?>class="active"<?php endif; ?>><?php echo L('TODAY_IS_CARE');?></a> | 
		<a href="<?php echo U('customer/cares','by=week');?>" <?php if($_GET['by']== 'week'): ?>class="active"<?php endif; ?>><?php echo L('WEEK_IS_CARE');?></a> | 
		<a href="<?php echo U('customer/cares','by=month');?>" <?php if($_GET['by']== 'month'): ?>class="active"<?php endif; ?>><?php echo L('MONTH_IS_CARE');?></a>  &nbsp;
		<a href="<?php echo U('customer/cares','by=add');?>" <?php if($_GET['by']== 'add'): ?>class="active"<?php endif; ?>><?php echo L('RECENTLY_CREATED');?></a> | 
		<a href="<?php echo U('customer/cares','by=update');?>" <?php if($_GET['by']== 'update'): ?>class="active"<?php endif; ?>><?php echo L('RECENT_UPDATES');?></a>
	</p>
	<div class="row">		
		<div class="span12">
			<ul class="nav pull-left">
				<li class="pull-left"><a id="delete"  class="btn" style="margin-right: 8px;"><i class="icon-remove"></i><?php echo L('DELETE');?></a></li>
				<li class="pull-left">
				<form class="form-inline" id="searchForm" action="<?php echo U('customer/cares');?>" method="get">
				<ul class="nav pull-left">			
				<li class="pull-left" >
					<select style="width:auto" id="field" onchange="changeCondition()" name="field">
						<option class="all" value="all"><?php echo L('ALL_FIELDS');?></option>
						<option class="word" value="subject"><?php echo L('CARE_THEME');?></option>
						<option class="date" value="care_time"><?php echo L('DATE_OF_CARE');?></option>
						<option class="customer" value="customer_id"><?php echo L('CUSTUMER');?></option>
						<option class="role" value="owner_role_id"><?php echo L('OPERATOR');?></option>
						<option class="word" value="content"><?php echo L('CARE_CONTENT');?></option>
						<option class="word" value="description"><?php echo L('REMARK');?></option>
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
						<option value="is_empty"><?php echo L('MANDATORY');?></option>
						<option value="is_not_empty"><?php echo L('ISNOTEMPTY');?></option>
					</select>&nbsp;&nbsp;
				</li>
				<li id="searchContent" class="pull-left">
					<input id="search" type="text" class="input-medium search-query" name="search"/>&nbsp;&nbsp;
				</li>
				<li class="pull-left">
					<input type="hidden" name="m" value="customer"/><input type="hidden" name="a" value="cares"/>
					<?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?>
					<button type="submit" class="btn"> <img src="__PUBLIC__/img/search.png"/>  <?php echo L('SEARCH');?></button>
				</li>
				</ul>
			</form></li>
			</ul>
			<div class="pull-right">
				<a href="<?php echo U('customer/caresadd');?>" class="btn btn-primary"><i class="icon-plus">&nbsp; <?php echo L('A_NEW_CONCERN');?></i></a>
			</div>
		</div>
		<div class="span12">
			<form id="form1" action="" method="post">
				<table class="table table-hover table-striped table_thead_fixed">
					<?php if($caresList == null): ?><tr><td>----<?php echo L('TEMPORARILY_NO_DATA');?>----</td></tr>
					<?php else: ?>
					<thead>
						<tr>
							<th><input type="checkbox" id="check_all"/></th>
							<th><?php echo L('CARE_THEME');?></th>
							<th><?php echo L('CUSTOMER');?></th>
							<th>
								<?php if($_GET['asc_order'] == 'create_time'): ?><a href="<?php echo U('customer/cares','desc_order=create_time&'.$parameter);?>">
										<?php echo L('DATE_OF_CARE');?>&nbsp;<img src="__PUBLIC__/img/arrow_up.png">
									</a>
								<?php elseif($_GET['desc_order'] == 'create_time'): ?>
									<a href="<?php echo U('customer/cares','asc_order=create_time&'.$parameter);?>">
										<?php echo L('DATE_OF_CARE');?>&nbsp;<img src="__PUBLIC__/img/arrow_down.png">
									</a>
								<?php else: ?>
									<a href="<?php echo U('customer/cares','desc_order=create_time&'.$parameter);?>"><?php echo L('DATE_OF_CARE');?></a><?php endif; ?>
							</th>
							<th><?php echo L('EXECUTOR');?></th>							
							<?php if(C('ismobile') != 1): ?><th><?php echo L('FOUNDER');?></th><?php endif; ?>
							<th><?php echo L('OPERATION');?></th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<td colspan="7"><?php echo ($page); ?></td>
						</tr>
					</tfoot>
					<tbody>
						<?php if(is_array($caresList)): $i = 0; $__LIST__ = $caresList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td>
									<input name="care_id[]" class="check_list" type="checkbox" value="<?php echo ($vo["care_id"]); ?>"/>
								</td>
								<td><a href="<?php echo U('customer/caresview', 'id='.$vo['care_id']);?>"><?php echo ($vo["subject"]); ?></a></td>
								<td><?php echo ($vo["customer"]["name"]); ?></td>
								<?php if(C('ismobile') != 1): ?><td><?php echo (date('Y-m-d',$vo["care_time"])); ?></td><?php endif; ?>
								<td><?php if(!empty($vo["owner"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a><?php endif; ?></td>
								<?php if(C('ismobile') != 1): ?><td>
									<?php if(!empty($vo["creator"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["creator"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["creator"]["user_name"]); ?></a><?php endif; ?>
								</td><?php endif; ?>
								<td>
									<a href="<?php echo U('customer/caresview', 'id='.$vo['care_id']);?>"><?php echo L('CHECK');?></a>
									<a href="<?php echo U('customer/caresedit', 'id='.$vo['care_id']);?>"><?php echo L('COMPILE');?></a>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody><?php endif; ?>
				</table>
			</form>
		</div>
	</div>
</div>
<div class="hide" id="dialog-role-info" title="<?php echo L('EMPLOYEE_INFORMATION');?>">loading...</div>
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

	$("#check_all").click(function(){
		$("input[class='check_list']").prop('checked', $(this).prop("checked"));
	});
	$('#delete').click(function(){
		if(confirm("<?php echo L('ARE_YOU_SRUE_DELETE');?>")){
			$("#form1").attr('action', '<?php echo U("customer/caresdelete");?>');
			$("#form1").submit();
		}
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