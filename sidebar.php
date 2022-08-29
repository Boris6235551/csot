<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package csot-theme
 */

if ( ! is_active_sidebar('left_sidebar') ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
		<?php dynamic_sidebar('left_sidebar'); ?>
	<div id="main-nav" class="left_menu_sidebar">
		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-2',
				'menu_id'        => 'sidebar-menu',
				'menu'           => 'Левое меню',
			) );
		?>
	</div>
</aside><!-- #secondary -->
