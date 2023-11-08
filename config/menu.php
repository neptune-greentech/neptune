<?php

// Register menus
function neptune_register_menu() {
    register_nav_menu('main-menu', 'Main menu');
}

add_action('init', 'neptune_register_menu');
