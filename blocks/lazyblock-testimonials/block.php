<section class="cols3-title">
    <div class="container">

        <h2><?php echo $attributes['testimonials_title']; ?></h2>

        <div class="testimonials">
            <div class="prev">
                <img src="<?php echo get_template_directory_uri() . '/dist/images/icon-arrow-left.png'?>" alt="Icon arrow left.">
            </div>

            <div class="next">
                <img src="<?php echo get_template_directory_uri() . '/dist/images/icon-arrow-right.png'; ?>" alt="Icon arrow right.">
            </div>

            <div>
                <div class="bloc">

                    <div class="slider">
                        <div class="slider_inner">

							<?php foreach( $attributes['testimonials_slides'] as $testimonial): ?>
								<div class="slide">
									<p><?php echo $testimonial['testimonial_text']; ?></p>
									<p><?php echo $testimonial['testimonial_author']; ?></p>
								</div>
							<?php endforeach; ?>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>