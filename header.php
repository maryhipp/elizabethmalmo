<?php
/**
 * @package WordPress
 * @subpackage Eclectic
 */
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="IE ie8"> <![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="IE ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!--[if IE 8 ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<title><?php echo site_global_description(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<link rel="icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php bloginfo('siteurl'); ?>/favicon.ico" type="image/x-icon" />
<?php wp_head(); ?>

<!-- TYPEKIT -->
<link href='https://fonts.googleapis.com/css?family=Cinzel:400,700|Source+Sans+Pro:400,700,400italic|Comfortaa|Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.flexslider.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.columnizer.js"></script> -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/masonry.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/instafeedly.js"></script>
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/pinimages.js"></script> -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/imagesLoaded.js"></script>
<!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.elevatezoom.js"></script> -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/general.js"></script>


</head>
<body <?php body_class(); ?>>
	
	<header class="table">
		<h1 class="table-cell left">
			
			<a href="/" class="logo"><img alt="Elizabeth Malmo Interior Design" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-new.png">Interior Design</a>
		</h1>
		<div class="table-cell right"><?php wp_nav_menu(array('menu_name' => 'Main Nav')); ?></div>
	</header>
	<div class="body-wrapper">	