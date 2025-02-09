<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Commune_de_Remaufens
 */

get_header();
?>
<?php

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

if ($the_query->have_posts()) { ?>
	<div class="swiffy-slider">
		<ul class="slider-container">
			<?php
			while ($the_query->have_posts()) {

				$the_query->the_post();
				echo '<li class="item">';
				echo wp_get_attachment_image(get_the_ID(), 'homepageBanner-size');
				echo '</li>';
			}
			?>
		</ul>
		<button type="button" class="slider-nav"></button>
		<button type="button" class="slider-nav slider-nav-next"></button>

	</div>

	<?php
}
wp_reset_postdata();
?>

<main id="primary" class="site-main">
	<div class="container-l main-grid">
		<div class="home-content">
			<div id="bienvenue">
				<div class="bienvenue-content">
					<?php
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'category_name' => 'bienvenue',
						'posts_per_page' => 1,
					); ?>
					<?php $arr_posts = new WP_Query($args); ?>
					<?php if ($arr_posts->have_posts()): ?>
						<?php while ($arr_posts->have_posts()):
							$arr_posts->the_post(); ?>
							<?php if (is_sticky()): ?>
								<!-- Code pour afficher l'article épinglé ici -->
								<?php get_template_part('template-parts/content', 'home'); ?>
							<?php endif; ?>
						<?php endwhile; ?>
						<?php rewind_posts(); // réinitialiser la liste des articles ?>
						<?php while ($arr_posts->have_posts()):
							$arr_posts->the_post(); ?>
							<?php if (!is_sticky()): ?>
								<!-- Code pour afficher les autres articles ici -->
								<?php get_template_part('template-parts/content', 'home'); ?>
							<?php endif; ?>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); // réinitialiser les données de la requête ?>
					<?php endif; ?>
				</div>
			</div>
			<div id="pilier-public">
				<h2>Pilier public</h2>
				<div class="pilier-public-content front-grid">
					<?php
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'category_name' => 'pilier-public',
						'posts_per_page' => 3,
					); ?>
					
					<?php $arr_posts = new WP_Query($args); ?>
					<?php if ($arr_posts->have_posts()): ?>
						<?php while ($arr_posts->have_posts()):
							$arr_posts->the_post(); ?>
							<?php if (is_sticky()): ?>
								<!-- Code pour afficher l'article épinglé ici -->
								<?php get_template_part('template-parts/content', 'home'); ?>
							<?php endif; ?>
						<?php endwhile; ?>
						<?php rewind_posts(); // réinitialiser la liste des articles ?>
						<?php while ($arr_posts->have_posts()):
							$arr_posts->the_post(); ?>
							<?php if (!is_sticky()): ?>
								<!-- Code pour afficher les autres articles ici -->
								<?php get_template_part('template-parts/content', 'home'); ?>
							<?php endif; ?>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); // réinitialiser les données de la requête ?>
					<?php endif; ?>

					<?php
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'category_name' => 'pilier-public',
					); ?>
					
					<?php $arr_posts = new WP_Query($args); ?>
					<?php if ($arr_posts->post_count > 3): ?>
						<!-- Code pour afficher le bouton ici -->
						<div class="text-center full-width">
							<a href="https://remaufens.alpettes.ch/categorie/pilier-public/" class="btn_outline">Tous les articles <img decoding="async" width="96" height="96" class="wp-image-73" style="width: 96px;" src="/wp-content/themes/remaufens/images/arrow-right-2.png" alt=""></a>
						</div>
						<?php wp_reset_postdata(); // réinitialiser les données de la requête ?>
					<?php endif; ?>
				</div>
			</div>
			<div id="actualites">
				<h2>Actualités</h2>
				<div class="actualites-content front-grid">
					<?php
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'category_name' => 'actualites',
						'posts_per_page' => 3,
					); ?>
					<?php $arr_posts = new WP_Query($args); ?>
					<?php if ($arr_posts->have_posts()): ?>
						<?php while ($arr_posts->have_posts()):
							$arr_posts->the_post(); ?>
							<?php if (is_sticky()): ?>
								<!-- Code pour afficher l'article épinglé ici -->
								<?php get_template_part('template-parts/content', 'home'); ?>
							<?php endif; ?>
						<?php endwhile; ?>
						<?php rewind_posts(); // réinitialiser la liste des articles ?>
						<?php while ($arr_posts->have_posts()):
							$arr_posts->the_post(); ?>
							<?php if (!is_sticky()): ?>
								<!-- Code pour afficher les autres articles ici -->
								<?php get_template_part('template-parts/content', 'home'); ?>
							<?php endif; ?>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); // réinitialiser les données de la requête ?>
					<?php endif; ?>

					<?php
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'category_name' => 'actualites',
					); ?>
					
					<?php $arr_posts = new WP_Query($args); ?>
					<?php if ($arr_posts->post_count > 3): ?>
						<!-- Code pour afficher le bouton ici -->
						<div class="text-center full-width">
							<a href="https://remaufens.alpettes.ch/categorie/actualites/" class="btn_outline">Tous les articles <img decoding="async" width="96" height="96" class="wp-image-73" style="width: 96px;" src="/wp-content/themes/remaufens/images/arrow-right-2.png" alt=""></a>
						</div>
						<?php wp_reset_postdata(); // réinitialiser les données de la requête ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div>
		<?php
			get_sidebar();
		?>
		</div>
	</div>
</main><!-- #main -->
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<?php
get_footer();