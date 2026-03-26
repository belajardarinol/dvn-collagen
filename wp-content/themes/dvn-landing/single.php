<?php
/**
 * DVN Landing — single.php
 * Handle individual blog post display. 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<style>
/* Reuse variables and common styles from style.css/page-blog.php */
:root {
  --r50:#fff0f4; --r100:#ffe1ea; --r200:#ffc2d4; --r300:#ff94b3; --r400:#ff5c8d; 
  --r500:#f72d6b; --r600:#e01055; --r700:#bc0847; 
  --pk:#fde8ef; --pk2:#f9c6d8; --cream:#fff8fb;
  --txt:#1a0f14; --txt2:#5c3347; --txt3:#9b6070;
  --white:#ffffff;
}
body { background: var(--cream); font-family: 'DM Sans', sans-serif; color: var(--txt); }
img { max-width: 100%; height: auto; border-radius: 12px; }

/* HEADER/NAV from page-blog.php */
.topbar{background:linear-gradient(135deg,var(--r700),var(--r500));padding:7px 16px;text-align:center;font-size:.7rem;font-weight:700;color:white;letter-spacing:.03em;}
.nav{position:sticky;top:0;z-index:200;background:rgba(255,248,251,.96);backdrop-filter:blur(14px);border-bottom:1px solid var(--r100);box-shadow:0 2px 12px rgba(180,40,80,.07);}
.nav-inner{display:flex;align-items:center;gap:10px;padding:11px 16px;max-width:960px;width:100%;margin:0 auto;}
.nav-back{display:flex;align-items:center;gap:5px;font-size:.78rem;font-weight:600;color:var(--r600);padding:6px 12px;border-radius:99px;border:1.5px solid var(--r200);background:white;transition:all .2s;flex-shrink:0;}
.nav-back:hover{background:var(--pk)}
.nav-brand{font-family:"Playfair Display",serif;font-size:1.1rem;font-weight:900;color:var(--r600);letter-spacing:.08em;flex:1;text-align:center;}
.nav-cta{flex-shrink:0;display:flex;align-items:center;gap:5px;background:var(--r600);color:white;font-size:.72rem;font-weight:700;padding:7px 13px;border-radius:99px;box-shadow:0 3px 10px rgba(224,16,85,.3);white-space:nowrap;transition:all .2s;}
.nav-cta:hover{background:var(--r700)}

/* BREADCRUMB */
.breadcrumb{padding:12px 16px;font-size:.67rem;color:var(--txt3);max-width:960px;width:100%;margin:0 auto;display:flex;align-items:center;gap:5px;flex-wrap:wrap;}
.breadcrumb a{color:var(--r600);}

/* POST HEADER */
.post-header{padding:40px 16px 30px; text-align:center; max-width:800px; margin:0 auto;}
.post-cat{display:inline-block; font-size:.65rem; font-weight:800; color:var(--r600); text-transform:uppercase; letter-spacing:.12em; background:var(--r50); padding:5px 14px; border-radius:99px; margin-bottom:15px;}
.post-title{font-family:"Playfair Display",serif; font-size:clamp(1.8rem, 6vw, 2.6rem); font-weight:900; line-height:1.2; color:var(--txt); margin-bottom:15px;}
.post-meta{font-size:.75rem; color:var(--txt3); display:flex; align-items:center; justify-content:center; gap:15px;}
.post-featured-img{margin:30px auto; max-width:960px; padding:0 16px;}
.post-featured-img img{width:100%; aspect-ratio:16/8; object-fit:cover; box-shadow:0 20px 50px rgba(180,40,80,.12); border:1px solid var(--r100);}

/* POST CONTENT */
.post-content{max-width:760px; margin:0 auto; padding:20px 16px 60px; font-size:1.05rem; line-height:1.8; color:var(--txt2);}
.post-content p{margin-bottom:20px;}
.post-content h2, .post-content h3{font-family:"Playfair Display",serif; color:var(--txt); margin:35px 0 15px; line-height:1.3;}
.post-content h2{font-size:1.7rem; font-weight:900;}
.post-content blockquote{border-left:4px solid var(--r500); padding:10px 25px; font-style:italic; background:var(--pk); border-radius:0 12px 12px 0; margin:30px 0; color:var(--r700);}

/* LATEST POSTS SECTION */
.latest-posts-sec{background:var(--r50); padding:60px 16px; border-top:1px solid var(--r100);}
.latest-inner{max-width:960px; margin:0 auto;}
.sec-h{font-family:"Playfair Display",serif; font-size:1.6rem; font-weight:900; margin-bottom:25px; text-align:center;}
.blog-grid{display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:20px;}
/* Simplified card styles from page-blog.php */
.blog-card{background:var(--white); border-radius:20px; border:1px solid var(--r100); overflow:hidden; display:flex; flex-direction:column;}
.blog-card img{width:100%; aspect-ratio:16/10; object-fit:cover; border-radius:0;}
.blog-body{padding:18px;}
.blog-cat-small{font-size:.65rem; font-weight:800; color:var(--r600); text-transform:uppercase; margin-bottom:8px; display:block;}
.blog-title-small{font-size:1.05rem; font-weight:700; line-height:1.3; margin-bottom:10px;}
.blog-link{font-size:.8rem; font-weight:700; color:var(--r600); display:flex; align-items:center; gap:5px; text-decoration:none;}

/* FOOTER */
.blog-footer{background:linear-gradient(135deg,var(--pk),var(--pk2));padding:35px 16px;text-align:center;font-size:.72rem;color:var(--txt3);border-top:1px solid var(--r200);}
.blog-footer a{color:var(--r600); font-weight:700;}
.footer-links{display:flex; gap:15px; justify-content:center; margin:15px 0;}

@media (max-width:600px) {
  .post-title{font-size:1.7rem;}
  .post-featured-img img{aspect-ratio:3/2;}
}
</style>
</head>
<body <?php body_class(); ?>>

<div class="topbar">🌸 DVN Collagen Indonesia — Artikel Kecantikan &amp; Kesehatan Kulit</div>

<nav class="nav">
  <div class="nav-inner">
    <a href="<?php echo esc_url(home_url("/blog")); ?>" class="nav-back">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"></polyline></svg>
      Kembali ke Blog
    </a>
    <div class="nav-brand">DVN</div>
    <a href="<?php echo esc_url(home_url("/produk")); ?>" class="nav-cta">
      Dapatkan DVN Collagen
    </a>
  </div>
</nav>

<div class="breadcrumb">
  <a href="<?php echo esc_url(home_url("/")); ?>">Beranda</a>
  <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
  <a href="<?php echo esc_url(home_url("/blog")); ?>">Artikel</a>
  <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
  <span style="color:var(--txt);font-weight:600"><?php the_title(); ?></span>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="post-header">
  <?php 
  $cats = get_the_category();
  if(!empty($cats)) echo '<span class="post-cat">'.esc_html($cats[0]->name).'</span>';
  ?>
  <h1 class="post-title"><?php the_title(); ?></h1>
  <div class="post-meta">
     <span>📅 <?php the_date(); ?></span>
     <span>⏱ 5 menit baca</span>
  </div>
</header>

<div class="post-featured-img">
  <?php if ( has_post_thumbnail() ) : ?>
    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>">
  <?php else: ?>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/dvn-banner-masalah.jpg" alt="Default Image">
  <?php endif; ?>
</div>

<article class="post-content">
  <?php the_content(); ?>
</article>

<?php endwhile; endif; ?>

<section class="latest-posts-sec">
  <div class="latest-inner">
    <h2 class="sec-h">Baca Artikel Menarik Lainnya</h2>
    <div class="blog-grid">
      <?php
      $args = array('post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' => array(get_the_ID()));
      $more_posts = new WP_Query($args);
      if ($more_posts->have_posts()) :
        while ($more_posts->have_posts()) : $more_posts->the_post();
          $c = get_the_category();
          $t_url = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri().'/assets/dvn-banner-masalah.jpg';
      ?>
      <div class="blog-card">
        <img src="<?php echo esc_url($t_url); ?>" alt="<?php the_title_attribute(); ?>">
        <div class="blog-body">
          <span class="blog-cat-small"><?php echo $c ? esc_html($c[0]->name) : 'Kecantikan'; ?></span>
          <h3 class="blog-title-small"><?php the_title(); ?></h3>
          <a href="<?php the_permalink(); ?>" class="blog-link">
            Baca selengkapnya
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
          </a>
        </div>
      </div>
      <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
  </div>
</section>

<footer class="blog-footer">
  <strong>DVN Collagen Indonesia</strong><br>
  <div class="footer-links">
    <a href="<?php echo esc_url(home_url("/")); ?>">Beranda</a>
    <a href="<?php echo esc_url(home_url("/produk")); ?>">Produk</a>
    <a href="<?php echo esc_url(home_url("/blog")); ?>">Artikel</a>
  </div>
  © 2025 DVN Collagen. Distributor Resmi i1684.
</footer>

<?php wp_footer(); ?>
</body>
</html>
