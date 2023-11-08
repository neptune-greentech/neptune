<section class="section7">
    <div class="container grid">
        <div>
            <?php if (!empty($attributes['tagline'])) : ?>
                <p class="tagline"><?php $attributes['tagline']; ?></p>
            <?php endif; ?>
            <?php if (!empty($attributes['title'])) : ?>
                <h2><?php $attributes['title']; ?></h2>
            <?php endif; ?>
        </div>
        <div>
            <?php if (!empty($attributes['description'])) : ?>
                <p><?php $attributes['description']; ?></p>
            <?php endif; ?>
            <?php if (!empty($attributes['link-1']) || !empty($attributes['link-2'])): ?>
                <div class="buttons">
                    <?php if (!empty($attributes['link-1'])) : ?>
                        <a class="btn btn-primary" href="<?php esc_url($attributes['link-1']); ?>"><?php $attributes['button-1']; ?></a>
                    <?php endif; ?>
                    <?php if (!empty($attributes['link-2'])) : ?>
                        <a class="btn btn-secondary" href="<?php esc_url($attributes['link-2']); ?>"><?php $attributes['button-2']; ?></a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>