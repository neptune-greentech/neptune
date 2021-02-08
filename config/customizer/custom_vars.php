<?php

/**
 * This table is needed to send customizer values to js via wp_localize_script in the inc/enqueue.php file.
 */
$neptuneCustomVars = [
    // Colors
    '--color-background' => get_theme_mod('neptune_background_color'),
    '--color-primary' => get_theme_mod('neptune_primary_color'),
    '--color-dark' => get_theme_mod('neptune_dark_color'),
    '--color-white' => get_theme_mod('neptune_white_color'),
    '--color-gray' => get_theme_mod('neptune_gray_color'),
];
