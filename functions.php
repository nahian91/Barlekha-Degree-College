<?php
/**
 * bdc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bdc
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'bdc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bdc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bdc, use a find and replace
		 * to change 'bdc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bdc', get_template_directory() . '/languages' );

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
		add_theme_support( 'post-thumbnails', array('events', 'post') );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'main-menu' => esc_html__( 'Primary Menu', 'bdc' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'bdc_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'bdc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bdc_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bdc_content_width', 640 );
}
add_action( 'after_setup_theme', 'bdc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bdc_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bdc' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bdc' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bdc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bdc_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl-carousel.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'magnific', get_template_directory_uri() . '/assets/css/magnific.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', array(), _S_VERSION, 'all' );

	wp_enqueue_style( 'bdc-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'bdc-style', 'rtl', 'replace' );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl-carousel.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'waypoint', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'counterup', get_template_directory_uri() . '/assets/js/counterup.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bdc_scripts' );


// Custom Posts
function bdc_custom_posts() {

    // Slider Custom Post
    register_post_type('sliders', array(
        'labels' => array(
            'name' => __('Sliders', 'halim'),
            'singular_name' => __('Slider', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'custom-fields'),
        'show_in_rest' => false,
        'menu_icon' => 'dashicons-slides'
    ));

    // Teachers Custom Post
    register_post_type('teachers', array(
        'labels' => array(
            'name' => __('Teachers', 'halim'),
            'singular_name' => __('Teacher', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'custom-fields', 'page-attributes'),
        'show_in_rest' => false,
        'menu_icon' => 'dashicons-calculator',		
		'taxonomies' => array( 'category'),
		'has_archive' => true,
		'rewrite' => array('slug' => 'teachers'),
    ));

	// Testimonials Custom Post
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'halim'),
            'singular_name' => __('Testimonial', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'custom-fields'),
        'show_in_rest' => false,
        'menu_icon' => 'dashicons-calculator',	
    ));

    // Notice Board Custom Post
    register_post_type('notices', array(
        'labels' => array(
            'name' => __('Notices', 'halim'),
            'singular_name' => __('Notice', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'custom-fields', 'editor'),
    ));

    // Events Custom Post
    register_post_type('events', array(
        'labels' => array(
            'name' => __('Events', 'halim'),
            'singular_name' => __('Event', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'custom-fields', 'editor', 'thumbnail'),
    ));

    // Gallery Custom Post
    register_post_type('gallerys', array(
        'labels' => array(
            'name' => __('Gallerys', 'halim'),
            'singular_name' => __('Gallery', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'custom-fields'),
		'taxonomies' => array( 'category'),
		'has_archive' => true,
		'rewrite' => array('slug' => 'gallerys'),
    ));
	
}

add_action('init', 'bdc_custom_posts');

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Counter',
		'menu_title'	=> 'Counter',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

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

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    // Update the path
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}
