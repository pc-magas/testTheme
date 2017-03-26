<?php


if(!function_exists('loadThemerequirements')):

function loadThemerequirements()
{
	load_theme_textdomain( 'testTheme', get_stylesheet_directory(). '/languages' );
}

endif;

add_action( 'after_setup_theme', 'loadThemerequirements' );