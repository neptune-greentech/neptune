<section class="section5 <?= $attributes['center'] ? 'center' : ''  ?>">
    <div class="container grid">
        <?php if (!empty($attributes['title'])) : ?>
            <h2><?= $attributes['title']; ?></h2>
        <?php endif; ?>
        <?php if (!empty($attributes['description'])) : ?>
            <p class="text"><?= $attributes['description']; ?></p>
        <?php endif; ?>
        <div class="grid-4">
            <?php foreach($attributes['repeater'] as $inner): ?>
                <div>
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