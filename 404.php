<?php
get_header();
?>
<div class="fullpage_center">
	<div>
		<h1>404</h1>
		<p><?php echo __('The requested page does not exist.', 'testTheme');?></p>
	</div>
</div>
<?php
	wp_reset_query(); //resetting the page query
	get_footer();
?>