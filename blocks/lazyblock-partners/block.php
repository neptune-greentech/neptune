<section class="partners">
    <div class="container">

    <h2><?php echo $attributes['partners_title']; ?></h2>

        <div class="partners_grid">
			<?php foreach( $attributes['partners'] as $partner): ?>
            <div>
				<?php if(isset($partner['partner_image']['id'])) : ?>
					<?php echo wp_get_attachment_image( $partner['partner_image']['id'], 'large'); ?>
				<?php endif; ?>
            </div>
			<?php endforeach; ?>
        </div>

    </div>
</section>