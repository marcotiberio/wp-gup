<?php
/*
 * Template Name: Main Article
 * Template Post Type: post, page, product
 */
  
 get_header();  ?>

<div class="wrap">
    
    <div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-custom', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
    
    <!-- CUSTOM POST LAYOUT -->
    <!-- CUSTOM POST LAYOUT -->
    <!-- CUSTOM POST LAYOUT -->

    <div id="post-title">
        <h2><?php the_field('post_title'); ?></h2>
    </div>

    <hr style="margin: 0 10%;">
    
    <div id="post-content">
        <div class="post-credits">
            <div>
                <h4>Artist</h4>
                <p><?php the_field('post_credits_artist'); ?></p>
            </div>
            <div>
                <h4>Artist Website</h4>
                <p><?php 
                    $link = get_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                </p>
            </div>
            <div>
                <h4>Place</h4>
                <p><?php the_field('post_credits_artist_place'); ?></p>
            </div>
        </div>

        <div class="post-text">
            <p><?php the_field('post_text'); ?></p>
        </div>
		
    </div>
	
</div>

<?php get_footer(); ?>