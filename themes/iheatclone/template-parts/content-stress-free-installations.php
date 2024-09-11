<section class="bg-v5-light-blue px-4 overflow-hidden">
    <div class="container container-v5 mx-auto py-14 text-center flex flex-wrap md:flex-nowrap items-stretch gap-10">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="w-full bg-cover">
                    <div class="embed-container w-full h-auto">
                        <?php
                        // Replace the video URL with your YouTube video URL
                        echo wp_oembed_get('https://youtube.com/shorts/ZVpRmM7G_8U');
                        ?>
                    </div>
       
                </div>

            </div>
            <div class="col-12 col-lg-4">
                <div class="max-w-full lg:min-w-[380px] text-left my-auto">
                    <div class="w-full">
                        <h2 class="text-4xl lg:text-5xl font-medium mb-4 text-v5-dark-blue">Stress-free installations</h2>
                        <p class="text-v5-dark-blue">We take care of everything for you - it really is that easy.</p>
                        <ul class="mt-4 text-v5-dark-blue p-0">
                            <li><i class="fa-solid fa-square-check text-green-600" aria-hidden="true"></i> 5 star
                                ‘Excellent’ TrustPilot rating
                            </li>
                            <li><i class="fa-solid fa-square-check text-green-600" aria-hidden="true"></i> Free annual
                                service reminders</li>
                            <li><i class="fa-solid fa-square-check text-green-600" aria-hidden="true"></i> 0% finance
                                available</li>
                            <li><i class="fa-solid fa-square-check text-green-600" aria-hidden="true"></i> Transparent,
                                fixed price quotes</li>
                        </ul>
                        <a href="<?php echo esc_url('https://www.meraboiler.com/quote'); ?>"
                            class="mt-6 inline-block px-6 py-3 rounded-full bg-buttonred hover:bg-buttonred-dark text-white font-semibold btn btn-danger rounded-pill mt-3">Fixed
                            price quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>