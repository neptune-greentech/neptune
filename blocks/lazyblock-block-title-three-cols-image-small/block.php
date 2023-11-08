<section class="section21">
    <div class="container max grid">
        <?php if (!empty($attributes['title'])) : ?>
            <h2><?php echo $attributes['title']; ?></h2>
        <?php endif; ?>
        <div class="grid-3">
            <?php foreach($attributes['repeater'] as $inner): ?>
                <?php if (!empty($attributes['subtitle'])) : ?>
                    <h3><?php echo $attributes['subtitle']; ?></h3>
                <?php endif; ?>
                <div>
                    <?php if (isset($inner['image']['url'])) : ?>
                        <img src="<?php echo esc_url($inner['image']['url']); ?>" alt="<?php echo esc_attr($inner['image']['alt']); ?>">
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>