<?php

//add_theme_support( 'editor-styles' );
//add_editor_style( get_template_directory_uri() . '/dist/styles/style.css' );

function neptune_register_gutenberg_blocks()
{
	/**------------------------------------
		// HEADINGS
	--------------------------------------- */
	// Hero full
	wp_register_script('neptune-hero-full', get_template_directory_uri() . '/dist/scripts/editor/heroFull.js', ['wp-blocks', 'wp-editor', 'wp-components']);
	register_block_type('neptune/hero-full', [
		'editor_script' => 'neptune-hero-full'
	]);

	// Hero classic
	wp_register_script('neptune-hero-classic', get_template_directory_uri() . '/dist/scripts/editor/heroClassic.js', ['wp-blocks', 'wp-editor']);
	register_block_type('neptune/hero-classic', [
		'editor_script' => 'neptune-hero-classic',
	]);
}

add_action('init', 'neptune_register_gutenberg_blocks');