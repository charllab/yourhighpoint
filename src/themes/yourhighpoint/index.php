<?php

get_header();
global $post;

?>

<section style="background-color: #FFFFFF" class="alignfull">
    <div class="container pt-2 pb-1 pt-md-3 pb-md-2">
        <div class="row">

            <div class="col text-center h-100 d-md-flex flex-column align-items-center justify-content-center">
                <h2 class="h1">Our Blog</h2>
            </div>

        </div>
    </div>
</section>

<main class="pb-4">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 d-md-flex flex-wrap px-0 blogpage-blogblocks">

                <?php
                $limit = 10;

                $temp = $wp_query;
                $wp_query = null;

                $wp_query = new WP_Query();
                $wp_query->query('posts_per_page=' . $limit . '&paged=' . $paged);

                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div class="blog__block">
                        <h2 class="h1 mb-0"><?php the_title(); ?></h2>
                        <?php twentynineteen_posted_on(); ?>
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                        <p class="mb-0">
                            <a href="<?php the_permalink(); ?>" class="font-weight-bold">
                                <span>Continue Reading</span> <i class="ml-250 fas fa-arrow-right"></i>
                            </a>
                        </p>

                    </div>
                    <hr class="blog__hr my-2 w-100">

                </article>

                <?php endwhile; ?>

            </div><!-- col -->
        </div>
    </div>

</main>

<?php get_footer(); ?>
