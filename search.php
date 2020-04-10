<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package gup_underscore
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'gup_underscore' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php 
			$args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 20,
			);
			$arr_posts = new WP_Query( $args );
			 
			if ( $arr_posts->have_posts() ) :
			 
				while ( $arr_posts->have_posts() ) :
					$arr_posts->the_post();
					?>
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
					<?php
				endwhile;
			endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
