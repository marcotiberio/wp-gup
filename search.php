<?php
/**
 * The template for displaying search results pages.
 *
 * @package stackstar.
 */
 
get_header(); ?>

	<div id="primary--page-main" class="content-area--page-main">
		<main id="main--page-main" class="site-main--page-main">
    		<div class="search-container">
 
        			<?php if ( have_posts() ) : ?>
 
					<header class="entry-header">
						<h1 class="entry-title"><?php printf( esc_html__( 'Search Results for: %s', stackstar ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->
 
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
					<article class="latestpost--custom" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div>
						<?php
						if ( has_post_thumbnail() ) :
							the_post_thumbnail();
						endif;
						?>
						</div>
						<div>
						<header class="entry-header">
							<a href="<?php the_permalink(); ?>"><h3 class="post-title"><?php the_title(); ?></h3></a>
							<h5 class="post-subtitle"><?php the_field('post_subtitle'); ?></h5>
						</header>
						<div class="entry-content">
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>">Read More</a>
						</div>
						</div>
					</article>
		
					<?php endwhile; ?>
		
					<?php //the_posts_navigation(); ?>
		
				<?php else : ?>
		
					<?php //get_template_part( 'template-parts/content', 'none' ); ?>
		
				<?php endif; ?>
 
			</div>
		</main>
	</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>