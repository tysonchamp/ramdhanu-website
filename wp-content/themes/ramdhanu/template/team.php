<?php
/**
 * Template Name: Team Page
**/
get_header(); ?>

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
      <!-- ==== team section start ==== -->
      <section class="team team-only">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-lg-10 col-xl-6">
                  <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                     <!-- <span class="sub-title"><i class="icon-donation"></i><?php the_title(); ?></span> -->
                     <h2 class="title-animation"><?php the_title(); ?></h2>
                  </div>
               </div>
            </div>
            <div class="row gutter-30">
               <?php if(have_rows('members')): 
                  while(have_rows('members')): the_row();
               ?>
                     <div class="col-12 col-sm-6 col-xl-3">
                        <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                           <div class="team__single van-tilt">
                              <div class="team__single-thumb">
                                 <a href="#">
                                    <img src="<?php echo get_sub_field('member_photo'); ?>" alt="Image">
                                 </a>
                              </div>
                              <div class="team__single-content">
                                 <h6><a href="#"><?php echo get_sub_field('name'); ?></a></h6>
                                 <p><?php echo get_sub_field('designation'); ?></p>
                              </div>
                           </div>
                        </div>
                     </div>
               <?php 
                  endwhile; 
               endif;
               ?>
            </div>
            
         </div>
      </section>
      <!-- ==== / team section end ==== -->
       
<?php get_footer(); ?>

