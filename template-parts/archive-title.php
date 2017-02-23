<?php
/**
 * Template part for displaying archive page title
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

global $_at;
global $_ad;

?>
<!-- Title -->
<div class='o-grid'>
	<div class='o-grid__col o-grid__col--full'>
		<div class='c-archive'>
			<div class='o-grid'>
				<div class='o-grid__col o-grid__col--2-4-m o-grid__col--center'>
					<h4 class="c-archive__name"><?= $_at ?></h4>
					<p class="c-archive__description"><?= $_ad ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
