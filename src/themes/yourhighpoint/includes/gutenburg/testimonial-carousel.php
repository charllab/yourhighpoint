<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-carousel-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
$className = '';
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
// Load value defaults.
$post_objects = get_field('testimonials');
?>

<?php if (is_admin()): ?>

    <div class="components-placeholder wp-testimonial-carousel">
        <div class="components-placeholder__label">
            <span class="editor-block-icon block-editor-block-icon has-colors">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" role="img"
                     aria-hidden="true" focusable="false"><path d="M0,0h24v24H0V0z" fill="none"></path><path
                        d="M19,4H5C3.89,4,3,4.9,3,6v12c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.11,4,19,4z M19,18H5V8h14V18z"></path></svg></span>Testimonial
            Carousel
        </div>
    </div>

<?php else: ?>

    <div class="bg-carousel <?php echo esc_attr($className); ?>">
        <div id="page-carousel-<?php echo $id; ?>" class="carousel slide carousel-block__testimonial"
             data-ride="carousel">

            <?php if (count($post_objects) > 1) { ?>
                <ol class="carousel-indicators d-md-none">
                    <?php $index = 1; ?>

                    <?php foreach ($post_objects as $post): ?>
                        <li data-target="#page-carousel-<?php echo $id; ?>" data-slide-to="<?php echo $index - 1; ?>"
                            class="<?php echo($index == 1 ? 'active' : ''); ?>"></li>
                        <?php $index++; endforeach; ?>
                </ol>
            <?php } ?>

            <div class="carousel-inner">

                <?php $index = 1; ?>

                <?php foreach ($post_objects as $post): ?>
                    <div
                        class="carousel-item carousel-item-<?php echo $index; ?> <?php echo($index == 1 ? 'active' : ''); ?> pt-5 pb-4 pt-xxl-9 pb-xxl-7">
                        <div class="container h-100 px-0 position-relative">
                            <div class="row justify-content-center">
                                <div class="col-9 col-lg-8 text-center">
                                    <p class="lead"><?php echo $post['quote']; ?></p>
                                    <?php if ($post['citation']): ?>
                                        <p class="lead"><strong><?php echo $post['citation']; ?></strong></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $index++; endforeach; ?>

            </div>

            <?php if (count($post_objects) > 1) { ?>
            <a class="carousel-control-prev" href="#page-carousel-<?php echo $id; ?>" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#page-carousel-<?php echo $id; ?>" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <?php } ?>
        </div>
    </div>


    <?php wp_reset_postdata(); ?>

<?php endif; ?>