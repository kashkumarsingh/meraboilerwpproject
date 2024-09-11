<footer class="bg-blue-900 pt-8 overflow-hidden">
    <div class="container mx-auto pb-8 px-6 text-md">
        <div class="flex justify-between text-white flex-col md:flex-row text-center md:text-left">
            <div class="col-sm">
                <a class="mb-8 block" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/meraboiler-footer-logo.png"
                        alt="Meraboiler small white logo" class=" mx-auto md:mr-auto md:ml-0">
                </a>
                <ul class="text-center md:text-left">
                    <li class="mb-2 md:mb-3 text-sm">©<?php echo date("Y"); ?> Meraboiler.</li>
                    <li class="mb-2 md:mb-1 text-sm">All rights reserved.</li>
                    <li class="mt-4 mx-auto flex w-max md:w-auto mb-16 md:mb-0">
                        <?php
                        // Social media icons
                        $social_icons = array(
                            'facebook' => 'fa-square-facebook',
                            'twitter' => 'fa-square-x-twitter',
                            'instagram' => 'fa-square-instagram',
                            'linkedin' => 'fa-linkedin',
                            'youtube' => 'fa-square-youtube',
                        );

                        foreach ($social_icons as $icon => $class) {
                            $url = get_theme_mod($icon . '_url'); // Get social media URL from theme customizer
                            if (!empty($url)) {
                                echo '<a href="' . esc_url($url) . '" target="_blank" rel="nofollow">';
                                echo '<i class="fa-brands ' . esc_attr($class) . ' text-4xl mr-2" aria-hidden="true"></i>';
                                echo '</a>';
                            }
                        }
                        ?>
                    </li>
                </ul>
            </div>
            <!-- Repeat similar structure for other columns -->
            <div class="col-sm">
                <?php
                // Display "Footer Column 1" menu
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer_column_1_menu',
                        'container' => false,
                        'menu_class' => '', // Add your custom classes here
                        // You can add more arguments as needed
                    )
                );
                ?>
            </div>

            <div class="col-sm">
                <?php
                // Display "Footer Column 2" menu
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer_column_2_menu',
                        'container' => false,
                        'menu_class' => '', // Add your custom classes here
                        // You can add more arguments as needed
                    )
                );
                ?>
            </div>

            <div class="col-sm">
                <?php
                // Display "Footer Column 3" menu
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer_column_3_menu',
                        'container' => false,
                        'menu_class' => '', // Add your custom classes here
                        // You can add more arguments as needed
                    )
                );
                ?>
            </div>

            <div class="col-sm">
                <?php
                // Display "Footer Column 4" menu
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer_column_4_menu',
                        'container' => false,
                        'menu_class' => '', // Add your custom classes here
                        // You can add more arguments as needed
                    )
                );
                ?>
            </div>

        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>