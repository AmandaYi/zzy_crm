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
		<h4><?php echo L('ADD_EVENT');?></h4>
	</div>
	<div class="row">
		<div class="span12">
			<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
			<form action="<?php echo U('event/add');?>" method="post">
			<input type="hidden" name="creator_id" value="<?php echo (session('user_id')); ?>"/>
			<table class="table table-hover">
				<thead>
					<tr>
						<td>&nbsp;</td>
						<td <?php if(C('ismobile') != 1): ?>colspan="3"<?php endif; ?>><input name="submit" class="btn btn-primary" type="submit" value="<?php echo L('SAVE');?>"/> &nbsp; <input name="submit" class="btn btn-primary" type="submit" value="<?php echo L('SAVE AND NEW');?>"/> &nbsp; <input class="btn" type="reset" onclick="javascript:history.go(-1)" value="<?php echo L('RETURN');?>"/></td>
					</tr>
				</thead>
				<tfoot>
					<tr> 
						<td>&nbsp;</td>
						<td <?php if(C('ismobile') != 1): ?>colspan="3"<?php endif; ?>><input name="submit" class="btn btn-primary" type="submit" value="<?php echo L('SAVE');?>"/> &nbsp; <input name="submit" class="btn btn-primary" type="submit" value="<?php echo L('SAVE AND NEW');?>"/> &nbsp; <input class="btn" type="reset" onclick="javascript:history.go(-1)" value="<?php echo L('RETURN');?>"/></td>
					</tr>
				</tfoot> 
				<tbody>
					<th <?php if(C('ismobile') == 1): ?>colspan="2"<?php else: ?>colspan="4"<?php endif; ?>><?php echo L('BASIC_INFO');?></th>
					<tr>						
						<td class="tdleft" width="15%"><?php echo L('THEME');?></td>
						<td width="35%"><input type="text" name="subject" id="subject" class="span3"/></td>
						<?php if(C('ismobile') == 1): ?></tr><tr><?php endif; ?>
						<td class="tdleft" width="15%"><?php echo L('OWNER_ROLE');?></td>
						<td width="35%"><input type="hidden" name="owner_role_id" value="<?php echo (session('role_id')); ?>" id="owner_id"/><input type="text" id="owner_name" name="owner_name" value="<?php echo (session('name')); ?>" class="span3"/></td>
					</tr>
					<tr>
						<td class="tdleft"><?php echo L('START_TIME');?></td>
						<td>
							<input type="text" id="start_date" name="start_date" onClick="WdatePicker({dateFmt:'yyyy-MM-dd', maxDate:&quot;#F{$dp.$D('end_date')||'2020-10-01'}&quot;})" class="Wdate"/>
						</td>
						<?php if(C('ismobile') == 1): ?></tr><tr><?php endif; ?>
						<td class="tdleft"><?php echo L('END_TIME');?></td>
						<td>
							<input type="text" id="end_date" onClick="WdatePicker({dateFmt:'yyyy-MM-dd', minDate:&quot;#F{$dp.$D('start_date')}&quot;,maxDate:'2020-10-01'})" name="end_date" class="Wdate"/>
						</td>
					</tr>
					<tr>
						<td class="tdleft"><?php echo L('PLACE');?></td>
						<td><input type="text" id="venue" name="venue" class="span3"/></td>
						<?php if(C('ismobile') == 1): ?></tr><tr><?php endif; ?>
						<td class="tdleft"><?php echo L('SEND_A_NOTIFICATION_EMAIL');?></td>
						<td><input name="send_email" type="radio" checked="true" value="1"/><?php echo L('YES');?><input name="send_email" type="radio" value="0"/><?php echo L('NO');?></td>
					</tr>
					<tr>
						<td class="tdleft"><?php echo L('SELECT_THE_RELEVANT');?></td>
						<td>
							<select name="module" class="span2" onchange="changeContent()" id="select1">
								<option value=""></option>
								<option value="contacts"><?php echo L('CONTACTS');?></option>
								<option value="leads"><?php echo L('LEADS');?></option>
								<option value="customer"><?php echo L('CUSTOMER');?></option>
								<option value="business"><?php echo L('BUSINESS');?></option>
								<option value="product"><?php echo L('PRODUCT');?></option>
							</select>
							<input type="hidden" id="module_id" name="module_id" id="select_content"/>
							<input type="text" name="module_name" id="module_name"/>
						</td>
						<?php if(C('ismobile') != 1): ?><td colspan="2">&nbsp;</td><?php endif; ?>
						<!-- <td class="tdleft">是否重复日程</td>
						<td><input name="recurring" type="radio" checked="true" value="1"/><?php echo L('YES');?><input name="recurring" type="radio" value="0"/><?php echo L('NO');?></td> -->
					</tr>
					<tr>
						<td class="tdleft"><?php echo L('DESCRIBE');?></td>
						<td <?php if(C('ismobile') != 1): ?>colspan="3"<?php endif; ?>>
							<textarea rows="6" class="span6" name="description"></textarea>
						</td>
					</tr>
				</tbody>
			</table>
			</form>   
		</div>
	</div>
</div>
<div id="dialog-message" class="hide" title="<?php echo L('SELECT_THE_TASK_OWNER');?>">loading...</div>	
<div class="hide" id="dialog-message2" title="<?php echo L('SELECT_CONTACT');?>">loading...</div>
<div class="hide" id="dialog-message3" title="<?php echo L('CHOOSE_CLUES');?>">loading...</div>
<div class="hide" id="dialog-message4" title="<?php echo L('SELECT_THE_CUSTOMER');?>">loading...</div>
<div class="hide" id="dialog-message5" title="<?php echo L('SELECT_BUSINESS');?>">loading...</div>
<div class="hide" id="dialog-message6" title="<?php echo L('SELECT_PRODUCT');?>">loading...</div>
<script type="text/javascript">
<?php if(C('ismobile') == 1): ?>width=$('.container').width() * 0.9;<?php else: ?>width=800;<?php endif; ?>

$("#dialog-message").dialog({
    autoOpen: false,
    modal: true,
	width: width,
	minHeight: 400,
    close: function () {
        $(this).html(""); 
    },
    buttons: { 
        "<?php echo L('OK');?>": function () {
			var item = $('input:radio[name="owner"]:checked').val();
			var name = $('input:radio[name="owner"]:checked').parent().next().html();
			if(item){
				$('#owner_id').val(item);
				$('#owner_name').val(name);
			}
            $(this).dialog("close"); 
        },
		"<?php echo L('CANCEL');?>": function () {
            $(this).dialog("close");
        }
    },
	position:["center",100]
});
$("#dialog-message2").dialog({
    autoOpen: false,
    modal: true,
	width: width,
	minHeight: 400,
    close: function () {
        $(this).html(""); 
    },
    buttons: { 
        "<?php echo L('OK');?>": function () {
			var item = $('input:radio[name="contacts"]:checked').val();
			var name = $('input:radio[name="contacts"]:checked').parent().next().html();
			$('#module_id').val(item);
			$('#module_name').val(name);
            $(this).dialog("close"); 
        },
		"<?php echo L('CANCEL');?>": function () {
            $(this).dialog("close");
        }
    },
	position:["center",100]
});
$("#dialog-message3").dialog({
    autoOpen: false,
    modal: true,
	width: width,
	minHeight: 400,
    close: function () {
        $(this).html(""); 
    },
    buttons: { 
        "<?php echo L('OK');?>": function () {
			var item = $('input:radio[name="leads"]:checked').val();
			var name = $('input:radio[name="leads"]:checked').parent().next().html();
			var company = $('input:radio[name="leads"]:checked').parent().next().next().html();
			$('#module_id').val(item);
			$('#module_name').val(name+" "+company);
            $(this).dialog("close"); 
        },
		"<?php echo L('CANCEL');?>": function () {
            $(this).dialog("close");
        }
    },
	position:["center",100]
});
$("#dialog-message4").dialog({
    autoOpen: false,
    modal: true,
	width: width,
	maxHeight: 600,
    close: function () {
        $(this).html(""); 
    },
    buttons: {
        "<?php echo L('OK');?>": function () {
			var item = $('input:radio[name="customer"]:checked').val();
			var name = $('input:radio[name="customer"]:checked').parent().next().html();
			$('#module_id').val(item);
			$('#module_name').val(name);
            $(this).dialog("close"); 
        },
		"<?php echo L('CANCEL');?>": function () {
            $(this).dialog("close");
        }
    },
	position:["center",100]
});
$("#dialog-message5").dialog({
    autoOpen: false,
    modal: true,
	width: width,
	minHeight: 400,
    close: function () {
        $(this).html(""); 
    },
    buttons: { 
        "<?php echo L('OK');?>": function () {
			var item = $('input:radio[name="business"]:checked').val();
			var name = $('input:radio[name="business"]:checked').parent().next().html();
			if(item){
				$('#module_id').val(item);
				$('#module_name').val(name);
			}
            $(this).dialog("close"); 
        },
		"<?php echo L('CANCEL');?>": function () {
            $(this).dialog("close");
        }
    },
	position:["center",100]
});
$("#dialog-message6").dialog({
    autoOpen: false,
    modal: true,
	width: width,
	minHeight: 400,
    close: function () {
        $(this).html(""); 
    },
    buttons: {
        "<?php echo L('OK');?>": function () {
			var item = $('input:radio[name="product_id"]:checked').val();
			var name = $('input:radio[name="product_id"]:checked').parent().next().html();
			$('#module_id').val(item);
			$('#module_name').val(name);
            $(this).dialog("close"); 
        },
		"<?php echo L('CANCEL');?>": function () {
            $(this).dialog("close");
        }
    },
	position:["center",100]
});
function changeContent(){
	$('#module_id').val("");
	$('#module_name').val("");
}

$(function(){
	$("input[name='submit']").click(function(){			
		if($("#subject").val() == null || $("#subject").val() == ""){
			alert('<?php echo L('SUBJECT_CAN_NOT_EMPTY');?>');
			return false;
		}
	})
	$('#owner_name').click(
		function(){
			$('#dialog-message').dialog('open');
			$('#dialog-message').load('<?php echo U("user/listDialog");?>');
		}
	);
	$('#module_name').click(
		function(){
			a = $("#select1  option:selected").val();
			if (a == "contacts"){
				$('#dialog-message2').dialog('open');
				$('#dialog-message2').load('<?php echo U("contacts/radioListDialog");?>');
			}else if(a == "leads"){
				$('#dialog-message3').dialog('open');
				$('#dialog-message3').load('<?php echo U("leads/listDialog");?>');
			}else if(a == "business"){
				$('#dialog-message5').dialog('open');
				$('#dialog-message5').load('<?php echo U("business/listDialog");?>');
			}else if(a == "customer"){
				$('#dialog-message4').dialog('open');
				$('#dialog-message4').load('<?php echo U("customer/listDialog");?>');
			}else if(a == "product"){
				$('#dialog-message6').dialog('open');
				$('#dialog-message6').load('<?php echo U("product/allProductDialog");?>');
			}
		}
	);
});
</script>

</body>
</html>