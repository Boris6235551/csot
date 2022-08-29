<?php
get_header('home');
?>
<div class="breadcrumb align-items-center">
	<?php
	if(function_exists('bcn_display'))
		{
		    bcn_display();
		}
	?>
</div>
<div class="container">
	<div class="row single-naruzhnoe-block">
		<div class="col-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
			<?php get_sidebar('left_sidebar'); ?>
		</div>
		<div class="col-0 col-sm-0 col-md-9 col-lg-9 col-xl-9">
			<div class="taxonomy-fenix">
				<h3><?php single_term_title(); ?></h3>
			</div>
			<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : echo (the_post()); ?>
						<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 taxonomy-card">
							<img src="<?php the_field('osnovnaya_fotografiya_svetilnika');?>" class="rounded mx-auto d-block" alt="<?php echo $image['alt']; ?>" />
							<a class="taxonomy-fenix-button" href="<?php echo get_permalink();?>"><div class="cards-button"><h6><?php the_title(); ?></h6></div></a>
							<div class="cards-text">
								<p>Мощность: <?php the_field('moshchnost_svetilnika');?> Вт <br> Световой поток: <?php the_field('svetovoj_potok_svetilnika');?> лм</p>
							</div>
						</div>	
				<?php endwhile; else : ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>
<?php
get_footer('mini');
?>