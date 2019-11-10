<header id="header" class="main-nav bg-secondary">
    <div class="bg-primary py-1">

        <div class="container d-lg-none px-0">
            <div class="row no-gutters">
                <div class="col text-center">
                    <a class="btn btn btn-nav btn-nav-outline text-offwhite mb-1" href="tel:<?php echo strip_tel(get_field('phone_number', 'options')); ?>"> Call Us</a>
                </div>
                <div class="col text-center">
                    <a href="<?php echo get_field('appointment_link', 'options'); ?>" target="_blank" class="btn btn-light btn-nav-light rounded-0 text-uppercase">
                        Book Now
                    </a>
                </div>
            </div>
        </div>

        <div class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <div class="nav-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                             alt="<?php bloginfo('name'); ?> - Logo"
                             class="img-fluid">
                        <span class="sr-only"><?php bloginfo('name'); ?></span>
                    </a>
                </div>

                <div class="d-lg-flex flex-lg-column d-none d-lg-block ml-auto mr-1 ml-lg-1 mr-lg-0">
                    <div id="top-buttons" class="d-flex ml-auto justify-content-end align-items-center text-uppercase">
                        <a class="btn btn-nav btn-nav-outline my-auto mr-1" href="tel:<?php echo strip_tel(get_field('phone_number', 'options')); ?>">Call Us Today <?php the_field('phone_number', 'options'); ?></a>


                        <a href="<?php echo get_field('appointment_link', 'options'); ?>" target="_blank" class="btn my-auto btn-light btn-nav-light text-uppercase">
                            Book An Appointment
                        </a>
                    </div>

                </div>

                <button class="navbar-toggler ml-auto ml-sm-0" type="button" data-toggle="collapse" data-target=".mainnav-m" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

            </div>
        </div>

    </div>

    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container">

            <div class="d-lg-flex d-none d-lg-block w-100">

                <?php wp_nav_menu([
                    'theme_location' => 'primary',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'mainnav',
                    'menu_class' => 'navbar-nav mr-auto',
                    'fallback_cb' => '',
                    'menu_id' => 'main-menu',
                    'walker' => new understrap_WP_Bootstrap_Navwalker(),
                ]); ?>

                <div id="top-buttons" class="d-flex ml-auto justify-content-end align-items-center text-uppercase">

                    <div class="social-links">
                        <?php while( have_rows('social_links', 'options') ): the_row(); ?>
                            <a class="social-link text-offwhite" target="_blank" href="<?php the_sub_field('url'); ?>">
                                <i class="<?php the_sub_field('icon_class'); ?> fa-lg">
                                    <span class="sr-only"><?php the_sub_field('label'); ?></span>
                                </i>
                            </a>
                        <?php endwhile; ?>
                    </div>

                </div>

            </div>
        </div>

    </nav>

    <div class="mainnav-m collapse navbar-collapse">
        <?php wp_nav_menu([
            'theme_location' => 'primary',
            'container_class' => 'container p-1',
            'container_id' => 'mainnav',
            'menu_class' => 'navbar-nav',
            'fallback_cb' => '',
            'menu_id' => 'main-menu-mobile',
            'walker' => new understrap_WP_Bootstrap_Navwalker(),
        ]); ?>
    </div>

</header>