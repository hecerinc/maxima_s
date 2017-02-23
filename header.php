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

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', '_s'); ?></a>

	<div class="js-off-canvas-container c-off-canvas-container">

		<header class='c-header'>

			<!-- Menu -->
			<?php get_template_part( 'template-parts/content-sidemenu'); ?>

			<div class='o-grid'>
				<div class='o-grid__col o-grid__col--full'>
					<div class='c-header__inner'>
						<div class='o-grid'>
							<div class='o-grid__col o-grid__col--1-4-s'>
								<label class='js-off-canvas-toggle c-off-canvas-toggle'>
									<span class='c-off-canvas-toggle__icon'></span>
								</label>
							</div>

							<div class='o-grid__col o-grid__col--2-4-s'>
								<a class='c-logo-link' href='<?= esc_url(home_url('/')) ?>'>Maggs</a>
							</div>

							<div class='o-grid__col o-grid__col--1-4-s'>
								<div class='u-text-right'>
									<a class="toggle-search-button js-search-toggle" href="#">
										<span class='c-header__icon' data-icon="ei-search" data-size="s"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</header>

		<!-- Search -->
		<div class='c-search js-search'>
			<div class='o-grid'>
				<div class='o-grid__col o-grid__col--3-4-m o-grid__col--center'>
					<form class='modal-search' method='get' action='http://maxima-wordpress.aspirethemes.com/'>
						<input class='c-search__input js-search-input' placeholder='type and hit enter' name='s' autofocus>
					</form>
				</div>
			</div>
			<div data-icon='ei-close' data-size='s' class='c-search__close js-search-close'></div>
		</div>

		<!-- Begin content -->
		<div class='o-wrapper' id='content'>
			<?php 
				global $_is_archive; 
				if(isset($_is_archive) && $_is_archive){
					global $_ad;
					global $_at;
					get_template_part('template-parts/archive-title');
				}
			?>
			<?php global $isgrid; ?>
			<div class='o-grid <?php if(isset($isgrid) && $isgrid){echo "js-grid";} ?>'>

