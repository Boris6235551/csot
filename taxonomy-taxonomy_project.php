<?php
get_header(home);
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<?php
					$query = new WP_Query( array( 'taxonomy_project' => 'vnutrennee-osveshchenie' ) );
						while ( $query->have_posts() ) {
						$query->the_post();
					?>
						<div class="single-archive col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
							<div class="archive-img"><?php the_post_thumbnail(); ?></div>
							<div class=""><h5><?php echo get_the_title(); ?></h5></div>
							<div class=""><?php the_excerpt(); ?></div>
						</div>
			<?php
}
?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
?>
<?php
get_footer(mini);
?>