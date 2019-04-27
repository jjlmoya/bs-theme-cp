<?php

if (!function_exists('zh_seo_setup')) :
    function zh_seo_setup()
    {
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_image_size('zh-post-thumbnail', '300', '300');
    }
endif; // zh_seo_setup
add_action('after_setup_theme', 'zh_seo_setup');

function zh_seo_scripts()
{
    $timestamp = '2019031311';
    wp_enqueue_script('zh-seo-script', get_template_directory_uri() . '/js/index.js', array(), $timestamp, true);
    $adminbar = is_admin_bar_showing();
    wp_localize_script('zh-seo-script', 'libreadminbar', array($adminbar));
}
function my_deregister_scripts(){
    wp_deregister_script( 'wp-embed' );
}


add_action( 'wp_footer', 'my_deregister_scripts' );
add_action('wp_enqueue_scripts', 'zh_seo_scripts');


