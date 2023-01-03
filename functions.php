<?php

/**
 * write functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package write
 */

if (!defined('WRITE_VERSION')) {
	// Replace the version number of the theme on each release.
	define('WRITE_VERSION', '1.0.0');
}

if (!function_exists('write_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function write_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on write, use a find and replace
		 * to change 'write' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('write', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		// register_nav_menus(
		// 	array(
		// 		'menu-1' => esc_html__('Primary', 'write'),
		// 	)
		// );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-datlv'   => esc_html__('Primary menu', 'write'),
				'main-menu' => esc_html__('OXanh Menu', 'write'),
				'menu-bhhk' => esc_html__('BHHK Menu', 'write'),
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
				'write_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'write_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function write_content_width()
{
	$GLOBALS['content_width'] = apply_filters('write_content_width', 640);
}
add_action('after_setup_theme', 'write_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function write_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'write'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'write'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'write_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function write_scripts()
{
	wp_enqueue_style('write-style', get_stylesheet_uri(), array(), WRITE_VERSION);
	wp_style_add_data('write-style', 'rtl', 'replace');

	wp_enqueue_script('write-jquery', get_template_directory_uri() . '/oxanh/utils/jquery/dist/jquery.min.js', array(), WRITE_VERSION, true);
	wp_enqueue_script('write-jquery-ui-datepicker', get_template_directory_uri() . '/oxanh/utils/jquery-ui/ui/widgets/datepicker.js', array(), WRITE_VERSION, true);
	wp_enqueue_script('write-datepicker-i18n', get_template_directory_uri() . '/oxanh/utils/jquery-ui/ui/i18n/datepicker-vi.js', array(), WRITE_VERSION, true);
	wp_enqueue_script('write-bootstrap', get_template_directory_uri() . '/oxanh/utils/bootstrap/dist/js/bootstrap.bundle.js', array(), WRITE_VERSION, true);
	wp_enqueue_script('write-slick-carousel', get_template_directory_uri() . '/oxanh/utils/slick-carousel/slick/slick.min.js', array(), WRITE_VERSION, true);
	wp_enqueue_script('write-owl-carousel', get_template_directory_uri() . '/oxanh/utils/owl.carousel/dist/owl.carousel.min.js', array(), WRITE_VERSION, true);
	wp_enqueue_script('write-sweetalert2', get_template_directory_uri() . '/oxanh/utils/sweetalert2/dist/sweetalert2.all.min.js', array(), WRITE_VERSION, true);
	wp_enqueue_script('write-fancybox', get_template_directory_uri() . '/oxanh/utils/@fancyapps/fancybox/dist/jquery.fancybox.min.js', array(), WRITE_VERSION, true);
	wp_enqueue_script('write-hc-offcanvas-nav', get_template_directory_uri() . '/oxanh/utils/hc-offcanvas-nav/dist/hc-offcanvas-nav.js', array(), WRITE_VERSION, true);
	wp_enqueue_script('write-select2', get_template_directory_uri() . '/oxanh/utils/select2/dist/js/select2.full.min.js', array(), WRITE_VERSION, true);
	wp_enqueue_script('write-select2-i18n', get_template_directory_uri() . '/oxanh/utils/select2/dist/js/i18n/vi.js', array(), WRITE_VERSION, true);
	wp_enqueue_script('write-cleave', get_template_directory_uri() . '/oxanh/utils/cleave.js/dist/cleave.min.js', array(), WRITE_VERSION, true);
	wp_enqueue_script('write-jquery-validation', get_template_directory_uri() . '/oxanh/utils/jquery-validation/dist/jquery.validate.min.js', array(), WRITE_VERSION, true);
	wp_enqueue_script('write-jquery-tipsy', get_template_directory_uri() . '/oxanh/utils/tipsy/jquery.tipsy.js', array(), WRITE_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'write_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Disable image size threshold to prevent image scaling.
 */
add_filter('big_image_size_threshold', '__return_false');


function write_menu_item_classes($classes, $item, $args)
{
	if ($args->theme_location == 'main-menu') {
		$classes[] = 'nav-item';
	}
	return $classes;
}
add_filter('nav_menu_css_class', 'write_menu_item_classes', 1, 3);

function write_menu_item_link_class($ulclass)
{
	return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu', 'write_menu_item_link_class');


function cptui_register_my_cpts() {

	/**
	 * Post Type: BHHK.
	 */

	$labels = [
		"name" => esc_html__( "BHHK", "write" ),
		"singular_name" => esc_html__( "BHHK", "write" ),
	];

	$args = [
		"label" => esc_html__( "BHHK", "write" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => false,
		"rewrite" => [ "slug" => "bhhk", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-editor-code",
		"supports" => [ "title", "editor", "thumbnail", "page-attributes" ],
		"show_in_graphql" => false,
	];

	register_post_type( "bhhk", $args );

	/**
	 * Post Type: OXanh.
	 */

	$labels = [
		"name" => esc_html__( "OXanh", "write" ),
		"singular_name" => esc_html__( "OXanh", "write" ),
	];

	$args = [
		"label" => esc_html__( "OXanh", "write" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => false,
		"rewrite" => [ "slug" => "oxanh", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-editor-code",
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];

	register_post_type( "oxanh", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );



function cptui_register_my_cpts_bhhk() {

	/**
	 * Post Type: BHHK.
	 */

	$labels = [
		"name" => esc_html__( "BHHK", "write" ),
		"singular_name" => esc_html__( "BHHK", "write" ),
	];

	$args = [
		"label" => esc_html__( "BHHK", "write" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => false,
		"rewrite" => [ "slug" => "bhhk", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-editor-code",
		"supports" => [ "title", "editor", "thumbnail", "page-attributes" ],
		"show_in_graphql" => false,
	];

	register_post_type( "bhhk", $args );
}

add_action( 'init', 'cptui_register_my_cpts_bhhk' );



function cptui_register_my_cpts_oxanh() {

	/**
	 * Post Type: OXanh.
	 */

	$labels = [
		"name" => esc_html__( "OXanh", "write" ),
		"singular_name" => esc_html__( "OXanh", "write" ),
	];

	$args = [
		"label" => esc_html__( "OXanh", "write" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => false,
		"rewrite" => [ "slug" => "oxanh", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-editor-code",
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];

	register_post_type( "oxanh", $args );
}

add_action( 'init', 'cptui_register_my_cpts_oxanh' );
