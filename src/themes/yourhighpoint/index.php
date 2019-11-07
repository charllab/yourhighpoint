<?php
get_header();
?>

    <p>index.php</p>

    <main class="py-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php
                    if ( have_posts() ) {

                        // Load posts loop.
                        while ( have_posts() ) {
                            the_post();
                            get_template_part( 'template-parts/content/content' );
                        }

                        // Previous/next page navigation.
                        twentynineteen_the_posts_navigation();

                    } else {

                        // If no content, include the "No posts found" template.
                        get_template_part( 'template-parts/content/content', 'none' );

                    }
                    ?>
                </div>
            </div>
        </div>

    </main>

<?php get_footer(); ?>
