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
                <span><?php the_field('post_credits_artist_place'); ?></span>
                <br>
                <span><?php the_field('post_credits_artist_place_date'); ?></span>
            </div>
        </div>

        <div class="post-text">
            <p><?php the_field('post_text'); ?></p>
        </div>
		
    </div>
	
</div>

<hr style="margin: 0 10%;">

<?php $orig_post = $post;
global $post;
$categories = get_the_category($post->ID);
if ($categories) {
$category_ids = array();
foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

$args=array(
'category__in' => $category_ids,
'post__not_in' => array($post->ID),
'posts_per_page'=> 2, // Number of related posts that will be shown.
'ignore_sticky_posts'=>1
);

$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
echo '<div id="related_posts"><h3>Related Posts</h3><div class="related_posts-grid">';
while( $my_query->have_posts() ) {
$my_query->the_post();?>

    <div class="relatedthumb">
        <a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="relatedcontent">
            <h3><a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
        </div>
    </div>
<?
}
echo '</div></div>';
}
}
$post = $orig_post;
wp_reset_query(); ?>

<?php get_footer(); ?>