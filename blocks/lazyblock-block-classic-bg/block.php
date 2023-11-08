<section class="section13 bg" style="background-image: url('<?php esc_url($attributes['image']['url']); ?>')">
    <div class="container grid">
        <?php if (!empty($attributes['tagline'])) : ?>
            <p class="tagline"><?php $attributes['tagline']; ?></p>
        <?php endif; ?>
        <?php if (!empty($attributes['title'])) : ?>
            <h2><?php $attributes['title']; ?></h2>
        <?php endif; ?>
        <?php if (!empty($attributes['description'])) : ?>
            <p class="text"><?php $attributes['description']; ?></p>
        <?php endif; ?>
    </div>
</section>