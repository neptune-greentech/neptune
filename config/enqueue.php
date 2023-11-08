<?php

// Enqueue assets
function neptune_enqueue_assets() {
    wp_enqueue_style('neptune-style', get_template_directory_uri() . '/dist/styles/style.css', [], '1.0', 'all');
    wp_enqueue_script('neptune-script', get_template_directory_uri() . '/dist/scripts/bundle.js', [], '1.0', true);

    include locate_template('/config/theme/variables.php');
    wp_localize_script('neptune-script', 'neptuneCustomVariables', $neptuneCustomVariables);
}

add_action('wp_enqueue_scripts', 'neptune_enqueue_assets');
