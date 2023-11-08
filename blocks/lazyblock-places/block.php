<section class="place">
    <div class="container">
        <div class="col-2">
			<?php foreach($attributes['repeater'] as $inner): ?>
				<div class="col">
					<h2><?php echo esc_html($inner['city']); ?></h2>
					<p><?php echo esc_html($inner['adress']); ?></p>
					<p><?php echo esc_html($inner['phone']); ?></p>
					<p><?php echo esc_html($inner['email']); ?></p>
				</div>
			<?php endforeach; ?>
        </div>
        <span></span>
    </div>
</section>