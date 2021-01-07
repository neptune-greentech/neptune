<?php

// Remove Gutenberg styles
function neptune_clean_gutenberg() {
    wp_dequeue_style('wp-block-library');
}
add_action('wp_print_styles', 'neptune_clean_gutenberg', 100);