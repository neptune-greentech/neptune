<?php

// Add customize
function neptune_customizer_colors($wp_customize) {
    $wp_customize->add_setting('neptune_background_color', [
        'default' => '#f5f5f5',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_setting('neptune_primary_color', [
        'default' => '#e2ebef',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_setting('neptune_dark_color', [
        'default' => '#28303d',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_setting('neptune_white_color', [
        'default' => '#fff',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_setting('neptune_gray_color', [
        'default' => '#d4d4d4',
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

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'neptune_control_primary_color',
            [
                'label' => __('Primary Color', 'neptune'),
                'section' => 'colors',
                'settings' => 'neptune_primary_color',
                'description' => __('Please select a primary color', 'neptune'),
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'neptune_control_dark_color',
            [
                'label' => __('Dark Color', 'neptune'),
                'section' => 'colors',
                'settings' => 'neptune_dark_color',
                'description' => __('Please select a dark color', 'neptune'),
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'neptune_control_white_color',
            [
                'label' => __('White Color', 'neptune'),
                'section' => 'colors',
                'settings' => 'neptune_white_color',
                'description' => __('Please select a white color', 'neptune'),
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'neptune_control_gray_color',
            [
                'label' => __('Gray Color', 'neptune'),
                'section' => 'colors',
                'settings' => 'neptune_gray_color',
                'description' => __('Please select a gray color', 'neptune'),
            ]
        )
    );
}

add_action('customize_register', 'neptune_customizer_colors');
