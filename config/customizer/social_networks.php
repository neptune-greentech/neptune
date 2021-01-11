<?php
/*
 * Theme customizer social network pannel.
 * This file must be included in config/customizer/index.php.
 */

add_action('customize_register', 'neptune_customizer_social_networks');

function neptune_customizer_social_networks($wp_customize)
{
    $wp_customize->add_section('neptune_section_social_networks', [
        'title' => __('Social Networks', 'neptune'),
        'description' => __("Please add your social networks links. Leave empty if you don't want the social network's icon to appear.", 'neptune'),
        'priority' => 81,
    ]);

    // Facebook
    $wp_customize->add_setting('neptune_social_facebook', [
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'neptune_control_social_facebook',
            [
                'label' => __('Facebook Link', 'neptune'),
                //'description' => __('Please enter your Facebook account link', 'neptune'),
                'input_attrs' => [
                    'placeholder' => __('https://', 'neptune'),
                ],
                'section' => 'neptune_section_social_networks',
                'settings' => 'neptune_social_facebook',
                'type' => 'text',
            ]
        )
    );

    // Twitter
    $wp_customize->add_setting('neptune_social_twitter', [
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'neptune_control_social_twitter',
            [
                'label' => __('Twitter Link', 'neptune'),
                //'description' => __('Please enter your Twitter account link', 'neptune'),
                'input_attrs' => [
                    'placeholder' => __('https://', 'neptune'),
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
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'neptune_control_social_instagram',
            [
                'label' => __('Instagram Link', 'neptune'),
                //'description' => __('Please enter your instagram account link', 'neptune'),
                'input_attrs' => [
                    'placeholder' => __('https://', 'neptune'),
                ],
                'section' => 'neptune_section_social_networks',
                'settings' => 'neptune_social_instagram',
                'type' => 'text',
            ]
        )
    );

    // Instagram
    $wp_customize->add_setting('neptune_social_tiktok', [
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'neptune_control_social_tiktok',
            [
                'label' => __('Tiktok Link', 'neptune'),
                //'description' => __('Please enter your tiktok account link', 'neptune'),
                'input_attrs' => [
                    'placeholder' => __('https://', 'neptune'),
                ],
                'section' => 'neptune_section_social_networks',
                'settings' => 'neptune_social_tiktok',
                'type' => 'text',
            ]
        )
    );

    // LinkedIn
    $wp_customize->add_setting('neptune_social_linkedin', [
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'neptune_control_social_linkedin',
            [
                'label' => __('LinkedIn Link', 'neptune'),
                //'description' => __('Please enter your linkedin account link', 'neptune'),
                'input_attrs' => [
                    'placeholder' => __('https://'),
                ],
                'section' => 'neptune_section_social_networks',
                'settings' => 'neptune_social_linkedin',
                'type' => 'text',
            ]
        )
    );
}
