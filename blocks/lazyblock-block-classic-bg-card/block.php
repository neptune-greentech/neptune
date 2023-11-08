<section class="section14 bg" style="background-image: url('<?php esc_url($attributes['image']['url']); ?>')">
    <div class="container grid">
        <div>
            <?php if (!empty($attributes['tagline'])) : ?>
                <p class="tagline"><?php $attributes['tagline']; ?></p>
            <?php endif; ?>
            <?php if (!empty($attributes['title'])) : ?>
                <h2><?php $attributes['title']; ?></h2>
            <?php endif; ?>
            <?php if (!empty($attributes['description'])) : ?>
                <p class="description"><?php $attributes['description']; ?></p>
            <?php endif; ?>
            <?php if (!empty($attributes['link-1'])) : ?>
                <a class="btn btn-primary" href="<?php esc_url($attributes['link-1']); ?>"><?php $attributes['button-1']; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>