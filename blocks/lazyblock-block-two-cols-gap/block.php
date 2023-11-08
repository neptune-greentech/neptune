<section class="section11">
    <div class="container grid-2">
        <?php foreach($attributes['repeater'] as $inner): ?>
            <div>
                <?php if (isset($inner['image']['url'])) : ?>
                    <img src="<?php echo esc_url($inner['image']['url']); ?>" alt="<?php echo esc_attr($inner['image']['alt']); ?>">
                <?php endif; ?>
                <?php if (!empty($inner['subtitle'])) : ?>
                    <h3><?php echo $inner['subtitle']; ?></h3>
                <?php endif; ?>
                <?php if (!empty($inner['sub-description'])) : ?>
                    <p class="text"><?php echo $inner['sub-description']; ?></p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>