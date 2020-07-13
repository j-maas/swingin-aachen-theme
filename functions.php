<?php // BLANK Theme Custom Functions

if (!defined('ABSPATH')) exit;



// define max content width
function shapeSpace_content_width() {
	
	$GLOBALS['content_width'] = 960;
	
}
add_action('after_setup_theme', 'shapeSpace_content_width', 0);



// set up theme support
function shapeSpace_setup() {
	
	add_theme_support('post-thumbnails');
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	
}
add_action('after_setup_theme', 'shapeSpace_setup');



// conditional parent/child styles
function shapeSpace_conditional_styles() {
	
	if (is_child_theme()) {
		
		// load parent styles if active child theme
		wp_enqueue_style('blank-theme-parent', trailingslashit(get_template_directory_uri()) .'style.css', array(), null);
		
	}
	
	// always load active theme stylesheet
	wp_enqueue_style('blank-theme', get_stylesheet_uri(), array(), null);
	
}



// frontend script & style
function shapeSpace_frontend_scripts() {
	
	// wp_enqueue_style( $handle, $src, $deps, $ver, $media )
	
	shapeSpace_conditional_styles();
	
	// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer )
	
	wp_enqueue_script('blank-theme', get_template_directory_uri() .'/js/blank.js', array(), null, true);
	
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		
		wp_enqueue_script('comment-reply');
		
	}
	
}
add_action('wp_enqueue_scripts', 'shapeSpace_frontend_scripts');

function remove_unnecessary_js($scripts){
    if (!is_admin()) {
        $scripts->remove('jquery');
    }
}
add_filter( 'wp_default_scripts', 'remove_unnecessary_js' );

function remove_unnecessary_css(){
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'remove_unnecessary_css' );

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// register widgets
function shapeSpace_widgets_init() {
	
	$widget_args_1 = array(
		
		'name'          => __('Widgets Sidebar', 'blank-theme'),
		'id'            => 'widgets_sidebar',
		'class'         => '',
		'description'   => __('Widgets added here are displayed in the sidebar', 'blank-theme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
		
	);
	
	register_sidebar($widget_args_1);
	
}
add_action('widgets_init', 'shapeSpace_widgets_init');


function swev_register_menues() {
    register_nav_menus(
        array(
            'footer-menu' => __( 'Footer Menu' ),
            'nav-menu' => __( 'Navigation Menu' ),
        )
    );
}
add_action( 'init', 'swev_register_menues' );

function swev_title( $title )
{
    return get_bloginfo('name');
}
add_filter( 'pre_get_document_title', 'swev_title' );
