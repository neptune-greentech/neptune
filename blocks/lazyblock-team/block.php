<section>
    <div class="container">

        <h2><?php echo $attributes['team_title']; ?></h2>

        <div class="col-3 team">

			<?php foreach( $attributes['teamates'] as $teamate): ?>
				<div class="col team_item">
					<?php if(isset($teamate['teamate_picture']['id'])) : ?>
						<?php echo wp_get_attachment_image( $teamate['teamate_picture']['id'], 'large'); ?>
					<?php endif; ?>
					<div>
						<p><?php echo $teamate['teamate_job']; ?></p>
						<h3><?php echo $teamate['teamate_name']; ?></h3>
						<p><?php echo $teamate['teamate_description']; ?></p>
						<span></span>
						<ul>
							<?php if($teamate['teamate_facebook_link']) : ?>
								<li>
									<a href="<?php echo $teamate['teamate_facebook_link']; ?>">
										<img src="<?php echo get_template_directory_uri() . '/dist/images/icon-facebook.png'?>" alt="">
										<?php echo $teamate['teamate_facebook_name']; ?>
									</a>
								</li>
							<?php endif; ?>

							<?php if($teamate['teamate_instagram_link']) : ?>
								<li>
									<a href="<?php echo $teamate['teamate_instagram_link']; ?>">
										<img src="<?php echo get_template_directory_uri() . '/dist/images/icon-instagram.png'?>" alt="">
										<?php echo $teamate['teamate_instagram_name']; ?>
									</a>
								</li>
							<?php endif; ?>

							<?php if($teamate['teamate_linkedin_link']) : ?>
								<li>
									<a href="<?php echo $teamate['teamate_linkedin_link']; ?>">
										<img src="<?php echo get_template_directory_uri() . '/dist/images/icon-linkedin.png'?>" alt="">
										<?php echo $teamate['teamate_linkedin_name']; ?>
									</a>
								</li>
							<?php endif; ?>

							<?php if($teamate['teamate_twitter_link']) : ?>
								<li>
									<a href="<?php echo $teamate['teamate_twitter_link']; ?>">
										<img src="<?php echo get_template_directory_uri() . '/dist/images/icon-twitter.png'?>" alt="">
										<?php echo $teamate['teamate_twitter_name']; ?>
									</a>
								</li>
							<?php endif; ?>

						</ul>
					</div>
				</div>
			<?php endforeach; ?>
        </div>

    </div>
</section>