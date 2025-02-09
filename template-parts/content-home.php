<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Commune_de_Remaufens
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="content">
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h3 class="entry-title">', '</h3>' );
			else :
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
		<?php
		the_content( esc_html__( 'Continuer la lecture', 'remaufens' ) );

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'remaufens' ),
				'after'  => '</div>',
			)
		);
		?>
		</div><!-- .entry-content -->

	</div>
</article><!-- #post-<?php the_ID(); ?> -->