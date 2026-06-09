<?php
GLOBAL $post;
get_header();

?>
    <?php $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' ); ?>
    
      <!-- ==== banner section start ==== -->
      <section class="common-banner">
         <div class="container">
            <div class="row">
               <div class="common-banner__content text-center">
                  <!-- <span class="sub-title"><i class="icon-donation"></i>Start donating poor people</span> -->
                  <h2 class="title-animation"><?php the_title(); ?></h2>
               </div>
            </div>
         </div>
         <div class="banner-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner-bg.png" alt="Image">
         </div>
         <div class="shape">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape.png" alt="Image">
         </div>
      </section>
      <!-- ==== / banner section end ==== -->
       <!-- ==== blog details section start ==== -->
      <section class="blog-main cm-details">
         <div class="container">
            <div class="row gutter-60">
               <div class="col-12 col-xl-8">
                  <div class="cm-details__content">
                     <?php if ( has_post_thumbnail() ) : ?>
                        <div class="cm-details__poster" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                           <img src="<?php echo the_post_thumbnail_url('full'); ?>" alt="Image">
                        </div>
                     <?php endif; ?>
                     <div class="cm-details-meta">
                        <p><i class="fa-solid fa-calendar-days"></i><?php echo get_the_date(); ?></p>
                        <!-- <p><i class="fa-solid fa-location-dot"></i><?php echo get_the_author(); ?></p> -->
                     </div>
                     <div class="cm-group cta">
                        <h3 class="title-animation"><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                     </div>
                     
                  </div>
               </div>
            </div>
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
      </section>
      <!-- ==== / blog details section end ==== -->
<?php get_footer(); ?>
