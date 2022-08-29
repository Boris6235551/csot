<?php
/*
Template Name: produkciya-teplichnoe
 */
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
			<?php $terms = get_terms( array(
										'taxonomy' => 'taxonomy_teplichnoe', 
										'orderby' => 'description'));
			foreach( $terms as $term ) {
			?>
			<div class="taxonomy-fenix">
				<h3><?php echo $term->name; ?></h3>
			</div>
			<div class="row taxonomy-block">
				<?php $args = array(
					'post_type' => 'teplichnoe',
					'posts_per_page' => 20,
					'taxonomy_teplichnoe' => $term->name,
					);
					$query = new WP_Query( $args );
					while ( $query->have_posts() ) {
					$query->the_post();
				?>
						<div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 taxonomy-card">
							<img src="<?php the_field('osnovnaya_fotografiya_svetilnika');?>" class="rounded mx-auto d-block" alt="<?php echo $image['alt']; ?>" />
							<a class="taxonomy-fenix-button" href="<?php echo get_permalink();?>"><div class="cards-button"><h6><?php the_title(); ?></h6></div></a>
							<div class="cards-text">
								<p>Мощность: <?php the_field('moshchnost_svetilnika');?> Вт <br> Световой поток: <?php the_field('svetovoj_potok_svetilnika');?> лм</p>
							</div>
						</div>	
				<?php
					}
						wp_reset_postdata();
				?>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php
get_footer();
?>
<?php
get_footer('mini');
?>