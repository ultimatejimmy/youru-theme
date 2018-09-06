<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gutenbergtheme
 */

?>

	<footer id="colophon" class="site-footer">
		<nav id="footer-navigation" class="main-navigation">
			<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'footer-menu',
					) );
				?>
		</nav>
		<div class="shapes">


			<div class="header__bg__orange"></div>
			<div class="header__bg__gray">

				<?php the_custom_logo(); ?>
			</div>

		</div>
		<div class="site-info">
			<div class="footer-info">
				<?php dynamic_sidebar( 'footer' ); ?>
			</div>
		</div>
		<!-- .site-info -->
	</footer>
	<!-- #colophon -->
	</div>
	<!-- #page -->

	<?php wp_footer(); ?>

		</body>

		</html>
