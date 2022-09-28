<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <header class="hero hero-article">
            <div class="container hero_container">
                <p class="anim_opacity"><span>Article</span></p>
                <h1 class="anim_title"><?php the_title(); ?></h1>
                <div class="anim_opacity2 introduction"><?php echo the_excerpt(); ?></div>
                <?php the_post_thumbnail('large', ['class' => 'hero_img']); ?>
            </div>
        </header>

        <section class="article">
            <div class="container article_container">
                <?php the_content(); ?>
            </div>
        </section>

        <section class="listeicon listeicon_white wp-block-lazyblock-sections-listes-and-icones" data-scroll-section>
            <div class="container">
                <div class="grid">
                    <div class="anim_scale">
                        <img src="<?php echo get_template_directory_uri() . '/src/images/icon_leger.png'; ?>" alt="icone">
                        <h3>Léger et universel</h3>
                        <p>Les nuages et solutions Acloud® s’installent facilement, sur n’importe quel type de plafond, sans gros travaux et sans perturber votre activité.</p>
                    </div>
                    <div class="anim_scale">
                        <img src="<?php echo get_template_directory_uri() . '/src/images/icon_modulable.png'; ?>" alt="icone">
                        <h3>Modulable et réutilisable</h3>
                        <p>Les produits Acloud® s’adaptent à toutes vos problématiques de nuisances sonores et sont facilement déplaçables si vous changez d’aménagement ou de locaux.</p>
                    </div>
                    <div class="anim_scale">
                        <img src="<?php echo get_template_directory_uri() . '/src/images/icon_resultats.png'; ?>" alt="icone">
                        <h3>Résultats garantis</h3>
                        <p>Un protocole acoustique comprenant des mesures in situ avant/après des locaux àtraiter qui vous garanti d’être en conformité avec les réglementations en vigueur.</p>
                    </div>
                </div>
                <div class="information">
                    <p class="anim_opacity2">Notre protocole permet de cibler un objectif clair correspondant aux normes AFNOR* et de valider les progrès obtenus après l’installation.<br>
                        * Les normes AFNOR constituent des standards parfois légalement obligatoires pour les entreprises, les administrations ou les associations</p>
                </div>
            </div>
        </section>

<?php endwhile;
endif; ?>