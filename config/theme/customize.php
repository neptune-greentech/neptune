<?php

// Add customize
function neptune_customizer_colors($wp_customize) {
    $wp_customize->add_setting('neptune_background_color', [
        'default' => '#f5f5f5',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ]);

    $wp_customize->add_setting('neptune_primary_color', [
        'default' => '#e2ebef',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ]);

    $wp_customize->add_setting('neptune_dark_color', [
        'default' => '#28303d',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ]);

    $wp_customize->add_setting('neptune_white_color', [
        'default' => '#fff',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ]);

    $wp_customize->add_setting('neptune_gray_color', [
        'default' => '#d4d4d4',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'neptune_control_background_color',
            [
                'label' => 'Background Color',
                'section' => 'colors',
                'settings' => 'neptune_background_color',
                'description' => 'Please select a background color',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'neptune_control_primary_color',
            [
                'label' => 'Primary Color',
                'section' => 'colors',
                'settings' => 'neptune_primary_color',
                'description' => 'Please select a primary color',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'neptune_control_dark_color',
            [
                'label' => 'Dark Color',
                'section' => 'colors',
                'settings' => 'neptune_dark_color',
                'description' => 'Please select a dark color',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'neptune_control_white_color',
            [
                'label' => 'White Color',
                'section' => 'colors',
                'settings' => 'neptune_white_color',
                'description' => 'Please select a white color',
            ]
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'neptune_control_gray_color',
            [
                'label' => 'Gray Color',
                'section' => 'colors',
                'settings' => 'neptune_gray_color',
                'description' => 'Please select a gray color',
            ]
        )
    );
}

add_action('customize_register', 'neptune_customizer_colors');
