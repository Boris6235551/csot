<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package csot-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header">
		<div class="container-fluid header-menu">
			<div class="row">
				<div class="block-logo d-flex justify-content-start col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
					<a href="<?php get_template_directory();?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" class="logo" width="" height="" alt="logotip"></a>
				</div>
				<div class="justify-content-start col-0 col-sm-0 col-md-0 col-lg-10 col-xl-10 d-flex align-items-center">
					<nav id="site-navigation" class="main-navigation nav">
						<?php wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>	
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
		<div class="breadcrumb align-items-center">
			<?php
			if(function_exists('bcn_display'))
				{
				    bcn_display();
				}
			?>
		</div>
</header><!-- #masthead -->

	<!-- <div id="content" class="site-content"> -->
