<section class="bg-white px-4 mb-services">
    <div class="container block container-v5 mx-auto py-14 text-left">
        <h2 class="text-4xl lg:text-5xl font-medium">Expert Boiler Services</h2>
        <p class="mt-4 max-w-md">Our Services: Expert Boiler Installation, Service, and Central Heating in London</p>
        <div class="mt-8 grid grid-cols-12 gap-6">
            <?php
            $args = array(
                'post_type' => 'service',
                'posts_per_page' => -1,
            );
            $services_query = new WP_Query($args);
            if ($services_query->have_posts()) :
                while ($services_query->have_posts()) : $services_query->the_post();
                    get_template_part('template-parts/services/content', 'service');
                endwhile;
                wp_reset_postdata();
            else :
                echo '<p>' . __('No services found', 'meraboiler') . '</p>';
            endif;
            ?>
        </div>
    </div>
</section>
