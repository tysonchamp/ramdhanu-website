<?php

/*
 * Theme Home Page
 */
global $post;
$home_id = $post->ID;
get_header();
?>
<?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($home_id), 'single-post-thumbnail'); ?>

      <!-- ==== banner start ==== -->
      <section class="banner">
         <div class="banner-bg">
            <!-- <img src="assets/images/banner/banner-one-bg.png" alt="Image" class="parallax-image"> -->
            <video class="video-background"
               poster="https://images.unsplash.com/photo-1587587448844-c1036562fec1?crop=entropy&cs=srgb&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTYyNzg5Mjk2MA&ixlib=rb-1.2.1&q=85"
               autoplay muted loop>
               <source src="assets/images/banner-video.mp4" type="video/mp4">
            </video>
         </div>
         <div class="bottom-shape">
            <img src="assets/images/banner/banner-one-shape.png" alt="Image">
         </div>
      </section>
      <!-- ==== / banner end ==== -->
      <!-- ==== help section start ==== -->
      <section class="help-two pb-200">
         <div class="container">
            <div class="row">
               <div class="col-12 col-lg-5 col-xxl-6 ">
                  <div class="help-two__thumb d-none d-lg-block">
                     <div class="help-two__thumb-inner">
                        <div class="thumb-lg" data-aos="fade-up" data-aos-duration="1000">
                           <img src="assets/images/help/three.png" alt="Image">
                        </div>
                        <div class="thumb-sm" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                           <img src="assets/images/help/two.png" alt="Image">
                        </div>
                        <div class="thumb-md" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                           <img src="assets/images/help/one.png" alt="Image">
                        </div>
                        <a href="#" class="help-two__thumb-content">
                           <div class="thumb">
                              <i class="fa-solid fa-play"></i>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-7 col-xxl-6">
                  <div class="help-two__content">
                     <div class="section__content">
                        <span class="sub-title"><i class="icon-donation"></i>About Ramdhanu</span>
                        <h2 class="title-animation">Helping each other can
                           make <span>world</span> better
                        </h2>
                        <p>Volunteering offers opportunities to develop new skills and gain valuable
                           experience. This can include leadership, communication, project
                        </p>
                     </div>
                     <div class="help-two__inner cta">
                        <div class="help-two__inner-content">
                           <div class="help__content-icon-group">
                              <div class="help__content-icon">
                                 <div class="thumb">
                                    <i class="icon-make-donation"></i>
                                 </div>
                                 <div class="content">
                                    <h6>Our Mission</h6>
                                    <p>Volunteering offers opportunities to develop new skills and gain valuable
                                       experience. This can include leadership, communication, project
                                    </p>
                                 </div>
                              </div>
                              <hr>
                              <div class="help__content-icon">
                                 <div class="thumb">
                                    <i class="icon-support-heart"></i>
                                 </div>
                                 <div class="content">
                                    <h6>Our Vission</h6>
                                    <p>Volunteering offers opportunities to develop new skills and gain valuable
                                       experience. This can include leadership, communication, project
                                    </p>
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
      <!-- ==== / help section end ==== -->
      <!-- ==== cause slider section start ==== -->
      <section class="cause cause-alt" data-background="assets/images/cause/cause-bg.png">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-md-8 col-xl-7">
                  <div class="section__header text-center">
                     <span class="sub-title"><i class="icon-donation"></i>Start donating poor people</span>
                     <h2 class="title-animation">Be the reason of someone
                        <span>smiles</span> Causes
                     </h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="cause-inner__wrapper">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="cause__slider-wrapper">
                        <div class="cause__slider swiper">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <div class="cause__slider-inner">
                                    <div class="cause__slider-single">
                                       <div class="thumb">
                                          <a href="cause-details.html">
                                             <img src="assets/images/cause/one.png" alt="Image">
                                          </a>
                                       </div>
                                       <div class="content">
                                          <h6><a href="cause-details.html">Children we work with</a></h6>
                                          <p>Lorem ipsum dolor sit amet, consete
                                             sadipscing elitr, sed diam nonum
                                          </p>
                                          <a href="donate-us.html" aria-label="donate now" title="donate now"
                                             class="btn--secondary mt-3">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="cause__slider-inner">
                                    <div class="cause__slider-single">
                                       <div class="thumb">
                                          <a href="cause-details.html">
                                             <img src="assets/images/cause/two.png" alt="Image">
                                          </a>
                                       </div>
                                       <div class="content">
                                          <h6><a href="cause-details.html">Help For Education</a></h6>
                                          <p>Lorem ipsum dolor sit amet, consete
                                             sadipscing elitr, sed diam nonum
                                          </p>
                                          <a href="donate-us.html" aria-label="donate now" title="donate now"
                                             class="btn--secondary mt-3">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="cause__slider-inner">
                                    <div class="cause__slider-single">
                                       <div class="thumb">
                                          <a href="cause-details.html">
                                             <img src="assets/images/cause/three.png" alt="Image">
                                          </a>
                                       </div>
                                       <div class="content">
                                          <h6><a href="cause-details.html">Help For Food</a></h6>
                                          <p>Lorem ipsum dolor sit amet, consete
                                             sadipscing elitr, sed diam nonum
                                          </p>
                                          <a href="donate-us.html" aria-label="donate now" title="donate now"
                                             class="btn--secondary mt-3">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="cause__slider-inner">
                                    <div class="cause__slider-single">
                                       <div class="thumb">
                                          <a href="cause-details.html">
                                             <img src="assets/images/cause/four.png" alt="Image">
                                          </a>
                                       </div>
                                       <div class="content">
                                          <h6><a href="cause-details.html">Give health support</a></h6>
                                          <p>Lorem ipsum dolor sit amet, consete
                                             sadipscing elitr, sed diam nonum
                                          </p>
                                          <a href="donate-us.html" aria-label="donate now" title="donate now"
                                             class="btn--secondary mt-3">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="cause__slider-inner">
                                    <div class="cause__slider-single">
                                       <div class="thumb">
                                          <a href="cause-details.html">
                                             <img src="assets/images/cause/one.png" alt="Image">
                                          </a>
                                       </div>
                                       <div class="content">
                                          <h6><a href="cause-details.html">Children we work with</a></h6>
                                          <p>Lorem ipsum dolor sit amet, consete
                                             sadipscing elitr, sed diam nonum
                                          </p>
                                          <a href="donate-us.html" aria-label="donate now" title="donate now"
                                             class="btn--secondary mt-3">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="cause__slider-inner">
                                    <div class="cause__slider-single">
                                       <div class="thumb">
                                          <a href="cause-details.html">
                                             <img src="assets/images/cause/two.png" alt="Image">
                                          </a>
                                       </div>
                                       <div class="content">
                                          <h6><a href="cause-details.html">Help For Education</a></h6>
                                          <p>Lorem ipsum dolor sit amet, consete
                                             sadipscing elitr, sed diam nonum
                                          </p>
                                          <a href="donate-us.html" aria-label="donate now" title="donate now"
                                             class="btn--secondary mt-3">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="cause__slider-inner">
                                    <div class="cause__slider-single">
                                       <div class="thumb">
                                          <a href="cause-details.html">
                                             <img src="assets/images/cause/three.png" alt="Image">
                                          </a>
                                       </div>
                                       <div class="content">
                                          <h6><a href="cause-details.html">Help For Food</a></h6>
                                          <p>Lorem ipsum dolor sit amet, consete
                                             sadipscing elitr, sed diam nonum
                                          </p>
                                          <a href="donate-us.html" aria-label="donate now" title="donate now"
                                             class="btn--secondary mt-3">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="swiper-slide">
                                 <div class="cause__slider-inner">
                                    <div class="cause__slider-single">
                                       <div class="thumb">
                                          <a href="cause-details.html">
                                             <img src="assets/images/cause/four.png" alt="Image">
                                          </a>
                                       </div>
                                       <div class="content">
                                          <h6><a href="cause-details.html">Give health support</a></h6>
                                          <p>Lorem ipsum dolor sit amet, consete
                                             sadipscing elitr, sed diam nonum
                                          </p>
                                          <a href="donate-us.html" aria-label="donate now" title="donate now"
                                             class="btn--secondary mt-3">Donate Now</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="slider-navigation">
               <button type="button" aria-label="prev slide" title="prev slide" class="prev-cause slider-btn">
                  <i class="fa-solid fa-arrow-left"></i>
               </button>
               <button type="button" aria-label="next slide" title="next slide"
                  class="next-cause slider-btn slider-btn-next">
                  <i class="fa-solid fa-arrow-right"></i>
               </button>
            </div>
         </div>
         <div class="spade">
            <img src="assets/images/help/spade.png" alt="Image">
         </div>
      </section>
      <!-- ==== / cause slider section end ==== -->
      <!-- ==== cta section start ==== -->
      <section class="cta-section-two">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-lg-7">
                  <div class="cta__section__content">
                     <div class="section__content text-center" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title"><i class="icon-donation"></i>Start donating poor
                           people</span>
                        <h2 class="title-animation">children need your help
                           by donating today
                        </h2>
                        <div class="banner__content-cta cta">
                           <a href="our-causes.html" aria-label="about us" title="about us"
                              class="btn--tertiary">Discover More</a>
                           <a href="contact-us.html" aria-label="contact us" title="contact us"
                              class="btn--primary">Donate Now!</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="cta-bg">
            <img src="assets/images/cta/cta-bg.png" alt="Image" class="parallax-image">
         </div>
         <div class="shape-left" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
            <img src="assets/images/cta/shape-left.png" alt="Image">
         </div>
         <div class="shape">
            <img src="assets/images/shape-two.png" alt="Image">
         </div>
      </section>
      <!-- ==== / cta section end ==== -->
      <!-- ==== video section start ==== -->
      <section class="team video" data-background="assets/images/bg-one.png">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-lg-10 col-xl-6">
                  <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                     <span class="sub-title"><i class="icon-donation"></i>Our video</span>
                     <h2 class="title-animation">Our Videos</h2>
                  </div>
               </div>
            </div>

            <div class="cause__slider-wrapper">
               <div class="cause__slider swiper">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="cause__slider-single">
                              <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                                 <div class="team__single van-tilt">
                                    <div class="team__single-thumb">
                                       <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="video-popup">
                                          <img src="assets/images/team/one.png" alt="Image">
                                       </a>
                                    </div>
                                    <div class="team__single-content">
                                       <h6><a href="#">Lorem dolor</a></h6>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="cause__slider-single">
                              <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="300">
                                 <div class="team__single van-tilt">
                                    <div class="team__single-thumb">
                                       <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="video-popup">
                                          <img src="assets/images/team/two.png" alt="Image">
                                       </a>
                                    </div>
                                    <div class="team__single-content">
                                       <h6><a href="#">Lorem dolor</a></h6>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="cause__slider-single">
                              <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="600">
                                 <div class="team__single van-tilt">
                                    <div class="team__single-thumb">
                                       <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="video-popup">
                                          <img src="assets/images/team/three.png" alt="Image">
                                       </a>
                                    </div>
                                    <div class="team__single-content">
                                       <h6><a href="#">Lorem dolor</a></h6>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="cause__slider-single">
                              <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="900">
                                 <div class="team__single van-tilt">
                                    <div class="team__single-thumb">
                                       <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="video-popup">
                                          <img src="assets/images/team/four.png" alt="Image">
                                       </a>
                                    </div>
                                    <div class="team__single-content">
                                       <h6><a href="#">Lorem dolor</a></h6>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="cause__slider-single">
                              <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="900">
                                 <div class="team__single van-tilt">
                                    <div class="team__single-thumb">
                                       <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="video-popup">
                                          <img src="assets/images/team/four.png" alt="Image">
                                       </a>
                                    </div>
                                    <div class="team__single-content">
                                       <h6><a href="#">Lorem dolor</a></h6>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="cause__slider-single">
                              <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="900">
                                 <div class="team__single van-tilt">
                                    <div class="team__single-thumb">
                                       <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="video-popup">
                                          <img src="assets/images/team/four.png" alt="Image">
                                       </a>
                                    </div>
                                    <div class="team__single-content">
                                       <h6><a href="#">Lorem dolor</a></h6>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="cause__slider-single">
                              <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="900">
                                 <div class="team__single van-tilt">
                                    <div class="team__single-thumb">
                                       <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="video-popup">
                                          <img src="assets/images/team/four.png" alt="Image">
                                       </a>
                                    </div>
                                    <div class="team__single-content">
                                       <h6><a href="#">Lorem dolor</a></h6>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="cause__slider-single">
                              <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="900">
                                 <div class="team__single van-tilt">
                                    <div class="team__single-thumb">
                                       <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="video-popup">
                                          <img src="assets/images/team/four.png" alt="Image">
                                       </a>
                                    </div>
                                    <div class="team__single-content">
                                       <h6><a href="#">Lorem dolor</a></h6>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="slider-navigation">
                     <button type="button" aria-label="prev slide" title="prev slide" class="prev-cause slider-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                     </button>
                     <div class="section__cta cta text-center mt-0">
                        <a href="our-team.html" aria-label="our team" title="our team" class="btn--primary">View All
                           <i class="fa-solid fa-arrow-right"></i></a>
                     </div>
                     <button type="button" aria-label="next slide" title="next slide"
                        class="next-cause slider-btn slider-btn-next">
                        <i class="fa-solid fa-arrow-right"></i>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ==== / video section end ==== -->
      <!-- Counter Section -->
      <section class="bg-dark text-white py-5 position-relative counter-section"
         style="background-image: url('https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80'); background-attachment: fixed; background-size: cover;">
         <div class="video-overlay"
            style="background: rgba(29, 53, 87, 0.9); position: absolute; left: 0; right: 0; top: 0; bottom: 0;"></div>
         <div class="container position-relative py-4">
            <div class="row text-center g-4">
               <div class="col-6 col-md-3">
                  <div class="counter-icon mb-4 text-primary py-3"><i class="fas fa-child fa-3x"></i></div>
                  <div class="counter-number display-4 fw-bold text-white" data-target="5000">0</div>
                  <p class="lead mt-4">Children Educated</p>
               </div>
               <div class="col-6 col-md-3">
                  <div class="counter-icon mb-4 text-primary py-3"><i class="fas fa-female fa-3x"></i></div>
                  <div class="counter-number display-4 fw-bold text-white" data-target="1200">0</div>
                  <p class="lead mt-4">Women Empowered</p>
               </div>
               <div class="col-6 col-md-3">
                  <div class="counter-icon mb-4 text-primary py-3"><i class="fas fa-hand-holding-heart fa-3x"></i></div>
                  <div class="counter-number display-4 fw-bold text-white" data-target="350">0</div>
                  <p class="lead mt-4">Volunteers</p>
               </div>
               <div class="col-6 col-md-3">
                  <div class="counter-icon mb-4 text-primary py-3"><i class="fas fa-globe-asia fa-3x"></i></div>
                  <div class="counter-number display-4 fw-bold text-white" data-target="25">0</div>
                  <p class="lead mt-4">Villages Covered</p>
               </div>
            </div>
         </div>
      </section>
      <!-- ==== / counter section end ==== -->
      <!-- ==== team section start ==== -->
      <section class="team team-section" data-background="assets/images/bg-one.png">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-lg-10 col-xl-6">
                  <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                     <span class="sub-title"><i class="icon-donation"></i>Our Team</span>
                     <h2 class="title-animation">Meet Our Dedicated Team</h2>
                  </div>
               </div>
            </div>

            <div class="cause__slider-wrapper">
               <div class="cause__slider swiper">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="cause__slider-single">
                              <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                                 <div class="team__single van-tilt">
                                    <div class="team__single-thumb">
                                       <a href="team-details.html">
                                          <div class="team-thumb-info">
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                          <img src="assets/images/team/one.png" alt="Image">
                                       </a>
                                    </div>
                                    <div class="team__single-content">
                                       <h6><a href="team-details.html">Michel Fokluz</a></h6>
                                       <p>Volunteer</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="cause__slider-single">
                              <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="300">
                                 <div class="team__single van-tilt">
                                    <div class="team__single-thumb">
                                       <a href="team-details.html">
                                          <div class="team-thumb-info">
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                          <img src="assets/images/team/two.png" alt="Image">
                                       </a>
                                    </div>
                                    <div class="team__single-content">
                                       <h6><a href="team-details.html">Arian Drobloas</a></h6>
                                       <p>Volunteer</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="cause__slider-single">
                              <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="600">
                                 <div class="team__single van-tilt">
                                    <div class="team__single-thumb">
                                       <a href="team-details.html">
                                          <div class="team-thumb-info">
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                          <img src="assets/images/team/three.png" alt="Image">
                                       </a>
                                    </div>
                                    <div class="team__single-content">
                                       <h6><a href="team-details.html">Jara Klintof</a></h6>
                                       <p>Volunteer</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="cause__slider-single">
                              <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="900">
                                 <div class="team__single van-tilt">
                                    <div class="team__single-thumb">
                                       <a href="team-details.html">
                                          <img src="assets/images/team/four.png" alt="Image">
                                          <div class="team-thumb-info">
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="team__single-content">
                                       <h6><a href="team-details.html">Aiden Markram</a></h6>
                                       <p>Volunteer</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="cause__slider-single">
                              <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="900">
                                 <div class="team__single van-tilt">
                                    <div class="team__single-thumb">
                                       <a href="team-details.html">
                                          <img src="assets/images/team/four.png" alt="Image">
                                          <div class="team-thumb-info">
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="team__single-content">
                                       <h6><a href="team-details.html">Aiden Markram</a></h6>
                                       <p>Volunteer</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="cause__slider-single">
                              <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="900">
                                 <div class="team__single van-tilt">
                                    <div class="team__single-thumb">
                                       <a href="team-details.html">
                                          <img src="assets/images/team/four.png" alt="Image">
                                          <div class="team-thumb-info">
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="team__single-content">
                                       <h6><a href="team-details.html">Aiden Markram</a></h6>
                                       <p>Volunteer</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="cause__slider-single">
                              <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="900">
                                 <div class="team__single van-tilt">
                                    <div class="team__single-thumb">
                                       <a href="team-details.html">
                                          <img src="assets/images/team/four.png" alt="Image">
                                          <div class="team-thumb-info">
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="team__single-content">
                                       <h6><a href="team-details.html">Aiden Markram</a></h6>
                                       <p>Volunteer</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-slide">
                        <div class="cause__slider-inner">
                           <div class="cause__slider-single">
                              <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="900">
                                 <div class="team__single van-tilt">
                                    <div class="team__single-thumb">
                                       <a href="team-details.html">
                                          <img src="assets/images/team/four.png" alt="Image">
                                          <div class="team-thumb-info">
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.</p>
                                          </div>
                                       </a>
                                    </div>
                                    <div class="team__single-content">
                                       <h6><a href="team-details.html">Aiden Markram</a></h6>
                                       <p>Volunteer</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="slider-navigation">
                     <button type="button" aria-label="prev slide" title="prev slide" class="prev-cause slider-btn">
                        <i class="fa-solid fa-arrow-left"></i>
                     </button>
                     <div class="section__cta cta text-center mt-0">
                        <a href="our-team.html" aria-label="our team" title="our team" class="btn--primary">View All
                           <i class="fa-solid fa-arrow-right"></i></a>
                     </div>
                     <button type="button" aria-label="next slide" title="next slide"
                        class="next-cause slider-btn slider-btn-next">
                        <i class="fa-solid fa-arrow-right"></i>
                     </button>
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="spade">
            <img src="assets/images/sprade-green.png" alt="Image">
         </div> -->
      </section>
      <!-- ==== / team section end ==== -->
      <!-- ==== blog section start ==== -->
      <section class="blog blog-two" data-background="assets/images/bg-one.png">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-md-8 col-xl-7">
                  <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000"
                     data-aos-delay="100">
                     <span class="sub-title"><i class="icon-donation"></i>Latest Blog Posts</span>
                     <h2 class="title-animation">Our Latest <span>News</span> &
                        Articles
                     </h2>
                  </div>
               </div>
            </div>
            <div class="row gutter-40">
               <div class="col-12 col-lg-6 col-xl-4">
                  <div class="blog__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                     <div class="blog__single van-tilt">
                        <div class="blog__single-inner">
                           <div class="blog__single-thumb">
                              <a href="blog-details.html">
                                 <img src="assets/images/blog/one.png" alt="Image">
                              </a>
                              <div class="tag">
                                 <a href="blog-list.html"><i class="fa-solid fa-tags"></i>Health</a>
                              </div>
                           </div>
                           <div class="blog__single-content">
                              <h5><a href="blog-details.html">IT Service Case Studies Accelerate
                                    Business Fly Success Tech</a>
                              </h5>
                           </div>
                           <div class="blog__single-cta">
                              <a href="blog-details.html" aria-label="blog details" title="blog details">Read
                                 More<i class="fa-solid fa-circle-arrow-right"></i></a>
                           </div>
                        </div>
                        <img src="assets/images/blog/spade.png" alt="Image" class="spade-two">
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-6 col-xl-4">
                  <div class="blog__single-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                     <div class="blog__single van-tilt">
                        <div class="blog__single-inner">
                           <div class="blog__single-thumb">
                              <a href="blog-details.html">
                                 <img src="assets/images/blog/two.png" alt="Image">
                              </a>
                              <div class="tag">
                                 <a href="blog-list.html"><i class="fa-solid fa-tags"></i>Education</a>
                              </div>
                           </div>
                           <div class="blog__single-content">
                              <h5><a href="blog-details.html">IT Service Case Studies Accelerate
                                    Business Fly Success Tech</a>
                              </h5>
                           </div>
                           <div class="blog__single-cta">
                              <a href="blog-details.html" aria-label="blog details" title="blog details">Read
                                 More<i class="fa-solid fa-circle-arrow-right"></i></a>
                           </div>
                        </div>
                        <img src="assets/images/blog/spade.png" alt="Image" class="spade-two">
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-6 col-xl-4">
                  <div class="blog__single-wrapper" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                     <div class="blog__single van-tilt">
                        <div class="blog__single-inner">
                           <div class="blog__single-thumb">
                              <a href="blog-details.html">
                                 <img src="assets/images/blog/three.png" alt="Image">
                              </a>
                              <div class="tag">
                                 <a href="blog-list.html"><i class="fa-solid fa-tags"></i>Food</a>
                              </div>
                           </div>
                           <div class="blog__single-content">
                              <h5><a href="blog-details.html">IT Service Case Studies Accelerate
                                    Business Fly Success Tech</a>
                              </h5>
                           </div>
                           <div class="blog__single-cta">
                              <a href="blog-details.html" aria-label="blog details" title="blog details">Read
                                 More<i class="fa-solid fa-circle-arrow-right"></i></a>
                           </div>
                        </div>
                        <img src="assets/images/blog/spade.png" alt="Image" class="spade-two">
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="section__cta cta text-center">
                     <a href="blog-grid.html" aria-label="our blog" title="our blog" class="btn--primary">View
                        All <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
               </div>
            </div>
         </div>
         <div class="spade">
            <img src="assets/images/blog/spade-base.png" alt="Image" class="base-img">
         </div>
      </section>
      <!-- ==== / blog section end ==== -->
      <!-- ==== image gallery section start ==== -->

<?php get_footer(); ?>