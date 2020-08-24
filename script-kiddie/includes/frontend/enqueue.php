<?php

function sk_theme_enqueue()
{
    $uri = get_theme_file_uri();

    wp_register_style(
        'ju_google_fonts',
        'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i',
        [],
        $ver
    );
    wp_register_style('sk_theme_bootstrap_css', $uri . '/assets/css/bootstrap.min.css', [], $ver);
    wp_enqueue_style('sk_theme_bootstrap_css');

    wp_register_style('sk_theme_styles', $uri . '/assets/css/theme.css', [], $ver);
    wp_enqueue_style('sk_theme_styles');
}
