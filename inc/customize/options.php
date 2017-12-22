<?php

// Add Theme Options to Customizer

function a002_theme_options($wp_customize)
{
    // ABOUT SECTION

    Kirki::add_field('ember', array(
        'type' => 'custom',
        'settings' => 'about-widget-note',
        'label' => 'About Icons & Text',
        'section' => 'fp-about',
        'default' => __('To change the four icons and/or text featured in the about section, please examine each field below. Icons are provided by Font Awesome.', 'ember-companion'),
        'priority' => 10
    ));


    $wp_customize->add_setting('fp_about_icon_1', array(
        'type' => 'option',
        'default' => 'fa-clock-o',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp_about_icon_1', array(
        'label' => __('First Icon', 'a002'),
        'section' => 'fp-about',
        'settings' => 'fp_about_icon_1',
        'type' => 'text',
        'priority' => 11
    )));

    $wp_customize->add_setting('fp_about_icon_title_1', array(
        'type' => 'option',
        'default' => 'Services',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp_about_icon_title_1', array(
        'label' => __('First Icon Title', 'a002'),
        'section' => 'fp-about',
        'settings' => 'fp_about_icon_title_1',
        'type' => 'text',
        'priority' => 12
    )));

    $wp_customize->add_setting('fp_about_icon_text_1', array(
        'type' => 'option',
        'default' => 'We offer a variety of Worship Opportunities!',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp_about_icon_text_1', array(
        'label' => __('First Icon Text', 'a002'),
        'section' => 'fp-about',
        'settings' => 'fp_about_icon_text_1',
        'type' => 'textarea',
        'priority' => 13
    )));

    $wp_customize->add_setting('fp_about_icon_url_1', array(
        'type' => 'option',
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp_about_icon_url_1', array(
        'label' => __('First Icon URL', 'a002'),
        'section' => 'fp-about',
        'settings' => 'fp_about_icon_url_1',
        'type' => 'text',
        'priority' => 14
    )));

    $wp_customize->add_setting('fp_about_icon_2', array(
        'type' => 'option',
        'default' => 'fa-calendar',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp_about_icon_2', array(
        'label' => __('Second Icon', 'a002'),
        'section' => 'fp-about',
        'settings' => 'fp_about_icon_2',
        'type' => 'text',
        'priority' => 15
    )));

    $wp_customize->add_setting('fp_about_icon_title_2', array(
        'type' => 'option',
        'default' => 'Events',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp_about_icon_title_2', array(
        'label' => __('Second Icon Title', 'a002'),
        'section' => 'fp-about',
        'settings' => 'fp_about_icon_title_2',
        'type' => 'text',
        'priority' => 16
    )));

    $wp_customize->add_setting('fp_about_icon_text_2', array(
        'type' => 'option',
        'default' => 'Wondering what we\'re up to? Take a look at our calendar!',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp_about_icon_text_2', array(
        'label' => __('Second Icon Text', 'a002'),
        'section' => 'fp-about',
        'settings' => 'fp_about_icon_text_2',
        'type' => 'textarea',
        'priority' => 17
    )));

    $wp_customize->add_setting('fp_about_icon_url_2', array(
        'type' => 'option',
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp_about_icon_url_2', array(
        'label' => __('Second Icon URL', 'a002'),
        'section' => 'fp-about',
        'settings' => 'fp_about_icon_url_2',
        'type' => 'text',
        'priority' => 18
    )));

    $wp_customize->add_setting('fp_about_icon_3', array(
        'type' => 'option',
        'default' => 'fa-map-marker',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp_about_icon_3', array(
        'label' => __('Third Icon', 'a002'),
        'section' => 'fp-about',
        'settings' => 'fp_about_icon_3',
        'type' => 'text',
        'priority' => 19
    )));

    $wp_customize->add_setting('fp_about_icon_title_3', array(
        'type' => 'option',
        'default' => 'Find Us',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp_about_icon_title_3', array(
        'label' => __('Third Icon Title', 'a002'),
        'section' => 'fp-about',
        'settings' => 'fp_about_icon_title_3',
        'type' => 'text',
        'priority' => 20
    )));

    $wp_customize->add_setting('fp_about_icon_text_3', array(
        'type' => 'option',
        'default' => 'Need help finding us? No problem! Check out this map.',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp_about_icon_text_3', array(
        'label' => __('Third Icon Text', 'a002'),
        'section' => 'fp-about',
        'settings' => 'fp_about_icon_text_3',
        'type' => 'textarea',
        'priority' => 21
    )));

    $wp_customize->add_setting('fp_about_icon_url_3', array(
        'type' => 'option',
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp_about_icon_url_3', array(
        'label' => __('Third Icon URL', 'a002'),
        'section' => 'fp-about',
        'settings' => 'fp_about_icon_url_3',
        'type' => 'text',
        'priority' => 22
    )));

    $wp_customize->add_setting('fp_about_icon_4', array(
        'type' => 'option',
        'default' => 'fa-envelope-o',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp_about_icon_4', array(
        'label' => __('Fourth Icon', 'a002'),
        'section' => 'fp-about',
        'settings' => 'fp_about_icon_4',
        'type' => 'text',
        'priority' => 23
    )));

    $wp_customize->add_setting('fp_about_icon_title_4', array(
        'type' => 'option',
        'default' => 'Always In Reach',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp_about_icon_title_4', array(
        'label' => __('Fourth Icon Title', 'a002'),
        'section' => 'fp-about',
        'settings' => 'fp_about_icon_title_4',
        'type' => 'text',
        'priority' => 25
    )));

    $wp_customize->add_setting('fp_about_icon_text_4', array(
        'type' => 'option',
        'default' => 'We\'re always one call, email, or form submission away!',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp_about_icon_text_4', array(
        'label' => __('Fourth Icon Text', 'a002'),
        'section' => 'fp-about',
        'settings' => 'fp_about_icon_text_4',
        'type' => 'textarea',
        'priority' => 26
    )));

    $wp_customize->add_setting('fp_about_icon_url_4', array(
        'type' => 'option',
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'fp_about_icon_url_4', array(
        'label' => __('Fourth Icon URL', 'a002'),
        'section' => 'fp-about',
        'settings' => 'fp_about_icon_url_4',
        'type' => 'text',
        'priority' => 27
    )));

    Kirki::add_field('ember', array(
        'settings' => 'fp-about-slug',
        'label' => __('Navigation Menu ID', 'ember-companion'),
        'section' => 'fp-about',
        'type' => 'text',
        'priority' => 28,
        'default' => 'about',
        'description' => __('The frontpage section IDs (what shows up in the hover state and the address bar when clicked) have already been set to a default show in this field. If you would like to change the ID so that a different term comes up in the slug for that section (ie. http://mysite.com/#top instead of /#home), then change the term below for the corresponding section. You will also want to add the custom menu items in the Menus section of your dashboard (click "Links," then add the entire URL, such as http://mysite.com/#top). IMPORTANT: You must also add this term to the title field in the menu editor. If you do not see this field you may have to activate it by selecting the Screen Options tab in the top right of the page and then checking the Title Attribute box.', 'ember-companion')
    ));

    // Events Page Options

    $wp_customize->add_section('a002_events_page_section', array(
        'title' => __('Events Page', 'a002'),
        'priority' => 30
    ));

    $wp_customize->add_setting('a002_events_page_banner', array(
        'type' => 'option',
        'default' => ''

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'a002_events_page_banner', array(
        'label' => __('Events Page Banner', 'a002'),
        'section' => 'a002_events_page_section',
        'settings' => 'a002_events_page_banner',
        'context' => 'events_page_banner'
    )));

}
add_action('customize_register', 'a002_theme_options');

?>
