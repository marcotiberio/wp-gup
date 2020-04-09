<?php 
	/* Template Name: Test Latest Posts */ 
?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php wpb_postsbycategory() ?>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
