<?php
/**
 * Theme customizer colors pannel.
 * This file must be included in config/customizer/index.php.
 */
add_action('customize_register', 'neptune_customizer_colors');

function neptune_customizer_colors($wp_customize)
{
    $wp_customize->add_setting('neptune_background_color', [
        'default' => '#f5f5f5',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'neptune_control_background_color',
            [
                'label' => __('Background Color', 'neptune'),
                'section' => 'colors',
                'settings' => 'neptune_background_color',
                'description' => __('Please select a background color', 'neptune'),
            ]
        )
    );
}
