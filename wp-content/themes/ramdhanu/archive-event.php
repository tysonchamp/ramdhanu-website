<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shape
 * @since Shape 1.0
 */
 
get_header(); ?>
    
      <!-- ==== banner section start ==== -->
      <section class="common-banner">
         <div class="container">
            <div class="row">
               <div class="common-banner__content text-center">
                  <!-- <span class="sub-title"><i class="icon-donation"></i>Start donating poor people</span> -->
                  <h2 class="title-animation">Latest Events</h2>
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
      <!-- ==== blog section start ==== -->
      <section class="blog-main blog cm-details events">
         <div class="container">
            <div class="row gutter-60">
               <div class="col-12 col-xl-12">
                  <div class="row gutter-30">

                     <?php if(have_posts()): ?>
                        <?php while(have_posts()): the_post(); ?>
                           <div class="col-12 col-lg-4">
                              <div class="blog__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                                 <div class="blog__single van-tilt">
                                    <div class="blog__single-thumb">
                                       <a href="<?php the_permalink(); ?>">
                                          <?php if (has_post_thumbnail()) : ?>
                                             <?php the_post_thumbnail('large'); ?>
                                          <?php endif; ?>
                                       </a>
                                    </div>
                                    <div class="blog__single-inner">
                                       <div class="blog__single-content">
                                          <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                          </h5>
                                       </div>
                                       <div class="blog__single-cta">
                                          <a href="<?php the_permalink(); ?>" aria-label="blog details" title="blog details">Read
                                             More<i class="fa-solid fa-circle-arrow-right"></i></a>
                                       </div>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/spade.png" alt="Image" class="spade-two">
                                 </div>
                              </div>
                           </div>
                        <?php endwhile; ?>
                     <?php endif; ?>
                     
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <?php custom_paging_nav(); ?>
                        <!-- <div class="pagination-wrapper" data-aos="fade-up" data-aos-duration="1000">
                           <ul class="pagination main-pagination">
                              <li>
                                 <button>
                                    <i class="fa-solid fa-angles-left"></i>
                                 </button>
                              </li>
                              <li>
                                 <a href="blog-list.html">1</a>
                              </li>
                              <li>
                                 <a href="blog-list.html" class="active">2</a>
                              </li>
                              <li>
                                 <a href="blog-list.html">3</a>
                              </li>
                              <li>
                                 <button>
                                    <i class="fa-solid fa-angles-right"></i>
                                 </button>
                              </li>
                           </ul>
                        </div> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ==== / blog section end ==== -->
       
<?php get_footer(); ?>
