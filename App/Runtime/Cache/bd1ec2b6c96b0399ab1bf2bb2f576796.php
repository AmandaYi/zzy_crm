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
		  <li class="active"><a  href="<?php echo U('contract/index');?>"><img src="__PUBLIC__/img/hetong.png"/>&nbsp; <?php echo L('CONTRACT');?></a></li>
		</ul>
	</div>
	<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
	<p class="view"><b><?php echo L('VIEW_NAV');?></b>
	<img src=" __PUBLIC__/img/by_owner.png"/> <a href="<?php echo U('contract/index');?>" <?php if($_GET['by']== null): ?>class="active"<?php endif; ?>><?php echo L('ALL');?></a> |
	<a href="<?php echo U('contract/index','by=me');?>" <?php if($_GET['by']== 'me'): ?>class="active"<?php endif; ?>><?php echo L('MY_RESPONSIBLE');?></a> | 
	<a href="<?php echo U('contract/index','by=sub');?>" <?php if($_GET['by']== 'sub'): ?>class="active"<?php endif; ?>><?php echo L('SUBORDINATE_RESPONSIBLE');?></a> | 
	<a href="<?php echo U('contract/index','by=create');?>" <?php if($_GET['by']== 'create'): ?>class="active"<?php endif; ?>><?php echo L('I_CREATED');?></a> |
	<a href="<?php echo U('contract/index','by=subcreate');?>" <?php if($_GET['by']== 'subcreate'): ?>class="active"<?php endif; ?>><?php echo L('SUBORDINATE_CREATE');?></a> &nbsp; &nbsp; &nbsp; &nbsp;
	<img src="__PUBLIC__/img/by_time.png"/> 
	<a href="<?php echo U('contract/index','by=today');?>" <?php if($_GET['by']== 'today'): ?>class="active"<?php endif; ?>><?php echo L('SIGN_UP_TODAY');?></a> | 
	<a href="<?php echo U('contract/index','by=week');?>" <?php if($_GET['by']== 'week'): ?>class="active"<?php endif; ?>><?php echo L('THIS_WEEK_SIGNED_A_CONTRACT');?></a> | 
	<a href="<?php echo U('contract/index','by=month');?>" <?php if($_GET['by']== 'month'): ?>class="active"<?php endif; ?>><?php echo L('THIS_MONTH_SIGNED_A_CONTRACT');?></a> | 
	<a href="<?php echo U('contract/index','by=add');?>" <?php if($_GET['by']== 'add'): ?>class="active"<?php endif; ?>><?php echo L('RECENTLY_CREATED');?></a> | 
	<a href="<?php echo U('contract/index','by=update');?>" <?php if($_GET['by']== 'update'): ?>class="active"<?php endif; ?>><?php echo L('RECENT_UPDATES');?></a>  &nbsp;  &nbsp;   &nbsp;  &nbsp; 
	
	<a href="<?php echo U('contract/index','by=deleted');?>" <?php if($_GET['by']== 'deleted'): ?>class="active"<?php endif; ?>><img src="__PUBLIC__/img/task_garbage.png"/> <?php echo L('RECYCLE_BIN');?></a> &nbsp; &nbsp;
	</p>
	<div class="row">
		<div class="span12">
			<ul class="nav pull-left">
				<li class="pull-left"><a id="delete"  class="btn" style="margin-right: 8px;"><i class="icon-remove"></i><?php echo L('DELETE');?></a></li>
				<li class="pull-left">
				<form class="form-inline" id="searchForm" onsubmit="return checkSearchForm();" action="" method="get">
					<ul class="nav pull-left">
						<li class="pull-left">
							<select id="field" style="width:auto" onchange="changeCondition()" name="field">
								<option class="all" value="all"><?php echo L('ANY_FIELD');?></option>
								<option class="word" value="number"><?php echo L('CONTRACT_NO');?></option>
								<option class="role" value="owner_role_id"><?php echo L('OWNER_ROLE');?></option>
								<option class="customer" value="customer_id"><?php echo L('CUSTOMER');?></option>
								<option class="date" value="create_time"><?php echo L('CREATION_DATE');?></option>
								<option class="date" value="update_time"><?php echo L('MODIFICATION_DATE');?></option>
								<option class="date" value="due_time"><?php echo L('CONTRACT_TIME');?></option>
								<option class="number" value="price"><?php echo L('QUOTATION');?></option>
								<option class="word" value="description"><?php echo L('REMARK');?></option>
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
							<input type="hidden" name="m" value="contract"/>
							<?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?>
							<button type="submit" class="btn"> <img src="__PUBLIC__/img/search.png"/>  <?php echo L('SEARCH');?></button>
						</li>
					</ul>
				</form>
				</li>
			</ul>
			<div class="pull-right">
				<a class="btn btn-primary" href="<?php echo U('contract/add');?>"><i class="icon-plus"></i>&nbsp;<?php echo L('ADD_THE_CONTRACT');?></a>
			</div>
		</div>
		<div class="span12">
			<form id="form1"  method="post">
			<table class="table table-hover table-striped table_thead_fixed">
				<?php if(!empty($list)): ?><thead>
						<tr>
							<th><input class="check_all" id="check_all" type="checkbox" /> &nbsp;</th>
							<th><?php echo L('CONTRACT_NO');?></th>
							<th><?php echo L('CUSTOMER');?></th>
							<?php if(C('ismobile') != 1): ?><th><?php echo L('CONTACTS');?></th>
							<th><?php echo L('OWNER_ROLE');?></th>
							<th>
								<?php if($_GET['asc_order'] == 'due_time'): ?><a href="<?php echo U('contract/index','desc_order=due_time&'.$parameter);?>">
										<?php echo L('SIGNING_DATE');?>&nbsp;<img src="__PUBLIC__/img/arrow_up.png">
									</a>
								<?php elseif($_GET['desc_order'] == 'due_time'): ?>
									<a href="<?php echo U('contract/index','asc_order=due_time&'.$parameter);?>">
										<?php echo L('SIGNING_DATE');?>&nbsp;<img src="__PUBLIC__/img/arrow_down.png">
									</a>
								<?php else: ?>
									<a href="<?php echo U('contract/index','desc_order=due_time&'.$parameter);?>"><?php echo L('SIGNING_DATE');?></a><?php endif; ?>
							</th>
							<th>
								<?php if($_GET['asc_order'] == 'price'): ?><a href="<?php echo U('contract/index','desc_order=price&'.$parameter);?>">
										<?php echo L('QUOTATION');?>&nbsp;<img src="__PUBLIC__/img/arrow_up.png">
									</a>
								<?php elseif($_GET['desc_order'] == 'price'): ?>
									<a href="<?php echo U('contract/index','asc_order=price&'.$parameter);?>">
										<?php echo L('QUOTATION');?>&nbsp;<img src="__PUBLIC__/img/arrow_down.png">
									</a>
								<?php else: ?>
									<a href="<?php echo U('contract/index','desc_order=price&'.$parameter);?>"><?php echo L('QUOTATION');?></a><?php endif; ?>
							</th>
							<th><?php echo L('STATUS');?></th><?php endif; ?>
							<?php if(C('ismobile') != 1 and $_GET['by']== 'deleted'): ?><th><?php echo L('DELETE_ROLE');?></th>
								<th><?php echo L('DELETE_TIME');?></th>
							<?php elseif(C('ismobile') != 1): ?>
								<th>
									<?php if($_GET['asc_order'] == 'end_date'): ?><a href="<?php echo U('contract/index','desc_order=end_date&'.$parameter);?>">
											<?php echo L('CONTRACT_OUT_OF_DATE');?>&nbsp;<img src="__PUBLIC__/img/arrow_up.png">
										</a>
									<?php elseif($_GET['desc_order'] == 'end_date'): ?>
										<a href="<?php echo U('contract/index','asc_order=end_date&'.$parameter);?>">
											<?php echo L('CONTRACT_OUT_OF_DATE');?>&nbsp;<img src="__PUBLIC__/img/arrow_down.png">
										</a>
									<?php else: ?>
										<a href="<?php echo U('contract/index','desc_order=end_date&'.$parameter);?>"><?php echo L('CONTRACT_OUT_OF_DATE');?></a><?php endif; ?>
								</th><?php endif; ?>
							
							<th><?php echo L('OPERATING');?></th>
						</tr>
					</thead>
					<tfoot>
							<tr><td colspan="11"><?php echo ($page); ?><div style="width:130px;float:left;">每页显示<select style="width:auto;display:inline-block;" id="listrows" name="listrows" rel="<?php echo ($listrows); ?>"><option value="15">15</option><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="40">40</option><option value="50">50</option><option value="60">60</option><option value="70">70</option><option value="80">80</option><option value="90">90</option><option value="100">100</option></select>条</div>
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
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td><input type="checkbox" class="check_list" name="contract_id[]" value="<?php echo ($vo["contract_id"]); ?>"/> &nbsp;
								</td>
								<td><a href="<?php echo U('contract/view','id='.$vo['contract_id']);?>"><?php echo ($vo["number"]); ?></a></td>
								<td><a href="<?php echo U('customer/view','id='.$vo['customer_id']);?>"><?php echo ($vo["customer_name"]); ?></a></td>
								<?php if(C('ismobile') != 1): ?><td><a href="<?php echo U('contacts/view','id='.$vo['contacts_id']);?>"><?php echo ($vo["contacts_name"]); ?></a></td>
								<td><?php if(!empty($vo["owner"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a><?php endif; ?></td>
								<td><?php if(!empty($vo["due_time"])): echo (date("Y-m-d H:i:s",$vo["due_time"])); endif; ?></td>
								<td><?php echo ($vo["price"]); echo L('yuan');?></td>
								<td><?php echo ($vo["status"]); ?></td><?php endif; ?>
								<?php if(C('ismobile') != 1 and $_GET['by']== 'deleted'): ?><td><?php if(!empty($vo["deletor"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["deletor"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["deletor"]["user_name"]); ?></a><?php endif; ?></td>
									<td>
										<?php if($vo["days"] < 0): ?><font color="blue"><?php echo L('DELINQUENCY_DATE');?></font>
										<?php elseif($vo["days"] <= 10 and $vo["days"] >= 0): ?><font color="red"><?php echo ($vo["days"]); ?><font>
										<?php else: echo ($vo["days"]); echo L('DAY'); endif; ?>
									</td>
								<?php elseif(C('ismobile') != 1): ?>
									<td>
										<?php if($vo["days"] < 0): ?><font color="blue"><?php echo L('DELINQUENCY_DATE');?></font>
										<?php elseif($vo["days"] > 10): ?>
										   <?php echo ($vo["days"]); echo L('DAY');?>
										<?php elseif($vo["days"] <= 10 and $vo["days"] > 0): ?>
											<font color="red"><?php echo ($vo["days"]); echo L('DAY');?><font>
										<?php elseif(isset($vo['days'])): ?>
										    <font color="red"><?php echo ($vo["days"]); echo L('DAY');?><font>
										<?php else: ?>
											<?php echo ($vo["days"]); endif; ?>
									</td><?php endif; ?>

								<td>
									<a href="<?php echo U('contract/view','id='.$vo['contract_id']);?>" title="<?php echo L('VIEW');?>"><?php echo L('VIEW');?></a>&nbsp;
									<?php if($_GET['by']!= 'deleted'): ?><a href="<?php echo U('contract/edit','id='.$vo['contract_id']);?>"><?php echo L('EDITING');?></a>
									<?php else: ?>
										<a href="<?php echo U('contract/revert','id='.$vo['contract_id']);?>" title="<?php echo L('RESET');?>"><?php echo L('RESET');?></a><?php endif; ?>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				<?php else: ?>
					<tr><td><?php echo L('EMPTY_TPL_DATA');?></td></tr><?php endif; ?>
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
	
	$("#check_all").click(function(){
		$("input[class='check_list']").prop('checked', $(this).prop("checked"));
	});
	$('#delete').click(function(){
		if(confirm('<?php echo L('ARE_YOU_SURE_YOU_WANT_TO_DELETE');?>')){
		<?php if($_SESSION['admin']== 1 and $_GET['by']== 'deleted'): ?>$("#form1").attr('action', '<?php echo U("contract/completedelete");?>');
			$("#form1").submit();
		<?php else: ?>
			$("#form1").attr('action', '<?php echo U("contract/delete");?>');
			$("#form1").submit();<?php endif; ?>
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