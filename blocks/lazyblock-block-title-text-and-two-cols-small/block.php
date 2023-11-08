<section class="section18">
    <div class="container max grid">
        <?php if (!empty($attributes['title'])) : ?>
            <h2><?= $attributes['title']; ?></h2>
        <?php endif; ?>
        <?php if (!empty($attributes['description'])) : ?>
            <p class="text"><?= $attributes['description']; ?></p>
        <?php endif; ?>
        <div class="grid-2">
            <?php foreach($attributes['repeater'] as $inner): ?>
                <div>
                    <?php if (!empty($inner['subtitle'])) : ?>
                        <h3><?= $inner['subtitle']; ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($inner['sub-description'])) : ?>
                        <p><?= $inner['sub-description']; ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</header>