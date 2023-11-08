<section class="section10">
    <div class="container grid">
        <?php foreach($attributes['repeater'] as $inner): ?>
            <?php if (!empty($inner['subtitle'])) : ?>
                <h2><?php $inner['subtitle']; ?></h2>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>