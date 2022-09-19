<?php

/**
 * Template Name: page-home.
 */
?>

<?php get_header('home'); ?>

<section class="layering_center" data-scroll-section>
    <div class="container">
        <span class="subtitle">Vos besoins</span>
        <p>Grâce aux solutions Acloud® vous pourrez concilier confort, développement durable et design en un seul produit d'absorption phonique</p>
        <ul>
            <li><span></span>Facile à installer</li>
            <li><span></span>Economique</li>
            <li><span></span>Eco-conçu</li>
        </ul>
        <div class="bg_image">
            <img src="<?php echo get_template_directory_uri() . '/src/images/image_1.png';?>" alt="Image 3D">
        </div>
    </div>
</section>

<?php include_once locate_template('/components/listeicon.php'); ?>

<section class="modulaire" data-scroll-section>
    <div class="container">
        <div class="col-2">
            <div>
                <span class="subtitle">Modulaire</span>
                <h2>Pour tout type de projet et d'installation</h2>
                <p>Nos nuages s’adaptent à toutes vos problématiques d’isolation. Ils sont réutilisables si vous changez d’aménagement ou de locaux.</p>
            </div>
            <div class="bloc_image">
                <div class="embla">
                    <div class="embla__viewport">
                        <div class="embla__container">
                            <div class="embla__slide">
                                <div class="embla__slide__inner">
                                    <img class="embla__slide__img" src="<?= get_stylesheet_directory_uri() ?>/src/images/slider_1.png" />
                                </div>
                            </div>
                            <div class="embla__slide">
                                <div class="embla__slide__inner">
                                    <img class="embla__slide__img" src="<?= get_stylesheet_directory_uri() ?>/src/images/slider_2.png" />
                                </div>
                            </div>
                            <div class="embla__slide">
                                <div class="embla__slide__inner">
                                    <img class="embla__slide__img" src="<?= get_stylesheet_directory_uri() ?>/src/images/slider_1.png" />
                                </div>
                            </div>
                            <div class="embla__slide">
                                <div class="embla__slide__inner">
                                    <img class="embla__slide__img" src="<?= get_stylesheet_directory_uri() ?>/src/images/slider_2.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="embla__button embla__button--prev embla__prev" type="button">
                        <img src="<?= get_stylesheet_directory_uri() ?>/src/images/arrow-left.svg" alt="">
                    </button>
                    <button class="embla__button embla__button--next embla__next" type="button">
                        <img src="<?= get_stylesheet_directory_uri() ?>/src/images/arrow-right.svg" alt="">
                    </button>
                </div>
            </div>
        </div>
</section>

<?php include_once locate_template('/components/gammes.php'); ?>

<?php include_once locate_template('/components/produits.php'); ?>

<section class="actualite" data-scroll-section>
    <div class="container">
        <span class="subtitle">Actualités</span>
        <h2>Nos derniers <span>articles</span></h2>
        <div class="col-3">
            <?php wp_reset_postdata(); ?>
                <?php $args = array(
                    'post_type'              => array('post'),
                    'posts_per_page'         => '3',
                    'order'                  => 'DESC',
                );
                $loop0 = new WP_Query( $args );
                $count = 0;
                if ( $loop0->have_posts() ) {
                    while ( $loop0->have_posts() ) {
                        $loop0->the_post();
            { ?>
            <a href="<?php echo the_permalink(); ?>" title="Lien vers l'article" class="actu_content">
                <?php echo get_the_post_thumbnail();?>
                <div>
                    <h3>
                       <?php echo the_title(); ?>
                    </h3> 
                    <span><?php echo get_the_date(); ?></span>
                    <div class="card_text">
                        <?php echo the_excerpt(); ?>
                    </div>
                </div>
            </a>
            <?php
            } }
                } else {
            }
            wp_reset_postdata();?>
        </div>
    </div>
    <div class="container">
        <a class="more" href="#">Tous nos articles</a>
    </div>
</section>

<?php include_once locate_template('/components/testimonials.php'); ?>

<?php get_footer(); ?>
