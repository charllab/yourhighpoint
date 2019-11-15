<?php
get_header();
?>

<main>

    <?php if (is_child(52)) : ?>

        <div class="container py-2">
            <div class="row">
                <div class="col">
                    <h1 class="text-center mb-2">Our Team</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <?php if (have_posts()) : ?>
                        <h2 class="text-center text-lg-left"><?php the_title(); ?></h2>

                        <?php /* Start the Loop */ ?>

                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>

                        <?php endwhile; ?>

                    <?php wp_reset_postdata(); endif ?>
                </div>
            </div>
        </div>

    <?php elseif (is_page([50])) : ?>

        <?php if (get_field('page_banner')) : ?>
            <div class="general-page__banner-bg bg-size-cover"
                 style="
                     background-image: url(<?php the_field('page_banner'); ?>);
                     background-position: <?php the_field('banner_position'); ?>;
                     "></div>
        <?php endif; ?>

        <?php if (have_posts()) : ?>

            <?php /* Start the Loop */ ?>

            <?php while (have_posts()) : the_post(); ?>
                <h1 class="text-center py-2 mb-0"><?php the_title(); ?></h1>
                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php wp_reset_postdata(); endif ?>

    <?php else : ?>

        <?php if (get_field('page_banner')) : ?>
            <div class="general-page__banner-bg bg-size-cover"
                 style="
                     background-image: url(<?php the_field('page_banner'); ?>);
                     background-position: <?php the_field('banner_position'); ?>;
                     "></div>
        <?php endif; ?>

        <div class="container py-2">

            <div class="row">
                <div class="col">

                    <?php if (have_posts()) : ?>

                        <?php /* Start the Loop */ ?>

                        <?php while (have_posts()) : the_post(); ?>
                            <h1 class="text-center mb-2"><?php the_title(); ?></h1>
                            <?php the_content(); ?>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->


    <?php wp_reset_postdata(); endif ?>

</main>


<?php get_footer(); ?>
