<?php
/*
Template Name: Price List
*/
?>

<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="title">  
  <div class="container">
      <h1><?php the_title(); ?></h1>
  </div> 
</div>
<div id="content">
  <div class="container">	
    <table id="pricing" class="table table-striped">
      <tr class="transparent">
        <td></td>
        <td style="background: url(<?php echo get_template_directory_uri(); ?>/images/free_bg_img.png) center center no-repeat;">Free</td>
        <td style="background: url(<?php echo get_template_directory_uri(); ?>/images/essential_bg_img.png) center center no-repeat;">Essential</td>
        <td style="background: url(<?php echo get_template_directory_uri(); ?>/images/professional_bg_img.png) center center no-repeat;">Professional</td>
        <td style="background: url(<?php echo get_template_directory_uri(); ?>/images/agency_bg_img.png) center center no-repeat;">Agency</td>     
      </tr>
      <tr id="domains_no">
        <td class="right-aligned">No. of Domains</td>
        <td>5</td>
        <td>10</td>
        <td>25</td>
        <td>100</td>
      </tr>
      <tr id="price">
        <td class="right-aligned">Price per Month</td>
        <td>free</td>
        <td>$60</td>
        <td>$125</td>
        <td>$450</td>
      </tr>
      <tr>
        <td class="right-aligned"></td>
        <td><a href="#"><button class="btn btn-large btn-success">Sign Up</button></a></td>
        <td><a href="#"><button class="btn btn-large btn-info">Sign Up</button></a></td>
        <td><a href="#"><button class="btn btn-large btn-warning">Sign Up</button></a></td>
        <td><a href="#"><button class="btn btn-large btn-danger">Sign Up</button></a></td>
      </tr>
      <tr>
        <td class="right-aligned">HTTP Response</td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
      </tr>
      <tr>
        <td class="right-aligned">Robots.txt</td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
      </tr>
      <tr>
        <td class="right-aligned">www vs non-www</td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
      </tr>
      <tr>
        <td class="right-aligned">Malware</td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/cross_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
      </tr>
      <tr>
        <td class="right-aligned">Indexed Subdomains</td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/cross_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
      </tr>
      <tr>
        <td class="right-aligned">Domain Expiry</td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/cross_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
      </tr>
      <tr>
        <td colspan="5">&nbsp;</td>
      </tr>
      <tr>
        <td class="right-aligned">Multisource</td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/cross_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
      </tr>
      <tr>
        <td class="right-aligned">Organic vs Non-organic</td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/cross_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
      </tr>
      <tr>
        <td class="right-aligned">Engagement</td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/cross_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
      </tr>
      <tr>
        <td class="right-aligned">Load Time</td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/cross_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
      </tr>
      <tr>
        <td colspan="5">&nbsp;</td>
      </tr>
      <tr>
        <td class="right-aligned">Crawl Issues</td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/cross_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
      </tr>
      <tr>
        <td class="right-aligned">Webmaster Tools Messages</td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/cross_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
      </tr>
      <tr>
        <td class="right-aligned">Removed Visits</td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/cross_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
      </tr>
      <tr>
        <td class="right-aligned">Sitemaps Check ???</td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/cross_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
      </tr>
      <tr>
        <td colspan="5">&nbsp;</td>
      </tr>
      <tr>
        <td class="right-aligned">Client Management</td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/cross_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/cross_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
      </tr>
      <tr>
        <td class="right-aligned">Client Own Access</td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/cross_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/cross_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
      </tr>
      <tr>
        <td class="right-aligned">White Labeling</td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/cross_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/cross_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
        <td><img src="<?php echo get_template_directory_uri(); ?>/images/tick_small_icon.png" /></td>
      </tr>
    </table>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
