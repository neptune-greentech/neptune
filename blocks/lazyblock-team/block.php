<section>
    <div class="container">

        <h2><?php $attributes['title']; ?></h2>

        <div class="col-3 team">

			<?php foreach ($attributes['repeater'] as $inner) { ?>

				<div class="col team_item">
                    <?php if (isset($inner['image']['url'])) : ?>
                        <img src="<?php esc_url($inner['image']['url']); ?>" alt="<?php esc_attr($inner['image']['alt']); ?>">
                    <?php endif; ?>
					<div>
						<p><?php $inner['job']; ?></p>
						<h3><?php $inner['name']; ?></h3>
						<p><?php $inner['description']; ?></p>
						<span></span>
						<ul>
							<?php if (isset($inner['link-linkedin']) && !empty($inner['link-linkedin'])) { ?>
								<li>
									<a href="<?php $inner['link-linkedin']; ?>" target="_blank" rel="nofollow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24.226" height="24.225" viewBox="0 0 24.226 24.225">
                                            <path d="M5.423,24.225H.4V8.052H5.423ZM2.909,5.846A2.922,2.922,0,1,1,5.818,2.909,2.933,2.933,0,0,1,2.909,5.846Zm21.312,18.38H19.209V16.352c0-1.876-.038-4.283-2.611-4.283-2.611,0-3.011,2.039-3.011,4.147v8.008H8.569V8.052h4.817v2.206h.07a5.278,5.278,0,0,1,4.752-2.612c5.083,0,6.018,3.347,6.018,7.695v8.884Z" transform="translate(0 0)" fill="#28303d"/>
                                        </svg>
										<?php $inner['account-name-of-linkedin']; ?>
									</a>
								</li>
							<?php } ?>

							<?php if (isset($inner['link-twitter']) && !empty($inner['link-twitter'])) { ?>
								<li>
									<a href="<?php $inner['link-twitter']; ?>" target="_blank" rel="nofollow">
                                        <svg width="32" height="29" viewBox="0 0 32 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M25.1735 0H30.0801L19.3068 12.3063L31.8935 29H22.0161L14.2828 18.8554L5.42948 29H0.522812L11.9361 15.8376L-0.117188 0H10.0055L16.9921 9.26716L25.1735 0ZM23.4561 26.1107H26.1761L8.57615 2.78229H5.65348L23.4561 26.1107Z" fill="#28303d"/>
                                        </svg>
										<?php $inner['account-name-of-twitter']; ?>
									</a>
								</li>
							<?php } ?>

							<?php if (isset($inner['link-instagram']) && !empty($inner['link-instagram'])) { ?>
								<li>
									<a href="<?php $inner['link-instagram']; ?>" target="_blank" rel="nofollow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24.24" height="24.233" viewBox="0 0 24.24 24.233">
                                            <path d="M12.117,8.141a6.213,6.213,0,1,0,6.213,6.213A6.2,6.2,0,0,0,12.117,8.141Zm0,10.252a4.039,4.039,0,1,1,4.039-4.039,4.047,4.047,0,0,1-4.039,4.039ZM20.034,7.887a1.449,1.449,0,1,1-1.449-1.449A1.446,1.446,0,0,1,20.034,7.887Zm4.115,1.471A7.171,7.171,0,0,0,22.192,4.28a7.219,7.219,0,0,0-5.078-1.957c-2-.114-8-.114-10,0A7.209,7.209,0,0,0,2.037,4.275,7.2,7.2,0,0,0,.08,9.352c-.114,2-.114,8,0,10a7.171,7.171,0,0,0,1.958,5.078,7.228,7.228,0,0,0,5.078,1.957c2,.114,8,.114,10,0a7.172,7.172,0,0,0,5.078-1.957,7.219,7.219,0,0,0,1.958-5.078c.114-2,.114-7.992,0-9.993ZM21.564,21.5a4.09,4.09,0,0,1-2.3,2.3c-1.6.633-5.381.487-7.143.487s-5.554.141-7.143-.487a4.09,4.09,0,0,1-2.3-2.3c-.633-1.6-.487-5.38-.487-7.143S2.043,8.8,2.67,7.211a4.09,4.09,0,0,1,2.3-2.3c1.6-.633,5.381-.487,7.143-.487s5.554-.141,7.143.487a4.09,4.09,0,0,1,2.3,2.3c.633,1.6.487,5.38.487,7.143S22.2,19.908,21.564,21.5Z" transform="translate(0.005 -2.238)" fill="#28303d"/>
                                        </svg>
										<?php $inner['account-name-of-instagram']; ?>
									</a>
								</li>
							<?php } ?>

							<?php if (isset($inner['link-facebook']) && !empty($inner['link-facebook'])) { ?>
								<li>
									<a href="<?php $inner['link-facebook']; ?>" target="_blank" rel="nofollow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.829" height="27.686" viewBox="0 0 14.829 27.686">
                                            <path d="M15.466,15.573l.769-5.01H11.428V7.311A2.505,2.505,0,0,1,14.252,4.6h2.186V.339A26.656,26.656,0,0,0,12.558,0C8.6,0,6.011,2.4,6.011,6.744v3.819h-4.4v5.01h4.4V27.686h5.417V15.573Z" transform="translate(-1.609)" fill="#28303d"/>
                                        </svg>
										<?php $inner['account-name-of-facebook']; ?>
									</a>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			<?php } ?>
        </div>

    </div>
</section>