<?php

// Register menus
function neptune_register_menu() {
    register_nav_menu('main-menu', __('Main menu'));
    register_nav_menu('footer-menu', __('Footer menu'));
}

add_action('init', 'neptune_register_menu');
