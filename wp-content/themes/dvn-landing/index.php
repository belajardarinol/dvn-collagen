<?php
/**
 * DVN Landing — index.php (fallback)
 * Real pages use page-produk.php, page-blog.php, front-page.php etc.
 */
// If someone lands here via an unmapped page, redirect to front page.
wp_redirect( home_url('/') );
exit;