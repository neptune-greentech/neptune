<section class="section14 bg" style="background-image: url('<?php echo esc_url($attributes['image']['url']); ?>')">
    <div class="container grid">
        <div>
            <?php if (!empty($attributes['tagline'])) : ?>
                <p class="tagline"><?php echo $attributes['tagline']; ?></p>
            <?php endif; ?>
            <?php if (!empty($attributes['title'])) : ?>
                <h2><?php echo $attributes['title']; ?></h2>
            <?php endif; ?>
            <?php if (!empty($attributes['description'])) : ?>
                <p class="description"><?php echo $attributes['description']; ?></p>
            <?php endif; ?>
            <?php if (!empty($attributes['link-1'])) : ?>
                <a class="btn btn-primary" href="<?php echo esc_url($attributes['link-1']); ?>"><?php echo $attributes['button-1']; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>