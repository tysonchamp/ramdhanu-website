<?php
GLOBAL $post;
get_header();

?>
    <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
    
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2><?php the_title( $before = '', $after = '', $echo = true ) ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    <!-- Start Gallery Area -->
    <div class="gallery-area pt-100 pb-70">
        <div class="section-title">
            <?php echo apply_filters('the_content', $post->post_content); ?>
        </div>
        <div class="container-fluid">
            <div class="row">
                <?php $images = get_field('gallery'); ?>
                <?php if(!empty($images)): ?>
                    <?php foreach( $images as $image ): ?>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-gallery-box">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="image">
                                <a href="<?php echo esc_url($image['url']); ?>" class="gallery-btn" data-imagelightbox="popup-btn">
                                    <i class="flaticon-search"></i>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- End Gallery Area -->
<?php get_footer(); ?>
