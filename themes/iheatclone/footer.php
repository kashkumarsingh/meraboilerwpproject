<!-- Footer -->

<footer class="footer-wrap bg-blue-900 py-16">
    <div class="container mx-auto">
        <div class="grid lg:grid-cols-4 md:grid-cols-4 gap-4 mt-4">
            <div class="footer-widget col-span-1">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/meraboiler-footer-logo.png'); ?>" class="img-responsive" alt="Meraboiler" width="280px">
                </a>
                <p class="comp-desc text-gray-600"><?php _e('We believe in excellent service in emergencies, hence we have experienced Gas Safe registered engineers standing by for emergency call out 24 hours a day, 7 days a week, 365 days of the year.', 'meraboiler'); ?></p>
                <ul class="social-profile style1 list-none p-0">

                    <li><span class="sr-only">Follow us on Facebook</span><a href="https://www.facebook.com/officialMeraBoiler/" target="_blank" rel="noopener" class="text-gray-600"><i class="fab fa-facebook"></i></a></li>

                    <li><span class="sr-only">Follow us on Instagram</span><a href="http://instagram.com/meraboiler/" target="_blank" rel="noopener" class="text-gray-600"><i class="fab fa-instagram"></i></a></li>

                    <li><span class="sr-only">Contact us on WhatsApp</span><a href="https://api.whatsapp.com/send/?phone=447857870000&text=Hi+Meraboiler+I+need+Quote+%2F+Assistance&type=phone_number&app_absent=0" target="_blank" rel="noopener" class="text-gray-600"><i class="fab fa-whatsapp"></i></a></li>
                </ul>

            </div>

            <div class="footer-widget col-span-1">

                <h3 class="footer-widget-title"><?php _e('Our Solution', 'meraboiler'); ?></h3>

                <ul class="footer-menu list-none p-0">

                    <li><a href="<?php echo esc_url(home_url('/about-us')); ?>" class="text-gray-600"><?php _e('About Our Company', 'meraboiler'); ?></a></li>

                    <li><a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="text-gray-600"><?php _e('Contact Us', 'meraboiler'); ?></a></li>

                </ul>

            </div>

            <div class="footer-widget col-span-1">

                <h3 class="footer-widget-title"><?php _e('Quick Link', 'meraboiler'); ?></h3>

                <ul class="footer-menu list-none p-0">

                    <li><a href="<?php echo esc_url(home_url('/service-plan')); ?>" class="text-gray-600"><?php _e('Service Plans', 'meraboiler'); ?></a></li>

                    <li><a href="<?php echo esc_url('https://www.meraboiler.com/boiler-install'); ?>" class="text-gray-600"><?php _e('Boiler Install', 'meraboiler'); ?></a></li>

                    <li><a href="<?php echo esc_url('https://www.meraboiler.com/blog'); ?>" class="text-gray-600"><?php _e('News & Articles', 'meraboiler'); ?></a></li>

                    <li><a href="<?php echo esc_url('https://www.meraboiler.com/sitemap.xml'); ?>" class="text-gray-600"><?php _e('Sitemap', 'meraboiler'); ?></a></li>



                </ul>

            </div>

            <div class="footer-widget col-span-1">

                <h3 class="footer-widget-title"><?php _e('Official Info', 'meraboiler'); ?></h3>

                <ul class="contact-info list-none p-0">

                    <li>

                        <i class="fa fa-map-marker"></i>

                        <h6><?php _e('Location', 'meraboiler'); ?></h6>

                        <p class="text-gray-600"><?php _e('Suite #1, Greenleaf House, Pottersbar, Hertsfordshire, EN6 1AD', 'meraboiler'); ?></p>

                    </li>

                    <li>

                        <i class="fa fa-envelope"></i>

                        <h6><?php _e('Email', 'meraboiler'); ?></h6>

                        <a href="mailto:info@meraboiler.com" class="text-gray-600">info@meraboiler.com</a>

                    </li>

                    <li>

                        <i class="fa fa-phone"></i>

                        <h6><?php _e('Phone', 'meraboiler'); ?></h6>

                        <a href="tel:02081502025" class="text-gray-600">02081502025</a>

                    </li>

                </ul>

            </div>



        </div>

    </div>

</footer>

       <div class="footer-copyright">

            <div class="container">

                <div class="row">

                    <div class="col-sm-12">

                        <p class="copyright-text">Price applicable for changing an existing combi boiler and does exclude VAT. T

                            &amp; Cs Apply.©

                            2024 meraboiler | All Right Reserved

                        </p>

                    </div>

                </div>

            </div>

        </div>

<?php wp_footer(); ?>

<!-- DelightChat -->

<script>
    var wa_btnSetting = {
        "btnColor": "#25D366",
        "ctaText": "WhatsApp us",
        "cornerRadius": 7,
        "marginBottom": 20,
        "marginLeft": 20,
        "marginRight": 20,
        "btnPosition": "right",
        "whatsAppNumber": "447857870000",
        "welcomeMessage": "Hi Meraboiler I need Quote / Assistance",
        "zIndex": 100,
        "btnColorScheme": "light",
    };
    var wa_widgetSetting = {
        "title": "Meraboiler",
        "subTitle": "Typically replies in a minute",
        "headerBackgroundColor": "#14467b",
        "headerColorScheme": "light",
        "greetingText": "Hi there! \nHow can I help you?",
        "ctaText": "Start Chat",
        "btnColor": "#dc3545",
        "cornerRadius": 7,
        "welcomeMessage": "Hello",
        "btnColorScheme": "light",
        "brandImage": "<?php echo esc_url(wp_get_attachment_url(261)); ?>?>",
        "darkHeaderColorScheme": {
            "title": "#333333",
            "subTitle": "#4F4F4F"
        }
    };
    window.onload = () => {
        _waEmbed(wa_btnSetting, wa_widgetSetting);
    };
</script>

</body>

</html>

