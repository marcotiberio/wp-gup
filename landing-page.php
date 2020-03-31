<?php 
	/* Template Name: Landing Page */ 
?>

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

    <section class="background_landing">
        <div class="embed--landing--container_desktop">
            <?php the_field('landing_video_desktop'); ?>
        </div>
        <div class="embed--landing--container_mobile">
            <?php the_field('landing_video_mobile'); ?>
        </div>
        <button class="button_landing">VISIT</button>
    </section>
