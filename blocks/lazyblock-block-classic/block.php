<section class="section1 <?php echo $attributes['center'] ? 'center' : ''  ?>">
    <div class="container grid">
        <?php if (!empty($attributes['tagline'])) : ?>
            <p class="tagline"><?php echo $attributes['tagline']; ?></p>
        <?php endif; ?>
        <?php if (!empty($attributes['title'])) : ?>
            <h2><?php echo $attributes['title']; ?></h2>
        <?php endif; ?>
        <?php if (!empty($attributes['description'])) : ?>
            <p class="text"><?php echo $attributes['description']; ?></p>
        <?php endif; ?>
        <?php if (!empty($attributes['link-1']) || !empty($attributes['link-2'])): ?>
            <div class="buttons">
                <?php if (!empty($attributes['link-1'])) : ?>
                    <a class="btn btn-primary" href="<?php echo esc_url($attributes['link-1']); ?>"><?php echo $attributes['button-1']; ?></a>
                <?php endif; ?>
                <?php if (!empty($attributes['link-2'])) : ?>
                    <a class="btn btn-secondary" href="<?php echo esc_url($attributes['link-2']); ?>"><?php echo $attributes['button-2']; ?></a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>