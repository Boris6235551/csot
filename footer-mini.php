<?php
/**
 * The template for displaying the footer-mini
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package csot-theme
 */

?>
		<script type="text/javascript">
			$("#primary-menu").addClass("nav nav-fill");
			let mql3 = window.matchMedia('all and (max-width: 768px)');
			if (mql3.matches) {
				$(".breadcrumb").css({"display":"none"});
				$(".single-heading").css({"margin-top":"10%"});
			}
		</script>
	<footer id="colophon-mini" class="site-footer">
			<div class="container-fluid">
				<div class="footer_column4">
					<div class="">&copy 2009-2019 Государственное предприятие "ЦСОТ НАН Беларуси</div>
					<div class="">Логойский тракт, 20, г.Минск<br>Республика Беларусь</div>
					<div class="">Тел.: +375 (17) 357 13 35<br>Тел./Факс: +375 (17) 356 27 56</div>
					<p><a href="<?php get_template_directory();?>/map" target="_blank">Карта проезда</a><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i></p>
				</div>
			</div>
	</footer>
</body>
</html>
