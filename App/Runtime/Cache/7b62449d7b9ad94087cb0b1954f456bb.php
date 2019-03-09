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
<link href="__PUBLIC__/css/litebox.css" rel="stylesheet" type="text/css">
<script src="__PUBLIC__/js/PCASClass.js" type="text/javascript"></script>
	<div class="container">
		<div class="page-header">
			<h4><?php echo L('PRODUCT_LIST');?></h4>
		</div>
		<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
        <div class="row">
			<div class="span2 knowledgecate">
				<ul class="nav nav-list">
					<li class="active">
						<a href="javascript:void(0);"><?php echo L('ACCORDING_TO_THE_PRODUCT_CATEGORY_TO_VIEW');?></a>
					</li>
					<li><a href="<?php echo U('product/index');?>" <?php if($_GET['category_id'] == null): ?>class="active"<?php endif; ?>><i class="icon-white icon-chevron-right"></i><?php echo L('ALL');?></a></li>
					<?php if(is_array($categoryList)): $i = 0; $__LIST__ = $categoryList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('product/index','category_id='.$vo['category_id']);?>" <?php if($_GET['category_id'] == $vo['category_id']): ?>class="active"<?php endif; ?>><i class="icon-chevron-right"></i><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="span10">
				<div class="pull-left">
					<ul class="nav pull-left">		
						<li class="pull-left">
							<a id="delete"  class="btn" style="margin-right: 5px;"><i class="icon-remove"></i><?php echo L('DELETE');?></a>
						</li>
						<li class="pull-left">
							<form class="form-inline" id="searchForm" action="" method="get">
								<ul class="nav pull-left">
									<li class="pull-left">
										&nbsp;&nbsp;
										<select id="field" style="width:auto" onchange="changeCondition()" name="field">
											<option class="text" value="all"><?php echo L('ANY_FIELD');?></option>
											<?php if(is_array($field_list)): $i = 0; $__LIST__ = $field_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if($v['field'] != 'category_id'): ?><option class="<?php echo ($v['form_type']); ?>" value="<?php echo ($v[field]); ?>" rel="product"><?php echo ($v[name]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
											<option class="role" value="creator_role_id"><?php echo L('FOUNDER');?></option>
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
										<?php if(isset($_GET['category_id'])): ?><input name="category_id" type="hidden" value="<?php echo ($_GET['category_id']); ?>" /><?php endif; ?>
										<input type="hidden" name="m" value="product"/>
										<input type="hidden" name="act" id="act" value="index"/>
										<input type="hidden" name="daochu" id="daochu" value=""/>
										<input type="hidden" name="current_page" id="current_page" value=""/>
										<input type="hidden" name="export_limit" id="export_limit" value=""/>
										<?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?>
										<button type="submit" id="dosearch" class="btn"> <img src="__PUBLIC__/img/search.png"/>  <?php echo L('SEARCH');?></button>
									</li>
									<li class="pull-left">
									</li>
								</ul>
							</form>
						</li>
					</ul>
				</div>
				<div class="pull-right">
					<a class="btn btn-primary" href="<?php echo U('product/add');?>"><i class="icon-plus"></i>&nbsp; <?php echo L('ADD_PRODUCT');?></a>&nbsp;
					<div class="btn-group">
						<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-wrench"></i>&nbsp; <?php echo L('PRODUCT_TOOL');?><span class="caret"></span></button>
						<ul class="dropdown-menu">
							<li><a href="javascript:return(0);" id="import_excel"  class="link"><i class="icon-upload"></i><?php echo L('IMPORT_PRODUCTS');?></a></li>
							<li><a href="javascript:void(0);" id="excelExport" class="link"><i class="icon-download"></i><?php echo L('EXPORT_PRODUCTS');?></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="span10">
				<form id="form1" action="<?php echo U('');?>" method="Post">
					<table class="table table-hover table-striped table_thead_fixed">
						<?php if($list == null): ?><tr><td>----<?php echo L('TEMPORARILY_NO_DATA');?>----</td></tr>
						<?php else: ?>
						<thead>
							<tr id="childNodes_num">
								<th style="width:5%;"><input class="check_all" id="check_all" type="checkbox" /> &nbsp;</th>
								<th style="width:10%;">图片</th>
								<?php if(is_array($field_array)): $i = 0; $__LIST__ = $field_array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><th><?php echo ($vo["name"]); ?></th><?php endforeach; endif; else: echo "" ;endif; ?>
							   <th><?php echo L('FOUNDER');?></th>
							   <th><?php echo L('OPERATION');?></th>
							</tr>
						</thead>
					 
						<tfoot>
							<tr>
								<td id="td_colspan">				
									<?php echo ($page); ?><div style="width:130px;float:left;">每页显示<select style="width:auto;display:inline-block;" id="listrows" name="listrows" rel="<?php echo ($listrows); ?>"><option value="15">15</option><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="40">40</option><option value="50">50</option><option value="60">60</option><option value="70">70</option><option value="80">80</option><option value="90">90</option><option value="100">100</option></select>条</div>
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
								</td>
							</tr>
						</tfoot>
						
						<tbody>
						<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td>
									<input name="product_id[]" class="check_list" type="checkbox" value="<?php echo ($vo["product_id"]); ?>"/>
								</td>
								<td>
									<?php if(!empty($vo['path'])): ?><a href="<?php echo ($vo["path"]); ?>" target="_self" class="litebox">
											<img src="<?php echo ($vo["path"]); ?>" class="thumbnail thumb45">
										</a>	
									<?php else: ?>
										<img src="__PUBLIC__/img/default_img.png" class="thumbnail thumb45"><?php endif; ?>
								</td>
								<?php if(is_array($field_array)): $i = 0; $__LIST__ = $field_array;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><td>
									<?php if($v['field'] == 'category_id'): echo (($vo['category_name'])?($vo['category_name']):L('DEFAULT')); ?>
									<?php else: ?>
									<?php if($v['field'] == 'name'): ?><a href="<?php echo U('product/view', 'id='.$vo['product_id']);?>"><?php endif; ?>
									<?php if(stristr('http://',$v['default_value']) && 'http://' != $vo[$v['field']] && '' != $vo[$v['field']]): ?><a href="<?php echo ($vo[$v['field']]); ?>" target="_blank"><?php endif; ?>
										<span style="color:#<?php echo ($v['color']); ?>">
										<?php if($v['form_type'] == 'datetime'): echo (date('Y-m-d',$vo[$v['field']] )); ?>
										<?php else: ?>
										<?php echo ($vo[$v['field']]); endif; ?>
										</span>
									<?php if($v['field'] == 'name'): ?></a><?php endif; endif; ?>
								</td><?php endforeach; endif; else: echo "" ;endif; ?>
									<td>
										<?php if(!empty($vo["creator"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["creator"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["creator"]["user_name"]); ?></a><?php endif; ?>
									</td>
								<td><a href="<?php echo U('product/view', 'id='.$vo['product_id']);?>"><?php echo L('CHECK');?></a>&nbsp;
									<?php if($_GET['by']== 'deleted'): ?><a href="<?php echo U('product/revert', 'id=' . $vo['product_id']);?>"><?php echo L('REDUCTION');?></a>&nbsp;
									<?php else: ?><a href="<?php echo U('product/edit', 'id='.$vo['product_id']);?>"><?php echo L('COMPILE');?></a><?php endif; ?>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody><?php endif; ?>
					</table>
				</form>
			</div>
			
		</div>
	</div>
	<div class="hide" id="dialog-import" title="<?php echo L('IMPORT_DATA');?>">loading...</div>
	<div class="hide" id="dialog-role-info" title="<?php echo L('EMPLOYEE_INFORMATION');?>">loading...</div>
<script src="__PUBLIC__/js/images-loaded.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/litebox.min.js" type="text/javascript"></script>
<script type="text/javascript">
var url = "<?php echo U('product/getcurrentstatus');?>";
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
//初始化图片查看插件
$('.litebox').liteBox({
  revealSpeed: 400,
  background: 'rgba(0,0,0,.8)',
  overlayClose: true,
  escKey: true,
  navKey: true,
  errorMessage: '图片加载失败.'
});
<?php if(C('ismobile') == 1): ?>width=$('.container').width() * 0.9;<?php else: ?>width=600;<?php endif; ?>
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
	window.location.href="<?php echo U('product/index', 'by=');?>"+a;
}
$(function(){
<?php if($_GET['field']!= null): ?>$("#field option[value='<?php echo ($_GET['field']); ?>']").prop("selected", true);changeCondition();
	$("#condition option[value='<?php echo ($_GET['condition']); ?>']").prop("selected", true);changeSearch();
	$("#search").val('<?php echo ($_GET['search']); ?>');
	<?php if($_GET['state']): ?>new PCAS("state","city","area","<?php echo ($_GET['state']); ?>","<?php echo ($_GET['city']); ?>","<?php echo ($_GET['area']); ?>");<?php endif; endif; ?>

	$("#check_all").click(function(){
		$("input[class='check_list']").prop('checked', $(this).prop("checked"));
	});
	$('#delete').click(function(){
		if(confirm('<?php echo L('CONFIRM_TO_DELETE');?>')){
			<?php if($_SESSION['admin']== 1 and $_GET['by']== 'deleted'): ?>$("#form1").attr('action', '<?php echo U("product/completedelete");?>');
				$("#form1").submit();
			<?php else: ?>
				$("#form1").attr('action', '<?php echo U("product/delete");?>');
			$("#form1").submit();<?php endif; ?>
		}
	});
	
	$("#excelExport").click(function(){
		if(count > limit_size){
			if(confirm('当前导出量过大，将分几次导出，可能需要您等待一段时间，是否继续?')){
				remainTime();
			}
		}else{
			if(confirm("<?php echo L('ARE_YOU_SURE_YOU_WANT_TO_EXPORT_THE_PRODUCTS');?>")){
				remainTime();
			}
		}
		/*if(confirm("<?php echo L('ARE_YOU_SURE_YOU_WANT_TO_EXPORT_THE_PRODUCTS');?>")){
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
		$('#dialog-import').load('<?php echo U("product/excelimport");?>');
	});
	$(".role_info").click(function(){
		$role_id = $(this).attr('rel');
		$('#dialog-role-info').dialog('open');
		$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
	});
});
<?php if($list != null): ?>$nodes_num = document.getElementById("childNodes_num").children.length;
	$("#td_colspan").attr('colspan',$nodes_num);<?php endif; ?>
</script>

</body>
</html>