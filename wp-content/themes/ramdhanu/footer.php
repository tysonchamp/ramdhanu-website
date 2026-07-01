
      <!-- ==== footer start ==== -->
      <footer class="footer">
         <div class="footer__inner">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="footer__intro">
                        <div class="row align-items-center justify-content-center gutter-30">
                           <div class="col-12 col-sm-8 col-lg-5 col-xl-6">
                              <div class="footer__content">
                                 <h3 class="title-animation">children need your help
                                    start <span>donating</span> today
                                 </h3>
                              </div>
                           </div>
                           <div class="col-12 col-lg-7 col-xl-6">
                              <div class="footer__support" data-aos="fade-up" data-aos-duration="1000"
                                 data-aos-delay="300">
                                 <a href="<?php echo get_page_link(158) ?>">
                                    Donate Now <i class="fa-solid fa-arrow-right"></i>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row gutter-60">
                  <div class="col-12 col-xl-6">
                     <div class="footer__newsletter" data-aos="fade-up" data-aos-duration="1000">
                        <div class="footer__newsletter-info">
                           <h4 class="title-animation">Subscribe Newsletter</h4>
                           <p>We understand that every challenge is an opportunity </p>
                        </div>
                        <div class="footer__newsletter-form">
                           <form action="#" method="post">
                              <div class="input-icon">
                                 <input type="email" required name="subscribe-email" id="subscribeEmail"
                                    placeholder="Enter Email">
                                 <i class="fa-regular fa-envelope"></i>
                              </div>
                              <button type="submit" aria-label="subscribe to our newsletter"
                                 title="subscribe to our newsletter" class="btn--primary">Subscribe <i
                                    class="fa-solid fa-paper-plane"></i>
                              </button>
                           </form>
                        </div>
                        <div class="footer__newsletter-check">
                           <div class="form-group">
                              <input type="checkbox" id="acceptPolicy">
                              <label for="acceptPolicy">By subscribing, you're accepting our <a
                                    href="contact-us.html">Privacy Policy</a></label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-2 offset-xl-1">
                     <div class="footer__list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        <div class="footer__list-intro">
                           <h5 class="title-animation">Quick Links</h5>
                        </div>
                        <div class="footer__list-items">
                           <!-- <ul>
                              <li><a href="about-us.html"><i class="fa-solid fa-angles-right"></i>About Us</a>
                              </li>
                              <li><a href="our-causes.html"><i class="fa-solid fa-angles-right"></i>Our
                                    Causes</a>
                              </li>
                              <li><a href="our-team.html"><i class="fa-solid fa-angles-right"></i>Our
                                    Teams</a>
                              </li>
                              <li><a href="blog-list.html"><i class="fa-solid fa-angles-right"></i>Our
                                    Blog</a>
                              </li>
                              <li><a href="faq.html"><i class="fa-solid fa-angles-right"></i>FAQ</a></li>
                              <li><a href="contact-us.html"><i class="fa-solid fa-angles-right"></i>Get A
                                    Quote</a>
                              </li>
                           </ul> -->
                           <?php
                           if ( has_nav_menu( 'footer_menu1' ) ) {
                              wp_nav_menu( array(
                                 'theme_location' => 'footer_menu1',
                                 'menu_class'     => '',
                                 'container'      => false,
                                 'walker'         => new footer_nav_menu()
                              ));
                           }
                           ?>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-3">
                     <div class="footer__list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="footer__list-group">
                           <div class="footer__list-intro">
                              <h5 class="title-animation">Locations</h5>
                           </div>
                           <div class="content">
                              <p>
                                 <a href="https://maps.app.goo.gl/Bufa8gjYhWCfU7Ay6" target="_blank"><?php echo get_field('registered_office','option'); ?></a>
                              </p>
                           </div>
                        </div>
                        <div class="footer__list-group">
                           <div class="footer__list-intro">
                              <h5 class="title-animation">Contact</h5>
                           </div>
                           <div class="content">
                              <p>
                                 <a href="mailto:<?php echo get_field('email_address','option'); ?>"><?php echo get_field('email_address','option'); ?></a>
                              </p>
                              <p><a href="tel:<?php echo get_field('phone_no_1','option'); ?>"><?php echo get_field('phone_no_1','option'); ?></a>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="footer__copyright">
                  <div class="container">
                     <div class="row">
                        <div class="col-12">
                           <div class="footer__copyright-inner">
                              <div class="row align-items-center gutter-24">
                                 <div class="col-12 col-xl-2">
                                    <div class="footer__copyright-logo text-center text-xl-start">
                                       <a href="index.html">
                                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Image">
                                       </a>
                                    </div>
                                 </div>
                                 <div class="col-12 col-xl-4">
                                    <div class="footer__bottom-right text-center">
                                       <p>Copyright &copy; <span id="copyrightYear"></span> <a href="index.html"
                                             target="_blank">Ramdhanu</a>. All rights
                                          reserved.
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-12 col-xl-6">
                                    <div class="footer__bottom-left">
                                       <ul class="footer__bottom-list justify-content-center justify-content-xl-end">
                                          <li><a href="<?php echo get_page_link(154); ?>">Terms & Conditions</a></li>
                                          <li><a href="<?php echo get_page_link(3); ?>">Privacy Policy</a></li>
                                          <li><a href="<?php echo get_page_link(156); ?>">Refund Policy</a></li>
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
         </div>
      </footer>
      <!-- ==== / footer end ==== -->
      <!-- ==== custom cursor start ==== -->
      <div class="mouseCursor cursor-outer"></div>
      <div class="mouseCursor cursor-inner"></div>
      <!-- ==== / custom cursor end ==== -->
      <!-- ==== scroll to top start ==== -->
      <button class="progress-wrap" aria-label="scroll indicator" title="back to top">
         <span></span>
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </button>
      <!-- ==== / scroll to top end ==== -->
   </div>
   <!-- ==== js dependencies start ==== -->
   <!-- jquery -->
   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.7.1.min.js"></script>
   <!-- bootstrap five js -->
   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
   <!-- nice select js -->
   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.nice-select.min.js"></script>
   <!-- magnific popup js -->
   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
   <!-- swiper slider js -->
   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
   <!-- viewport js -->
   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/viewport.jquery.js"></script>
   <!-- odometer js -->
   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/odometer.min.js"></script>
   <!-- vanilla tilt js -->
   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vanilla-tilt.min.js"></script>
   <!-- aos js -->
   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/aos.js"></script>

   <!-- splittext js -->
   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/SplitText.min.js"></script>
   <!-- scrollto js -->
   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/ScrollToPlugin.min.js"></script>
   <!-- scrolltrigger js -->
   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/ScrollTrigger.min.js"></script>
   <!-- gsap js -->
   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.min.js"></script>
   <!-- ==== / js dependencies end ==== -->
   <!-- template settings js -->
   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/template-settings.js"></script>
   <!-- main js -->
   <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
   <script>
      // Animated Counters
      const counters = document.querySelectorAll('.counter-number');
      const speed = 2000;

      const animateCounters = () => {
         counters.forEach(counter => {
            const updateCount = () => {
               const target = +counter.getAttribute('data-target');
               const count = +counter.innerText;
               const inc = target / 100; // Increased increment speed relative to lower base

               if (count < target) {
                  counter.innerText = Math.ceil(count + inc);
                  setTimeout(updateCount, 10);
               } else {
                  counter.innerText = target;
               }
            };
            updateCount();
         });
      }

      // Trigger animation when section is in view
      let hasAnimated = false;
      const counterSection = document.querySelector('.counter-section');

      if (counterSection) {
         const observer = new IntersectionObserver((entries) => {
            if (entries[0].isIntersecting && !hasAnimated) {
               animateCounters();
               hasAnimated = true;
            }
         }, { threshold: 0.5 }); // Trigger when 50% visible

         observer.observe(counterSection);
      }
   </script>
   <?php wp_footer(); ?>
</body>

</html>