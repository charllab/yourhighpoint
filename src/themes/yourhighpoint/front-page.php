<?php get_header(); ?>

    <div class="container-fluid bg-warning px-0">
        <div class="row no-gutters services__sub-blocks">
            <div class="col-md services__sub-block--item position-relative">
                <div class="services__color-overlay"></div>
                <img src="https://source.unsplash.com/wgq4eit198Q/" alt=" " class="img-fluid">
                <div class="services__sub-blocks--heading h1 text-white position-absolute w-100">
                    Massage
                </div>
                <div
                    class="services__sub-blocks--content text-white position-absolute p-1 h-100 w-100 align-items-center justify-content-center">
                    <p class="mb-0">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                </div>
            </div>

            <div class="col-md">Orthotics</div>
            <div class="col-md">Graston</div>
            <div class="col-md">Rocktape</div>
            <div class="col-md">Athletic Taping</div>
            <div class="col-md">Art</div>
            <div class="col-md">Webster</div>
        </div>
    </div>

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

<?php get_footer();
