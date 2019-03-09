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
<script type="text/javascript" src="__PUBLIC__/js/kindeditor-all-min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/zh_CN.js"></script>
<link rel="stylesheet" href="__PUBLIC__/css/kindeditor.css" type="text/css" />
<script type="text/javascript">
	<?php if(C('ismobile') != 1): ?>var editor;
		KindEditor.ready(function(K) {
			editor = K.create('textarea[name="content"]', {
				uploadJson:'<?php echo U("file/editor");?>',
				allowFileManager : true,
				loadStyleMode : false,
				fileManagerJson: "<?php echo U('file/manager');?>"
			});
		});<?php endif; ?>
</script>
	<div class="container">
        <!-- Docs nav ================================================== -->
		<div class="page-header">
			<h4><?php echo L('THE_NEW_CONTRACT');?></h4>
		</div>
        <div class="row">
			<div class="span12">
				<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
				<form action="<?php echo U('contract/add');?>" method="post">
				    <input type="hidden" name="refer_url" value="<?php echo ($refer_url); ?>">
					<table class="table" width="95%" border="0" cellspacing="1" cellpadding="0">
						<thead>
							<tr>
								<td>&nbsp;</td>
								<td <?php if(C('ismobile') != 1): ?>colspan="3"<?php endif; ?>><input name="submit" class="btn btn-primary" type="submit" value="<?php echo L('SAVE');?>"/>&nbsp; <input type="button" class="btn" onclick="javascript:history.go(-1)" value="<?php echo L('RETURN');?>"/></td>
							</tr>
						</thead>

						<tbody width="100%">
							<tr><th <?php if(C('ismobile') == 1): ?>colspan="2"<?php else: ?>colspan="4"<?php endif; ?>><?php echo L('BASIC_INFO');?></th></tr>
							<tr>
								<td width="15%" class="tdleft"><?php echo L('CONTRACT_NO');?></td>
								<td width="35%"><input  type="text" name="number" id="number" value="<?php echo ($contract_custom); ?>"></td>
								<?php if(C('ismobile') == 1): ?></tr><tr><?php endif; ?>
								<td class="tdleft"><?php echo L('SIGNING_TIME');?></td>
								<td><input onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:s'})"  type="text" id="due_time" name="due_time"/></td>
							</tr>
							<tr>
								<td width="15%" class="tdleft"><?php echo L('SOURCE_OF_BUSINESS_OPPORTUNITIES_CLICK_ON_THE_SELECT');?></td>
								<td width="35%">
									<input type="hidden" name="business_id" id="business_id" />
									<input  type="text" name="business_name" id="business_name" />
									<a target="_blank" href="<?php echo U('business/add');?>"><?php echo L('NEW_BUSINESS_OPPORTUNITIES');?></a>
								</td>
								<?php if(C('ismobile') == 1): ?></tr><tr><?php endif; ?>
								<td class="tdleft"><?php echo L('CONTACTS');?></td>
								<td><input type="text" readonly="readonly" id="contacts_name" value=""/></td>
							</tr>
							<tr>
								<td width="15%" class="tdleft"><?php echo L('SOURCE_OF_CUSTOMERS');?></td>
								<td width="35%" colspan="3">
									<input readonly="readonly" type="text" id="customer_name"/>
									<input type="hidden" name="customer_id" id="customer_id" value=""/>
								</td>
							</tr>
							<tr>
								<td class="tdleft"><?php echo L('OWNER_ROLE');?></td>
								<td>
									<input type="hidden" name="owner_role_id" id="owner_id" value="<?php echo (session('role_id')); ?>"/>
									<input type="text" name="owner_role_name" id="owner_name" value="<?php echo (session('name')); ?>"/>
								</td>
								<td class="tdleft"><?php echo L('QUOTATION');?></td>
								<td><input type="text" name="price" id="price"/></td>
							</tr>
							<tr>
								<td class="tdleft"><?php echo L('THE_TIME_WHICH_THE_CONTRACT_COMES_INTO_FORCE');?></td>
								<td>
									<input type="text" id="start_date" name="start_date" onClick="WdatePicker({dateFmt:'yyyy-MM-dd', maxDate:&quot;#F{$dp.$D('end_date')||'2038-01-01'}&quot;})" class="Wdate"/>
								</td>
								<td class="tdleft"><?php echo L('CONTRACT_TIME');?></td>
								<td colspan="3">
									<input type="text" id="end_date" onClick="WdatePicker({dateFmt:'yyyy-MM-dd', minDate:&quot;#F{$dp.$D('start_date')}&quot;,maxDate:'2038-01-01'})" name="end_date" class="Wdate"/>
								</td>
							</tr>
							<tr>
								<td class="tdleft"><?php echo L('TERMS_AND_CONDITIONS');?></td>
								<td <?php if(C('ismobile') != 1): ?>colspan="3"<?php endif; ?>><textarea class="span6" rows="3" name="content" id="content" style="width: 800px; height: 350px;"></textarea></td>
							</tr>
							<tr>
							</tr>
							<tr>
								<td class="tdleft"><?php echo L('THE_CONTRACT_DESCRIPTION');?></td>
								<td <?php if(C('ismobile') != 1): ?>colspan="3"<?php endif; ?>><textarea class="span6" rows="3" name="description" id="description"></textarea></td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td>&nbsp;</td>
								<td colspan="3">
									<input name="submit" class="btn btn-primary" type="submit" value="<?php echo L('SAVE');?>"/> &nbsp;
									<input class="btn" type="button" onclick="javascript:history.go(-1)" value="<?php echo L('RETURN');?>"/>&nbsp;&nbsp;
								</td>
							</tr>
						</tfoot>
					</table>
				</form>
			</div>
		</div>
	</div>
	<div id="dialog-business" title="<?php echo L('SELECT_BUSINESS_OPPORTUNITIES');?>">loading...</div>
	<div id="dialog-customer" title="<?php echo L('DIALOG_SELECT_CUSTOMER');?>">loading...</div>
	<div id="dialog-role-list2" title="<?php echo L('SELECT_HEAD');?>">loading...</div>
<script type="text/javascript">
<?php if(C('ismobile') == 1): ?>width=$('.container').width() * 0.9;<?php else: ?>width=800;<?php endif; ?>

	$(function(){
		$(document).on('click','#business_name',function () {
			$('#dialog-business').dialog('open');
			$('#dialog-business').load("<?php echo U('business/listDialog');?>");
		});
		/*$(document).on('click','#customer_name',function () {
			$('#dialog-customer').dialog('open');
			$('#dialog-customer').load('<?php echo U("customer/listDialog");?>');
		});*/
		$('#owner_name').click(function () {
			$('#dialog-role-list2').dialog('open');
			$('#dialog-role-list2').load('<?php echo U("user/listDialog");?>');
			return false;
		});
	});
	$('#dialog-business').dialog({
		autoOpen: false,
		modal: true,
		width: width,
		maxHeight: 400,
		buttons: {
			"Ok": function () {
				var item = $('input:radio[name="business"]:checked').val();
				var name = $('input:radio[name="business"]:checked').parent().next().html();
				var name2 = $('input:radio[name="business"]:checked').parent().next().next().find('a').html();
				var name3 = $('input:radio[name="business"]:checked').parent().next().next().next().find('a').html();
				var dialog_customer_id = $('input:radio[name="business"]:checked').next().val();
				$('#business_name').val(name);
				$('#business_id').val(item);
				$('#customer_name').val(name2);
				$('#contacts_name').val(name3);
				$('#customer_id').val(dialog_customer_id);
				
				if ($('input[name="name"]').val() == "")$('input[name="name"]').val(name);
				$(this).dialog("close");
			},
			"Cancel": function () {
				$(this).dialog("close");
			}
		},
		position:["center",100]
	});
	
	$("#dialog-role-list2").dialog({
		autoOpen: false,
		modal: true,
		width: width,
		maxHeight: 400,
		buttons: { 
			"Ok": function () {
				var item = $('input:radio[name="owner"]:checked').val();
				var name = $('input:radio[name="owner"]:checked').parent().next().html();
				$('#owner_id').val(item);
				$('#owner_name').val(name);
				$(this).dialog("close"); 
			},
			"Cancel": function () {
				$(this).dialog("close");
			}
		},
		position: ["center", 100]
	});
	
	$("#dialog-customer").dialog({
		autoOpen: false,
		modal: true,
		width: width,
		maxHeight: 400,
		buttons: { 
			"Ok": function () {
				var item = $('input:radio[name="customer"]:checked').val();
				var name = $('input:radio[name="customer"]:checked').parent().next().html();
				$('#customer_id').val(item);
				$('#customer_name').val(name);
				$(this).dialog("close"); 
			},
			"Cancel": function () {
				$(this).dialog("close");
			}
		},
		position: ["center", 100]
	});
</script>

</body>
</html>