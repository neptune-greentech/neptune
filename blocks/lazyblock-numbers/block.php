<section class="bg">
    <div class="container">

        <h2><?php echo $attributes['numbers_title']; ?></h2>

        <div class="col-4 numbers">

            <?php foreach( $attributes['numbers'] as $number): ?>
				<div class="col">
					<div class="bloc">
						<p><?php echo $number['number_title']; ?></p>
						<p><?php echo $number['number_statistic']; ?></p>
					</div>
				</div>
			<?php endforeach; ?>

		</div>

    </div>
</section>