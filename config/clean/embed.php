<?php

function neptune_clean_embed(){
	wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'neptune_clean_embed' );