<section class="bg-white px-4 overflow-hidden">
    <div class="container block container-v5 mx-auto py-14 text-left">
        <h2 class="text-4xl lg:text-5xl font-medium text-v5-dark-blue">Help &amp; Advice</h2>
        <p class="mt-4 max-w-md text-v5-dark-blue">Read our in-depth guides and expert reviews, as well news and updates
            on the topic of central heating in Great Britain.</p>
        <h3 class="font-medium text-2xl mb-2 mt-8">Latest articles</h3>
        <div class="grid grid-cols-12 gap-y-8 md:gap-8">
            <?php
            // Query for fetching latest articles from WordPress
            $latest_articles_query = new WP_Query(array(
                'post_type' => 'post', // Change 'post' to your custom post type if needed
                'posts_per_page' => 3 // Number of articles to display
            ));
            // Loop through the latest articles
            if ($latest_articles_query->have_posts()) :
                while ($latest_articles_query->have_posts()) : $latest_articles_query->the_post();
            ?>
                    <a href="<?php the_permalink(); ?>" class="col-span-12 sm:col-span-6 md:col-span-4 group">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="w-full mb-4 rounded-lg">
                        <?php endif; ?>
                        <div class="flex items-center justify-between mb-2">
                            <p class="font-medium text-gray-400">
                                <?php echo get_the_date(); ?>
                            </p>
                            <p class="bg-gray-200 text-gray-400 text-sm rounded p-1"><?php echo get_post_type(); ?></p>
                        </div>
                        <h3 class="text-2xl font-medium text-v5-dark-blue mb-2 group-hover:underline"><?php the_title(); ?></h3>
                        <p class="text-v5-dark-blue"><?php the_excerpt(); ?></p>
                    </a>
            <?php
                endwhile;
                wp_reset_postdata(); // Reset post data after the loop
            endif;
            ?>
        </div>
        <div class="col-span-12 bg-v5-light-gray p-6 rounded-lg inline-block grid grid-cols-12 gap-6">
            <div class="col-span-12 md:col-span-4">
                <h3 class="font-medium text-2xl mb-2"><i class="fa-light fa-thumbs-up" aria-hidden="true"></i>
                    Popular articles</h3>
                <!-- Add popular articles links here -->
            </div>
            <div class="col-span-12 md:col-span-4">
                <h3 class="font-medium text-2xl mb-2"><i class="fa-light fa-fire" aria-hidden="true"></i> Boiler
                    reviews</h3>
                <!-- Add boiler reviews links here -->
            </div>
            <div class="col-span-12 md:col-span-4">
                <h3 class="font-medium text-2xl mb-2"><i class="fa-light fa-air-conditioner" aria-hidden="true"></i>
                    Air con reviews
                </h3>
                <!-- Add air con reviews links here -->
            </div>
        </div>
        <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="bg-black rounded-2xl text-white px-4 py-2 inline-block mt-8 font-semibold">Read more articles</a>
    </div>
</section>
