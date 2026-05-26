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
                  <h2 class="title-animation">Latest Blog Posts</h2>
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
      <section class="blog-main cm-details">
         <div class="container">
            <div class="row gutter-60">
               <div class="col-12 col-xl-8">
                  <?php if(have_posts()): ?>
                     <?php while(have_posts()): the_post(); ?>
                        <div class="blog__single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                           <div class="blog__single-thumb">
                              <?php if (has_post_thumbnail()) : ?>
                                 <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large', ['class' => '']); ?>
                                 </a>
                              <?php endif; ?>
                              <!-- <div class="tag">
                                 <a href="blog-list.html"><i class="fa-solid fa-tags"></i>Health</a>
                              </div> -->
                           </div>
                           <div class="blog__single-inner">
                              <div class="blog__single-content">
                                 <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h4>
                                 <?php the_excerpt(); ?>
                              </div>
                              <div class="blog__single-cta">
                                 <a href="<?php the_permalink(); ?>" aria-label="blog details" title="blog details">
                                    Read More
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                 </a>
                              </div>
                           </div>
                        </div>
                     <?php endwhile; ?>
                  <?php else: ?>
                     <p><?php esc_html_e('No posts found.', 'shape'); ?></p>
                  <?php endif; ?>
                  <?php custom_paging_nav(); ?>
               </div>
               <div class="col-12 col-xl-4">
                  <div class="blog-main__sidebar">
                     <div class="cm-details__sidebar">
                        <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                           <div class="intro">
                              <h5>search here</h5>
                           </div>
                           <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                              <input type="text" id="searchProduct" name="s" placeholder="Search here..." value="<?php the_search_query(); ?>">
                              <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                           </form>
                        </div>
                        <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                           <div class="intro">
                              <h5>Recent Posts</h5>
                           </div>
                           <div class="cm-sidebar-post">
                              <?php
                                 $recent_posts = new WP_Query(array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 5,
                                    'post_status' => 'publish',
                                 ));
                                 if ($recent_posts->have_posts()) :
                                    while ($recent_posts->have_posts()) : $recent_posts->the_post();
                              ?>
                                    <div class="single-item">
                                       <div class="thumb">
                                          <a href="<?php the_permalink(); ?>">
                                             <img src="<?php echo the_post_thumbnail_url('medium'); ?>">
                                          </a>
                                       </div>
                                       <div class="content">
                                          <p>
                                             <i class="fa-solid fa-calendar-days"></i> 
                                             <span><?php the_date('M d, Y'); ?></span>
                                          </p>
                                          <p><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                          </p>
                                       </div>
                                    </div>
                              <?php       
                                    endwhile;
                                 endif;
                              ?>
                           </div>
                        </div>
                        <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                           <div class="intro">
                              <h5>Categories</h5>
                           </div>
                           <div class="cm-categories">
                              <?php
                                 $categories = get_categories();
                                 foreach ($categories as $category) {
                                    echo '<a href="' . get_category_link($category->term_id) . '">';
                                    echo '<span>' . $category->name . '</span>';
                                    echo '<span>' . $category->count . '</span>';
                                    echo '</a>';
                                 }
                              ?>
                           </div>
                        </div>
                        <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                           <div class="intro">
                              <h5>Popular Tags</h5>
                           </div>
                           <div class="tag-wrapper">
                              <?php
                                 $tags = get_tags();
                                 foreach ($tags as $tag) {
                                    echo '<a href="' . get_tag_link($tag->term_id) . '">';
                                    echo '<span>' . $tag->name . '</span>';
                                    echo '</a>';
                                 }
                              ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ==== / blog section end ==== -->
       
<?php get_footer(); ?>
