<?php
get_header();
?>

<main>

    <?php if (is_child(52)) : ?>

        <div class="section section--ping-pong p-0 py-xxl-4">
            <div class="container-fluid no-gutters p-0">

                <div class="row justify-content-center">
                    <div class="col-xxl-6 bg-size-cover"
                         style="background-image: url(<?php the_field('profile_photo'); ?>);
                             background-position: <?php the_field('profile_focus_point'); ?>;"
                         alt="<?php the_title(); ?>"
                    ></div>
                    <div class="col-lg-10 col-xxl-6">
                        <div class="section--ping-pong__content-page py-2 py-xxl-0 px-2 px-xl-3">
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

    <?php else : ?>

        <div class="container py-2">

            <div class="row">
                <div class="col">

                    <?php
                    if (function_exists('yoast_breadcrumb')) {
                        yoast_breadcrumb('<p id="breadcrumbs" class="spr-breadcrumb mb-1">', '</p>');
                    }
                    ?>

                    <h1 class="text-capitalize"><?php the_title(); ?></h1>

                    <?php if (have_posts()) : ?>

                        <?php /* Start the Loop */ ?>

                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>

                        <?php endwhile; ?>

                    <?php endif; ?>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->


    <?php endif; ?>

</main>


<?php get_footer(); ?>
