<?php if (!defined('THINK_PATH')) exit();?><div class="clearfix">
	<ul class="nav pull-left">
		<li class="pull-left">
			<?php echo L('SELECT_DEPARTMENT');?>&nbsp; <select style="width:auto" name="d_department" id="d_department" onchange="changedepartment()">
				<option class="all" value="all"><?php echo L('ALL');?></option>
				<?php if(is_array($departmentList)): $i = 0; $__LIST__ = $departmentList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["department_id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
			</select>&nbsp;&nbsp;
		</li>
		<li class="pull-left">
			&nbsp; <?php echo L('USER_NAME');?>：<input class="span2" id="d_name" type="text" name="d_name"/>
		</li>
		&nbsp; <button class="btn" onclick="d_changeContent()"><?php echo L('SEARCH');?></button>
	</ul>
</div>
<?php if($role_list): ?><table class="table table-hover">
	<thead>
		<tr>
			<th>&nbsp;</th>
			<th><?php echo L('STAFF');?></th>
			<th><?php echo L('DEPARTMENT');?></th>
			<th><?php echo L('POSITION');?></th>	
			<?php if(C('ismobile') != 1): ?><th><?php echo L('SEX');?></th>
			<th>Email</th>
			<th><?php echo L('TELPHONE');?></th><?php endif; ?>
		</tr>
	</thead>
	<tfoot id="footers">
		<tr>
			<td <?php if(C('ismobile') != 1): ?>colspan="7"<?php else: ?> colspan="4"<?php endif; ?>>
				<div class="row pagination">
					<div class="span2"><span id="counts"><?php echo ($count_num); ?></span> <?php echo L('RECORDS');?> <span id="ps">1</span>/<span id="total_pages"><?php echo ($total); ?></span> <?php echo L('PAGE');?></div>
					<div class="span4">
						<div><ul id="changepages">
							<li><span class='current'><?php echo L('FIRST_PAGE');?></span></li><li><span>« <?php echo L('THE_PREVIOUS_PAGE');?></span></li>
							<?php if(1 < $total): ?><li><a class="page" href="javascript:void(0)" rel="2"><?php echo L('THE_NEXT_PAGE');?> »</a></li>
							<?php else: ?>
								<li><span><?php echo L('THE_NEXT_PAGE');?> »</span></li><?php endif; ?>
						</ul></div>
					</div>
				</div>
			</td>
		</tr>
	</tfoot>
	<tbody id="d_content">
		<?php if(role_list != null): if(is_array($role_list)): $i = 0; $__LIST__ = $role_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
			<td><input name="owner" type="radio" value="<?php echo ($vo["role_id"]); ?>" /></td>
			<td><?php echo ($vo["user_name"]); ?></td>
			<td><?php echo ($vo["department_name"]); ?></td>
			<td><?php echo ($vo["role_name"]); ?></td>	
			<?php if(C('ismobile') != 1): ?><td><?php if($vo['sex'] == 1): echo L('MALE'); elseif($vo['sex'] == 2): echo L('FEMALE'); endif; ?></td>
			<td><?php echo ($vo["email"]); ?></td>
			<td><?php echo ($vo["telephone"]); ?></td><?php endif; ?>
		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		<?php else: ?>
			<tr>
				<td><?php echo L('EMPTY_DATA');?></td>
			</tr><?php endif; ?>
	</tbody>
</table>
<?php else: ?>
<div class="alert">
	<?php echo L('EMPTY_DATA');?>
</div><?php endif; ?>
<script type="text/javascript">

	$('.page').click(function(){
		var a = $(this).attr('rel');
		d_changeContent(a);
	});
	function changedepartment(){
		$('#d_name').val();
	}
	function d_changeContent(p){
		$('#footers').removeClass('hide');
		department = $('#d_department').val();
		name = $('#d_name').val();
		$.ajax({
			type:'get',
			url:'index.php?m=user&a=changeContent&department='+department+'&name='+name+'&p='+p,
			async:false,
			success:function(data){
				temp = '';
				if(data.data.list != null){
					$.each(data.data.list, function(k, v){
						temp += "<tr><td><input name='owner' type='radio' value='"+v.role_id+"' /></td><td>"+v.user_name+"</td><td>"+v.department_name+"</td><td>"+v.role_name+"</td>";
						<?php if(C('ismobile') != 1): ?>if(v.sex == 1){
								temp += "<td><?php echo L('MALE');?></td>";
							}else if(v.sex == 2){
								temp += "<td><?php echo L('FEMALE');?></td>";
							}else{
								temp += "<td>&nbsp;</td>";
							}
							temp += "<td>"+v.email+"</td>";
							temp += "<td>"+v.telephone+"</td>";<?php endif; ?>;
						temp += "</tr>";
					});
					var changepage = "";
					if(data.data.p == 1){
						changepage = "<li><span class='current'><?php echo L('FIRST_PAGE');?></span></li><li><span>« <?php echo L('THE_PREVIOUS_PAGE');?></span></li>";
						if(data.data.p < data.data.total){
							changepage += "<li><a class='page' href='javascript:void(0)' rel='"+(data.data.p+1)+"'><?php echo L('THE_NEXT_PAGE');?> »</a></li>";
						}else{
							changepage += "<li><span><?php echo L('THE_NEXT_PAGE');?> »</span></li>";
						}
					}else if(data.data.p == data.data.total){
						changepage = "<li><a class='page' href='javascript:void(0)' rel='1'><?php echo L('FIRST_PAGE');?></a></li><li><a class='page' href='javascript:void(0)' rel='"+(data.data.p-1)+"'>« <?php echo L('THE_PREVIOUS_PAGE');?></a></li><li><span><?php echo L('THE_NEXT_PAGE');?> »</span></li>";
					}else{
						changepage = "<li><a class='page' href='javascript:void(0)' rel='1'><?php echo L('FIRST_PAGE');?></a></li><li><a class='page' href='javascript:void(0)' rel='"+(data.data.p-1)+"'>« <?php echo L('THE_PREVIOUS_PAGE');?></a></li><li><a class='page' href='javascript:void(0)' rel='"+(data.data.p+1)+"'><?php echo L('THE_NEXT_PAGE');?> »</a></li>";
					}
					$('#d_content').html(temp);
					$('#ps').html(data.data.p);
					$('#changepages').html(changepage);
					$('#counts').html(data.data.count);
					$('#total_pages').html(data.data.total);
					$('.page').click(function(){
						var a = $(this).attr('rel');
						d_changeContent(a);
					});
				}else{
					$('#d_content').html('<tr><td <?php if(C('ismobile') != 1): ?>colspan="7"<?php else: ?> colspan="4"<?php endif; ?>><?php echo L("NOT_FIND_THE_RESULTS_YOU_WANT");?></td></tr>');
					$('#footers').addClass('hide');
				}
			},
			dataType:'json'
		});		
	}

</script>