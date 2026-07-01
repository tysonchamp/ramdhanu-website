<?php
/*
Template Name: About Page
*/

global $post;
get_header(); ?>

<?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?>

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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner-bg.webp" alt="Image">
         </div>
         <div class="shape">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape.png" alt="Image">
         </div>
      </section>
      <!-- ==== / banner section end ==== -->
      <!-- ==== difference two section start ==== -->
      <section class="difference-two">
         <div class="container">
            <div class="row gutter-40 align-items-center">
               <div class="col-12 col-lg-4 col-xxl-5 d-none d-lg-block">
                  <div class="difference-two__thumb-wrapper">
                     <div class="difference-two__thumb">
                        <div class="thumb-lg" data-aos="fade-right" data-aos-duration="1000">
                           <img src="<?php echo get_field('featured_image_1'); ?>" alt="Image">
                           <div class="grid-line">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/help/grid.png" alt="Image" class="base-img">
                           </div>
                           <div class="video-btn-wrapper">
                              <a href="<?php echo get_field('video_url'); ?>" target="_blank" title="video Player"
                                 class="open-video-popup">
                                 <i class="icon-play"></i>
                              </a>
                           </div>
                        </div>
                        <div class="thumb-sm" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                           <img src="<?php echo get_field('featured_image_2'); ?>" alt="Image">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-8 col-xxl-7">
                  <div class="difference-two__content" data-aos="fade-up" data-aos-duration="1000">
                     <span class="sub-title"><i class="icon-donation"></i><?php echo get_field('about_subtitle'); ?></span>
                     <h2 class="title-animation"><?php echo get_field('about_title'); ?></h2>
                     <?php echo get_field('about_us_texts'); ?>

                     <div class="difference-two__inner cta">
                        <div class="difference-two__inner-content">
                           <div class="difference-two__tab">
                              <div class="difference-two__tab-btns">
                                 <button class="difference-two__tab-btn active" data-target="#mission"
                                    aria-label="mission" title="mission">Our Mission</button>
                                 <button class="difference-two__tab-btn" data-target="#vision" aria-label="vision"
                                    title="vision">Our Vision</button>
                              </div>
                              <div class="difference-two__tab-content">
                                 <div class="difference-two__content-single" id="mission">
                                    <p><?php echo get_field('mission_texts'); ?></p>
                                 </div>
                                 <div class="difference-two__content-single" id="vision">
                                    <p><?php echo get_field('vision_texts'); ?></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ==== / difference two section end ==== -->
       
<?php get_footer(); ?>