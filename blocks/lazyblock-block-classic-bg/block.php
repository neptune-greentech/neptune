<section class="section13 bg" style="background-image: url('<?= esc_url($attributes['image']['url']); ?>')">
    <div class="container grid">
        <?php if (!empty($attributes['tagline'])) : ?>
            <p class="tagline"><?= $attributes['tagline']; ?></p>
        <?php endif; ?>
        <?php if (!empty($attributes['title'])) : ?>
            <h2><?= $attributes['title']; ?></h2>
        <?php endif; ?>
        <?php if (!empty($attributes['description'])) : ?>
            <p class="text"><?= $attributes['description']; ?></p>
        <?php endif; ?>
    </div>
</section>