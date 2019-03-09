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
<script src="__PUBLIC__/js/PCASClass.js" type="text/javascript"></script>
<script type="text/javascript" src="__PUBLIC__/js/formValidator-4.0.1.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="__PUBLIC__/js/formValidatorRegex.js" charset="UTF-8"></script>
<link rel="stylesheet" href="__PUBLIC__/css/kindeditor.css" type="text/css" />
<div class="container">
	<div class="page-header">
		<h4><?php echo L('ADD_LEADS');?></h4>
	</div>		
	<div class="row">
		<div class="span12">
			<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
			<form id="form1" action="<?php echo U('leads/add');?>" method="post">
				<input type="hidden" name="creator_role_id" value="<?php echo (session('role_id')); ?>"/>
				
				<table class="table" width="95%" border="0" cellspacing="1" cellpadding="0">
					<tfoot>
						<tr> 
							<td style="text-align:center;" colspan="4"><input name="submit" class="btn btn-primary" type="submit" value="<?php echo L('SAVE');?>"/> &nbsp;<input class="btn btn-primary" name="submit" type="submit" value="<?php echo L('SAVE AND NEW');?>"/>&nbsp; <input class="btn" type="button" onclick="javascript:history.go(-1)"  value="<?php echo L('RETURN');?>"/></td>					
						</tr>
					</tfoot>
					<tbody>
						<tr><th colspan="4"><?php echo L('MIAN_INFO');?></th></tr>
						<tr>
							<td class="tdleft"><?php echo L('OWNER_ROLE');?>:</td>
							<td><input type="hidden" id="owner_id" name="owner_role_id" value="<?php echo (session('role_id')); ?>"/><input type="text" id="owner_name" value="<?php echo (session('name')); ?>" name="owner_name"/> &nbsp;&nbsp;<input class="btn btn-mini" id="remove"  type="button" value="<?php echo L('PUT_LEADS_INTO_THE_POOL');?>"/> &nbsp;<a target="_blank" href="http://www.5kcrm.com/index.php?m=question&a=view&id=12"><?php echo L('WHAT_IS_THE_LEADS_POOL');?></a></td>
						<?php $j=0; ?>
						<?php if(is_array($field_list['main'])): $i = 0; $__LIST__ = $field_list['main'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $j++; ?>
                        <?php if($vo['form_type'] == 'textarea' or $vo['form_type'] == 'editor' or $vo['form_type'] == 'address'): if($i%2 != 0): ?><td colspan="2">&nbsp;</td>
                            </tr><?php endif; ?>
                            <tr>
                                <td class="tdleft" width="15%"><?php echo ($vo["name"]); ?>:</td>
                                <td colspan="3"><?php echo ($vo["html"]); ?></td>
                            </tr>
                            <?php if($i%2 == 0 && count($field_list['main']) != $j): $i++; endif; ?>
                        <?php else: ?>
                            <?php if($i%2 == 0): ?><tr><?php endif; ?>
                                <td class="tdleft" width="15%"><?php echo ($vo["name"]); ?>:</td>
                                <td width="35%"><?php echo ($vo["html"]); ?></td>
                            <?php if($i%2 != 0): ?></tr><?php endif; ?>
                            <?php if($i%2 == 0 && count($field_list['main']) == $j): ?><td colspan="2">&nbsp;</td>
                                </tr><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
						<tr><th  colspan="4"><?php echo L('EXTRA_INFO');?></th></tr>
						<?php $j=0; ?>
						<?php if(is_array($field_list['data'])): $i = 0; $__LIST__ = $field_list['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $j++; ?>
                        <?php if($vo['form_type'] == 'textarea' or $vo['form_type'] == 'editor' or $vo['form_type'] == 'address'): if($i%2 == 0): ?><td colspan="2">&nbsp;</td>
                            </tr><?php endif; ?>
                            <tr>
                                <td class="tdleft" width="15%"><?php echo ($vo["name"]); ?>:</td>
                                <td colspan="3"><?php echo ($vo["html"]); ?></td>
                            </tr>
                            <?php if($i%2 != 0 && count($field_list['data']) != $j): $i++; endif; ?>
                        <?php else: ?>
                            <?php if($i%2 != 0): ?><tr><?php endif; ?>
                                <td class="tdleft" width="15%"><?php echo ($vo["name"]); ?>:</td>
                                <td width="35%"><?php echo ($vo["html"]); ?></td>
                            <?php if($i%2 == 0): ?></tr><?php endif; ?>
                            <?php if($i%2 != 0 && count($field_list['data']) == $j): ?><td colspan="2">&nbsp;</td>
                                </tr><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>
<div id="dialog-role-list" title="<?php echo L('CHOOSE_THE_LEADS_OWNER');?>">loading...</div>
<div class="hide" id="dialog-validate" title="<?php echo L('VALIDATE_COMPANY_RESULT');?>">
	<div id="search_leads_content"></div>
	<div id="search_customer_content"></div>
</div>
<script type="text/javascript">
<?php if(C('ismobile') == 1): ?>width=$('.container').width() * 0.9;<?php else: ?>width=800;<?php endif; ?>
$("#dialog-role-list").dialog({
	autoOpen: false,
	modal: true,
	width: width,
	maxHeight: 400,
	buttons: {
		"Ok": function () {
			var item = $('input:radio[name="owner"]:checked').val();
			var name = $('input:radio[name="owner"]:checked').parent().next().html();
			if(item) {
				$('#owner_name').val(name);
				$('#owner_id').val(item);
			}
			$(this).dialog("close"); 
		},
		"Cancel": function () {
			$(this).dialog("close");
		}
	},
	position: ["center", 100]
});
$("#dialog-validate").dialog({
	autoOpen: false,
	modal: true,
	width: 400,
	maxHeight: 400,
	buttons: { 
		"ok": function () {
			$(this).dialog("close"); 
		}
	},
	position: ["center", 100]
});
$(function(){
	$('#owner_name').click(
			function(){
				$('#dialog-role-list').dialog('open');
				$('#dialog-role-list').load("<?php echo U('user/listDialog');?>");
			}
		);

	$('#name').blur(
		function(){
			name = $('#name').val();
			if(name!=''){
				$.post('<?php echo U("leads/check");?>',
					{
						name:name
					},
					function(data){
						if(data.data != 0){
							var leads_result = '';
							var customer_result = '';
							if(data.data['leads'].length>0){
								$.each(data.data['leads'], function(k, v){
									leads_result += (k+1)+'、'+v+'</br>';
								});
								$("#search_leads_content").html("<h5><?php echo L('SAME_LEADS_COMPANY');?></h5>"+leads_result);
							}
							if(data.data['customer'].length>0){
								$.each(data.data['customer'],function(k, v){
									customer_result += (k+1)+'、'+v+'</br>';
								});
								$("#search_customer_content").html("<h5><?php echo L('SAME_CUSTOMER_COMPANY');?></h5>"+customer_result);
							}
							if(data.data['customer'].length>0 || data.data['leads'].length>0)
								$('#dialog-validate').dialog('open');
							
							
						}
					},
				'json');
			} else {
				alert('<?php echo L('NEED_COMPANY_NAME');?>');
			}
		}
	);
	$('#remove').click(
		function(){
			alert("<?php echo L('PUT_LEADS_INTO_THE_POOL_AND_PLEASE_CLICK_SAVE');?>");
			$('#owner_id').attr('value', '');
			$('#owner_name').attr('value', "<?php echo L('PUT_LEADS_INTO_THE_POOL');?>");
		}
	);
});

$(function(){
    $.formValidator.initConfig({formID:"form1",debug:false,submitOnce:true,
        onError:function(msg,obj,errorlist){
        alert(msg);
    },
    submitAfterAjaxPrompt : "<?php echo L('AJAX_VALIDATING_PLEASE_WAIT');?>"
});
<?php if(is_array($field_list[main])): $i = 0; $__LIST__ = $field_list[main];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['is_validate'] == 1): if($vo['form_type'] != 'box' || $vo['setting']['type'] == 'select'): ?>$("#<?php echo ($vo[field]); ?>").formValidator({
	            tipID:"<?php echo ($vo[field]); ?>Tip",
	            <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('MUST_FILL_IN');?></span>",
				empty:false,
	            <?php else: ?>
				empty:true,
	            onShow:" ",<?php endif; ?>
	            onFocus:" ",
	            onCorrect:"<span style='color:green;'>√</span>"
	        }).inputValidator({
	            <?php if($vo['is_null'] == 1): ?>min:1,max:<?php echo (($vo[max_length])?($vo[max_length]):"255"); ?>,
	            onshow:"<?php echo ($vo[name]); echo L('CAN_NOT_EMPTY');?>",
	            <?php else: ?>
	            min:0,max:<?php echo (($vo[max_length])?($vo[max_length]):"255"); ?>,<?php endif; ?>
	            onErrorMin:"<?php echo ($vo[name]); echo L('CAN_NOT_EMPTY');?>",
	            onErrorMax:"<?php echo ($vo[name]); echo L('EXCEEDS_THE_MAXIMUM_LENGTH'); echo (($vo[max_length])?($vo[max_length]):"255"); ?>"
	         });
            <?php if($vo['form_type'] == 'email'): ?>$("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"email",
                dataType:"enum",
                onError:"<?php echo ($vo[name]); echo L('INCORRECT_FORMAT');?>"
            });
            <?php elseif($vo['form_type'] == 'mobile'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"mobile",
                dataType:"enum",
                onError:"<?php echo ($vo[name]); echo L('INCORRECT_FORMAT');?>"
            });
            <?php elseif($vo['form_type'] == 'phone'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"tel",
                dataType:"enum",
                onError:"<?php echo ($vo[name]); echo L('INCORRECT_FORMAT');?>"
            });
            <?php elseif($vo['form_type'] == 'datetime'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"date",
                dataType:"enum",
                onError:"<?php echo ($vo[name]); echo L('INCORRECT_FORMAT');?>"
            });
            <?php elseif($vo['form_type'] == 'number'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"num",
                dataType:"enum",
                onError:"<?php echo ($vo[name]); echo L('INCORRECT_FORMAT');?>"
            });<?php endif; ?>
             <?php if($vo['is_unique'] == 1): ?>$("#<?php echo ($vo[field]); ?>").ajaxValidator({
                dataType : "json",
                type : "GET",
                async : false,
                url : "<?php echo U('leads/validate');?>",
                success : function(data){
                    if( data.status == 1 ) return false;
                    if( data.status == 0 ) return true;
                    return false;
                },
                error: function(jqXHR, textStatus, errorThrown){alert("{:L('WATING_FOR_SERVER_CALL_BACK')}"+errorThrown);},
                onError : "<?php echo L('UNAVAILABLE_FIELDS',array($vo[name],$vo[name]));?>",
                onWait : "<?php echo L('CHACKING_FIELDS',array($vo['name']));?>"
            });<?php endif; ?>
         <?php else: ?>
             <?php if($vo['setting']['type'] == 'checkbox'): ?>$(":checkbox[name='<?php echo ($vo['field']); ?>[]']").formValidator({
                 tipID:"<?php echo ($vo[field]); ?>Tip",
                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('MUST_FILL_IN');?></span>",
                 <?php else: ?>
                 onShow:" ",<?php endif; ?>
                 onFocus:" ",
                 onCorrect:"<span style='color:green;'>√</span>"
             }).inputValidator({
             	<?php if($vo['is_null'] == 1): ?>min:1,
                 <?php else: ?>
                 min:0,<?php endif; ?>
             	onError:"<?php echo L('FIELDS_MIN',array($vo['name']));?>"
             });
             <?php elseif($vo['setting']['type'] == 'select'): ?>
	        	 $("#<?php echo ($vo[field]); ?>").formValidator({
	                 tipID:"<?php echo ($vo[field]); ?>Tip",
	                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('MUST_SELECTED');?></span>",
	                 <?php else: ?>
	                 onShow:" ",<?php endif; ?>
	                 onFocus:" ",
	                 onCorrect:"<span style='color:green;'>√</span>"
	             }).inputValidator({
	             	<?php if($vo['is_null'] == 1): ?>min:1,
	                 <?php else: ?>
	                 min:0,<?php endif; ?>
	             	onError:"<?php echo L('FIELDS_MIN',array($vo['name']));?>"
	             });
             <?php else: ?>
	             $(":radio[name='<?php echo ($vo['field']); ?>']").formValidator({
	                 tipID:"<?php echo ($vo[field]); ?>Tip",
	                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('MUST_SELECTED');?></span>",
	                 <?php else: ?>
	                 onShow:" ",<?php endif; ?>
	                 onFocus:" ",
	                 onCorrect:"<span style='color:green;'>√</span>"
	             }).inputValidator({
	             	<?php if($vo['is_null'] == 1): ?>min:1,
	                 <?php else: ?>
	                 min:0,<?php endif; ?>
	             	onError:"<?php echo L('FIELDS_MIN',array($vo['name']));?>"
	             });<?php endif; endif; endif; endforeach; endif; else: echo "" ;endif; ?>
<?php if(is_array($field_list[data])): $i = 0; $__LIST__ = $field_list[data];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['is_validate'] == 1): if($vo['form_type'] != 'box' || $vo['setting']['type'] == 'select'): ?>$("#<?php echo ($vo[field]); ?>").formValidator({
	            tipID:"<?php echo ($vo[field]); ?>Tip",
	            <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('MUST_FILL_IN');?></span>",
				empty:false,
	            <?php else: ?>
				empty:true,
	            onShow:" ",<?php endif; ?>
	            onFocus:" ",
	            onCorrect:"<span style='color:green;'>√</span>"
	        }).inputValidator({
	            <?php if($vo['is_null'] == 1): ?>min:1,max:<?php echo (($vo[max_length])?($vo[max_length]):"255"); ?>,
	            onshow:"<?php echo ($vo[name]); echo L('CAN_NOT_EMPTY');?>",
	            <?php else: ?>
	            min:0,max:<?php echo (($vo[max_length])?($vo[max_length]):"255"); ?>,<?php endif; ?>
	            onErrorMin:"<?php echo ($vo[name]); echo L('CAN_NOT_EMPTY');?>",
	            onErrorMax:"<?php echo ($vo[name]); echo L('EXCEEDS_THE_MAXIMUM_LENGTH'); echo (($vo[max_length])?($vo[max_length]):"255"); ?>"
	         });
            <?php if($vo['form_type'] == 'email'): ?>$("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"email",
                dataType:"enum",
                onError:"<?php echo ($vo[name]); echo L('INCORRECT_FORMAT');?>"
            });
            <?php elseif($vo['form_type'] == 'mobile'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"mobile",
                dataType:"enum",
                onError:"<?php echo ($vo[name]); echo L('INCORRECT_FORMAT');?>"
            });
            <?php elseif($vo['form_type'] == 'phone'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"tel",
                dataType:"enum",
                onError:"<?php echo ($vo[name]); echo L('INCORRECT_FORMAT');?>"
            });
            <?php elseif($vo['form_type'] == 'datetime'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"date",
                dataType:"enum",
                onError:"<?php echo ($vo[name]); echo L('INCORRECT_FORMAT');?>"
            });
            <?php elseif($vo['form_type'] == 'number'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"num",
                dataType:"enum",
                onError:"<?php echo ($vo[name]); echo L('INCORRECT_FORMAT');?>"
            });<?php endif; ?>
             <?php if($vo['is_unique'] == 1): ?>$("#<?php echo ($vo[field]); ?>").ajaxValidator({
                dataType : "json",
                type : "GET",
                async : false,
                url : "<?php echo U('leads/validate');?>",
                success : function(data){
                    if( data.status == 1 ) return false;
                    if( data.status == 0 ) return true;
                    return false;
                },
                error: function(jqXHR, textStatus, errorThrown){alert("{:L('WATING_FOR_SERVER_CALL_BACK')}"+errorThrown);},
                onError : "<?php echo L('UNAVAILABLE_FIELDS',array($vo[name],$vo[name]));?>",
                onWait : "<?php echo L('CHACKING_FIELDS',array($vo['name']));?>"
            });<?php endif; ?>
         <?php else: ?>
             <?php if($vo['setting']['type'] == 'checkbox'): ?>$(":checkbox[name='<?php echo ($vo['field']); ?>[]']").formValidator({
                 tipID:"<?php echo ($vo[field]); ?>Tip",
                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('MUST_FILL_IN');?></span>",
                 <?php else: ?>
                 onShow:" ",<?php endif; ?>
                 onFocus:" ",
                 onCorrect:"<span style='color:green;'>√</span>"
             }).inputValidator({
             	<?php if($vo['is_null'] == 1): ?>min:1,
                 <?php else: ?>
                 min:0,<?php endif; ?>
             	onError:"<?php echo L('FIELDS_MIN',array($vo['name']));?>"
             });
             <?php elseif($vo['setting']['type'] == 'select'): ?>
	        	 $("#<?php echo ($vo[field]); ?>").formValidator({
	                 tipID:"<?php echo ($vo[field]); ?>Tip",
	                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('MUST_SELECTED');?></span>",
	                 <?php else: ?>
	                 onShow:" ",<?php endif; ?>
	                 onFocus:" ",
	                 onCorrect:"<span style='color:green;'>√</span>"
	             }).inputValidator({
	             	<?php if($vo['is_null'] == 1): ?>min:1,
	                 <?php else: ?>
	                 min:0,<?php endif; ?>
	             	onError:"<?php echo L('FIELDS_MIN',array($vo['name']));?>"
	             });
             <?php else: ?>
	             $(":radio[name='<?php echo ($vo['field']); ?>']").formValidator({
	                 tipID:"<?php echo ($vo[field]); ?>Tip",
	                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('MUST_SELECTED');?></span>",
	                 <?php else: ?>
	                 onShow:" ",<?php endif; ?>
	                 onFocus:" ",
	                 onCorrect:"<span style='color:green;'>√</span>"
	             }).inputValidator({
	             	<?php if($vo['is_null'] == 1): ?>min:1,
	                 <?php else: ?>
	                 min:0,<?php endif; ?>
	             	onError:"<?php echo L('FIELDS_MIN',array($vo['name']));?>"
	             });<?php endif; endif; endif; endforeach; endif; else: echo "" ;endif; ?>
});

</script>

</body>
</html>