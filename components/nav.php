<nav class="nav">
    <div class="container nav_container">

        <a class="nav_logo" href="<?= home_url(); ?>">
            <img src="<?php echo get_template_directory_uri() . '/dist/images/logo-neptune.png'; ?>" alt="Logo Neptune.">
        </a>

        <div class="nav_icon">
            <span></span>
            <span></span>
        </div>

        <?php
        wp_nav_menu(
            array(
                'menu' => 'main_menu',
                'container' => 'div',
                'container_class' => 'nav_menu',
                'items_wrap' => '<ul class="container">%3$s</ul>'
            )
        );
        ?>

    </div>
</nav>