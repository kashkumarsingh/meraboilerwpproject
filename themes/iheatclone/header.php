<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-199805796-1');
    </script>
    <script id="myJSONID" type="application/ld+json">
      {
        "@context": "https://schema.org/",
        "@type": "Product",
        "name": "Mera Boiler",
        "image": "https://meraboiler.com/images/newlogo.png",
        "description": "We Offer Boiler Installation Services at 0% Finance",
        "sku": "RP-006",
        "brand": "https://meraboiler.com/images/newlogo.png",
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "5",
          "ratingCount": "247",
          "reviewCount": "3"
        },
        "review": [{
          "@type": "Review",
          "author": "Kieron Mcnulty",
          "datePublished": "Nov 07, 2020",
          "description": "Mera Boiler Did Excellent Job",
          "name": "Great job!",
          "reviewRating": {
            "@type": "Rating",
            "bestRating": "5",
            "ratingValue": "5"
          }
        }, {
          "@type": "Review",
          "author": "Florian Ristea",
          "datePublished": "Oct 07, 2020",
          "description": "First class communication and job well done from start to finish",
          "name": "Fast. Professional",
          "reviewRating": {
            "@type": "Rating",
            "bestRating": "5",
            "ratingValue": "5"
          }
        }, {
          "@type": "Review",
          "author": "John Williams",
          "datePublished": "Feb 05, 2020",
          "description": "Really good job from Mera Boiler - highly recommended",
          "name": "Excellent work",
          "reviewRating": {
            "@type": "Rating",
            "bestRating": "5",
            "ratingValue": "5"
          }
        }]
      }
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-53H6BX3T');</script>
<!-- End Google Tag Manager -->

    <?php wp_head(); ?>
</head>




<body <?php body_class(); ?>>
    
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-53H6BX3T"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header class="sticky top-0 z-50 bg-white transition-transform duration-300">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div class="container">

                <!-- Logo -->

                <a class="navbar-brand site-logo" href="<?php echo esc_url(home_url('/')); ?>">

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



                <!-- Button and Toggler for Mobile -->

                <div class="d-flex align-items-center">



                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                        <span class="navbar-toggler-icon"></span>

                    </button>

                </div>



                <!-- Navigation Menu -->

                <div class="collapse navbar-collapse" id="navbarNav">

                    <ul class="navbar-nav ms-auto flex items-center justify-center space-x-4">

                        <?php
                        // Fetch the main menu items
                        $menu_items = wp_get_nav_menu_items('main-menu');

                        // Loop through each menu item and create the list items
                        foreach ($menu_items as $item) {
                            if ($item->menu_item_parent == 0) {
                                $child_items = array_filter($menu_items, function ($submenu) use ($item) {
                                    return $submenu->menu_item_parent == $item->ID;
                                });

                                if (empty($child_items)) {
                                    echo '<li class="nav-item">';
                                    echo '<a class="nav-link text-gray-900 hover:text-gray-700" href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a>';
                                    echo '</li>';
                                } else {
                                    echo '<li class="nav-item relative group">';
                                    echo '<button class="nav-link text-gray-900 hover:text-gray-700 group-hover:text-gray-900 focus:outline-none" aria-haspopup="true">';
                                    echo '<span>' . esc_html($item->title) . '</span>';
                                    echo '<svg class="w-4 h-4 ml-1 -mr-1 transition-transform duration-200 transform group-hover:rotate-180" viewBox="0 0 20 20" fill="currentColor">';
                                    echo '<path fill-rule="evenodd" d="M6.293 7.293a1 1 0 011.414 0L10 9.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />';
                                    echo '</svg>';
                                    echo '</button>';
                                    echo '<ul class="dropdown-menu absolute hidden z-10 left-0 mt-2 w-36 bg-white border border-gray-200 shadow-lg rounded-md divide-y divide-gray-200 group-hover:block">';
                                    foreach ($child_items as $child_item) {
                                        echo '<li><a class="dropdown-item block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="' . esc_url($child_item->url) . '">' . esc_html($child_item->title) . '</a></li>';
                                    }
                                    echo '</ul>';
                                    echo '</li>';
                                }
                            }
                        }
                        ?>

                        <li class="nav-item">
                              <a href="<?php echo esc_url(site_url('/careers')); ?>" class="btn btn-primary btn-lg rounded-full py-2 px-6 text-white blink-button">
                                We are Hiring
                            </a>
                            <a href="tel:02081502025" class="btn btn-danger btn-lg rounded-full py-2 px-6 text-white">
                                <span class="fa fa-phone mr-2"></span>
                                02081502025
                            </a>
                        </li>

                    </ul>


                </div>



            </div>

        </nav>

        <style>
            @media (max-width: 992px) {

                .navbar-toggler {

                    margin-left: auto;

                }

            }

            @media (max-width: 576px) {

                .navbar-brand {

                    flex-grow: 1;

                }

            }
        </style>
    </header>

    <?php wp_footer(); ?>

</body>



</html>