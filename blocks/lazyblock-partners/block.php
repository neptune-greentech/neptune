<section class="partners">
    <div class="container">

    <h2><?php echo $attributes['title']; ?></h2>

        <div class="partners_grid">
			<?php foreach( $attributes['repeater'] as $inner): ?>
            <div>
                <?php if (isset($inner['logo']['url'])) : ?>
                    <img src="<?php echo esc_url($inner['logo']['url']); ?>" alt="<?php echo esc_attr($inner['logo']['alt']); ?>">
                <?php endif; ?>
            </div>
			<?php endforeach; ?>
        </div>

    </div>
</section>