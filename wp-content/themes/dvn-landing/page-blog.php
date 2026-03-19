<?php
/* Template Name: Blog / Artikel Terbaru */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<script>
window.DVN_PROMO = {
  active:   true,
  id:       'scarf-2box-mar2026',
  type:     'scarf',
  endTime:  new Date('2026-03-31T23:59:00+07:00').getTime(),
  badge:    '&#127873; Promo Aktif',
  title:    'Bonus Scarf Gratis!',
  subtitle: 'Khusus pembelian 2 Box DVN dengan collagen',
  note:     'Berlaku pembelian 2 Box \u00B7 Scarf dikirim bersama produk \u00B7 Stok terbatas',
  motifs: [
    { name: 'Davina Blush',    emoji: '&#127800;' },
    { name: 'Davina Fiora',    emoji: '&#127799;' },
    { name: 'Davina Magnolia', emoji: '&#127802;' }
  ],
  waTextBase: 'Halo Kak, saya mau order 2 Box DVN dengan collagen dan klaim bonus scarf!',
  ctaUrl: '<?php echo esc_url(home_url("/produk/")); ?>'
};
</script>
</head>
<body <?php body_class(); ?>>
<a href="/blog#main-blog" style="position:absolute;left:-9999px;top:4px;z-index:9999;background:var(--r600);color:white;padding:8px 16px;border-radius:4px;font-size:.85rem;font-weight:700;" onfocus="this.style.left=&#39;4px&#39;" onblur="this.style.left=&#39;-9999px&#39;">Lewati ke konten</a>

<div class="topbar">🌸 DVN Collagen Indonesia — Artikel Kecantikan &amp; Kesehatan Kulit Terpercaya</div>


<!-- ┌──────────────────────────────────────────────────────────────┐
     │  DVN PROMO SLOT A — TOPBAR  (di atas navbar, 1 baris)       │
     │  AKTIFKAN  : ganti  display:none  →  display:block          │
     │  NONAKTIF  : ganti  display:block →  display:none           │
     │  GANTI ISI : edit teks "label" dan "cta" di bawah           │
     └──────────────────────────────────────────────────────────────┘ -->
<div id="dvn-slot-a" class="dvn-promo-zone" style="display: block;"><div class="dvn-promo-topbar" style="background:linear-gradient(90deg,#fff0f4,#ffe3ec);border-bottom:1.5px solid #fcc9da;padding:7px 16px;"><a href="<?php echo esc_url(home_url("/produk")); ?>" style="display:flex;align-items:center;justify-content:center;gap:8px;font-size:.72rem;font-weight:700;color:#bc0847;text-decoration:none;flex-wrap:wrap;"><span class="dvn-pt-badge">🎁 Promo Aktif</span><span>Beli <strong>2 Box</strong> → Bonus Scarf Gratis! — Berakhir: <span id="artCd">419:25:07</span></span><span class="dvn-pt-cta">Klaim →</span></a></div></div>
<nav class="nav" aria-label="Navigasi blog">
  <div class="nav-inner">
    <a href="<?php echo esc_url(home_url("/")); ?>" class="nav-back">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"></polyline></svg>
      Beranda
    </a>
    <div class="nav-brand">DVN</div>
    <a href="<?php echo esc_url(home_url("/produk")); ?>" class="nav-cta">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
      Lihat Produk
    </a>
  </div>
</nav>

<!-- ┌──────────────────────────────────────────────────────────────┐
     │  DVN PROMO SLOT B — CARD  (di dalam konten, setelah hero)   │
     │  AKTIFKAN  : ganti  display:none  →  display:block          │
     │  GANTI ISI : edit icon, tag, title, sub, dan teks tombol    │
     └──────────────────────────────────────────────────────────────┘ -->
<div id="dvn-slot-b" style="display:none;padding:0 16px 4px;"><div class="dvn-promo-card"><div class="dvn-pc-icon">📰</div><div class="dvn-pc-body"><span class="dvn-pc-tag">Dari Blog ke Aksi</span><div class="dvn-pc-title">Sudah Tahu Manfaatnya? Ada Promo Spesial!</div><div class="dvn-pc-sub">Ilmu sudah dapat, saatnya mulai. Hubungi dealer resmi untuk penawaran terbaik.</div></div><a href="<?php echo esc_url(get_theme_mod('wa_link', 'https://wa.me/6287866888808?text=Halo, saya ingin order DVN Collagen')); ?>" class="dvn-pc-btn" target="_blank" rel="noopener noreferrer"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"></path><path d="M12.004 0C5.374 0 0 5.373 0 12c0 2.117.554 4.104 1.523 5.827L.057 23.97l6.304-1.454A11.95 11.95 0 0012.004 24C18.63 24 24 18.626 24 12c0-6.627-5.37-12-11.996-12z"></path></svg> Cek Promo</a></div></div>

<nav class="breadcrumb">
  <a href="<?php echo esc_url(home_url("/")); ?>">Beranda</a>
  <svg width="9" height="9" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
  <span style="color:var(--txt);font-weight:600">Artikel Kecantikan</span>
</nav>

<div class="blog-hero">
  <div class="hero-tag">✦ Edukasi &amp; Inspirasi</div>
  <h1><?php echo wp_kses_post(get_theme_mod("blog_title", "Artikel <span>Kecantikan</span><br>&amp; Kesehatan Kulit")); ?></h1>
  <p><?php echo wp_kses_post(get_theme_mod("blog_desc", "Tips perawatan kulit, wawasan nutrisi dari dalam, dan panduan gaya hidup sehat — untuk mendukung rutinitas harian Anda.")); ?></p>
  <div class="hero-search" role="search">
    <input type="search" placeholder="Cari artikel..." aria-label="Cari artikel" id="searchInput" oninput="filterArticles(this.value)">
    <button aria-label="Cari">
      <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
      Cari
    </button>
  </div>
</div>

<div class="cat-pills" role="group" aria-label="Filter kategori">
  <button class="cpill active" onclick="setCat(this,'semua')">Semua</button>
  <?php
  $categories = get_categories();
  foreach ($categories as $cat) {
      echo '<button class="cpill" onclick="setCat(this, \'' . esc_js($cat->slug) . '\')">' . esc_html($cat->name) . '</button>';
  }
  ?>
</div>

<main id="main-content" class="blog-main">
<div id="noResults">Tidak ada artikel yang cocok dengan pencarian Anda. <a href="#" style="color:var(--r600);font-weight:700;" onclick="location.reload();">Reset pencarian</a></div>

<?php
$args = array('post_type' => 'post', 'posts_per_page' => -1);
$blog_query = new WP_Query($args);
$post_count = 0;

if ( $blog_query->have_posts() ) :
    while ( $blog_query->have_posts() ) : $blog_query->the_post();
        $post_count++;
        $cat = get_the_category();
        $cat_slug = !empty($cat) ? $cat[0]->slug : '';
        $cat_name = !empty($cat) ? $cat[0]->name : 'Artikel';
        $thumbnail_url = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri().'/assets/dvn-product-main.jpg';
        $title = get_the_title();
        $excerpt = wp_trim_words(get_the_excerpt(), 15);
        $date = get_the_date();
        $link = get_the_permalink();
        $search_title = strtolower(esc_attr($title));

        if ($post_count == 1) {
            ?>
            <a href="<?php echo $link; ?>" class="card-featured rv vis" data-cat="<?php echo esc_attr($cat_slug); ?>" data-title="<?php echo $search_title; ?>">
              <div class="cf-thumb" style="background:linear-gradient(135deg,#fde8ef,#f9c6d8,#ffc2d4);">
                <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($title); ?>" style="width:100%;height:100%;object-fit:cover;">
                <div class="cf-badge">✦ Artikel Pilihan</div>
              </div>
              <div class="cf-body">
                <span class="cf-cat"><?php echo esc_html($cat_name); ?></span>
                <div class="cf-title"><?php echo esc_html($title); ?></div>
                <div class="cf-excerpt"><?php echo esc_html($excerpt); ?></div>
                <div class="cf-footer">
                  <span class="cf-date">📅 <?php echo esc_html($date); ?></span>
                  <span class="cf-read">Baca Artikel <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg></span>
                </div>
              </div>
            </a>
            <?php
            if ($blog_query->post_count > 1) {
                echo '<div class="art-grid">';
            }
        } elseif ($post_count == 2 || $post_count == 3) {
            ?>
            <a href="<?php echo $link; ?>" class="art-card rv vis" data-cat="<?php echo esc_attr($cat_slug); ?>" data-title="<?php echo $search_title; ?>">
              <div class="ac-thumb" style="background:linear-gradient(135deg,#fde8ef,#e8f7ef,#f9c6d8);">
                <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($title); ?>" style="width:100%;height:100%;object-fit:cover;">
                <div class="ac-cat-badge"><?php echo esc_html($cat_name); ?></div>
              </div>
              <div class="ac-body">
                <div class="ac-title"><?php echo esc_html($title); ?></div>
                <div class="ac-excerpt"><?php echo esc_html($excerpt); ?></div>
                <div class="ac-foot">
                  <span class="ac-date"><?php echo esc_html($date); ?></span>
                  <span class="ac-link">Baca <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg></span>
                </div>
              </div>
            </a>
            <?php
            if ($post_count == 3 || $post_count == $blog_query->post_count) {
                echo '</div>';
                if ($blog_query->post_count > 3) {
                    echo '<h2 class="sec-h">Artikel Lainnya</h2><div class="art-list">';
                }
            }
        } else {
            ?>
            <a href="<?php echo $link; ?>" class="alc rv vis" data-cat="<?php echo esc_attr($cat_slug); ?>" data-title="<?php echo $search_title; ?>">
              <div class="alc-thumb" style="background:linear-gradient(135deg,#fff8e1,#fde8ef);">
                <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($title); ?>" style="width:100%;height:100%;object-fit:cover;">
              </div>
              <div class="alc-body">
                <div class="alc-cat"><?php echo esc_html($cat_name); ?></div>
                <div class="alc-title"><?php echo esc_html($title); ?></div>
                <div class="alc-foot">
                  <span class="alc-date">📅 <?php echo esc_html($date); ?></span>
                  <span class="alc-link">Baca →</span>
                </div>
              </div>
            </a>
            <?php
            if ($post_count == $blog_query->post_count) {
                echo '</div>';
            }
        }
    endwhile;
    wp_reset_postdata();
else:
?>
    <p style="text-align:center;padding:40px;color:var(--txt3);font-weight:600;">Belum ada artikel yang diterbitkan.</p>
<?php endif; ?>
</main>


<!-- ┌──────────────────────────────────────────────────────────────┐
     │  DVN PROMO SLOT C — PRE-FOOTER  (sebelum footer)            │
     │  AKTIFKAN  : ganti  display:none  →  display:block          │
     │  GANTI ISI : edit pf_label, pf_title, pf_sub, teks tombol   │
     └──────────────────────────────────────────────────────────────┘ -->
<div id="dvn-slot-c" class="dvn-promo-zone" style="display: block;"><div class="dvn-promo-prefooter"><div class="dvn-pf-label" style="font-size:.7rem;font-weight:800;text-transform:uppercase;letter-spacing:.08em;color:var(--r600,#e01055);margin-bottom:4px;">🎀 BONUS EKSKLUSIF</div><div class="dvn-pf-title" style="font-size:1rem;font-weight:800;margin:4px 0;">Bonus Scarf Gratis!</div><div class="dvn-pf-sub" style="font-size:.78rem;line-height:1.55;margin-bottom:14px;color:#5c3347;">Khusus pembelian 2 Box DVN dengan collagen. Berlaku pembelian 2 Box · Scarf dikirim bersama produk · Stok terbatas</div><a href="<?php echo esc_url(home_url("/produk")); ?>" class="dvn-pf-btn" style="display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,#f72d6b,#e01055);color:white;font-weight:700;font-size:.88rem;padding:12px 22px;border-radius:12px;text-decoration:none;box-shadow:0 4px 14px rgba(224,16,85,.28);">🎀 Klaim Bonus Scarf Sekarang →</a></div></div>

<!-- BPOM Disclaimer -->
<div style="background:#fff8fb;border-top:2px solid #fcc9da;padding:16px;text-align:center;font-size:.7rem;color:#9b6070;line-height:1.7;max-width:min(540px,100%);margin:0 auto;">
  <strong style="color:#e01055;">⚠️ Perhatian Penting:</strong> DVN Collagen adalah <strong>suplemen makanan</strong> terdaftar <strong>BPOM RI</strong>, bukan obat. Tidak dimaksudkan untuk mendiagnosis, mengobati, menyembuhkan, atau mencegah penyakit. Hasil penggunaan bersifat individual dan dapat berbeda pada setiap orang. Konsumsi sesuai anjuran. Konsultasikan dengan dokter jika Anda memiliki kondisi medis.
</div>
<footer class="blog-footer">
  <strong>DVN Collagen Indonesia</strong> — Artikel Kecantikan &amp; Kesehatan Kulit<br>
  <div class="footer-links">
    <a href="<?php echo esc_url(home_url("/")); ?>">🏠 Beranda</a>
    <a href="<?php echo esc_url(home_url("/produk")); ?>">💊 Produk</a>
    <a href="<?php echo esc_url(get_theme_mod('wa_link', 'https://wa.me/6287866888808?text=Halo, saya ingin order DVN Collagen')); ?>" target="_blank" rel="noopener noreferrer">💬 WhatsApp</a>
  </div>
  BPOM RI · Halal MUI · GMP Certified · Superbrands 2024 · Dealer Resmi ID: <?php echo esc_html(get_theme_mod('distributor_id', 'i1684')); ?><br>
  <small>Artikel bersifat edukatif. Bukan saran medis. © 2025 DVN Collagen.</small>
</footer>

<script>
function triggerReveal(){
  var els=document.querySelectorAll(".rv:not(.vis)");
  var io=new IntersectionObserver(function(entries){entries.forEach(function(e){if(e.isIntersecting){e.target.classList.add("vis");io.unobserve(e.target);}});},{threshold:0.06});
  els.forEach(function(el){io.observe(el);});
}
if("requestIdleCallback" in window){requestIdleCallback(triggerReveal,{timeout:800});}else{setTimeout(triggerReveal,150);}
function setCat(btn,cat){
  document.querySelectorAll(".cpill").forEach(function(b){b.classList.remove("active");});
  btn.classList.add("active");
  var items=document.querySelectorAll("[data-cat]"),vis=0;
  items.forEach(function(a){var show=cat==="semua"||a.dataset.cat===cat;a.style.display=show?"":"none";if(show)vis++;});
  document.getElementById("noResults").style.display=vis?"none":"block";
}
function filterArticles(q){
  var kw=q.toLowerCase().trim();
  var items=document.querySelectorAll("[data-cat]");
  document.querySelectorAll(".cpill").forEach(function(b){b.classList.remove("active");});
  document.querySelector(".cpill").classList.add("active");
  var vis=0;
  items.forEach(function(a){var match=!kw||(a.dataset.title||"").indexOf(kw)>-1||(a.textContent||"").toLowerCase().indexOf(kw)>-1;a.style.display=match?"":"none";if(match)vis++;});
  document.getElementById("noResults").style.display=vis?"none":"block";
}
</script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dvn-shared.js" defer=""></script>
<!-- FLOATING WA BUTTON -->
<div style="position:fixed;bottom:24px;right:24px;z-index:9999;display:flex;align-items:center;gap:10px;">
<div style="background:#222;color:#fff;padding:6px 14px;border-radius:20px;font-size:.75rem;font-weight:600;opacity:0;animation:fadeIn .5s ease .5s forwards;box-shadow:0 2px 12px rgba(0,0,0,.2);">💬 Chat Dealer Resmi</div>
<a href="<?php echo esc_url(get_theme_mod('wa_link', 'https://wa.me/6287866888808?text=Halo, saya ingin order DVN Collagen')); ?>" target="_blank" rel="noopener noreferrer" aria-label="Chat WhatsApp" style="width:56px;height:56px;background:#25d366;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 16px rgba(37,211,102,.4);animation:pulse-ring 2s infinite;">
<svg width="28" height="28" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"></path><path d="M12.004 0C5.374 0 0 5.373 0 12c0 2.117.554 4.104 1.523 5.827L.057 23.97l6.304-1.454A11.95 11.95 0 0012.004 24C18.63 24 24 18.626 24 12c0-6.627-5.37-12-11.996-12zm0 21.818a9.822 9.822 0 01-5.012-1.378l-.36-.213-3.733.861.893-3.621-.234-.373A9.77 9.77 0 012.182 12c0-5.421 4.4-9.818 9.822-9.818 5.42 0 9.819 4.397 9.819 9.818 0 5.421-4.4 9.818-9.819 9.818z"></path></svg>
</a></div>

<script>
/* DVN Promo Engine - artikel/blog/faq/ulasan */
(function(){
  var P = window.DVN_PROMO;
  if (!P || !P.active) return;
  if (P.endTime && Date.now() > P.endTime) return;

  /* Tampilkan semua zona promo */
  document.querySelectorAll(".dvn-promo-zone").forEach(function(el){
    el.style.display = "block";
  });

  /* Update slot-a ribbon */
  var slotA = document.getElementById("dvn-slot-a");
  if (slotA) {
    var inner = slotA.querySelector("a");
    if (inner) {
      inner.innerHTML =
        "<span class=\"dvn-pt-badge\">" + (P.badge || "Promo") + "</span>" +
        "<span>Beli <strong>2 Box</strong> → " + (P.title||"Promo Aktif") +
        " — Berakhir: <span id=\"artCd\">--:--:--</span></span>" +
        "<span class=\"dvn-pt-cta\">Klaim →</span>";
      inner.href = P.ctaUrl || "produk.html?v=8";
      inner.removeAttribute("target");
    }
  }

  /* Update slot-c pre-footer */
  var slotC = document.getElementById("dvn-slot-c");
  if (slotC) {
    var pfBody = slotC.querySelector(".dvn-promo-prefooter") || slotC;
    pfBody.innerHTML =
      "<div class=\"dvn-pf-label\" style=\"font-size:.7rem;font-weight:800;text-transform:uppercase;letter-spacing:.08em;color:var(--r600,#e01055);margin-bottom:4px;\">&#127872; BONUS EKSKLUSIF</div>" +
      "<div class=\"dvn-pf-title\" style=\"font-size:1rem;font-weight:800;margin:4px 0;\">" + (P.title||"Promo Aktif") + "</div>" +
      "<div class=\"dvn-pf-sub\" style=\"font-size:.78rem;line-height:1.55;margin-bottom:14px;color:#5c3347;\">" +
        (P.subtitle||"") + ". " + (P.note||"") + "</div>" +
      "<a href=\"" + (P.ctaUrl||"produk.html?v=8") + "\" class=\"dvn-pf-btn\"" +
        " style=\"display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,#f72d6b,#e01055);color:white;font-weight:700;font-size:.88rem;padding:12px 22px;border-radius:12px;text-decoration:none;box-shadow:0 4px 14px rgba(224,16,85,.28);\">" +
        "&#127872; Klaim Bonus Scarf Sekarang →</a>";
  }

  /* Countdown */
  function pad(n){ return String(n).padStart(2,"0"); }
  var end = P.endTime;
  function tick(){
    var rem = Math.max(0, end - Date.now());
    var h = Math.floor(rem/3600000), m = Math.floor((rem%3600000)/60000), s = Math.floor((rem%60000)/1000);
    var el = document.getElementById("artCd");
    if (el) el.textContent = pad(h)+":"+pad(m)+":"+pad(s);
    if (rem > 0) setTimeout(tick, 1000);
    else { document.querySelectorAll(".dvn-promo-zone").forEach(function(z){ z.style.display="none"; }); }
  }
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", tick);
  } else { tick(); }
})();
</script>
<script>
/* Photo Protection */
(function(){
  document.addEventListener('contextmenu',function(e){if(e.target.tagName==='IMG'){e.preventDefault();return false;}});
  document.addEventListener('dragstart',function(e){if(e.target.tagName==='IMG'){e.preventDefault();return false;}});
  document.querySelectorAll('img').forEach(function(img){img.setAttribute('draggable','false');img.setAttribute('oncontextmenu','return false;');});
})();
</script>





<!-- ===== E-E-A-T TRUST SECTION ===== -->
<section style="background:var(--cream,#fff8fb);border-top:1.5px solid var(--rose-200,#ffc2d4);padding:32px 20px 0;margin-top:40px;">
<div style="max-width:440px;margin:0 auto;">

<!-- Trust Badges Row -->
<div style="display:flex;flex-wrap:wrap;justify-content:center;gap:8px;margin-bottom:18px;">
<span style="background:white;border:1.5px solid var(--rose-200,#ffc2d4);color:var(--rose-700,#bc0847);padding:7px 14px;border-radius:50px;font-size:12px;font-weight:600;display:inline-flex;align-items:center;gap:5px;">✅ BPOM RI Terdaftar</span>
<span style="background:white;border:1.5px solid var(--rose-200,#ffc2d4);color:var(--rose-700,#bc0847);padding:7px 14px;border-radius:50px;font-size:12px;font-weight:600;display:inline-flex;align-items:center;gap:5px;">☪️ Halal MUI</span>
<span style="background:white;border:1.5px solid var(--rose-200,#ffc2d4);color:var(--rose-700,#bc0847);padding:7px 14px;border-radius:50px;font-size:12px;font-weight:600;display:inline-flex;align-items:center;gap:5px;">🏆 Superbrands 2024</span>
</div>

<!-- Shipping Trust Badges -->
<div style="display:flex;flex-wrap:wrap;justify-content:center;gap:8px;margin-bottom:24px;">
<span style="background:var(--rose-50,#fff0f4);border:1px solid var(--rose-100,#ffe1ea);color:var(--text-mid,#6b3850);padding:6px 13px;border-radius:50px;font-size:11px;font-weight:600;">🚚 Gratis Ongkir 100%</span>
<span style="background:var(--rose-50,#fff0f4);border:1px solid var(--rose-100,#ffe1ea);color:var(--text-mid,#6b3850);padding:6px 13px;border-radius:50px;font-size:11px;font-weight:600;">💰 Bisa COD</span>
<span style="background:var(--rose-50,#fff0f4);border:1px solid var(--rose-100,#ffe1ea);color:var(--text-mid,#6b3850);padding:6px 13px;border-radius:50px;font-size:11px;font-weight:600;">🔄 Cek Dulu, Retur Jika Tidak Asli</span>
</div>

<!-- Sertifikasi Detail -->
<div style="background:white;border:1px solid var(--rose-100,#ffe1ea);border-radius:12px;padding:14px 18px;margin-bottom:24px;text-align:center;">
<div style="font-size:10px;color:var(--rose-500,#f72d6b);text-transform:uppercase;letter-spacing:1.5px;font-weight:700;margin-bottom:6px;">Sertifikasi &amp; Legalitas</div>
<div style="font-size:11.5px;color:var(--text-mid,#6b3850);line-height:1.8;">
No. BPOM RI: <strong style="color:var(--text-dark,#2d1a22);">POM SD235042031</strong><br>
No. Halal MUI: <strong style="color:var(--text-dark,#2d1a22);">ID00410012348610323</strong><br>
GMP Certified · Superbrands Worldwide 2024<br>
Produk oleh <strong style="color:var(--text-dark,#2d1a22);">PT Wellous Indonesia</strong> — Dealer Resmi ID: <?php echo esc_html(get_theme_mod('distributor_id', 'i1684')); ?>
</div>
</div>

</div>
</section>

<!-- ===== E-E-A-T FOOTER ===== -->
<footer style="background:#f0d4df;border-top:1px solid var(--rose-200,#ffc2d4);padding:28px 20px 20px;text-align:center;font-family:&#39;DM Sans&#39;,sans-serif;">
<div style="max-width:440px;margin:0 auto;">

<!-- Business Info -->
<div style="margin-bottom:14px;">
<strong style="color:var(--text-dark,#2d1a22);font-size:13px;">DVN Dengan Collagen — Dealer Resmi</strong><br>
<span style="color:var(--text-mid,#6b3850);font-size:11.5px;line-height:1.8;">
Sragen, Jawa Tengah, Indonesia<br>
WhatsApp: <a href="<?php echo esc_url(get_theme_mod('wa_link', 'https://wa.me/6287866888808?text=Halo, saya ingin order DVN Collagen')); ?>" style="color:var(--rose-700,#bc0847);text-decoration:none;" target="_blank" rel="noopener noreferrer">+62 878-6688-8808</a><br>
Email: <a href="mailto:dvncollagen.id@gmail.com" style="color:var(--rose-700,#bc0847);text-decoration:none;">dvncollagen.id@gmail.com</a>
</span>
</div>

<!-- Navigation Links -->
<div style="margin-bottom:12px;font-size:12px;">
<a href="<?php echo esc_url(home_url("/")); ?>" style="color:var(--rose-700,#bc0847);text-decoration:none;margin:0 5px;">Beranda</a> ·
<a href="<?php echo esc_url(home_url("/produk")); ?>" style="color:var(--rose-700,#bc0847);text-decoration:none;margin:0 5px;">Produk</a> ·
<a href="/dvn-ulasan.html" style="color:var(--rose-700,#bc0847);text-decoration:none;margin:0 5px;">Ulasan</a> ·
<a href="/dvn-faq.html" style="color:var(--rose-700,#bc0847);text-decoration:none;margin:0 5px;">FAQ</a> ·
<a href="<?php echo esc_url(home_url("/blog")); ?>" style="color:var(--rose-700,#bc0847);text-decoration:none;margin:0 5px;">Artikel</a>
</div>

<!-- Policy Links -->
<div style="margin-bottom:12px;font-size:10.5px;">
<a href="/kebijakan-privasi.html" style="color:#8b5060;text-decoration:none;margin:0 4px;">Kebijakan Privasi</a> ·
<a href="/syarat-ketentuan.html" style="color:#8b5060;text-decoration:none;margin:0 4px;">Syarat &amp; Ketentuan</a> ·
<a href="/disclaimer.html" style="color:#8b5060;text-decoration:none;margin:0 4px;">Disclaimer Medis</a>
</div>

<!-- Medical Disclaimer -->
<div style="background:#f9e4ed;border:1px solid var(--rose-200,#ffc2d4);border-radius:8px;padding:10px 14px;margin-bottom:12px;text-align:left;">
<p style="color:var(--text-mid,#6b3850);font-size:10.5px;line-height:1.7;margin:0;">
<strong style="color:var(--text-dark,#2d1a22);">Disclaimer:</strong> DVN Collagen adalah suplemen makanan, bukan obat. Produk ini tidak dimaksudkan untuk mendiagnosis, mengobati, menyembuhkan, atau mencegah penyakit apa pun. Hasil dapat bervariasi. Konsultasikan dengan tenaga kesehatan profesional sebelum mengonsumsi suplemen.
</p>
</div>

<!-- Copyright -->
<div style="color:#9b6878;font-size:10.5px;">
© 2025–2026 DVN Collagen Indonesia. Semua hak dilindungi.<br>
Konten ditinjau secara berkala oleh Tim Ahli Kesehatan &amp; Kecantikan DVN Collagen.
</div>

</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>