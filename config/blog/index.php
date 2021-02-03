<?php
/**
 * Filter the except length to 19 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function neptune_custom_excerpt_length( $length ) {
    return 19;
}
add_filter( 'excerpt_length', 'neptune_custom_excerpt_length', 999 );


/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function neptune_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'neptune_excerpt_more' );