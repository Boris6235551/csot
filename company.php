<?php
/*
Template Name: company
 */
get_header('home');
?>
	<div class="produkciya_block container">
		<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 produkciya_block_1" >
				  <img src="<?php echo get_template_directory_uri(); ?>/images/innovacii.jpg" alt="">
				  <a href="innovation" class=""><div class="card-body"><h5>Инновации</h5></div></a>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 produkciya_block_2" >
				  <img src="<?php echo get_template_directory_uri(); ?>/images/proizvodstvo.jpg" alt="">
				  <a href="#" class=""><div class="card-body"><h5>Производство</h5></div></a>
				</div>
		</div>
		<div class="row produkciya_row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 produkciya_block_3">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/ispytatelnaya-laboratoriya.jpg" alt="">
				  <a href="ispytatelnaya-laboratoriya" class=""><div class="card-body"><h5>Испытательная лаборатория</h5></div></a>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 produkciya_block_4">
				  <img src="<?php echo get_template_directory_uri(); ?>/images/galereya-proektov.jpg" alt="">
				  <a href="#" class=""><div class="card-body"><h5>Галерея проектов</h5></div></a>
				</div>
		</div>
	</div>
	<div class="karusel">
		<h3>СТАТЬИ И ПУБЛИКАЦИИ</h3>
	    <section class="autoplay slider">
	  	<?php
				$posts = get_posts( array(
					'numberposts' => 20,
					'category'    => 0,
					'orderby'     => 'date',
					'order'       => 'DESC',
					'include'     => array(),
					'exclude'     => array(),
					'meta_key'    => '',
					'meta_value'  =>'',
					'post_type'   => 'innovation',
					'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
				) );

				foreach( $posts as $post ){
					setup_postdata($post); 
		?>
				    <div> 
				    	<?php the_post_thumbnail(); ?>
				    	<a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>	    	
				    </div>
		<?php
				}
				wp_reset_postdata(); // сброс
		?>
	    </section>
	</div>
	<script type="text/javascript">
	    $(document).on('ready', function() {
	    	let n = 4;
	      	let mql = window.matchMedia('all and (max-width: 768px)');
			if (mql.matches) {
				n = 2;
			}
			else {n = 4}
	      $(".autoplay").slick({
			slidesToShow: n,
			slidesToScroll: 1,
			autoplay: false,
			autoplaySpeed: 2000,
	      });

	    });
	</script>
<?php
get_footer();
?>
<?php
get_footer(mini);
?>
