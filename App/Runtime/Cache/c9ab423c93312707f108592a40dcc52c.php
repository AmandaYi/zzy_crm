<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>悟空CRM安装向导</title>
        <link rel="stylesheet" href="__PUBLIC__/Install/css/install.css" />
		<script src="__PUBLIC__/js/jquery-1.9.0.min.js"></script>
		<style>
			.server td{border:none;line-height: 30px;}
			.server fieldset table{margin:10px;auto;}
			.tdleft{text-align:right;}
			.tdright{text-align:left;}
		</style>
    </head>
    <body>
        <div class="wrap">
            <div class="header">
				<h1 class="logo">悟空软件</h1>
				<span class="anzhuang">|&nbsp;&nbsp;安装向导</span>
				<div class="version">悟空CRM 简体中文 【<?php echo C("VERSION");?>】 <?php echo C("RELEASE");?></div>
			</div>
             <section class="section">
               <div class="status_line"><h1>2、创建数据库</h1><img src="__PUBLIC__/Install/images/step_02.png"></div>
                <form id="form1" action="<?php echo U('install/step4');?>" method="post">
                    <div class="server">                      
						<fieldset style="width:80%">
							<legend style="font-weight:bold;">填写数据库信息</legend>
							<p style="padding:10px;20px;">
								<table>
									<tr>
										<td class="tdleft">数据库主机:</td>
										<td class="tdright"><input type="text" name="DB_HOST" value="localhost">&nbsp;&nbsp;数据库服务器地址, 一般为 localhost</td>
									</tr>
									<tr>
										<td class="tdleft">数据库名:</td>
										<td class="tdright"><input type="text" name="DB_NAME" value="5kcrm"></td>
									</tr>
									<tr>
										<td class="tdleft">端口:</td>
										<td class="tdright"><input type="text" name="DB_PORT" value="3306">&nbsp;&nbsp;一般为 3306</td>
									</tr>
									<tr>
										<td class="tdleft">数据库用户名:</td>
										<td class="tdright"><input type="text" name="DB_USER" value="root"></td>
									</tr>                                    
									<tr>                                      
										<td class="tdleft">数据库密码:</td>
										<td class="tdright"><input type="text" name="DB_PWD" value="root"></td>
									</tr>
									<tr>
										<td class="tdleft">表前缀:</td>
										<td class="tdright"><input type="text" name="DB_PREFIX" value="5kcrm_"></td>
									</tr>
									<tr>
										<td class="tdleft">数据字符集:</td>
										<td class="tdright"><input type="radio" name="" checked>UTF8</td>									
									</tr>
								</table>
							</p>							
						</fieldset>
						<fieldset style="width:80%;margin-top:20px;">
							<legend>请填写CRM管理员信息</legend>							
								<p style="padding:10px;20px;">
									<table>
										<tr>
											<td class="tdleft">管理员账号:</td>
											<td><input type="text" name="name" value="admin"></td>
										</tr>
										<tr>
											<td class="tdleft">管理员密码:</td>
											<td class="tdright"><input type="text" name="password" value=""></td>
										</tr>																
									</table>
							</p>
						</fieldset>
                    </div>
                    <div class="bottom tac"> 
						<div id="show_status" style="display:none;"><img src="__PUBLIC__/Install/images/pop_loading.gif"> 正在写入数据库</div>
						<a href="javascript:history.go(-1)" class="btn">上一步</a>
						<input type="button" value="下一步" class="btn" id="sub"/>
                    </div>
                </form>
            </section>
          
        </div>    
        </div>
        <div class="footer"><a href="http://www.5kcrm.com" target="_blank">© 2012 - 2016 悟空CRM & 卡卡罗特软件科技有限公司 豫ICP备13004021号</a>  </div>
    </body>
	<script>
		$(function(){
			$("#sub").click(function(){
				$("#show_status").show();
				$(this).attr('disabled', true);
				$(this).css('background', '#A69E9E');
				$("#form1").submit();
			});
		});
	</script>
</html>