<?php

/**
 * Template Name: page-concept.
 */
?>

<?php get_header(); ?>

<header class="hero hero-besoin" data-scroll-section>
    <div class="container hero_container">
        <p><span><?php the_title() ?></span></p>
        <h1>Le bruit est une nuisance<br> permanente au cœur de nos vies.</h1>
        <p class="introduction">Avec Acloud®, il existe désormais des solutions d’absorption phoniques, modulables, esthétiques, durables et abordables !</p>
    </div>
</header>

<section class="text_image_long" data-scroll-section>
    <div class="container">
        <div class="col-2">
            <div>
                <h2>Des produits français qui oncilient confort et développement durable</h2>
                <p>Fabriqués en Charentes et dans une démarche de RSE (Responsabilité Sociétale des Entreprises), les solutions Acloud® sont réalisées à l’aide d’une ouate acoustique issue d’une filière de recyclage, totalement neutre pour l’environnement (tests FCBA). Également, les tests COV (Composés Organiques Volatiles) réalisés, démontrent une absence totale de formaldéhyde. Les tests de résistance au feu Euroclasses indiquent quant à eux, que le produit est classé B, s2, d0 (équivalent M1). Cette ouate acoustique a aussi la capacité de transmettre la lumière et donc de l’information, une caractéristique importante mise à profit dans le modèle Acloud® Connect.</p>
            </div>
            <div>
                <img src="http://localhost:8888/acloud/wp-content/uploads/2022/09/concept.png" alt="Image 3D">
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
