<?php if (!defined('THINK_PATH')) exit(); if(!C('ismobile')): ?><link type="text/css" href="__PUBLIC__/css/jquery.e-calendar.css" rel="stylesheet"/>
<link type="text/css" href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet"/>
<div class="span6" id="calendar"></div><?php endif; ?>
<script type="text/javascript" src="__PUBLIC__/js/jquery.e-calendar.js"></script>
<script type="text/javascript">
		/**
		 * 初始化日历
		 **/
		$('#calendar').eCalendar();
</script>