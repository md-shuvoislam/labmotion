<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-6">

				<div class="site-info">
					<p>R.Alverenga, 700 <br> Butantã, São Paulo-SP</p>
				</div><!-- .site-info -->

			</div><!--col end -->

			<div class="col-md-3 text-right">
				<div class="site-addresses">
					<h4>FALE COM A GENTE</h4>
					<p>contato@labmotion.com.br</p>
					<p>55112892.6734</p>
				</div><!-- .site-info -->
			</div><!--col end -->

			<div class="col-md-3 text-right">
				<ul class="footer-social">
					<li><a href=""><i class="fa fa-instagram"></i></a></li>
					<li><a href=""><i class="fa fa-vimeo"></i></a></li>
					<li><a href=""><i class="fa fa-facebook"></i></a></li>
				</ul>
			</div>
			

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>