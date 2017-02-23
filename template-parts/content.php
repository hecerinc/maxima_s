<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(['c-post', 'entry']); ?>>
	<div class="c-post__head">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="c-post__title">', '</h1>' );
		else:
			the_title( '<h2 class="c-post__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : 
			_s_posted_on(); 
		?>
			<span class="c-post__cats">
				<?php _s_entry_cats(); ?>
			</span><!-- .c-post__meta -->
		<?php endif; ?>
	</div><!-- .c-post__head -->


	<!-- TODO: check this part -->
	<div class="c-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', '_s' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .c-content -->


	<!-- Tags & Share -->
	<div class="o-grid">
		<div class="o-grid__col o-grid__col--4-4-s o-grid__col--3-4-m">
			<div class="c-tags">
				<?php _s_footer_cats(); ?>
			</div>
		</div>
		<!-- Social Media -->
		<!-- TODO: Change this to be dynamic -->
		<div class="o-grid__col o-grid__col--4-4-s o-grid__col--1-4-m">
			<ul class='c-share o-plain-list'>
				<li class='c-share__item'>
					<a class='c-share__link' title='Share on Twitter' href='https://twitter.com/share?text=<?= urlencode(get_the_title()) ?>&amp;url=<?php the_permalink(); ?>' onclick="window.open(this.href, 'twitter-share', 'width=550, height=235'); return false;">
						<div data-icon='ei-sc-twitter' data-size='s' class='c-share__icon c-share__icon--twitter'></div>
					</a>
				</li>

				<li class='c-share__item'>
					<a class='c-share__link' title='Share on Facebook' href='https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(get_the_permalink()); ?>' onclick="window.open(this.href, 'facebook-share', 'width=580, height=296'); return false;">
						<div data-icon='ei-sc-facebook' data-size='s' class='c-share__icon c-share__icon--facebook'></div>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<hr>

	<!-- Author -->
	<div class="c-author">
		<?= get_avatar( get_the_author_meta( 'ID' ), 96, "", get_the_author_meta('user_nicename'), ['class' => 'c-author__img']); ?>
		<div class="c-author__body">
			<h3 class="c-author__name">
				<?php the_author_posts_link(); ?>
			</h3>
			<p class="c-author__description">
				<?php the_author_meta('description'); ?>
				<!-- <br> -->
				<!-- <a href="http://aspirethemes.com">http://aspirethemes.com</a> -->
			</p>
		</div>
	</div>

	<!-- Navigation -->
	<?php 
		the_post_navigation([
			'prev_text' => '<span class="meta-nav" aria-hidden="true"> <span class="pagination__icon" data-icon="ei-chevron-left" data-size="s"> </span> <span class="pagination__text">Previous</span> </span> <span class="screen-reader-text">Previous post:</span> <span class="post-title">%title</span>',
			'next_text' => '<span class="meta-nav" aria-hidden="true"><span class="meta-nav" aria-hidden="true"> <span class="pagination__text">Next</span> <span class="pagination__icon" data-icon="ei-chevron-right" data-size="s"> </span> </span> <span class="screen-reader-text">Next post:</span> <span class="post-title">%title</span>'
		]);
	
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

	?>
	
	<footer class="entry-footer">
		<?php _s_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
