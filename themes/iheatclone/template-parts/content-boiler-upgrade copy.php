<section class="px-4 bg-cover bg-v5-light-gray"
  style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/wave-bg-gray.png');">
  <div class="container pt-5 pb-0">
    <div class="row gx-0 gx-xl-3">
      <div class="col-12 col-lg-4 text-center d-flex flex-column justify-content-center">
        <h1 class="display-5 fw-medium">Next Day Boiler Installation Service</h1>
        <p class="mx-auto mt-3 fw-medium" style="max-width: 300px;">Receive a fast <u>fixed-price quote</u> for your boiler replacement with no hidden costs. Experience stress-free boiler installation as early as the next day.</p>
        <a href="<?php echo site_url('https://www.meraboiler.com/quote'); ?>" class="btn btn-danger btn-lg rounded-pill mt-3">
          Get A Quote
        </a>
        <div class="mt-5 pr-3">
          <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5419b732fbfb950b10de65e5"
            data-businessunit-id="5da44346e1bd580001119012" data-style-height="24px" data-style-width="100%"
            data-theme="light" style="position: relative;">
            <iframe title="Customer reviews powered by Trustpilot" loading="auto"
              src="https://widget.trustpilot.com/trustboxes/5419b732fbfb950b10de65e5/index.html?templateId=5419b732fbfb950b10de65e5&amp;businessunitId=5da44346e1bd580001119012#locale=en-GB&amp;styleHeight=24px&amp;styleWidth=100%25&amp;theme=light"
              style="position: relative; height: 24px; width: 100%; border: none; display: block; overflow: hidden;"></iframe>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-8 mt-3 mt-lg-0">
        <div class="owl-carousel owl-theme">
          <div class="item">
            <a href="<?php echo site_url('/quote/boiler'); ?>" class="d-block bg-white rounded-lg border border-danger"
              style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/boiler-bg.webp'); background-repeat: no-repeat; background-size: cover;">
              <p class="text-danger fw-medium p-2 rounded-top text-center"><i class="fas fa-heart"></i> New Boiler
                Installations</p>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-boiler-image.png"
                alt="New boiler installation package" class="img-fluid">
            </a>
          </div>
          <div class="item">
            <a href="<?php echo site_url('/quote/boiler'); ?>" class="d-block bg-white rounded-lg border border-danger"
              style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/boiler-bg.webp'); background-repeat: no-repeat; background-size: cover;">
              <p class="text-danger fw-medium p-2 rounded-top text-center"><i class="fas fa-heart"></i> New Boiler
                Installations</p>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-boiler-image.png"
                alt="New boiler installation package" class="img-fluid">
            </a>
          </div>
          <div class="item">
            <a href="<?php echo site_url('/quote/boiler'); ?>" class="d-block bg-white rounded-lg border border-danger"
              style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/boiler-bg.webp'); background-repeat: no-repeat; background-size: cover;">
              <p class="text-danger fw-medium p-2 rounded-top text-center"><i class="fas fa-heart"></i> New Boiler
                Installations</p>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-boiler-image.png"
                alt="New boiler installation package" class="img-fluid">
            </a>
          </div>
          <!-- Add more items as needed -->
        </div>
      </div>
      <div class="col-12">
        <div class="row gy-3 align-items-center py-5 py-lg-5">
          <?php
          $brands = new WP_Query(array('post_type' => 'brand', 'posts_per_page' => -1));
          if ($brands->have_posts()):
            while ($brands->have_posts()):
              $brands->the_post();
              $brand_url = get_field('brand_url');
              $brand_logo = get_the_post_thumbnail_url(get_the_ID(), 'full');
              if (!$brand_logo) {
                $brand_logo = get_template_directory_uri() . '/assets/images/default-logo.png'; // Fallback image
              }
              ?>
              <div class="col-4 col-md-2 text-center">
                <a href="<?php echo esc_url($brand_url); ?>" class="h-6">
                  <img src="<?php echo esc_url($brand_logo); ?>" alt="<?php the_title_attribute(); ?>"
                    class="img-fluid h-6">
                </a>
              </div>
              <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</section>