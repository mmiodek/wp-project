<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package My_starter_theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<title><?php wp_title( '' ); ?></title>

<!-- Load CSS files -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link href="<?php echo get_template_directory_uri(); ?>/layouts/lightbox.stylesheet.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


<!-- Load Goolge fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans|Baumans' rel='stylesheet' type='text/css'/>

<!-- include extern jQuery file but fall back to local file if extern one fails to load !-->
<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script type="text/javascript">window.jQuery || document.write('<script type="text\/javascript" src="<?php echo get_template_directory_uri(); ?>js\/jquery.min"><\/script>')</script>

<!-- external javascripts -->
<script src="js/modernizr.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>lightbox/js/lightbox.min.js"></script>
<!--<script src="js/jquery.slides.min.js"></script> -->

<!-- internal javascrips -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
<script src="http://isotope.metafizzy.co/isotope.pkgd.min.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="toggleMobile">
			<span class="menu1"></span>
			<span class="menu2"></span>
			<span class="menu3"></span>
		</div>

		<div id="mobileMenu">
			<ul>
				<li><a href="javascript:void(0)">Home</a></li>
				<li><a href="javascript:void(0)">Porfolio</a></li>
				<li><a href="javascript:void(0)">About</a></li>
			</ul>
		</div>

		<h1>Lingulo HTML5</h1>
		<p>A responsive website tutorial</p>
		<nav id="site-navigation" class="main-nav" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>
	</header>
