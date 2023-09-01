<?php

/**
 * Template Name: page-collectivites.
 */
?>

<?php get_header(); ?>

<header class="hero hero-besoin" data-scroll-section>
    <div class="container hero_container">
        <p><span><?php the_title() ?></span></p>
        <h1>A l'école,<br> le bruit est partout !</h1>
        <p class="introduction">Il suffit d’entrer dans une cour de récréation pour se rendre compte du niveau sonore auxquels les enfants sont exposés chaque jour, dès le plus jeune âge.</p>
        <div class="bg_picture">
            <img src="http://localhost:8888/acloud/wp-content/uploads/2022/09/visuel_3D.png" alt="Nuage">
        </div>
    </div>
</header>

<section class="besoin">
    <div class="container">
        <h2>Fatigue, énervement, pleurs… dans une crèche, bien souvent, l’espace est compté, et un enfant a bien du mal à récupérer, même pendant les temps de repos. </h2>
        <div class="col-2">
            <div>
                <p>Plus d’un enfant sur deux se plaint du bruit à l’école, et le temps passé par les animateurs à tenter de rétablir le silence ne fait que contribuer à la fatigue générale, rendant encore plus intolérables les effets du bruit ambiant.</p>
            </div>
            <div>
                <p>non seulement les oreilles, mais aussi les yeux des enfants. Grâce à sa forme douce et ronde, le nuage présente le double avantage de bloquer les bruits et d’apporter un décor propice au sommeil et au développement de l’imaginaire</p>
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
