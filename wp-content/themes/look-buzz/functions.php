<?php

/**
 * look-buzz functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package look-buzz
 */
if (!function_exists('look_buzz_setup')) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function look_buzz_setup() {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on look-buzz, use a find and replace
         * to change 'look-buzz' to the name of your theme in all the template files.
         */
        load_theme_textdomain('look-buzz', get_template_directory() . '/languages');

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
        register_nav_menus(array(
            'primary' => esc_html__('Primary', 'look-buzz'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('look_buzz_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));
    }

endif;
add_action('after_setup_theme', 'look_buzz_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function look_buzz_content_width() {
    $GLOBALS['content_width'] = apply_filters('look_buzz_content_width', 640);
}

add_action('after_setup_theme', 'look_buzz_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function look_buzz_widgets_init() {
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'look-buzz'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'look-buzz'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    
    register_sidebar(array(
        'name' => esc_html__('Categorie_Sidebar', 'look-buzz'),
        'id' => 'Categorie_Sidebar',
        'description' => esc_html__('Add widgets here Categories .', 'look-buzz'),
        'before_widget' => '<div class="sidebar-item categories categories-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        
    ));
    
    register_sidebar(array(
        'name' => esc_html__('Tags_Sidebar', 'look-buzz'),
        'id' => 'Tags_Sidebar',
        'description' => esc_html__('Add widgets here Categories .', 'look-buzz'),
        'before_widget' => '<div class="sidebar-item tags-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        
    ));
    
    
}

add_action('widgets_init', 'look_buzz_widgets_init');

//Remove wordpress version
function  look_buzz_remove_version (){
    return '';
}
add_filter("the_generator", "look_buzz_remove_version");
/**
 * Enqueue scripts and styles.
 */
function look_buzz_scripts() {
//	wp_enqueue_style( 'look-buzz-style', get_stylesheet_uri() );


    wp_enqueue_script('look-buzz-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_style('look-buzz-style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('look-buzz-style2', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('look-buzz-style3', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('look-buzz-style4', get_template_directory_uri() . '/css/animate.min.css');
    wp_enqueue_style('look-buzz-style5', get_template_directory_uri() . '/css/lightbox.css');
    wp_enqueue_style('look-buzz-style6', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('look-buzz-style7', get_template_directory_uri() . '/css/responsive.css');

//	wp_enqueue_script( 'look-buzz-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
//	wp_enqueue_script( 'look-buzz-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
//    wp_enqueue_script( 'look-buzz-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script('look-buzz-navigation', get_template_directory_uri() . '/js/jquery.js', array(), '20151215', true);
    wp_enqueue_script('look-buzz-navigation', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true);
    wp_enqueue_script('look-buzz-navigation', get_template_directory_uri() . '/js/lightbox.min.js', array(), '20151215', true);
    wp_enqueue_script('look-buzz-navigation', get_template_directory_uri() . '/js/wow.min.js', array(), '20151215', true);
    wp_enqueue_script('look-buzz-navigation', get_template_directory_uri() . '/js/main.js', array(), '20151215', true);







    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'look_buzz_scripts');




add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

// navigation 
function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
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

require get_template_directory().'/walker.php' ;
