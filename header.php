<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]--> 
<head>
	<meta charset="UTF-8">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	
	<!-- Meta -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0;">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	
	<!-- Link to Typekit fonts -->
	<script type="text/javascript" src="//use.typekit.net/stg8wtu.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		
	<!-- CSS + jQuery + JavaScript -->
	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>>
	
	<!-- Wrapper -->
		<div class="wrapper">

	<!-- Header -->
		<header>
		
			<!-- Logo -->
			<div id="logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/nigel-logo.png" alt="Logo">
				</a>
			</div>
			<!-- /Logo -->
		
			
			<!-- Nav -->
			<nav>
				<ul>
					<?php wp_nav_menu( array( 'header-menu'  => 'Main Nav') ); ?> 
	                
	            </ul>
			</nav>
			<!-- /Nav -->
			
				<div id="tagline"><?php echo bloginfo('description'); ?></div>
			
					<?php get_template_part('searchform'); ?>

	</header>
	<!-- /Header -->
	

	
