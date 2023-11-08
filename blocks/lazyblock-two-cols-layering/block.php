<section class="layering <?php $attributes['reverse'] ? 'reverse' : ''  ?> <?php $attributes['background'] ? 'bg' : ''  ?>">
    <div class="container grid">
        <?php if (!empty($attributes['title'])) : ?>
            <h2><?php $attributes['title']; ?></h2>
        <?php endif; ?>

        <div class="cols">
            <div>
            <?php if (isset($attributes['image']['url'])) : ?>
                <img src="<?php esc_url($attributes['image']['url']); ?>" alt="<?php esc_attr($attributes['image']['alt']); ?>">
            <?php endif; ?>
            </div>
            <div class="card">
                <h3><?php $attributes['subtitle']; ?></h3>
                <p><?php $attributes['description']; ?></p>
                <?php if (!empty($attributes['link'])) : ?>
                    <a class="btn btn-secondary" href="<?php esc_url($attributes['link']); ?>"><?php $attributes['button']; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>