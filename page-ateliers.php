<?php

/**
 * Template Name: page-ateliers.
 */
?>

<?php get_header(); ?>

<header class="hero hero-besoin" data-scroll-section>
    <div class="container hero_container">
        <p><span><?php the_title() ?></span></p>
        <h1>Trop de bruit émis dans les<br> ateliers de production !</h1>
        <div class="bg_picture">
            <img src="http://localhost:8888/acloud/wp-content/uploads/2022/09/visuel_3D.png" alt="Nuage">
        </div>
    </div>
</header>

<section class="besoin">
    <div class="container">
        <h2>Les industriels et les pouvoirs publics se préoccupent depuis des décennies du bruit émis dans les ateliers de production. Le problème est-il résolu pour autant ?</h2>
        <div class="col-2">
            <div>
                <p>Malgré les améliorations apportées à la conception des machines, le niveau de bruit augmente régulièrement du fait des augmentations de cadences de production. La plupart des processus de fabrication ont doublé de cadence en quelques décennies, par augmentation des vitesses des lignes de production, de la taille des matrices, etc. Les personnels de production sont exposés à des niveaux sonores croissants. La raison en est que l’émission de bruit augmente </p>
            </div>
            <div>
                <p>exponentiellement avec la vitesse de rotation ou de déplacement des produits et parties de machines. À titre d’exemple, une presse d’impression quadruple son émission sonore lorsqu’on double sa vitesse. Le dispositif Acoustik Rain est conçu pour venir « chapeauter » le poste de travail afin de capter la majorité des bruits issus de la source d’émission avant qu’ils ne se diffusent dans l’atelier.</p>
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
