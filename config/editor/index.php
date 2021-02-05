<?php
function neptune_register_gutenberg_blocks()
{
	// Custom CTA
	wp_register_script('neptune-custom-cta', get_template_directory_uri() . '/dist/scripts/editor/customCta.js', ['wp-blocks', 'wp-editor', 'wp-components']);
	register_block_type('neptune/custom-cta', [
		'editor_script' => 'neptune-custom-cta'
	]);
}

add_action('init', 'neptune_register_gutenberg_blocks');