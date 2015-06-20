<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="title">  
  <div class="container">
      <h1><?php the_title(); ?></h1>
  </div> 
</div>
<div id="content">
  <div class="container">	
<?php the_content(); ?>


<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
