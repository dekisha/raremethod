<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap-responsive.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/compass/css/screen.css" type="text/css" media="screen" />

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/raremethod.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.js"></script>
</head>

<body class="bg-dots-left" <?php body_class(); ?>>
	<div id="right-body" class="bg-dots-right">
<div id="page" class="hfeed site container-fluid">
	<header id="masthead" class="site-header" role="banner">
	<div class="header-wrapper row-fluid">
		<div class="left span9">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
			<address>
				<div class="address">	
					<span class="office">calgary office</span>
					<span class="pfa">p</span><span class="address-details">(403) 543-4500</span>
					<span class="pfa">f</span><span class="address-details">(403) 532-3004</span>
					<span class="pfa">a</span><span class="address-details">#500, 1812 4th Street SW Calgary, AB T2S 1W1</span>
				</div>
				<div class="address">	
					<span class="office">salt lake city office</span>
					<span class="pfa">p</span><span class="address-details">(403) 543-4500</span>
					<span class="pfa">f</span><span class="address-details">(403) 532-3004</span>
					<span class="pfa">a</span><span class="address-details">#500, 1812 4th Street SW Calgary, AB T2S 1W1</span>
				</div>
			</address>
		</div>
		<div class="right span3">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<!-- <h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3> -->
				<!-- <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a> -->
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'nav' ) ); ?>
			</nav><!-- #site-navigation -->
			<div id="search-bar"><?php get_search_form(); ?></div>
			<?php $header_image = get_header_image();
			if ( ! empty( $header_image ) ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $header_image ); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
			<?php endif; ?>
		</div>
	</div>
	</header><!-- #masthead -->

	<div id="main" class="wrapper row-fluid">