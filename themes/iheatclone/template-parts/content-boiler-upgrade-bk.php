<section class="px-4 background-section">
  <!--<div id="waveCanvasContainer">-->
  <!--    <canvas id="waveCanvas"></canvas>-->
  <!--</div>-->
  <div class="container pt-5 pb-0">
    <div id="waveCanvasContainer"></div>
    <div class="content">
      <div class="row gx-0 gx-xl-3">
        <div class="col-12 col-lg-4 text-center d-flex flex-column justify-content-center">
          <h1 class="display-5 fw-medium">Next Day Boiler Installation Service</h1>
          
          <p class="mx-auto mt-3 fw-medium" style="max-width: 450px;">Receive a fast <u>fixed-price quote</u> for your
            boiler replacement with no hidden costs. Experience stress-free boiler installation as early as the next
            day.</p>
        
          <div class="mt-3 pr-3">
            <!--<div class="trustpilot-widget" data-locale="en-GB" data-template-id="5419b732fbfb950b10de65e5"-->
            <!--  data-businessunit-id="5da44346e1bd580001119012" data-style-height="24px" data-style-width="100%"-->
            <!--  data-theme="light" style="position: relative;">-->
            <!--  <iframe title="Customer reviews powered by Trustpilot" loading="auto"-->
            <!--    src="https://widget.trustpilot.com/trustboxes/5419b732fbfb950b10de65e5/index.html?templateId=5419b732fbfb950b10de65e5&amp;businessunitId=5da44346e1bd580001119012#locale=en-GB&amp;styleHeight=24px&amp;styleWidth=100%25&amp;theme=light"-->
            <!--    style="position: relative; height: 24px; width: 100%; border: none; display: block; overflow: hidden;"></iframe>-->
            <!--</div>-->
            <?php echo do_shortcode('[cqf_quote_form]'); ?>
          </div>
        </div>
        <div class="col-12 col-lg-8 mt-3 mt-lg-0">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <a href="<?php echo esc_url('https://www.meraboiler.com/quote'); ?>"
                class="d-block bg-white rounded-lg border border-danger p-relative"
                style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/boiler-bg.webp'); background-repeat: no-repeat; background-size: cover;">
                <p class="text-danger fw-medium p-2 rounded-top text-center"><i class="fas fa-heart"></i> New Boiler
                  Installations</p>
                <div class="img-box-with-text">
                  <!--<h3 class="random-text">£1890 <br><span>all included</span></br><br><span>24kw boiler</span></br></h3>-->
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/24kw-boiler-banner.png"
                    alt="New boiler installation package" class="img-fluid">
                </div>
              </a>
            </div>
            <div class="item">
              <a href="<?php echo esc_url('https://www.meraboiler.com/quote'); ?>"
                class="d-block bg-white rounded-lg border border-danger p-relative"
                style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/boiler-bg.webp'); background-repeat: no-repeat; background-size: cover;">
                <p class="text-danger fw-medium p-2 rounded-top text-center"><i class="fas fa-heart"></i> Vaillant
                  Boiler Replacement</p>
                <div class="img-box-with-text">
                  <!--<h3 class="random-text">£1890 <br><span>all included</span></br></h3>-->
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/28kw-boiler-banner.png"
                    alt="New boiler installation package" class="img-fluid">
                </div>
              </a>
            </div>
            <!-- Add more items as needed -->
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