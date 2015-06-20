<!doctype html> 
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cufon-yui.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/Comfortaa_400-Comfortaa_700.font.js"></script>
    <script type="text/javascript">
	    Cufon.replace('h1', { 
            fontFamily: 'Comfortaa', 
            fontWeight: 'bold',
            textShadow: '1px -1px #2f4d5a'
          });
          Cufon.replace('h2', { 
            fontFamily: 'Comfortaa', 
            fontWeight: 'bold',
            textShadow: '-1px 1px white'
          });

          Cufon.replace('#sub1'); // Requires a selector engine for IE 6-7, see above
	  </script>

    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />

    <?php wp_enqueue_script("jquery"); ?>
    
    <?php wp_head(); ?>

       <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js" type="text/javascript"></script>
	<![endif]-->

  </head>
  <body>
    <div id="header">
      <div class="container">
        <a class="brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /></a>
          <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class'=> 'nav nav-pills') ); ?>  
      </div>
    </div>
 <!-- <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        <div class="nav-collapse collapse">
          <ul class="nav">

              

          </ul>
        </div>
      </div>
    </div>
  </div>-->
