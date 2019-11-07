<?php get_header(); ?>


    <div class="py-2 py-lg-4">
        <div class="container px-sm-4 px-xl-2 px-xxl-1">
            <div class="row">
                <div class="col">
                    <h3 class="carousel-block__title mb-0">Proudly Supported&nbsp;By</h3>
                </div>
            </div>
        </div>

        <div class="position-relative py-2 py-lg-4">
            <div class="owl-nav-outside"></div>
            <div class="container px-sm-4 px-xl-2 px-xxl-1">
                <div class="row">
                    <div class="col">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <img src="https://source.unsplash.com/random/204x204" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="https://source.unsplash.com/random/204x204" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="https://source.unsplash.com/random/204x204" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="https://source.unsplash.com/random/204x204" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="https://source.unsplash.com/random/204x204" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="https://source.unsplash.com/random/204x204" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="https://source.unsplash.com/random/204x204" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="https://source.unsplash.com/random/204x204" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="https://source.unsplash.com/random/204x204" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="https://source.unsplash.com/random/204x204" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="https://source.unsplash.com/random/204x204" alt="" class="img-fluid">
                            </div>
                            <div class="item">
                                <img src="https://source.unsplash.com/random/204x204" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main>

        <div class="container">
            <div class="row">
                <div class="col">
                    <?php if (have_posts()) : ?>

                        <?php /* Start the Loop */ ?>

                        <?php while (have_posts()) : the_post(); ?>

                            <?php the_content(); ?>

                        <?php endwhile; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>

    </main>

<?php get_footer();
