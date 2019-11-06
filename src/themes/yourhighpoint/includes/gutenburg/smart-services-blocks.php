<?php
// Create id attribute allowing for custom "anchor" value.
$id = 'smart-service-block-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
// Load value defaults.
$post_objects = get_field('services_sub_block');
?>

<?php if (is_admin()): ?>

    <div class="components-placeholder wp-testimonial-carousel">
        <div class="components-placeholder__label">
            <span class="editor-block-icon block-editor-block-icon has-colors">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" role="img"
                     aria-hidden="true" focusable="false"><path d="M0,0h24v24H0V0z" fill="none"></path><path
                        d="M19,4H5C3.89,4,3,4.9,3,6v12c0,1.1,0.89,2,2,2h14c1.1,0,2-0.9,2-2V6C21,4.9,20.11,4,19,4z M19,18H5V8h14V18z"></path></svg></span>Smart
            Services Blocks
        </div>
    </div>

<?php else: ?>

    <div class="container-fluid alignfull px-0">
        <div class="row no-gutters services__sub-blocks">

            <?php if (count($post_objects) > 1 && (count($post_objects) <= 5)) { ?>

                <?php foreach ($post_objects as $post): ?>

                    <div
                        class="col-xs js-services__sub-block--item services__sub-block--two-items-up position-relative bg-size-cover"
                        style="background-image: url(<?php echo $post['service_image']; ?>)"
                        id="<?php echo strip_link($post['service_header']); ?>">
                        <div class="services__color-overlay"></div>
                        <div class="services__sub-blocks--heading h1 text-white position-absolute">
                            <?php echo $post['service_header']; ?>
                        </div>
                        <div
                            class="services__sub-blocks--content text-white position-absolute py-1 px-2 h-100 w-100 align-items-center justify-content-center">
                            <p class="mb-0"><?php echo $post['service_blurb']; ?></p>
                        </div>
                    </div>

                <?php endforeach; ?>

            <?php } else { ?>

                <?php foreach ($post_objects as $post): ?>

                    <div class="col-xs js-services__sub-block--item services__sub-block--five-items-up position-relative bg-size-cover"
                         style="background-image: url(<?php echo $post['service_image']; ?>)"
                         id="<?php echo strip_link($post['service_header']); ?>">
                        <div class="services__color-overlay"></div>
                        <div class="services__sub-blocks--heading h1 text-white position-absolute">
                            <?php echo $post['service_header']; ?>
                        </div>
                        <div
                            class="services__sub-blocks--content text-white position-absolute py-1 px-2 h-100 w-100 align-items-center justify-content-center">
                            <p class="mb-0"><?php echo $post['service_blurb']; ?></p>
                        </div>
                    </div>

                <?php endforeach; ?>

            <?php } ?>


        </div>
    </div>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>