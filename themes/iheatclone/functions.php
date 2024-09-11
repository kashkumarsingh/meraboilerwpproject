<?php

// Enqueue Styles

function meraboiler_enqueue_styles()
{

    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Patua+One&family=Open+Sans:wght@400;600&display=swap', [], null);

    wp_enqueue_style('tailwind-css', 'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css', [], null);

    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', [], null);

    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', [], null);

    if (is_front_page()) {
        wp_enqueue_style('owl-carousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', [], null);

        wp_enqueue_style('owl-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css', [], null);
        wp_enqueue_style('flipclock-css', get_template_directory_uri() . '/assets/css/flipclock.css', [], filemtime(get_template_directory() . '/assets/css/flipclock.css'));
    }

    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', [], filemtime(get_template_directory() . '/assets/css/main.css'));

}

add_action('wp_enqueue_scripts', 'meraboiler_enqueue_styles');



// Enqueue Scripts

function meraboiler_enqueue_scripts()
{
    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', [], null, true);

    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', ['jquery'], null, true);

    if (is_front_page()) {
        wp_enqueue_script('p5-js', 'https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js', [], null, true);
        wp_enqueue_script('wave-js', get_template_directory_uri() . '/assets/js/wave.js', ['p5-js'], filemtime(get_template_directory() . '/assets/js/wave.js'), true);
        wp_enqueue_script('flipclock-js', get_template_directory_uri() . '/assets/js/flipclock.min.js', ['jquery'], filemtime(get_template_directory() . '/assets/js/flipclock.min.js'), true);
    }
    // Conditional script loading
    wp_enqueue_script('owl-carousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', ['jquery'], null, true);
    // Load scripts.js on specific pages including page-contact.php
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/assets/js/scripts.js', ['jquery', 'bootstrap-js'], filemtime(get_template_directory() . '/assets/js/scripts.js'), true);

}

add_action('wp_enqueue_scripts', 'meraboiler_enqueue_scripts');




// Theme Setup

function meraboiler_theme_setup()
{

    add_theme_support('custom-logo', [

        'height' => 100,

        'width' => 280,

        'flex-height' => true,

        'flex-width' => true,

    ]);



    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'meraboiler_theme_setup');



// Register Menus

function meraboiler_register_menus()
{

    register_nav_menus([

        'main-menu' => __('Main Menu', 'meraboiler'),

        'footer_menu' => __('Footer Menu', 'meraboiler'),

        'footer_column_1_menu' => __('Footer Column 1 Menu', 'meraboiler'),

        'footer_column_2_menu' => __('Footer Column 2 Menu', 'meraboiler'),

        'footer_column_3_menu' => __('Footer Column 3 Menu', 'meraboiler'),

        'footer_column_4_menu' => __('Footer Column 4 Menu', 'meraboiler'),

    ]);

}

add_action('init', 'meraboiler_register_menus');



// Custom Post Type: FAQ

function create_faq_post_type()
{

    register_post_type('faq', [

        'labels' => [

            'name' => __('FAQs'),

            'singular_name' => __('FAQ'),

            'add_new_item' => __('Add New FAQ'),

            'edit_item' => __('Edit FAQ'),

            'new_item' => __('New FAQ'),

            'view_item' => __('View FAQ'),

            'search_items' => __('Search FAQs'),

            'not_found' => __('No FAQs found'),

            'not_found_in_trash' => __('No FAQs found in Trash')

        ],

        'hierarchical' => true,

        'show_ui' => true,

        'public' => true,

        'has_archive' => true,

        'rewrite' => ['slug' => 'faqs'],

        'supports' => ['title', 'editor', 'custom-fields'],

    ]);

}

add_action('init', 'create_faq_post_type');



// Custom Taxonomy: FAQ Categories

function create_faq_taxonomy()
{

    register_taxonomy('faq_category', 'faq', [

        'labels' => [

            'name' => __('FAQ Categories'),

            'singular_name' => __('FAQ Category'),

            'search_items' => __('Search FAQ Categories'),

            'all_items' => __('All FAQ Categories'),

            'parent_item' => __('Parent FAQ Category'),

            'parent_item_colon' => __('Parent FAQ Category:'),

            'edit_item' => __('Edit FAQ Category'),

            'update_item' => __('Update FAQ Category'),

            'add_new_item' => __('Add New FAQ Category'),

            'new_item_name' => __('New FAQ Category Name'),

            'menu_name' => __('FAQ Categories'),

        ],

        'show_ui' => true,

        'show_admin_column' => true,

        'rewrite' => ['slug' => 'faq-category'],

    ]);

}

add_action('init', 'create_faq_taxonomy');



// Custom Post Type: Services

function register_services_post_type()
{

    $labels = [

        'name' => _x('Services', 'post type general name', 'meraboiler'),

        'singular_name' => _x('Service', 'post type singular name', 'meraboiler'),

        'menu_name' => _x('Services', 'admin menu', 'meraboiler'),

        'name_admin_bar' => _x('Service', 'add new on admin bar', 'meraboiler'),

        'add_new' => _x('Add New', 'service', 'meraboiler'),

        'add_new_item' => __('Add New Service', 'meraboiler'),

        'new_item' => __('New Service', 'meraboiler'),

        'edit_item' => __('Edit Service', 'meraboiler'),

        'view_item' => __('View Service', 'meraboiler'),

        'all_items' => __('All Services', 'meraboiler'),

        'search_items' => __('Search Services', 'meraboiler'),

        'parent_item_colon' => __('Parent Services:', 'meraboiler'),

        'not_found' => __('No services found.', 'meraboiler'),

        'not_found_in_trash' => __('No services found in Trash.', 'meraboiler'),

    ];



    $args = [

        'labels' => $labels,

        'public' => true,

        'publicly_queryable' => true,

        'show_ui' => true,

        'show_in_menu' => true,

        'query_var' => true,

        'rewrite' => ['slug' => 'service'],

        'capability_type' => 'post',

        'has_archive' => true,

        'hierarchical' => false,

        'menu_position' => null,

        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],

    ];



    register_post_type('service', $args);

}

add_action('init', 'register_services_post_type');



// Custom Post Type: Boilers

function create_boiler_post_type()
{

    $labels = array(

        'name' => 'Boilers',

        'singular_name' => 'Boiler',

        'add_new' => 'Add New',

        'add_new_item' => 'Add New Boiler',

        'edit_item' => 'Edit Boiler',

        'new_item' => 'New Boiler',

        'all_items' => 'All Boilers',

        'view_item' => 'View Boiler',

        'search_items' => 'Search Boilers',

        'not_found' => 'No boilers found',

        'not_found_in_trash' => 'No boilers found in Trash',

        'menu_name' => 'Boilers',

    );



    $args = array(

        'labels' => $labels,

        'public' => true,

        'has_archive' => true,

        'rewrite' => array('slug' => 'boilers'),

        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),

        'show_in_rest' => true,

    );

    register_post_type('boiler', $args);

}



add_action('init', 'create_boiler_post_type');

function create_experience_post_type()
{

    $labels = array(

        'name' => 'Why Meraboiler',

        'singular_name' => 'Why Meraboiler',

        'add_new' => 'Add New Experience',

        'add_new_item' => 'Add New Experience',

        'edit_item' => 'Edit Experience',

        'new_item' => 'New Experience',

        'all_items' => 'All Experiences',

        'view_item' => 'View Experience',

        'search_items' => 'Search Experience',

        'not_found' => 'No Experience found',

        'not_found_in_trash' => 'No Experience found in Trash',

        'menu_name' => 'Why Choose Meraboiler',

    );



    $args = array(

        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'menu_icon' => 'dashicons-star-filled',
    );

    register_post_type('whymeraboiler', $args);

}
add_action('init', 'create_experience_post_type');


// Add this in your plugin or theme's functions.php or relevant PHP file
add_action('wp_ajax_fetch_address_suggestions', 'fetch_address_suggestions');
add_action('wp_ajax_nopriv_fetch_address_suggestions', 'fetch_address_suggestions');

function fetch_address_suggestions() {
    try {
        // Sanitize and retrieve postcode
        $postcode = sanitize_text_field($_GET['postcode']);

        // Example: API call or processing
        $apiUrl = "https://api.ideal-postcodes.co.uk/v1/postcodes/" . urlencode($postcode) . "?api_key=ak_lxsz8dglM4w48USGY5De1qNVdyQ9Q";

        // Example: Perform cURL request or API call
        $response = wp_remote_get($apiUrl);

        if (is_wp_error($response)) {
            throw new Exception('Error fetching data: ' . $response->get_error_message());
        }

        // Example: Process response and return data
        $data = wp_remote_retrieve_body($response);
        wp_send_json_success($data);
    } catch (Exception $e) {
        error_log('Error fetching address suggestions: ' . $e->getMessage());
        wp_send_json_error('Error fetching address suggestions: ' . $e->getMessage());
    }

    // Ensure to exit to avoid further execution
    wp_die();
}

// Enqueue Scripts for Specific Pages or Sections

function enqueue_wave_script_conditionally()
{

    if (is_page_template('front-page.php')) {
        wp_enqueue_script('wave-js');
        wp_enqueue_script('p5-js');

    }

}

add_action('wp_enqueue_scripts', 'enqueue_wave_script_conditionally', 20);



// In functions.php or your theme's custom script enqueueing file

// Enqueue the delightchat.js script
function enqueue_delightchat_script() {
    wp_enqueue_script('delightchat-js', get_template_directory_uri() . '/assets/js/delightchat.js', array(), null, true);

    // Localize the script to pass the theme URL
    wp_localize_script('delightchat-js', 'themeSettings', array(
        'themeUrl' => get_template_directory_uri()
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_delightchat_script');


