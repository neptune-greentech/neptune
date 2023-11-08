<section class="section19">
    <div class="container max grid">
        <?php if (!empty($attributes['title'])) : ?>
            <h2><?= $attributes['title']; ?></h2>
        <?php endif; ?>
        <?php if (!empty($attributes['description'])) : ?>
            <p><?= $attributes['description']; ?></p>
        <?php endif; ?>
    </div>
</header>