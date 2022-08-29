<?php
get_header('home');
?>
<div class="breadcrumb">
	<div class="container">
		<?php
		if(function_exists('bcn_display'))
			{
			    bcn_display();
			}
		?>
	</div>
</div>
<div class="container">
	<div class=" single-naruzhnoe-block row">
		<div class="col-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
			<?php get_sidebar('left_sidebar'); ?>
		</div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
			<div class="">
				<div class="row second-naruzhnoe-block ">
					<div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
						<div> 
							<div class="osnovnaya-fotografiya-svetilnika"> <!-- вывод основной фотографии товара --> 
								<img src="<?php the_field('osnovnaya_fotografiya_svetilnika'); ?>" alt="<?php echo $image['alt']; ?>" />
							</div>	
							<div>
								<?php the_field('galereya'); ?>
							</div>
						</div>
					</div>
					<div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7">
						<div class="nazvanie-tovara"><?php the_field('nazvanie_tovara'); ?></div>
						<div class="kratkoe-opisanie-tovara"><?php the_field('kratkoe_opisanie_tovara'); ?></div>
						<div class="naznachenie-tovara"><?php the_field('naznachenie_tovara'); ?></div>
					</div>
				</div>
				<div class="container">
					<div class="three-buttons row">
						<button  class="col-4 col-sm-3 col-md-3 col-lg-3 col-xl-3 button-opisanie">Описание</button>
						<button  class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 button-tekhnicheskie-harakteristiki">ТЕХНИЧЕСКИЕ ХАРАКТЕРИСТИКИ</button>
						<button class="col-2 col-sm-3 col-md-3 col-lg-3 col-xl-3 button-pdf">PDF</button>
					</div>
					<div class="tekhnicheskie-harakteristiki">
						<div class="dimensions">
							<span>Габаритные размеры</span>
						</div>
						<div class="d-flex flex-column technical_parameters">
							<center><img src="<?php the_field('foto_gabaritov_izdeliya_1'); ?>" width="300" height="200" alt="" /></center>
							<center class="foto_2"><img src="<?php the_field('foto_gabaritov_izdeliya_2'); ?>" width="300" height="200" alt="" /></center>
							<center class="foto_3"><img src="<?php the_field('foto_gabaritov_izdeliya_3'); ?>" width="300" height="200" alt="" /></center>
							<center class="foto_4"><img src="<?php the_field('foto_gabaritov_izdeliya_4'); ?>" width="300" height="200" alt="" /></center>
							<center class="foto_5"><img src="<?php the_field('foto_gabaritov_izdeliya_5'); ?>" width="300" height="200" alt="" /></center>
						</div>
						<div class="technical_specifications">
							<span>Технические параметры</span>
						</div>
						<div class="table_scroll">
							<?php the_field('tablica_tekhnicheskih_parametrov'); ?>
						</div>
					</div>
					<div class="opisanie">
						<p><?php the_field('opisanie_tovara'); ?></p>
					</div>
					<div class="row d-flex opisanie_pdf">
						<a href="<?php the_field('pdf1'); ?>" class="pdf_1 col-3 col-sm-2 col-md-2 col-lg-2 col-xl-2" ><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i><br><?php the_field('description_pdf1'); ?></a>
						<a href="<?php the_field('pdf2'); ?>" class="pdf_2 col-3 col-sm-2 col-md-2 col-lg-2 col-xl-2" ><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i><br>PDF2</a>
						<a href="<?php the_field('pdf3'); ?>" class="pdf_3 col-3 col-sm-2 col-md-2 col-lg-2 col-xl-2" ><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i><br>PDF3</a>
						<a href="<?php the_field('pdf4'); ?>" class="pdf_4 col-3 col-sm-2 col-md-2 col-lg-2 col-xl-2" ><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i><br>PDF4</a>
						<a href="<?php the_field('pdf5'); ?>" class="pdf_5 col-3 col-sm-2 col-md-2 col-lg-2 col-xl-2" ><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i><br>PDF5</a>
						<a href="<?php the_field('pdf6'); ?>" class="pdf_6 col-3 col-sm-2 col-md-2 col-lg-2 col-xl-2" ><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i><br>PDF1</a>
						<a href="<?php the_field('pdf7'); ?>" class="pdf_7 col-3 col-sm-2 col-md-2 col-lg-2 col-xl-2" ><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i><br>PDF2</a>
						<a href="<?php the_field('pdf8'); ?>" class="pdf_8 col-3 col-sm-2 col-md-2 col-lg-2 col-xl-2" ><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i><br>PDF3</a>
						<a href="<?php the_field('pdf9'); ?>" class="pdf_9 col-3 col-sm-2 col-md-2 col-lg-2 col-xl-2" ><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i><br>PDF4</a>
						<a href="<?php the_field('pdf10'); ?>" class="pdf_10 col-3 col-sm-2 col-md-2 col-lg-2 col-xl-2" ><i class="fa fa-file-pdf-o fa-3x" aria-hidden="true"></i><br>PDF5</a>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php
get_footer();
?>
<?php
get_footer(mini);
?>
