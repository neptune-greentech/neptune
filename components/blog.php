<header class="hero hero-page" data-scroll-section>
    <div class="container hero_container">
        <div class="content_page">
			<?php $page = get_queried_object(); ?>
            <h1><?php echo $page->post_title; ?></h1>
        </div>
    </div>
</header>

<section class="list_blog">
    <div class="container">
		<div class="blog_item">
		<?php
			$argsPost = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => -1
			);
			
			$queryPost = new WP_Query($argsPost);

			if ($queryPost->have_posts()):
			while ($queryPost->have_posts()):
			$queryPost->the_post();
		?>

			<div class="actu_content">
                <?php echo get_the_post_thumbnail();?>
                <div>
                    <h3>
                        <a href="<?php echo the_permalink(); ?>" title="Lien vers l'article"> <?php echo the_title(); ?></a>
                    </h3> 
                    <span><?php echo get_the_date(); ?></span>
                </div>
            </div>

			<?php
			endwhile;
			else: ?>
			<p>Aucune actualité n'a été trouvée.</p>
			<?php
			endif;
			wp_reset_postdata(); ?>

		</div>
    </div>
</section>