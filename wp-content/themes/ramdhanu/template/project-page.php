<?php
/*
 * Template Name: Project Page
 */
GLOBAL $post;
get_header();

?>

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
            <?php 
            $banner_bg = get_field('banner_background_image');
            if($banner_bg): ?>
                <img src="<?php echo esc_url($banner_bg['url']); ?>" alt="<?php echo esc_attr($banner_bg['alt'] ?: 'Image'); ?>">
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner-bg.png" alt="Image">
            <?php endif; ?>
         </div>
         <div class="shape">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape.png" alt="Image">
         </div>
      </section>
      <!-- ==== / banner section end ==== -->
        <!-- ============================================================
           SECTION 2: THE ISSUE — Problem Overview
           ============================================================ -->
        <section class="pdetail-section pdetail-section--gray">
            <div class="container">
                <div class="row align-items-center gutter-40">
                    <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                        <div class="pdetail-section__header">
                            <span class="sub-title"><i class="icon-donation"></i><?php echo get_field('issue_sub_title') ?: 'The Challenge'; ?></span>
                            <h2 class="title-animation"><?php echo get_field('issue_title') ?: 'Understanding the <span>Issue</span>'; ?></h2>
                        </div>
                        <div class="pdetail-issue__content">
                            <?php if(get_field('issue_content')): ?>
                                <?php echo get_field('issue_content'); ?>
                            <?php endif; ?>
                            <?php if(get_field('issue_highlight')): ?>
                                <div class="pdetail-issue__highlight">
                                    <i class="fa-solid fa-quote-left"></i>
                                    <div><?php echo get_field('issue_highlight'); ?></div>
                                </div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="pdetail-issue__stats-row">
                            <?php if (have_rows('issue_stats')): ?>
                                <?php while (have_rows('issue_stats')): the_row(); ?>
                                <div class="pdetail-issue__stat-box">
                                    <div class="pdetail-issue__stat-number"><?php the_sub_field('number'); ?></div>
                                    <div class="pdetail-issue__stat-label"><?php the_sub_field('label'); ?></div>
                                </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                        <div class="pdetail-issue__thumb position-relative">
                            <?php 
                            $issue_image = get_field('issue_image');
                            if ($issue_image): ?>
                                <img src="<?php echo esc_url($issue_image['url']); ?>" alt="<?php echo esc_attr($issue_image['alt']); ?>">
                            <?php endif; ?>
                            
                            <?php 
                            $video_url = get_field('issue_video_url');
                            if ($video_url): ?>
                            <a href="<?php echo esc_url($video_url); ?>" class="pdetail-video-play video-popup"
                                title="Watch Project Video">
                                <i class="fa-solid fa-play"></i>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============================================================
           SECTION 3: OUR WORK — What We Are Doing
           ============================================================ -->
        <section class="pdetail-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div class="pdetail-section__header pdetail-section__header--center text-center">
                            <span class="sub-title"><i class="icon-donation"></i><?php echo get_field('work_sub_title') ?: 'What We Do'; ?></span>
                            <h2 class="title-animation"><?php echo get_field('work_title') ?: 'Our Work & <span>Activities</span>'; ?></h2>
                            <p><?php echo get_field('work_description') ?: "Shiksha Setu takes a holistic approach — combining physical learning centres, digital tools, teacher training, and community engagement to create lasting educational change."; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <?php if (have_rows('work_activities')): ?>
                        <?php $delay = 0; ?>
                        <?php while (have_rows('work_activities')): the_row(); ?>
                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1000" <?php echo $delay ? 'data-aos-delay="'.$delay.'"' : ''; ?>>
                            <div class="pdetail-work__card">
                                <div class="pdetail-work__icon"><i class="<?php the_sub_field('icon_class'); ?>"></i></div>
                                <h5><?php the_sub_field('title'); ?></h5>
                                <p><?php the_sub_field('description'); ?></p>
                            </div>
                        </div>
                        <?php 
                        $delay += 150; 
                        if ($delay > 300) $delay = 0;
                        endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- ============================================================
           SECTION 4: IMAGE GALLERY + VIDEO
           ============================================================ -->
        <section class="pdetail-section pdetail-section--gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div class="pdetail-section__header pdetail-section__header--center text-center">
                            <span class="sub-title"><i class="icon-donation"></i><?php echo get_field('gallery_sub_title') ?: 'See Our Work'; ?></span>
                            <h2 class="title-animation"><?php echo get_field('gallery_title') ?: 'Project <span>Gallery</span>'; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="swiper pdetail-gallery-slider" data-aos="fade-up" data-aos-duration="1000">
                    <div class="swiper-wrapper">
                        <?php 
                        $images = get_field('project_gallery');
                        if( $images ): 
                            foreach( $images as $image ): ?>
                            <div class="swiper-slide">
                                <a href="<?php echo esc_url($image['url']); ?>"
                                    class="pdetail-gallery__item image-popup"
                                    title="<?php echo esc_attr($image['title']); ?>">
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>">
                                    <div class="pdetail-gallery__overlay"><i class="fa-solid fa-expand"></i></div>
                                </a>
                            </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination mt-4 position-relative"></div>
                </div>
            </div>
        </section>
        <!-- ============================================================
           SECTION 5: IMPACT — Numbers & Results
           ============================================================ -->
        <section class="pdetail-section pdetail-section--dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <div class="pdetail-section__header pdetail-section__header--center text-center"
                            data-aos="fade-up" data-aos-duration="1000">
                            <span class="sub-title" style="color:rgba(255,255,255,0.7);"><i
                                    class="icon-donation"></i><?php echo get_field('impact_sub_title') ?: 'Results & Outcomes'; ?></span>
                            <h2 class="title-animation" style="color:#fff;"><?php echo get_field('impact_title') ?: 'The Impact We\'ve <span>Created</span>'; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <?php if (have_rows('impact_stats')): ?>
                        <?php $delay = 0; ?>
                        <?php while (have_rows('impact_stats')): the_row(); ?>
                        <div class="col-6 col-md-3" data-aos="fade-up" data-aos-duration="1000" <?php echo $delay ? 'data-aos-delay="'.$delay.'"' : ''; ?>>
                            <div class="pdetail-impact__card">
                                <div class="pdetail-impact__icon"><i class="<?php the_sub_field('icon_class'); ?>"></i></div>
                                <div class="pdetail-impact__number"><span class="counter" data-target="<?php the_sub_field('target_number'); ?>">0</span><?php if($suffix = get_sub_field('suffix')) echo '<span>'.$suffix.'</span>'; ?></div>
                                <p class="pdetail-impact__label"><?php the_sub_field('label'); ?></p>
                            </div>
                        </div>
                        <?php 
                        $delay += 150; 
                        endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- ==== video section start ==== -->
        <section class="team video" data-background="<?php echo get_template_directory_uri(); ?>/assets/images/bg-one.png">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-6">
                        <div class="section__header text-center" data-aos="fade-up" data-aos-duration="1000">
                            <span class="sub-title"><i class="icon-donation"></i><?php echo get_field('videos_sub_title') ?: 'Our video'; ?></span>
                            <h2 class="title-animation"><?php echo get_field('videos_title') ?: 'Our Videos'; ?></h2>
                        </div>
                    </div>
                </div>

                <div class="cause__slider-wrapper">
                    <div class="cause__slider swiper">
                        <div class="swiper-wrapper">
                            <?php if (have_rows('project_videos')): ?>
                                <?php $delay = 0; ?>
                                <?php while (have_rows('project_videos')): the_row(); 
                                    $video_image = get_sub_field('thumbnail');
                                    $video_url = get_sub_field('video_url');
                                    $video_title = get_sub_field('title');
                                ?>
                                <div class="swiper-slide">
                                    <div class="cause__slider-inner">
                                        <div class="cause__slider-single">
                                            <div class="team__single-wrapper" data-aos="fade-up" data-aos-duration="1000"
                                                <?php echo $delay ? 'data-aos-delay="'.$delay.'"' : ''; ?>>
                                                <div class="team__single van-tilt">
                                                    <div class="team__single-thumb">
                                                        <a href="<?php echo esc_url($video_url); ?>"
                                                            class="video-popup">
                                                            <?php if($video_image): ?>
                                                                <img src="<?php echo esc_url($video_image['url']); ?>" alt="<?php echo esc_attr($video_image['alt']); ?>">
                                                            <?php else: ?>
                                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/one.png" alt="Image">
                                                            <?php endif; ?>
                                                        </a>
                                                    </div>
                                                    <div class="team__single-content">
                                                        <h6><a href="<?php echo esc_url($video_url); ?>" class="video-popup"><?php echo esc_html($video_title); ?></a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                $delay += 300; 
                                if($delay > 900) $delay = 900;
                                endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="slider-navigation">
                            <button type="button" aria-label="prev slide" title="prev slide"
                                class="prev-cause slider-btn">
                                <i class="fa-solid fa-arrow-left"></i>
                            </button>
                            <div class="section__cta cta text-center mt-0">
                                <?php if($view_all_link = get_field('videos_view_all_link')): ?>
                                <a href="<?php echo esc_url($view_all_link['url']); ?>" aria-label="<?php echo esc_attr($view_all_link['title']); ?>" title="<?php echo esc_attr($view_all_link['title']); ?>" class="btn--primary"><?php echo esc_html($view_all_link['title']); ?>
                                    <i class="fa-solid fa-arrow-right"></i></a>
                                <?php endif; ?>
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
        <!-- ============================================================
           SECTION 7: CTA — Support This Project
           ============================================================ -->
        <section class="pdetail-cta">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-8">
                        <h2 data-aos="fade-up" data-aos-duration="1000"><?php echo get_field('cta_title') ?: 'Help Us Reach Every Child'; ?></h2>
                        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200"><?php echo get_field('cta_description') ?: 'Your contribution can give a child the gift of education. ₹500 sponsors one child\'s learning materials for a month. ₹5,000 powers a digital classroom for a term.'; ?></p>
                        <div class="pdetail-cta__actions" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="400">
                            <?php if($primary_button = get_field('cta_primary_button')): ?>
                            <a href="<?php echo esc_url($primary_button['url']); ?>" class="pdetail-cta__btn pdetail-cta__btn--primary">
                                <i class="fa-solid fa-heart"></i> <?php echo esc_html($primary_button['title']); ?>
                            </a>
                            <?php endif; ?>
                            
                            <?php if($secondary_button = get_field('cta_secondary_button')): ?>
                            <a href="<?php echo esc_url($secondary_button['url']); ?>" class="pdetail-cta__btn pdetail-cta__btn--outline">
                                <i class="fa-solid fa-handshake"></i> <?php echo esc_html($secondary_button['title']); ?>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>