<section class="section11">
    <div class="container grid-2">
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
            </div>
        <?php endforeach; ?>
    </div>
</section>