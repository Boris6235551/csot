<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package csot-theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="masthead" class="site-header">

		<div class="header-home2">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo_new.jpg" alt="">
			<nav id="site-navigation" class="nav_header_home">
				<?php wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->

		</div>

		<div class="menu-burger">
			<span></span>
		</div>
		<nav class="navbar-menu">
			<?php wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
		<script type="text/javascript">
			$("#primary-menu").addClass("nav nav-fill");
			let mql2 = window.matchMedia('all and (max-width: 768px)');
			if (mql2.matches) {
				$("#site-navigation").css({"display":"none"});
				$("#primary-menu a").css({"font-size":"5vw"});
			}
			else {
				$(".menu-burger").css({"display":"none"});
			} 
		</script>
	</header><!-- #masthead -->