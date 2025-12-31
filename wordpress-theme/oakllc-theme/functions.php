<?php
/**
 * OAK LLC Theme Functions
 *
 * @package OAK_LLC
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function oakllc_theme_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ));

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'oakllc'),
        'footer'  => esc_html__('Footer Menu', 'oakllc'),
    ));
}
add_action('after_setup_theme', 'oakllc_theme_setup');

/**
 * Enqueue scripts and styles
 */
function oakllc_enqueue_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style(
        'oakllc-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700;900&display=swap',
        array(),
        null
    );

    // Enqueue main stylesheet
    wp_enqueue_style(
        'oakllc-main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0.0'
    );

    // Enqueue theme stylesheet (required by WordPress)
    wp_enqueue_style(
        'oakllc-style',
        get_stylesheet_uri(),
        array('oakllc-main-style'),
        '1.0.0'
    );

    // Enqueue main JavaScript
    wp_enqueue_script(
        'oakllc-main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );

    // Localize script for AJAX
    wp_localize_script('oakllc-main-script', 'oakllc_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('oakllc_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'oakllc_enqueue_scripts');

/**
 * Register widget areas
 */
function oakllc_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 1', 'oakllc'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here to appear in footer column 1.', 'oakllc'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 2', 'oakllc'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Add widgets here to appear in footer column 2.', 'oakllc'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget 3', 'oakllc'),
        'id'            => 'footer-3',
        'description'   => esc_html__('Add widgets here to appear in footer column 3.', 'oakllc'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'oakllc_widgets_init');

/**
 * Customizer Settings
 */
function oakllc_customize_register($wp_customize) {
    // Hero Section
    $wp_customize->add_section('oakllc_hero_section', array(
        'title'    => __('Hero Section', 'oakllc'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('hero_title', array(
        'default'           => 'Transform Your Business Vision Into Reality',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_title', array(
        'label'   => __('Hero Title', 'oakllc'),
        'section' => 'oakllc_hero_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('hero_subtitle', array(
        'default'           => 'Expert consulting and innovative solutions that drive growth, efficiency, and sustainable success for your organization.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('hero_subtitle', array(
        'label'   => __('Hero Subtitle', 'oakllc'),
        'section' => 'oakllc_hero_section',
        'type'    => 'textarea',
    ));

    // Contact Information
    $wp_customize->add_section('oakllc_contact_info', array(
        'title'    => __('Contact Information', 'oakllc'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('contact_email', array(
        'default'           => 'info@oakllc.co',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('contact_email', array(
        'label'   => __('Email Address', 'oakllc'),
        'section' => 'oakllc_contact_info',
        'type'    => 'email',
    ));

    $wp_customize->add_setting('contact_location', array(
        'default'           => 'United States',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contact_location', array(
        'label'   => __('Location', 'oakllc'),
        'section' => 'oakllc_contact_info',
        'type'    => 'text',
    ));

    // Social Media Links
    $wp_customize->add_section('oakllc_social_links', array(
        'title'    => __('Social Media Links', 'oakllc'),
        'priority' => 50,
    ));

    $social_networks = array('linkedin', 'twitter', 'facebook');
    foreach ($social_networks as $network) {
        $wp_customize->add_setting('social_' . $network, array(
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));

        $wp_customize->add_control('social_' . $network, array(
            'label'   => ucfirst($network) . ' URL',
            'section' => 'oakllc_social_links',
            'type'    => 'url',
        ));
    }
}
add_action('customize_register', 'oakllc_customize_register');

/**
 * Handle Contact Form Submission
 */
function oakllc_handle_contact_form() {
    check_ajax_referer('oakllc_nonce', 'nonce');

    $name    = sanitize_text_field($_POST['name']);
    $email   = sanitize_email($_POST['email']);
    $subject = sanitize_text_field($_POST['subject']);
    $message = sanitize_textarea_field($_POST['message']);

    // Email to admin
    $to      = get_option('admin_email');
    $headers = array('Content-Type: text/html; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>');
    $body    = "<h2>New Contact Form Submission</h2>
                <p><strong>Name:</strong> {$name}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Subject:</strong> {$subject}</p>
                <p><strong>Message:</strong><br>{$message}</p>";

    if (wp_mail($to, 'New Contact: ' . $subject, $body, $headers)) {
        wp_send_json_success(array('message' => 'Thank you! Your message has been sent.'));
    } else {
        wp_send_json_error(array('message' => 'Sorry, there was an error sending your message.'));
    }
}
add_action('wp_ajax_oakllc_contact_form', 'oakllc_handle_contact_form');
add_action('wp_ajax_nopriv_oakllc_contact_form', 'oakllc_handle_contact_form');

/**
 * Handle Newsletter Subscription
 */
function oakllc_handle_newsletter() {
    check_ajax_referer('oakllc_nonce', 'nonce');

    $email = sanitize_email($_POST['email']);

    // You can integrate with your email service here
    // For now, we'll just send an email to admin
    $to      = get_option('admin_email');
    $subject = 'New Newsletter Subscription';
    $message = "New newsletter subscription from: {$email}";

    if (wp_mail($to, $subject, $message)) {
        wp_send_json_success(array('message' => 'Thank you for subscribing!'));
    } else {
        wp_send_json_error(array('message' => 'Sorry, there was an error.'));
    }
}
add_action('wp_ajax_oakllc_newsletter', 'oakllc_handle_newsletter');
add_action('wp_ajax_nopriv_oakllc_newsletter', 'oakllc_handle_newsletter');

/**
 * Add custom body classes
 */
function oakllc_body_classes($classes) {
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

    if (is_front_page()) {
        $classes[] = 'oakllc-home';
    }

    return $classes;
}
add_filter('body_class', 'oakllc_body_classes');

/**
 * Change excerpt length
 */
function oakllc_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'oakllc_excerpt_length');

/**
 * Change excerpt more string
 */
function oakllc_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'oakllc_excerpt_more');
