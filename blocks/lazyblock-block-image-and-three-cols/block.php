<section class="section9">
    <div class="container grid">
        <?php if (isset($attributes['image']['url'])) : ?>
            <img src="<?php echo esc_url($attributes['image']['url']); ?>" alt="<?php echo esc_attr($attributes['image']['alt']); ?>">
        <?php endif; ?>
        <div class="grid-3">
            <?php foreach($attributes['repeater'] as $inner): ?>
                <div>
                    <?php if (!empty($inner['subtitle'])) : ?>
                        <h3><?php echo $inner['subtitle']; ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($inner['sub-description'])) : ?>
                        <p><?php echo $inner['sub-description']; ?></p>
                    <?php endif; ?>
                    <?php if (!empty($inner['link'])) : ?>
                        <a class="btn btn-primary" href="<?php echo esc_url($inner['link']); ?>"><?php echo $inner['button']; ?></a>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</header>
