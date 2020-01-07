
<?php

function register_theme_scripts() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/build/src/css/main.min.css');
    wp_enqueue_script( 'build', get_template_directory_uri() . '/build/src/js/build.min.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'register_theme_scripts' );