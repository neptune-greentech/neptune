<section class="section15">
    <div class="container grid-2">
        <?php foreach($attributes['repeater'] as $inner): ?>
            <div style="background-image: url('<?php echo esc_url($inner['image']['url']); ?>')">
                <?php if (!empty($inner['subtitle'])) : ?>
                    <h3><?php echo $inner['subtitle']; ?></h3>
                <?php endif; ?>
                <?php if (!empty($inner['sub-description'])) : ?>
                    <p class="text"><?php echo $inner['sub-description']; ?></p>
                <?php endif; ?>
                <?php if (!empty($inner['link'])) : ?>
                    <a class="btn btn-tertiary" href="<?php echo esc_url($inner['link']); ?>"><?php echo $inner['button']; ?></a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</header>

