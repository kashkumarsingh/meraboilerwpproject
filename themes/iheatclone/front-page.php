<?php
/*
Template Name: Front Page
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        get_template_part('template-parts/content', 'boiler-upgrade');
        get_template_part('template-parts/content', 'boiler-offer');
        get_template_part('template-parts/content', 'save-money');
        get_template_part('template-parts/content', 'trusted-services');
        get_template_part('template-parts/content', 'stress-free-installations');
        get_template_part('template-parts/content', 'premium-boilers');
        get_template_part('template-parts/content', 'experience-meraboiler');
        get_template_part('template-parts/services/content', 'service-list');
        get_template_part('template-parts/content', 'faqs');
        get_template_part('template-parts/content', 'meraboiler-articles');
        // Include the CTA section
        get_template_part('template-parts/content', 'cta');
        ?>
    </main><!-- .site-main -->
</div><!-- .content-area -->

<?php
get_footer();
?>