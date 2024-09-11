<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="bg-white">
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
        <div class="container">
            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                <?php
                // Get the logo URL
                $logo_id = get_theme_mod('custom_logo');
                $logo_url = wp_get_attachment_image_url($logo_id, 'full');

                if ($logo_url) {
                    echo '<img width="280" class="img-fluid" src="' . esc_url($logo_url) . '" alt="' . get_bloginfo('name') . '">';
                } else {
                    bloginfo('name');
                }
                ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- <div class="collapse navbar-collapse" id="navbarNav">
                <?php
                // wp_nav_menu(array(
                //     'theme_location' => 'main-menu',
                //     'container' => false,
                //     'menu_class' => 'navbar-nav ms-auto',
                //     'fallback_cb' => false,
                // ));
                ?>
            </div> -->
        </div>
    </nav>
</header>
