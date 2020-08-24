<?php

// Includes
include(get_theme_file_path('/includes/index.php'));

// Hooks
add_action('wp_enqueue_scripts', 'sk_theme_enqueue');
add_action('after_setup_theme', 'sk_theme_setup');


function sk_theme_excerpt_length()
{
    return 45;
}
add_filter('excerpt_length', 'sk_theme_excerpt_length', 20);
