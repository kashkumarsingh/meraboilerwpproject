<section class="bg-v5-light-gray px-4">
    <div class="container block container-v5 mx-auto py-14 text-left">
        <h2 class="text-4xl lg:text-5xl font-medium">Discover Top-Rated Boilers for Every Budget</h2>
        <p class="mt-4 max-w-md">Explore our latest collection of energy-efficient boilers, with installation available as soon as the next day. Save money and enjoy premium quality with our expertly selected range.</p>
        <div class="mt-8 grid grid-cols-12 gap-6">
            <?php
             // Define base URLs for product and brand images
            $product_image_base_url = get_template_directory_uri() . '/assets/images/product/';
            $brand_image_base_url = get_template_directory_uri() . '/assets/images/productbrand/';
            // Loop through boiler data
            $boilers = array(
             array(
                        'name' => 'Vaillant ecoFIT 24/25/28kW Combi Boiler - Best Seller',
                        'price' => 'Starting from £1890',
                        'image' => $product_image_base_url . 'vaillant-combi-boiler.png',
                        'brand' => $brand_image_base_url . 'vaillant.png',
                    ),
                    array(
                        'name' => 'Ariston Boiler  E-Combi One 2000 24kW - Gas Boiler',
                        'price' => 'Starting from £1650',
                        'image' => $product_image_base_url . 'ariston-combi-boiler.png',
                        'brand' => $brand_image_base_url . 'ariston.png',
                    ),
                    array(
                        'name' => 'Worcester Bosch Greenstar 2000 25kW',
                        'price' => 'Starting from £1980',
                        'image' => $product_image_base_url . 'worcester-combi-boiler.png',
                        'brand' => $brand_image_base_url . 'worcester.png',
                    ),
                    array(
                        'name' => 'Glow-Worm  Energy7 Combi Boiler - Quiet Mark',
                        'price' => 'Starting from £1875',
                        'image' => $product_image_base_url . 'glowwarm-combi-boiler.png',
                        'brand' => $brand_image_base_url . 'glowworm.png',
                    ),
                );

            foreach ($boilers as $boiler) :
            ?>
               <div class="bg-white rounded-2xl p-4 col-span-12 sm:col-span-6 lg:col-span-3 cursor-pointer group">
                <p class="font-medium text-md text-v5-dark-blue text-center lg:text-left bg-v5-light-gray rounded-lg py-2 px-3">
                    <?php echo esc_html($boiler['price']); ?> <span class="block text-xs text-gray-400">(inc VAT)</span>
                </p>
                <a href="<?php echo esc_url('https://www.meraboiler.com/quote'); ?>">
                    <img src="<?php echo esc_url($boiler['image']); ?>" alt="<?php echo esc_attr($boiler['name']); ?>" class="max-w-[300px] w-full mx-auto img-fluid">
                </a>
                <div class="flex h-[30px]">
                    <img src="<?php echo esc_url($boiler['brand']); ?>" alt="brand" class="w-[90px] ml-auto mr-auto lg:ml-0 self-center img-fluid">
                </div>
                <a href='<?php echo esc_url("https://www.meraboiler.com/quote");?>'>
                    <h3 class="text-center lg:text-left font-medium mt-4 group-hover:underline">
                        <?php echo esc_html($boiler['name']); ?>
                    </h3>
                </a>
                <a href="<?php echo esc_url('https://www.meraboiler.com/quote'); ?>" class="ml-auto mr-auto lg:ml-0 bg-gray-300 group-hover:bg-gray-400 rounded-2xl px-4 py-2 table mt-4 font-semibold text-center">Get a quote</a>
            </div>

            <?php endforeach; ?>
        </div>
    </div>
</section>
