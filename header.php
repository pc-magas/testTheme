<?php 
$themeUri=get_stylesheet_directory_uri();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<title><?php wp_title(''); ?></title>
	
	<link rel="icon" type="image/x-icon" href="<?=$themeUri;?>/favicon.ico">
	
	<link rel="stylesheet" href="<?=$themeUri;?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=$themeUri;?>/style.css">
	
	<?php wp_head(); ?>
</head>
<body>
<?php 
if ( ! current_user_can( 'manage_options' ) ) {
	show_admin_bar( false );
} else {
	show_admin_bar( true );
}
?>
	<nav>
		<div id="desktop-nav">
			<div class="site_name">
				<h1><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			</div>
			<ul class="nav">
				<li class="page_item page-item-2">
					<a href="<?php echo site_url(); ?>">Home Page</a>	
				</li>
				<?php wp_list_pages(array('title_li' => null, 'exclude' => 4)); ?>
			</ul>
		</div>
		<div id="mobile-nav">
			<div class="mobile-header">
				<ul class="ul-inline">
					<li>
						<button id="nav-dropdown">+</button>
					</li>
					<li class="site_name">
						<?php bloginfo('name'); ?>
					</li>
					<li>
						<button id="sidebar-dropdown">+</button>
					</li>
				</ul>
			</div>
			<ul class="nav">
				<li class="page_item page-item-2">
					<a href="<?php echo site_url(); ?>">Home Page</a>	
				</li>
				<?php wp_list_pages(array('title_li' => null, 'exclude' => 4)); ?>
			</ul>
		</div>
	</nav>
<div class="content">
