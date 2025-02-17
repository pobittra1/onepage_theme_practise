<?php


// theme title
add_theme_support('title-tag');


function onepage_css_js_file_calling()
{
    // Enqueue CSS
    wp_enqueue_style("onepage-style", get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '5.3.3', 'all');
    wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');



    // Enqueue JavaScript
    wp_enqueue_script('jquery'); // Ensure jQuery loads
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '5.3.3', true);
}
add_action('wp_enqueue_scripts', 'onepage_css_js_file_calling');






//theme function

function onepage_customization_register($wp_customize)
{
    $wp_customize->add_section("onepage_header_area", array('title' => __('Header Area', 'onepage22'), 'description' => 'You can update here your logo'));

    $wp_customize->add_setting("onepage_logo", array('default' => get_template_directory_uri() . '/img/logo.png'));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "onepage_logo", array('label' => 'Upload Logo', 'onepage22', 'section' => 'onepage_header_area', 'setting' => 'onepage_logo', 'description' => 'You can upload your logo')));
};




add_action('customize_register', 'onepage_customization_register');


// link up with fontawesome
function enqueue_font_awesome()
{
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), '6.4.2');
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');


function limitString($string, $maxLength = 74)
{
    return (strlen($string) > $maxLength) ? substr($string, 0, $maxLength) . "..." : $string;
}
