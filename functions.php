<?php

include_once locate_template('/config/blog/index.php');

include_once locate_template('/config/clean/index.php');

include_once locate_template('/config/customizer/index.php');

include_once locate_template('/config/enqueue.php');

include_once locate_template('/config/editor/index.php');

include_once locate_template('/config/menus.php');

include_once locate_template('/config/theme_support.php');

add_theme_support('html5', array('search-form'));

// Add sidebar footer lien 1
function wine_footer_lien_1_sibedar_init() {

	register_sidebar( array(
		'name'          => 'Sidebar footer lien 1',
		'id'            => 'footer_1_sidebar',
		'before_widget'  => '',
		'after_widget'  => '',
		'before_title' => '',
		'after_title' => '',
    ) );
}
add_action( 'widgets_init', 'wine_footer_lien_1_sibedar_init' );

// Add sidebar footer lien 2
function wine_footer_lien_2_sibedar_init() {

	register_sidebar( array(
		'name'          => 'Sidebar footer lien 2',
		'id'            => 'footer_2_sidebar',
		'before_widget'  => '',
		'after_widget'  => '',
		'before_title' => '',
		'after_title' => '',
    ) );
}
add_action( 'widgets_init', 'wine_footer_lien_2_sibedar_init' );

// Add sidebar footer lien 3
function wine_footer_lien_3_sibedar_init() {

	register_sidebar( array(
		'name'          => 'Sidebar footer lien 3',
		'id'            => 'footer_3_sidebar',
		'before_widget'  => '',
		'after_widget'  => '',
		'before_title' => '',
		'after_title' => '',
    ) );
}
add_action( 'widgets_init', 'wine_footer_lien_3_sibedar_init' );