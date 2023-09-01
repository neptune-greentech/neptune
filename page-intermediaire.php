<?php

/**
 * Template Name: page-intermediaire.
 */
?>

<?php get_header(); ?>

    <?php if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>

            <?php the_content(); ?>

    <?php }
    } ?>

<?php get_footer(); ?>
