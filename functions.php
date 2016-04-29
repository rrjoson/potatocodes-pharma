<?php
/**
 * potato_theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package potato_theme
 */

if ( ! function_exists( 'potato_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function potato_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on potato_theme, use a find and replace
	 * to change 'potato_theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'potato_theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	if (function_exists("register_sidebar")) {
	        register_sidebar(array(
	            'name' => 'Footer Logo',
	            'id' => 'footer-logo',
	            'description' => 'Place widgets for the right header here.'
	        ));
	        register_sidebar(array(
	            'name' => 'Footer Title',
	            'id' => 'footer-title',
	            'description' => 'Place widgets for the right header here.'
	        ));
	        register_sidebar(array(
	            'name' => 'Footer Description',
	            'id' => 'footer-description',
	            'description' => 'Place widgets for the right header here.'
	        ));
	        register_sidebar(array(
	            'name' => 'Footer Update Text',
	            'id' => 'footer-update-text',
	            'description' => 'Place widgets for the right header here.'
	        ));
			register_sidebar(array(
	            'name' => 'Footer Menu 1 Title',
	            'id' => 'footer-menu-1-title',
	            'description' => 'Place widgets for the right header here.'
	        ));
	        register_sidebar(array(
	            'name' => 'Footer Menu 2 Title',
	            'id' => 'footer-menu-2-title',
	            'description' => 'Place widgets for the right header here.'
	        ));
	        register_sidebar(array(
	            'name' => 'Footer Menu 3 Title',
	            'id' => 'footer-menu-3-title',
	            'description' => 'Place widgets for the right header here.'
	        ));
	        register_sidebar(array(
	            'name' => 'Footer Menu 4 Title',
	            'id' => 'footer-menu-4-title',
	            'description' => 'Place widgets for the right header here.'
	        ));
	        register_sidebar(array(
	            'name' => 'Footer Menu 5 Title',
	            'id' => 'footer-menu-5-title',
	            'description' => 'Place widgets for the right header here.'
	        ));
	        register_sidebar(array(
	            'name' => 'Footer Connect',
	            'id' => 'footer-connect',
	            'description' => 'Place widgets for the right header here.'
	        ));
	}

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'potato_theme' ),
		'secondary' => esc_html__( 'Secondary', 'potato_theme' ),
		'academics' => esc_html__( 'Academics', 'potato_theme' ),
		'about' => esc_html__( 'About', 'potato_theme' ),
		'campuslife' => esc_html__( 'Campus Life', 'potato_theme' ),
		'footermenu1' => esc_html__( 'Footer1', 'potato_theme' ),
		'footermenu2' => esc_html__( 'Footer2', 'potato_theme' ),
		'footermenu3' => esc_html__( 'Footer3', 'potato_theme' ),
		'footermenu4' => esc_html__( 'Footer4', 'potato_theme' ),
		'footermenu5' => esc_html__( 'Footer5', 'potato_theme' ),
		'footermobile' => esc_html__( 'Footermobile', 'potato_theme' ),
		'aboutus' => esc_html__( 'About Us Submenus', 'potato_theme' ),
		'categories' => esc_html__( 'News and Events Categories', 'potato_theme' )
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
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'potato_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'potato_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function potato_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'potato_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'potato_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function potato_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'potato_theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'potato_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function potato_theme_scripts() {
	wp_enqueue_style( 'potato_theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'potato_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'potato_theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'potato_theme_scripts' );

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

// Numbered Pagination
if (!function_exists('wpex_pagination')) {
    
    function wpex_pagination()
    {
        
        $prev_arrow = is_rtl() ? '&rarr;' : '&larr;';
        $next_arrow = is_rtl() ? '&larr;' : '&rarr;';
        
        global $wp_query;
        $total = $wp_query->max_num_pages;
        $big   = 999999999; // need an unlikely integer
        if ($total > 1) {
            if (!$current_page = get_query_var('paged'))
                $current_page = 1;
            if (get_option('permalink_structure')) {
                $format = 'page/%#%/';
            } else {
                $format = '&paged=%#%';
            }
            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => $format,
                'current' => max(1, get_query_var('paged')),
                'total' => $total,
                'mid_size' => 3,
                'type' => 'list',
                'prev_text' => $prev_arrow,
                'next_text' => $next_arrow
            ));
        }
    }
    
}

function pagination($pages = '', $range = 4)
{  
     $showitems;  
 
     global $paged; 
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
     	 echo "<div>\n";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a class='pagination-words' href='".get_pagenum_link(1)."'>First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a class='pagination-words' href='".get_pagenum_link($paged - 1)."'>Previous</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<a class=\"current active\">".$paged."</a>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a class='pagination-words' href=\"".get_pagenum_link($paged + 1)."\">Next</a>";  
         echo "<a class='pagination-words' href='".get_pagenum_link($pages)."'>Last</a>";
         echo "</div>\n";
     }
}

?>