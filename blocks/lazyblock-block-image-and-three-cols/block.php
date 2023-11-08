<section class="section9">
    <div class="container grid">
        <?php if (isset($attributes['image']['url'])) : ?>
            <img src="<?= esc_url($attributes['image']['url']); ?>" alt="<?= esc_attr($attributes['image']['alt']); ?>">
        <?php endif; ?>
        <div class="grid-3">
            <?php foreach($attributes['repeater'] as $inner): ?>
                <div>
                    <?php if (!empty($inner['subtitle'])) : ?>
                        <h3><?= $inner['subtitle']; ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($inner['sub-description'])) : ?>
                        <p><?= $inner['sub-description']; ?></p>
                    <?php endif; ?>
                    <?php if (!empty($inner['link'])) : ?>
                        <a class="btn btn-primary" href="<?= esc_url($inner['link']); ?>"><?= $inner['button']; ?></a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</header>
