<section class="section15">
    <div class="container grid-2">
        <?php foreach($attributes['repeater'] as $inner): ?>
            <div style="background-image: url('<?= esc_url($inner['image']['url']); ?>')">
                <?php if (!empty($inner['subtitle'])) : ?>
                    <h3><?= $inner['subtitle']; ?></h3>
                <?php endif; ?>
                <?php if (!empty($inner['sub-description'])) : ?>
                    <p class="text"><?= $inner['sub-description']; ?></p>
                <?php endif; ?>
                <?php if (!empty($inner['link'])) : ?>
                    <a class="btn btn-tertiary" href="<?= esc_url($inner['link']); ?>"><?= $inner['button']; ?></a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</header>

