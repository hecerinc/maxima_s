<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

$_at = get_the_archive_title();
$_ad = get_the_archive_description();
$isgrid = true;
$_is_archive = true;

get_header(); 

	if ( have_posts() ) : 
		while ( have_posts() ) : the_post();
			/*
			 * Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'template-parts/content', 'grid' );

		endwhile;
?>
	</div>
	<div class="o-grid">
		<?php the_posts_navigation(); ?>
	<!-- </div> --> <!-- Closed in footer.php -->
	
<?php 
	else:
		get_template_part( 'template-parts/content', 'none' );

	endif; 

//get_sidebar();
get_footer();
