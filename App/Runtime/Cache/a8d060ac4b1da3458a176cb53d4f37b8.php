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
		<h4><?php echo L('SHORT_MESSAGE');?></h4>
	</div>
	<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
	<div class="pull-right">
		<a href="javascript:void(0);" id="send"  class="btn btn-primary"><i class="icon-pencil"></i>&nbsp; <?php echo L('WRITE_LETTER');?></a>
	</div>
	<ul class="nav nav-tabs">
		<li id="n1" <?php if((strtolower($_GET['type']) != 'send')): ?>class="active"<?php endif; ?>><a id="t1" href="#tab1" data-toggle="tab"><?php echo L('INBOX');?>(<span style="color:red"><?php echo ($new_num); ?></span>/<?php echo ($receive_list_num); ?>)</a></li>
		<li id="n2" <?php if((strtolower($_GET['type']) == 'send')): ?>class="active"<?php endif; ?>><a id="t2" href="#tab2" data-toggle="tab"><?php echo L('OUTBOX');?>(<?php echo ($send_list_num); ?>)</a></li>
	</ul>
	<div class="row">
	<div class="tab-content">
		<div class="span12 nav">
				<div class="pull-left">
					<ul class="nav pull-left">	
						<li class="nav pull-left">
							<div class="btn-group pull-left">
								<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
									&nbsp;<?php echo L('BATCH_OPERATION');?>
									<span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li class="pull-left">
										<a  <?php if((strtolower($_GET['type']) != 'send')): ?>id="delete_receive"<?php else: ?>id="delete_send"<?php endif; ?> class="delete"><i class="icon-remove"></i><?php echo L('DELETE');?></a>
									</li>
									<li>
										<a id="set_read_receive"><i class="icon-flag"></i><?php echo L('SET_READ');?></a>
										<a id="set_read_send" style="display:none;"><i class="icon-flag"></i><?php echo L('SET_READ');?></a>
									</li>
								</ul>
							</div>&nbsp;&nbsp;
						</li>
						<li class="pull-left">
							<form class="form-inline" id="searchForm" onsubmit="return checkSearchForm();" action='' method="get">
								<ul class="nav pull-left">
									<li class="pull-left">
										<select id="field" style="width:auto" onchange="changeCondition()" name="field">
											<option class="" value=""><?php echo L('SEARCH_OPTION');?></option>
											<option class="text" value="content"><?php echo L('CONTENT');?></option>
											<?php if((strtolower($_GET['type']) != 'send')): ?><option class="text" value="from_role_id"><?php echo L('THE_SENDER');?></option><?php else: ?>
											<option class="text" value="to_role_id"><?php echo L('THE_RECIPIENT');?></option><?php endif; ?>
											
											<option class="date" value="send_time"><?php echo L('SEND_TIME');?></option>
											<option class="date" value="read_time"><?php echo L('READING_TIME');?></option>
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
										<input type="hidden" name="m" value="message"/>
										<input type="hidden" name="type" id="type" value="<?php echo $_GET['type'];?>"/>
										<?php if($_GET['by']!= null): ?><input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>"/><?php endif; ?>
										<button type="submit" class="btn"> <img src="__PUBLIC__/img/search.png"/><?php echo L('SEARCH');?></button>
									</li>
								</ul>
							</form>
						</li>
					</ul>
				</div>
			</div>
		<div <?php if((strtolower($_GET['type']) != 'send')): ?>class="tab-pane active"<?php else: ?>class="tab-pane"<?php endif; ?> id="tab1">
			<div class="span12">
			<form id="form1"  method="post">
				<table class="table table-hover table-striped table_thead">
					<?php if($receive_list == null): ?><tr><td><?php echo L('EMPTY_TPL_DATA');?></td></tr>
					<?php else: ?>
					<thead>
						<tr>
						   <th><input class="receive_check_all" id="receive_check_all" type="checkbox" /> &nbsp;</th>
						   <th><?php echo L('CONTENT');?></th>
						   <th><?php echo L('THE_SENDER');?></th>
						   <th><?php echo L('READING_TIME');?></th>
						   <th><?php echo L('SEND_TIME');?></th>
						</tr>
					</thead>
					<tfoot>
							<tr><td colspan="8"><?php echo ($receive_page); ?></td></tr>
					</tfoot>
					<tbody>
						<?php if(is_array($receive_list)): $i = 0; $__LIST__ = $receive_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							<td><input type="checkbox" class="receive_check_list" name="message_id[]" value="<?php echo ($vo["message_id"]); ?>"/> &nbsp;
							</td>
							<td><a <?php if($vo["read_time"] == 0): ?>style="color:red;"<?php endif; ?> href="<?php echo U('message/view','id='.$vo['message_id']);?>" title="<?php echo L('VIEW');?>"><?php echo ($vo["pre_content"]); ?></a></td>
							<td><?php if(!empty($vo['from_role_id'])): echo ($vo["from_name"]); else: echo L('SYSTEM_ADMINISTRATOR'); endif; ?></td>
							<td><?php if($vo["read_time"] == 0): ?><font color="red"><?php echo L('UNREAD');?></font><?php else: echo (date("Y-m-d H:i:s",$vo["read_time"])); endif; ?></td>
							<td><?php echo (date("Y-m-d H:i:s",$vo["send_time"])); ?></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody><?php endif; ?>
				</table>
			</form>
			</div>
		</div>
		<div <?php if((strtolower($_GET['type']) == 'send')): ?>class="tab-pane active"<?php else: ?>class="tab-pane"<?php endif; ?> id="tab2">
			<div class="span12">
			<form id="form2"  method="post">
				<table class="table table-hover table-striped table_thead">
					<?php if($send_list == null): ?><tr><td><?php echo L('EMPTY_TPL_DATA');?></td></tr>
					<?php else: ?>
					<thead>
						<tr>
						   <th><input class="send_check_all" id="send_check_all" type="checkbox" /> &nbsp;</th>
						   <th><?php echo L('CONTENT');?></th>
						   <th><?php echo L('THE_SENDER');?></th>
						   <th><?php echo L('READING_TIME');?></th>
						   <th><?php echo L('SEND_TIME');?></th>
						</tr>
					</thead>
					<tfoot>
						<tr><td colspan="8"><?php echo ($send_page); ?></td></tr>
					</tfoot>
					<tbody>
						<?php if(is_array($send_list)): $i = 0; $__LIST__ = $send_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							<td><input type="checkbox" class="send_check_list" name="message_id[]" value="<?php echo ($vo["message_id"]); ?>"/> &nbsp;
							</td>
							<td><a href="<?php echo U('message/view','id='.$vo['message_id']);?>" title="<?php echo L('VIEW');?>"><?php echo ($vo["pre_content"]); ?></a></td>
							<td><?php if($vo.to_name): echo ($vo["to_name"]); else: echo L('MAIL_SYSTEM'); endif; ?></td>
							<td><?php if($vo["read_time"] == 0): echo L('UNREAD'); else: echo (date("Y-m-d H:i:s",$vo["read_time"])); endif; ?></td>
							<td><?php echo (date("Y-m-d H:i:s",$vo["send_time"])); ?></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody><?php endif; ?>
				</table>
			</form>
			</div>
		</div>
	</div>
	</div>
</div>
<div class="hide" id="dialog-send" title="<?php echo L('WRITE_LETTER_IN');?>">loading...</div>
<script type="text/javascript">
$("#dialog-message-send").dialog({
    autoOpen: false,
    modal: true,
	width: 800,
	maxHeight: 600,
	position: ["center",100]
});
$(function(){
	<?php if($_GET['field']!= null): ?>$("#field option[value='<?php echo ($_GET['field']); ?>']").prop("selected", true);changeCondition();
	$("#condition option[value='<?php echo ($_GET['condition']); ?>']").prop("selected", true);changeSearch();
	$("#search").prop('value', '<?php echo ($_GET['search']); ?>');
	<?php else: ?>
	$("#field option[value='status_id']").prop("selected", true);changeCondition();<?php endif; ?>
	$("#receive_check_all").click(function(){
		$("input[class='receive_check_list']").prop('checked', $(this).prop("checked"));
	});
	$("#send_check_all").click(function(){
		$("input[class='send_check_list']").prop('checked', $(this).prop("checked"));
	});
	$("#send").click(function(){
		$('#dialog-message-send').dialog('open');
		$('#dialog-message-send').load('<?php echo U("message/send");?>');
	});
	
});
function changeContent(){
	a = $("#select1  option:selected").val();
	window.location.href="<?php echo U('message/index', 'by=');?>"+a;
}
$(function(){
	$('#delete_receive').click(function(){
		if(confirm('<?php echo L('ARE_YOU_DELETE');?>')){
			$("#form1").attr('action', '<?php echo U("message/delete", "model=receive");?>');
			$("#form1").submit();
		}
	});
	$('#delete_send').click(function(){
		if(confirm('<?php echo L('ARE_YOU_DELETE');?>')){
			$("#form2").attr('action', '<?php echo U("message/delete", "model=send");?>');
			$("#form2").submit();
		}
	});
	$('#set_read_receive').click(function(){
		if(confirm('<?php echo L('CONFIRM_TO_SET_MESAAGE_READ');?>')){
			$("#form1").attr('action', '<?php echo U("message/setRead");?>');
			$("#form1").submit();
		}
	});
	$('#set_read_send').click(function(){
		if(confirm('<?php echo L('CONFIRM_TO_SET_MESAAGE_READ');?>')){
			$("#form2").attr('action', '<?php echo U("message/setRead");?>');
			$("#form2").submit();
		}
	});
	$('#t1').click(function(){
		$result = '<option class="" value=""><?php echo L('SEARCH_OPTION');?></option><option class="text" value="content"><?php echo L('CONTENT');?></option><option class="text" value="from_role_id"><?php echo L('THE_SENDER');?></option><option class="date" value="send_time"><?php echo L('SEND_TIME');?></option><option class="date" value="read_time"><?php echo L('READING_TIME');?></option>';
		$("#field").html($result);
		$("#type").val('send1');
		$(".delete").attr('id','delete_receive').unbind();
		$('#delete_receive').click(function(){
			if(confirm('<?php echo L('ARE_YOU_DELETE_RECEIVE');?>')){
				$("#form1").attr('action', '<?php echo U("message/delete", "model=receive");?>');
				$("#form1").submit();
			}
		});
		$("#set_read_receive").css('display','block');
		$("#set_read_send").css('display','none');
	});
	$('#t2').click(function(){
		$result = '<option class="" value=""><?php echo L('SEARCH_OPTION');?></option><option class="text" value="content"><?php echo L('CONTENT');?></option><option class="text" value="to_role_id"><?php echo L('THE_SENDER');?></option><option class="date" value="send_time"><?php echo L('SEND_TIME');?></option><option class="date" value="read_time"><?php echo L('READING_TIME');?></option>';
		$("#type").val('send');
		$("#field").html($result);
		$(".delete").attr('id','delete_send').unbind();
		$('#delete_send').click(function(){
			if(confirm('<?php echo L('ARE_YOU_DELETE');?>')){
				$("#form2").attr('action', '<?php echo U("message/delete", "model=send");?>');
				$("#form2").submit();
			}
		});
		$("#set_read_receive").css('display','none');
		$("#set_read_send").css('display','block');
	});
})
</script>

</body>
</html>