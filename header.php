<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&display=swap" rel="stylesheet" />
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>

        <div class="navbar1">
            <div class="container grid">
                <?php 
                    $logoId = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($logoId , 'full');

                    if (has_custom_logo()):
                ?>
                        <a class="logo" href="<?php echo esc_url(home_url()); ?>">
                            <img src="<?php echo esc_url($logo[0]); ?>" alt="Logo.">
                        </a>
                <?php
                    else:
                        echo '<p>' . get_bloginfo('name') . '</p>';
                    endif;
                ?>

                <div class="icon js-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'menu' => 'main_menu',
                            'container' => 'nav',
                            'container_class' => 'nav js-nav',
                            'items_wrap' => '<ul class="menu">%3$s</ul>'
                        )
                    );
                ?>
            </div>
        </div>