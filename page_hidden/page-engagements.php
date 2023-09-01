<?php

/**
 * Template Name: page-engagements.
 */
?>

<?php get_header(); ?>

<header class="hero hero-besoin" data-scroll-section>
    <div class="container hero_container">
        <p><span><?php the_title() ?></span></p>
        <h1>Notre engagement sociétal</h1>
    </div>
</header>

<section class="text_image" data-scroll-section>
    <div class="container">
        <div class="col-2">
            <div>
                <p>Désireuse d’aller plus loin dans sa démarche de sensibilisation aux nuisances sonores et à leurs conséquences sur la santé, la société Acloud® a décidé de distribuer chaque année une partie des bénéfices qu’elle réalise sur la vente des nuages Acloud® à divers organismes oeuvrant dans le domaine de l’aide à la petite enfance.</p>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() . '/src/images/cloud.png';?>" alt="Image 3D">
            </div>
        </div>
    </div>
</section>

<section class="listeicon listeicon_white" data-scroll-section>
    <div class="container">
        <div class="grid">
            <div>
                <img src="<?php echo get_template_directory_uri() . '/src/images/icon_leger.png';?>" alt="icone">
                <h3>Léger et universel</h3>
                <p>Les nuages et solutions Acloud® s’installent facilement, sur n’importe quel type de plafond, sans gros travaux et sans perturber votre activité.</p>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() . '/src/images/icon_modulable.png';?>" alt="icone">
                <h3>Modulable et réutilisable</h3>
                <p>Les produits Acloud® s’adaptent à toutes vos problématiques de nuisances sonores et sont facilement déplaçables si vous changez d’aménagement ou de locaux.</p>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri() . '/src/images/icon_resultats.png';?>" alt="icone">
                <h3>Résultats garantis</h3>
                <p>Un protocole acoustique comprenant des mesures in situ avant/après des locaux àtraiter qui vous garanti d’être en conformité avec les réglementations en vigueur.</p>
            </div>
        </div>
        <div class="information">
            <p>Notre protocole permet de cibler un objectif clair correspondant aux normes AFNOR* et de valider les progrès obtenus après l’installation.<br>
            * Les normes AFNOR constituent des standards parfois légalement obligatoires pour les entreprises, les administrations ou les associations</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
