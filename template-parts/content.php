<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gup_underscore
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php gup_underscore_post_thumbnail(); ?>
	
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				gup_underscore_posted_on();
				gup_underscore_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
			<?php while ( have_posts() ) : the_post(); ?>

				<p><?php the_field('credits'); ?></p>

				<p><?php the_field('article_text'); ?></p>

				<p><?php the_content(); ?></p>

			<?php endwhile; // end of the loop. ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php gup_underscore_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
