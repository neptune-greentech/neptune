<?php

/**
 * Template Name: page-equipe.
 */
?>

<?php get_header(); ?>

<header class="hero hero-besoin" data-scroll-section>
    <div class="container hero_container">
        <p><span><?php the_title() ?></span></p>
        <h1>L’équipe<br>Acloud</h1>
        <p class="introduction">Acloud® est né d’un constat et d’une vision que nous pourrions résumer autour des 5 lettres de notre nom</p>
    </div>
</header>

<section class="masonry">
    <div class="container">
        <div>
            <h2><span>A</span></h2>
            <p>Comme l’Ambition de son créateur, Stéphane Demguilhem, un entrepreneur et un inventeur passionné par les nouvelles technologies et le développement durable.</p>
        </div>
        <div>
            <h2><span>C</span></h2>
            <p>Comme le Confort sonore dont nous avons tous besoin pour travailler et vivre ensemble dans un espace partagé.</p>
        </div>
        <div>
            <h2><span>L</span></h2>
            <p>Comme la Liberté de chacun, qui s’arrête là ou l’autre commence à faire du bruit.</p>
        </div>
        <div>
            <h2><span>O</span></h2>
            <p>Comme une forme Optimale, celle des courbes du nuage, qui absorbent les sons avec beaucoup plus d’efficacité que les surfaces planes.</p>
        </div>
        <div>
            <h2><span>U</span></h2>
            <p>Comme une solution d’insonorisation Universelle, aérienne, et facile à installer, adaptée à tous les locaux et qui, contrairement à l’installation de panneaux acoustiques, ne perturbe pas l’organisation du travail.</p>
        </div>
        <div>
            <h2><span>D</span></h2>
            <p>Comme Développement Durable, avec un produit fabriqué en France, à l’aide de matériaux totalement neutres et dans une démarche de RSE.</p>
        </div>
    </div>
</section>

<section class="equipe">
    <div class="container">
        <div class="col-2">
            <div>
                <img src="http://localhost:8888/acloud/wp-content/uploads/2022/09/Stephane.jpg" alt="icone">
            </div>
            <div>
                <p>Stephane Demguilhem</p>
                <span>CEO d'Acloud</span>
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
