<?php
/*
Template Name: Boiler Installation
*/
?>
<?php get_header(); ?>
<section class="bg-lightgrey px-4 bg-cover bg-no-repeat bg-center section-boiler-installation-coventry"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/wave-bg-gray.png')">
    <div class="container-v5 mx-auto py-24 text-center">
        <!-- Owl Carousel Start -->
        <div class="item">
            <div class="relative inline-block">
                <h1 class="text-4xl lg:text-5xl font-medium max-w-[600px] mx-auto">
                    <i class="fa-solid fa-quote-left w-6 inline"></i>
                    Professional Boiler Installation in North London
                    <i class="fa-solid fa-quote-right w-6 inline"></i>
                </h1>
                <p class="mt-4 text-gray-400 text-lg">Ensuring your home has the right boiler installed by a Gas Safe Registered engineer is essential for efficiency and longevity. At MeraBoiler, we specialize in boiler installation in North London, offering expert services that ensure your system operates smoothly and reliably.</p>
                <img class="mx-auto w-full rounded-2xl"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/meraboiler_customer_quote.jpg"
                    alt="Heating system installation by MeraBoiler Team">
                <p class="absolute left-2 bottom-2 text-white opacity-30">MeraBoiler Team</p>
            </div>
        </div>
        <!-- Owl Carousel End -->
    </div>
</section>
<!-- quote -->
<section class="bg-white px-4">
    <div class="grid container-v5 mx-auto py-12 md:py-24 text-left grid-cols-12 gap-2 md:gap-8">
        <div class="col-span-12 md:col-span-6">
            <h2 class="text-4xl font-medium max-w-[400px]">Boiler Repair & Maintenance in North London</h2>
            <p class="mt-4">Do you require boiler repair or maintenance in North London? Here are some signs that indicate your system might need professional attention:</p>
            <ul class="nav list-disc flex flex-col p-3 mt-4">
                <li class="nav-item"><strong>Strange Noises</strong>: Is your boiler making unusual knocking or clunking sounds?</li>
                <li class="nav-item"><strong>Pilot Light Issues</strong>: Does the pilot light frequently go out? Our engineers can diagnose and fix this issue.</li>
                <li class="nav-item"><strong>Pressure Problems</strong>: Is the boiler pressure consistently low? Proper maintenance can help avoid these issues.</li>
                <li class="nav-item"><strong>Leaks</strong>: Are there signs of water leakage? Immediate repair might be necessary.</li>
                <li class="nav-item"><strong>Thermostat Unresponsiveness</strong>: Is the system failing to respond to adjustments in temperature? Consider getting professional help.</li>
            </ul>
            <p class="mt-4">If you're experiencing any of these issues, it's crucial to address them promptly with professional boiler services in North London.</p>
            <p class="mt-4">At MeraBoiler, our team consists of fully qualified and Gas Safe Register accredited engineers. We are equipped with the necessary tools and expertise to diagnose and resolve your boiler problems efficiently.</p>
        </div>
        <div class="col-span-12 md:col-span-6 mt-6 md:mt-0">
            <div class="relative inline-block col-span-6">
                <img class="mx-auto w-full rounded-2xl"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/meraboiler_hq.jpg"
                    alt="Heating system service by MeraBoiler">
            </div>
        </div>
    </div>
</section>
<!-- why meraboiler -->
<section class="bg-v5-light-gray bg-cover bg-no-repeat bg-center">
    <div class="container block container-v5 mx-auto py-12 md:py-24 text-center">
        <h2 class="text-5xl font-medium mb-4">Your Boiler Installation in North London in 5 Easy Steps</h2>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 mt-16">
            <div class="lg:col-span-12">
                <div class="bg-white p-6 rounded-2xl flex justify-between items-center mt-4">
                    <div class="w-full">
                        <div class="flex justify-between items-center">
                            <h3 class="text-2xl font-medium">Boiler Maintenance in North London</h3>
                            <label for="toggleBoilerMain" class="cursor-pointer">
                                <span class="fa fa-arrow-down"></span>
                            </label>
                        </div>
                        <input type="checkbox" id="toggleBoilerMain" class="hidden peer">
                        <div class="peer-checked:block mt-4 text-left">
                            <p>Regular boiler maintenance is key to ensuring the safety and efficiency of your heating system. Annual servicing helps prevent potential breakdowns and ensures optimal performance. Our thorough checks can identify and resolve issues early, potentially saving you from costly repairs down the line.</p>
                            <div class="d-flex mt-4">
                                <div class="col-md-6" style="padding: 0px;"><a class="media-link btn btn-danger btn-lg rounded-full py-2 px-6 text-white" style="width: 90%;" href="tel:02081502025">CALL US NOW</a></div>
                                <div class="col-md-6 mb-mg-top" style="padding: 0px;"><a class="media-link btn btn-danger btn-lg rounded-full py-2 px-6 text-white" style="width: 90%;" href="<?php echo esc_url(home_url('/quote')); ?>">GET FREE QUOTE</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-2xl flex justify-between items-center mt-4">
                    <div class="w-full">
                        <div class="flex justify-between items-center">
                            <h3 class="text-2xl font-medium">Why Choose MeraBoiler for Your Boiler Installation in North London?</h3>
                            <label for="toggleWhyChooseUs" class="cursor-pointer">
                                <span class="fa fa-arrow-down"></span>
                            </label>
                        </div>
                        <input type="checkbox" id="toggleWhyChooseUs" class="hidden peer">
                        <div class="peer-checked:block mt-4 text-left">
                            <p>MeraBoiler has built a strong reputation in North London for delivering high-quality boiler installation services. Whether you need repair, maintenance, or a full install, we provide reliable solutions tailored to meet your home heating needs. Our commitment to excellence ensures every job is completed to the highest standards of safety and efficiency.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-2xl flex justify-between items-center mt-4">
                    <div class="w-full">
                        <div class="flex justify-between items-center">
                            <h4 class="text-2xl font-medium">Conclusion</h4>
                            <label for="toggleConclusion" class="cursor-pointer">
                                <span class="fa fa-arrow-down"></span>
                            </label>
                        </div>
                        <input type="checkbox" id="toggleConclusion" class="hidden peer">
                        <div class="peer-checked:block mt-4 text-left">
                            <p>For professional boiler installation services in North London, trust MeraBoiler to provide prompt, reliable service backed by years of experience and expertise. Contact us today at 0208 150 2025 to schedule an appointment or request a free quote.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- benefits -->
<?php get_template_part('template-parts/content', 'cta'); ?>

<?php get_footer(); ?>

