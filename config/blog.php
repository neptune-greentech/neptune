<?php

// Removes from admin menu
function neptune_my_remove_admin_menus() {
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'neptune_my_remove_admin_menus');

// Removes from post and pages
function neptune_remove_comment_support() {
    remove_post_type_support('post', 'comments');
    remove_post_type_support('page', 'comments');
}

add_action('init', 'neptune_remove_comment_support', 100);

// Removes from admin bar
function neptune_mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action('wp_before_admin_bar_render', 'neptune_mytheme_admin_bar_render');
