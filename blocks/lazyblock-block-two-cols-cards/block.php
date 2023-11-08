<section class="section16">
    <div class="container grid-2">
        <?php foreach($attributes['repeater'] as $inner): ?>
            <div>
                <?php if (isset($inner['image']['url'])) : ?>
                    <img src="<?php echo esc_url($inner['image']['url']); ?>" alt="<?php echo esc_attr($inner['image']['alt']); ?>">
                <?php endif; ?>
                <div>
                    <?php if (!empty($inner['subtitle'])) : ?>
                        <h3><?php echo $inner['subtitle']; ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($inner['sub-description'])) : ?>
                        <p class="text"><?php echo $inner['sub-description']; ?></p>
                    <?php endif; ?>
                    <?php if (!empty($inner['link'])) : ?>
                        <a class="btn btn-primary" href="<?php echo esc_url($inner['link']); ?>"><?php echo $inner['button']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</header>