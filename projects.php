<?php
/*
Template Name: projects
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
<div class="container produkciya_block">
	<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 produkciya_block_1" >
			  <img class="" src="<?php echo get_template_directory_uri(); ?>/images/teplichnoe osveshchenie.jpg" alt="teplichnoe osveshchenie">
			  <a href="teplichnoe-osveshchenie" class=""><div class="card-body"><h5>Тепличное освещение</h5></div></a>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 produkciya_block_2" >
			  <img class="" src="<?php echo get_template_directory_uri(); ?>/images/naruzhnoe osveshchenie.jpg" alt="naruzhnoe osveshchenie">
			  <a href="naruzhnoe-osveshchenie" class=""><div class="card-body"><h5>Наружное освещение</h5></div></a>
			</div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 produkciya_block_3">
			  <img class="" src="<?php echo get_template_directory_uri(); ?>/images/vnutrennee osveshchenie.jpg" alt="vnutrennee osveshchenie">
			  <a href="platform/vnutrennee-osveshchenie/" class=""><div class="card-body"><h5>Внутреннее освещение</h5></div></a>
			</div>
	</div>
</div>						
<?php
get_footer();
?>
<?php
get_footer(mini);
?>