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
			<h4><?php echo L('EDIT_THE_CUSTOMER');?></h4>
		</div>
		<div class="row">
			<div class="span12">
				<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
				<form action="<?php echo U('customer/edit', 'id='.$customer['customer_id']);?>" method="post" id="form1" >
                <input type="hidden" name="customer_id" value="<?php echo ($customer['customer_id']); ?>">
					<table class="table table-hover" width="95%" border="0" cellspacing="1" cellpadding="0">
						<tfoot>
							<tr>
								<td style="text-align:center;" colspan="4" ><input class="btn btn-primary" name="submit" type="submit" value="<?php echo L('save');?>"/>  &nbsp;<input class="btn" type="button" onclick="location.href='<?php echo U('customer/index');?>'" value="<?php echo L('return');?>"/></td>
							</tr>
						</tfoot>
						<tbody>
							<tr><th colspan="4"><?php echo L('BASIC_INFORMATION');?></th></tr>
                            <tr>
                                <td class="tdleft" width="15%"><?php echo L('PRINCIPAL');?></td>
                                <td>
                                    <input type="hidden" id="owner_id" name="owner_role_id" value="<?php echo ($customer["owner_role_id"]); ?>"/>
                                    <input type="text" id="owner_name" value="<?php echo ($customer["owner"]["user_name"]); ?>" /> &nbsp;&nbsp;
                                    <input class="btn btn-mini" id="remove"  type="button" value="<?php echo L('IN_THE_CUSTOMER_POOL');?>"/>
                                </td>
                                <td class="tdleft" width="15%"><?php echo L('THE_PRIMARY_CONTACT');?></td>
                                <td>
                                    <input type="hidden" id="contacts_id" name="contacts_id" value="<?php echo ($customer["contacts_id"]); ?>"/>
                                    <input type="text" id="contacts_name" value="<?php echo ($customer["contacts_name"]); ?>" />
                                </td>
                            </tr>
							<?php $j=0; ?>
                            <?php if(is_array($field_list['main'])): $i = 0; $__LIST__ = $field_list['main'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $j++; ?>
                            <?php if($vo['form_type'] == 'textarea' or $vo['form_type'] == 'editor' or $vo['form_type'] == 'address'): if($i%2 == 0): ?><td colspan="2">&nbsp;</td>
                                </tr><?php endif; ?>
                                <tr>
                                    <td class="tdleft" width="15%"><?php echo ($vo["name"]); ?>:</td>
                                    <td colspan="3"><?php echo ($vo["html"]); ?></td>
                                </tr>
                                <?php if($i%2 != 0 && count($field_list['main']) != $j): $i++; endif; ?>
                            <?php else: ?>
                                <?php if($i%2 != 0): ?><tr><?php endif; ?>
                                    <td class="tdleft" width="15%"><?php echo ($vo["name"]); ?>:</td>
                                    <td width="35%"><?php echo ($vo["html"]); ?></td>
                                <?php if($i%2 == 0): ?></tr><?php endif; ?>
                                <?php if($i%2 != 0 && count($field_list['main']) == $j): ?><td colspan="2">&nbsp;</td>
                                    </tr><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
							<?php if(0): ?><tr>
									<th colspan="4"><?php echo L('THE_PRIMARY_CONTACT_INFORMATION');?></th>
								</tr>
								<tr>
									<td class="tdleft" ><?php echo L('NAME');?></td>
									<td><input class="user_input" type="text" name="con_name" value="<?php echo ($leads['contacts_name']); ?>"></td>
									<td class="tdleft" ><?php echo L('NAMED');?></td>
									<td><input class="user_input" type="text" name="saltname" value="<?php echo ($leads['saltname']); ?>"></td>
								</tr>
								<tr>
									<td class="tdleft" ><?php echo L('MAILBOX');?></td>
									<td><input class="user_input" name="con_email" type="text"  value="<?php echo ($leads['email']); ?>"/></td>
									<td class="tdleft" ><?php echo L('POSITION');?></td>
									<td>
										<input class="user_input"  value="<?php echo ($leads['position']); ?>" type="text" name="con_post"/>
									</td>
								</tr>
								<tr>
									<td class="tdleft">QQ</td>
									<td><input class="user_input" name="con_qq" data-type="nummber"  type="text" value="<?php echo ($leads['qqnumber']); ?>" /></td>
									<td class="tdleft" ><?php echo L('CELLPHONE');?></td>
									<td><input class="user_input" name="con_telephone" data-type="nummber"  value="<?php echo ($leads['mobile']); ?>" type="text" /></td>
								</tr>
								<tr>
									<td class="tdleft" ><?php echo L('REMARK');?></td>
									<td colspan="3"><textarea class="span8" rows="3" name="con_description" ></textarea></td>
								</tr><?php endif; ?>
							<tr><th  colspan="4"><?php echo L('OVERHEAD_INFORMATION');?></th></tr>
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
</div>
<div id="dialog-role-list" class="hide" title="<?php echo L('SELECT_ALL_OF_CUSTOMERS');?>">loading...</div>
<div id="dialog-contacts-list" class="hide" title="<?php echo L('SELECT_THE_PRIMARY_CONTACT');?>">loading...</div>
<div class="hide" id="dialog-validate" title="<?php echo L('CUSTOMER_NAME_TEST_RESULTS');?>">
	<?php echo L('HAVE_THE_FOLLOWING_CUSTOMERS_ARE_SIMILAR_TO_THE_CUSTOMER_NAME');?>
	<div id="search_content"></div>
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
			if(item){
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
$("#dialog-contacts-list").dialog({
	autoOpen: false,
	modal: true,
	width: width,
	maxHeight: 400,
	buttons: { 
		"Ok": function () {
			var item = $('input:radio[name="contacts"]:checked').val();
			var name = $('input:radio[name="contacts"]:checked').parent().next().html();
			if(item){
				$('#contacts_name').val(name);
				$('#contacts_id').val(item);
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
		"<?php echo L('AFFIRM');?>": function () {
			$(this).dialog("close"); 
		}
	},
	position: ["center", 100]
});	
$(function(){
	<?php if($customer.account_type): ?>$("#account_type option[value='<?php echo ($customer["account_type"]); ?>']").prop("selected", true);<?php endif; ?>
	<?php if($customer.no_of_employees): ?>$("#no_of_employees option[value='<?php echo ($customer["no_of_employees"]); ?>']").prop("selected", true);<?php endif; ?>
	<?php if($customer.annual_revenue): ?>$("#annual_revenue option[value='<?php echo ($customer["annual_revenue"]); ?>']").prop("selected", true);<?php endif; ?>
	<?php if($customer.industry_id): ?>$("#industry option[value='<?php echo ($customer["industry_id"]); ?>']").prop("selected", true);<?php endif; ?>
	<?php if($customer.ownership): ?>$("#ownership option[value='<?php echo ($customer["ownership"]); ?>']").prop("selected", true);<?php endif; ?>
	<?php if($customer.source_id): ?>$("#source option[value='<?php echo ($customer["source_id"]); ?>']").prop("selected", true);<?php endif; ?>
	$('#owner_name').click(
		function(){
			$('#dialog-role-list').dialog('open');
			$('#dialog-role-list').load("<?php echo U('user/listDialog');?>");
		}
	);
    $('#contacts_name').click(
		function(){
			$('#dialog-contacts-list').dialog('open');
			$('#dialog-contacts-list').load('<?php echo U("contacts/radioListDialog","r=RContactsCustomer&module=customer&id=".$customer["customer_id"]);?>');
		}
	);
    $('#remove').click(
		function(){
			alert('<?php echo L('IS_INTO_THE_CUSTOMER_POOL_PLEASE_CLICK_SAVE');?>');
			$('#owner_id').attr('value', '');
			$('#owner_name').attr('value', '<?php echo L('IN_THE_CUSTOMER_POOL');?>');
		}
	);
	$('#name').blur(
		function(){
			name = $('#name').val();
			if(name!=''){
				$.post('<?php echo U("customer/check");?>',
					{
						name:name
					},
					function(data){
						if(data.data != 0){
							$result = '';
							$.each(data.data, function(k, v){
								$result += (k+1)+'、'+v+'</br>';
							});
							$('#dialog-validate').dialog('open');
							$("#search_content").html($result);
						}
					},
				'json');
			} else {
				alert('<?php echo L('PLEASE_FILL_OUT_THE_CUSTOMER_NAME');?>');
			}
		}
	);
});
$(function(){
    $.formValidator.initConfig({formID:"form1",debug:false,submitOnce:true,
        onError:function(msg,obj,errorlist){
        alert(msg);
    },
    submitAfterAjaxPrompt : '<?php echo L('THERE_ARE_DATA_ARE_ASYNCHRONOUS_VALIDATION');?>'
    });
<?php if(is_array($field_list[main])): $i = 0; $__LIST__ = $field_list[main];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['is_validate'] == 1): if($vo['form_type'] != 'box'): ?>$("#<?php echo ($vo[field]); ?>").formValidator({
	            tipID:"<?php echo ($vo[field]); ?>Tip",
	            <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('REQUIRED');?></span>",
				empty:false,
	            <?php else: ?>
	            onShow:" ",
				empty:true,<?php endif; ?>
	            onFocus:" ",
	            onCorrect:"<span style='color:green;'>√</span>"
	        }).inputValidator({
	            <?php if($vo['is_null'] == 1): ?>min:1,max:<?php echo (($vo[max_length])?($vo[max_length]):"255"); ?>,
	            onshow:"<font style='color:red;'><?php echo L('NOT NULL',array($vo[name]));?></font>",
	            <?php else: ?>
	            min:0,max:<?php echo (($vo[max_length])?($vo[max_length]):"255"); ?>,<?php endif; ?>
	            onErrorMin:"<?php echo L('NOT NULL',array($vo[name]));?>",
	            onErrorMax:"<?php echo L('MAXIMUM_REQUEST_LENGTH_EXCEEDED',array($vo[name]));?>"
	         });
            <?php if($vo['form_type'] == 'email'): ?>$("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"email",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });
            <?php elseif($vo['form_type'] == 'mobile'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"mobile",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });
            <?php elseif($vo['form_type'] == 'phone'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"tel",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });
            <?php elseif($vo['form_type'] == 'datetime'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"date",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });
            <?php elseif($vo['form_type'] == 'number'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"num",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });<?php endif; ?>
             <?php if($vo['is_unique'] == 1): ?>$("#<?php echo ($vo[field]); ?>").ajaxValidator({
                dataType : "json",
                type : "GET",
                isValid : true,
                data : {
                    id:<?php echo ($customer["customer_id"]); ?>
                    },
                async : false,
                url : "<?php echo U('customer/validate');?>",
                success : function(data){
                    if( data.status == 1 ) return false;
                    if( data.status == 0 ) return true;
                    return false;
                },
                error: function(jqXHR, textStatus, errorThrown){alert("{:L('THE_SERVER_DID_NOT_RETURN_DATA_MAY_BE_THE_SERVER_BUSY_PLEASE_TRY_AGAIN')}"+errorThrown);},
                onError : "<?php echo L('THIS_DISABLED_PLEASE_CHANGE',array($vo[name],$vo[name]));?>",
                onWait : "<?php echo L('LEGITIMACY_CHECKING_PLEASE_WAIT',array($vo[name]));?>"
            });<?php endif; ?>
         <?php else: ?>
             <?php if($vo['setting']['type'] == 'checkbox'): ?>$(":checkbox[name='<?php echo ($vo['field']); ?>[]']").formValidator({
                 tipID:"<?php echo ($vo[field]); ?>Tip",
                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('AFFIRMATIVELY_CHOSEN_ITEM');?></span>",
                 <?php else: ?>
                 onShow:" ",<?php endif; ?>
                 onFocus:" ",
                 onCorrect:"<span style='color:green;'>√</span>"
             }).inputValidator({
             	<?php if($vo['is_null'] == 1): ?>min:1,
                 <?php else: ?>
                 min:0,<?php endif; ?>
             	onError:"<?php echo L('PLEASE_SELECT',array($vo[name]));?>"
             });
             <?php elseif($vo['setting']['type'] == 'select'): ?>
            	 $("#<?php echo ($vo[field]); ?>").formValidator({
	                 tipID:"<?php echo ($vo[field]); ?>Tip",
	                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('AFFIRMATIVELY_CHOSEN_ITEM');?></span>",
	                 <?php else: ?>
	                 onShow:" ",<?php endif; ?>
	                 onFocus:" ",
	                 onCorrect:"<span style='color:green;'>√</span>"
	             }).inputValidator({
	             	<?php if($vo['is_null'] == 1): ?>min:1,
	                 <?php else: ?>
	                 min:0,<?php endif; ?>
	             	onError:"<?php echo L('PLEASE_SELECT',array($vo[name]));?>"
	             });
             <?php else: ?>
             $(":radio[name='<?php echo ($vo['field']); ?>']").formValidator({
                 tipID:"<?php echo ($vo[field]); ?>Tip",
                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('AFFIRMATIVELY_CHOSEN_ITEM');?></span>",
                 <?php else: ?>
                 onShow:" ",<?php endif; ?>
                 onFocus:" ",
                 onCorrect:"<span style='color:green;'>√</span>"
             }).inputValidator({
             	<?php if($vo['is_null'] == 1): ?>min:1,
                 <?php else: ?>
                 min:0,<?php endif; ?>
             	onError:"<?php echo L('PLEASE_SELECT',array($vo[name]));?>"
             });<?php endif; endif; endif; endforeach; endif; else: echo "" ;endif; ?>
<?php if(is_array($field_list[data])): $i = 0; $__LIST__ = $field_list[data];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['is_validate'] == 1): if($vo['form_type'] != 'box'): ?>$("#<?php echo ($vo[field]); ?>").formValidator({
	            tipID:"<?php echo ($vo[field]); ?>Tip",
	            <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('REQUIRED');?></span>",
				empty:false,
	            <?php else: ?>
	            onShow:" ",
				empty:true,<?php endif; ?>
	            onFocus:" ",
	            onCorrect:"<span style='color:green;'>√</span>"
	        }).inputValidator({
	            <?php if($vo['is_null'] == 1): ?>min:1,max:<?php echo (($vo[max_length])?($vo[max_length]):"255"); ?>,
	            onshow:"<font style='color:red;'><?php echo L('NOT NULL',array($vo[name]));?></font>",
	            <?php else: ?>
	            min:0,max:<?php echo (($vo[max_length])?($vo[max_length]):"255"); ?>,<?php endif; ?>
	            onErrorMin:"<?php echo L('NOT NULL',array($vo[name]));?>",
	            onErrorMax:"<?php echo L('MAXIMUM_REQUEST_LENGTH_EXCEEDED',array($vo[name]));?>"
	         });
            <?php if($vo['form_type'] == 'email'): ?>$("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"email",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });
            <?php elseif($vo['form_type'] == 'mobile'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"mobile",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });
            <?php elseif($vo['form_type'] == 'phone'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"tel",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });
            <?php elseif($vo['form_type'] == 'datetime'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"date",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });
            <?php elseif($vo['form_type'] == 'number'): ?>
             $("#<?php echo ($vo[field]); ?>").regexValidator({
                regExp:"num",
                dataType:"enum",
                onError:"<?php echo L('A_OLUTE_OR_SELF_RELATIVE',array($vo[name]));?>"
            });<?php endif; ?>
             <?php if($vo['is_unique'] == 1): ?>$("#<?php echo ($vo[field]); ?>").ajaxValidator({
                dataType : "json",
                type : "GET",
                isValid : true,
                data : {
                    id:<?php echo ($customer["customer_id"]); ?>
                    },
                async : false,
                url : "<?php echo U('customer/validate');?>",
                success : function(data){
                    if( data.status == 1 ) return false;
                    if( data.status == 0 ) return true;
                    return false;
                },
                error: function(jqXHR, textStatus, errorThrown){alert("{:L('THE_SERVER_DID_NOT_RETURN_DATA_MAY_BE_THE_SERVER_BUSY_PLEASE_TRY_AGAIN')}"+errorThrown);},
                onError : "<?php echo L('THIS_DISABLED_PLEASE_CHANGE',array($vo[name],$vo[name]));?>",
                onWait : "<?php echo L('LEGITIMACY_CHECKING_PLEASE_WAIT',array($vo[name]));?>"
            });<?php endif; ?>
         <?php else: ?>
             <?php if($vo['setting']['type'] == 'checkbox'): ?>$(":checkbox[name='<?php echo ($vo['field']); ?>[]']").formValidator({
                 tipID:"<?php echo ($vo[field]); ?>Tip",
                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('AFFIRMATIVELY_CHOSEN_ITEM');?></span>",
                 <?php else: ?>
                 onShow:" ",<?php endif; ?>
                 onFocus:" ",
                 onCorrect:"<span style='color:green;'>√</span>"
             }).inputValidator({
             	<?php if($vo['is_null'] == 1): ?>min:1,
                 <?php else: ?>
                 min:0,<?php endif; ?>
             	onError:"<?php echo L('PLEASE_SELECT',array($vo[name]));?>"
             });
             <?php elseif($vo['setting']['type'] == 'select'): ?>
            	 $("#<?php echo ($vo[field]); ?>").formValidator({
	                 tipID:"<?php echo ($vo[field]); ?>Tip",
	                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('AFFIRMATIVELY_CHOSEN_ITEM');?></span>",
	                 <?php else: ?>
	                 onShow:" ",<?php endif; ?>
	                 onFocus:" ",
	                 onCorrect:"<span style='color:green;'>√</span>"
	             }).inputValidator({
	             	<?php if($vo['is_null'] == 1): ?>min:1,
	                 <?php else: ?>
	                 min:0,<?php endif; ?>
	             	onError:"<?php echo L('PLEASE_SELECT',array($vo[name]));?>"
	             });
             <?php else: ?>
             $(":radio[name='<?php echo ($vo['field']); ?>']").formValidator({
                 tipID:"<?php echo ($vo[field]); ?>Tip",
                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('AFFIRMATIVELY_CHOSEN_ITEM');?></span>",
                 <?php else: ?>
                 onShow:" ",<?php endif; ?>
                 onFocus:" ",
                 onCorrect:"<span style='color:green;'>√</span>"
             }).inputValidator({
             	<?php if($vo['is_null'] == 1): ?>min:1,
                 <?php else: ?>
                 min:0,<?php endif; ?>
             	onError:"<?php echo L('PLEASE_SELECT',array($vo[name]));?>"
             });<?php endif; endif; endif; endforeach; endif; else: echo "" ;endif; ?>
});
</script>

</body>
</html>