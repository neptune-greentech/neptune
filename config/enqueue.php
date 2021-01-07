<?php

function neptune_enqueue_assets() {
    wp_enqueue_style( 'neptune-style', get_template_directory_uri() . '/dist/styles/style.css', array(), '1.0', 'all');
    wp_enqueue_script( 'neptune-script', get_template_directory_uri() . '/dist/scripts/bundle.js', array (), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'neptune_enqueue_assets' );