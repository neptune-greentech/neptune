<?php

/**
 * Template Name: page-contact.
 */
?>

<?php get_header(); ?>

<header class="hero hero-page" data-scroll-section>
    <div class="container hero_container">
        <div class="content_page">
            <h1><?php the_title() ?></h1>
        </div>
    </div>
</header>

<section class="coordonnees">
    <div class="container-content">
        <span>Acloud®</span>
        <div class="col-2">
            <div class="informations">
                <div class="bloc_info">
                    <p>
                        Darwin Ecosystème<br> 
                        87 Quais de Queyries<br> 
                        Bordeaux 33100
                    </p>
                </div>
                <div class="bloc_info">
                    <p>
                        contact@a-cloud.fr<br> 
                        05 35 54 77 32              
                    </p>
                </div>
            </div>
            <div>
                <a class="btn btn-primary" data-scroll-to href="#contact">Formulaire de contact
                    <svg width="13.501" height="20.243" viewBox="0 0 13.501 20.243">
                        <path id="Icon_ionic-ios-arrow-round-forward" data-name="Icon ionic-ios-arrow-round-forward" d="M20.784,11.51a.919.919,0,0,0-.007,1.294l4.275,4.282H8.782a.914.914,0,0,0,0,1.828H25.045L20.77,23.2a.925.925,0,0,0,.007,1.294.91.91,0,0,0,1.287-.007l5.794-5.836h0a1.026,1.026,0,0,0,.19-.288.872.872,0,0,0,.07-.352.916.916,0,0,0-.26-.64l-5.794-5.836A.9.9,0,0,0,20.784,11.51Z" transform="translate(24.753 -7.875) rotate(90)" fill="#f0eceb"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="contact" id="contact">
    <div class="container-content">
        <h2>Dites-nous comment nous pouvons vous aider.</h2>  
        <?php echo do_shortcode('[contact-form-7 id="170" title="Formulaire de contact"]'); ?>
    </div>
</section>

<?php get_footer(); ?>
