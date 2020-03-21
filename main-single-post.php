<?php
/*
 * Template Name: Main Article
 * Template Post Type: post, page, product
 */
  
 get_header();  ?>

<div class="wrap">
	
	<div id="event-hero">

    

			<p><?php the_field('credits'); ?></p>
			<p><?php the_field('article-text'); ?></p>

			<img src="<?php the_field('hero_image'); ?>" />

			<p><?php the_content(); ?></p>

		
	</div>
	
</div>

<?php get_footer(); ?>