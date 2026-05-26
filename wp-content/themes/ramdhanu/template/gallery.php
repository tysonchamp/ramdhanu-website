<?php
/*
 * Template Name: Gallery Page
 */
GLOBAL $post;
get_header();

?>
    <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>

    <section class="fluid-block inner-banner text-center">
        <div class="container">
            <h1 class="fw-bold"><?php the_title(); ?></h1>
        </div>
    </section>
    <section class="fluid-block gallery">
        <div class="container">
            <div class="gallery-grid">
                <?php $gallery_images = get_field('gallery_images'); ?>
                <?php if( $gallery_images ): ?>
                    <?php foreach( $gallery_images as $image ): ?>
                        <!-- Repeat these figures for each product image -->
                        <figure class="product" data-index="0">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                            <figcaption><?php echo $image['alt']; ?></figcaption>
                        </figure>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <!-- Lightbox -->
            <div id="lightbox" class="lightbox" aria-hidden="true" role="dialog">
                <button class="lb-close" aria-label="Close">&times;</button>
                <button class="lb-prev" aria-label="Previous">&lsaquo;</button>
                <img class="lb-image" src="" alt="">
                <button class="lb-next" aria-label="Next">&rsaquo;</button>
                <div class="lb-caption"></div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>