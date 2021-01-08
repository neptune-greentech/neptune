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
			'neptune_custom_background_color',
			array(
				'label'      => __( 'Background Color', 'neptune' ),
				'section'    => 'colors',
				'settings'   => 'neptune_background_color',
				'description' => __('Choisissez la couleur de fond du site', 'neptune'),
				'selector' => "#neptune_bg_color"
			)
		)
	);

	/**-----------------------------------------
	 *  Social networks
	 ---------------------------------------- */
}