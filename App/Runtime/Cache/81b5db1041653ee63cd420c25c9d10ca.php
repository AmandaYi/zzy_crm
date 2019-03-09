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
<div class="container no-mar-top no-bg" >
<div class="row" >
    <div class="span2 bs-docs-sidebar mar-left3" >
        <ul class="nav-list bs-docs-sidenav span2 widths" id="left_list" style="list-style:none">
            <li class="first-li"><span class="spans1"><img src="__PUBLIC__/img/house.png"/>&nbsp;<?php if($customer_len > 10): echo msubstr($customer['name'], 0, 10); else: echo ($customer['name']); endif; ?></span></li>
            <li class="active"><a href="#tab1" >基本信息</a></li>
            <li><a href="#tab3"><?php echo L('COMMUNICATION_LOGS');?>&nbsp;&nbsp;<span class="badge badge-success"><?php if($customer['log_count']): echo ($customer['log_count']); endif; ?></span></a></li>
            <li><a href="#tab10"><?php echo L('BUSINESS_HISTORY');?>&nbsp;&nbsp;<span class="badge badge-success"><?php if($customer['business_count']): echo ($customer['business_count']); endif; ?></span></a></li>
            <li><a href="#tab12"><?php echo L('CUMTOMER_CARE');?>&nbsp;&nbsp;<span class="badge badge-success"><?php if($customer['cares_count']): echo ($customer['cares_count']); endif; ?></span></a></li>
            <li><a href="#tab7"><?php echo L('BUY_THE_PRODUCT');?>&nbsp;&nbsp;<span class="badge badge-success"><?php if($customer['product_count']): echo ($customer['product_count']); endif; ?></span></a></li>
            <li><a href="#tab11"><?php echo L('CONTRACT');?>&nbsp;&nbsp;<span class="badge badge-success"><?php if($customer['contract_count']): echo ($customer['contract_count']); endif; ?></span></a></li>
            <li><a href="#tab8"><?php echo L('THE_ACCOUNTS_RECEIVABLE');?>&nbsp;&nbsp;<span class="badge badge-success"><?php if($customer['receivables_count']): echo ($customer['receivables_count']); endif; ?></span></a></li>
            <li><a href="#tab9"><?php echo L('The_accounts_payable');?>&nbsp;&nbsp;<span class="badge badge-success"><?php if($customer['payables_count']): echo ($customer['payables_count']); endif; ?></span></a></li>
            <li><a href="#tab5"><?php echo L('TASK');?>&nbsp;&nbsp;<span class="badge badge-success"><?php if($customer['task_count']): echo ($customer['task_count']); endif; ?></span></a></li>
            <li><a href="#tab6"><?php echo L('SCHEDULE');?>&nbsp;&nbsp;<span class="badge badge-success"><?php if($customer['event_count']): echo ($customer['event_count']); endif; ?></span></a></li>
            <li><a href="#tab4"><?php echo L('FILE');?>&nbsp;&nbsp;<span class="badge badge-success"><?php if($customer['file_count']): echo ($customer['file_count']); endif; ?></span></a></li>
        </ul>
    </div>
    <div class="tab-content span8 mar-lefts contenr_width">
        <div class="tab-pane fade in active" id="tab1">
			<div class="container2 top-pad">
				<a class="basic_information" name="tab"><?php echo L('BASIC_INFORMATION');?></a>
				<div class="pull-right"style="margin:-3px 10px 0 0;">
				<?php if(($_GET['content']!= 'resource') and ($customer['is_deleted'] == 0)): $focus_id = M('CustomerFocus')->where('user_id =%d and customer_id=%d',session('role_id'),$customer['customer_id'])->getField('focus_id'); ?>
					<?php if($focus_id): ?><a href="<?php echo U('customer/batchclose', 'customer_id='.$customer['customer_id']);?>" class="btn btn-primary">取消关注</a>
					<?php else: ?>
						<a href="<?php echo U('customer/batchfocus', 'customer_id='.$customer['customer_id']);?>" class="btn btn-primary">关注</a><?php endif; ?>
				<?php
 $share_id = M('CustomerShare')->where('share_role_id =%d and customer_id=%d',session('role_id'),$customer['customer_id'])->getField('share_id'); $by_sharing_ids = M('CustomerShare')->where('customer_id=%d',$customer['customer_id'])->getField('by_sharing_id',true); if(!in_array(session('role_id'),explode(',',implode(',',$by_sharing_ids)))||$share_id) { ?>
						<?php if($share_id): ?><a href="<?php echo U('customer/close_share', 'customer_id='.$customer['customer_id']);?>" class="btn btn-primary">取消分享</a>
						<?php else: ?>
							<a id="share" href="javascript:void(0)" class="btn btn-primary">分享</a><?php endif; ?>
				<?php } endif; ?>
				<?php
 if(!in_array(session('role_id'),explode(',',implode(',',$by_sharing_ids)))||$share_id){ ?>
					<a href="<?php echo U('customer/edit', 'id='.$customer['customer_id']);?>" class="btn btn-primary"><?php echo L('EDIT');?></a>
					<a href="<?php echo U('customer/delete','id='.$customer['customer_id']);?>" class="btn btn-primary del_confirm"><?php echo L('DELETE');?></a>
				<?php } ?>
					<a href="javascript:void(0)" class="btn btn-primary" onclick="javascript:history.go(-1)"><?php echo L('RETURN');?></a>
				</div>
			</div>
            <div class="back_box" style="margin-top:10px;">
                <?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td class="tdleft" width="15%"><?php echo L('CREATION_TIME');?></td>
                            <td><?php if($customer['create_time'] != 0): echo (date('Y-m-d H:i:s',$customer["create_time"])); endif; ?></td>
                            <td class="tdleft"><?php echo L('FOUNDER');?></td>
                            <td><a class="role_info" href="javascript:void(0)" rel="<?php echo ($customer["create"]["role_id"]); ?>"><?php echo ($customer["create"]["user_name"]); ?></if></a></td>
                        </tr>
                        <?php if($customer['is_deleted'] == 1): ?><tr>
                            <td class="tdleft"><?php echo L('DELETE_THE_PEOPLE');?></td>
                            <td><a class="role_info" href="javascript:void(0)" rel="<?php echo ($customer["deleted"]["role_id"]); ?>"><?php echo ($customer["deleted"]["user_name"]); ?></a></td>
                            <td class="tdleft" width="15%"><?php echo L('DELETE_THE_TIME');?></td>
                            <td><?php echo (date('Y-m-d H:i:s',$customer["delete_time"])); ?></td>
                        </tr><?php endif; ?>
                        <tr>
                            <td class="tdleft"><?php echo L('PRINCIPAL');?></td>
                            <td><a class="role_info" href="javascript:void(0)" rel="<?php echo ($customer["owner"]["role_id"]); ?>"><?php echo ($customer["owner"]["user_name"]); ?></if></a> &nbsp;  &nbsp; <a href="<?php echo U('customer/customerlock','customer_id='.$customer['customer_id']);?>"><?php if($customer['is_locked'] and $customer['owner_role_id']): ?><img title="<?php echo L('UNLOCK_TITLE');?>" src="__PUBLIC__/img/customer_locking.png"/><?php elseif($customer['owner_role_id']): ?><img title="<?php echo L('LOCK_TITLE');?>" src="__PUBLIC__/img/customer_unlocking.png"/><?php endif; ?></a></td>
                            <td class="tdleft" width="15%"><?php echo L('THE_LAST_MODIFICATION_TIME');?></td>
                            <td><?php if($customer['update_time'] > 0): echo (date('Y-m-d H:i:s',$customer["update_time"])); endif; ?></td>
                        </tr>
                        <tr>
                            <td class="tdleft" width="15%"><?php echo L('THE_PRIMARY_CONTACT');?></td>
                            <td><a href="<?php echo U('contacts/view','id='.$customer[contacts_id]);?>"><?php echo ($customer[contacts_name]); ?></td>
                        <?php $j=0; ?>
                        <?php if(is_array($field_list)): $i = 0; $__LIST__ = $field_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $j++; ?>
                        <?php if($vo['form_type'] == 'textarea' or $vo['form_type'] == 'editor'): if($i%2 != 0): ?><td colspan="2">&nbsp;</td>
                            </tr><?php endif; ?>
                            <tr>
                                <td class="tdleft" width="15%"><?php echo ($vo["name"]); ?>:</td>
                                <td colspan="3" style="word-break:break-word;"><?php echo ($customer[$vo['field']]); ?></td>
                            </tr>
                            <?php if($i%2 == 0 && count($field_list) != $j): $i++; endif; ?>
                        <?php else: ?>
                            <?php if($i%2 == 0): ?><tr><?php endif; ?>
                                <td class="tdleft" width="15%"><?php echo ($vo["name"]); ?>:</td>
                                <td width="35%">
                                    <span style="color:#<?php echo ($vo['color']); ?>">
                                    <?php if($vo['form_type'] == 'datetime'): if($customer[$vo['field']] > 0): echo (date('Y-m-d',$customer[$vo['field']])); endif; ?>
                                    <?php elseif($vo['form_type'] == 'address'): ?>
                                        <?php echo ($customer[$vo['field']]); ?>
                                        <a href="javascript:void(0);" class="getMap" rel="<?php echo ($customer[$vo['field']]); ?>">
                                            <img src="__PUBLIC__/img/location.png" style="height:20px; vertical-align: text-bottom;">
                                        </a>
                                    <?php else: ?>
                                        <?php echo ($customer[$vo['field']]); endif; ?>
                                    </span>
                                </td>
                            <?php if($i%2 != 0): ?></tr><?php endif; ?>
                            <?php if($i%2 == 0 && count($field_list) == $j): ?><td colspan="2">&nbsp;</td>
                            </tr><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
			
			<div class="back_box" style="margin-top: 10px;">
				<div class="header1">
					<div class="pull-left two-title" ><?php echo L('LINKMAN');?></div>
					<div class="pull-right"> <?php if($customer['is_deleted'] == 0): ?><a href="<?php echo U('contacts/add','redirect=customer&customer_id='.$customer['customer_id']);?>" class=" btn btn-primary"><?php echo L('ADD');?></a><?php endif; ?></div>
					<div style="clear:both;"></div>
				</div>
				<table class="table table-hover">
					<?php if($customer["contacts"] == null): ?><tr>
							<td <?php if(C('ismobile') != 1): ?>colspan="6"<?php else: ?>colspan="4"<?php endif; ?>><?php echo L('THERE_IS_NO_DATA');?> </td>
						</tr>
					<?php else: ?> 
						<tr>
							<td width="18%">&nbsp;</td>
							<td width="20%"><?php echo L('NAME');?></td>
							<td width="10%">职位</td>
							<td width="10%"><?php echo L('CELLPHONE');?></td>
							<td width="10%">QQ</td>
							<td width="16%">email</td>
						</tr>
						<?php if(is_array($customer['contacts'])): $i = 0; $__LIST__ = $customer['contacts'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
								<td class="tdleft" >
									<?php if($customer['is_deleted'] == 0): ?><a href="<?php echo U('contacts/view', 'id='.$vo['contacts_id']);?>"><?php echo L('CHECK');?></a> &nbsp;<a href="<?php echo U('contacts/edit', 'id='.$vo['contacts_id'].'&redirect=customer&redirect_id='.$customer['customer_id']);?>"><?php echo L('COMPILE');?></a>&nbsp;
									<a href="<?php echo U('contacts/mdelete', 'id='.$vo['contacts_id'].'&r=rContactsCustomer&module_id='.$customer['customer_id']);?>" class="del_confirm"><?php echo L('DELETE');?></a>&nbsp;
									<a href="<?php echo U('contacts/changeToFirstContact', 'id='.$vo['contacts_id'].'&customer_id='.$customer['customer_id']);?>"><?php echo L('SET_AS_PRIMARY');?></a><?php endif; ?>
								</td>
								<td>
									<?php echo ($vo["name"]); if($vo['is_firstContact'] == 'true'): ?>&nbsp;<span style="color:red;">( <?php echo L('THE_PRIMARY_CONTACT');?> )</span><?php endif; echo ($vo["saltname"]); ?>
								</td>
								<td>
									<?php if(C('ismobile') == 1): ?><a href="tel:<?php echo ($vo["post"]); ?>"><?php echo ($vo["telephone"]); ?></a><?php else: echo ($vo["post"]); endif; ?>
								</td>
								<td>
									<?php if(C('ismobile') == 1): ?><a href="tel:<?php echo ($vo["telephone"]); ?>"><?php echo ($vo["telephone"]); ?></a><?php else: echo ($vo["telephone"]); endif; ?>
								</td>
								 <td>
									<?php if(C('ismobile') == 1): ?><a href="qq:<?php echo ($vo["qq_no"]); ?>"><?php echo ($vo["qq_no"]); ?></a><?php else: echo ($vo["qq_no"]); endif; ?>
								</td>
								<td>
									<?php if(C('ismobile') == 1): ?><a href="mailto:<?php echo ($vo["email"]); ?>"><?php echo ($vo["email"]); ?></a><?php else: echo ($vo["email"]); endif; ?>
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
				</table>
			</div>	
        </div>
        <div class="tab-pane fade back_box" id="tab3">
			<div class="header1">
				<div class="pull-left two-title" > <?php echo L('COMMUNICATION_LOGS');?> </div>
				<div class="pull-right"> <a class="add_log btn btn-primary" href="javascript:void(0);" ><?php echo L('ADD');?></a></div>
				<div style="clear:both;"></div>
			</div>
            <table class="table table-hover">
                <?php if($customer["log"] == null): ?><div>
                        <?php echo L('THERE_IS_NO_DATA');?>
                    </div>
                <?php else: ?>
                    <?php if(is_array($customer["log"])): $i = 0; $__LIST__ = $customer["log"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="caption">
                             <?php echo ($vo["subject"]); ?>
                        </div>
                        <div class="mar-left2">
							<?php if(strlen($vo['content']) > 100): ?><div id="slog_<?php echo ($vo["log_id"]); ?>" class="pad-right3" >
									<?php echo (msubstr($vo["content"],0,100)); ?>
										<a class="more" rel="<?php echo ($vo["log_id"]); ?>" href="javascript:void(0)"><?php echo L('READ_MORE');?></a>
								</div>
								<div id="llog_<?php echo ($vo["log_id"]); ?>"  class="hide">
									<div class="pad-right3 pres" ><?php echo ($vo["content"]); ?></div>
								</div>
							<?php else: ?>
							 <div class="pad-right3"> <?php echo ($vo["content"]); ?></div><?php endif; ?>
                        </div>
						<div class="editors">
							<?php if($customer['is_deleted'] != 1): ?><a href="javascript:void(0)" rel="<?php echo ($vo["log_id"]); ?>" class="edit_log"><?php echo L('COMPILE');?></a>&nbsp; <a href="<?php echo U('log/delete','r=RCustomerLog&id='.$vo['log_id']);?>" class="del_confirm"><?php echo L('DELETE');?></a><?php endif; ?>&nbsp;&nbsp;&nbsp;&nbsp;
							<?php if(!empty($vo["owner"]["user_name"])): ?><img style="margin-top:-3px;" src="__PUBLIC__/img/user.png">&nbsp;<a class="role_info name-colors"  rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a><?php endif; ?> &nbsp; 
							<img src="__PUBLIC__/img/time_annoce.png"/>&nbsp;<span class=" name-colors" ><?php echo (date("Y-m-d  H:i:s",$vo["update_date"])); ?></span> &nbsp; 
							<?php if(!empty($vo["create_date"])): ?>&nbsp;<?php endif; ?>
							<?php if(C('ismobile') == 1): ?><br/><?php endif; ?>
						</div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </table>
        </div>
     
        <div class="tab-pane fade back_box" id="tab10">
			<div class="header1">
				<div class="pull-left two-title" ><?php echo L('BUSINESS_HISTORY');?></div>
				<div class="pull-right"><?php if($customer['is_deleted'] == 0): ?><a class="btn btn-primary" href="<?php echo U('business/add','customer_id='.$customer['customer_id']);?>" ><?php echo L('add');?></a><?php endif; ?></div>
				<div style="clear:both;"></div>
			</div>
            <table class="table table-hover">
                <?php if($customer["business"] == null): ?><tr>
                        <td <?php if(C('ismobile') != 1): ?>colspan="5"<?php else: ?>colspan="4"<?php endif; ?>><?php echo L('THERE_IS_NO_DATA');?> </td>
                    </tr>
                <?php else: ?> 
                    <tr>
                        <td width="15%">&nbsp;</td>
                        <td><?php echo L('BUSINESS_NAME');?></td>
                        <td><?php echo L('STATE');?></td>
                        <td><?php echo L('PRINCIPAL');?></td>
                        <?php if(C('ismobile') != 1): ?><td><?php echo L('creation_time');?></td><?php endif; ?>
                    </tr>
                    <?php if(is_array($customer["business"])): $i = 0; $__LIST__ = $customer["business"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tdleft" >
                                <?php if($customer['is_deleted'] == 0): ?><a href="<?php echo U('business/view', 'id='.$vo['business_id']);?>"><?php echo L('CHECK');?></a> &nbsp;<a href="<?php echo U('business/edit', 'id='.$vo['business_id']);?>"><?php echo L('COMPILE');?></a><?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo U('business/view', 'id='.$vo['business_id']);?>"><?php echo ($vo["name"]); ?></a>
                            </td>
                            <td>
                                <?php echo ($vo["status"]); ?>
                            </td>										
                            <td>
                                <?php if(!empty($vo["owner"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a><?php endif; ?>
                            </td>
                            <?php if(C('ismobile') != 1): ?><td>
                                    <?php if($vo['create_time'] > 0): echo (date("Y-m-d",$vo["create_time"])); endif; ?>
                                </td><?php endif; ?>
                        </tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </table>
        </div>
        <div class="tab-pane fade back_box" id="tab12">
			<div class="header1">
				<div class="pull-left two-title" ><?php echo L('CUMTOMER_CARE');?></div>
				<div class="pull-right"><a class="btn btn-primary" href="<?php echo U('customer/caresadd','customer_id='.$customer['customer_id']);?>" ><?php echo L('ADD');?></a></div>
				<div style="clear:both;"></div>
			</div>
            <table class="table table-hover">
                <?php if(empty($customer['cares'])): ?><tr>
                        <td colspan="5"><?php echo L('THERE_IS_NO_DATA');?> </td>
                    </tr>
                <?php else: ?> 
                    <tr>
                        <td width="15%">&nbsp;</td>
                        <td><?php echo L('CARE_THEME');?></td>
                        <td><?php echo L('DATE_OF_CARE');?></td>
                        <td><?php echo L('TYPE');?></td>
                        <td><?php echo L('PRINCIPAL');?></td>
                    </tr>
                    <?php if(is_array($customer["cares"])): $i = 0; $__LIST__ = $customer["cares"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tdleft">
                                <a href="<?php echo U('customer/caresview','id='.$vo['care_id']);?>"><?php echo L('CHECK');?></a>&nbsp; <a href="<?php echo U('customer/caresdelete','id='.$vo['care_id']);?>" class="del_confirm"><?php echo L('DELETE');?></a>
                            </td>
                            <td>
                                <?php echo ($vo["subject"]); ?>
                            </td>
                            <td>
                                <?php if(isset($vo["care_time"])): echo (date("Y-m-d H:i:s",$vo["care_time"])); endif; ?>
                            </td>
                            <td>
                                <?php if($vo['type'] == 'message'): echo L('NOTE');?>
                                <?php elseif($vo['type'] == 'phone'): ?>
                                    <?php echo L('PHONE');?>
                                <?php elseif($vo['type'] == 'email'): ?>
                                    <?php echo L('EMAIL');?>
                                <?php elseif($vo['type'] == 'other'): ?>
                                    <?php echo L('OTHER');?>
                                <?php else: ?>
                                    <?php echo L('NONE'); endif; ?>
                            </td>
                            <td>
                                <?php if(!empty($vo["to_name"])): echo ($vo["to_name"]); endif; ?>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </table>
        </div>
        <div class="tab-pane fade back_box" id="tab7">
			<div class="header1">
				<div class="pull-left two-title" ><?php echo L('BUY_THE_PRODUCT');?></div>
				<div style="clear:both;"></div>
			</div>
            <table class="table table-hover">
                <?php if($customer["product"] == null): ?><tr>
                        <td colspan="6"><?php echo L('THERE_IS_NO_DATA');?> </td>
                    </tr>
                <?php else: ?> 
                <thead>
                    <tr>
                        <td width="15%">&nbsp;</td>
                        <td><?php echo L('PRODUCT_NAME');?></td>
                        <td><?php echo L('CLINCH_A_DEAL_VALENCE');?></td>
                        <td><?php echo L('QUANTITY');?></td>
                        <td>小计</td>
                        <?php if(C('ismobile') != 1): ?><td width="30%"><?php echo L('REMARK');?></td><?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($customer["product"])): $i = 0; $__LIST__ = $customer["product"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tdleft"><a href="<?php echo U('product/view', 'id='.$vo['product_id']);?>"><?php echo L('CHECK');?></a></td>
                            <td>
                                <a href="<?php echo U('product/view', 'id='.$vo['product_id']);?>"><?php echo ($vo["name"]); ?></a>
                            </td>
                            <td>
                                <?php if($vo['unit_price'] > 0): echo ($vo["unit_price"]); endif; ?>
                            </td>
                            <td>
                                <?php if($vo['amount'] > 0): echo ($vo["amount"]); endif; ?>
                            </td>
                            <td>
                                <?php if($vo['subtotal'] > 0): echo ($vo["subtotal"]); endif; ?>
                            </td>
                            <?php if(C('ismobile') != 1): ?><td>
                                <?php echo ($vo["description"]); ?>
                            </td><?php endif; ?>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    <tr>
                </tr>
                </tbody><?php endif; ?>
            </table>
        </div>
        <div class="tab-pane fade back_box" id="tab11">
			<div class="header1">
				<div class="pull-left two-title" ><?php echo L('THE_RELEVANT_CONTRACT');?></div>
				<div class="pull-right">
					<?php if($business['is_deleted'] == 0): ?><a class="btn btn-primary" href="<?php echo U('contract/add');?>"><?php echo L('ADD');?></a><?php endif; ?>
				</div>
				<div style="clear:both;"></div>
			</div>
            <table class="table table-hover">
                <?php if($customer['contract'] == null): ?><tr>
                        <td <?php if(C('ismobile') != 1): ?>colspan="6"<?php else: ?>colspan="4"<?php endif; ?>><?php echo L('THERE_IS_NO_DATA');?></td>
                    </tr>
                <?php else: ?> 
                    <tr>
                        <td>&nbsp;</td>
                        <td><?php echo L('Contract_no');?></td>
                        <td><?php echo L('SIGNING_TIME');?></td>
                        <td><?php echo L('OFFER');?></td>
                        <?php if(C('ismobile') != 1): ?><td><?php echo L('PRINCIPAL');?></td>
                        <td><?php echo L('CREATION_TIME');?></td><?php endif; ?>
                    </tr>
                    <?php if(is_array($customer["contract"])): $i = 0; $__LIST__ = $customer["contract"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tdleft"><?php if($customer['is_deleted'] == 0): ?><a  href="<?php echo U('contract/view','id='.$vo['contract_id']);?>"><?php echo L('CHECK');?></a> &nbsp; <a  href="<?php echo U('contract/edit','id='.$vo['contract_id']);?>"><?php echo L('COMPILE');?></a><?php endif; ?></td>
                            <td>
                                <a  href="<?php echo U('contract/view','id='.$vo['contract_id']);?>"><?php echo ($vo["number"]); ?></a>
                            </td>									
                            <td><?php if(!empty($vo["due_time"])): echo (date("Y-m-d",$vo["due_time"])); endif; ?></td>
                            <td>
                                <?php echo ($vo["price"]); ?>
                            </td>
                            <?php if(C('ismobile') != 1): ?><td>
                                <?php if(!empty($vo["owner"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a><?php endif; ?>
                            </td>
                            <td><?php if(!empty($vo["create_time"])): echo (date("Y-m-d  H:i:s",$vo["create_time"])); endif; ?></td><?php endif; ?>
                        </tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </table>
        </div>
        <div class="tab-pane fade back_box" id="tab8">
			<div class="header1">
				<div class="pull-left two-title" ><?php echo L('THE_ACCOUNTS_RECEIVABLE');?></div>
				<div class="pull-right">
				<?php if($customer["receivables"] != null): if($customer['is_deleted'] == 0): ?><a class="btn btn-primary" href="<?php echo U('finance/add','t=receivables');?>"><?php echo L('ADD');?></a><?php endif; endif; ?>
				</div>
				<div style="clear:both;"></div>
			</div>
            <table class="table table-hover">
                <?php if($customer["receivables"] == null): ?><tr>
                        <td <?php if(C('ismobile') != 1): ?>colspan="6"<?php else: ?>colspan="4"<?php endif; ?>><?php echo L('THERE_IS_NO_DATA');?> </td>
                    </tr>
                <?php else: ?> 
                <thead>
                    <tr>
                        <td width="15%">&nbsp;</td>
                        <td><?php echo L('THE_ACCOUNTS_RECEIVABLE_ACCOUNTS_RECEIVABLE');?></td>
                        <td><?php echo L('CONTRACT');?></td>
                        <td><?php echo L('STATE');?></td>
                        <?php if(C('ismobile') != 1): ?><td><?php echo L('MONEY');?></td>
                        <td><?php echo L('PRINCIPAL');?></td><?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($customer["receivables"])): $i = 0; $__LIST__ = $customer["receivables"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tdleft"><a href="<?php echo U('finance/view', 't=receivables&id='.$vo['receivables_id']);?>" ><?php echo L('CHECK');?></a></td>
                            <td>
                                <a href="<?php echo U('finance/view', 't=receivables&id='.$vo['receivables_id']);?>" ><?php echo ($vo["name"]); ?></a>
                            </td>
                            <td>
                                <a href="<?php echo U('contract/view', 'id='.$vo['contract_id']);?>" ><?php echo ($vo["contract_name"]); ?></a>
                            </td>
                            <td>
                                <?php if($vo['status'] == 2): echo L('HAS_BEEN_RECEIVING'); elseif($vo['status'] == 1): echo L('PART_OF_THE_RECEIVED'); else: echo L('DID_NOT_RECEIVE_PAYMENT'); endif; ?>
                            </td>
                            <?php if(C('ismobile') != 1): ?><td>
                                <?php if($vo['price'] > 0): echo ($vo["price"]); endif; ?>
                            </td>
                            <td>
                                <?php if(!empty($vo["owner"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a><?php endif; ?>
                            </td><?php endif; ?>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody><?php endif; ?>
            </table>
        </div>
        <div class="tab-pane fade back_box" id="tab9">
			<div class="header1">
				<div class="pull-left two-title" ><?php echo L('The_accounts_payable');?></div>
				<div class="pull-right">
				<?php if($customer["payables"] != null): if($customer['is_deleted'] == 0): ?><a  href="<?php echo U('finance/add','t=payables');?>" ><?php echo L('ADD');?></a><?php endif; endif; ?>
				</div>
				<div style="clear:both;"></div>
			</div>
            <table class="table table-hover">
                <?php if($customer["payables"] == null): ?><tr>
                        <td <?php if(C('ismobile') != 1): ?>colspan="6"<?php else: ?>colspan="4"<?php endif; ?>><?php echo L('THERE_IS_NO_DATA');?> </td>
                    </tr>
                <?php else: ?> 
                <thead>
                    <tr>
                        <td width="15%">&nbsp;</td>
                        <td><?php echo L('The_accounts_payable');?></td>
                        <td><?php echo L('CONTRACT');?></td>
                        <td><?php echo L('STATE');?></td>
                        <?php if(C('ismobile') != 1): ?><td><?php echo L('MONEY');?></td>
                        <td><?php echo L('PRINCIPAL');?></td><?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($customer["payables"])): $i = 0; $__LIST__ = $customer["payables"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tdleft"><a href="<?php echo U('finance/view', 't=payables&id='.$vo['payables_id']);?>" ><?php echo L('CHECK');?></a></td>
                            <td>
                                <a href="<?php echo U('finance/view', 't=payables&id='.$vo['payables_id']);?>" ><?php echo ($vo["name"]); ?></a>
                            </td>
                            <td>
                                <a href="<?php echo U('contract/view', 'id='.$vo['contract_id']);?>" ><?php echo ($vo["contract_name"]); ?></a>
                            </td>
                            <td>
                                <?php if($vo['status'] == 2): echo L('Payment_has_been'); elseif($vo['status'] == 1): echo L('PART_OF_THE_RECEIVED'); else: echo L('DID_NOT_RECEIVE_PAYMENT'); endif; ?>
                            </td>
                            <?php if(C('ismobile') != 1): ?><td>
                                <?php if($vo['price'] > 0): echo ($vo["price"]); endif; ?>
                            </td>
                            <td>
                                <?php if(!empty($vo["owner"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a><?php endif; ?>
                            </td><?php endif; ?>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody><?php endif; ?>
            </table>
        </div>
        <div class="tab-pane fade back_box" id="tab5">
			<div class="header1">
				<div class="pull-left two-title" ><?php echo L('Related_tasks');?></div>
				<div class="pull-right">
					<?php if($customer['is_deleted'] == 0): ?><a href="javascript:void(0);" class="add_task btn btn-primary"><?php echo L('ADD');?></a><?php endif; ?>
				</div>
				<div style="clear:both;"></div>
			</div>
            <table class="table table-hover">
                <?php if($customer["task"] == null): ?><tr>
                        <td <?php if(C('ismobile') != 1): ?>colspan="6"<?php else: ?>colspan="4"<?php endif; ?>><?php echo L('THERE_IS_NO_DATA');?> </td>
                    </tr>
                <?php else: ?> 
                    <tr>
                        <td width="15%">&nbsp;</td>
                        <td><?php echo L('THEME');?></td>
                        <td><?php echo L('STATE');?></td>
                        <td>负责人</td>
                        <td>任务相关人</td>
                        <?php if(C('ismobile') != 1): ?><td><?php echo L('MODIFICATION_TIME');?></td>
                        <td><?php echo L('DUE_DATE');?></td><?php endif; ?>
                    </tr>
                    <?php if(is_array($customer["task"])): $i = 0; $__LIST__ = $customer["task"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tdleft">
                                <?php if($customer['is_deleted'] == 0): ?><a href="<?php echo U('task/view','id='.$vo['task_id']);?>" ><?php echo L('CHECK');?></a>&nbsp; <a href="<?php echo U('task/delete','id='.$vo['task_id']);?>" class="del_confirm"><?php echo L('DELETE');?></a>&nbsp;<?php endif; ?>
								<?php if($vo["isclose"] == 1): ?><a href="<?php echo U('task/open','id='.$vo['task_id']);?>"><?php echo L('OPEN');?></a><?php else: ?><a href="<?php echo U('task/close','id='.$vo['task_id']);?>"><?php echo L('CLOSE');?></a><?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo U('task/view','id='.$vo['task_id']);?>"><?php echo ($vo["subject"]); ?></a>
                            </td>
                            <td>
                                <?php echo ($vo["status"]); ?>
                            </td>
                            <td>
                                <?php if(!empty($vo["owner"])): if(is_array($vo["owner"])): $i = 0; $__LIST__ = $vo["owner"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a class="role_info" rel="<?php echo ($v["role_id"]); ?>" href="javascript:void(0)"><?php echo ($v["user_name"]); ?></a>,<?php endforeach; endif; else: echo "" ;endif; endif; ?>
                            </td>
                            <td>
                                <?php if(!empty($vo["about_roles"])): if(is_array($vo["about_roles"])): $i = 0; $__LIST__ = $vo["about_roles"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a class="role_info" rel="<?php echo ($v["role_id"]); ?>" href="javascript:void(0)"><?php echo ($v["user_name"]); ?></a>,<?php endforeach; endif; else: echo "" ;endif; endif; ?>
                            </td>
                            <?php if(C('ismobile') != 1): ?><td>
                                <?php if(!empty($vo["update_date"])): echo (date("Y-m-d H:i:s",$vo["update_date"])); endif; ?>
                            </td>
                            <td>
                                <?php if(!empty($vo["due_date"])): echo (date("Y-m-d H:i:s",$vo["due_date"])); endif; ?>
                            </td><?php endif; ?>
                        </tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </table>
        </div>
        <div class="tab-pane fade back_box" id="tab6">
			<div class="header1">
				<div class="pull-left two-title" ><?php echo L('RELATED_SCHEDULE');?></div>
				<div class="pull-right">
					 <?php if($customer['is_deleted'] == 0): ?><a class="btn btn-primary add_event" href="javascript:void(0);" ><?php echo L('ADD');?></a><?php endif; ?>
				</div>
				<div style="clear:both;"></div>
			</div>
            <table class="table table-hover">
                <?php if($customer["event"] == null): ?><tr>
                        <td <?php if(C('ismobile') != 1): ?>colspan="6"<?php else: ?>colspan="4"<?php endif; ?>><?php echo L('THERE_IS_NO_DATA');?> </td>
                    </tr>
                <?php else: ?> 
                    <tr>
                        <td width="15%">&nbsp;</td>
                        <td><?php echo L('THEME');?></td>
                        <td><?php echo L('SITE');?></td>
                        <td><?php echo L('PRINCIPAL');?></td>
                        <?php if(C('ismobile') != 1): ?><td><?php echo L('The_start_time');?></td>
                        <td><?php echo L('THE_END_TIME');?></td><?php endif; ?>
                    </tr>
                    <?php if(is_array($customer["event"])): $i = 0; $__LIST__ = $customer["event"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tdleft">
                                <?php if($customer['is_deleted'] == 0): ?><a href="<?php echo U('event/view','id='.$vo['event_id']);?>"><?php echo L('CHECK');?></a>&nbsp; <a href="<?php echo U('event/delete','id='.$vo['event_id']);?>" class="del_confirm"><?php echo L('DELETE');?></a>&nbsp;
                                <?php if($vo["isclose"] == 0): ?><a href="<?php echo U('event/close','id='.$vo['event_id']);?>"><?php echo L('CLOSE');?></a><?php elseif($vo["isclose"] == 1): ?><a href="<?php echo U('event/open','id='.$vo['event_id']);?>"><?php echo L('OPEN');?></a><?php endif; endif; ?>
                            </td>
                            <td>
                                <?php echo ($vo["subject"]); ?>
                            </td>
                            <td>
                                <?php echo ($vo["venue"]); ?>
                            </td>
                            <td>
                                <?php if(!empty($vo["owner"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a><?php endif; ?>
                            </td>
                            <?php if(C('ismobile') != 1): ?><td>
                                <?php if(!empty($vo["start_date"])): echo (date("Y-m-d H:i:s",$vo["start_date"])); endif; ?>
                            </td>
                            <td>
                                <?php if(!empty($vo["end_date"])): echo (date("Y-m-d H:i:s",$vo["end_date"])); endif; ?>
                            </td><?php endif; ?>
                        </tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </table>
        </div>
        <div class="tab-pane fade back_box" id="tab4">
			<div class="header1">
				<div class="pull-left two-title" ><?php echo L('The_relevant_documents');?></div>
				<div class="pull-right">
					<?php if($customer['is_deleted'] == 0): ?><a class=" add_file btn btn-primary" href="javascript:void(0);" ><?php echo L('ADD');?></a><?php endif; ?>
				</div>
				<div style="clear:both;"></div>
			</div>
            <table class="table table-hover"> 
            <?php if($customer["file"] == null): ?><tr>
                    <td <?php if(C('ismobile') != 1): ?>colspan="5"<?php else: ?>colspan="3"<?php endif; ?>><?php echo L('THERE_IS_NO_DATA');?> </td>
                </tr>
            <?php else: ?> 
                <tr>
                    <td width="15%">&nbsp;</td>
                    <td><?php echo L('FILENAME');?></td>
                    <td><?php echo L('SIZE');?></td>
                    <?php if(C('ismobile') != 1): ?><td><?php echo L('ADDER');?></td>
                    <td><?php echo L('ADDTIME');?></td><?php endif; ?>
                </tr>
                <?php if(is_array($customer["file"])): $i = 0; $__LIST__ = $customer["file"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td class="tdleft">
                            <?php if($customer['is_deleted'] == 0): ?><a href="<?php echo U('file/delete', 'id='.$vo['file_id'].'&r=RCustomerFile');?>" class="del_confirm"><?php echo L('DELETE');?></a><?php endif; ?>
                        </td>
                        <td>
                            <a target="_blank" href="<?php echo ($vo["file_path"]); ?>"><?php echo ($vo["name"]); ?></a>
                        </td>
                        <td>
                            <?php echo ($vo["size"]); echo L('BYTE');?>
                        </td>
                        <?php if(C('ismobile') != 1): ?><td>
                            <?php if(!empty($vo["owner"]["user_name"])): ?><a class="role_info" rel="<?php echo ($vo["owner"]["role_id"]); ?>" href="javascript:void(0)"><?php echo ($vo["owner"]["user_name"]); ?></a><?php endif; ?>
                        </td>
                        <td>
                            <?php if($vo["create_date"] != 0): echo (date("Y-m-d H:i:s",$vo["create_date"])); endif; ?>
                        </td><?php endif; ?>
                    </tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
                <tr>
                    <td <?php if(C('ismobile') != 1): ?>colspan="5"<?php else: ?>colspan="3"<?php endif; ?>>
                        
                    </td>
                </tr>
            </table>
        </div>
        <div class="tab-pane fade back_box" id="tab13">
			<div class="header1">
				<div class="pull-left two-title" >相关销售</div>
				<div style="clear:both;"></div>
			</div>
            <table class="table table-hover">
                <?php if($customer["sales_order"] == null): ?><tr>
                        <td colspan="7"><?php echo L('THERE_IS_NO_DATA');?> </td>
                    </tr>
                <?php else: ?> 
                    <tr>
                        <td><?php echo L('ORDER_SN');?></td>
                        <td><?php echo L('THEME');?></td>
                        <td><?php echo L('TYPE');?></td>
                        <td><?php echo L('STATE');?></td>
                        <td><?php echo L('QUANTITY');?></td>
                        <td><?php echo L('MONEY');?></td>
                        <td><?php echo L('CREATION_TIME');?></td>
                    </tr>
                    <?php if(is_array($customer["sales_order"])): $i = 0; $__LIST__ = $customer["sales_order"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td>
                               <a href="<?php echo U('sales/edit', 'id='.$vo['sales_id']);?>" ><?php echo ($vo["sn_code"]); ?></a>
                            </td>
                            <td>
                                <a href="<?php echo U('sales/edit', 'id='.$vo['sales_id']);?>"><?php echo ($vo["subject"]); ?></a>
                            </td>
                            <td>
                                <?php if($vo['type'] == '0'): echo L('SALES'); else: echo L('SALES_RETURN'); endif; ?>
                            </td>
                            <td>
                                <?php if($vo['status'] == '97'): echo L('NOT_OUTBOUND');?>
                                <?php elseif($vo['status'] == '98'): ?>
                                    <?php echo L('HAVE_BEEN_OUTBOUNDED');?>
                                <?php elseif($vo['status'] == '99'): ?>
                                    <?php echo L('NOT_ENTER');?>
                                <?php elseif($vo['status'] == '100'): ?>
                                    <?php echo L('HAVE_BEEN_ENTERED'); endif; ?>
                            </td>
                            <td><?php echo ($vo["total_amount"]); ?></td>
                            <td><?php echo ($vo["sales_price"]); ?></td>
                            <td><?php echo (date('Y-m-d',$vo["create_time"])); ?></td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
            </table>
        </div>
    </div>
    <div class="span2 bs-docs-sidebar mar-lefts2" id="right_list" >
        <ul class="nav nav-list bs-docs-sidenav  span2 widths" >
            <li class="active first-li"><span class="spans1">编辑详情</span></li>
			<?php if($customer['owner_role_id'] == 0): ?><li><a rel="<?php echo ($customer['customer_id']); ?>" class="fenpei" href="javascript:void(0)"><img src="__PUBLIC__/img/youce.png"/>&nbsp;&nbsp;&nbsp;<?php echo L('DISTRIBUTION');?></a></li>  
				<li><a href="<?php echo U('customer/receive', 'customer_id='.$customer['customer_id']);?>"><img src="__PUBLIC__/img/youce.png"/>&nbsp;&nbsp;&nbsp;<?php echo L('RECEIVE');?></a> </li>
				<?php else: ?>
				<li><a href="<?php echo U('customer/fenpei', 'by=put&customer_id='.$customer['customer_id']);?>"><img src="__PUBLIC__/img/youce.png"/>&nbsp;&nbsp;&nbsp;<?php echo L('IN_THE_CUSTOMER_POOL');?></a></li><?php endif; ?>
            <li><a href="<?php echo U('contacts/add','redirect=customer&customer_id='.$customer['customer_id']);?>"><img src="__PUBLIC__/img/youce.png"/>&nbsp;&nbsp;&nbsp;<?php echo L('ADD_A_CONTACT');?></a> </li>
            <li><a href="javascript:void(0);" class="add_log"><img src="__PUBLIC__/img/youce.png"/>&nbsp;&nbsp;&nbsp;<?php echo L('ADD_THE_COMMUNICATION_LOG');?></a></li> 
            <li><a href="javascript:void(0);" class="add_task"><img src="__PUBLIC__/img/youce.png"/>&nbsp;&nbsp;&nbsp;<?php echo L('ADD_TASKS');?></a></li> 
            <li><a href="javascript:void(0);" class="add_event"><img src="__PUBLIC__/img/youce.png"/>&nbsp;&nbsp;&nbsp;<?php echo L('ADD_THE_SCHEDULE');?></a></li>
            <li><a href="javascript:void(0);" class="add_file"><img src="__PUBLIC__/img/youce.png"/>&nbsp;&nbsp;&nbsp;<?php echo L('ADD_FILES');?></a></li>
        </ul>
    </div>
</div>
</div>
<div class="hide" id="dialog-file" title="<?php echo L('ADD_ATTACHMENT');?>">loading...</div>
<div class="hide" id="dialog-log" title="<?php echo L('Add_the_log');?>">loading...</div>
<div class="hide" id="dialog-log-edit" title="<?php echo L('EDIT_LOG');?>">loading...</div>
<div class="hide" id="dialog-task" title="<?php echo L('ADD_TASKS');?>">loading...</div>
<div class="hide" id="dialog-role-info" title="<?php echo L('EMPLOYEE_INFORMATION');?>">loading...</div>
<div class="hide" id="dialog-event" title="<?php echo L('ADD_THE_SCHEDULE');?>">loading...</div>
<div class="hide" id="dialog-fenpei" title="<?php echo L('DISTRIBUTION_OF_CUSTOMERS');?>">loading...</div>
<div class="hide" id="dialog-map" title="<?php echo L('MAP');?>">loading...</div>
<div class="hide" id="dialog-share" title="客户共享">loading...</div>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Z0Fo0ib1GUgWlylCWeLvQh2U"></script>
<script type="text/javascript">
    $('#left_list a').click(function (e) {
        e.preventDefault();
        $('#right_list').hide();
        $('#left_list').parent().next().removeClass('span8').addClass('span10');
        $(this).tab('show');
    })
    $('#left_list a:first').on('click', function (e) {
        $('#left_list').parent().next().removeClass('span10').addClass('span8');
        $('#right_list').show();
    })
<?php if(C('ismobile') == 1): ?>width=$('.container').width() * 0.9;<?php else: ?>width=800;<?php endif; ?>
$("#dialog-share").dialog({
    autoOpen: false,
    modal: true,
	width: 530,
	maxHeight: 600,
	position: ["center",100]
});
$("#dialog-role-info").dialog({
    autoOpen: false,
    modal: true,
	width: width,
	maxHeight: 400,
	position: ["center",100]
});
$("#dialog-file").dialog({
    autoOpen: false,
    modal: true,
	width: width,
	maxHeight: 400,
	position: ["center",100]
});
$("#dialog-log").dialog({
    autoOpen: false,
    modal: true,
	width: width,
	maxHeight: 400,
	position: ["center",100]
});
$("#dialog-fenpei").dialog({
	autoOpen: false,
	modal: true,
	width: 600,
	maxHeight: 400,
	position: ["center",100],
	buttons: {
		"Ok": function () {
			$('#fenpei_form').submit();	
			$(this).dialog("close");
		},
		"Cancel": function () {
			$(this).dialog("close");
		}
	}
});
$("#dialog-log-edit").dialog({
    autoOpen: false,
    modal: true,
	width: width,
	maxHeight: 400,
	position: ["center",100]
});
$("#dialog-task").dialog({
    autoOpen: false,
    modal: true,
	width: width,
	maxHeight: 400,
	position: ["center",100]
});
$("#dialog-event").dialog({
    autoOpen: false,
    modal: true,
	width: width,
	maxHeight: 400,
	position: ["center",100]
});
$("#dialog-map").dialog({
    autoOpen: false,
    modal: true,
	width: 800,
	minHeight: 600,
	position: ["center",100]
});
$(function(){
	$(".add_file").click(function(){
		$('#dialog-file').dialog('open');
		$('#dialog-file').load('<?php echo U("file/add","r=RCustomerFile&module=customer&id=".$customer["customer_id"]);?>');
	});
	$(".add_log").click(function(){
		$('#dialog-log').dialog('open');
		$('#dialog-log').load('<?php echo U("log/add","r=RCustomerLog&module=customer&id=".$customer["customer_id"]);?>');
	});
	$(".edit_log").click(function(){
		$log_id = $(this).attr('rel');
		$('#dialog-log-edit').dialog('open');
		$('#dialog-log-edit').load('<?php echo U("log/edit","id=");?>'+$log_id);
	});
	$(".add_task").click(function(){
		$('#dialog-task').dialog('open');
		$('#dialog-task').load('<?php echo U("task/add","r=RCustomerTask&module=customer&id=".$customer["customer_id"]);?>');
	});
	$(".add_event").click(function(){
		$('#dialog-event').dialog('open');
		$('#dialog-event').load('<?php echo U("event/add","r=RCustomerEvent&module=customer&id=".$customer["customer_id"]);?>');
	});
	$(".role_info").click(function(){
		$role_id = $(this).attr('rel');
		$('#dialog-role-info').dialog('open');
		$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
	});
	$(".more").click(function(){
		log_id = $(this).attr('rel');
		$('#llog_'+log_id).attr('class','');
		$('#slog_'+log_id).attr('class','hide');
	});
	$(".fenpei").click(function(){
		$customer_id = $(this).attr('rel');
		$('#dialog-fenpei').dialog('open');
		$('#dialog-fenpei').load('<?php echo U("customer/fenpei","customer_id=");?>'+$customer_id);
	});
	$(".getMap").click(function(){
		var map = $(this).attr('rel');
		$('#dialog-map').dialog('open');
		$('#dialog-map').load('<?php echo U("setting/mapdialog","map=");?>'+map);
	});
	$("#share").click(function(){
		$customer_id = <?php echo ($_GET['id']); ?>;
		if($customer_id){
			$('#dialog-share').dialog('open');
			$('#dialog-share').load("<?php echo U("customer/share");?>","customer_id="+$customer_id);
		}else{
			alert('<?php echo L('YOU_HAVE_NOT_CHOSEN_ANY_CUSTOMERS');?>');
		}
	});
});
</script>

</body>
</html>