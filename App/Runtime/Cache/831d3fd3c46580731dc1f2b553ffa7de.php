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
	<link rel="stylesheet" href="__PUBLIC__/css/treeview/jquery.treeview.css" type="text/css">
	<script type="text/javascript" src="__PUBLIC__/js/treeview/jquery.treeview.js"></script>
	<script type="text/javascript" src="__PUBLIC__/js/treeview/jquery.treeview.edit.js"></script>
	
	<script type="text/javascript">
		$(function() {
			$("#browser").treeview();
			$("#add").click(function() {
				var branches = $("<li><span class='folder'>New Sublist</span><ul>" +
					"<li><span class='file'>Item1</span></li>" +
					"<li><span class='file'>Item2</span></li></ul></li>").appendTo("#browser");
				$("#browser").treeview({
					add: branches
				});
				branches = $("<li class='closed'><span class='folder'>New Sublist</span><ul><li><span class='file'>Item1</span></li><li><span class='file'>Item2</span></li></ul></li>").prependTo("#folder21");
				$("#browser").treeview({
					add: branches
				});
			});
		})
	</script>
	
	<style type="text/css">
.ztree li span.button.add {margin-left:2px; margin-right: -1px; background-position:-144px 0; vertical-align:top; *vertical-align:middle}
	</style>
	<div class="container">
		<div class="page-header">
			<h4><?php echo L('STRUCTURE');?> -
				<small>
				<a href="<?php echo U('user/department');?>" <?php if(ACTION_NAME == 'department' or ACTION_NAME == 'role'): ?>class="active"<?php endif; ?>><?php echo L('STRUCTURE');?></a> | 	
				<a href="<?php echo U('user/index','status=1');?>" <?php if(ACTION_NAME == 'index' and $_GET['status']!= '0'): ?>class="active"<?php endif; ?>><?php echo L('USER_MGR');?></a> | 
				<a href="<?php echo U('user/index', 'status=0');?>" <?php if(ACTION_NAME == 'index' and $_GET['status']== '0'): ?>class="active"<?php endif; ?>><?php echo L('INACTIVE_USER');?></a>
				</small>
			</h4>
		</div>
		<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
		
		<div class="row">
			<form action="<?php echo U('user/department_delete');?>" method="post" onsubmit="return confirm('<?php echo L('CONFIRM_DELETE');?>')">
			<div class="span12">
				<div class="bulk-actions align-left">
					<a href="<?php echo U('user/department');?>" <?php if(ACTION_NAME == 'department'): ?>class="active"<?php endif; ?>><?php echo L('DEPARTMENT_TREE');?></a> | 
					<a href="<?php echo U('user/role');?>" <?php if(ACTION_NAME == 'role'): ?>class="active"<?php endif; ?>><?php echo L(SUPERIOR_SUBORDINATE_TREE);?></a>
					<div class="pull-right">
						<?php if(session('?admin')): ?><a id="add_department" class="btn btn-primary"><i class="icon-plus"></i>&nbsp; <?php echo L('ADD_DEPARTMENT');?></a>&nbsp;
							<a id="add_role" class="btn btn-primary"><i class="icon-plus"></i>&nbsp; <?php echo L('ADD_POSITION');?></a><?php endif; ?>
						&nbsp; <a class="btn btn-primary" href="<?php echo U('user/add');?>"><i class="icon-plus"></i>&nbsp; <?php echo L('ADD_USER');?></a>
					</div>
				</div>
			</div>
			<div class="span12">
				<?php echo ($tree_code); ?>
			</div> 
		</div>
		</form>
	</div>
	<div id="dialog-message2" class="hide" title="<?php echo L('ADD_DEPARTMENT');?>">loading...</div>	
	<div id="dialog-message3" class="hide" title="<?php echo L('ADD_POSITION');?>">loading...</div>	
	<div id="dialog-authorize" class="hide" title="<?php echo L('MODULE_ACCESS_MGR');?>">loading...</div>	
	<div id="dialog-message5" class="hide" title="<?php echo L('USER_MGR');?>">loading...</div>	
	<div id="dialog-message6" class="hide" title="<?php echo L('EDIT_POSITION_INFO');?>">loading...</div>	

<script type="text/javascript">
	<?php if(C('ismobile') == 1): ?>width=$('.container').width() * 0.9;<?php else: ?>width=600;<?php endif; ?>
	$('#dialog-message2').dialog({
		autoOpen: false,
		modal: true,
		width: width,
		maxHeight:400,
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
	});	
	$('#dialog-message3').dialog({
		autoOpen: false,
		modal: true,
		width: width,
		maxHeight:400,
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
	$('#dialog-authorize').dialog({
		autoOpen: false,
		modal: true,
		width: width,
		maxHeight:400,
		position :["center",100],
		buttons: {}
	});
	$('#dialog-message5').dialog({
		autoOpen: false,
		modal: true,
		width: width,
		maxHeight:400,
		position :["center",100]
	});
	$('#dialog-message6').dialog({
		autoOpen: false,
		modal: true,
		width: width,
		maxHeight:400,
		position :["center",100],
		buttons: {
			"<?php echo L('OK');?>": function () {
				var $position_id = $('#position_id').val();
				var $name =  $('#name').val();
				var $description = $('#description').val();
				var $department_id = $('#department_id  option:selected').val();
				var $parent_id =  $('#parent_id  option:selected').val();
				
				$.get('<?php echo U("user/roleedit");?>',{position_id:$position_id,name:$name,description:$description,department_id:$department_id,parent_id:$parent_id, auth:1}, function(data){
					alert(data.data);
					$('#dialog-authorize').dialog('close');
				}, 'json');
			
				$(this).dialog("close");
			},
			"<?php echo L('CANCEL');?>": function () {
				$(this).dialog("close");
			}
		}
	});
	
	$(function(){
		$(".treeview .file").hover(function(){
			rel = $(this).attr('rel');
			$('#control_file' + rel).show();
		},function(){
			rel = $(this).attr('rel');
			$('#control_file' + rel).hide();
		});
		$(".treeview .folder").hover(function(){
			rel = $(this).attr('rel');
			$('#control_folder' + rel).show();
		},function(){
			rel = $(this).attr('rel');
			$('#control_folder' + rel).hide();
		});
		$("#check_all").click(function(){
			$("input[class='check_list']").prop('checked', $(this).prop("checked"));
		});
		$("#add_department").click(function(){
			$('#dialog-message2').dialog('open');$('#dialog-message2').load('<?php echo U("user/department_add");?>');
		});
		$("#add_role").click(function(){
			$('#dialog-message3').dialog('open');$('#dialog-message3').load('<?php echo U("user/role_add");?>');
		});
		$(".user").click(function(){
			$('#dialog-message5').dialog('open');
			$id = $(this).attr('rel');
			$('#dialog-message5').load('<?php echo U("user/user_role_relation","by=role_user&role_id=");?>'+$id);
		});
		$(".permission").click(function(){
			$('#dialog-authorize').dialog('open');
			id = $(this).attr('rel');
			$('#dialog-authorize').load('<?php echo U("permission/user_authorize","position_id=");?>'+id);
		});
		$(".position_edit").click(function(){
			$('#dialog-message6').dialog('open');
			id = $(this).attr('rel');
			$('#dialog-message6').load('<?php echo U("user/roleedit","id=");?>'+id);
		});
		$(".position_delete").click(function(){
			if(confirm("<?php echo L('CONFIRM_TO_DELETE_POSITION');?>")){
				id = $(this).attr('rel');
				window.location="<?php echo U('user/role_delete','id=');?>"+id;
			}
		});
	});
	function changeContent(){
		a = $("#select1  option:selected").val();
		if(a=='1'){
			window.location.href="<?php echo U('user/index');?>";
		}else if(a=='2'){
			window.location.href="<?php echo U('user/index', 'status=0');?>";
		}else if(a=='3'){
			window.location.href="<?php echo U('user/index', 'status=-1');?>";
		}else if(a=='4'){
			window.location.href="<?php echo U('user/department');?>";
		}else if(a=='5'){
			window.location.href="<?php echo U('user/role');?>";
		}
	} 
	
	function deleteRole(id,name){
		var v = confirm("<?php echo L('CONFIRM_TO_DELETE_POSTION_PARAM');?>");
		if(v == true){
			window.location="<?php echo U('User/role_delete','id=');?>"+id;
		}
	}
	function searchDepartment(){
		var objCategory=document.getElementById("department");
		var id=objCategory.options[objCategory.selectedIndex].value;
		window.location="<?php echo U('User/role','department_id=');?>"+id;
	}
	
</script>

</body>
</html>