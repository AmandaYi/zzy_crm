<?php if (!defined('THINK_PATH')) exit();?><div>
	<ul class="nav pull-left">
		<li class="pull-left">
			<select id="field" style="width:auto" onchange="changeCondition()" name="field">
				<option class="word" value=""><?php echo L('PLEASE_SELECT_A_FILTER_CONDITION');?></option>
				<option class="word" value="business.name"><?php echo L('BUSINESS_NAME');?></option>
				<option class="business_status" value="business.status_id"><?php echo L('BUSINESS_OPPORTUNITIES_PHASE');?></option>
				<option class="role" value="business.owner_role_id"><?php echo L('PRINCIPAL');?></option>
				<option class="customer" value="business.customer_id"><?php echo L('CUSTOMER');?></option>
				<option class="number" value="business.total_price"><?php echo L('THE_TOTAL_AMOUNT_OF');?></option>
			</select>&nbsp;&nbsp;
		</li>
		<li id="conditionContent" class="pull-left">
			<select id="condition" style="width:auto" name="condition" onchange="changeSearch()">
				<option value="contains"><?php echo L('INCLUDE');?></option>
				<option value="is"><?php echo L('YES');?></option>								
				<option value="start_with"><?php echo L('BEGINNING_CHARACTER');?></option>
				<option value="end_with"><?php echo L('TERMINATION_CHARACTER');?></option>
				<option value="is_empty"><?php echo L('MANDATORY');?></option>
			</select>&nbsp;&nbsp;
		</li>
		<li id="searchContent" class="pull-left">
			<input id="search" type="text" class="input-medium search-query" name="search"/>&nbsp;&nbsp;
		</li>
		<li class="pull-left">
			<button type="submit" class="btn" onclick="d_changeCondition(0)"><?php echo L('SEARCH');?></button>
		</li>
		&nbsp;<a target="_blank" href="<?php echo U('business/add');?>"><?php echo L('NEW_BUSINESS_OPPORTUNITIES');?></a>
	</ul>
</div>
<p>&nbsp;</p>
<?php if(empty($businessList)): ?><div class="alert"><?php echo L('TEMPORARILY_NO_DATA');?></div>
<?php else: ?>
	<table class="table table-hover">
		<thead>
			<tr> 
				<th></th>
				<th><?php echo L('BUSINESS_OPPORTUNITY');?></th>
				<th><?php echo L('CUSTOMER');?></th>
				<th><?php echo L('LINKMAN');?></th>
				<th><?php echo L('AMOUNT');?></th>
				<?php if(C('ismobile') != 1): ?><th><?php echo L('PHASE');?></th><?php endif; ?>		
			</tr>
		</thead>
		<tfoot id="footer">
			<tr>
				<?php if(C('ismobile') != 1): ?><td colspan="6"><?php else: ?><td colspan="4"><?php endif; ?>
					<div class="row pagination">
						<div class="span2"><span id="count"><?php echo ($count_num); ?></span> <?php echo L('RECORDS');?> <span id="p">1</span>/<span id="total_page"><?php echo ($total); ?></span> <?php echo L('PAGE');?></div>
						<div class="span4">
							<div><ul id="changepage">
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
		<tbody id="load" class="hide">
			<tr><td class="tdleft" <?php if(C('ismobile') != 1): ?>colspan="6"<?php else: ?>colspan="4"<?php endif; ?> style=" height:300px;text-align:center"><img src="./Public/img/load.gif"></td></tr>
		</tbody>
		<tbody id="data">
			<?php if(is_array($businessList)): $i = 0; $__LIST__ = $businessList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					<td><input type="radio" name="business" value="<?php echo ($vo["business_id"]); ?>"/><input type="hidden" id="dialog_customer_id" value="<?php echo ($vo["customer_id"]); ?>"/><input type="hidden" id="dialog_contacts_id" value="<?php echo ($vo["contacts_id"]); ?>"/></td>
					<td><?php echo ($vo["name"]); ?></td>
					<td><a target="_blank" href="<?php echo U('customer/view','id='.$vo['customer_id']);?>"><?php echo ($vo["customer_name"]); ?></a></td>
					<td><a target="_blank" href="<?php echo U('contacts/view','id='.$vo['contacts_id']);?>"><?php echo ($vo["contacts_name"]); ?></a></td>
					<td><?php if($vo['estimate_price'] > 0): echo ($vo["estimate_price"]); endif; ?></td>
					<?php if(C('ismobile') != 1): ?><td><?php echo ($vo["status_name"]); ?></td><?php endif; ?>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</tbody>
	</table><?php endif; ?>
<script type="text/javascript">
	$('.page').click(function(){
		var a = $(this).attr('rel');
		d_changeCondition(a);
	});
	function d_changeCondition(p){
		$('#data').addClass('hide');
		$('#load').removeClass('hide');
		
		var field = $('#field').val();
		var condition = $('#condition').val();
		var search = encodeURI($("#search").val());
		var customer_link = "<?php echo U('customer/view','id=');?>";
		var contacts_link = "<?php echo U('contacts/view','id=');?>";
		$.ajax({
			type:'get',
			url:'index.php?m=business&a=changecontent&field='+field+'&search='+search+'&condition='+condition+'&p='+p,
			async:false,
			success:function(data){
				var temp = '';
				if(data.data.list != null){
					$.each(data.data.list, function(k, v){
						temp += '<tr><td><input type="radio" name="business" value="'+v.business_id+'"/><input type="hidden" id="dialog_customer_id" value="'+v.customer_id+'"/><input type="hidden" id="dialog_contacts_id" value="'+v.contacts_id+'"/></td><td>'+v.name+'</td><td><a target="_blank" href="'+customer_link+v.customer_id+'">'+v.customer_name+'</a></td><td><a target="_blank" href="'+contacts_link+v.contacts_id+'">'+v.contacts_name+'</a></td><td>'+v.estimate_price+'</td>';
						<?php if(C('ismobile') != 1): ?>temp+="<td>"+v.status_name+"</td>";<?php endif; ?>
						temp+='</tr>';
					});
					var changepage = "";
					if(data.data.p == 1){
						changepage = "<li><span class='current'><?php echo L('FIRST_PAGE');?></span></li><li><span>« <?php echo L('THE_PREVIOUS_PAGE');?> </span></li>";
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
					$('#p').html(data.data.p);
					$('#changepage').html(changepage);
					$('#count').html(data.data.count);
					$('#total_page').html(data.data.total);
					$('#data').html(temp);
					$('.page').click(function(){
						var a = $(this).attr('rel');
						d_changeCondition(a);
					});
				}else{
					$('#data').html('<tr><td colspan="4"><?php echo L('DO_NOT_FIND_THE_RESULTS_YOU_WANT');?></tr>');
					$('#footer').addClass('hide');
				}
				$('#load').addClass('hide');
				$('#data').removeClass('hide');
			},
			dataType:'json'
		});		
	}
</script>