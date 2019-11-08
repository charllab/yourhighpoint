<?php
get_header();
global $post;
?>

    <p>index.php</p>

    <main class="py-2">

        <div class="container">
            <div class="row justify-content-center text-center text-md-left">
                <div class="col-lg-10 d-md-flex flex-wrap px-0 blogpage-blogblocks">

                    <?php
                    $limit = 10;

                    $temp = $wp_query;
                    $wp_query = null;

                    $wp_query = new WP_Query();
                    $wp_query->query('posts_per_page='.$limit.'&paged='.$paged);

                    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                        <div class="col-lg-6 blog-miniblurb">
                            <div>
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo get_the_post_thumbnail_url($post, 'large'); ?>"
                                         alt="<?php the_title(); ?>"
                                         class="img-fluid d-block mx-auto">
                                </a>
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="">
                                    <strong>Read More &rarr;</strong>
                                </a>
                            </div>
                        </div><!-- col -->


                    <?php endwhile; ?>

                </div><!-- col -->
            </div>
            <div class="row">
                <div class="col">
                    <?php if ($wp_query->post_count > 2) { ?>


                        <?php if ($paged > 1) { ?>
                            <div class="row justify-content-center blog-nav-single">
                                <div class="col-6 col-lg-5">
                                    <div class="prev"><?php next_posts_link('&larr; Previous Posts'); ?></div>
                                </div><!-- col -->
                                <div class="col-6 col-lg-5 d-flex justify-content-end blog-nav-single-right">
                                    <div class="next"><?php previous_posts_link('Newer Posts &rarr;'); ?></div>
                                </div><!-- col -->
                            </div><!-- row -->
                        <?php } else { ?>
                            <div class="row blog-nav-single">
                                <div class="col-6 col-lg-5">
                                    <div class="prev"><?php next_posts_link('&larr; Previous Posts'); ?></div>
                                </div><!-- col -->
                            </div><!-- row -->
                        <?php } ?>
                    <?php } ?>

                    <?php wp_reset_postdata(); ?>
                </div>
            </div><!-- row -->
        </div>


    </main>

<?php get_footer(); ?>
