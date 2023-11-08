<section class="layering <?php echo $attributes['reverse'] ? 'reverse' : ''  ?> <?php echo $attributes['background'] ? 'bg' : ''  ?>">
    <div class="container grid">
        <?php if (!empty($attributes['title'])) : ?>
            <h2><?php echo $attributes['title']; ?></h2>
        <?php endif; ?>

        <div class="cols">
            <div>
            <?php if (isset($attributes['image']['url'])) : ?>
                <img src="<?php echo esc_url($attributes['image']['url']); ?>" alt="<?php echo esc_attr($attributes['image']['alt']); ?>">
            <?php endif; ?>
            </div>
            <div class="card">
                <h3><?php echo $attributes['subtitle']; ?></h3>
                <p><?php echo $attributes['description']; ?></p>
                <?php if (!empty($attributes['link'])) : ?>
                    <a class="btn btn-secondary" href="<?php echo esc_url($attributes['link']); ?>"><?php echo $attributes['button']; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>