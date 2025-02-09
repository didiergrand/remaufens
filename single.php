<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'post' );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Précédent:', 'remaufens' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Suivant:', 'remaufens' ) . '</span> <span class="nav-title">%title</span>',
				)
			);


		endwhile; // End of the loop.
		?>
		</div>
		<div>
		<?php
			get_sidebar();
		?>
		</div>
	</div>
</main><!-- #main -->

<?php
get_footer();
