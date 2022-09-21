    <footer class="footer bg">
        <div class="container footer_container">
            <div class="col-4">
                <div>
                    <a class="footer_logo" href="<?= home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri() . '/src/images/logo_footer.svg';?>" alt="Logo Acloud.">
                    </a>
                </div>
                <div>
                    <?php dynamic_sidebar('Sidebar footer lien 1'); ?>
                </div>
                <div>
                    <?php dynamic_sidebar('Sidebar footer lien 2'); ?>
                </div>
                <div>
                    <?php dynamic_sidebar('Sidebar footer lien 3'); ?>
                </div>
            </div>
        </div>
        <div class="container footer_bottom">
            <p>© 2022 Acloud® Copyright - <a href="<?php echo bloginfo('url'); ?>/epicure-conseils/">Epicure Conseils</a> - <a href="<?php echo bloginfo('url'); ?>/politique-de-confidentialite/">Politique de confidentialités</a> - <a href="<?php echo bloginfo('url'); ?>/mentions-legales">Mentions légales</a></p>
        </div>  
    </footer>

    <?php wp_footer(); ?>
    
    </div>
</body>

</html>
