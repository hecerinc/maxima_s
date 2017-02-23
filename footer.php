<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
		</div> <!-- .o-grid -->
	</div> <!-- .o-wrapper -->
	<footer class='c-footer'>
		<div class='o-grid'>
			<div class='o-grid__col o-grid__col--full'>
				<div class='c-footer__top'>
					<div class="o-grid">

						<!-- Sidebar footer -->
						<?php dynamic_sidebar('sidebar-foot'); ?>

					</div>
				</div>
			</div>
			<div class='o-grid__col o-grid__col--full'>
				<div class='o-grid'>
					<div class='o-grid__col o-grid__col--4-4-s o-grid__col--2-4-m'>
						<div class='u-font-small c-footer__copyright'>&copy; 2017</div>
					</div>
					<div class='o-grid__col o-grid__col--4-4-s o-grid__col--2-4-m'>
						<?php wp_nav_menu([
							'menu' => 'Social Media',
							'menu_class' => 'c-social-icons o-plain-list',
							'container' => false,
							'fallback_cb' => false,
							'link_before' => '<span class="screen-reader-text">',
							'link_after' => '</span>'
						]); ?>
					</div>
				</div>
			</div><!-- o-grid__col full -->
		</div>
	</footer>
</div> <!-- End off-canvas-container -->


<?php wp_footer(); ?>

</body>
</html>
