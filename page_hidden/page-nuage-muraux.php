<?php

/**
 * Template Name: page-nuage-muraux.
 */
?>

<?php get_header(); ?>

<header class="hero hero-classic" data-scroll-section>
    <div class="container hero_container">
        <h1><span><?php the_title() ?></span></h1>
        <div class="bg_acloud">
            <img src="<?php echo get_template_directory_uri() . '/src/images/fond_nuage.png';?>" alt="Nuage">
            <a class="btn btn-primary" data-scroll-to href="#scroll">En savoir plus
            <svg width="18.255" height="17.668" viewBox="0 0 18.255 17.668">
                <g id="Groupe_3575" data-name="Groupe 3575" transform="translate(15.431 2) rotate(90)">
                    <line id="Ligne_1" data-name="Ligne 1" x2="11.538" transform="translate(0 6.316)" fill="none" stroke="#f0f0f0" stroke-linecap="round" stroke-width="4"/>
                    <path id="Tracé_1" data-name="Tracé 1" d="M1194.727,920.5l7.092,6.3-7.092,6.3" transform="translate(-1188.151 -920.499)" fill="none" stroke="#f0f0f0" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                </g>
            </svg>
            </a>
        </div>
    </div>
</header>

<section class="text_center" id="scroll" data-scroll-section>
    <div class="container">
        <h2>Nos nuages muraux</h2>
        <p>Les nuages muraux sont des dispositifs verticaux dotés de systèmes de fixation spécifiques permettant une accroche sur les murs et venant ainsi compléter l’action des nuages suspendus.</p>
    </div>
</section>

<?php include_once locate_template('/components/gallery.php'); ?>

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
