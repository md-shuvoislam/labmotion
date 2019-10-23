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

	<!-- Hero area -->
	<div class="hero-area" style="background-image: url('<?php the_field('slider_image'); ?>'); background-size: cover;background-position: center;height: 100vh;background-repeat: no-repeat;">
		
	</div>

	<div class="three-sixti-degree section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="hover-image">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hover-img.jpg" alt="" width="" height="" />
					</div>

					<div class="cricle cricle-1">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/markteting-icons.png" alt="" />
						<p>MARKETING</p>
					</div>

					<div class="cricle cricle-2">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/markteting-icons.png" alt="" />
						<p>MARKETING</p>
					</div>

					<div class="cricle cricle-3">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/markteting-icons.png" alt="" />
						<p>MARKETING</p>
					</div>

					<div class="cricle cricle-4">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/markteting-icons.png" alt="" />
						<p>MARKETING</p>
					</div>

					<div class="cricle cricle-5">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/markteting-icons.png" alt="" />
						<p>MARKETING</p>
					</div>

					<div class="cricle cricle-6">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/markteting-icons.png" alt="" />
						<p>MARKETING</p>
					</div>

					<div class="cricle cricle-7">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/markteting-icons.png" alt="" />
						<p>MARKETING</p>
					</div>

					<div class="cricle cricle-8">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/markteting-icons.png" alt="" />
						<p>MARKETING</p>
					</div>

					<div class="cricle cricle-9">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/markteting-icons.png" alt="" />
						<p>MARKETING</p>
					</div>

					<div class="cricle cricle-10">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/markteting-icons.png" alt="" />
						<p>MARKETING</p>
					</div>

					<div class="cricle cricle-11">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/markteting-icons.png" alt="" />
						<p>MARKETING</p>
					</div>

					<div class="cricle cricle-12">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/markteting-icons.png" alt="" />
						<p>MARKETING</p>
					</div>
					
				</div>
			</div>
			<div class="row text-brand-logo">
				<div class="col-md-4 text-right">
					<img src="<?php the_field('left_logo'); ?>" alt="" />
				</div>
				<div class="col-md-4 text-center">
					<img src="<?php the_field('center_logo'); ?>" alt="" />
				</div>
				<div class="col-md-4 text-left">
					<img src="<?php the_field('right_logo'); ?>" alt="" />
				</div>
			</div>

			<div class="row brand-text" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/brand-text-bg.png');">
				<div class="col-md-12 text-center">
					<p><?php the_field('cta'); ?></p>
				</div>
			</div>
		</div>
	</div>


	<div class="gallery-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section-title">
						<h2>PORTFÓLIO</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<?php echo do_shortcode('[modula id="73"]'); ?>
				</div>
			</div>
		</div>
	</div>
	

	<div class="video-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php the_field('video_link'); ?>
				</div>
			</div>
		</div>
	</div>
	

	<!-- brand area -->
	<div class="brand-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section-title">
						<h2>PARCEIROS</h2>
					</div>
				</div>
			</div>
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
	</div>
<?php get_footer(); ?>
