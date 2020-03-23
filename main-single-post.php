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
                <?php 
                $link = get_field('link');
                if( $link ): ?>
                    <a class="button" href="<?php echo esc_url( $link ); ?>">Continue Reading</a>
                <?php endif; ?>
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

<?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {
echo 'Related Posts';
$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>5,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args);
if( $my_query->have_posts() ) {
while ($my_query->have_posts()) : $my_query->the_post(); ?>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
 
<?php
endwhile;
}
wp_reset_query();
}
?>

<?php get_footer(); ?>