<?php $is_reversed = $attributes['layering-reverse']; ?>

<section class="layering <?php echo ($is_reversed == true) ? 'layering-reverse': ''; ?>">
    <div class="container">

        <h2><?php echo esc_html( $attributes['layering_title'] ); ?></h2>

        <div class="cols">
            <div>
				<?php if(isset($attributes['layering_image']['id'])) : ?>
					<?php echo wp_get_attachment_image( $attributes['layering_image']['id'], 'large'); ?>
				<?php endif; ?>
            </div>

            <div class="bloc">
                <h3><?php echo esc_html( $attributes['layering_block_title'] ); ?></h3>
                <?php echo $attributes['layering_block_text']; ?>
                <a class="btn btn-primary" href="#">Discover</a>
            </div>
        </div>

    </div>
</section>