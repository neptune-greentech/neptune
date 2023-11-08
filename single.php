<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <header class="hero hero-article">
        <div class="container hero_container">

            <p><?php the_date(); ?> - <?php the_category(', '); ?>

            <h1><?php the_title(); ?></h1>

            <?php the_post_thumbnail('large', ['class' => 'hero_img']); ?>

        </div>

        <span class="hero_overlay"></span>
    </header>

    <section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="container article_container">

            <?php the_content(); ?>

        </div>
    </section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
