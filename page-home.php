<?php

/**
 * Template Name: page-home.
 */
?>

<?php get_header('home'); ?>

<?php if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>

            <?php the_content(); ?>

    <?php }
    } ?>

<?php get_footer(); ?>
