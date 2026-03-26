<?php
/**
 * DVN Landing — index.php (fallback)
 * If someone lands here, show the content or redirect on 404.
 */
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        if ( is_single() ) {
            include( get_template_directory() . '/single.php' );
        } elseif ( is_page() ) {
            the_content();
        } else {
            the_title('<h1>', '</h1>');
            the_content();
        }
    endwhile;
else :
    // Only redirect if absolutely nothing found
    wp_redirect( home_url('/') );
    exit;
endif;
?>