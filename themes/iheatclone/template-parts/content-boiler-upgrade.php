<section class="px-4 background-section">
  <!--<div id="waveCanvasContainer">-->
  <!--    <canvas id="waveCanvas"></canvas>-->
  <!--</div>-->
  <div class="container pt-5 pb-0">
    <div id="waveCanvasContainer"></div>
    <div class="content text-center">
                    <a href="tel:02081502025" class="btn btn-danger btn-lg rounded-full py-2 px-3 text-white inline-block mb-3 md:hidden">
        <span class="fa fa-phone mr-2"></span>
        0208 150 2025
    </a>
      <div class="row gx-0 gx-xl-3">
   
        <div class="col-12 col-lg-4 text-center d-flex flex-column justify-content-center">
 

        <?php 
          // Get custom fields using ACF
          $title = get_field('title'); // Title of the section
          $description = get_field('hero_description'); // Description text
          $quote_shortcode = get_field('quote_shortcode'); // Shortcode for the quote form
          $background_image = get_field('background_image'); // Background image

          // Apply the background image to the section if it's set
          if ($background_image): ?>
            <style>
              .background-section {
                background-image: url('<?php echo esc_url($background_image['url']); ?>');
                background-size: cover;
                background-repeat: no-repeat;
              }
            </style>
          <?php endif; ?>
          
          <h1 class="display-5 fw-medium"><?php echo esc_html($title); ?></h1>
          
          <p class="mx-auto mt-3 fw-medium" style="max-width: 450px;"><?php echo wp_kses_post($description); ?></p>

        
          <div class="mt-3 pr-3">
            <?php echo do_shortcode($quote_shortcode); ?>
          </div>
        </div>
        <div class="col-12 col-lg-8 mt-3 mt-lg-0">
          <div class="owl-carousel owl-theme">
                <?php 
            // Loop through the slider items defined in ACF
            if (have_rows('slider_items')):
              while (have_rows('slider_items')): the_row();
                $slide_title = get_sub_field('title'); // Title for each slide
                $slide_image = get_sub_field('image'); // Image for each slide
                $slide_link = get_sub_field('link'); // Link for each slide
                $slide_description = get_sub_field('description'); // Link for each slide
            ?>
                   <div class="item">
                      <a href="<?php echo esc_url($slide_link); ?>" class="d-block bg-white rounded-lg border border-danger p-relative">
                         <h2 class="display-7 fw-medium p-2 text-center text-danger"><?php echo esc_html($slide_title); ?></h2>
                         <?php if ($slide_description): // Check if the description is set and not empty ?>
                            <p class="text-black fw-medium p-2 rounded-top text-center"> <?php echo esc_html($slide_description); ?></p>
                        <?php endif; ?>
                        <div class="img-box-with-text">
                          <img src="<?php echo esc_url($slide_image['url']); ?>" alt="<?php echo esc_attr($slide_title); ?>" class="img-fluid">
                        </div>
                      </a>
                    </div>
              <?php
              endwhile;
            endif;
            ?>
          </div>
        </div>
        <div class="col-12">
          <div class="row gy-3 align-items-center py-5 py-lg-5">
            <?php
            if (have_rows('brands', '')): // 'option' if ACF fields are set as Options page, or leave it blank if set on the home page
              while (have_rows('brands', '')):
                the_row();
                $brand_logo = get_sub_field('brand_logo');
                $brand_name = get_sub_field('brand_name');
                $brand_url = get_sub_field('brand_url');
                $brand_url = $brand_url ? $brand_url : esc_url('https://www.meraboiler.com/quote'); // Fallback to common URL if not set
                ?>
                <div class="col-3  text-center">
                  <a href="<?php echo esc_url($brand_url); ?>" class="brand-logo">
                    <?php if ($brand_logo): ?>
                      <img src="<?php echo esc_url($brand_logo['url']); ?>" alt="<?php echo esc_attr($brand_name); ?>"
                        class="img-fluid">
                    <?php else: ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-logo.png" alt="Default logo"
                        class="img-fluid">
                    <?php endif; ?>
                  </a>
                </div>
                <?php
              endwhile;
            endif;
            ?>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>
