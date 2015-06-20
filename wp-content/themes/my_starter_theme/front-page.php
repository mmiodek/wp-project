<?php
/*
Template Name: Front-Page
 */
?>

<?php get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php
function customFieldGen($field_name, $index) {
echo types_render_field("$field_name", array("index"=>"$index", "output"=>"raw"));
}

// check if the flexible content field has rows of data


?>

<!-- ============== Slider ================= -->
	<section class="slider-container">
		<article id="slider_content1" class="slider_content slider_content_visible">
			<h3><?php customFieldGen("slider-box-title",0); ?></h3>
			<p><?php customFieldGen("slider-box-content",0); ?></p>
			<a class="button" href="some_page.html">Mehr lesen</a>
		</article>
		<article id="slider_content2" class="slider_content">
			<h3><?php customFieldGen("slider-box-title",1); ?></h3>
			<p><?php customFieldGen("slider-box-content",1); ?></p>
			<a class="button" href="some_page.html">Mehr lesen</a>
		</article>
		<article id="slider_content3" class="slider_content">
			<h3><?php customFieldGen("slider-box-title",2); ?></h3>
			<p><?php customFieldGen("slider-box-content",2);?></p>
			<a class="button" href="some_page.html">Mehr lesen</a>
		</article>
		<section id="slides">
			<div class="slide-holder">
				<figure id="slide-1" class="slide visible-slide"><img src="<?php customFieldGen("slider-image",0); ?>"/></figure>
				<figure id="slide-2" class="slide"><img src="<?php customFieldGen("slider-image",1); ?>"/></figure>
				<figure id="slide-3" class="slide"><img src="<?php customFieldGen("slider-image",2); ?>"/></figure>
			</div>
		</section>
		<nav class="slider-nav">
    		<a class="current-slider-nav" href="#slide-1">Slide 1</a>
    		<a href="#slide-2">Slide 2</a> 
    		<a href="#slide-3">Slide 3</a> 
  		</nav>
	</section> <!--End of container-->


<!-- ============== Spacer ================= -->

	<section class="spacer2">
		<p class="flex-element">Lorem ipsum dolor sit amet, consectetuer adipiscing elit?</p>
		<div class="search-flex">
			<form action="#">
				<input type="text" name="sitesearch" value="Enter a word..."/>
				<input type="submit" name="start_search" class="button" value="Search"/>
			</form>
		</div>
	</section>
 <!--End of spacer-->

 <!-- ============== 3 Boxes ================= -->

	<section id="boxcontent">
		<article>
			<img src="<?php customFieldGen("icon",0) ?>" alt="alt text">
			<h3><?php customFieldGen("box-title",0); ?></h3>
			<p><?php customFieldGen("box-content",0) ; ?></p>
		</article>
		<article>
			<img src="<?php customFieldGen("icon",1) ?>" alt="alt text">
			<h3><?php customFieldGen("box-title",1); ?></h3>
			<p><?php customFieldGen("box-content",1) ; ?></p>
		</article>
		<article>
			<img src="<?php customFieldGen("icon",2) ?>" alt="alt text">
			<h3><?php customFieldGen("box-title",2); ?></h3>
			<p><?php customFieldGen("box-content",2) ; ?></p>
		</article>
	</section><!--End of boxcontent-->

<!-- ============== Photo gallery ================= -->
	<section id="four_columns">
		<h2>Lorem ipsum</h2>
		<?php if( have_rows('gallery') ):

		     // loop through the rows of data
		    while ( have_rows('gallery') ) : the_row();?>
		    	<article class="image_item">
		    		<figure>
		    			<?php 
			        		$GalleryImg = get_sub_field('gallery-img');
			        		$GalleryImgCap = get_sub_field('gallery-img-cap');
			        		$GalleryContent = get_sub_field('gallery-content');
		        	 	?>
		    			<a href="<?php echo $GalleryImg; ?>" rel="lightbox" title="Some Title"><span class="thumb-screen"></span><img src="<?php echo $GalleryImg; ?>" alt="alt text"></a>
						<figcaption><strong><?php echo $GalleryImgCap; ?></strong><?php echo $GalleryContent; ?></figcaption>
		     
		        	 </figure>
		        </article>

			<?php
		    endwhile;

		else :

		    // no layouts found

		endif; ?>
	</section><!-- End of four_columns -->

<!-- ============== 2 columns with icons ================= -->

	<section id="text_columns">
		<article class="column1">
			<h2>Dolor sit amet</h2>
			<p>Unterwegs traf es eine Copy. Die Copy warnte das Blindtextchen, da, wo sie herkäme wäre sie zigmal umgeschrieben worden und alles, was von ihrem Ursprung noch übrig wäre, sei das Wort "und" und das Blindtextchen solle umkehren und wieder in sein eigenes, sicheres Land zurückkehren.</p>
			<p>Doch alles Gutzureden konnte es nicht überzeugen und so dauerte es nicht lange, bis ihm ein paar heimtückische Werbetexter auflauerten, es mit Longe und Parole betrunken machten und es dann in ihre Agentur schleppten, wo sie es für ihre Projekte wieder und wieder mißbrauchten.</p>
		</article>
		<section class="column2">
			<article class="row">
				<img src="<?php echo get_template_directory_uri() ?>/img/icon4.png" alt="Some alt text" width="80" class="rocket">
				<p>Und wenn es nicht umgeschrieben wurde, dann benutzen Sie es immernoch.</p>
			</article>
			<article class="row">
				<img src="<?php echo get_template_directory_uri() ?>/img/icon5.png" alt="Some alt text" width="80" class="clock">
				<p>Doch alles Gutzureden konnte es nicht überzeugen und so dauerte es nicht.</p>
			</article>
		</section>
	</section><!--End of text_columns-->

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>