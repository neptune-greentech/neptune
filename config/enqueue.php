<?php

function neptune_enqueue_assets()
{
    wp_enqueue_style('neptune-style', get_template_directory_uri().'/dist/styles/style.css', [], '1.0', 'all');
    wp_enqueue_script('neptune-script', get_template_directory_uri().'/dist/scripts/bundle.js', [], '1.0', true);

    // Send customizer values to js
    include locate_template('/config/customizer/custom_vars.php');
    wp_localize_script('neptune-script', 'NeptuneCustomVars', $neptuneCustomVars);
}
add_action('wp_enqueue_scripts', 'neptune_enqueue_assets');
