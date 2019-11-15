<?php
get_header();
?>

<main>

    <?php if (is_child(52)) : ?>

        <div class="section section--ping-pong p-0 py-xl-4">
            <div class="container-fluid no-gutters p-0">

                <div class="row justify-content-center">
                    <div class="col-xl-6 bg-size-cover teammember__profile--background"
                         style="background-image: url(<?php the_field('profile_photo'); ?>);
                             background-position: <?php the_field('profile_focus_point'); ?>;"
                         alt="<?php the_title(); ?>"
                    >
                        <img src="<?php the_field('profile_photo'); ?>" alt="<?php the_title(); ?>" class="img-fluid mt-2 d-block mx-auto d-xl-none teammember__profile--image">
                    </div>
                    <div class="col-lg-10 col-xl-6">
                        <div class="section--ping-pong__content-page py-2 py-xl-0 px-2 px-xl-3">
                            <?php if (have_posts()) : ?>
                                <h2><?php the_title(); ?></h2>

                                <?php /* Start the Loop */ ?>

                                <?php while (have_posts()) : the_post(); ?>
                                    <?php the_content(); ?>

                                <?php endwhile; ?>

                            <?php endif; ?>
                        </div>
                    </div>
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

        <?php endif; ?>

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


    <?php endif; ?>

</main>


<?php get_footer(); ?>
