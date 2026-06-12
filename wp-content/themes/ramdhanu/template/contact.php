<?php
/*
 * Template Name: Contact Us
 */
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
      <!-- ==== contact section start ==== -->
      <section class="contact-main volunteer">
         <div class="container">
            <div class="row gutter-40">
               <div class="col-12 col-xl-6">
                  <div class="contact__content">
                     <div class="section__content" data-aos="fade-up" data-aos-duration="1000">
                        <!-- <span class="sub-title"><i class="icon-donation"></i> Get In Touch</span> -->
                        <h2 class="title-animation"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                     </div>
                     <div class="contact-main__inner cta">
                        <div class="contact-main__single">
                           <div class="thumb">
                              <i class="fa-solid fa-location-dot"></i>
                           </div>
                           <div class="content">
                              <h6>Registered Address</h6>
                              <p> 
                                 <?php echo get_field('registered_office','option'); ?>
                              </p>
                           </div>
                        </div>
                        <div class="contact-main__single">
                           <div class="thumb">
                              <i class="fa-solid fa-location-dot"></i>
                           </div>
                           <div class="content">
                              <h6>project Address</h6>
                              <p> 
                                 <?php echo get_field('project_office','option'); ?>
                              </p>
                           </div>
                        </div>
                        <div class="contact-main__single">
                           <div class="thumb">
                              <i class="fa-solid fa-phone"></i>
                           </div>
                           <div class="content">
                              <h6>Phone</h6>
                              <p><a href="tel:<?php echo get_field('phone_no_1','option'); ?>"><?php echo get_field('phone_no_1','option'); ?></a></p>
                           </div>
                        </div>
                        <div class="contact-main__single">
                           <div class="thumb">
                              <i class="fa-solid fa-envelope"></i>
                           </div>
                           <div class="content">
                              <h6>Email</h6>
                              <p><a href="mailto:<?php echo get_field('email_address','option'); ?>">
                                 <?php echo get_field('email_address','option'); ?></a></p>
                           </div>
                        </div>
                        <div class="contact-main__single">
                           <div class="thumb">
                              <i class="fa-solid fa-share-nodes"></i>
                           </div>
                           <div class="content">
                              <h6>Social</h6>
                              <div class="social">
                                 <?php if(have_rows('social_media_icons','option')): ?>
                                    <?php while(have_rows('social_media_icons','option')): the_row(); ?>
                                       <a href="<?php echo get_sub_field('social_url','option'); ?>" target="_blank">
                                          <?php echo get_sub_field('social_icon','option'); ?>
                                       </a>
                                    <?php endwhile; ?>
                                 <?php endif; ?>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="contact-main__thumb cta">
                        <!-- <img src="assets/images/contact-thumb.png" alt="Image"> -->
                         <?php echo get_field('google_map_iframe'); ?>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-xl-6">
                  <div class="contact__form volunteer__form checkout__form" data-aos="fade-up" data-aos-duration="1000"
                     data-aos-delay="100">
                     <div class="volunteer__form-content">
                        <h4 class="title-animation">Fill Up The Form</h4>
                        <p>Your email address will not be published. Required fields are marked *</p>
                     </div>
                     <form action="#" method="post" class="cta">
                        <div class="input-single">
                           <input type="text" name="full-name" id="fullName" placeholder="Enter Name" required>
                           <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="input-single">
                           <input type="email" name="c-email" id="cEmail" placeholder="Enter Email" required>
                           <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="input-single">
                           <input type="text" name="phone-number" id="phoneNumber" placeholder="Phone Number" required>
                           <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="input-single alter-input">
                           <textarea name="contact-message" id="contactMessage"
                              placeholder="Your Message..."></textarea>
                           <i class="fa-solid fa-comments"></i>
                        </div>
                        <div class="form-cta">
                           <button type="submit" aria-label="submit message" title="submit message"
                              class="btn--primary">Get A Quote <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ==== / contact section end ==== -->
<?php get_footer(); ?>