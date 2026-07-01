<?php
/*
Template Name: Newsletter Page
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
       <!-- ==== blog details section start ==== -->
      <section class="blog-main cm-details">
         <div class="container">
            <div class="row gutter-60">
               <div class="col-12 col-xl-12">
                  <div class="cm-details__content">
                     <div class="cm-group cta">
                        <!-- <h3 class="title-animation"><?php the_title(); ?></h3> -->
                     </div>
                  </div>
               </div>
            </div>
            <div class="download-section">
               <style>
                  .download-section .btn-primary {
                     background-color: var(--base-color);
                     border-color: var(--base-color);
                  }
                  .download-section .btn-primary:hover {
                     background-color: var(--base-color);
                     border-color: var(--base-color);
                     filter: brightness(0.9);
                  }
               </style>
               <div class="container">
                  <!-- start -->
                  <div class="card rounded-4 shadow border-0 col-sm-12 mx-auto">
                     <div class="card-body p-5">
                        <?php if(have_rows('newsletter')): ?>
                           <?php while(have_rows('newsletter')): the_row(); ?>
                              <div class="download-item d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom">
                                 <div class="text"><h6 class="mb-0 text-muted"><?php echo get_sub_field('newsletter_title'); ?></h6></div>
                                 <a href="<?php echo get_sub_field('newsletter_file'); ?>" target="_blank" class="btn btn-primary rounded-5 btn-sm px-4">Download</a>
                              </div>
                           <?php endwhile; ?>
                        <?php endif; ?>
                     </div>
                  </div>
                  <!-- end -->
               </div>
            </div>
         </div>
      </section>
      <!-- ==== / blog details section end ==== -->
       
<?php get_footer(); ?>