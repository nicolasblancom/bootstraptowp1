<?php

function bttowp_theme_styles(){

    // main bootstrap stylesheet
    wp_enqueue_style( 'bootstrap_main_css', get_template_directory_uri() . '/css/bootstrap.min.css' );

    // main wp theme stylesheet
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'bttowp_theme_styles' );
