<?php 
	/* Template Name: Test Latest Posts */ 
?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php 
			// the query
			$the_query = new WP_Query( array(
				'category_name' => 'events',
				'posts_per_page' => 5,
			)); 
			?>

			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

				<?php the_title(); ?>
				<?php the_excerpt(); ?>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>

			<?php else : ?>
			<p><?php __('No Events'); ?></p>
			<?php endif; ?>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
