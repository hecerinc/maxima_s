<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */
$isgrid = true;
get_header(); ?>
	<?php 
		if(have_posts()): while(have_posts()): the_post();
			get_template_part('template-parts/content', 'grid');
		endwhile; endif;
	?>
	</div>
	<!-- Navigation -->
	<!-- TODO: Check that this works correctly -->
	<div class="o-grid">
		<?php posts_nav_link(); ?>

<?php get_footer(); ?>
