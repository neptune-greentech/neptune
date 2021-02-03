    <footer class="footer bg">
        <div class="container footer_container">

            <a class="footer_logo" href="<?= home_url(); ?>">
                <img src="<?php echo get_template_directory_uri() . '/dist/images/logo-neptune.png';?>" alt="Logo Neptune.">
            </a>

            <?php
            wp_nav_menu(
                array(
                    'menu' => 'main_menu',
                    'container' => 'div',
                    'container_class' => 'footer_menu',
                    'items_wrap' => '<ul>%3$s</ul>'
                )
            );
            ?>

            <ul class="footer_social">
				<?php if(get_theme_mod('neptune_social_facebook')) :?>
					<li>
						<a href="<?php echo esc_url(get_theme_mod('neptune_social_facebook')); ?>">
							<img src="<?php echo get_template_directory_uri() . '/dist/images/icon-facebook.png'; ?>" alt="">
						</a>
					</li>
				<?php endif; ?>
				<?php if(get_theme_mod('neptune_social_instagram')) :?>
                <li>
                    <a href="<?php echo esc_url(get_theme_mod('neptune_social_instagram')); ?>">
                        <img src="<?php echo get_template_directory_uri() . '/dist/images/icon-instagram.png'; ?>" alt="">
                    </a>
				</li>
				<?php endif; ?>
				<?php if(get_theme_mod('neptune_social_linkedin')) :?>
                <li>
                    <a href="<?php echo esc_url(get_theme_mod('neptune_social_linkedin')); ?>">
                        <img src="<?php echo get_template_directory_uri() . '/dist/images/icon-linkedin.png'; ?>" alt="">
                    </a>
				</li>
				<?php endif; ?>
				<?php if(get_theme_mod('neptune_social_twitter')) :?>
                <li>
                    <a href="<?php echo esc_url(get_theme_mod('neptune_social_twitter')); ?>">
                        <img src="<?php echo get_template_directory_uri() . '/dist/images/icon-twitter.png'; ?>" alt="">
                    </a>
				</li>
				<?php endif; ?>
            </ul>

        </div>
    </footer>

<?php wp_footer(); ?>

</body>

</html>
