<?php
/*
Template Name: map
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
		<div>
		<?php echo do_shortcode('[yamap center="53.9460,27.6179" height="95vh" zoom="17" type="yandex#map" controls="typeSelector;zoomControl"][yaplacemark coord="53.9460,27.6179" icon="islands#redIcon" color="red" name="Placemark"][/yamap]'); 
		?>
		</div>
	</header>
</body>
</html>