<?php
/*
 * Theme customizer footer pannel.
 * This file must be included in config/customizer/index.php.
 */

add_action('customize_register', 'neptune_customizer_footer');

function neptune_customizer_footer($wp_customize)
{
    $wp_customize->add_section('neptune_section_footer', [
        'title' => __('Footer', 'neptune'),
        'priority' => 82,
    ]);

    // Facebook
    $wp_customize->add_setting('neptune_footer_copyright', [
        'transport' => 'refresh',
        'default' => '&copy; 2021 Neptune Greentech - Made with love by <a href="https://kairos-agency.com">Kairos Agency</a>',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'neptune_control_footer',
            [
                'label' => __('Copyright text', 'neptune'),
                'section' => 'neptune_section_footer',
                'settings' => 'neptune_footer_copyright',
                'type' => 'textarea',
            ]
        )
    );
}
