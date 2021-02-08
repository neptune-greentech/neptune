<section class="place">
    <div class="container">

        <div class="col-2 ">

			<?php foreach( $attributes['places'] as $place): ?>
				<div class="col">
					<h2><?php echo esc_html($place['place_city']); ?></h2>
					<p><?php echo esc_html($place['place_street']); ?></p>
					<p><?php echo esc_html($place['place_phone']); ?></p>
					<p><?php echo esc_html($place['place_email']); ?></p>
				</div>
			<?php endforeach; ?>

        </div>

        <span></span>

    </div>
</section>