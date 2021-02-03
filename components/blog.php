<section class="blog">
    <div class="container">

		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

			<div class="col-2 blog_item">

				<div class="col">
					<?php the_post_thumbnail('large'); ?>
				</div>

				<div class="col">
					<h2><?php the_title(); ?></h2>

					<?php the_excerpt(); ?>

					<ul>
						<li>
							<?php echo __('Published', 'neptune'); ?> <?php the_date(); ?>
						</li>
						<li>
							<?php echo __('Categorized as', 'neptune'); ?> <?php the_category(', '); ?>
						</li>
					</ul>

					<a class="btn btn-secondary" href="<?php the_permalink(); ?>">
						<?php echo __('Continue reading', 'neptune'); ?>
					</a>
				</div>

			</div>

			<?php // Display the posts seperator if this is not the last post of the loop
			if (($wp_query->current_post + 1) != $wp_query->post_count) : ?>
				<span></span>
			<?php endif; ?>

		<?php endwhile; endif; ?>

		<div class="blog__pagination">
			<div class="blog__pagination__next">
				<?php next_posts_link( 'Previous posts' ); ?>
			</div>
			<div class="blog__pagination__prev">
				<?php previous_posts_link( 'Next posts' ); ?>
			</div>
		</div>


		<?php wp_reset_postdata(); ?>

    </div>
</section>