<?php 
	/* Template Name: Page Footer */ 
?>

<?php get_header(); ?>

	<div id="primary_page-footer" class="content-area_page-footer">
		<main id="main_page-footer" class="site-main_page-footer">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
