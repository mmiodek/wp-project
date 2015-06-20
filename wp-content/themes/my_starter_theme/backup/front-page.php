<?php
/*
Template Name: Front-Page
 */
?>

<?php get_header(); ?>

<!-- ============== Slider ================= -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php

    $current_page = get_queried_object_id();
    $custom_fields = get_post_custom_keys($current_page);
    $custom_fields2 = get_post_custom($current_page);
 /* Create array with slider fields and values */

 


    $slider_fields = preg_grep("/^slider-box-title/", $custom_fields); 
    $slider_fields_length = count($slider_fields);
    $sliderData = array();
   	
  for ($x=1; $x<=$slider_fields_length; $x++) {
   		$sliderBoxTitle = get_post_meta($current_page, "slider-box-title" . $x, true);
   		$sliderBoxContent = get_post_meta($current_page, "slider-box-content" . $x, true);
   		$sliderImageId = get_post_meta($current_page,"slider-image". $x, true);
   		$sliderImage = wp_get_attachment_url($sliderImageId);
   		$sliderData["SBT" . $x] = $sliderBoxTitle;
   		$sliderData["SBC" . $x] = $sliderBoxContent;
   		$sliderData["SImg" . $x] = $sliderImage;

   	}

  /* Create array with boxes fields and values */

  $box_fields = preg_grep("/^box-title/", $custom_fields);
  $box_fields_length = count($box_fields);
  $boxData = array();

    for ($x=1; $x<=$box_fields_length; $x++) {
   		$BoxTitle = get_post_meta($current_page, "box-title" . $x, true);
   		$BoxContent = get_post_meta($current_page, "box-content" . $x, true);
   		$BoxImageId = get_post_meta($current_page,"icon". $x, true);
   		$BoxIcon = wp_get_attachment_url($BoxImageId);
   		$boxData["BT" . $x] = $BoxTitle;
   		$boxData["BC" . $x] = $BoxContent;
   		$boxData["BIcon" . $x] = $BoxIcon;

   	}

?>

	<section class="slider-container">
		<article id="slider_content1" class="slider_content slider_content_visible">
			<h3><?php echo $sliderData['SBT1']; ?></h3>
			<p><?php echo $sliderData['SBC1']; ?></p>
			<a class="button" href="some_page.html">Mehr lesen</a>
		</article>
		<article id="slider_content2" class="slider_content">
			<h3><?php echo $sliderData['SBT2']; ?></h3>
			<p><?php echo $sliderData['SBC2']; ?></p>
			<a class="button" href="some_page.html">Mehr lesen</a>
		</article>
		<article id="slider_content3" class="slider_content">
			<h3><?php echo $sliderData['SBT3']; ?></h3>
			<p><?php echo $sliderData['SBC3']; ?></p>
			<a class="button" href="some_page.html">Mehr lesen</a>
		</article>
		<section id="slides">
			<div class="slide-holder">
				<figure id="slide-1" class="slide visible-slide"><img src="<?php echo $sliderData['SImg1']; ?>"/></figure>
				<figure id="slide-2" class="slide"><img src="<?php echo $sliderData['SImg2']; ?>"/></figure>
				<figure id="slide-3" class="slide"><img src="<?php echo $sliderData['SImg3']; ?>"/></figure>
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
			<img src="<?php echo $boxData["BIcon1"]; ?>" alt="alt text">
			<h3><?php echo $boxData["BT1"]; ?></h3>
			<p><?php echo $boxData["BC1"]; ?></p>
		</article>
		<article>
			<img src="<?php echo $boxData["BIcon2"]; ?>" alt="alt text">
			<h3><?php echo $boxData["BT2"]; ?></h3>
			<p><?php echo $boxData["BC2"]; ?></p>
		</article>
		<article>
			<img src="<?php echo $boxData["BIcon3"]; ?>" alt="alt text">
			<h3><?php echo $boxData["BT3"]; ?></h3>
			<p><?php echo $boxData["BC3"]; ?></p>
		</article>
	</section><!--End of boxcontent-->

<!-- ============== Photo gallery ================= -->


	<section id="four_columns">
		<h2>Lorem ipsum</h2>
		<article class="image_item">
			<figure>
				<a href="img/pic1.jpg" rel="lightbox" title="Some Title"><span class="thumb-screen"></span><img src="img/pic1s.jpg" alt="alt text"></a>
				<figcaption><strong>Photo by: Some Name</strong>Als es die ersten Hügel des Kursivgebirges erklommen hatte</figcaption>
			</figure>
		</article>
		<article class="image_item">
			<figure>
				<a href="img/pic2.jpg" rel="lightbox" title="Some Title"><span class="thumb-screen"></span><img src="img/pic2s.jpg" alt="alt text"></a>
				<figcaption><strong>Photo by: Some Name</strong>warf es einen letzten Blick zurück auf die Skyline seiner Heimatstadt Buchstabhausen</figcaption>
			</figure>
		</article>
		<article class="image_item">
			<figure>
				<a href="img/pic3.jpg" rel="lightbox" title="Some Title"><span class="thumb-screen"></span><img src="img/pic3s.jpg" alt="alt text"></a>
				<figcaption><strong>Photo by: Some Name</strong>die Headline von Alphabetdorf und die Subline seiner eigenen Straße.</figcaption>
			</figure>
		</article>
		<article class="image_item">
			<figure>
				<a href="img/pic4.jpg" rel="lightbox" title="Some Title"><span class="thumb-screen"></span><img src="img/pic4s.jpg" alt="alt text"></a>
				<figcaption><strong>Photo by: Some Name</strong>Wehmütig lief ihm eine rhetorische Frage über die Wange. </figcaption>
			</figure>
		</article>
		
	</section><!-- End of four_columns -->

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>