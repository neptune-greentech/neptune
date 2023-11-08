<section class="layering <?= $attributes['reverse'] ? 'reverse' : ''  ?> <?= $attributes['background'] ? 'bg' : ''  ?>">
    <div class="container grid">
        <?php if (!empty($attributes['title'])) : ?>
            <h2><?= $attributes['title']; ?></h2>
        <?php endif; ?>

        <div class="cols">
            <div>
            <?php if (isset($attributes['image']['url'])) : ?>
                <img src="<?= esc_url($attributes['image']['url']); ?>" alt="<?= esc_attr($attributes['image']['alt']); ?>">
            <?php endif; ?>
            </div>
            <div class="card">
                <h3><?= $attributes['subtitle']; ?></h3>
                <p><?= $attributes['description']; ?></p>
                <?php if (!empty($attributes['link'])) : ?>
                    <a class="btn btn-secondary" href="<?= esc_url($attributes['link']); ?>"><?= $attributes['button']; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>