<?php
/**
 * Template part for displaying page content in grid
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>
<div <?php post_class(['js-grid__col', 'o-grid__col', 'o-grid__col--2-4-m', 'o-grid__col--1-3-l']) ?>>
	<div class="c-post-card">
		<?php if(has_post_thumbnail()): ?>
			<a href="<?php the_permalink(); ?>" class="c-post-card__image-link">
				<?php the_post_thumbnail('post-thumbnail', ['class' => 'js-fadein c-post-card__image']) ?>
				<span class="c-post-card__featured-icon" data-icon='ei-star' data-size='s'></span>
			</a>
		<?php endif; ?>
		<a href="<?php the_permalink(); ?>" class="c-post-card__info <?php if(!has_post_thumbnail()){ echo "c-post-card__info--no-image";} ?>">
			<?php the_title( '<h3 class="c-post-card__title">', '</h3>' ); ?>
			<p class="c-post-card__excerpt u-font-small"><?= get_the_excerpt(); ?></p>
			<?php 
				$time_string = '<time class="c-post-card__date" datetime="%1$s">%2$s</time>';
				$time_string = sprintf( $time_string,
					esc_attr( get_the_date( 'c' ) ),
					esc_html( get_the_date() ),
					esc_attr( get_the_modified_date( 'c' ) ),
					esc_html( get_the_modified_date() )
				);
				echo $time_string;
			?>
		</a>
	</div>
</div>
