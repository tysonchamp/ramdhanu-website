<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage clean blog
 * 
 */
global $post;

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
      <!-- ==== / blog details section end ==== -->
       
<?php get_footer(); ?>
