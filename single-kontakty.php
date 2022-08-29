<?php
/*
Template Name: kontakty
 */
get_header('home');
?>
	<div class="container single-heading">

			<h3><?php single_post_title(); ?></h3>
			<?php the_content();?>

	</div>
<?php
get_footer();
?>
<?php
get_footer(mini);
?>