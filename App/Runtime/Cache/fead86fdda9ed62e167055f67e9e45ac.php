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
<style>
table tbody tr{cursor:move;}
</style>
<script type="text/javascript" src="__PUBLIC__/js/jscolor/jscolor.js"></script>
<div class="container">
	<div class="page-header">
		<h4><?php echo L('SYSTEM_SETTING');?></h4>
	</div>
	<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
	<div class="tabbable">
		<ul class="nav nav-tabs">
			<li><a href="<?php echo U('setting/defaultInfo');?>"><?php echo L('BASIC_SYSTEM_SETTING');?></a></li>
			<li><a href="<?php echo U('setting/smtp');?>"><?php echo L('SMTP_SETTING');?></a></li>
			<li class="active"><a href="<?php echo U('setting/fields');?>"><?php echo L('CUSTOMIZING_FIELDS_SETTING');?></a></li>		
			<li><a href="<?php echo U('navigation/setting');?>"><?php echo L('SYSTEM_NAVIGATION_SETTING');?></a></li>

		</ul>
	</div>
	<div class="row">
		<div class="span2 knowledgecate">
			<ul class="nav nav-list">
				<li class="active">
					<a href="javascript:void(0);" onclick="color_box()"><?php echo L('CUSTOMIZING_FIELDS_SETTING');?></a>
				</li>
				<li><a <?php if($_GET['model'] == 'customer' || $_GET['model'] == ''): ?>class="active"<?php endif; ?> href="<?php echo U('setting/fields', 'model=customer');?>"><i class="icon-chevron-right"></i><?php echo L('CUSTOMER_FIELDS_SETTING');?></a></li>
				<li><a <?php if($_GET['model'] == 'business'): ?>class="active"<?php endif; ?>  href="<?php echo U('setting/fields', 'model=business');?>"><i class="icon-chevron-right"></i><?php echo L('BUSINESS_FIELDS_SETTING');?></a></li>
				<li><a <?php if($_GET['model'] == 'product'): ?>class="active"<?php endif; ?>  href="<?php echo U('setting/fields', 'model=product');?>"><i class="icon-chevron-right"></i><?php echo L('PRODUCT_FIELDS_SETTING');?></a></li>
				<li><a <?php if($_GET['model'] == 'leads'): ?>class="active"<?php endif; ?>  href="<?php echo U('setting/fields', 'model=leads');?>"><i class="icon-chevron-right"></i><?php echo L('CLUES_TO_THE_FIELDS');?></a></li>
				<li><a href="<?php echo U('knowledge/category');?>"><i class="icon-chevron-right"></i><?php echo L('KNOWLEDGE_CATEGORY');?></a></li>
			</ul>
		</div>
        <form action="<?php echo U('setting/fielddelete');?>" method="post" onSubmit="return checkForm()">
            <div class="span10">
                <p><div class="bulk-actions align-left"> 
                    <button type="submit" class="btn"><i class="icon-remove"></i>&nbsp;<?php echo L('DELETE');?></button>&nbsp;
					<button class="btn" type="button" id="sort_btn"><span class="icon-file"></span>&nbsp;<?php echo L('SAVE_ORDER');?></button>&nbsp;
					
                    <div class="pull-right">
                        <button class="btn btn-primary" type="button" id="add"><i class="icon-plus"></i>&nbsp; <?php echo L('ADD_FIELDS');?></button>
                    </div>
                </div></p>
            </div>
			<div class="span10">
				<table class="table table-hover table-striped table_thead_fixed" width="95%" border="0" cellspacing="1" cellpadding="0">
					<?php if(!empty($fields)): ?><thead>
						<tr>
							<th width="10%"><input type="checkbox" name="check_all" id="check_all" class="check_all"/> &nbsp;</th>
							<th width="20%"><?php echo L('LABEL_NAME');?></th>
							<th width="20%"><?php echo L('FIELDS_NAME');?></th>
							<th width="20%"><?php echo L('FIELDS_TYPE');?></th>
							<th width="30%"><?php echo L('OPERATING');?></th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<td colspan="5">
								<div class="span8"><span style="color: rgb(243, 40, 12);"><?php echo L('HINT_FIELDS');?></span></div>
							</td>
						</tr>
					</tfoot>
					<tbody>
						<?php if(is_array($fields)): $i = 0; $__LIST__ = $fields;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td><input type="checkbox" class="list" name="field_id[]" value="<?php echo ($vo["field_id"]); ?>"/>
								</td>
								<td><?php echo ($vo["name"]); ?></td>
								<td><?php echo ($vo["field"]); ?></td>
								<td>
									<?php if($vo['form_type'] == 'box'): echo L('SELECTED');?>(<?php echo ($vo["form_type"]); ?>)
									<?php elseif($vo['form_type'] == 'editor'): echo L('THE_EDITOR');?>(<?php echo ($vo["form_type"]); ?>)
									<?php elseif($vo['form_type'] == 'text'): echo L('SINGLE_LINE_TEXT');?>(<?php echo ($vo["form_type"]); ?>)
									<?php elseif($vo['form_type'] == 'textarea'): echo L('MULTILINE_TEXT');?>(<?php echo ($vo["form_type"]); ?>)
									<?php elseif($vo['form_type'] == 'datetime'): echo L('DATE');?>(<?php echo ($vo["form_type"]); ?>)
									<?php elseif($vo['form_type'] == 'number'): echo L('NUMBER');?>(<?php echo ($vo["form_type"]); ?>)
									<?php elseif($vo['form_type'] == 'floatnumber'): echo L('NUMBER');?>(<?php echo ($vo["form_type"]); ?>)
									<?php elseif($vo['form_type'] == 'user'): echo L('USERS');?>(<?php echo ($vo["form_type"]); ?>)
									<?php elseif($vo['form_type'] == 'address'): echo L('ADDRESS');?>(<?php echo ($vo["form_type"]); ?>)
									<?php elseif($vo['form_type'] == 'phone'): echo L('TELEPHONE');?>(<?php echo ($vo["form_type"]); ?>)
									<?php elseif($vo['form_type'] == 'mobile'): echo L('PHONE');?>(<?php echo ($vo["form_type"]); ?>)
									<?php elseif($vo['form_type'] == 'email'): echo L('EMAIL');?>(<?php echo ($vo["form_type"]); ?>)
									<?php else: ?><span style="color:red;"><?php echo L('SPECIAL_FIELD_ACCESS_IS_LIMITED');?></span><?php endif; ?>
								</td>
								<td>
									<?php if($vo['operating'] == 0 or $vo['operating'] == 1 ): ?><a class="edit" href="javascript:void(0)" rel="<?php echo ($vo["field_id"]); ?>"><?php echo L('EDIT');?></a><?php else: ?><s style="color:rgb(187, 180, 180);"><?php echo L('EDIT');?></s><?php endif; ?> &nbsp;
									<?php if($vo['operating'] == 0 or $vo['operating'] == 3 ): ?><a class="delete" href="javascript:void(0)" rel="<?php echo ($vo["field_id"]); ?>"><?php echo L('DELETE');?></a><?php else: ?><s style="color:rgb(187, 180, 180);"><?php echo L('DELETE');?></s><?php endif; ?> &nbsp;
									<?php if($vo['form_type'] != 'user' and $vo['in_index'] == 0): ?><a class="indexShow" href="javascript:void(0)" rel="<?php echo ($vo["field_id"]); ?>"><?php echo L('THE_LIST_SHOWS');?></a><?php elseif($vo['form_type'] != 'user' and $vo['in_index'] == 1): ?><a class="indexShow" href="javascript:void(0)" rel="<?php echo ($vo["field_id"]); ?>"><?php echo L('CANCEL_THE_LIST');?></a><?php endif; ?>&nbsp;
									<?php if($vo['form_type'] == 'b_box'): ?><a href="<?php echo U('setting/businessstatus','model='.$_GET['model']);?>"><?php echo L('SPECIAL_SETTING');?></a><?php elseif($vo['form_type'] == 'p_box'): ?><a href="<?php echo U('product/category','model='.$_GET['model']);?>"><?php echo L('SPECIAL_SETTING');?></a><?php endif; ?>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
					<?php else: ?>
						<tr>
							<td><?php echo L('EMPTY_TPL_DATA');?></td>
						</tr><?php endif; ?>
				</table>
			</div> 
		</form>
	</div>
<div class="hide" id="dialog_field_add" title="<?php echo L('ADD_FIELDS');?>">loading...</div>
<div class="hide" id="dialog_field_edit" title="<?php echo L('EDIT_FIELDS');?>">loading...</div>
</div>
<script type="text/javascript">	
$("#dialog_field_add").dialog({
	autoOpen: false,
	modal: true,
	width: 600,
	maxHeight: 600,
	position: ["center",100]
});
$("#dialog_field_edit").dialog({
	autoOpen: false,
	modal: true,
	width: 600,
	maxHeight: 600,
	position: ["center",100]
});

$("table tbody").sortable({connectWith: "table tbody"});
function checkForm(){
	if(confirm('<?php echo L('DELETE_THE_SELECTED_FIELDS_OPERATION_CANNOT_BE_RESTORED');?>')){
		return true;
	}else{
		return false;
	}
}
$(function(){
	
	$("#check_all").click(function(){
		$("input[class='list']").prop('checked', $(this).prop("checked"));
	});
	$("#add").click(function(){
		$("#dialog_field_add").dialog('open');
		$("#dialog_field_add").load('<?php echo U("setting/fieldadd","model=$model");?>');
	});
	$(".edit").click(function(){
		var id = $(this).attr('rel');
		$("#dialog_field_edit").dialog('open');
		$("#dialog_field_edit").load('<?php echo U("setting/fieldedit","field_id");?>'+id);
	});
	$(".delete").click(function(){
		var id = $(this).attr('rel');
        if(confirm('<?php echo L('DELETE_THE_SELECTED_FIELDS_OPERATION_CANNOT_BE_RESTORED');?>')){
            window.location.assign('<?php echo U("setting/fielddelete","field_id");?>'+id);
        }
	});
	$(".indexShow").click(function(){
		var id = $(this).attr('rel');
        window.location.assign('<?php echo U("setting/indexShow","field_id");?>'+id);
	});
	$("#sort_btn").click(
		function() {
			position = [];
			$.each($(".list"), function(i, item){position.push(item.value)});
			$.get('<?php echo U("setting/fieldsort");?>',{postion:position.join(',')}, function(data){
				if (data.status == 1) {
					$('.alert.alert-success').remove();
					$(".page-header").after('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button>' + data.info + '</div>');
				} else {
					$('.alert.alert-error').remove();
					$(".page-header").after('<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button>' + data.info + '</div>');
				}
			}, 'json');
		}
	);
});
</script>

</body>
</html>