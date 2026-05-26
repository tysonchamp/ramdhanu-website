<!DOCTYPE html>
<html lang="en">

<head>
   <!-- required meta -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php

    /*
     * Print the <title> tag based on what is being viewed.
     */
    global $page, $paged;
    ?>
    <title>
        <?php wp_title('');

        // Add the blog name.
        // bloginfo( 'name' );

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo('description', 'display');
        if ($site_description && (is_home() || is_front_page()))
            echo " | $site_description";

        // Add a page number if necessary:
        if ($paged >= 2 || $page >= 2)
            echo ' | ' . sprintf(__('Page %s', 'eventsmore'), max($paged, $page)); ?>
    </title>
    <?php wp_head(); ?>
    <!-- google fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
      href="https://fonts.googleapis.com/css233e6.css?family=Caveat:wght@400..700&amp;family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&amp;family=Nunito:ital,wght@0,200..1000;1,200..1000&amp;family=Outfit:wght@100..900&amp;display=swap"
      rel="stylesheet"> <!-- main css -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
   <!-- responsive css -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
   <!-- color themes -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/default-theme.css" id="switch-color">
   <!-- want sticky header -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/sticky-header.css">
   <!-- box layout css -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/box-layout.css">
   <!-- dark mode css -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/dark-mode.css">
   <!-- rtl css -->
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/rtl.css">
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
   <div class="page-wrapper">
      <!-- ==== preloader start ==== -->
      <div class="preloader">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
         <!-- <p>RAMDHANU</p> -->
      </div>
      <!-- ==== / preloader end ==== -->
      <!-- ==== topbar start ==== -->
      <div class="topbar d-none d-lg-block">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-12 col-lg-6">
                  <div class="topbar__list-wrapper">
                     <ul class="topbar__list">
                        <li>
                           <a href="mailto:support@example.com">
                              <i class="fa-regular fa-envelope"></i>support@example.com
                           </a>
                        </li>
                        <li>
                           <a href="tel:2305-587-3407">
                              <i class="fa-solid fa-phone"></i>+2(305) 587-3407
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-12 col-lg-6">
                  <div class="topbar__items justify-content-end">
                     <div class="social">
                        <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook"
                           title="facebook">
                           <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://vimeo.com/" target="_blank" aria-label="share us on vimeo" title="vimeo">
                           <i class="fa-brands fa-vimeo-v"></i>
                        </a>
                        <a href="https://x.com/" target="_blank" aria-label="share us on twitter" title="twitter">
                           <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on linkedin"
                           title="linkedin">
                           <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- ==== / topbar end ==== -->
      <!-- ==== header start ==== -->
      <header class="header header-primary">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="main-header__menu-box">
                     <nav class="navbar p-0">
                        <div class="navbar-logo">
                           <a href="index.html">
                              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Image">
                           </a>
                        </div>
                        <div class="navbar__menu d-none d-xl-block">
                           <?php
                           if ( has_nav_menu( 'header_menu' ) ) {
                               wp_nav_menu( array(
                                   'theme_location' => 'header_menu',
                                   'menu_class'     => 'navbar__list',
                                   'container'      => false,
                                   'walker'         => new main_menu()
                               ) );
                           }
                           ?>
                        </div>
                        <div class="navbar__options">
                           <div class="navbar__mobile-options ">
                              <div class="contact-btn d-none d-xxl-flex">
                                 <div class="contact-icon">
                                    <i class="fa-solid fa-phone-volume"></i>
                                 </div>
                                 <div class="contact-content">
                                    <p>Call Us Now</p>
                                    <a href="tel:01-793-7938">(+01)-793-7938 </a>
                                 </div>
                              </div>
                              <a href="donate-us.html" class="btn--primary d-none d-md-flex">Donate Now <i
                                    class="icon-circle-arrow"></i></a>
                           </div>
                           <button class="open-offcanvas-nav d-flex d-xl-none" aria-label="toggle mobile menu"
                              title="open offcanvas menu">
                              <span class="icon-bar top-bar"></span>
                              <span class="icon-bar middle-bar"></span>
                              <span class="icon-bar bottom-bar"></span>
                           </button>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- ==== / header end ==== -->
      <!-- ==== mobile menu start ==== -->
      <div class="mobile-menu d-block d-xl-none">
         <nav class="mobile-menu__wrapper">
            <div class="mobile-menu__header nav-fade">
               <div class="logo">
                  <a href="index.html" aria-label="home page" title="logo">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt="Image">
                  </a>
               </div>
               <button aria-label="close mobile menu" class="close-mobile-menu">
                  <i class="fa-solid fa-xmark"></i>
               </button>
            </div>
            <div class="mobile-menu__list"></div>
            <div class="mobile-menu__cta nav-fade d-block d-md-none">
               <a href="donate-us.html" class="btn--primary btn--primary-alt">Donate Now <i
                     class="icon-circle-arrow"></i></a>
            </div>
            <div class="mobile-menu__social social nav-fade">
               <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook" title="facebook">
                  <i class="fa-brands fa-facebook-f"></i>
               </a>
               <a href="https://vimeo.com/" target="_blank" aria-label="share us on vimeo" title="vimeo">
                  <i class="fa-brands fa-vimeo-v"></i>
               </a>
               <a href="https://x.com/" target="_blank" aria-label="share us on twitter" title="twitter">
                  <i class="fa-brands fa-twitter"></i>
               </a>
               <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on linkedin" title="linkedin">
                  <i class="fa-brands fa-linkedin-in"></i>
               </a>
            </div>
         </nav>
      </div>
      <div class="mobile-menu__backdrop"></div>
      <!-- ==== / mobile menu end ==== -->