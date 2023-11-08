<section class="numbers bg">
    <div class="container grid">
        <h2><?= $attributes['title']; ?></h2>
        <div class="grid-4">
            <?php foreach($attributes['repeater'] as $inner): ?>
                <div class="card">
                    <div>
                        <p><?= $inner['label']; ?></p>
                        <p class="text-big"><?= $inner['value']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>