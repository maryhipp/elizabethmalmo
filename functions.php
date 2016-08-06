<?php
/**
 * @package WordPress
 * @subpackage themename
 */



// removes admin bar on wordpress home
add_filter( 'show_admin_bar', '__return_false' );

// Add Favicon //
function diww_favicon() {
	echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_site_url() . '/favicon.ico" />';
}
add_action('wp_head', 'diww_favicon');
add_action('admin_head', 'diww_favicon');

// pulls in logo for wp admin
function my_login_logo() { ?>
  <style type="text/css">
      body.login div#login h1 a {
          	background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/assets/images/header-logo.png);
            background-size: 90%;
			width: auto;
			height: 75px;
			border: #dfdfdf 6px double;
			background-color: white;
			background-position: 50% 50%;
      }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// ENQUEUE CSS, LESS, & SCSS STYLESHEETS
function add_style_sheets() {
	if( !is_admin() ) {
		wp_enqueue_style( 'reset', get_template_directory_uri().'/style.css', 'screen'  );
		wp_enqueue_style( 'font-awesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css', 'screen');
		wp_enqueue_style( 'fancybox', get_template_directory_uri().'/assets/fancybox/jquery.fancybox.css', 'screen' );
		wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/style.less', 'screen' );
	}
}
add_action('wp_enqueue_scripts', 'add_style_sheets');



/**
 *
 * TAKE GLOBAL DESCRIPTION OUT OF HEADER.PHP AND GENERATE IT FROM A FUNCTION
 *
 */
function site_global_description()
{
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
	{
		echo " | $site_description";
	}
}


/**
 * REMOVE UNWANTED CAPITAL <P> TAGS
 */
remove_filter( 'the_content', 'capital_P_dangit' );
remove_filter( 'the_title', 'capital_P_dangit' );
remove_filter( 'comment_text', 'capital_P_dangit' );


/**
 * REGISTER NAV MENUS FOR HEADER FOOTER AND UTILITY
 */
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'themename' ),
	'footer' => __( 'Footer Menu', 'themename' ),
	'utility' => __( 'Utility Menu', 'themename' )
) );


/** 
 * DEFAULT COMMENTS & RSS LINKS IN HEAD
 */
add_theme_support( 'automatic-feed-links' );


/**
 * THEME SUPPORTS THUMBNAILS
 */
add_theme_support( 'post-thumbnails' );


/**
 *	ADD TINY IMAGE SIZE FOR ACF FIELDS, BETTER USABILITY
 */
add_image_size( 'mini-thumbnail', 50, 50 );


// custom post type


add_action( 'init', 'create_post_type' );
function create_post_type() {

	$args1 = array(
		'labels' => array(
			'name' => __( 'Projects' ),
			'singular_name' => __( 'Project' )
		),
		'public' => true,
		'exclude_from_search' => true,
		'menu_icon' => 'dashicons-admin-multisite',
		'publicly_queryable'  => true,
		'supports' => array( 'title', 'editor', 'thumbnail' )
	);
  	register_post_type( 'Projects', $args1);

  	flush_rewrite_rules();
}








