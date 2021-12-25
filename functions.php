<?php


function custom_theme_setup()
{
    add_theme_support("automatic-feed-links");
    add_theme_support("title-tag");
    add_theme_support("responsive-embeds");
}
add_action("after_setup_theme", "custom_theme_setup");

//CSS読み込み
function css_scripts()
{
    wp_enqueue_style(
        "base-style",
        get_stylesheet_uri(),
        array(),
        "1.0",
        "all"
    );
}
add_action("wp_enqueue_scripts", "css_scripts");

//JS読み込み
function js_scripts()
{
    wp_enqueue_script(
        'script',
        get_template_directory_uri() . '/js/script.js',
        array(),
        "1.0",
        true
    );
}
add_action('wp_enqueue_scripts', 'js_scripts');
