<?php
/**
 * Template Name: Page Promotion
 */
get_header(); ?>

<div class="content">
    <?php while (have_posts()) : the_post(); ?>
        <!--<h1><?php //the_title(); ?></h1>-->
        <div class="entry-content">
            <?php the_content(); ?>
            <?php //echo do_shortcode('[fb_photos_masonry]'); ?>
            
            <?php echo do_shortcode('[ff id="1"]'); ?>
        </div>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
