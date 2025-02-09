<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Commune_de_Remaufens
 */

?>

<aside id="secondary" class="widget-area container-l">

	<?php dynamic_sidebar( 'horaires-adresse' ); ?>
	<div id="quicklinks">
	<?php dynamic_sidebar('liens-rapides'); ?>
	</div>
	<div id="remaufens-info">
	<?php dynamic_sidebar('remaufens-info'); ?>
	</div>
	<div id="remaufens-sidebar">
	<?php dynamic_sidebar('remaufens-sidebar'); ?>
	</div>

</aside><!-- #secondary -->
