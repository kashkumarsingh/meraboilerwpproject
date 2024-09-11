# Meraboiler WordPress Theme

## Overview
The Meraboiler WordPress Theme is a custom theme designed for the Meraboiler project. It features a clean, modern design and is built with advanced functionalities to cater to the needs of the website. This theme utilizes several plugins to enhance its capabilities, from SEO to security and performance optimization.

Installation
Clone the repository:

bash
Copy code
git clone https://github.com/kashkumarsingh/meraboilerwp.git
Upload the theme to your WordPress installation:

Go to the WordPress admin dashboard.
Navigate to Appearance > Themes.
Click Add New, then Upload Theme.
Choose the meraboilerwp.zip file and click Install Now.
Activate the theme.
Install required plugins (listed below) for full functionality.

## Features

- Customizable theme options
- Integration with Advanced Custom Fields (ACF) PRO
- Support for WooCommerce
- Responsive design
- Performance optimization

## Code Samples

Here are some examples of PHP code from this theme:

### Custom Post Type Registration

```php
function create_custom_post_type() {
    register_post_type('custom_post',
        array(
            'labels'      => array(
                'name'          => __('Custom Posts'),
                'singular_name' => __('Custom Post'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports'    => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'create_custom_post_type');

## Enqueue Scripts and Styles
function theme_enqueue_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

Installation
Download the repository.
Upload the theme folder to your WordPress wp-content/themes directory.
Activate the theme from the WordPress admin dashboard.
License
This project is licensed under the MIT License - see the LICENSE file for details.
