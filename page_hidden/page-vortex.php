<?php

/**
 * Template Name: page-vortex.
 */
?>

<?php get_header(); ?>

<header class="hero hero-classic" data-scroll-section>
    <div class="container hero_container">
        <h1><span><?php the_title() ?></span></h1>
        <div class="bg_acloud solution">
            <img src="http://localhost:8888/acloud/wp-content/uploads/2022/09/vortex_image.png" alt="Nuage">
        </div>
    </div>
</header>

<section class="two_paragraph_button" data-scroll-section>
    <div class="container-content">
        <h2>Nos totems</h2>
        <div class="col-2">
            <div>
                <p>Le Vortex vient compléter l’action des nuages Acloud® en élargissant la gamme des fréquences absorbées jusqu’aux basses fréquences. D’un design particulièrement épuré et aisément mobile, le Vortex s’intègre parfaitement dans les angles de votre salle de réunion ou de part et d’autre de l’écran de la salle de visioconférence.</p>
            </div>
            <div>
                <p>A la base du Vortex, un socle en hêtre naturel massif protège la partie basse, permet de le stabiliser et lui évite de recevoir des éclaboussures lors des opérations de nettoyage des sols. L’âme du Vortex est constitué d’une massive aiguille d’aluminium en croix facilitant la conduction et l’absorption des basses fréquences liées aux bruits d’impact sur le sol.</p>
            </div>
        </div>
        <a class="btn btn-primary" href="#">
            <svg width="26.197" height="26.197" viewBox="0 0 26.197 26.197">
            <g id="Layer_1" data-name="Layer 1">
                <g id="download">
                <path id="Tracé_4662" data-name="Tracé 4662" d="M28.11,20.869A1.11,1.11,0,0,1,27,19.759V1.11a1.11,1.11,0,0,1,2.22,0V19.759A1.11,1.11,0,0,1,28.11,20.869Z" transform="translate(-15.012)" fill="#fff"/>
                <path id="Tracé_4663" data-name="Tracé 4663" d="M20.325,36.435a1.106,1.106,0,0,1-.786-.324l-6.216-6.216a1.111,1.111,0,0,1,1.572-1.572l5.43,5.448,5.43-5.448a1.111,1.111,0,1,1,1.572,1.572L21.11,36.11A1.106,1.106,0,0,1,20.325,36.435Z" transform="translate(-7.226 -15.566)" fill="#fff"/>
                <path id="Tracé_4664" data-name="Tracé 4664" d="M25.087,56.22H1.11a1.11,1.11,0,1,1,0-2.22H25.087a1.11,1.11,0,1,1,0,2.22Z" transform="translate(0 -30.023)" fill="#fff"/>
                </g>
            </g>
            </svg>
            Fiche produit
        </a>
    </div>
</section>

<section class="text_image" data-scroll-section>
    <div class="container">
        <div class="col-2">
            <div>
                <h2>Existe en 4 coloris</h2>
                <p>Quo mollitia repellendus ea voluptatem iusto et consequatur dolorem sed voluptatibus quasi sed nihil nihil 33 alias illo eum modi quod. Aut vitae tempore a expedita quis At voluptates cumque ut facilis dolorem qui unde culpa?</p>
            </div>
            <div>
                <img src="http://localhost:8888/acloud/wp-content/uploads/2022/09/image_vortex.png" alt="Nuage">
            </div>
        </div>
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
