<?php
function meraboiler_enqueue_styles() {
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Patua+One&family=Open+Sans:wght@400;600&display=swap', false);

    // Enqueue Tailwind CSS
    wp_enqueue_style('tailwind-css', 'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');

    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');

    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');

    // Enqueue Owl Carousel CSS
    wp_enqueue_style('owl-carousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css');

    // Enqueue main stylesheet
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array(), filemtime(get_template_directory() . '/assets/css/main.css'));
}

function meraboiler_enqueue_scripts() {
    // Deregister the default jQuery and enqueue a specific version if needed
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), null, true);

    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    // Enqueue Owl Carousel JS
    wp_enqueue_script('owl-carousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), null, true);

    // Enqueue p5.js library
    wp_enqueue_script('p5-js', 'https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.4.0/p5.js', array(), null, true);

    // Enqueue custom scripts
    wp_enqueue_script('custom-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery', 'owl-carousel-js', 'bootstrap-js'), filemtime(get_template_directory() . '/assets/js/scripts.js'), true);

    // Enqueue wave.js script
    wp_enqueue_script('wave-js', get_template_directory_uri() . '/assets/js/wave.js', array('p5-js'), filemtime(get_template_directory() . '/assets/js/wave.js'), true);
}

add_action('wp_enqueue_scripts', 'meraboiler_enqueue_styles');
add_action('wp_enqueue_scripts', 'meraboiler_enqueue_scripts');

// Theme setup function
function meraboiler_theme_setup() {
    // Add theme support for custom logo
    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 280,
        'flex-height' => true,
        'flex-width' => true,
    ));

    // Add theme support for post thumbnails
    add_theme_support('post-thumbnails');

    // Set default post thumbnail size if needed
    // set_post_thumbnail_size(150, 150, true); // default 150x150 pixels, true for hard crop mode

    // Add additional image sizes if needed
    // add_image_size('custom-size', 220, 180); // 220 pixels wide by 180 pixels tall, hard crop mode

    // Add theme support for post thumbnails
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'meraboiler_theme_setup');

// Register menus
function meraboiler_register_menus() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'meraboiler'),
        'footer_menu' => __('Footer Menu', 'meraboiler'),
        'footer_column_1_menu' => __('Footer Column 1 Menu', 'meraboiler'),
        'footer_column_2_menu' => __('Footer Column 2 Menu', 'meraboiler'),
        'footer_column_3_menu' => __('Footer Column 3 Menu', 'meraboiler'),
        'footer_column_4_menu' => __('Footer Column 4 Menu', 'meraboiler'),
    ));
}

add_action('init', 'meraboiler_register_menus');

// Custom post type 'faq'
function create_faq_post_type() {
    register_post_type('faq',
        array(
            'labels' => array(
                'name' => __('FAQs'),
                'singular_name' => __('FAQ'),
                'add_new_item' => __('Add New FAQ'),
                'edit_item' => __('Edit FAQ'),
                'new_item' => __('New FAQ'),
                'view_item' => __('View FAQ'),
                'search_items' => __('Search FAQs'),
                'not_found' => __('No FAQs found'),
                'not_found_in_trash' => __('No FAQs found in Trash')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'faqs'),
            'supports' => array('title', 'editor', 'custom-fields'),
        )
    );
}
add_action('init', 'create_faq_post_type');

// Custom taxonomies for FAQ categories
function create_faq_taxonomy() {
    register_taxonomy(
        'faq_category',
        'faq',
        array(
            'labels' => array(
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
            ),
            'hierarchical' => true,
            'show_ui' => true,
            'show_admin_column' => true,
            'rewrite' => array('slug' => 'faq-category'),
        )
    );
}
add_action('init', 'create_faq_taxonomy');

// Register services post type
function register_services_post_type() {
    $labels = array(
        'name'               => _x('Services', 'post type general name', 'meraboiler'),
        'singular_name'      => _x('Service', 'post type singular name', 'meraboiler'),
        'menu_name'          => _x('Services', 'admin menu', 'meraboiler'),
        'name_admin_bar'     => _x('Service', 'add new on admin bar', 'meraboiler'),
        'add_new'            => _x('Add New', 'service', 'meraboiler'),
        'add_new_item'       => __('Add New Service', 'meraboiler'),
        'new_item'           => __('New Service', 'meraboiler'),
        'edit_item'          => __('Edit Service', 'meraboiler'),
        'view_item'          => __('View Service', 'meraboiler'),
        'all_items'          => __('All Services', 'meraboiler'),
        'search_items'       => __('Search Services', 'meraboiler'),
        'parent_item_colon'  => __('Parent Services:', 'meraboiler'),
        'not_found'          => __('No services found.', 'meraboiler'),
        'not_found_in_trash' => __('No services found in Trash.', 'meraboiler'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'service'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
    );

    register_post_type('service', $args);
}
add_action('init', 'register_services_post_type');


