<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<p>content-single.php</p>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <header class="entry-header">
                        <?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
                    </header>
                </div>
            </div>
        </div>

	<?php endif; ?>

	<div class="entry-content ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <?php
                    the_content(
                        sprintf(
                            wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentynineteen' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            get_the_title()
                        )
                    );

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>

                </div>
            </div>
        </div>
	</div>


</article><!-- #post-<?php the_ID(); ?> -->
