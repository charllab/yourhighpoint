<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'banner-carousel-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
// Load value defaults.
$post_objects = get_field('ping_pong_block');
?>

<?php if (is_admin()): ?>

    <div class="components-placeholder wp-testimonial-carousel">
        <div class="components-placeholder__label">
            <span class="editor-block-icon block-editor-block-icon has-colors">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" role="img"
                     aria-hidden="true" focusable="false"><path d="M0,0h24v24H0V0z" fill="none"></path><path
                        d="M19,4H5C3.89,4,3,4.9,3,6v12c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.11,4,19,4z M19,18H5V8h14V18z"></path></svg></span>Simple
            Image and Text Layout Blocks
        </div>
    </div>

<?php else: ?>

    <?php foreach ($post_objects as $post): ?>

    <div class="section--ping-pong p-0 alignfull" data-aos="fade-up">
        <div class="container-fluid no-gutters p-0">
            <?php $thelayout = $post['block_image_position']; ?>
            <div class="row no-gutters">
                <div
                    class="col-xl-6 <?php if ($thelayout == 'image-right-text-left'): ?>order-xl-1<?php endif; ?> bg-size-cover"
                    style="background-image: url(<?php echo $post['block_image']; ?>);
                        background-position: <?php echo $post['block_image_focuspoint']; ?>;"
                >
                </div>
                <div class="col-xl-6
                <?php if ($thelayout == 'image-right-text-left'): ?>order-xl-0<?php endif; ?>
                js--ping-pong__content-block">
                    <div class="
                    section--ping-pong__content-page
                    h-100 d-flex flex-column justify-content-center py-3 py-xl-4 px-2 px-lg-3
                    <?php if ($thelayout == 'image-right-text-left'): ?>ml-lg-auto<?php endif; ?>">
                        <h2 class="h1"><?php echo $post['block_heading']; ?></h2>
                        <p><?php echo $post['block_blurb']; ?></p>
                        <?php if ($post['block_button_text']): ?>
                            <a href="<?php echo $post['block_button_link']; ?>"
                            class=" btn btn-primary"
                            >
                            <?php echo $post['block_button_text']; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php endforeach; ?>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>