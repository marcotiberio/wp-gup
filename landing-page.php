<?php 
	/* Template Name: Landing Page */ 
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
