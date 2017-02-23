<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header(); ?>
	<div class="o-grid__col o-grid__col--3-4-m o-grid__col--center">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			// Comments moved to content.php
			
		endwhile; // End of the loop.
		?>
	</div><!-- #primary -->
<?php
//get_sidebar();
get_footer();
