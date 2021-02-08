<?php get_header(); ?>

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
