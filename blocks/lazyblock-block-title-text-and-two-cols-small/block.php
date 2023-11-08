<section class="section18">
    <div class="container max grid">
        <?php if (!empty($attributes['title'])) : ?>
            <h2><?php $attributes['title']; ?></h2>
        <?php endif; ?>
        <?php if (!empty($attributes['description'])) : ?>
            <p class="text"><?php $attributes['description']; ?></p>
        <?php endif; ?>
        <div class="grid-2">
            <?php foreach($attributes['repeater'] as $inner): ?>
                <div>
                    <?php if (!empty($inner['subtitle'])) : ?>
                        <h3><?php $inner['subtitle']; ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($inner['sub-description'])) : ?>
                        <p><?php $inner['sub-description']; ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</header>