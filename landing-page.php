<?php 
	/* Template Name: Landing Page */
?>

<?php get_header(); ?>

<section class="background_landing">

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

	<button class="button--close_landing"><a href="https://gup.devijgstudio.com/">X</a></button>
    <button class="button_landing">
		<?php 
		$link = get_field('button');
		if( $link ): 
			$link_url = $link['url'];
			$link_title = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_blank';
			?>
			<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>
	</button>

</section>


<?php
get_sidebar();
get_footer();