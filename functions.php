<?php
/**
 * Polmo functions and definitions
 *
 * @package Polmo
 */


global $jeweltheme_polmo;

define('JWPOLMO', wp_get_theme()->get( 'Name' ));

define('JWCSS', get_template_directory_uri().'/assets/css/');

define('JWJS', get_template_directory_uri().'/assets/js/');

if ( ! function_exists( 'jeweltheme_polmo_setup' ) ) {
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jeweltheme_polmo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Polmo, use a find and replace
		 * to change 'jeweltheme_polmo' to the name of your theme in all the template files
		 */
		load_theme_textdomain( 'jeweltheme_polmo', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_editor_style();

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

		add_image_size( 'blog-thumb', '900', '400', true );

		add_image_size( 'home-blog', '375', '275', true );

		add_image_size( 'portfolio', '650', '440', true );



		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary Menu', 'jeweltheme_polmo' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );

		/*
		 * Enable support for Post Formats.
		 * See http://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array('aside','audio','chat','gallery','image','link','quote','status','video') );


		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'jeweltheme_polmo_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
	}
} // jeweltheme_polmo_setup
add_action( 'after_setup_theme', 'jeweltheme_polmo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jeweltheme_polmo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jeweltheme_polmo_content_width', 640 );
}
add_action( 'after_setup_theme', 'jeweltheme_polmo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function jeweltheme_polmo_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'jeweltheme_polmo' ),
		'id'            => 'blog-sidebar',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Sidebar', 'jeweltheme_polmo' ),
		'id'            => 'footer-sidebar',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget col-sm-3 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Menu', 'jeweltheme_polmo' ),
		'id'            => 'footer-menu',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget widget_menu %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'jeweltheme_polmo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jeweltheme_polmo_scripts() {

	if(is_admin()){
		wp_enqueue_style( 'dashicons' );	
	}
	if(!is_admin()){		

		wp_enqueue_script("jquery");
		wp_enqueue_style( 'jeweltheme_polmo-style', get_stylesheet_uri() );

		//if(is_home() || is_front_page()){

		//if (is_page() && basename(get_page_template()) == "front-page.php") {
		if ( is_front_page()) {

			//CSS
			wp_enqueue_style( 'bootstrap', JWCSS . 'bootstrap.min.css');
			wp_enqueue_style( 'animate', JWCSS . 'animate.min.css');
			wp_enqueue_style( 'font-awesome', JWCSS . 'font-awesome.min.css');
			wp_enqueue_style( 'magnific-popup', JWCSS . 'magnific-popup.css');
			wp_enqueue_style( 'bxslider', JWCSS . 'jquery.bxslider.css');
			wp_enqueue_style( 'theme', JWCSS . 'theme.css');
			wp_enqueue_style( 'responsive', JWCSS . 'responsive.min.css');
			

			//JS
			wp_enqueue_script( 'modernizr', JWJS . 'modernizr-2.8.3-respond-1.4.2.min.js', array(), '', false );
			wp_enqueue_script( 'wow.min', JWJS . 'wow.min.js', array(), '', true );
			wp_enqueue_script( 'custom', 'http://maps.google.com/maps/api/js?sensor=true', array(), '', true );
			wp_enqueue_script( 'gmap3', JWJS . 'gmap3.js', array(), '', true );
			wp_enqueue_script( 'waypoints', JWJS . 'waypoints.min.js', array(), '', true );
			wp_enqueue_script( 'ajaxchimp.min', JWJS . 'jquery.ajaxchimp.min.js', array(), '', true );
			wp_enqueue_script( 'custom.min', JWJS . 'custom.min.js', array(), '', true );	

		} else {

			// Blog Page

			//CSS
			wp_enqueue_style( 'bootstrap', JWCSS . 'bootstrap.min.css');			
			wp_enqueue_style( 'font-awesome', JWCSS . 'font-awesome.min.css');			
			wp_enqueue_style( 'flaticon', JWCSS . 'flaticon.css');			
			wp_enqueue_style( 'theme', JWCSS . 'theme.css');
			wp_enqueue_style( 'responsive', JWCSS . 'responsive.min.css');
			

			//JS
			wp_enqueue_script( 'modernizr', JWJS . 'modernizr-2.8.3-respond-1.4.2.min.js', array(), '', false );
			wp_enqueue_script( 'custom.min', JWJS . 'custom.min.js', array(), '', true );
			wp_enqueue_script( 'wow.min', JWJS . 'wow.min.js', array(), '', true );			
			wp_enqueue_script( 'waypoints', JWJS . 'waypoints.min.js', array(), '', true );
			
			
		}
	}



	wp_enqueue_script( 'jeweltheme_polmo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'jeweltheme_polmo-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jeweltheme_polmo_scripts' );

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
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Widgets
 */
require get_template_directory() . '/inc/widgets.php';

/**
* Quick Styles
*
*/
require get_template_directory() . '/inc/quick_styles.php';


// Re Define Meta Box 

define( 'RWMB_URL', trailingslashit( get_stylesheet_directory_uri() . '/inc/meta-box' ) );

define( 'RWMB_DIR', trailingslashit(  get_stylesheet_directory() . '/inc/meta-box' ) );

// Include the meta box script
require_once RWMB_DIR . 'meta-box.php';

require_once (get_template_directory().'/inc/metabox.php');

// Post Meta Show/Hide 
if(!function_exists('jeweltheme_polmo_post_format_meta_script')){

	function jeweltheme_polmo_post_format_meta_script()
	{
		if(is_admin())
		{
			wp_register_script('jeweltheme_postmeta', get_template_directory_uri() .'/js/jw-post-meta.js');
			wp_enqueue_script('jeweltheme_postmeta');
		}
	}

	add_action('admin_enqueue_scripts','jeweltheme_polmo_post_format_meta_script');

}



/*===================================================================================
 * Search Form
 * =================================================================================*/
add_filter('get_search_form', 'jeweltheme_polmo_search_form');

function jeweltheme_polmo_search_form($form) {
	$form = '<form role="search" class="search-form" method="get" action="' . esc_url( home_url( '/' ) ) . '" >
		<input class="search-field" type="text" name="s" id="s" value="' . esc_attr( get_search_query() ) . '" placeholder="Search" required>
		 <button type="submit" id="search-submit" class="search-submit"><i class="fa fa-search"></i></button>
	</form>';

return $form;
}


function jeweltheme_polmo_trim_excerpt($text) {
  return rtrim($text,'[...]');
}
add_filter('get_the_excerpt', 'jeweltheme_polmo_trim_excerpt');


//Excerp Length
function jeweltheme_polmo_excerpt_length($length) {    
    return 2;
}
add_filter('excerpt_length', 'jeweltheme_polmo_excerpt_length');


// Get Blog Link
function jeweltheme_polmo_get_blog_link(){
    $blog_post = get_option("page_for_posts");
    if($blog_post){
        $permalink = get_permalink($blog_post);
    }
    else
        $permalink = site_url();
    return $permalink;
}



function jeweltheme_polmo_get_custom_posts($category_name, $limit = 20, $order = "DESC"){
    wp_reset_postdata();
    $args = array(
        "posts_per_page" => $limit,
        "post_type" => 'post',
        "category" => $category_name,
        "orderby" => "ID",
        "order" => "DESC",
    );
    $custom_posts = get_posts($args);
    return $custom_posts;
}


/**
 * TGM Activation Plugin
 */
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';

/**
 * TGMA
 */
add_action( 'tgmpa_register', 'jeweltheme_polmo_register_required_plugins' );

function jeweltheme_polmo_register_required_plugins() {

    /**
     * Array of plugin arrays. Required keys are name, slug and required.
     * If the source is NOT from the .org repo, then source is also required.
     */


    $plugins = array(

        // This is an example of how to include a plugin pre-packaged with a theme

        array(
	        	'name'      		 => 'Contact Form 7',
	        	'slug'      		 => 'contact-form-7',
	        	'required'  		 => true,
	        	'force_activation'   => false,
	        ),      
        array(
	            'name'                  => 'Polmo Post Type', // The plugin name
	            'slug'                  => 'post_types', // The plugin slug (typically the folder name)
	            'source'                => get_template_directory() . '/inc/post_types.zip', // The plugin source
	            'required'           	=> true, // If false, the plugin is only 'recommended' instead of required.
	            'version'            	=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
	            'force_activation'   	=> true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
	            'force_deactivation' 	=> false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
	            'external_url'       	=> '', // If set, overrides default API URL and points to an external URL.
	        ),


    );

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'domain'            => 'jeweltheme_polmo',           // Text domain - likely want to be the same as your theme.
        'default_path'      => '',                           // Default absolute path to pre-packaged plugins
        'parent_menu_slug'  => 'themes.php',         // Default parent menu slug
        'parent_url_slug'   => 'themes.php',         // Default parent URL slug
        'menu'              => 'install-required-plugins',   // Menu slug
        'has_notices'       => true,                         // Show admin notices or not
        'is_automatic'      => true,            // Automatically activate plugins after installation or not
        'message'           => '',               // Message to output right before the plugins table
        'strings'           => array(
            'page_title'                                => esc_html__( 'Install Required Plugins', 'jeweltheme_polmo' ),
            'menu_title'                                => esc_html__( 'Install Plugins', 'jeweltheme_polmo' ),
            'installing'                                => esc_html__( 'Installing Plugin: %s', 'jeweltheme_polmo' ), // %1$s = plugin name
            'oops'                                      => esc_html__( 'Something went wrong with the plugin API.', 'jeweltheme_polmo' ),
            'notice_can_install_required'               => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ,'jeweltheme_polmo' ), // %1$s = plugin name(s)
            'notice_can_install_recommended'            => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.','jeweltheme_polmo' ), // %1$s = plugin name(s)
            'notice_cannot_install'                     => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.','jeweltheme_polmo' ), // %1$s = plugin name(s)
            'notice_can_activate_required'              => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.','jeweltheme_polmo' ), // %1$s = plugin name(s)
            'notice_can_activate_recommended'           => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.','jeweltheme_polmo' ), // %1$s = plugin name(s)
            'notice_cannot_activate'                    => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.','jeweltheme_polmo' ), // %1$s = plugin name(s)
            'notice_ask_to_update'                      => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.','jeweltheme_polmo' ), // %1$s = plugin name(s)
            'notice_cannot_update'                      => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.','jeweltheme_polmo' ), // %1$s = plugin name(s)
            'install_link'                              => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'jeweltheme_polmo' ),
            'activate_link'                             => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'jeweltheme_polmo' ),
            'return'                                    => esc_html__( 'Return to Required Plugins Installer', 'jeweltheme_polmo' ),
            'plugin_activated'                          => esc_html__( 'Plugin activated successfully.', 'jeweltheme_polmo' ),
            'complete'                                  => esc_html__( 'All plugins installed and activated successfully. %s', 'jeweltheme_polmo' ) // %1$s = dashboard link
        )
    );

    tgmpa( $plugins, $config );

}


//Initialize Polmo Lite Updater
require 'inc/theme-update-checker.php';
$example_update_checker = new JewelThemePolmoUpdater(
	'polmo-lite', 
	'http://demos.jeweltheme.com/theme-updates/polmo-lite.json' 
);