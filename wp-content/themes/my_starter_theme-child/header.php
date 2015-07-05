<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package My_starter_theme
 */
?><!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<title><?php wp_title( '' ); ?></title>



<!-- Load Goolge fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans|Baumans' rel='stylesheet' type='text/css'/>

<!-- include extern jQuery file but fall back to local file if extern one fails to load !-->
<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script type="text/javascript">window.jQuery || document.write('<script type="text\/javascript" src="<?php echo get_template_directory_uri(); ?>js\/jquery.min"><\/script>')</script>

<!-- external javascripts -->


<?php wp_head(); ?>
</head>
<base href="/">
<body  ng-app="app">
	<header>

		<h1><a href="#/">Lingulo HTML5<a/></h1>
		<p>A responsive website tutorial</p>
		<nav id="site-navigation" class="main-nav" role="navigation">
			<div class="menu">
				<ul ng-controller="MenuController">
					<li ng-repeat="nav in menu"><a href="#/{{nav.title}}">{{nav.title}}</a></li>
				</ul>
			</div>
		</nav>
	</header>
