<section class="services">
    <div class="container grid">
        <h2><?php $attributes['title']; ?></h2>
        <div class="grid-3">
            <?php foreach($attributes['repeater'] as $inner): ?>
                <div>
                    <h3><?php $inner['subtitle']; ?></h3>
                    <p><?php $inner['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>