<?php
/*
Template Name: Boiler Installation London
*/
?>

<?php get_header(); ?>

<main id="main" class="site-main" role="main">

    <section class="bg-gray-100 px-4 py-14">
        <div class="container block container-v5 mx-auto">
            <?php
            // Start the WordPress loop
            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>

            <?php
                endwhile;
            else :
                // If no content found
                echo '<p>No content found.</p>';
            endif;
            ?>
        </div>
    </section>

</main><!-- #main -->

<?php get_footer(); ?>
