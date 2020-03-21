<?php
/*
 * Template Name: Main Article
 * Template Post Type: post, page, product
 */
  
 get_header();  ?>

<div class="wrap">
    
    <img src="<?php the_field('hero_image'); ?>" />
    
    <div id="post-content">

        <div><p><?php the_field('credits'); ?></p></div>
        <div><p><?php the_field('article_text'); ?></p></div>
		
	</div>
	
</div>

<?php get_footer(); ?>