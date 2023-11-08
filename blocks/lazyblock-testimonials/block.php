<section>
    <div class="container">
        <h2><?php $attributes['title']; ?></h2>

        <div class="testimonials">
            <div class="prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M15 18L9 12L15 6" stroke="#28303d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="next">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M9 18L15 12L9 6" stroke="#28303d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            </div>
            <div>
                <div class="card">
                    <div class="slider">
                        <div class="slider_inner">
							<?php foreach($attributes['repeater'] as $inner): ?>
								<div class="slide">
									<p><?php $inner['quote']; ?></p>
									<p><?php $inner['author']; ?></p>
								</div>
							<?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>