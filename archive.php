<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Commune_de_Remaufens
 */

get_header();
?>
<div class="header-img-600">
<?php 
	if (has_post_thumbnail( $post->ID ) ):
		the_post_thumbnail(  );
	else :		
	$args = array(
		'post_type' => 'attachment',
		'post_status' => 'any',
		'tax_query' => array(
			array(
				'taxonomy' => 'media_category', // your taxonomy
				'field' => 'tag_ID',
				'terms' => '2' // term id (id of the media category)
			)
		)
	);
	$the_query = new WP_Query($args);
	if ($the_query->have_posts()) { 
		$the_query->the_post();
		echo wp_get_attachment_image(get_the_ID(), 'homepageBanner-size');
	}
	wp_reset_postdata();
	endif;
?>
</div><!-- .entry-header -->
<main id="primary" class="site-main">
	<div class="container-l main-grid">
		<div>
		<h1 class="entry-title"><?php
			the_archive_title();?>
		</h1>
		<div class="actualites-content front-grid">
		<?php if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
		</div>
		<div>
		<?php
			get_sidebar();
		?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
