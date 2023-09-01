<?php

/**
 * Template Name: page-home.
 */
?>

<?php get_header('home'); ?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>

		<div class="container-content">

			<?php the_content(); ?>

		</div>

<?php
    }
} ?>


<?php get_footer(); ?>
