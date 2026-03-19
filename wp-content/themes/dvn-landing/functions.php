<?php
function dvn_landing_enqueue_styles() {
    wp_enqueue_style( 'dvn-landing-style', get_stylesheet_uri(), array(), time() ); // using time for cache-busting during dev
    
    // Enqueue JS
    wp_enqueue_script( 'dvn-shared-js', get_template_directory_uri() . '/assets/dvn-shared.js', array(), false, true );
    wp_enqueue_script( 'dvn-promo-js', get_template_directory_uri() . '/assets/dvn-promo.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'dvn_landing_enqueue_styles' );

function dvn_landing_customize_register( $wp_customize ) {
    $wp_customize->add_section( 'sec_general' , array(
        'title'      => 'General Settings',
        'priority'   => 29,
    ) );
    $wp_customize->add_setting( 'distributor_id' , array(
        'default'   => 'i1684',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'distributor_id', array(
        'label'      => 'Distributor ID',
        'section'    => 'sec_general',
        'settings'   => 'distributor_id',
        'type'       => 'text',
    ) );
    $wp_customize->add_setting( 'wa_link' , array(
        'default'   => 'https://wa.me/6287866888808?text=Halo, saya ingin order DVN Collagen',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'wa_link', array(
        'label'      => 'WhatsApp Link',
        'section'    => 'sec_general',
        'settings'   => 'wa_link',
        'type'       => 'url',
    ) );
    $wp_customize->add_panel( 'panel_hero' , array(
        'title'      => 'Hero Section',
        'priority'   => 30,
    ) );
    $wp_customize->add_section( 'sec_hero' , array(
        'title'      => 'Hero Section Settings',
        'panel'      => 'panel_hero',
    ) );
    $wp_customize->add_setting( 'hero_headline' , array(
        'default'   => 'Dukung <span>Kesehatan Kulit</span><br>dari Dalam',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'hero_headline', array(
        'label'      => 'Headline',
        'section'    => 'sec_hero',
        'settings'   => 'hero_headline',
        'type'       => 'textarea',
    ) );
    $wp_customize->add_setting( 'hero_sub' , array(
        'default'   => 'Suplemen tablet kunyah dengan 5 bahan aktif internasional. Terdaftar BPOM RI & bersertifikat Halal MUI.',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'hero_sub', array(
        'label'      => 'Subheadline',
        'section'    => 'sec_hero',
        'settings'   => 'hero_sub',
        'type'       => 'textarea',
    ) );
    $wp_customize->add_setting( 'hero_img_1' , array(
        'default'   => '<?php echo esc_url(get_template_directory_uri()); ?>/assets/dvn-product-main.jpg',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_img_1', array(
        'label'      => 'Product Image',
        'section'    => 'sec_hero',
        'settings'   => 'hero_img_1',
    ) ) );
    $wp_customize->add_setting( 'hero_img_2' , array(
        'default'   => '<?php echo esc_url(get_template_directory_uri()); ?>/assets/hero-card-1.jpg',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_img_2', array(
        'label'      => 'Lifestyle 1 Image',
        'section'    => 'sec_hero',
        'settings'   => 'hero_img_2',
    ) ) );
    $wp_customize->add_setting( 'hero_img_3' , array(
        'default'   => '<?php echo esc_url(get_template_directory_uri()); ?>/assets/hero-card-2.jpg',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_img_3', array(
        'label'      => 'Lifestyle 2 Image',
        'section'    => 'sec_hero',
        'settings'   => 'hero_img_3',
    ) ) );
    $wp_customize->add_panel( 'panel_problem' , array(
        'title'      => 'Problem Section',
        'priority'   => 30,
    ) );
    $wp_customize->add_section( 'sec_problem' , array(
        'title'      => 'Problem Section Settings',
        'panel'      => 'panel_problem',
    ) );
    $wp_customize->add_setting( 'prob_title' , array(
        'default'   => 'Perhatian pada <span>Kondisi Kulit Sehari-hari</span>',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'prob_title', array(
        'label'      => 'Title',
        'section'    => 'sec_problem',
        'settings'   => 'prob_title',
        'type'       => 'textarea',
    ) );
    $wp_customize->add_setting( 'prob_body' , array(
        'default'   => 'Banyak orang mulai memperhatikan perubahan kondisi kulit mereka seiring bertambahnya usia dan paparan faktor lingkungan.',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'prob_body', array(
        'label'      => 'Body',
        'section'    => 'sec_problem',
        'settings'   => 'prob_body',
        'type'       => 'textarea',
    ) );
    $wp_customize->add_panel( 'panel_agitate' , array(
        'title'      => 'Agitate Section',
        'priority'   => 30,
    ) );
    $wp_customize->add_section( 'sec_agitate' , array(
        'title'      => 'Agitate Section Settings',
        'panel'      => 'panel_agitate',
    ) );
    $wp_customize->add_setting( 'agit_title' , array(
        'default'   => 'Faktor Sehari-hari yang <span>Memengaruhi Kesehatan Kulit</span>',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'agit_title', array(
        'label'      => 'Title',
        'section'    => 'sec_agitate',
        'settings'   => 'agit_title',
        'type'       => 'textarea',
    ) );
    $wp_customize->add_panel( 'panel_solution' , array(
        'title'      => 'Solution Section',
        'priority'   => 30,
    ) );
    $wp_customize->add_section( 'sec_solution' , array(
        'title'      => 'Solution Section Settings',
        'panel'      => 'panel_solution',
    ) );
    $wp_customize->add_setting( 'sol_title' , array(
        'default'   => 'Lengkapi Perawatan Anda <span>dari Dalam</span>',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'sol_title', array(
        'label'      => 'Title',
        'section'    => 'sec_solution',
        'settings'   => 'sol_title',
        'type'       => 'textarea',
    ) );
    $wp_customize->add_panel( 'panel_timeline' , array(
        'title'      => 'Timeline Section',
        'priority'   => 30,
    ) );
    $wp_customize->add_section( 'sec_timeline' , array(
        'title'      => 'Timeline Section Settings',
        'panel'      => 'panel_timeline',
    ) );
    $wp_customize->add_setting( 'tl_title' , array(
        'default'   => 'Cara Memaksimalkan <span>Konsumsi DVN</span>',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'tl_title', array(
        'label'      => 'Title',
        'section'    => 'sec_timeline',
        'settings'   => 'tl_title',
        'type'       => 'textarea',
    ) );
    $wp_customize->add_panel( 'panel_pricing' , array(
        'title'      => 'Pricing Section',
        'priority'   => 30,
    ) );
    $wp_customize->add_section( 'sec_pricing' , array(
        'title'      => 'Pricing Section Settings',
        'panel'      => 'panel_pricing',
    ) );
    $wp_customize->add_setting( 'price_title' , array(
        'default'   => 'Dapatkan DVN Collagen <span>dari Dealer Resmi</span>',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'price_title', array(
        'label'      => 'Title',
        'section'    => 'sec_pricing',
        'settings'   => 'price_title',
        'type'       => 'textarea',
    ) );
    $wp_customize->add_panel( 'panel_team' , array(
        'title'      => 'Team/Dealer Section',
        'priority'   => 30,
    ) );
    $wp_customize->add_section( 'sec_team' , array(
        'title'      => 'Team/Dealer Section Settings',
        'panel'      => 'panel_team',
    ) );
    $wp_customize->add_setting( 'dealer_name' , array(
        'default'   => 'DVN X RAYA',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'dealer_name', array(
        'label'      => 'Dealer Name',
        'section'    => 'sec_team',
        'settings'   => 'dealer_name',
        'type'       => 'text',
    ) );

    // Blog Settings
    $wp_customize->add_section( 'sec_blog', array(
        'title'      => 'Blog Page Settings',
        'priority'   => 35,
    ) );
    $wp_customize->add_setting( 'blog_title', array(
        'default'   => 'Artikel <span>Kecantikan</span><br>&amp; Kesehatan Kulit',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'blog_title', array(
        'label'      => 'Blog Title (supports span/br)',
        'section'    => 'sec_blog',
        'type'       => 'textarea',
    ) );
    $wp_customize->add_setting( 'blog_desc', array(
        'default'   => 'Tips perawatan kulit, wawasan nutrisi dari dalam, dan panduan gaya hidup sehat — untuk mendukung rutinitas harian Anda.',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( 'blog_desc', array(
        'label'      => 'Blog Description',
        'section'    => 'sec_blog',
        'type'       => 'textarea',
    ) );

    // Product Page Settings
    $wp_customize->add_panel( 'panel_product', array(
        'title'      => 'Product Page',
        'priority'   => 31,
    ) );
    
    // Product Text
    $wp_customize->add_section( 'sec_product', array(
        'title'      => 'Product Texts',
        'panel'      => 'panel_product',
    ) );
    $wp_customize->add_setting( 'product_name', array( 'default' => 'DVN dengan collagen Chewable Tablet' ) );
    $wp_customize->add_control( 'product_name', array( 'label' => 'Product Name', 'section' => 'sec_product' ) );
    
    $wp_customize->add_setting( 'product_sub', array( 'default' => 'Suplemen makanan tablet kunyah dengan 5 bahan aktif...' ) );
    $wp_customize->add_control( 'product_sub', array( 'label' => 'Product Subtitle', 'type' => 'textarea', 'section' => 'sec_product' ) );
    
    $wp_customize->add_setting( 'product_rating', array( 'default' => '4.8' ) );
    $wp_customize->add_control( 'product_rating', array( 'label' => 'Rating', 'section' => 'sec_product' ) );
    $wp_customize->add_setting( 'product_reviews', array( 'default' => '132.560 ulasan' ) );
    $wp_customize->add_control( 'product_reviews', array( 'label' => 'Reviews Count Text', 'section' => 'sec_product' ) );
    $wp_customize->add_setting( 'product_sold', array( 'default' => '✓ 500.000+ terjual*' ) );
    $wp_customize->add_control( 'product_sold', array( 'label' => 'Sold Text', 'section' => 'sec_product' ) );

    // Promo Section
    $wp_customize->add_section( 'sec_promo', array(
        'title'      => 'Promo Configuration',
        'panel'      => 'panel_product',
    ) );
    $wp_customize->add_setting( 'promo_active', array( 'default' => true ) );
    $wp_customize->add_control( 'promo_active', array( 'label' => 'Enable Promo?', 'type' => 'checkbox', 'section' => 'sec_promo' ) );
    
    $wp_customize->add_setting( 'promo_title', array( 'default' => 'Bonus Scarf Gratis!' ) );
    $wp_customize->add_control( 'promo_title', array( 'label' => 'Promo Title', 'section' => 'sec_promo' ) );
    
    $wp_customize->add_setting( 'promo_subtitle', array( 'default' => 'Khusus pembelian 2 Box DVN dengan collagen' ) );
    $wp_customize->add_control( 'promo_subtitle', array( 'label' => 'Promo Subtitle', 'section' => 'sec_promo' ) );
    
    $wp_customize->add_setting( 'promo_note', array( 'default' => 'Berlaku pembelian 2 Box · Scarf dikirim bersama produk · Stok terbatas' ) );
    $wp_customize->add_control( 'promo_note', array( 'label' => 'Promo Note', 'section' => 'sec_promo', 'type' => 'textarea' ) );
    
    $wp_customize->add_setting( 'promo_endtime', array( 'default' => '2026-03-31T23:59:00+07:00' ) );
    $wp_customize->add_control( 'promo_endtime', array( 'label' => 'End Time (ISO format)', 'section' => 'sec_promo' ) );
}
add_action( 'customize_register', 'dvn_landing_customize_register' );
