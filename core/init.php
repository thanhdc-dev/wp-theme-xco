<?php

/**
 * Remove Image sizes
 */
add_filter('intermediate_image_sizes', function ($default_sizes) {
    $targets = ['thumbnail', 'medium', 'medium_large', 'large', '1536x1536', '2048x2048'];
    return array_diff($default_sizes, $targets);
});

//* Remove WordPress's default image sizes
add_filter('intermediate_image_sizes_advanced', function ($default_sizes) {
    $targets = ['thumbnail', 'medium', 'medium_large', 'large', '1536x1536', '2048x2048'];
    return array_diff($default_sizes, $targets);
});

/**
 * Nhúng các file css
 */
function theme_enqueue_styles()
{
    foreach (glob(THEME_DIR . '/assets/css/*.css') as $fileName) {
        if (basename($fileName, '.css') != 'app') {
            $handle = 'wp-style-' . str_replace('.', '-', basename($fileName, '.css'));
            wp_register_style($handle, THEME_URL . '/assets/css/' . basename($fileName), 'all');
            wp_enqueue_style($handle);
        }
    }

    $handle = 'wp-style-' . str_replace('.', '-', basename('app'));
    wp_register_style($handle, THEME_URL . '/assets/css/' . 'app.css', 'all');
    wp_enqueue_style($handle);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

/**
 * Nhúng các file js
 */
function theme_enqueue_scripts()
{
    foreach (glob(THEME_DIR . '/assets/js/*.js') as $fileName) {
        if (!in_array(basename($fileName, '.js'), ['app', 'jquery'])) {
            $handle = 'wp-script-' . str_replace('.', '-', basename($fileName, '.js'));
            wp_register_script($handle, THEME_URL . '/assets/js/' . basename($fileName), array('jquery'), false, true);
            wp_enqueue_script($handle);
        }
    }

    $handle = 'wp-script-' . str_replace('.', '-', basename('jquery'));
    wp_register_script($handle, THEME_URL . '/assets/js/' . 'jquery.js');
    wp_enqueue_script($handle);

    $handle = 'wp-script-' . str_replace('.', '-', basename('app'));
    wp_register_script($handle, THEME_URL . '/assets/js/' . 'app.js', array('jquery'), false, true);
    wp_enqueue_script($handle);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
