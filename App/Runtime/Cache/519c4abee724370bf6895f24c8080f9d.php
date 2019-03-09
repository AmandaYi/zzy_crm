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
<style type="text/css">
	.allmap{width:100%;height:150px;display:none;}
	img{
		/* 防止bootstrap 与 百度地图样式冲突，设置max-width为200%*/
		max-width:100%;
	}
	.BMap_shadow img{
		max-width:none;
	}
	.tangram-suggestion-main{
		z-index: 500;
	}
	.c-grid-width{width:100%}
	.c{opacity:0;-webkit-opacity:0;-moz-opacity:0;}
	.c-grido{width:100%;height:299px;}
	/*.span6{width:291px;margin-left:0px}*/
	.backToTop{right:20px;}
	.span-sort-item{margin-left:0px;}
</style>
<link type="text/css" href="__PUBLIC__/css/dynamic.css" rel="stylesheet" />
<link type="text/css" href="__PUBLIC__/css/flat/blue.css" rel="stylesheet">
<script src="__PUBLIC__/js/icheck.min.js"></script>
<div class="container">
	<div class="page-header" style="border:none; font-size:14px;margin-left:-10px; ">
        <ul class="nav nav-tabs" style="margin-top:-1px;">
            <li class="active"><a href="<?php echo U('dynamic/index');?>">工作动态</a></li>
            <li><a href="<?php echo (__APP__); ?>">仪表盘</a></li>
        </ul>
    </div>
	<?php if(is_array($alert)): foreach($alert as $k=>$v): if(is_array($v)): foreach($v as $kk=>$vv): ?><div class="alert alert-<?php echo ($k); ?>">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo ($vv); ?>
		</div><?php endforeach; endif; endforeach; endif; ?>
	<div class="row" style="margin-top:10px;">
		<div class="span3 knowledgecate" >
			<div style="border-right:1px solid #d7d7d7;padding:15px;">
				<div class="personal-panel">
					<div class="avatar01" >
						<?php if(empty($userInfo['img'])): ?><a href="<?php echo U('user/edit');?>"><img  style="margin:0px auto;" src="__PUBLIC__/img/avatar_default.png" class="thumbnail avatar-img"/></a>
						<?php else: ?>
							<a href="<?php echo U('user/edit');?>"><img style="margin:0px auto;" src="<?php echo ($userInfo["img"]); ?>" class="thumbnail avatar-img"/></a><?php endif; ?>
					</div>
					<div class="avatar01">
						<p class="p-size"><?php echo ($userInfo["user_name"]); ?></p>
						<div class="position01"></div>
						<p style="text-align:center;margin-top:10px;"><?php echo ($userInfo["department_name"]); ?> - <?php echo ($userInfo["role_name"]); ?></p>
						<p class="p-size">
							<a style="float:left;margin-left:10px;font-size:15px;color:#666;" href="<?php echo U('task/index','by=me');?>" >我的任务<span class="badge badge-success"><?php if($task_count): echo ($task_count); endif; ?></span></a> 
							<a style="float:right;margin-right:10px;font-size:15px;color:#666;" href="<?php echo U('event/index','by=me');?>" >我的日程<span class="badge badge-success"><?php if($event_count): echo ($event_count); endif; ?></span></a> 
						</p>
					</div>
				</div>
				<div class="dynamiccate">
					<ul class="nav nav-list">
						<li><a href="<?php echo U('dynamic/index');?>" <?php if($_GET['department_id'] == ''): ?>class="active"<?php endif; ?>>全部</a></li>
						<?php if(is_array($department)): $i = 0; $__LIST__ = $department;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
								<a href="<?php echo U('dynamic/index','department_id='.$vo['department_id']);?>" <?php if($_GET['department_id'] == $vo['department_id']): ?>class="active"<?php endif; ?>>
									<?php echo ($vo["name"]); ?>
								</a>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<ul class="nav nav-list">
						<li>
							<a href="<?php echo U('dynamic/index','reply=tome'.'&department_id='.$_GET['department_id'].'&by='.$_GET['by'].'&field='.$_GET['field'].'&search='.$_GET['search']);?>" <?php if($_GET['reply'] == 'tome'): ?>class="active"<?php endif; ?>> 回复我的</a>
						</li>
						<li>
							<a href="<?php echo U('dynamic/index','reply=toother'.'&department_id='.$_GET['department_id'].'&by='.$_GET['by'].'&field='.$_GET['field'].'&search='.$_GET['search']);?>" <?php if($_GET['reply'] == 'toother'): ?>class="active"<?php endif; ?>> 我回复的</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="span9" style="margin-left:20px;">
			<form action="<?php echo U('dynamic/index');?>" id="searchForm" method="get">
				<div class="top-panel">
					<input type="hidden" name="m" value="dynamic" />
					<input type="hidden" name="reply" value="<?php echo ($_GET['reply']); ?>" />
					<input type="hidden" name="by" value="<?php echo ($_GET['by']); ?>" />
					<input type="hidden" name="department_id" value="<?php echo ($_GET['department_id']); ?>" />
					<ul class="list0 pull-left">
						<li><a href="<?php echo U('dynamic/index','reply='.$_GET['reply'].'&department_id='.$_GET['department_id'].'&field='.$_GET['field'].'&search='.$_GET['search']);?>" <?php if($_GET['by']== ''): ?>class="active"<?php endif; ?> style="color:#6F6F6F">全部动态</a></li>
						<li><a href="<?php echo U('dynamic/index','by=log'.'&reply='.$_GET['reply'].'&department_id='.$_GET['department_id'].'&field='.$_GET['field'].'&search='.$_GET['search']);?>"  <?php if($_GET['by']== 'log'): ?>class="active"<?php endif; ?>style="color:#6F6F6F">日志动态</a></li>
						<li><a href="<?php echo U('dynamic/index','by=crm'.'&reply='.$_GET['reply'].'&department_id='.$_GET['department_id'].'&field='.$_GET['field'].'&search='.$_GET['search']);?>" <?php if($_GET['by']== 'crm'): ?>class="active"<?php endif; ?>style="color:#6F6F6F">CRM</a></li>
					</ul>
					<ul class="list0 pull-right">
						<li>
							<select name="field" id="field" class="span1">
								<option value="role" selected>用户</option>
								<option value="content">内容</option>
							</select>
						</li>
						<li><input type="text" name="search" value="" class="search-text" placeholder="请输入..."></li>
						<li><button type="button" id="searchBtn" class="btn btn-primary">查询</button></li>
					</ul>
				</div>
			</form>
			<div class="middle-content">
				
				<?php if(empty($actionLog)): ?><div class="alert alert-info">没有动态信息</div>
				<?php else: ?>
					<?php if(is_array($actionLog)): $i = 0; $__LIST__ = $actionLog;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="dy-content" id="anchor_<?php echo ($vo["log_id"]); ?>">
							<div class="title3">
								<?php if(empty($vo['creator']['img'])): ?><img src="__PUBLIC__/img/avatar_default.png" class="avatar"/>
								<?php else: ?>
									<img src="<?php echo ($vo["creator"]["img"]); ?>" class="avatar"/><?php endif; ?>
							</div>
							<div class="role0">
								<p>
									<a href="javascript:void(0)" class="role_info" rel="<?php echo ($vo["creator"]["role_id"]); ?>"><?php echo ($vo["creator"]["user_name"]); ?></a>
									<span><?php echo ($vo["creator"]["department_name"]); ?> - <?php echo ($vo["creator"]["role_name"]); ?></span>
								</p>
								<p class="time"><?php echo (date('Y-m-d H:i:s',$vo["create_time"])); ?></p>
							</div>
							
							<?php if($vo['module_name'] == 'sign'): ?><div class="conent0" style="width:60%;">
									<img style="height:15px;vertical-align:text-bottom;" src="__PUBLIC__/img/location.png"></img>
									<span style="color:#666"><?php echo ($vo["address"]); ?></span>
									<input class="longitude" type="hidden" rel="<?php echo ($vo["y"]); ?>"/>
									<a href="javascript:void(0);"style="font-size:12px;" class=" pull-right map" >显示地图</a>
									<div id="allmap<?php echo ($i); ?>" rel="allmap<?php echo ($i); ?>" class="allmap"></div>
									<input class="latitude" type="hidden" rel="<?php echo ($vo["x"]); ?>"/>
								</div>
								
								<div class="conent0">
									<div style="color:#666">签到说明：</div>
									<div><?php echo ($vo["log"]); ?></div>
								</div>
								<div class="conent0">
									<div style="color:#666">现场照片：</div>
									<?php if(is_array($vo['sign_img'])): $i = 0; $__LIST__ = $vo['sign_img'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="box-secondary" rel="<?php echo ($vo["img_id"]); ?>">
											<a href="<?php echo ($v["path"]); ?>" target="_self" class="litebox" data-litebox-group="group-1">
												<img src="<?php echo ($v["path"]); ?>" class="thumbnail thumb100">
											</a>
										</div><?php endforeach; endif; else: echo "" ;endif; ?>
									<div style="clear:both;"></div>
								</div>
							<?php else: ?>
								<div class="conent0 pres"><?php echo ($vo["dynamic"]); ?></div>
								<?php if($vo['appHtml']): ?><div class="conent0" rel="<?php echo ($vo["log_id"]); ?>">
										<?php echo msubstr($vo['appHtml'], 0, 200);?>
										<?php if(($vo['appHtml_len']) > "200"): ?><a href="<?php echo ($vo['link']); ?>">查看原文</a><?php endif; ?>
									</div><?php endif; endif; ?>
							
							
							<div class="conent0"> <a href="javascript:void(0);"style="font-size:12px;" class="reply" rel="<?php echo ($vo["log_id"]); ?>">回复(<span class="reply-count"><?php echo ($vo["comment_count"]); ?></span>)</a></div>
							<div class="clear"></div>
							<div class="reply-panel" id="reply_<?php echo ($vo["log_id"]); ?>" <?php if(!empty($vo['comment_count'])): ?>style="display: block;"<?php endif; ?>>
								<textarea class="reply-content"  id="content_<?php echo ($vo["log_id"]); ?>" name="content"></textarea>
								<div class="subbtn">
									<?php if($_GET['by']== 'log' || strpos($vo['dynamic'], 'm=log')): ?><input type="checkbox" id="messageAlert" name="messageAlert[]" value="message" checked="checked"/> <span class="alert-type">站内信</span>&nbsp;&nbsp;<?php endif; ?>
									<input type="button" name="submit" class="btn btn-primary submit" rel="<?php echo ($vo["log_id"]); ?>" action_id="<?php echo ($vo["action_id"]); ?>" to_role_id="<?php echo ($vo["creator"]["role_id"]); ?>" module_name="<?php echo ($vo["module_name"]); ?>" value="评论">
									&nbsp;&nbsp;<input type="button" name="cancel" class="btn btn-primary cancel" rel="<?php echo ($vo["log_id"]); ?>" value="取消">
								</div>
							</div>
							<div class="comment-panel" id="comment_<?php echo ($vo["log_id"]); ?>" rel="<?php echo ($vo["log_id"]); ?>" <?php if(!empty($vo['comment_count'])): ?>style="display: block;"<?php endif; ?>>
								<?php if(is_array($vo['comment'])): $i = 0; $__LIST__ = $vo['comment'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="comment-fold-<?php echo ($val["comment_id"]); ?> fold" rel="<?php echo ($val["comment_id"]); ?>">
										<div class="comment-header">
											<?php if(empty($val['comment_role']['img'])): ?><img src="__PUBLIC__/img/avatar_default.png" class="avatar"/>
											<?php else: ?>
												<img src="<?php echo ($val['comment_role']['img']); ?>" class="avatar"/><?php endif; ?>
										</div>
										<div class="comment-list">
											<a href="javascript:void(0)" class="role_info" rel="<?php echo ($val["comment_role"]["role_id"]); ?>"><?php echo ($val["comment_role"]["user_name"]); ?></a>
											<span>: <?php echo ($val["content"]); ?></span>
											<span class="time">（<?php echo (date('Y-m-d H:i:s',$val["create_time"])); ?>）</span>
										</div>
										<div class="clear"></div>
									</div><?php endforeach; endif; else: echo "" ;endif; ?>
								<?php if($vo['comment_count'] > '5'): ?><div class="more-bar">
										<a href="javascript:void(0);" class="more" rel="<?php echo ($vo["log_id"]); ?>">展开剩余<?php echo ($vo["comment_left_count"]); ?>条回复</a>
									</div><?php endif; ?>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
					<?php echo ($page); endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="hide" id="dialog-role-info" title="<?php echo L('EMPLOYEE_INFORMATION');?>">loading...</div>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Z0Fo0ib1GUgWlylCWeLvQh2U"></script>
<link href="__PUBLIC__/css/litebox.css" rel="stylesheet" type="text/css">
<script src="__PUBLIC__/js/litebox.min.js" type="text/javascript"></script>
<script src="__PUBLIC__/js/images-loaded.min.js" type="text/javascript"></script>
<script type="text/javascript">
	//ajaxFileUpload 无刷新上传附件
	function uploadImg(imgfileId, imgcontainerId) {  
	  $.ajaxFileUpload({  
		fileElementId: imgfileId,  
		url: '/UploadImage',  
		dataType: 'json',  
		data: { id: 'aaa', name: 'bbb' },  
		beforeSend: function (XMLHttpRequest) {  
		  //("loading");  
		},  
		success: function (data, textStatus) {  
		  var img = "<img src='' width='300' height='300' />";  
		  $("#" + imgcontainerId).append(img);  
		},  
		error: function (XMLHttpRequest, textStatus, errorThrown) {  
		  var img = "图片上传失败！";  
		  $("#" + imgcontainerId).append(img);  
		  var msg = "服务器出错，错误内容：" + XMLHttpRequest.responseText;  
		  $.messager.showWin({ msg: msg, title: '错误提示', color: 'red' });  
		},  
		complete: function (XMLHttpRequest, textStatus) {  
		  //("loaded");  
		}  
	  });  
	} 
	$('.litebox').liteBox({
	  revealSpeed: 400,
	  background: 'rgba(0,0,0,.8)',
	  overlayClose: true,
	  escKey: true,
	  navKey: true,
	  errorMessage: '图片加载失败.'
	});
	$(document).ready(function(){
		/**初始化Checkbox和radio样式*/
		$('input').iCheck({
			checkboxClass: 'icheckbox_flat-blue',
			radioClass: 'iradio_flat'
		});
		$('.map').click(function(){
			$(this).next('.allmap').slideToggle('show');
			var a =$(this).siblings('.longitude').attr('rel');
			var b =$(this).siblings('.latitude').attr('rel');
			var vals = $(this).next('.allmap').attr('rel');
			var url = "<?php echo U('dynamic/gettranslocation');?>"+"&longtitude="+a+"&latitude="+b;
			$.get(url, function(data){
				var x = data.data.x;
				var y = data.data.y;
				setTimeout("mapInit("+y+","+x+","+vals+")",1000);
			})
			
		});
		/**点击回复，显示回复输入框*/
		$('.reply').click(function(){
			var val = $(this).attr('rel');
			$('#reply_'+val).slideToggle('1500');
			$('#comment_'+val).slideToggle('1500');
		});
		/**点击取消按钮，关闭回复输入框*/
		$('.cancel').click(function(){
			var val = $(this).attr('rel');
			$('#reply_'+val).slideToggle('1500');
			$('#comment_'+val).slideToggle('1500');
		});
		
		/**点击评论按钮，提交评论*/
		$('.submit').click(function(){
			//获取站内信是否为发送状态
			if($(this).parent().children().attr('class').indexOf('checked') > 0){
				var messageAlert = 'message';
			}else{
				var messageAlert = '';
			}

			var log_id = $(this).attr('rel');
			var action_id = $(this).attr('action_id');
			var module_name = $(this).attr('module_name');
			//如果是评论日志的话，直接评论日志id的那条记录，否则评论操作日志id的记录
			if(module_name == 'log'){
				var object_id = action_id;	//提交到数据库的id，如果module_name=log，则object_id为log表的log_id，否则为action_log表的log_id
			}else{
				var object_id = log_id;		//提交到数据库的id，如果module_name=log，则object_id为log表的log_id，否则为action_log表的log_id
			}
			var content = $('#reply_'+log_id).children().val();
			var to_role_id = $(this).attr('to_role_id');

			if(log_id == '' || content == '' || to_role_id == ''){
				alert('请输入评论内容！');
				return false;
			}else{
				//先设置按钮为不可用，防止重复提交
				$(this).val('评论中...');
				$(this).attr('disabled', true);
				$.ajax({
					url : '<?php echo U("dynamic/adddynamiccomment");?>',
					type : 'post',
					dataType : 'json',
					async : false,
					data : {module_id : object_id, module_name : module_name, content : content, to_role_id : to_role_id, messageAlert: messageAlert},
					success : function(data){
						if(data.status == 1){
							//增加回复数目
							objReply = $('#anchor_'+log_id).find('.toolbar').find('.reply-count');
							$(objReply).html(parseInt(objReply.html())+1);
							location.reload();
							//清空输入框内容
							$('#reply_'+log_id).children().val('');
							//加载评论内容
							var commnet_html = '<div class="comment-fold-'+data.data.comment_id+' fold" rel="'+data.data.comment_id+'">';
							commnet_html += '<div class="comment-header">';
							if(data.data.img != ''){
								commnet_html += '<img src="'+data.data.img+'" class="avatar"></div>';
							}else{
								commnet_html += '<img src="__PUBLIC__/img/avatar_default.png" class="avatar"></div>';
							}
							commnet_html += '<div class="comment-list">';
							commnet_html += '<a href="javascript:void(0)"class="role_info" rel="'+data.data.role_id+'">'+data.data.user_name+'</a>';
							commnet_html += ': '+content+'<span class="time">（'+data.data.time+'）</span>';
							commnet_html += '<div class="clear"></div></div></div>';
							$('#comment_'+log_id).prepend(commnet_html);
							//缓慢显示
							$('.comment-fold-'+data.data.comment_id).css("opacity","0");
							$('.comment-fold-'+data.data.comment_id).animate({opacity:1},800);
						}else{
							alert(data.info);
						}
					},
					error : function(data){
						alert(data.info);
					}
				});
				//评论成功时，评论按钮恢复可用
				$(this).attr('disabled',false);
				$(this).val('评论');
			}
		});
		/**鼠标移上评论，显示删除和回复按钮*/
		$('.comment-panel').on('mouseenter','.fold',function(){
			var comment_id = $(this).attr('rel');
			var creator_role_id = $(this).find('.role_info').attr('rel');	//评论人
			var session_role_id = "<?php echo session('role_id');?>";					//当前登陆用户
			var log_id = $(this).parent().attr('rel');						//日志id
			
			var tail_html = '<span class="tail">';
			
			//如果评论人与当前登录用户是同一个人，显示删除按钮，否则显示回复
			if(creator_role_id == session_role_id){
				tail_html += '<a href="javascript:void(0);" class="del" rel="'+comment_id+'">删除</a>';
			}else{
				tail_html += '<a href="javascript:void(0);" class="anchor" rel="'+log_id+'">回复</a>&nbsp;&nbsp';
			}
			tail_html += '</span>';
			$(this).find('.time').after(tail_html);
		});
		
		/**鼠标移出评论，去除删除和回复按钮*/
		$('.comment-panel').on('mouseleave','.fold',function(){
			$(this).find('.tail').remove();
		});
		
		/**点击回复*/
		$('.comment-panel').on('click','.anchor',function(){
			var log_id = $(this).attr('rel');
			window.location.href = "#anchor_"+log_id;
			var to_role_id = $(this).parent().parent().find('.role_info').attr('rel');
			var to_role_name = $(this).parent().parent().find('.role_info').html();
			$('#content_'+log_id).val('@'+to_role_name+' ');
		});
		
		/**点击员工名，发送站内信*/
		$(".role_info").on('click',function(){
			$role_id = $(this).attr('rel');
			$('#dialog-role-info').dialog('open');
			$('#dialog-role-info').load('<?php echo U("user/dialoginfo","id=");?>'+$role_id);
		});
		$(".conent1").each(function(){
			$height = $(this).children().first().height();
			if($height > 50){
			alert($height);
				var id = $(this).attr('rel');
				$(this).after('<div class="conent0"><a id="show'+id+'" href="javascript:showAll('+id+');" >展开全部</a></div>');
			}
		})
	});
	
	function showAll(id){
		if($('#conent1_'+id).height() <= 50){
			$('#conent1_'+id).css('height','auto');
			$("#show"+id).text('收缩');
		}else{
			$('#conent1_'+id).css('height','50px');
			$("#show"+id).text('展开全部');
		}
	}
	
	/**删除自己发的评论*/
	$('.comment-panel').on('click','.del',function(){
		var comment_id = $(this).attr('rel');
		if(!comment_id){
			alert('参数错误');
			return false;
		}
		
		if(confirm('确定要删除么？')){
			$.ajax({
				url : '<?php echo U("dynamic/deleteComment");?>',
				type : 'post',
					dataType : 'json',
					data : {comment_id : comment_id},
					success : function(data){
						if(data.status == 1){
							//减少回复数目
							log_id = $('.comment-fold-'+comment_id).parent().attr('rel');
							objReply = $('#anchor_'+log_id).find('.toolbar').find('.reply-count');
							oldReplyCount = parseInt(objReply.html());
							nowReplyCount = oldReplyCount - 1 < 0 ? 0 : oldReplyCount - 1;
							$(objReply).html(nowReplyCount);
							//评论内容缓慢消失
							$('.comment-fold-'+comment_id).css("opacity","1");
							$('.comment-fold-'+comment_id).animate({opacity:0},800,function(){
								$('.comment-fold-'+comment_id).remove();
							});
						}else{
							alert(data.info);
						}
					},
					error : function(data){
						alert(data.info);
					}
			});
		}else{
			return false;
		}
	});
	
	/**点击更多显示更多评论*/
	$('.more').click(function(){
		var log_id = $(this).attr('rel');
		$(this).after('<div class="loadDiv"><img src="__PUBLIC__/img/load.gif" class="loading" alt="加载中..."> 加载中...</div>');
		$(this).remove();
		
		$.ajax({
			url : '<?php echo U("dynamic/more");?>',
			type : 'post',
			dataType : 'json',
			data : {log_id : log_id},
			success : function(data){
				if(data.status == 1){
					$.each(data.data, function(i, item){
						//加载评论内容
						var commnet_html = '<div class="comment-fold-'+item.comment_id+' fold" rel="'+item.comment_id+'">';
						commnet_html += '<div class="comment-header">';
						if(item.comment_role.img != ''){
							commnet_html += '<img src="'+item.comment_role.img+'" class="avatar"></div>';
						}else{
							commnet_html += '<img src="__PUBLIC__/img/avatar_default.png" class="avatar"></div>';
						}
						commnet_html += '<div class="comment-list">';
						commnet_html += '<a href="javascript:void(0)"class="role_info" rel="'+item.comment_role.role_id+'">'+item.comment_role.user_name+'</a>';
						commnet_html += ': '+item.content+'<span class="time">（'+item.time+'）</span>';
						commnet_html += '<div class="clear"></div></div></div>';
						$('#comment_'+log_id).append(commnet_html);
					});
					$('.loadDiv').remove();
				}else{
					alert(data.info);
				}
			},
			error : function(data){
				alert(data.info);
			}
		});
	});
	
	/** 查询 */
	$('#searchBtn').click(function(){
		$('#searchForm').submit();
	});
	
	/** 搜索结果自动填充 */
	$("#field option[value='<?php echo ($_GET['field']); ?>']").prop('selected', true);
	$('.search-text').val("<?php echo ($_GET['search']); ?>");
	
	$("#dialog-role-info").dialog({
		autoOpen: false,
		modal: true,
		width: 600,
		maxHeight: 400,
		position: ["center",100]
	});
	function mapInit(x,y,mapID){
		// 默认河南省郑州市
		var map = new BMap.Map(mapID);
		var point = new BMap.Point(y,x);
		map.centerAndZoom(point,15);
		// 根据聚焦点缩放
		map.enableScrollWheelZoom(true);
		var marker = new BMap.Marker(point);
		map.addOverlay(marker);
		marker.setAnimation(BMAP_ANIMATION_BOUNCE);
		
	}
</script>

</body>
</html>