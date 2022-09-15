<nav class="nav nav_two">
    <div class="container nav_container">

        <div class="search_top">
            <a href="#" class="button mytogglebutton">
                <img src="http://localhost:8888/acloud/wp-content/themes/neptune/src/images/icon-search.svg" alt="Icone search">
            </a>
            <div class="myhiddenthing">
                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                    <label>
                        <input type="search" class="search-field" placeholder="Rechercher" value="" name="s"/>
                    </label>
                    <input type="submit" class="search-submit" value="Search" />
                    <a href="#" class="button myclosebutton">
                        <img src="http://localhost:8888/acloud/wp-content/themes/neptune/src/images/close.svg" alt="Icone close">
                    </a>
                </form>
            </div>
        </div>

        <div class="logo_mobile">
            <a href="<?= home_url(); ?>">
                <img src="http://localhost:8888/acloud/wp-content/uploads/2022/09/logo-acloud.png" alt="Logo Acloud">
            </a>
        </div>
        
        <div class="nav_icon">
            <span></span>
            <span></span>
        </div>

        <?php
            wp_nav_menu(
                array(
                    'menu' => 'secondary_menu',
                    'container' => 'div',
                    'container_class' => 'nav_menu',
                    'items_wrap' => '<ul class="container">%3$s</ul>',
                    'theme_location' => 'secondary_menu'
                )
            );
        ?>

        <div class="nav_contact">
            <a class="btn_contact" href="<?php echo bloginfo('url') ?>/nous-contacter/">Nous contacter</a>
        </div>

    </div>
</nav>