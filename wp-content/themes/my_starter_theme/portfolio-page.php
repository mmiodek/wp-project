<?php
/*
Template Name: Portfolio
*/
?>

<?php
/* input variables */
$list_of_tags = [];

?>

<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<?php while ( have_posts() ) : the_post(); ?>
				<header class="entry-header">
					<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
				</header><!-- entry-header -->

				<?php if( have_rows('portfolio-element') ):
			    while ( have_rows('portfolio-element') ) : the_row();
				    $tags = get_sub_field('tags');
	        		for ($x=0; $x<count($tags); $x++){
	        			$tag = $tags[$x][tag];
	        			array_push($list_of_tags,$tag);
	        		};
						?>
					<?php endwhile; else : ?>
				<?php endif; ?>

				<nav id="filters">
					<?php 
					$unique_list_of_tags = array_unique($list_of_tags);
					sort($unique_list_of_tags);
					$tags_count = count($unique_list_of_tags);
					?>
					<ul>
						<li data-filter="*"><span>All</span></li>
						<?php for ($x=0; $x<$tags_count;$x++){
							?>
						<li data-filter=".<?php echo $unique_list_of_tags[$x]?>"><span><?php echo $unique_list_of_tags[$x] ?></span></li>
						<?php }; ?>
					</ul>
				</nav>				

				<article class="portfolio-holder">

			
					<?php if( have_rows('portfolio-element') ):

				     // loop through the rows of data
					    while ( have_rows('portfolio-element') ) : the_row();
				    			
		    				$tags = get_sub_field('tags');
		    				$subtags = [];
		    				
		    				for ($x=0; $x<count($tags); $x++){
		        			$subtag = $tags[$x][tag];
		        			array_push($subtags,$subtag);
		        		};

		        		$subtags_string = implode(' ', $subtags);

		        		$picture = get_sub_field('picture');
		        		$title = get_sub_field('title');
		        		$description = get_sub_field('description');
		        		
		        		$tags = get_sub_field('tags');
		        		

			        	 	
					    ?>
					    
							<a href="#" data-tags="<?php echo $subtags_string ?>" class="portfolio-item-wrapper <?php echo $subtags_string?>">
				    		<figure class="portfolio-item">

			        	 	<img class="portfolio-img"src="<?php echo $picture; ?>">
			        	 	<figcaption class="portfolio-caption">
			        	 		<h4><?php echo $title; ?></h4>
			        	 		<p><?php echo $description; ?></p>
			        	 	</figcaption>
			        	 	<div class="slide-up-cover"></div>
				        </figure>
				      </a>
				     		    
						<?php 
							endwhile;
						 else : ?>
					
					 <?php endif; ?>				
	
				</article>


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>