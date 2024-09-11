<div class="bg-v5-light-gray rounded-2xl p-4 col-span-12 sm:col-span-6 lg:col-span-4 cursor-pointer group">
    <a href="<?php echo esc_url("/service-plan");?>">
         <h2 class="text-center lg:text-left font-medium group-hover:underline mb-4"><?php the_title(); ?></h2>
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('full', ['class' => 'max-w-[300px] w-full mx-auto img-fluid']); ?>
        <?php endif; ?>
        <p class="font-medium text-md text-v5-dark-blue text-center lg:text-left bg-v5-light-gray rounded-lg py-2 px-3"><?php echo esc_html(get_the_excerpt()); ?></p>
    </a>
</div>
