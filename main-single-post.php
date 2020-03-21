<?php
/*
 * Template Name: Main Article
 * Template Post Type: post, page, product
 */
  
 get_header();  ?>

<div class="wrap">
    
    <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php the_content(); ?>
		</main>
	</div>
    
    <div id="post-content">

        <div><p><?php the_field('credits'); ?></p></div>
        <div><p><?php the_field('article_text'); ?></p></div>
		
	</div>
	
</div>

<?php get_footer(); ?>