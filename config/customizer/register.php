<?php
add_action('customize_register','neptune_customizer_options');

function neptune_customizer_options( $wp_customize ) {
	/**-----------------------------------------
	 *  Backgoud color
	 ---------------------------------------- */
	$wp_customize->add_setting('neptune_background_color', array(
		'default' => '#333333',
		'transport' => 'refresh'
	));

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'neptune_control_background_color',
			array(
				'label'      => __( 'Background Color', 'neptune' ),
				'section'    => 'colors',
				'settings'   => 'neptune_background_color',
				'description' => __('Please select a background color', 'neptune'),
			)
		)
	);

	/**-----------------------------------------
	 *  Social networks
	 ---------------------------------------- */

	$wp_customize->add_section('neptune_section_social_networks', array(
		'title'          => __('Social Networks', 'neptune'),
		'description' 	 => __("Please add your social networks links. Leave empty if you don't want the social network's icon to appear.", 'neptune'),
		'priority'       => 81,
	));

	// Facebook
	$wp_customize->add_setting('neptune_social_facebook', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'neptune_control_social_facebook',
			array(
				'label'      => __( 'Facebook Link', 'neptune' ),
				//'description' => __('Please enter your Facebook account link', 'neptune'),
				'input_attrs' => array(
					'placeholder' => __( 'https://', 'neptune' ),
				),
				'section'    => 'neptune_section_social_networks',
				'settings'   => 'neptune_social_facebook',
				'type' => 'text',
			)
		)
	);

	// Twitter
	$wp_customize->add_setting('neptune_social_twitter', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'neptune_control_social_twitter',
			array(
				'label'      => __( 'Twitter Link', 'neptune' ),
				//'description' => __('Please enter your Twitter account link', 'neptune'),
				'input_attrs' => array(
					'placeholder' => __( 'https://', 'neptune' ),
				),
				'section'    => 'neptune_section_social_networks',
				'settings'   => 'neptune_social_twitter',
				'type' => 'text',
			)
		)
	);

	// Instagram
	$wp_customize->add_setting('neptune_social_instagram', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'neptune_control_social_instagram',
			array(
				'label'      => __( 'Instagram Link', 'neptune' ),
				//'description' => __('Please enter your instagram account link', 'neptune'),
				'input_attrs' => array(
					'placeholder' => __( 'https://', 'neptune' ),
				),
				'section'    => 'neptune_section_social_networks',
				'settings'   => 'neptune_social_instagram',
				'type' => 'text',
			)
		)
	);

	// Instagram
	$wp_customize->add_setting('neptune_social_tiktok', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'neptune_control_social_tiktok',
			array(
				'label'      => __( 'Tiktok Link', 'neptune' ),
				//'description' => __('Please enter your tiktok account link', 'neptune'),
				'input_attrs' => array(
					'placeholder' => __( 'https://', 'neptune' ),
				),
				'section'    => 'neptune_section_social_networks',
				'settings'   => 'neptune_social_tiktok',
				'type' => 'text',
			)
		)
	);

	// LinkedIn
	$wp_customize->add_setting('neptune_social_linkedin', array(
		'transport' => 'refresh',
	));

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'neptune_control_social_linkedin',
			array(
				'label'      => __( 'LinkedIn Link', 'neptune' ),
				//'description' => __('Please enter your linkedin account link', 'neptune'),
				'input_attrs' => array(
					'placeholder' => __( 'https://'),
				),
				'section'    => 'neptune_section_social_networks',
				'settings'   => 'neptune_social_linkedin',
				'type' => 'text',
			)
		)
	);
}