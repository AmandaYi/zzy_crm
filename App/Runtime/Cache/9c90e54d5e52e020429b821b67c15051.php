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
	<!-- Docs nav ================================================== -->
	<div class="page-header">
		<h4><?php echo L('ADD_THE_BUSINESS_OPPORTUNITIES');?></h4>
	</div>
	<div class="row">
		<div class="span12">
			<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
			<form id="form1" action="<?php echo U('Business/add');?>" method="post">
			    <input type="hidden" name="refer_url" value="<?php echo ($refer_url); ?>"/>
				<input type="hidden" name="creator_id" value="<?php echo ($_SESSION["user_id"]); ?>"/>
				<table class="table" width="95%" border="0" cellspacing="1" cellpadding="0">
					<tbody>
						<tr><th colspan="4"><?php echo L('THE_MAIN_INFORMATION');?></th></tr>
						<tr><td class="tdleft" width="15%"><?php echo L('PRINCIPAL');?></td><td><input type="hidden" id="owner_id" name="owner_role_id" value="<?php echo (session('role_id')); ?>"/><input type="text" id="owner_name" value="<?php echo (session('name')); ?>" />(<?php echo L('CLICK_ON_THE_SELECT');?>)</td>
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
						<tr><th  colspan="4"><?php echo L('ADDITIONAL_INFORMATION');?></th></tr>
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
						<tr>
							<th colspan="4"><input class="btn btn-primary pull-right"  type="button" onclick="loadDialog()" value="<?php echo L('ADD_PRODUCT');?>"/><?php echo L('RELATED_PRODUCTS');?></th>
						</tr>
						<tr>
							<td style="padding:0px;" colspan="4">
								<!-- 隐藏域 -->
								<input type="hidden" name="subtotal_val" class="subtotal_val" value=""/>
								<input type="hidden" name="total_amount" class="total_amount" value=""/>
								<!-- 隐藏域 END-->
								<table class="table table-bordered" id="no-input-border" width="95%" border="0" cellspacing="1" cellpadding="0">
									<thead>
										<tr style="background-color:#E0E8FF;text-align:center;">
											<td class="span1">&nbsp;</td>
											<td class="span2">产品</td>
											<td>数量</td>
											<td>单价</td>
											<td>折扣率(%)</td>
											<td>税率(%)</td>
											<td>小计</td>
											<td class="span2">备注</td>
										</tr>
									</thead>
									<tbody id="add_products">
									</tbody>
									<tbody class="hide" id="add_pro">
										<tr style="background-color:#FFFFF3;color:#808080">
											<td></td>
											<td>合计</td>
											<td id="total_amount_val" style="text-align:center">0</td>
											<td></td>
											<td></td>
											<td></td>
											<td id="subtotal_val" style="text-align:center" name="subtotal_val">0.00</td>
											<td></td>
										</tr>
										<tr style="background-color:#FFFFF1">
											<td>&nbsp;</td>
											<td>其他费用</td>
											<td><input type="text" name="discount_price" id="discount_price" value="0.00" onkeyup="cal_discount_price()"/></td>
											<td></td>
											<td></td>
											<td>最终费用</td>
											<td colspan="2"><input type="text" name="sales_price" id="sales_price" readonly="true" value="0.00"/></td>
										</tr>
									</tbody> 
								</table>
							</td>
						</tr>
					</tbody>
					<tfoot>
						<tr> 
							<td style="text-align:center;" colspan="4"><input name="submit" class="btn btn-primary" type="submit" value="<?php echo L('SAVE');?>"/> &nbsp;<input name="submit" class="btn btn-primary" type="submit" value="<?php echo L('SAVE_AND_NEW');?>"/>&nbsp; <input class="btn" type="button" onclick="javascript:history.go(-1)" value="<?php echo L('RETURN');?>"/></td>	
						</tr>
					</tfoot>
				</table>
			</form>
		</div>
	</div>
</div>
<div class="hide" id="dialog-product" title="<?php echo L('ADD_PRODUCT');?>">
	<table class="table table-hover">
		<tbody>
			<tr><th <?php if(C('ismobile') != 1): ?>colspan="4"<?php else: ?>colspan="2"<?php endif; ?>><?php echo L('BASIC_INFORMATION');?></th></tr>
			<tr>
				<td class="tdleft" valign="middle"><?php echo L('PRODUCT');?></td>
				<td valign="middle"><input type="hidden" id="_product_id"/><input id="_product_name" type="text" /></td>
				<?php if(C('ismobile') == 1): ?></tr><tr><?php endif; ?>
				<td class="tdleft" valign="middle"><?php echo L('OFFER');?></td>
				<td valign="middle">
					<input id="_estimate_price" type="text" />
				</td>
			</tr>
			<tr>
				<td class="tdleft" valign="middle"><?php echo L('SELLING_PRICE');?></td>
				<td valign="middle"><input id="_sales_price" type="text" /></td>
				<?php if(C('ismobile') == 1): ?></tr><tr><?php endif; ?>
				<td class="tdleft" valign="middle"><?php echo L('QUANTITY');?></td>
				<td valign="middle"><input id="_product_amount" type="text" /></td>
			</tr>
			<tr>
				<td class="tdleft" valign="middle"><?php echo L('DESCRIBE');?></td>
				<td <?php if(C('ismobile') != 1): ?>colspan="3"<?php endif; ?> valign="middle"><textarea rows="6" class="span5" id="_product_description"></textarea></td>
			</tr>
		</tbody>
	</table>
</div>
<div class="hide" id="dialog-message" title="<?php echo L('SELECT_THE_CUSTOMER');?>">loading...</div>
<div class="hide" id="dialog-role-list" title="<?php echo L('SELECT_ALL_THE_PEOPLE');?>">loading...</div>
<div class="hide" id="dialog-message3" title="<?php echo L('SELECT_THE_CONTACT');?>">loading...</div>
<div class="hide" id="dialog-select" title="<?php echo L('SELECT_A_PRODUCT');?>">loading...</div>
<div class="hide" id="dialog-product-list" title="产品列表">loading...</div>
<div class="hide" id="dialog-validate" title="<?php echo L('BUSINESS_OPPORTUNITIES_OF_TEST_RESULTS');?>">
	<?php echo L('HAS_THE_FOLLOWING_BUSINESS_OPPORTUNITIES_ARE_SIMILAR_TO_THE_BUSINESS_NAME');?>
	<div id="search_content"></div>
</div>
<script type="text/javascript">
<?php if(C('ismobile') == 1): ?>width=$('.container').width() * 0.95;<?php else: ?>width=800;<?php endif; ?>
$(function(){
	$("#_product_name").click(function(){
		$('#dialog-select').dialog('open');
		$('#dialog-select').load('<?php echo U("product/allproductdialog");?>');
	});
	$("#add_product").click(function(){
		$('#_product_name').val('');
		$('#_product_id').val('');
		$('#_estimate_price').val('');
		$('#_sales_price').val('');
		$('#_product_amount').val('');
		$('#_product_description').val('');
		$('#dialog-product').dialog('open');
	});
	$('#customer_name').click(function () {
		$('#dialog-message').dialog('open');
		$('#dialog-message').load("<?php echo U('Customer/listDialog');?>");
	});
	$('#owner_name').click(
		function(){
			$('#dialog-role-list').dialog('open');
			$('#dialog-role-list').load("<?php echo U('user/listDialog');?>");
		}
	);
	$('#contacts_name').click(
		function(){
			$customer_name = $('#customer_name').val();
			$customer_id = $('#customer_id').val();
			if($customer_name == '' || $customer_name == null){
				alert('<?php echo L('PLEASE_CHOOSE_THE_CUSTOMER_FIRST');?>');
			}else{
				$('#dialog-message3').dialog('open');
				$('#dialog-message3').load('<?php echo U("contacts/radiolistdialog", "customer_id=");?>'+$('#customer_id').val());
			}
		}
	);
	$('#name').blur(
		function(){
			name = $('#name').val();
			if(name!=''){
				$.post('<?php echo U("business/check");?>',
					{
						name:name
					},
					function(data){
						if(data.data != 0){
							var result = '';
							$.each(data.data, function(k, v){
								result += (k+1)+'、'+v+'</br>';
							});
							$('#dialog-validate').dialog('open');
							$("#search_content").html(result);
						}
					},
				'json');
			} else {
				alert('<?php echo L('PLEASE_FILL_OUT_THE_BUSINESS_OPPORTUNITY');?>');
			}
		}
	);
});
$("#dialog-select").dialog({
	autoOpen: false,
	modal: true,
	width: width,
	maxHeight:400,
	position: ["center",100],
	buttons: { 
        "Ok": function () {
			var item = $('input:radio[name="product_id"]:checked').val();
			var name = $('input:radio[name="product_id"]:checked').parent().next().html();
			$('#_product_id').val(item);
			$('#_product_name').val(name);
            $(this).dialog("close"); 
        },
		"Cancel": function () {
            $(this).dialog("close");
        }
    }
});
/*商品*/
var param = '';
var now_rows = 0;
//减少一条信息
$(document).on('click','.reduce_one',function(){
	var row_id = $(this).parent().parent().attr('id');
	//如果行内存在商品，弹出操作提示
	row_val = row_id.substr(4);
	if($('#product_id_'+row_val).val() == ''){
		$('#'+row_id).remove();
		calculate(now_rows);
	}else{
		if(confirm('该栏目存在数据，您确定删除吗？')){
			$('#'+row_id).remove();
			calculate(now_rows);
		}else{
			return false;
		}
	}
	now_rows --;
});

//选择商品对话框
function loadDialog(){
	$("#dialog-product-list").dialog({
		autoOpen: false,
		modal: true,
		width: 800,
		maxHeight: 800,
		position: ["center",50],
		buttons:{
			'<?php echo L("OK");?>':function(){
				$(".se_product").each(function(){
					now_rows += 1;
					var product_name = $(this).text();
					var product_id = $(this).attr('rel');
					var suggested_price = $(this).children("input:first-child").val();
					$('#add_products').append('<tr id="row_'+now_rows+'"><td style="text-align:center;"><a href="javascript:void(0);" class="reduce_one"><span class="btn btn-primary">删除<span></a></td><td><input type="hidden" name="product['+now_rows+'][product_id]" id="product_id_'+now_rows+'" class="product_id" value="'+product_id+'" /><input type="text" id="product_name_'+now_rows+'" readonly="readonly" value="'+product_name+'"/></td><td><input type="text" name="product['+now_rows+'][amount]" id="product_amount_'+now_rows+'" class="amount" onkeyup="calculate('+now_rows+')" value="1"/></td><td><input type="text" name="product['+now_rows+'][unit_price]" id="product_unit_price_'+now_rows+'" onkeyup="calculate('+now_rows+')" value="'+suggested_price+'" /></td><td><input type="text" name="product['+now_rows+'][discount_rate]" id="product_discount_rate_'+now_rows+'" onkeyup="calculate('+now_rows+')"/></td><td><input type="text" name="product['+now_rows+'][tax_rate]" id="product_tax_rate_'+now_rows+'" onkeyup="calculate('+now_rows+')"/></td><td><input type="text" name="product['+now_rows+'][subtotal]" id="subtotal'+now_rows+'" class="subtotal" onkeyup="calculate('+now_rows+')" readonly="readonly"/></td><td><input type="text" name="product['+now_rows+'][description]"/></td></tr>');
					
					calculate(now_rows);
				});
				$("#add_pro").removeClass('hide');
				$(this).dialog('close');
				
			},
			'<?php echo L("CANCEL");?>':function(){
				$(this).dialog('close');
			}
		}
	});	
	$('#dialog-product-list').dialog('open');
	$('#dialog-product-list').load('<?php echo U("product/mutildialog");?>');
}

function calculate(param){
	if($('#product_id_'+param).val() != '' && $('#product_id_'+param).val() != '0'){
		//先对当前Row进行计算
		var amount = $('#product_amount_'+param).val(); //数量
		var unit_price = $('#product_unit_price_'+param).val(); //单价
		var discount_rate = $('#product_discount_rate_'+param).val(); //折扣率
		var product_discount = cal_discount_money(unit_price, amount, discount_rate);//折扣额
		no_tax_price = parseFloat(unit_price * amount - product_discount).toFixed(2);//税前
		var tax_rate = $('#product_tax_rate_'+param).val(); //税率
		tax_price = cal_tax_money(tax_rate, no_tax_price);//税额
		var sub_total = new Number(no_tax_price) + new Number(tax_price);	//小计
		$('#subtotal'+param).val(sub_total);								//小计
		
		var total_amount = 0;
		$('.amount').each(function(k, v){
			//合计数量
			if($(v).val() != '' ||  $(v).val() != '0'){
				total_amount += new Number($(v).val());
			}
		});
		$('#total_amount_val').html(total_amount);
		$('.total_amount').val(total_amount);
		
		//合计小计
		var sub_total = 0;
		$('.subtotal').each(function(k , v){
			if($(v).val() != '' ||  $(v).val() != '0'){
				sub_total += new Number($(v).val());
			}
		})
		$('#subtotal_val').html(sub_total);
		$('.subtotal_val').val(sub_total);
		
		var total_prime_price = 0.00;
		total_prime_price = new Number($('#subtotal_val').html());
		$('#prime_price').val(total_prime_price.toFixed(2));
		$('#sales_price').val(total_prime_price.toFixed(2));
		cal_discount_price();
	}else{
		return false;
	}
}

function cal_discount_price(){
	var discount_price = $('#discount_price').val();
	sales_price = new Number($('#subtotal_val').html()) + new Number(discount_price);
	$('#sales_price').val(sales_price.toFixed(2));
}

/**
 * 根据原价和折扣率计算出折扣额
 * @unit_price		原价
 * @amount			数量
 * @discount_rate	折扣率
 */
function cal_discount_money(unit_price, amount, discount_rate){
	var product_discount = 0;
	if(discount_rate == 0){
		product_discount = 0;
	}else{
		product_discount = (unit_price * amount) * (discount_rate/100);
	}
	return parseFloat(product_discount).toFixed(2);
}

/**
 * 根据税率和税前计算出税额
 * @tax_rate		税率
 * @no_tax_price	税前
 */
function cal_tax_money(tax_rate, no_tax_price){
	var prime_price = 0;
	prime_price = (tax_rate/100) * no_tax_price;
	return parseFloat(prime_price).toFixed(2);
}

function delete_product(obj){
	$(obj).parent().parent().remove();
}
$('#dialog-message').dialog({
	autoOpen: false,
	modal: true,
	width: width,
	maxHeight: 400,
	buttons: {
		"<?php echo L('CONFIRM');?>": function () {
			var item = $('input:radio[name="customer"]:checked').val();
			var name = $('input:radio[name="customer"]:checked').parent().next().html();
			var contacts_id = $('input:radio[name="customer"]:checked').attr('rel');
			var contacts_name = $('input:radio[name="customer"]:checked').next().attr('value');
			$('#customer_name').val(name);
			$('#customer_id').val(item);
			$('#contacts_id').val(contacts_id);
			$('#contacts_name').val(contacts_name);
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
	maxHeight: 400,
	buttons: { 
		"<?php echo L('CONFIRM');?>": function () {
			var item = $('input:radio[name="contacts"]:checked').val();
			var name = $('input:radio[name="contacts"]:checked').parent().next().html();
			$('#contacts_id').val(item);
			$('#contacts_name').val(name);
			$(this).dialog("close"); 
		},
		"<?php echo L('CANCEL');?>": function () {
			$(this).dialog("close");
		}
	},
	position:["center",100]
});
$("#dialog-role-list").dialog({
	autoOpen: false,
	modal: true,
	width: width,
	maxHeight: 400,
	buttons: { 
		"<?php echo L('CONFIRM');?>": function () {
			var item = $('input:radio[name="owner"]:checked').val();
			var name = $('input:radio[name="owner"]:checked').parent().next().html();
			if(item) {
				$('#owner_name').val(name);
				$('#owner_id').val(item);
			}
			$(this).dialog("close"); 
		},
		"<?php echo L('CANCEL');?>": function () {
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
		"<?php echo L('CONFIRM');?>": function () {
			$(this).dialog("close"); 
		}
	},
	position: ["center", 100]
});
$(function(){
    $.formValidator.initConfig({formID:"form1",debug:false,submitOnce:true,
        onError:function(msg,obj,errorlist){
			alert(msg);
		},
		submitAfterAjaxPrompt : '<?php echo L('THERE_ARE_DATA_ARE_ASYNCHRONOUS_VALIDATION');?>'});
<?php if(is_array($field_list[main])): $i = 0; $__LIST__ = $field_list[main];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['is_validate'] == 1): if($vo['form_type'] != 'box' || $vo['setting']['type'] == 'select'): ?>$("#<?php echo ($vo[field]); ?>").formValidator({
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
	            onshow:"<?php echo L('NOT NULL',array($vo[name]));?>",
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
                async : false,
				isValid : true,
                url : "<?php echo U('business/validate');?>",
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
                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('WILL_OPTIONS');?></span>",
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
	                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('WILL_OPTIONS');?></span>",
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
	                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('WILL_OPTIONS');?></span>",
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
<?php if(is_array($field_list[data])): $i = 0; $__LIST__ = $field_list[data];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['is_validate'] == 1): if($vo['form_type'] != 'box' || $vo['setting']['type'] == 'select'): ?>$("#<?php echo ($vo[field]); ?>").formValidator({
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
	            onshow:"<?php echo L('NOT NULL',array($vo[name]));?>",
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
             <?php if($vo['is_unique'] == 1 && $vo['field']!='name'): ?>$("#<?php echo ($vo[field]); ?>").ajaxValidator({
                dataType : "json",
                type : "GET",
                async : false,
				isValid : true,
                url : "<?php echo U('business/validate');?>",
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
                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('WILL_OPTIONS');?></span>",
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
	                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('WILL_OPTIONS');?></span>",
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
	                 <?php if($vo['is_null'] == 1): ?>onShow:"<span style='color:red;'><?php echo L('WILL_OPTIONS');?></span>",
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