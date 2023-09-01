<nav class="nav">
    <div class="container nav_container">

        <?php 
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        if ( has_custom_logo() ) {
        ?>
            <a class="nav_logo" href="<?= home_url(); ?>">
                <img src="<?= esc_url($logo[0]); ?>" alt="Logo.">
            </a>
        <?php
        } else {
            echo '<p>' . get_bloginfo('name') . '</p>';
        }
        ?>

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