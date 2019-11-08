<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null; ?>

<?php if ( ! is_page() ) : ?>

<p>entry-header.php</p>

<div class="entry-meta text-center">

    <?php twentynineteen_posted_on(); ?>
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

</div><!-- .entry-meta -->
<?php endif; ?>
