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
