<?php
/**
 * gup_underscore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gup_underscore
 */

if ( ! function_exists( 'gup_underscore_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gup_underscore_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gup_underscore, use a find and replace
		 * to change 'gup_underscore' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gup_underscore', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'gup_underscore' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'gup_underscore' ),
			'overlay-menu' => esc_html__( 'Overlay Menu', 'gup_underscore' ),
			'mobile-menu' => esc_html__( 'Mobile Menu', 'gup_underscore' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'gup_underscore_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'gup_underscore_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gup_underscore_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'gup_underscore_content_width', 640 );
}
add_action( 'after_setup_theme', 'gup_underscore_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gup_underscore_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gup_underscore' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gup_underscore' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gup_underscore_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gup_underscore_scripts() {
	wp_enqueue_style( 'gup_underscore-style', get_stylesheet_uri() );

	wp_enqueue_script( 'gup_underscore-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'gup_underscore-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'gup_underscore-transition', get_template_directory_uri() . '/js/transition.js', array(), '20151215', true );

	wp_enqueue_script('gup_underscore-script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gup_underscore_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/** 
 * Disable WordPress Admin Bar for all users but admins. 
 */
show_admin_bar(false);

/** 
 * Add google Fonts. 
 */

function custom_add_google_fonts() {
	wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900,900i&display=swap', false );
	}
	add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );

/** 
 * Edit searchbar. 
 */

function wpforo_search_form( $html ) {

    $html = str_replace( 'placeholder="Search ', 'placeholder="&#x1F50D;', $html );

    return $html;
}
add_filter( 'get_search_form', 'wpforo_search_form' );


/** 
 * Add image sizes. 
 */

add_image_size( 'medium_large', '768', '0', true );
add_image_size( '1536x1536', '1536', '1536', false );
add_image_size( '2048x2048', '2048', '2048', false );
add_image_size( 'medium_large', '768', '0', true );
add_image_size( 'Custom', '1200', '628', true );
add_image_size( 'thumbnail-list', '460', '180', true );
add_image_size( 'thumbnail-list-medium', '460', '250', true );

/** 
 * Add link to post featured images. 
 */

function wpb_autolink_featured_images( $html, $post_id, $post_image_id ) {
	$html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
	return $html;
	}
	add_filter( 'post_thumbnail_html', 'wpb_autolink_featured_images', 10, 3 );





function whitespider_private_posts_subscribers(){

 $subRole = get_role( 'subscriber' );

 $subRole->add_cap( 'read_private_posts' );

$subRole->add_cap( 'read_private_pages' );

}

add_action( 'init', 'ws_private_posts_subscribers' );

?>
