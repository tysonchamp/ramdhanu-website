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
                  <span class="sub-title"><i class="icon-donation"></i>Start donating poor people</span>
                  <h2 class="title-animation">About Us</h2>
               </div>
            </div>
         </div>
         <div class="banner-bg">
            <img src="assets/images/banner/banner-bg.png" alt="Image">
         </div>
         <div class="shape">
            <img src="assets/images/shape.png" alt="Image">
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
                           <img src="assets/images/difference/thumb-sm.png" alt="Image">
                           <div class="grid-line">
                              <img src="assets/images/help/grid.png" alt="Image" class="base-img">
                           </div>
                           <div class="video-btn-wrapper">
                              <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank" title="video Player"
                                 class="open-video-popup">
                                 <i class="icon-play"></i>
                              </a>
                           </div>
                        </div>
                        <div class="thumb-sm" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                           <img src="assets/images/difference/thumb-lg.png" alt="Image">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-8 col-xxl-7">
                  <div class="difference-two__content" data-aos="fade-up" data-aos-duration="1000">
                     <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                        people</span>
                     <h2 class="title-animation">Donate <span>Support</span> to Make
                        Difference way
                     </h2>
                     <p>Charity is the voluntary act of giving help,
                        typically in the form of money, time, or resources, to those in need. Charitable
                        organizations aim to solve social, environmental, and economic challenges by addressing
                        issues like poverty,
                     </p>
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
                                    <ul>
                                       <li><i class="fa-solid fa-check"></i>We help companies develop
                                          powerful corporate social
                                       </li>
                                       <li><i class="fa-solid fa-check"></i>Helped fund 3,265 Project
                                          powerful corporate poor
                                       </li>
                                       <li><i class="fa-solid fa-check"></i>Dedicated Tech Services</li>
                                    </ul>
                                 </div>
                                 <div class="difference-two__content-single" id="vision">
                                    <ul>
                                       <li><i class="fa-solid fa-check"></i>We help companies develop
                                          powerful corporate social
                                       </li>
                                       <li><i class="fa-solid fa-check"></i>Helped fund 3,265 Project
                                          powerful corporate poor
                                       </li>
                                       <li><i class="fa-solid fa-check"></i>Dedicated Tech Services</li>
                                    </ul>
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