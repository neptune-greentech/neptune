<section class="section20">
    <div class="container grid">
        <div class="grid-3">
            <?php foreach($attributes['repeater'] as $inner): ?>
                <div>
                    <?php if (isset($inner['image']['url'])) : ?>
                        <img src="<?= esc_url($inner['image']['url']); ?>" alt="<?= esc_attr($inner['image']['alt']); ?>">
                    <?php endif; ?>
                    <?php if (!empty($inner['subtitle'])) : ?>
                        <h3><?= $inner['subtitle']; ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($inner['sub-description'])) : ?>
                        <p class="text"><?= $inner['sub-description']; ?></p>
                    <?php endif; ?>
                    <?php if (!empty($inner['link'])) : ?>
                        <a class="btn btn-primary" href="<?= esc_url($inner['link']); ?>"><?= $inner['button']; ?></a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>