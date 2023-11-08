<section class="section20">
    <div class="container grid">
        <div class="grid-3">
            <?php foreach($attributes['repeater'] as $inner): ?>
                <div>
                    <?php if (isset($inner['image']['url'])) : ?>
                        <img src="<?php esc_url($inner['image']['url']); ?>" alt="<?php esc_attr($inner['image']['alt']); ?>">
                    <?php endif; ?>
                    <?php if (!empty($inner['subtitle'])) : ?>
                        <h3><?php $inner['subtitle']; ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($inner['sub-description'])) : ?>
                        <p class="text"><?php $inner['sub-description']; ?></p>
                    <?php endif; ?>
                    <?php if (!empty($inner['link'])) : ?>
                        <a class="btn btn-primary" href="<?php esc_url($inner['link']); ?>"><?php $inner['button']; ?></a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>