<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'center-layout-block-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
?>

<?php if (is_admin()): ?>

    <div class="components-placeholder wp-testimonial-carousel">
        <div class="components-placeholder__label">
            <span class="editor-block-icon block-editor-block-icon has-colors">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" role="img"
                     aria-hidden="true" focusable="false"><path d="M0,0h24v24H0V0z" fill="none"></path><path
                        d="M19,4H5C3.89,4,3,4.9,3,6v12c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.11,4,19,4z M19,18H5V8h14V18z"></path></svg></span>Simple
            Center Layout Block
        </div>
    </div>

<?php else: ?>

    <?php

    // check if the flexible content field has rows of data
    if (have_rows('center_block_options')):

        // loop through the rows of data
        while (have_rows('center_block_options')) : the_row();
            if (get_row_layout() == 'center_block_image_only'): ?>

                <section style="background-color: <?php the_field('center_block_color'); ?>" class="alignfull">
                    <div class="container pt-2 pb-1 pt-md-3 pb-md-2">
                        <div class="row">

                            <div class="col text-center h-100 d-md-flex align-items-center justify-content-center">
                                <?php if (get_sub_field('column_single_image')) : ?>
                                    <img src="<?php the_sub_field('column_single_image'); ?>" alt=" "
                                         class="mb-2 mb-md-1 img-fluid <?php the_sub_field('column_single_image_position'); ?>">
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </section>

            <?php elseif (get_row_layout() == 'center_block_image_and_text'): ?>

                <section style="background-color: <?php the_field('center_block_color'); ?>" class="alignfull">
                    <div class="container pt-2 pb-1 pt-md-3 pb-md-2">
                        <div class="row">

                            <div class="col text-center h-100 d-lg-flex align-items-center justify-content-center">
                                <?php if (get_sub_field('center_block_image_and_text_image')) : ?>
                                    <img src="<?php the_sub_field('center_block_image_and_text_image'); ?>" alt=" "
                                         class="mb-2 mb-md-1 img-fluid <?php the_sub_field('center_block_image_and_text_image_position'); ?>">
                                <?php endif; ?>
                                <div>
                                    <?php if (get_sub_field('center_block_image_and_text_header')) : ?>
                                        <h2 class="h1"><?php the_sub_field('center_block_image_and_text_header'); ?></h2>
                                    <?php endif; ?>
                                    <?php if (get_sub_field('center_block_image_and_text_blurb')) : ?>
                                        <p class="lead text-primary"><?php the_sub_field('center_block_image_and_text_blurb'); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

            <?php elseif (get_row_layout() == 'center_block_text_only'): ?>

                <section style="background-color: <?php the_field('center_block_color'); ?>" class="alignfull">
                    <div class="container pt-2 pb-1 pt-md-3 pb-md-2">
                        <div class="row">

                            <div
                                class="col text-center h-100 d-md-flex flex-column align-items-center justify-content-center">
                                <?php if (get_sub_field('center_block_text_only_header')) : ?>
                                    <h2 class="h1"><?php the_sub_field('center_block_text_only_header'); ?></h2>
                                <?php endif; ?>
                                <?php if (get_sub_field('center_block_text_only_blurb')) : ?>
                                    <p class="text-body"><?php the_sub_field('center_block_text_only_blurb'); ?></p>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </section>

            <?php endif; ?>

        <?php endwhile; ?>

    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>