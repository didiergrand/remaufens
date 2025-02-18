<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Commune_de_Remaufens
 */

get_header();
?>
<main id="primary" class="site-main">
    <div class="container-l main-grid">
        <div>
            <article>
                <header class="entry-header">
                    <h1 class="entry-title">Oops! Cette page est introuvable.</h1>
                </header>

                <div class="entry-content">
                    <p>Il semble que rien n'ait été trouvé à cet endroit. Essayez peut-être l'un des liens ci-dessous ?</p>
                    <?php the_widget('WP_Widget_Recent_Posts'); ?>
                </div>
            </article>
        </div>
        <div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>

<?php
get_footer();
