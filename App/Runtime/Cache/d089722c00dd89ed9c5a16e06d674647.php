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
		<div class="page-header">
			<h4><?php echo L('STRUCTURE');?> -
				<small>
				<a href="<?php echo U('user/department');?>" <?php if(ACTION_NAME == 'department' or ACTION_NAME == 'role'): ?>class="active"<?php endif; ?>><?php echo L('STRUCTURE');?></a> | 	
				<a href="<?php echo U('user/index','status=1');?>" <?php if(ACTION_NAME == 'index' and $_GET['status']== '1'): ?>class="active"<?php endif; ?>><?php echo L('USER_MGR');?></a> | 
				<a href="<?php echo U('user/index', 'status=0');?>" <?php if(ACTION_NAME == 'index' and $_GET['status']== '0'): ?>class="active"<?php endif; ?>><?php echo L('INACTIVE_USER');?></a> | 
				<a href="<?php echo U('user/index', 'status=2');?>" <?php if(ACTION_NAME == 'index' and $_GET['status']== '2'): ?>class="active"<?php endif; ?>><?php echo L('DISABLED_USERS');?></a> |
				</small></h4>
		</div>
		<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
        <div class="row">
			<form action="<?php echo U('user/delete');?>" id="user_form" method="post">
				<div class="span12">
					<ul class="nav pull-left">
						<li class="pull-left">
							<ul class="nav pull-left">					
								<li class="dropdown">
									<a href="#" class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i>&nbsp;<?php echo ($_GET['_URL_[1]']); echo L('VIEW_BY_USER_CATEGORY');?><b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="javascript:void(0);" class="link" onclick="window.location='<?php echo U('user/index');?>'"><?php echo L('ALL');?></a></li>
										<?php if(is_array($categoryList)): $i = 0; $__LIST__ = $categoryList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="javascript:void(0);" class="link" onclick="window.location='<?php echo U('user/index','id='.$vo['category_id']);?>'"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
									</ul>
								</li> 
							</ul>
						</li>
					</ul>
					<div class="pull-right">
						<?php if(session('?admin')): ?><a id="add_department" class="btn btn-primary"><i class="icon-plus"></i>&nbsp; <?php echo L('ADD_DEPARTMENT');?></a>&nbsp;
							<a id="add_role" class="btn btn-primary"><i class="icon-plus"></i>&nbsp; <?php echo L('ADD_POSITION');?></a><?php endif; ?>
						&nbsp; <a class="btn btn-primary" href="<?php echo U('user/add');?>"><i class="icon-plus"></i>&nbsp; <?php echo L('ADD_USER');?></a>
					</div>
				</div>
				<div class="span12">
					<table class="table table-hover table-striped table_thead_fixed">
						<?php if($user_list == null): ?><tr><td><?php echo L('EMPTY_TPL_DATA');?></td></tr>
						<?php else: ?>
							<thead>
								<tr>
									<th><input class="check_all" id="check_all" type="checkbox" /></th>
									<th><?php echo L('USER_NAME');?></th>
									<th><?php echo L('POSITION');?></th>
									<th><?php echo L('TELPHONE');?></th>
									<?php if(C('ismobile') != 1): ?><th><?php echo L('SEX');?></th>
									<th>Email</th>									
									<th><?php echo L('ADDRESS');?></th><?php endif; ?>
									<th><?php echo L('OPERATING');?></th>											   
								</tr>
							</thead>
							
							<tfoot>
								<tr>
									<td colspan="8">
										<p><?php echo L('TIPS');?>: &nbsp; <img style="width:16px;" src="__PUBLIC__/img/admin_img.png"/> &nbsp;<?php echo L('ADMIN_USER');?> &nbsp;  &nbsp; 
										<img style="width:16px;" src="__PUBLIC__/img/user_img.png"/> &nbsp;<?php echo L('GENERAL_USER');?></p>
										<div class="pagination">
											<?php echo ($page); ?>
										</div> <!-- End .pagination -->
										<div class="clear"></div>
									</td> 
								</tr>
							</tfoot>
						 
							<tbody>
								<?php if(is_array($user_list)): $i = 0; $__LIST__ = $user_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
									<td>
										<input class="check_list" name="user_id[]" type="checkbox" value="<?php echo ($vo["user_id"]); ?>"/>
										
									</td>
									<td><?php if($vo['category_id'] == 1): ?><img style="width:16px;" src="__PUBLIC__/img/admin_img.png"/><?php else: ?><img style="width:16px;" src="__PUBLIC__/img/user_img.png"/><?php endif; ?> &nbsp; <a href="<?php echo U('user/view','id=' . $vo['user_id']);?>"><?php echo ($vo["name"]); ?></a></td>
									<td><?php echo ($vo["department_name"]); ?> - <?php echo ($vo["role_name"]); ?></td>
									<td><?php if(C('ismobile') == 1): ?><a href="tel:<?php echo ($vo["telephone"]); ?>"><?php echo ($vo["telephone"]); ?></a><?php else: echo ($vo["telephone"]); endif; ?></td>
									<?php if(C('ismobile') != 1): ?><td><?php if($vo['sex'] == 2): echo L('FEMALE'); elseif($vo['sex'] == 0): echo L('UNKNOW'); elseif($vo['sex'] == 1): echo L('MALE'); endif; ?></td>
									<td><?php echo ($vo["email"]); ?></td>								
									<td><?php echo ($vo["address"]); ?></td><?php endif; ?>
									<td>
									<a href="<?php echo U('user/view', 'id=' . $vo['user_id']);?>"><i class="icon-search">&nbsp; <?php echo L('VIEW');?></i></a>&nbsp;
									<a href="<?php echo U('user/edit', 'id=' . $vo['user_id']);?>" title="<?php echo L('EDIT');?>"><i class="icon-edit">&nbsp; <?php echo L('EDIT');?></i></a>
									</td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							</tbody><?php endif; ?>
					</table>					
				</div>
			</form>
		</div>
	</div>
<div id="dialog-message" class="hide" title="<?php echo L('DIALOG_ASSIGN_POSITION');?>">loading...</div>
<?php if(session('?admin')): ?><div id="dialog-message2" class="hide" title="<?php echo L('DIALOG_ADD_DEPARTMENT');?>">loading...</div><?php endif; ?>
<div id="dialog-message3" class="hide" title="<?php echo L('DIALOG_ADD_POSITION');?>">loading...</div>

</body>
</html>	
<script type="text/javascript">
	$(function(){
		$("#check_all").click(function(){
			$("input[class='check_list']").prop('checked', $(this).prop("checked"));
		});
		<?php if(session('?admin')): ?>$("#add_department").click(function(){
			$('#dialog-message2').dialog('open');$('#dialog-message2').load('<?php echo U("user/department_add");?>');
		});<?php endif; ?>
		$("#add_role").click(function(){
			$('#dialog-message3').dialog('open');$('#dialog-message3').load('<?php echo U("user/role_add");?>');
		});
		$(".role").click(function(){
			$('#dialog-message').dialog('open');
			id = $(this).attr('rel');
			$('#dialog-message').load('<?php echo U("User/user_role_relation","by=user_role&id=");?>'+id);
		});
		$("#delete_user").click(function(){		
			if(confirm("<?php echo L('CONFIRM_TO_DELETE_USER');?>")){
				$('#user_form').submit();
			}
		});
	});
	function searchUser(){
		var objCategory=document.getElementById("categoryList");
		var id=objCategory.options[objCategory.selectedIndex].value;
		window.location="<?php echo U('user/index','id=');?>"+id;
		
	}
	
	function changeContent(){
		a = $("#select1  option:selected").val();
		if(a=='1'){
			window.location.href="<?php echo U('user/index');?>";
		}else if(a=='2'){
			window.location.href="<?php echo U('user/index', 'status=0');?>";
		}else if(a=='3'){
			window.location.href="<?php echo U('user/index', 'status=-1');?>";
		}else if(a=='4'){
			window.location.href="";
		}else if(a=='5'){
			window.location.href="<?php echo U('user/department'); echo U('user/role');?>";
		}
	} 
	<?php if(C('ismobile') == 1): ?>width=$('.container').width() * 0.9;<?php else: ?>width=600;<?php endif; ?>
	$('#dialog-message').dialog({
		autoOpen: false,
		modal: true,
		width: width,
		maxHeight: 400,
		position :["center",100]
	});
	<?php if(session('?admin')): ?>$('#dialog-message2').dialog({
		autoOpen: false,
		modal: true,
		width: width,
		maxHeight: 400,
		position :["center",100],
		buttons: {
			"<?php echo L('OK');?>": function () {
				$('#department_add').submit();
				$(this).dialog("close");
			},
			"<?php echo L('CANCEL');?>": function () {
				$(this).dialog("close");
			}
		}
	});<?php endif; ?>
	$('#dialog-message3').dialog({
		autoOpen: false,
		modal: true,
		width: width,
		maxHeight: 400,
		position :["center",100],
		buttons: {
			"<?php echo L('OK');?>": function () {
				$('#role_add').submit();
				$(this).dialog("close");
			},
			"<?php echo L('CANCEL');?>": function () {
				$(this).dialog("close");
			}
		}
	});
</script>