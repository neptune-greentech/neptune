<?php get_header(); ?>

<header class="hero bg">
    <div class="container grid">
        <h1><?php echo single_cat_title(); ?></h1>
    </div>
</header>

<section class="blog">
    <div class="container">
        <?php
            $cat_id = get_query_var('cat');

            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC',
                'cat' => $cat_id
            );

            $query = new WP_Query($args);
        
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>
                    <div class="col-2 blog_item">
                        <div class="col">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                        <div class="col">
                            <h2><?php the_title(); ?></h2>
                            <?php the_excerpt(); ?>
                            <ul>
                                <li><?php the_date(); ?></li>
                                <li><?php the_category(', '); ?></li>
                            </ul>
                            <a class="btn btn-secondary" href="<?php the_permalink(); ?>">Read more</a>
                        </div>
                    </div>

				    <span></span>
		    <?php
                endwhile;
            endif; 
            
            wp_reset_postdata();
            ?>
    </div>
</section>

<?php get_footer(); ?>