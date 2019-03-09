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
			<h4><?php echo L('ADD_USER');?></h4>
		</div>
		<div class="row">
			<div class="span12">
				<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab2" data-toggle="tab"><?php echo L('ADD_USER_SHORTCUT');?></a></li>
					<li><a href="#tab1" data-toggle="tab"><?php echo L('EMAIL_INVITATION');?></a></li>
				</ul>
			
				<div class="tab-content">
					<div class="tab-pane" id="tab1">
						<form id="add" action="<?php echo U('user/add');?>" method="post">
						<span style="color:red;"><?php echo L('EMAIL_INVITATION_TIP');?></span><br/>
						<input type="hidden" name="radio_type" value="email">
							<table style="width:580px" class="table">
								<thead>
									<tr>
										<th colspan="2"><?php echo L('BASIC_INFO');?></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="tdleft"><?php echo L('USER_NAME');?>&nbsp;<span style="color:red;">*</span></td>  
										<td>
											<input class="span3" type="text" name="name" id="name"/>
										</td>
									</tr>
									<tr>
										<td class="tdleft"><?php echo L('EMAIL');?>&nbsp;<span style="color:red;">*</span></td>  
										<td>
											<input class="span3" type="text" name="email" id="email"/>	
										</td>
									</tr>
									<?php if(session('?admin')): ?><tr>
											<td class="tdleft"><?php echo L('USER_CATEGORY');?>&nbsp;<span style="color:red;">*</span></td>  
											<td>
												<select name="category_id">
													<option value=""></option>
													<?php if(is_array($categoryList)): $i = 0; $__LIST__ = $categoryList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option <?php if($value['category_id'] == $vo['category_id']): ?>selected="selected"<?php endif; ?> value="<?php echo ($vo["category_id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
												</select>
											</td>
										</tr>
									<?php else: ?>
										<input type="hidden" name="category_id" value="2"/><?php endif; ?>
									<tr>
										<td class="tdleft"><?php echo L('DEPARTMENT');?>&nbsp;<span style="color:red;">*</span></td>  
										<td>
											<select id="department" name="department_id" onchange="changeRoleContent()">
												<option value=""></option>
												<?php if(is_array($department_list)): $i = 0; $__LIST__ = $department_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$temp): $mod = ($i % 2 );++$i;?><option value="<?php echo ($temp["department_id"]); ?>"><?php echo ($temp["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
											</select>
										</td>
									</tr>
									<tr>
										<td class="tdleft"><?php echo L('POSITION');?>&nbsp;<span style="color:red;">*</span></td>  
										<td>
											<select id="role" name="position_id">
											</select>
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>  
										<td>
											<input class="btn btn-primary" name="submit" type="submit" value="<?php echo L('ADD');?>"/>&nbsp; <input class="btn btn-primary" name="submit" type="submit" value="<?php echo L('SAVE AND NEW');?>"/> &nbsp;<input class="btn" onclick="javascript:history.go(-1)" type="reset" value="<?php echo L('RETURN');?>"/>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
					<div class="tab-pane active" id="tab2">
						<span style="color:red;"><?php echo L('ADD_USER_SHORTCUT_TIP');?></span><br/>
						<form id="add" action="<?php echo U('user/add');?>" method="post">
							<table style="width:580px" class="table">
								<thead>
									<tr>
										<th colspan="2"><?php echo L('BASIC_INFO');?></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="tdleft"><?php echo L('USER_NAME');?>&nbsp;<span style="color:red;">*</span></td>  
										<td>
											<input class="span2" type="text" name="name" id="name" style="width:210px"/>
										</td>
									</tr>
									<tr>
										<td class="tdleft"><?php echo L('PASSWORD');?><span style="color:red;">*</span></td>  
										<td>
											<input class="span2" type="password" name="password" id="password" style="width:210px"/>
										</td>
									</tr>
									<?php if(session('?admin')): ?><tr>
											<td class="tdleft"><?php echo L('USER_CATEGORY');?>&nbsp;<span style="color:red;">*</span></td>  
											<td>
												<select name="category_id">
													<option value=""></option>
													<?php if(is_array($categoryList)): $i = 0; $__LIST__ = $categoryList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option <?php if($value['category_id'] == $vo['category_id']): ?>selected="selected"<?php endif; ?> value="<?php echo ($vo["category_id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
												</select>
											</td>
										</tr>
									<?php else: ?>
										<input type="hidden" name="category_id" value="2"/><?php endif; ?>
									<tr>
										<td class="tdleft"><?php echo L('DEPARTMENT');?>&nbsp;<span style="color:red;">*</span></td>  
										<td>
											<select id="department2" name="department_id" onchange="changeRoleContent2()">
												<option value=""></option>
												<?php if(is_array($department_list)): $i = 0; $__LIST__ = $department_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$temp): $mod = ($i % 2 );++$i;?><option value="<?php echo ($temp["department_id"]); ?>"><?php echo ($temp["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
											</select>
										</td>
									</tr>
									<tr>
										<td class="tdleft"><?php echo L('POSITION');?>&nbsp;<span style="color:red;">*</span></td>  
										<td>
											<select id="role2" name="position_id">
											</select>
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>  
										<td>
											<input class="btn btn-primary" name="submit" type="submit" value="<?php echo L('ADD');?>"/>&nbsp; <input class="btn btn-primary" name="submit" type="submit" value="<?php echo L('SAVE AND NEW');?>"/> &nbsp;<input class="btn" onclick="javascript:history.go(-1)" type="reset" value="<?php echo L('RETURN');?>"/>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		function changeRoleContent(){
			department_id = $('#department').val();
			if(department_id == ''){
				$("#role").html('');
			}else{
				$.ajax({
					type:'get',
					url:'index.php?m=user&a=getpositionlist&id='+department_id,
					async:false,
					success:function(data){
						options = '';
						$.each(data.data, function(k, v){
							options += '<option value="'+v.position_id+'">'+v.name+'</option>';
						});
						$("#role").html(options);
					},
					dataType:'json'
				});		
			}
		}
		function changeRoleContent2(){
			department_id = $('#department2').val();
			if(department_id == ''){
				$("#role2").html('');
			}else{
				$.ajax({
					type:'get',
					url:'index.php?m=user&a=getpositionlist&id='+department_id,
					async:false,
					success:function(data){
						options = '';
						if(data.data){
							$.each(data.data, function(k, v){
								options += '<option value="'+v.position_id+'">'+v.name+'</option>';
							});
						}
						$("#role2").html(options);
					},
					dataType:'json'
				});	
			}
		}
		$('#role').click(
			function(){
				department_id = $('#department').val();
				if(department_id == ''){
					alert("<?php echo L('SELECT_DEPARTMENT_FIRST');?>");
				}
			}
		);
		$('#role2').click(
			function(){
				department_id = $('#department2').val();
				if(department_id == ''){
					alert("<?php echo L('SELECT_DEPARTMENT_FIRST');?>");
				}
			}
		);
	</script>

</body>
</html>