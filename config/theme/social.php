<?php
/*
 * Theme customizer social network pannel.
 * This file must be included in config/customizer/index.php.
 */

add_action('customize_register', 'neptune_customizer_social_networks');

function neptune_customizer_social_networks($wp_customize)
{
    $wp_customize->add_section('neptune_section_social_networks', [
        'title' => 'Social Medias',
        'description' => __("Please add your social networks links. Leave empty if you don't want the social network's icon to appear.", 'neptune'),
        'priority' => 81,
    ]);

    // LinkedIn
    $wp_customize->add_setting('neptune_social_linkedin', [
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'neptune_control_social_linkedin',
            [
                'label' => 'LinkedIn Link',
                'input_attrs' => [
                    'placeholder' => 'https://',
                ],
                'section' => 'neptune_section_social_networks',
                'settings' => 'neptune_social_linkedin',
                'type' => 'text',
            ]
        )
    );

    // Twitter
    $wp_customize->add_setting('neptune_social_twitter', [
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'neptune_control_social_twitter',
            [
                'label' => 'Twitter Link',
                'input_attrs' => [
                    'placeholder' => 'https://',
                ],
                'section' => 'neptune_section_social_networks',
                'settings' => 'neptune_social_twitter',
                'type' => 'text',
            ]
        )
    );

    // Instagram
    $wp_customize->add_setting('neptune_social_instagram', [
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'neptune_control_social_instagram',
            [
                'label' => 'Instagram Link',
                'input_attrs' => [
                    'placeholder' => 'https://',
                ],
                'section' => 'neptune_section_social_networks',
                'settings' => 'neptune_social_instagram',
                'type' => 'text',
            ]
        )
    );

     // Facebook
     $wp_customize->add_setting('neptune_social_facebook', [
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_attr',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'neptune_control_social_facebook',
            [
                'label' => 'Facebook Link',
                'input_attrs' => [
                    'placeholder' => 'https://',
                ],
                'section' => 'neptune_section_social_networks',
                'settings' => 'neptune_social_facebook',
                'type' => 'text',
            ]
        )
    );
}