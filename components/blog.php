<header class="hero hero-page hero-blog" data-scroll-section>
    <div class="container hero_container">
        <div class="content_page">
            <span class="anim_overlay"></span>
            <?php $page = get_queried_object(); ?>
            <h1 class="anim_title"><?php echo $page->post_title; ?></h1>
        </div>
    </div>
</header>

<section class="list_blog wp-block-lazyblock-section-actualites">
    <div class="container">
        <div class="blog_item">
            <?php
            $argsPost = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => -1
            );

            $queryPost = new WP_Query($argsPost);

            if ($queryPost->have_posts()) :
                while ($queryPost->have_posts()) :
                    $queryPost->the_post(); ?>

                    <a href="<?php echo the_permalink(); ?>" class="actu_content">
                        <div>
                            <?php echo get_the_post_thumbnail(); ?>
                            <span class="anim_overlay"></span>
                        </div>
                        <div>
                            <h3 class="anim_opacity2">
                                <?php echo the_title(); ?>
                            </h3>
                            <span class="anim_opacity2"><?php echo get_the_date(); ?></span>
                            <div class="card_text">
                                <?php echo the_excerpt(); ?>
                            </div>
                        </div>
                        <button onclick="location.href='<?php echo the_permalink(); ?>'" class="btn btn-primary">Voir l'article
                            <svg width="26.945" height="18.255" viewBox="0 0 26.945 18.255">
                                <g id="Groupe_329" data-name="Groupe 329" transform="translate(2 2.823)">
                                    <line id="Ligne_1" data-name="Ligne 1" x2="20.815" transform="translate(0 6.316)" fill="none" stroke="#f0f0f0" stroke-linecap="round" stroke-width="4"></line>
                                    <path id="Tracé_1" data-name="Tracé 1" d="M1194.727,920.5l7.092,6.3-7.092,6.3" transform="translate(-1178.873 -920.499)" fill="none" stroke="#f0f0f0" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"></path>
                                </g>
                            </svg>
                        </button>
                    </a>

                <?php
                endwhile;
            else : ?>
                <p>Aucune actualité n'a été trouvée.</p>
            <?php
            endif;
            wp_reset_postdata(); ?>

        </div>
    </div>
</section>