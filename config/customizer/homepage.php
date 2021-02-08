<?php
/*
 * Theme customizer homepage pannel.
 * This file must be included in config/customizer/index.php.
 */

add_action('customize_register', 'neptune_customizer_homepage');

function neptune_customizer_homepage($wp_customize)
{
    $wp_customize->add_setting('neptune_homepage_header_paragraph', [
        'transport' => 'refresh',
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque non sapien tincidunt, suscipit metus sed, hendrerit mi. Ut commodo tristique.',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'neptune_control_homepage',
            [
                'label' => __('Homepage header paragraph', 'neptune'),
                'section' => 'static_front_page',
                'settings' => 'neptune_homepage_header_paragraph',
                'type' => 'textarea',
            ]
        )
    );
}
