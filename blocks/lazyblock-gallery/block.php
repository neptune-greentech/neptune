<section class="gallery">
    <div class="container grid">
        <h2><?= $attributes['title']; ?></h2>

        <div class="gallery_slider">
            <div class="gallery_slider_inner">
                <?php foreach($attributes['repeater'] as $inner): ?>
                    <div class="gallery_slide" style="background-image: url('<?= esc_url($inner['image']['url']); ?>')"></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>