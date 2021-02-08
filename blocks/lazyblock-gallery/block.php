<section class="gallery">
    <div class="container">

        <h2><?php echo $attributes['gallery_title']; ?></h2>

        <div class="gallery_slider">
            <div class="gallery_slider_inner">
				<?php foreach( $attributes['gallery_images'] as $image): ?>
					<div class="gallery_slide" style="background-image: url('<?php echo $image['gallery_images_item']['url']; ?>')"></div>
				<?php endforeach; ?>
            </div>
        </div>

    </div>
</section>