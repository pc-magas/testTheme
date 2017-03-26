<?php


if(!function_exists('loadThemerequirements')):

function loadThemerequirements()
{
	$directory=get_template_directory(). '/languages';	
	$loaded=load_theme_textdomain('testTheme',$directory);
	
	error_log(var_export($loaded,true));
	error_log(get_locale());
	
	
}

endif;

add_action( 'after_setup_theme', 'loadThemerequirements' );