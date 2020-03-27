<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gup_underscore
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

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

		</main><!-- #main -->

		<section id="modal">
			<div class="modal--header_close" id="closeModal"><img src="https://gup.devijgstudio.com/wp-content/uploads/2020/03/close-e1585331267337.png"></div>
			<main class="modal--body">
				<div>
					<h1><?php the_field('pop-up_title'); ?></h1>
				</div>
				<div>
					<?php if( get_field('pop-up_image') ): ?>
						<img class="modal--body_image" src="<?php the_field('pop-up_image'); ?>" />
					<?php endif; ?>
				</div>
			</main>
		</section>
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
