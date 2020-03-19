<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gup_underscore
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-custom">
			<div class="footer-custom-column">
				<h4>LINKS</h4>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'footer-menu',
					'menu_id'        => 'footer-menu',
				) );
				?>
			</div>
			<div class="footer-custom-column" id="footer-custom-col2">
				<h4>EDITORIAL OFFICE</h4>
				<p>
				GUP Magazine<br>
				Lindengracht 35<br>
				1015 KB Amsterdam<br>
				The Netherlands<br>
				<br>
				<a href="mailto:info@gupmagazine.com" target="_blank">info@gupmagazine.com</a>
				</p>
			</div>
			<div class="footer-custom-column">
				<h4>FOLLOW US</h4>
				<p>
				</p><i class="fab fa-facebook fa-2x"></i>&nbsp;<i class="fab fa-twitter fa-2x"></i>&nbsp;<i class="fab fa-instagram fa-2x"></i>
			</div>
		</div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'gup_underscore' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'gup_underscore' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'gup_underscore' ), 'gup_underscore', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
