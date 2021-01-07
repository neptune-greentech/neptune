<?php

function neptune_menus() {
	register_nav_menus( array(
		'main_menu' => __('Main Menu')
	) );
}
add_action( 'after_setup_theme', 'neptune_menus');