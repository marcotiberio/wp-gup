<?php 
	/* Template Name: Test Latest Posts */ 
?>

<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php $catquery = new WP_Query( 'cat=7&posts_per_page=5' ); ?>
		<ul>
		<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
		<li><h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<ul><li><?php the_content(); ?></li>
		</ul>
		</li>
		<?php endwhile; ?> 
		</ul>
		<?php wp_reset_postdata(); ?>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
