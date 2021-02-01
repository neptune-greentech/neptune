    <footer class="footer bg">
        <div class="container footer_container">
        
            <a class="footer_logo" href="<?= home_url(); ?>">
                <img src="http://localhost:8888/neptune/wp-content/uploads/2021/01/logo-neptune.png" alt="Logo Neptune.">
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
                <li>
                    <a href="#">
                        <img src="http://localhost:8888/neptune/wp-content/uploads/2021/02/icon-facebook.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="http://localhost:8888/neptune/wp-content/uploads/2021/02/icon-instagram.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="http://localhost:8888/neptune/wp-content/uploads/2021/01/icon-linkedin.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="http://localhost:8888/neptune/wp-content/uploads/2021/01/icon-twitter.png" alt="">
                    </a>
                </li>
            </ul>

        </div>
    </footer>

<?php wp_footer(); ?>

</body>

</html>
