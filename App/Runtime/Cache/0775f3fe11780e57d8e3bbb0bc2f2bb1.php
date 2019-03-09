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
			<h4><?php echo L('KNOWLEDGE_LIST');?></h4>
		</div>
		<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
		<div class="row">
			<div class="span2 knowledgecate">
				<ul class="nav nav-list">
					<li class="active">
						<a href="javascript:void(0);"><?php echo L('KNOWLEDGE_CATEGORY_VIEW');?></a>
					</li>
					<li><a <?php if($_GET['category_id'] == null): ?>class="active"<?php endif; ?> href="<?php echo U('knowledge/index');?>"><i class="icon-white icon-chevron-right"></i><?php echo L('ALL');?></a></li>
					<?php if(is_array($categoryList)): $i = 0; $__LIST__ = $categoryList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a <?php if($_GET['category_id'] == $vo['category_id']): ?>class="active"<?php endif; ?> href="<?php echo U('knowledge/index','category_id='.$vo['category_id']);?>"><i class="icon-chevron-right"></i><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="span10">
				<div class="bulk-actions align-left">
					<div class="pull-left"><a id="delete" class="btn" style="margin-right: 8px;"><i class="icon-remove"></i>&nbsp;<?php echo L('DELETE');?></a></div>
					
					<ul class="nav pull-left">
						<form class="form-inline" id="searchForm" action="" method="get">
							<li class="pull-left">
								<select style="width:auto" id="field" name="field" id="selectCondition" onchange="changeCondition()">
									<option class="all" value="all"><?php echo L('ANY_FIELD');?></option>
									<option class="word" value="title"><?php echo L('TITLE');?></option>
									<option class="word" value="content"><?php echo L('CONTENT');?></option>
									<option class="role" value="role_id"><?php echo L('AUTHORS');?></option>
									<option class="date" value="create_time"><?php echo L('CREATOR_TIME');?></option>
									<option class="date" value="update_time"><?php echo L('UPDATE_TIME');?></option>
									<option class="number" value="hits"><?php echo L('CLICK_NUM');?></option>
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
								<?php if(isset($_GET['category_id'])): ?><input name="category_id" type="hidden" value="<?php echo ($_GET['category_id']); ?>" /><?php endif; ?>
								<input type="hidden" name="m" value="Knowledge"/>
								<input type="hidden" name="act" id="act" value="index"/>
								<input type="hidden" name="daochu" id="daochu" value=""/>
								<input type="hidden" name="current_page" id="current_page" value=""/>
								<input type="hidden" name="export_limit" id="export_limit" value=""/>
								<?php if($_GET['by']!= null): ?><input type="hidden" name="category_id" value="<?php echo ($_GET['category_id']); ?>"/><?php endif; ?>
								<button type="submit" id="dosearch" class="btn"> <img src="__PUBLIC__/img/search.png"/><?php echo L('SEARCH');?></button>
							</li>
						</form>
					</ul>
					<div class="pull-right">
						<a class="btn btn-primary" href="<?php echo U('knowledge/add');?>"><i class="icon-plus"></i>&nbsp; <?php echo L('ADD_KNOWLEDGE');?></a>&nbsp;
						<div class="btn-group">
							<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"></i>&nbsp;<?php echo L('KNOWLEDGE_TOOLS');?> <span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a href="javascript:return(0);" id="import_excel"  class="link"><i class="icon-upload"></i>&nbsp;<?php echo L('IMPORT_KNOWLEDGE');?></a></li>
								<li><a href="javascript:void(0);" id="excelExport" class="link"><i class="icon-download"></i>&nbsp;<?php echo L('EXPORT_KNOWLEDGE');?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="span10">
				<form id="form1"  method="Post">
					<table class="table table-hover table-striped table_thead_fixed">
						<?php if($list == null): ?><tr><td><?php echo L('EMPTY_TPL_DATA');?></td></tr>
						<?php else: ?>
						<thead>
							<tr>
								<th><input class="check_all" name="check_all" id="check_all" type="checkbox" /> &nbsp;</th>
								<th><?php echo L('TITLE');?></th>
								<th><?php echo L('AUTHORS');?></th>
								<th><?php echo L('CATEGORY');?></th>
								<th>
								<?php if($_GET['asc_order'] == 'hits'): ?><a href="<?php echo U('knowledge/index','desc_order=hits&'.$parameter);?>"><?php echo L('CLICK_NUM');?>&nbsp;<img src="__PUBLIC__/img/arrow_up.png"></a>
								<?php elseif($_GET['desc_order'] == 'hits'): ?>
									<a href="<?php echo U('knowledge/index','asc_order=hits&'.$parameter);?>"><?php echo L('CLICK_NUM');?>&nbsp;<img src="__PUBLIC__/img/arrow_down.png"></a>
								<?php else: ?>
									<a href="<?php echo U('knowledge/index','desc_order=hits&'.$parameter);?>"><?php echo L('CLICK_NUM');?></a><?php endif; ?>
								</th>
								<th>
									<?php if($_GET['asc_order'] == 'update_time'): ?><a href="<?php echo U('knowledge/index','desc_order=update_time&'.$parameter);?>"><?php echo L('UPDATE_TIME');?>&nbsp;<img src="__PUBLIC__/img/arrow_up.png"></a>
									<?php elseif($_GET['desc_order'] == 'update_time'): ?>
										<a href="<?php echo U('knowledge/index','asc_order=update_time&'.$parameter);?>"><?php echo L('UPDATE_TIME');?>&nbsp;<img src="__PUBLIC__/img/arrow_down.png"></a>
									<?php else: ?>
										<a href="<?php echo U('knowledge/index','desc_order=update_time&'.$parameter);?>"><?php echo L('UPDATE_TIME');?></a><?php endif; ?>
								</th>
								<th><?php echo L('OPERATING');?></th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<td colspan="7">
									<?php echo ($page); ?>
								</td>
							</tr>
						</tfoot>
						<tbody>
							<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
									<td>
										<input class="list" type="checkbox" name="knowledge_id[]" value="<?php echo ($vo["knowledge_id"]); ?>"/>
									</td>
									<td><a href="<?php echo U('knowledge/view','id='.$vo['knowledge_id']);?>"><?php echo ($vo["title"]); ?></a></td>
									<td><?php if(!empty($vo["owner"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a><?php endif; ?></td>
									<?php if(C('ismobile') != 1): ?><td><?php echo ($vo["name"]); ?></td>
									<td><?php echo ($vo["hits"]); ?></td>
									<td><notempty name="vo.update_time"><?php echo (date("Y-m-d",$vo["update_time"])); ?><notempty></td><?php endif; ?>
									<td><a href="<?php echo U('knowledge/view','id='.$vo['knowledge_id']);?>"><?php echo L('VIEW');?></a> &nbsp;<a href="<?php echo U('knowledge/edit','id='.$vo['knowledge_id']);?>"><?php echo L('EDIT');?></a></td>
								</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody><?php endif; ?>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="hide" id="dialog-import" title="<?php echo L('IMPORT_DATA');?>">loading...</div>
<div class="hide" id="dialog-role-info" title="<?php echo L('DIALOG_USER_INFO');?>">loading...</div>
<script type="text/javascript">
var url = "<?php echo U('knowledge/getcurrentstatus');?>";
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
$("#dialog-import").dialog({
	autoOpen: false,
	modal: true,
	width: 600,
	maxHeight: 400,
	position: ["center",100]
});
$("#dialog-role-info").dialog({
    autoOpen: false,
    modal: true,
	width: 600,
	maxHeight: 400,
	position: ["center",100]
});
	function changeContent(){
		a = $("#select1  option:selected").val();
		if(a=='1'){
			window.location.href="<?php echo U('knowledge/index');?>";
		}else if(a=='2'){
			window.location.href="<?php echo U('knowledge/category');?>";
		}else if(a=='3'){
			window.location.href="<?php echo U('knowledge/count');?>";
		}
	}

	function deleteConfirm(id,name){
		if(confirm("<?php echo L('DELETE_THE_ARTICLE');?>"+name)){
			window.location="<?php echo U('knowledge/delete','id=');?>"+id;
		}
	}
	function searchByCategory(){
		var objCategory=document.getElementById("categoryList");
		var id=objCategory.options[objCategory.selectedIndex].value;
		window.location="<?php echo U('knowledge/index','by=all&category_id=');?>"+id;
	}

$(function(){
<?php if($_GET['field']!= null): ?>$("#field option[value='<?php echo ($_GET['field']); ?>']").prop("selected", true);changeCondition();
	$("#condition option[value='<?php echo ($_GET['condition']); ?>']").prop("selected", true);changeSearch();
	$("#search").prop('value', '<?php echo ($_GET['search']); ?>');<?php endif; ?>

	$("#excelExport").click(function(){
		if(count > limit_size){
			if(confirm('当前导出量过大，将分几次导出，可能需要您等待一段时间，是否继续?')){
				remainTime();
			}
		}else{
			if(confirm("<?php echo L('EXPORT_THE_KNOWLEDGE');?>")){
				remainTime();
			}
		}
		/*if(confirm("<?php echo L('EXPORT_THE_KNOWLEDGE');?>")){ 
			$("#act").val('excel');	
			$("#searchForm").submit();
		}*/
	})
	
	$("#dosearch").click(function(){
		result = checkSearchForm();
		if(result) $("#act").val('search');$("#searchForm").submit();
	});
	
	$("#check_all").click(function(){
		$("input[class='list']").prop('checked', $(this).prop("checked"));
	});
	$("#add_category").click(function(){
		$('#dialog-message1').dialog('open');
		$('#dialog-message1').load("<?php echo U('knowledge/categoryAdd');?>");
	});
	$('#delete').click(function(){
		if(confirm("<?php echo L('ARE_YOU_SRUE_DELETE');?>")){
			$("#form1").attr('action', '<?php echo U("knowledge/delete");?>');
			$("#form1").submit();
		}
		
	});
	$("#import_excel").click(function(){
		$('#dialog-import').dialog('open');
		$('#dialog-import').load('<?php echo U("knowledge/excelimport");?>');
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