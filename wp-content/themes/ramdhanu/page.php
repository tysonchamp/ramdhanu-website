<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage clean blog
 * 
 */
global $post;

get_header();
?>
<?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?>

<section class="fluid-block inner-banner text-center">
    <div class="container">
        <h1 class="fw-bold"><?php the_title(); ?></h1>
    </div>
</section>
<section class="main-blog-section details default-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()): the_post(); ?>
                        <?php if (has_post_thumbnail()): ?>
                            <div class="blog-banner shadow">
                                <img src="<?php echo $featured_image[0]; ?>">
                            </div>
                        <?php endif; ?>
                        <!-- Blog Banner End -->
                        <div class="items-wrap">
                            <div class="blog-item">
                                <div class="blog-content">
                                    <!-- <h4 class="blog-heading"><?php the_title(); ?></h4> -->
                                    <!-- <div class="post-date mb-4"><?php the_date('j F, Y'); ?> by <span><?php the_author(); ?></span></div> -->
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

<?php get_footer(); ?>