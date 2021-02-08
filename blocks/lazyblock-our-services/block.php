<section>
    <div class="container">

        <h2><?php echo $attributes['our_services_title']; ?></h2>

			<div class="col-3">

				<?php foreach( $attributes['services'] as $service): ?>
					<div class="col">
						<h3><?php echo $service['service_title']; ?></h3>
						<p><?php echo $service['service_description']; ?></p>
					</div>
				<?php endforeach; ?>

			</div>

    </div>
</section>