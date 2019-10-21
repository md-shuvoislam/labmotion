<?php
/**
 * Template Name: Home
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header(); ?>
	
	<div class="hero-area" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/unnamed-file.jpg'); background-size: cover;background-position: center; height: 100vh">
		
	</div>

	<div class="container">
		<div class="row case-single-bottom">
			<div class="col-lg-12 col-md-12 case-single-left">
				<?php 
					$images = get_field('brand_gallery');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)

					if( $images ): ?>
					    <ul>
					        <?php foreach( $images as $image ): ?>
					            <img src="<?php echo $image; ?>" alt="">
					        <?php endforeach; ?>
					 	</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
