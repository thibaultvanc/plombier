<?php
/**
 * shelley functions and definitions
 *
 * @package shelley
 */

if ( ! function_exists( 'shelley_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function shelley_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on shelley, use a find and replace
	 * to change 'shelley' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'shelley', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	// Add Theme Support for WooCommerce
	add_theme_support( 'woocommerce' );
	
	
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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'shelley' ),
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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'shelley_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // shelley_setup
add_action( 'after_setup_theme', 'shelley_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shelley_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'shelley_content_width', 640 );
}
add_action( 'after_setup_theme', 'shelley_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function shelley_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'shelley' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'shelley_widgets_init' );


/**
 * Register roboto and Fauna Google fonts.
 */
function shelley_fonts_url() {
    $fonts_url = '';
 
    /* Translators: If there are characters in your language that are not
    * supported by the Google fonts, translate this to 'off'. Do not translate
    * into your own language.
    */
    $roboto = _x( 'on', 'roboto font: on or off', 'shelley' );
	$fauna = _x( 'on', 'Fauna font: on or off', 'shelley' );
  
    if ( 'off' !== $roboto || 'off' !== $fauna ) {
        $font_families = array();
 
        if ( 'off' !== $roboto ) {
            $font_families[] = 'Roboto:300,400,700,400italic';
        }
		
		if ( 'off' !== $fauna ) {
            $font_families[] = 'Fauna One:400,700,400italic';
        }
 
        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
 
        $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
    }
 
    return $fonts_url;
}

/**
 * Enqueue scripts and styles.
 */
function shelley_scripts() {
	//Enqueue Stylesheet
	wp_enqueue_style( 'shelley-style', get_stylesheet_uri() );
	wp_enqueue_style( 'shelley-bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style( 'shelley-fonts', shelley_fonts_url(), array(), null );
	wp_enqueue_style( 'shelley-custom', get_template_directory_uri() . '/css/custom.css');
	wp_enqueue_style( 'shelley-wow-animate', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style( 'shelley-slicknavcss', get_template_directory_uri() . '/css/slicknav.css');
	//Enqueue Scripts
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'shelley-slicknavjs', get_template_directory_uri() . '/js/jquery.slicknav.js', array(), '20120206', true );	
	wp_enqueue_script( 'shelley-waypoints', get_template_directory_uri() . '/js/jquery.waypoints.js', array(), '20120206', true );
	wp_enqueue_script( 'shelley-counterup', get_template_directory_uri() . '/js/jquery.counterup.js', array(), '20120206', true );
	wp_enqueue_script( 'shelley-masonry', get_template_directory_uri() . '/js/jquery.masonry.js', array(), '20120206', true );
	wp_enqueue_script( 'shelley-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '20130115', true );
	wp_enqueue_script( 'shelley-load', get_template_directory_uri() . '/js/shelley_load.js', array(), '20130115', true );
	wp_enqueue_script( 'shelley-queryloader', get_template_directory_uri() . '/js/queryloader.js', array(), '20130115', true );
	wp_enqueue_script( 'shelley-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'shelley-wow', get_template_directory_uri() . '/js/wow.js', array(), '20130115', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shelley_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * PurelyThemes Upsell Page
 */
require get_template_directory() . '/inc/shelley_upsell.php';
	