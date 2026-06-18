<?php
/**
 * The template for displaying 404 not found error page.
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
get_header(); ?>
    
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>404 - Page Not Found</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    <!-- Start Error Area -->
    <section class="error-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="error-content">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404.png" alt="error">
                        <h3>Page Not Found</h3>
                        <p>The page you are looking for might have been removed had its name changed or is temporarily unavailable.</p>
                        <a href="<?php echo site_url( $path = '', $scheme = null ) ?>" class="default-btn">Go to Home <span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Error Area -->

<?php get_footer(); ?>
