<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package csot-theme
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="site-info container-fluid row">
			<div class="col-4 d-flex justify-content-center">
				<div class="footer_column1">
					<p class="">ПОИСК</p>
					<div class="row">
						 <?php get_search_form(); ?>	 
					</div>
					<div class="socseti row">
					<span>МЫ НА:</span>
					<?php echo do_shortcode( '[DISPLAY_ULTIMATE_SOCIAL_ICONS]' ); ?>
					</div>
				</div>
			</div>
			<div class="col-2 d-flex justify-content-center">
				<div class="footer_column2">
					<p>РАЗДЕЛЫ САЙТА</p>
					<p><a href="/kompaniya">Компания</a></p>
					<p><a href="/innovation">Инновации</a></p>
					<p><a href="/produkciya">Производство</a></p>
					<p><a href="/projects">Проекты</a></p>
					<p><a href="#">Испытательная лаборатория</a></p>
					<p><a href="/kontakty">Контакты</a></p>
				</div>
			</div>
			<div class="col-3 d-flex justify-content-center">
				<div class="footer_column3">
					<p>ДРУГИЕ ССЫЛКИ</p>
					<p><a href="<?php get_template_directory();?>/download_materials">Материалы для скачивания</a></p>
					<p><a href="#">Реквизиты предприятия</a></p>
					<p><a href="#">Гарантийное обслуживание</a></p>
					<p><a href="#">Послегарантийное обслуживание</a></p>
					<p><a href="#">Аренда</a></p>
					<p><a href="#">Вакансии</a></p>
					<p><a href="#">Коррупция</a></p>
				</div>
			</div>
			<div class="col-3 d-flex justify-content-center">
				<div class="footer_column4">
					<p>&copy 2009-2019 Государственное предприятие "ЦСОТ НАН Беларуси</p>
					<p>Логойский тракт, 20, г.Минск<br>Республика Беларусь</p>
					<p>Тел.: +375 (17) 357 13 35<br>Тел./Факс: +375 (17) 356 27 56</p>
					<p><a href="<?php get_template_directory();?>/map" target="_blank">Карта проезда</a><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i></p>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<?php wp_footer(); ?>
</body>
</html>
