<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Commune_de_Remaufens
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="footer-widgets container-l">
			<?php dynamic_sidebar( 'footer-1' ); ?>
			<?php dynamic_sidebar( 'footer-2' ); ?>
			<?php dynamic_sidebar( 'footer-3' ); ?>
		</div>
		<div class="site-info">
			<div class="container-l">
			© Commune de Remaufens | <img src="https://www.remaufens.ch/wp-content/themes/remaufens-2022/images/dg-logo.png" height="8" width="8" style="border-radius: 0" /> webdesign &amp; code : Didier Grand - <a href="https://www.digitalgarage.ch?ref=remaufens">digitalgarage.ch</a>
			</div>	
			<!-- <div class="footer-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'menu_class' => 'footer-menu' ) ); ?>
			</div> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
