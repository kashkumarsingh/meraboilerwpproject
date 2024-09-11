<section class="bg-v5-light-gray px-4">
    <div class="container block container-v5 mx-auto py-14 text-left">
        <h2 class="text-4xl lg:text-5xl font-medium">Discover Top-Rated Boilers for Every Budget</h2>
        <p class="mt-4 max-w-md">Explore our latest collection of energy-efficient boilers, with installation available as soon as the next day. Save money and enjoy premium quality with our expertly selected range.</p>
        <div class="mt-8 grid grid-cols-12 gap-6">
          <?php
           //query to fetch 'boiler' custom post type
           $boiler_query = new WP_Query(array(
                'post_type' => 'boiler',
                'posts_per_page' => -1,
                'post_status' => 'publish'
             ));
          
          //check if there are any posts to display
          
          if($boiler_query -> have_posts()):
              //Loop through the posts
              while($boiler_query-> have_posts()): $boiler_query->the_post();
              //retrieve meta data
              $price = get_post_meta(get_the_ID(), 'price', true);
              $brand_image_id = get_post_meta(get_the_ID(), 'brand_image', true);
              $brand_image_url = wp_get_attachment_url($brand_image_id);
              $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
              
              // Fallbacks in case no data is found
             //$price = $price ? $price : 'Price not available';
             //$image_url = $image_url ? $image_url : 'path_to_default_image.jpg'; // Update with an actual default image path
             //$brand_image_url = $brand_image_url ? $brand_image_url : 'path_to_default_brand_image.jpg'; // Update with an actual default brand image path
          ?>
          <div class="bg-white rounded-2xl p-4 col-span-12 sm:col-span-6 lg:col-span-3 cursor-pointer group">
                    <p class="font-medium text-md text-v5-dark-blue text-center lg:text-left bg-v5-light-gray rounded-lg py-2 px-3">
                        <?php echo esc_html($price); ?> <span class="block text-xs text-gray-400">(inc VAT)</span>
                    </p>
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>" class="max-w-[300px] w-full mx-auto img-fluid">
                    </a>
                    <div class="flex h-[30px]">
                        <img src="<?php echo esc_url($brand_image_url); ?>" alt="brand" class="w-[90px] ml-auto mr-auto lg:ml-0 self-center img-fluid">
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <h3 class="text-center lg:text-left font-medium mt-4 group-hover:underline">
                            <?php the_title(); ?>
                        </h3>
                    </a>
                    <a href="<?php echo esc_url('https://www.meraboiler.com/quote'); ?>" class="ml-auto mr-auto lg:ml-0 bg-gray-300 group-hover:bg-gray-400 rounded-2xl px-4 py-2 table mt-4 font-semibold text-center">Get a quote</a>
                </div>
          
            <?php
                endwhile;
            else :
                echo '<p>No boilers found</p>';
            endif;
            // Reset post data
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
