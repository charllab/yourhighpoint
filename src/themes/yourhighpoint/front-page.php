<?php get_header(); ?>

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
