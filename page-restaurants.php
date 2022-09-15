<?php

/**
 * Template Name: page-restaurants.
 */
?>

<?php get_header(); ?>

<header class="hero hero-besoin" data-scroll-section>
    <div class="container hero_container">
        <p><span><?php the_title() ?></span></p>
        <h1>Quel dommage qu’il y ait du<br>bruit dans ce restaurant !</h1>
        <div class="bg_picture">
            <img src="http://localhost:8888/acloud/wp-content/uploads/2022/09/visuel_3D.png" alt="Nuage">
        </div>
    </div>
</header>

<section class="besoin">
    <div class="container">
        <h2>Conversations, bruits de couverts, va-et-vient…</h2>
        <div class="col-2">
            <div>
                <p>La vie d’un restaurant est propice à un niveau de nuisances sonores pouvant s’avérer être aussi rédhibitoire pour les clients, que dangereuse pour ceux qui y travaillent. Or, d’une manière générale, les restaurants souhaitent optimiser l’espace disponible pour y installer le plus de tables possibles, et ce afin d’accroître leur chiffre d’affaires ou, s’il s’agit de restauration scolaire ou d’entreprise, d’accueillir un maximum de personnes aux heures de pointe. Dans le même temps, la tendance de l’Open-Kitchen, qui tend à décloisonner les cuisines</p>
            </div>
            <div>
                <p>pour y faire entrer visuellement le client d’un restaurant, a accru le risque de faire du bruit, un point négatif pour un établissement. Fort de ces constatations, Acloud® a développé la solution idéale, à la fois esthétique et modulable, pour remédier aux problèmes de bruits dans un restaurant. Fixés au plafond, nos nuages s’intègrent parfaitement dans toutes les décorations et ne viennent en rien perturber la vie ou l’aménagement du restaurant.</p>
            </div>
        </div>
    </div>
</section>

<section class="banner_image">
    <div class="container">
        <img src="http://localhost:8888/acloud/wp-content/uploads/2022/09/RESTAURANT_GRIS.png" alt="Nuage">
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
