<?php
/**
 *
 * Template Name: Contact Page
 *
 **/
get_header(); ?>

    <main class="p-0">

        <div class="container py-2">
            <div class="row">
                <div class="col">

                    <?php if (have_posts()) : ?>

                        <?php /* Start the Loop */ ?>

                        <?php while (have_posts()) : the_post(); ?>

                            <h1 class="mb-0"><?php the_title(); ?></h1>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>
            </div>
        </div>


        <div class="section--ping-pong p-0 alignfull">
            <div class="container-fluid no-gutters p-0">
                <div class="row no-gutters">
                    <div
                        class="col-xl-4 bg-size-cover"
                        style="background-image: url(<?php the_field('block_image'); ?>);
                            background-position: <?php the_field('block_image_focuspoint'); ?>;"
                    >
                    </div>
                    <div class="col-xl-8
                js--ping-pong__content-block">
                        <div class="
                    section--ping-pong__content-page
                    h-100 d-flex flex-column justify-content-center py-3 py-xl-6 px-2 px-lg-3">

                            <div class="py-2 px-2 px-xxl-4 bg-light">
                                <h2 class="h1">Our Clinic</h2>
                                <?php
                                $removethese = array("(", " ", ")", "-");
                                ?>
                                <table>
                                    <tr>
                                        <td><span class="lead text-uppercase">Phone: <a
                                                    href="tel:+1<?php echo strip_tel(get_field('phone_number', 'option')); ?>"
                                                    class="text-body"><?php echo get_field('phone_number', 'option'); ?></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td><span class="lead text-uppercase">E-mail: <a
                                                    href="mailto:<?php echo get_field('email_address', 'option'); ?>"
                                                    class="text-body"><?php echo get_field('email_address', 'option'); ?></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr style="vertical-align: top;">
                                        <td><span
                                                class="lead text-uppercase">Address: <?php echo get_field('physical_address', 'option'); ?><span></span>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <?php if (have_posts()) : ?>

            <?php /* Start the Loop */ ?>

            <?php while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>



        <?php if (get_field('map_image', 'option')) {
            ; ?>
            <div class="container px-0 contact-page__map-block alignfull bg-cover position-relative" style="background-image: url(<?php echo get_field('map_image', 'option'); ?>)">
                <a href="<?php echo get_field('map_link', 'option'); ?>"
                   class="contact-page__map-link postion-absolute w-100 h-100 d-block"
                   target="_blank"
                   title="View map on Google Maps">
                    <span class="sr-only">View Map on Google Maps</span>
                </a>
            </div>
        <?php }; ?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=10]'); ?>
                </div>
            </div>

        </div>

    </main>

<?php get_footer();