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
                <div class="row no-gutters mb-1">
                    <div
                        class="col-xl-7 bg-size-cover"
                        style="background-image: url(<?php the_field('contact_page_image')?>);
                            background-position: <?php the_field('contact_page_focus_point')?>;"
                        id="content-detail__block-image"
                    >
                        <img
                            src="<?php the_field('contact_page_image')?>"
                            alt=" "
                            class="img-fluid img-swapper"
                        >
                    </div>
                    <div class="col-xl-5 js--ping-pong__content-block">
                        <div
                            class="section--ping-pong__content-page h-100 d-flex flex-column justify-content-center px-1 py-0 py-xl-2 px-lg-3">

                            <div
                                class="content-detail__block pt-2 pb-1 pt-sm-3 pb-sm-2 py-lg-2 px-sm-4 px-lg-4 px-xxl-6 text-center text-xl-left">
                                <h2 class="h1">Our Clinic</h2>
                                <?php
                                $removethese = array("(", " ", ")", "-");
                                ?>
                                <table class="w-100">
                                    <tr>
                                        <td>
                                            <span class="contact-details text-uppercase font-weight-bold">Phone: </span>
                                            <span class="contact-details">
                                                <a
                                                    href="tel:+1<?php echo strip_tel(get_field('phone_number', 'option')); ?>"
                                                    class="text-body"><?php echo get_field('phone_number', 'option'); ?>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td><span class="contact-details text-uppercase font-weight-bold">Fax: </span>
                                            <span class="contact-details">
                                                <a
                                                    href="tel:+1<?php echo strip_tel(get_field('fax_number', 'option')); ?>"
                                                    class="text-body"><?php echo get_field('fax_number', 'option'); ?>
                                                </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span
                                                class="contact-details text-uppercase font-weight-bold">E-mail: </span>
                                            <span class="contact-details">
                                                    <a
                                                        href="mailto:<?php echo get_field('email_address', 'option'); ?>"
                                                        class="text-body"><?php echo get_field('email_address', 'option'); ?>
                                                    </a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span
                                                class="contact-details text-uppercase font-weight-bold">Address: </span>
                                            <span
                                                class="contact-details"><?php echo get_field('physical_address', 'option'); ?></span>
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
            <div class="container px-0 contact-page__map-block alignfull bg-size-cover position-relative"
                 style="background-image: url(<?php echo get_field('map_image', 'option'); ?>); background-position: center;"  data-aos="fade-up">
                <a href="<?php echo get_field('map_link', 'option'); ?>"
                   class="contact-page__map-link postion-absolute w-100 h-100 d-block"
                   target="_blank"
                   title="View map on Google Maps">
                    <span class="sr-only">View Map on Google Maps</span>
                </a>
            </div>
        <?php }; ?>

        <div class="container py-2 py-sm-3">
            <div class="row">
                <div class="col-lg-5 col-xl-4 offset-lg-1">
                    <h3 class="h1">HAVE A QUESTION?</h3>
                    <p class="text-uppercase font-weight-bold">Just email us through this&nbsp;form</p>
                </div>
                <div class="col-lg-6 col-xl-7">
                    <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=10]'); ?>
                </div>
            </div>

        </div>

    </main>

<?php get_footer();