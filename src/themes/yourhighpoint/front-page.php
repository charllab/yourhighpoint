<?php get_header(); ?>

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

    <div class="section section--ping-pong p-0 py-4">
        <div class="container-fluid no-gutters p-0">

            <div class="row">
                <div class="col-xl-6 "
                     style="background-image: url(https://s3.amazonaws.com/qipro-craft-uploads/images/_large/sam-lean.jpg?mtime=20191011085604); background-position: center center;"></div>
                <div class="col-xl-6">
                    <div class="section--ping-pong__content-page px-3">
                        <h2>DR. CHEYENNE HOK</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                            dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                            sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                            justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                            ipsum dolor sit amet.
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                            dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                            sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                            justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                            ipsum dolor sit amet.
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                            dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                            sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                            justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                            ipsum dolor sit amet.
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                            dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor
                            sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                            justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                            ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


<?php get_footer();
