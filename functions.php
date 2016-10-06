<?php

// loads theme css files
function bttowp_theme_styles(){

    // main bootstrap stylesheet
    wp_enqueue_style( 'bootstrap_main_css', get_template_directory_uri() . '/css/bootstrap.min.css' );

    // main wp theme stylesheet
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'bttowp_theme_styles' );

// loads theme js files
function bttowp_theme_js(){

    global $wp_scripts;

    // register for later enqueue these scripts
    // html5 shiv
    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', '', '', false );

    // respond.js
    wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );

    $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
    $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

    // enqueue theses scripts
    // main bootstrap js
    wp_enqueue_script( 'bootstrap_main_js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'bootstrap_ie10hack_js', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js' );

}
add_action( 'wp_enqueue_scripts', 'bttowp_theme_js' );

// removes admin bar when user logged in
//add_filter( 'show_admin_bar', '__return_false' );

// activate theme functionality
# activate menus
add_theme_support( 'menus' );

# activate featured images
add_theme_support( 'post-thumbnails' );

// create menus
function bttowp_register_theme_menus(){
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' )
        )
    );
}
add_action( 'init', 'bttowp_register_theme_menus' );

// create widget areas
function bttowp_create_widget( $name, $id, $description ){
    register_sidebar( array(
        'name' => $name,
        'id' => $id,
        'description' => __( $description ),
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}
# frontpage widgets
bttowp_create_widget( __('Front Page Left', 'bttowp'), 'front-left', __( 'Displays on the left of the homepage' ));
bttowp_create_widget( __('Front Page Center', 'bttowp'), 'front-center', __( 'Displays on the center of the homepage' ));
bttowp_create_widget( __('Front Page Right', 'bttowp'), 'front-right', __( 'Displays on the right of the homepage' ));

# page widgets
bttowp_create_widget( __( 'Page Sidebar', 'bttowp' ), 'page', __( 'Displays on the side of pages with a sidebar', 'bttowp' ) );

# blog widgets
bttowp_create_widget( __( 'Blog Posts Page Sidebar', 'bttowp' ), 'blog', __( 'Displays on the side of the blog posts listing page', 'bttowp' ) );

#archive widgets
bttowp_create_widget( __( 'Archive Listing Page Sidebar', 'bttowp' ), 'archive', __( 'Displays on the side of the archive listing page. If nothing added here, archive page will show "Blog Posts Page Sidebar" widgets', 'bttowp' ) );
