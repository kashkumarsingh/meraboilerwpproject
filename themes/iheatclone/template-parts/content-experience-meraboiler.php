<section class="bg-blue-900 bg-cover px-4 overflow-hidden background-section" style="background-color: #14467B;">
    <div class="container block container-v5 mx-auto py-14 text-center">
        <h2 class="text-4xl lg:text-5xl font-medium text-white">Experience Meraboiler:<br>The Best of Everything for Your Home</h2>
        <p class="mt-4 text-white">Discover fixed online prices for quick and hassle-free installations.</p>
        <div class="grid grid-cols-12 gap-y-10 md:gap-10 text-left mt-14 mb-10">
            <?php
            // Query the experiences
            $args = array(
                'post_type' => 'whymeraboiler',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'ASC'
            );
            $experience_query = new WP_Query($args);

            if ($experience_query->have_posts()) :
                while ($experience_query->have_posts()) : $experience_query->the_post();
                    $icon = get_field('feature_icon');
            ?>
                <div class="col-span-12 md:col-span-6 lg:col-span-4 flex items-center justify-between">
                    
                    <?php if ($icon) : ?>
                        <img src="<?php echo esc_url($icon); ?>" class="h-12 w-12 mr-4" alt="<?php echo esc_attr(get_the_title()); ?>">
                    <?php endif; ?>
                    <div>
                        <h3 class="font-medium text-xl lg:text-3xl text-white mb-2"><?php echo esc_html(get_the_title()); ?></h3>
                        <p class="text-white font-light"><?php echo wp_kses_post(get_the_content()); ?></p>
                    </div>
                </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        <a href="<?php echo esc_url('/quote'); ?>" class="mt-6 inline-block px-6 py-3 rounded-full bg-buttonred hover:bg-buttonred-dark text-white font-normal btn btn-danger rounded-pill mt-3">Start your quote</a>
    </div>
</section>
