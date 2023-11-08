<?php

// Add page media support
add_theme_support( 'post-thumbnails' );

// Add logo support
add_theme_support( 'custom-logo' );

// Remove p and br from contact form 7
add_filter('wpcf7_autop_or_not', '__return_false');

// Add title tag support
add_theme_support('title-tag');

// Add feed support
add_theme_support('automatic-feed-links');