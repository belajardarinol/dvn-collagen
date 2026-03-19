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
  badge:    '🎁 Promo Aktif',
  title:    'Bonus Scarf Gratis!',
  subtitle: 'Khusus pembelian 2 Box DVN dengan collagen',
  note:     'Berlaku pembelian 2 Box · Scarf dikirim bersama produk · Stok terbatas',
  motifs: [
    { name: 'Davina Blush',    emoji: '🌸' },
    { name: 'Davina Fiora',    emoji: '🌷' },
    { name: 'Davina Magnolia', emoji: '🌺' }
  ],
  waTextBase: 'Halo Kak, saya mau order 2 Box DVN dengan collagen dan klaim bonus scarf! 🎁',
  ctaUrl: '<?php echo esc_url(get_theme_mod("wa_link", "https://wa.me/6287866888808?text=Halo, saya ingin order DVN Collagen")); ?>'
};
</script>
</head>
<body <?php body_class(); ?>>
<a href="/?v=8#main-content" style="position:absolute;left:-9999px;top:4px;z-index:9999;background:var(--rose-600);color:white;padding:8px 16px;border-radius:4px;font-size:.85rem;font-weight:700;text-decoration:none;" onfocus="this.style.left=&#39;4px&#39;" onblur="this.style.left=&#39;-9999px&#39;">Lewati ke konten utama</a>

<!-- ===== ANNOUNCEMENT BAR ===== -->

<!-- ┌──────────────────────────────────────────────────────────────┐
     │  DVN PROMO SLOT A — TOPBAR  (di atas navbar, 1 baris)       │
     │  AKTIFKAN  : ganti  display:none  →  display:block          │
     │  NONAKTIF  : ganti  display:block →  display:none           │
     │  GANTI ISI : edit teks "label" dan "cta" di bawah           │
     └──────────────────────────────────────────────────────────────┘ -->
<div id="dvn-slot-a" class="dvn-promo-zone" style="display: block !important;"><div class="dvn-promo-topbar"><a href="<?php echo esc_url(home_url("/produk")); ?>" onclick="trackCTA&amp;&amp;trackCTA(&#39;topbar_promo&#39;)"><span class="dvn-pt-badge">🎁</span><span class="dvn-pt-main">Beli 2 Box DVN Collagen → Bonus Scarf Gratis! &nbsp;·&nbsp; Terbatas</span><span class="dvn-pt-cta">Klaim →</span></a></div></div>
<div class="announce-bar" aria-label="Pengumuman">
  <div class="announce-inner">
    <span class="announce-item">🌸 Distributor Resmi DVN</span>
    <span class="announce-sep">·</span>
    <span class="announce-item">✅ ID Terverifikasi i1684</span>
    <span class="announce-sep">·</span>
    <span class="announce-item">🏆 Superbrands 2024</span>
  </div>
</div>

<!-- ===== NAVBAR ===== -->
<nav class="site-nav" id="siteNav" aria-label="Navigasi utama DVN Collagen">
  <div class="nav-inner">
    <a href="<?php echo esc_url(home_url("/")); ?>" class="nav-brand">DVN</a>
    <div class="nav-links">
      <a href="<?php echo esc_url(home_url("/produk")); ?>" class="nav-link" onclick="trackCTA(&#39;nav_produk&#39;)" style="background:linear-gradient(135deg,#e01055,#ff4080);color:#fff!important;padding:6px 16px;border-radius:99px;font-weight:700;animation:pulse-btn 2s infinite;box-shadow:0 2px 12px rgba(224,16,85,.3);">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
        Produk
      </a>
      <a href="<?php echo esc_url(home_url("/blog")); ?>" class="nav-link nav-link-blog" onclick="trackCTA(&#39;nav_artikel&#39;)">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
        Artikel Kecantikan
      </a>
    </div>
  </div>
</nav>

<!-- Floating petals -->
<div id="petals-container" style="position:fixed;inset:0;pointer-events:none;z-index:1;overflow:hidden;" aria-hidden="true"><div class="petal" style="left: 60.2142vw; animation-duration: 12.5884s; animation-delay: 1.80834s; width: 23.2943px; height: 20.084px; transform: rotate(350.47deg);"></div><div class="petal" style="left: 15.3334vw; animation-duration: 12.6745s; animation-delay: 5.93183s; width: 19.0189px; height: 21.0312px; transform: rotate(146.263deg);"></div><div class="petal" style="left: 51.37vw; animation-duration: 13.6413s; animation-delay: 2.00828s; width: 18.4465px; height: 20.4114px; transform: rotate(219.27deg);"></div><div class="petal" style="left: 3.67099vw; animation-duration: 10.0829s; animation-delay: 0.449079s; width: 13.6016px; height: 23.533px; transform: rotate(112.121deg);"></div><div class="petal" style="left: 22.1701vw; animation-duration: 8.99539s; animation-delay: 3.35218s; width: 15.6861px; height: 24.9954px; transform: rotate(4.85588deg);"></div><div class="petal" style="left: 0.333134vw; animation-duration: 9.08308s; animation-delay: 4.79663s; width: 13.062px; height: 28.9254px; transform: rotate(6.53012deg);"></div><div class="petal" style="left: 27.0887vw; animation-duration: 11.839s; animation-delay: 4.87272s; width: 23.4568px; height: 23.9391px; transform: rotate(69.3242deg);"></div><div class="petal" style="left: 43.9436vw; animation-duration: 10.6678s; animation-delay: 3.26428s; width: 13.8807px; height: 16.4415px; transform: rotate(294.227deg);"></div></div>

<main id="main-content">

<!-- ===== HERO ===== -->
<section class="hero section" id="produk">
  <div class="petals-bg"></div>
  <div class="hero-orb hero-orb-1"></div>
  <div class="hero-orb hero-orb-2"></div>
  <div class="hero-orb hero-orb-3"></div>

  <!-- Decorative flowers (same as before — just repositioned) -->
  <svg class="hero-flower" style="top:-10px;right:-10px;width:100px;opacity:.6;transform:scaleX(-1);" viewBox="0 0 120 120" fill="none">
    <circle cx="60" cy="60" r="14" fill="#f9c6d8"></circle>
    <ellipse cx="60" cy="30" rx="10" ry="18" fill="#ffb3cc" opacity=".8"></ellipse>
    <ellipse cx="60" cy="90" rx="10" ry="18" fill="#ffb3cc" opacity=".8"></ellipse>
    <ellipse cx="30" cy="60" rx="18" ry="10" fill="#ffb3cc" opacity=".8"></ellipse>
    <ellipse cx="90" cy="60" rx="18" ry="10" fill="#ffb3cc" opacity=".8"></ellipse>
  </svg>
  <svg class="hero-flower" style="bottom:100px;left:-12px;width:80px;opacity:.5;" viewBox="0 0 120 120" fill="none">
    <circle cx="60" cy="60" r="14" fill="#f9c6d8"></circle>
    <ellipse cx="60" cy="30" rx="10" ry="18" fill="#ff94b3" opacity=".75"></ellipse>
    <ellipse cx="60" cy="90" rx="10" ry="18" fill="#ff94b3" opacity=".75"></ellipse>
    <ellipse cx="30" cy="60" rx="18" ry="10" fill="#ff94b3" opacity=".75"></ellipse>
    <ellipse cx="90" cy="60" rx="18" ry="10" fill="#ff94b3" opacity=".75"></ellipse>
  </svg>

  <div style="position:relative;z-index:5;width:100%;max-width:440px;margin:0 auto;display:flex;flex-direction:column;align-items:center;gap:0;">

    <!-- ① CERT STRIP -->
    <div class="hero-cert-strip anim-fade-up">
      <span class="hcs-chip">🛡️ BPOM RI</span>
      <span class="hcs-sep">·</span>
      <span class="hcs-chip">☪ Halal MUI</span>
      <span class="hcs-sep">·</span>
      <span class="hcs-chip">✓ GMP</span>
    </div>

    <!-- ② BRAND + SUPERBRANDS -->
    <div class="hero-editorial anim-fade-up delay-1">
      <div class="he-brand">DVN</div>
      <div class="superbrands-badge he-sb">
        <span class="sb-star">✦</span>
        <span class="sb-text">Superbrands<br>Worldwide 2024</span>
        <span class="sb-star">✦</span>
      </div>
    </div>

    <!-- ③ PRODUCT SHOWCASE CARD -->
    <div class="hero-showcase anim-fade-up delay-2">
      <!-- Floating info chips ON the card -->
      <div class="hs-chip hs-chip-1">
        <span class="hs-chip-dot" style="background:var(--rose-400);"></span>
        Collagen + Vit C
      </div>
      <div class="hs-chip hs-chip-2">
        <span class="hs-chip-dot" style="background:#28a745;"></span>
        BPOM &amp; Halal MUI
      </div>
      <!-- Product image -->
      <div class="hs-product-wrap">
        <img src="<?php echo esc_url(get_theme_mod('hero_img_1', get_template_directory_uri() . '/assets/dvn-product-main.jpg')); ?>" alt="DVN dengan collagen Chewable Tablet" class="hs-product-img" width="200" height="200" loading="eager" fetchpriority="high" draggable="false" oncontextmenu="return false;">
      </div>
      <!-- Bottom ribbon strip -->
      <div class="hs-ribbon">✓ Distributor Resmi ID: <?php echo esc_html(get_theme_mod('distributor_id', 'i1684')); ?> &nbsp;·&nbsp; 500.000+ Terjual</div>
    </div>

    <!-- ④ HEADLINE -->
    <h1 class="hero-headline anim-fade-up delay-3" style="margin-bottom:10px;">
      <?php echo wp_kses_post(get_theme_mod('hero_headline', 'Dukung <span>Kesehatan Kulit</span><br>dari Dalam')); ?>
    </h1>
    <p class="hero-sub anim-fade-up delay-3">Suplemen tablet kunyah dengan 5 bahan aktif internasional. Terdaftar BPOM RI &amp; bersertifikat Halal MUI.</p>

    <!-- ⑤ LIFESTYLE DUO -->
    <div class="hero-lifestyle anim-fade-up delay-3">
      <div class="hl-card">
        <img src="<?php echo esc_url(get_theme_mod('hero_img_2', get_template_directory_uri() . '/assets/hero-card-1.jpg')); ?>" alt="Pengguna DVN dengan collagen" width="180" height="240" loading="eager" draggable="false" oncontextmenu="return false;">
        <div class="hl-card-label">Pengguna DVN ✦</div>
      </div>
      <div class="hl-card">
        <img src="<?php echo esc_url(get_theme_mod('hero_img_3', get_template_directory_uri() . '/assets/hero-card-2.jpg')); ?>" alt="DVN Bantu Jaga Kulitmu" width="180" height="240" loading="eager" draggable="false" oncontextmenu="return false;">
        <div class="hl-card-label">DVN Bantu Kulitmu</div>
      </div>
    </div>

    <!-- ⑤½ PROMO STRIP -->
    <div id="idxPromoStrip" class="dvn-promo-zone anim-fade-up delay-4" style="display: flex !important;">

  <div style="font-size:1.4rem;flex-shrink:0;">🎀</div>
  <div class="isp-left">
    <span class="isp-tag">Promo Aktif</span>
    <div class="isp-title">Beli 2 Box → Bonus Scarf Gratis!</div>
    <div class="isp-timer">
      <span class="isp-timer-lbl">⏱ Berakhir:</span>
      <span class="isp-cd" id="idxCdH">419</span>
      <span class="isp-timer-lbl">:</span>
      <span class="isp-cd" id="idxCdM">25</span>
      <span class="isp-timer-lbl">:</span>
      <span class="isp-cd" id="idxCdS">21</span>
    </div>
  </div>
  <a href="<?php echo esc_url(home_url("/produk")); ?>" class="isp-cta-btn" onclick="trackCTA&amp;&amp;trackCTA(&#39;promo_strip_idx&#39;)">Klaim →</a>
</div>

    <!-- ⑥ TRUST ROW -->
    <div class="hero-trust-row anim-fade-up delay-4" style="margin-bottom:20px;">
      <div class="hero-trust-chip">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#e01055" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
        BPOM RI
      </div>
      <div class="hero-trust-chip">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#e01055" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
        Halal MUI
      </div>
      <div class="hero-trust-chip">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#e01055" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
        GMP Certified
      </div>
      <div class="hero-trust-chip">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#e01055" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
        500.000+ Pengguna
      </div>
    </div>

    <!-- ⑦ CTA (same) -->
    <div class="btn-wrap anim-fade-up delay-5">
      <a href="<?php echo esc_url(home_url("/produk")); ?>" onclick="trackCTA(&#39;hero_cta&#39;)" class="btn-main btn-wa-style">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"></path><path d="M12.004 0C5.374 0 0 5.373 0 12c0 2.117.554 4.104 1.523 5.827L.057 23.97l6.304-1.454A11.95 11.95 0 0012.004 24C18.63 24 24 18.626 24 12c0-6.627-5.37-12-11.996-12z"></path></svg>
        Chat via WhatsApp
      </a>
    </div>
    <p class="btn-micro anim-fade-up delay-5">Produk Original • Tersegel • Pengiriman ke Seluruh Indonesia</p>

  </div>
</section>


<!-- ┌──────────────────────────────────────────────────────────────┐
     │  DVN PROMO SLOT B — CARD  (di dalam konten, setelah hero)   │
     │  AKTIFKAN  : ganti  display:none  →  display:block          │
     │  GANTI ISI : edit icon, tag, title, sub, dan teks tombol    │
     └──────────────────────────────────────────────────────────────┘ -->
<div id="dvn-slot-b" style="display:none;padding:0 16px 4px;"><div class="dvn-promo-card"><div class="dvn-pc-icon">🎁</div><div class="dvn-pc-body"><span class="dvn-pc-tag">Penawaran Spesial</span><div class="dvn-pc-title">Promo DVN Collagen — Dapatkan Penawaran Hari Ini!</div><div class="dvn-pc-sub">Penawaran terbatas untuk periode ini. Hubungi dealer resmi sebelum kehabisan.</div></div><a href="<?php echo esc_url(get_theme_mod('wa_link', 'https://wa.me/6287866888808?text=Halo, saya ingin order DVN Collagen')); ?>" class="dvn-pc-btn" target="_blank" rel="noopener noreferrer"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"></path><path d="M12.004 0C5.374 0 0 5.373 0 12c0 2.117.554 4.104 1.523 5.827L.057 23.97l6.304-1.454A11.95 11.95 0 0012.004 24C18.63 24 24 18.626 24 12c0-6.627-5.37-12-11.996-12z"></path></svg> Cek Promo</a></div></div>

<!-- ===== PROBLEM ===== -->
<section class="problem-sec section reveal">
  <div style="max-width:440px;margin:0 auto;">
    <span class="sec-tag">Kekhawatiran yang Anda Rasakan</span>
    <h2 class="sec-title"><?php echo wp_kses_post(get_theme_mod('prob_title', 'Perhatian pada <span>Kondisi Kulit Sehari-hari</span>')); ?></h2>
    <p class="sec-body"><?php echo wp_kses_post(get_theme_mod('prob_body', 'Banyak orang mulai memperhatikan perubahan kondisi kulit mereka seiring bertambahnya usia dan paparan faktor lingkungan.')); ?></p>
    <div class="problem-grid">
      <div class="problem-card reveal">
        <div class="problem-icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#e01055" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 8v4l3 3"></path></svg>
        </div>
        <div>
          <h4>Kerutan &amp; Garis Halus</h4>
          <p>Tanda alami penuaan yang mulai tampak, terutama di area sekitar mata dan dahi.</p>
        </div>
      </div>
      <div class="problem-card reveal">
        <div class="problem-icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#e01055" stroke-width="2"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10"></path><path d="M12 6v6l4 2"></path></svg>
        </div>
        <div>
          <h4>Warna Kulit Tidak Merata</h4>
          <p>Kondisi umum yang dipengaruhi oleh paparan sinar matahari dan faktor lingkungan.</p>
        </div>
      </div>
      <div class="problem-card reveal">
        <div class="problem-icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#e01055" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
        </div>
        <div>
          <h4>Kulit Terasa Kurang Kenyal</h4>
          <p>Produksi kolagen alami tubuh berkurang seiring usia, yang dapat memengaruhi kekenyalan kulit.</p>
        </div>
      </div>
      <div class="problem-card reveal">
        <div class="problem-icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#e01055" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
        </div>
        <div>
          <h4>Kulit Tampak Kurang Bercahaya</h4>
          <p>Paparan polusi, stres, dan gaya hidup modern dapat memengaruhi penampilan kulit dari waktu ke waktu.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== AGITATE ===== -->
<section class="agitate-sec section reveal">
  <div style="max-width:440px;margin:0 auto;">
    <span class="sec-tag">Tahukah Anda?</span>
    <h2 class="sec-title"><?php echo wp_kses_post(get_theme_mod('agit_title', 'Faktor Sehari-hari yang <span>Memengaruhi Kesehatan Kulit</span>')); ?></h2>
    <div class="agitate-quote reveal">
      Paparan sinar UV, polusi udara, dan tekanan gaya hidup adalah faktor lingkungan yang dapat memengaruhi kondisi kulit dari waktu ke waktu.
    </div>
    <p class="sec-body">Nutrisi dari dalam dapat melengkapi perawatan topikal yang sudah Anda lakukan sehari-hari — keduanya bekerja bersama untuk mendukung kesehatan kulit secara menyeluruh.</p>
  </div>
</section>

<!-- ===== SOLUTION ===== -->
<section class="solution-sec section reveal">
  <div style="max-width:440px;margin:0 auto;">
    <span class="sec-tag">Suplemen Pendamping Harian</span>
    <h2 class="sec-title"><?php echo wp_kses_post(get_theme_mod('sol_title', 'Lengkapi Perawatan Anda <span>dari Dalam</span>')); ?></h2>
    <p class="sec-body">DVN dengan Collagen hadir sebagai suplemen pendamping perawatan kulit harian Anda — formulasi internasional dengan bahan-bahan pilihan yang telah memperoleh penghargaan Superbrands Worldwide 2024.</p>
    <div class="benefit-list">
      <div class="benefit-item reveal">
        <div class="benefit-num">1</div>
        <div>
          <h4>Membantu Menjaga Kesehatan Kulit dari Dalam</h4>
          <p>Kolagen terhidrolisat mendukung nutrisi kulit secara menyeluruh sebagai bagian dari rutinitas harian.</p>
        </div>
      </div>
      <div class="benefit-item reveal">
        <div class="benefit-num">2</div>
        <div>
          <h4>Mendukung Penampilan Kulit Tetap Segar</h4>
          <p>Kombinasi Natrium Hyaluronat &amp; Vitamin C membantu menjaga kelembapan kulit sebagai bagian dari rutinitas harian.</p>
        </div>
      </div>
      <div class="benefit-item reveal">
        <div class="benefit-num">3</div>
        <div>
          <h4>Melengkapi Gaya Hidup Sehat Modern</h4>
          <p>Tablet kunyah yang praktis, mudah dikonsumsi kapan saja — cocok untuk ibu aktif dan profesional sibuk.</p>
        </div>
      </div>
      <div class="benefit-item reveal">
        <div class="benefit-num">4</div>
        <div>
          <h4>Formulasi Bahan Berkualitas Internasional</h4>
          <p>Resveratrol dari Jepang, Delima dari Korea, dan Natrium Hyaluronat dari Prancis — dipadukan dalam satu tablet.</p>
        </div>
      </div>
    </div>
    <div style="margin-top:28px;">
      <div class="btn-wrap"><a href="<?php echo esc_url(home_url("/produk")); ?>" onclick="trackCTA(&#39;solution_cta&#39;)" class="btn-main"><svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg> Lihat Detail Produk</a></div>
      <p class="btn-micro">BPOM RI • Halal MUI • Produksi Standar Internasional</p>
    </div>
  </div>
</section>

<!-- ===== INGREDIENTS ===== -->
<section class="ingr-sec section reveal">
  <div style="max-width:440px;margin:0 auto;">
    <span class="sec-tag">Formulasi Premium</span>
    <h2 class="sec-title">5 Bahan Aktif <span>Internasional Pilihan</span></h2>
    <p class="sec-body">Setiap komponen dipilih secara selektif — formulasi sinergis dari 3 negara berbeda.</p>

    

    <!-- Problem label style -->
    

    <div class="ig-wrap">

      <!-- 1: Resveratrol — masalah: kulit cepat tua kena polusi + UV -->
      <div class="ig-card reveal">
        <span class="ig-emoji">🍇</span>
        <div class="ig-flag">🇯🇵 Jepang</div>
        <div class="ig-problem">😟 Kulit kusam &amp; cepat tua</div>
        <span class="ig-arrow">↓ diatasi oleh</span>
        <div class="ig-name">Resveratrol</div>
        <div class="ig-desc">Polusi &amp; sinar UV merusak sel kulit setiap hari. Resveratrol memblokir radikal bebas sebelum kerusakan tampak di wajah.</div>
        <span class="ig-benefit">🛡️ Lindungi Sel Kulit</span>
      </div>

      <!-- 2: Pomegranate — masalah: warna kulit tidak merata, gelap, lelah -->
      <div class="ig-card reveal">
        <span class="ig-emoji">🍎</span>
        <div class="ig-flag">🇰🇷 Korea</div>
        <div class="ig-problem">😟 Warna kulit tidak merata</div>
        <span class="ig-arrow">↓ diatasi oleh</span>
        <div class="ig-name">Ekstrak Delima</div>
        <div class="ig-desc">Kulit terlihat gelap &amp; lelah? Punicalagin mendukung kecerahan alami dan membantu warna kulit lebih merata dari dalam.</div>
        <span class="ig-benefit">✨ Cerahkan Kulit</span>
      </div>

      <!-- 3: Hyaluronate — masalah: kulit kering, pakai pelembap tapi tetap kering -->
      <div class="ig-card reveal">
        <span class="ig-emoji">💧</span>
        <div class="ig-flag">🇫🇷 Prancis</div>
        <div class="ig-problem">😟 Kulit kering &amp; terasa ketarik</div>
        <span class="ig-arrow">↓ diatasi oleh</span>
        <div class="ig-name">Sodium Hyaluronate</div>
        <div class="ig-desc">Pelembap topikal hanya menyentuh permukaan. Bahan ini menghidrasi dari dalam lapisan dermis — tahan sepanjang hari.</div>
        <span class="ig-benefit">💦 Lembap dari Dalam</span>
      </div>

      <!-- 4: Collagen — masalah: kulit kendur, muncul garis halus -->
      <div class="ig-card reveal">
        <span class="ig-emoji">🧬</span>
        <div class="ig-flag">🌍 Internasional</div>
        <div class="ig-problem">😟 Kulit kendur &amp; garis halus</div>
        <span class="ig-arrow">↓ diatasi oleh</span>
        <div class="ig-name">Hydrolyzed Collagen</div>
        <div class="ig-desc">Kolagen tubuh turun ~1% per tahun sejak usia 25. Peptida ini mengisi kembali stok kolagen dari dalam — lebih efektif dari krim topikal.</div>
        <span class="ig-benefit">💪 Kencangkan Kulit</span>
      </div>

      <!-- 5: L-Glutathione — masalah: flek, kulit gelap, perawatan tidak merata -->
      <div class="ig-card ig-wide reveal">
        <span class="ig-emoji">🌟</span>
        <div class="ig-body">
          <div class="ig-flag">👑 Bahan Aktif Ke-5 — Kunci Sinergi</div>
          <div class="ig-problem">😟 Flek hitam, kulit gelap, hasil perawatan tidak maksimal</div>
          <span class="ig-arrow">↓ diatasi oleh</span>
          <div class="ig-name">L-Glutathione</div>
          <div class="ig-desc">Bahan ini menghambat produksi melanin berlebih penyebab flek &amp; warna gelap — sekaligus mengaktifkan kembali Vit C &amp; E di tubuh agar ke-4 bahan lainnya bekerja lebih optimal.</div>
          <span class="ig-benefit">⚡ Maksimalkan Semua Bahan</span>
        </div>
      </div>

    </div>

    <div class="cert-row" style="margin-top:14px;">
      <div class="cert-badge">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#e01055" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="20 6 9 17 4 12"></polyline></svg>
        GMP Certified
      </div>
      <div class="cert-badge">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#e01055" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        BPOM RI
      </div>
      <div class="cert-badge">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#e01055" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path></svg>
        Halal MUI
      </div>
    </div>

  </div>
</section>

<!-- ===== TIMELINE ===== -->
<section class="timeline-sec section reveal">
  <div style="max-width:440px;margin:0 auto;">
    <span class="sec-tag">Panduan Konsumsi</span>
    <h2 class="sec-title"><?php echo wp_kses_post(get_theme_mod('tl_title', 'Cara Memaksimalkan <span>Konsumsi DVN</span>')); ?></h2>
    <p class="sec-body">Konsumsi sesuai anjuran pada kemasan secara konsisten adalah kunci utama. Hasil tiap individu dapat berbeda-beda.</p>
    <div class="timeline" style="padding-left:10px;">
      <div class="tl-item reveal">
        <div class="tl-dot">W1</div>
        <div class="tl-content">
          <h4>Minggu 1 – Mulai Rutinitas</h4>
          <p>Biasakan konsumsi setiap hari sesuai anjuran pada kemasan. Konsistensi adalah kunci manfaat jangka panjang.</p>
        </div>
      </div>
      <div class="tl-item reveal">
        <div class="tl-dot">W2</div>
        <div class="tl-content">
          <h4>Minggu 2–3 – Bangun Kebiasaan</h4>
          <p>Rutinitas mulai terbentuk. Jadikan konsumsi DVN bagian dari rutinitas harian bersama pola makan seimbang.</p>
        </div>
      </div>
      <div class="tl-item reveal">
        <div class="tl-dot">M1</div>
        <div class="tl-content">
          <h4>Bulan 1 – Konsumsi Konsisten</h4>
          <p>Lanjutkan konsumsi rutin. Berbagai pengguna berbagi pengalaman positif mereka setelah satu bulan konsumsi teratur.</p>
        </div>
      </div>
      <div class="tl-item reveal">
        <div class="tl-dot">M3</div>
        <div class="tl-content">
          <h4>Bulan 3+ – Rutinitas Terbentuk</h4>
          <p>Konsumsi jangka panjang yang konsisten sesuai anjuran membantu memaksimalkan manfaat nutrisi dari bahan-bahan dalam DVN.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== SOCIAL PROOF ===== -->
<section class="proof-sec section reveal">
  <div style="max-width:440px;margin:0 auto;">
    <span class="sec-tag">Dipercaya Banyak Orang</span>
    <h2 class="sec-title">Bergabung Bersama <span>Komunitas DVN</span></h2>
    <div class="proof-numbers">
      <div class="proof-num-card reveal">
        <div class="proof-big">500.000+</div>
        <div class="proof-label">Pengguna di Seluruh Indonesia*</div>
      </div>
      <div class="proof-num-card reveal">
        <div class="proof-big">⭐ 4.8/5</div>
        <div class="proof-label">Rata-rata Ulasan Pengguna*</div>
      </div>
      <div class="proof-num-card reveal">
        <div class="proof-big">Superbrands</div>
        <div class="proof-label">Penghargaan Superbrands Worldwide 2024</div>
      </div>
    </div>
    <p style="font-size:.68rem;color:var(--text-light);margin-top:14px;text-align:center;padding:0 10px;">*Berdasarkan data internal distributor. Angka bersifat kumulatif dan dapat berubah sewaktu-waktu.</p>
  </div>
</section>

<!-- ===== TESTIMONIALS ===== -->
<section class="testi-sec section reveal">
  <div style="max-width:440px;margin:0 auto;">
    <span class="sec-tag">Pengalaman Pengguna</span>
    <h2 class="sec-title">Apa Kata <span>Pengguna DVN</span></h2>
    <p style="font-size:.78rem;color:var(--text-light);margin-bottom:16px;font-style:italic;">Pengalaman tiap individu berbeda-beda. Testimoni di bawah merupakan pendapat pribadi masing-masing pengguna.</p>
    <div class="testi-scroll">
      <div class="testi-card reveal">
        <div class="testi-quote">"Setelah rutin konsumsi selama sebulan, saya merasa lebih semangat merawat diri. Senang banget menemukan suplemen yang cocok untuk rutinitas harian saya."</div>
        <div class="testi-author">
          <div class="testi-avatar">R</div>
          <div><div class="testi-name">Riska Angger, 29 th</div><div class="testi-role">Content Creator, Jakarta</div></div>
        </div>
      </div>
      <div class="testi-card reveal">
        <div class="testi-quote">"Awalnya ragu-ragu soal harga. Tapi setelah coba, saya merasa ini jadi bagian yang pas untuk melengkapi perawatan harian saya. Worth it untuk konsistensi!"</div>
        <div class="testi-author">
          <div class="testi-avatar">L</div>
          <div><div class="testi-name">Laras Novi, 35 th</div><div class="testi-role">Wiraswasta, Surabaya</div></div>
        </div>
      </div>
      <div class="testi-card reveal">
        <div class="testi-quote">"Konsepnya simple tapi efeknya terasa nyata di keseharian — kulit lebih nyaman dan ngerasa lebih rajin merawat diri sejak rutin minum DVN."</div>
        <div class="testi-author">
          <div class="testi-avatar">P</div>
          <div><div class="testi-name">Puji Trisna, 31 th</div><div class="testi-role">Guru, Bandung</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== PHOTO TESTIMONIALS SLIDER ===== -->
<section class="photo-testi-sec section reveal">
  <div style="padding:0 20px;max-width:440px;margin:0 auto;">
    <span class="sec-tag">Bukti Nyata dari Konsumen</span>
    <h2 class="sec-title">Testimoni Langsung <span>via WhatsApp</span></h2>
    <p class="sec-body">Pesan asli dari pengguna. Pengalaman bersifat personal dan hasil tiap individu dapat berbeda-beda.</p>
  </div>
  <div class="slider-outer">
    <div class="slider-track">
      <!-- 5 original cards -->
      <div class="testi-photo-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/testi_1.jpg" alt="Testimoni Ayumi – DVN Collagen" width="236" height="310" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.cssText=&#39;width:100%;height:100%;object-fit:cover;border-radius:inherit;background:linear-gradient(135deg,#fde8ef,#fcc9da);&#39;;this.src=&#39;data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22%3E%3Ccircle cx=%2250%22 cy=%2240%22 r=%2220%22 fill=%22%23e01055%22 opacity=%22.3%22/%3E%3Cellipse cx=%2250%22 cy=%2280%22 rx=%2230%22 ry=%2220%22 fill=%22%23e01055%22 opacity=%22.2%22/%3E%3C/svg%3E&#39;" draggable="false" oncontextmenu="return false;"><div class="testi-photo-overlay"><div class="testi-photo-quote">"DVN dengan collagen tuh ringan banget, nggak bikin mual. Rasanya enak juga!"</div><div class="testi-photo-name">— Ayumi ✓</div></div></div>
      <div class="testi-photo-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/testi_2.jpg" alt="Testimoni Nur Farida – DVN Collagen" width="236" height="310" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.cssText=&#39;width:100%;height:100%;object-fit:cover;border-radius:inherit;background:linear-gradient(135deg,#fde8ef,#fcc9da);&#39;;this.src=&#39;data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22%3E%3Ccircle cx=%2250%22 cy=%2240%22 r=%2220%22 fill=%22%23e01055%22 opacity=%22.3%22/%3E%3Cellipse cx=%2250%22 cy=%2280%22 rx=%2230%22 ry=%2220%22 fill=%22%23e01055%22 opacity=%22.2%22/%3E%3C/svg%3E&#39;" draggable="false" oncontextmenu="return false;"><div class="testi-photo-overlay"><div class="testi-photo-quote">"ini aku konsumsi bareng vitamin harian. Praktis banget, bantu lengkapi nutrisi dari dalam."</div><div class="testi-photo-name">— Nur Farida ✓</div></div></div>
      <div class="testi-photo-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/testi_3.jpg" alt="Testimoni Riska Angger – DVN Collagen" width="236" height="310" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.cssText=&#39;width:100%;height:100%;object-fit:cover;border-radius:inherit;background:linear-gradient(135deg,#fde8ef,#fcc9da);&#39;;this.src=&#39;data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22%3E%3Ccircle cx=%2250%22 cy=%2240%22 r=%2220%22 fill=%22%23e01055%22 opacity=%22.3%22/%3E%3Cellipse cx=%2250%22 cy=%2280%22 rx=%2230%22 ry=%2220%22 fill=%22%23e01055%22 opacity=%22.2%22/%3E%3C/svg%3E&#39;" draggable="false" oncontextmenu="return false;"><div class="testi-photo-overlay"><div class="testi-photo-quote">"bantu aku ngerasa lebih percaya diri dan ngerawat diri tanpa ribet"</div><div class="testi-photo-name">— Riska Angger ✓</div></div></div>
      <div class="testi-photo-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/testi_4.jpg" alt="Testimoni Laras Novi – DVN Collagen" width="236" height="310" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.cssText=&#39;width:100%;height:100%;object-fit:cover;border-radius:inherit;background:linear-gradient(135deg,#fde8ef,#fcc9da);&#39;;this.src=&#39;data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22%3E%3Ccircle cx=%2250%22 cy=%2240%22 r=%2220%22 fill=%22%23e01055%22 opacity=%22.3%22/%3E%3Cellipse cx=%2250%22 cy=%2280%22 rx=%2230%22 ry=%2220%22 fill=%22%23e01055%22 opacity=%22.2%22/%3E%3C/svg%3E&#39;" draggable="false" oncontextmenu="return false;"><div class="testi-photo-overlay"><div class="testi-photo-quote">"Buat aku, DVN dengan collagen ini tuh reminder kecil untuk sayang sama diri sendiri"</div><div class="testi-photo-name">— Laras Novi ✓</div></div></div>
      <div class="testi-photo-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/testi_5.jpg" alt="Testimoni Puji Trisna – DVN Collagen" width="236" height="310" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.cssText=&#39;width:100%;height:100%;object-fit:cover;border-radius:inherit;background:linear-gradient(135deg,#fde8ef,#fcc9da);&#39;;this.src=&#39;data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22%3E%3Ccircle cx=%2250%22 cy=%2240%22 r=%2220%22 fill=%22%23e01055%22 opacity=%22.3%22/%3E%3Cellipse cx=%2250%22 cy=%2280%22 rx=%2230%22 ry=%2220%22 fill=%22%23e01055%22 opacity=%22.2%22/%3E%3C/svg%3E&#39;" draggable="false" oncontextmenu="return false;"><div class="testi-photo-overlay"><div class="testi-photo-quote">"Aku suka banget konsepnya yang simple tapi terasa efeknya di keseharian — kulitku terasa lebih nyaman aja."</div><div class="testi-photo-name">— Puji Trisna ✓</div></div></div>
      <!-- Duplicate for seamless infinite scroll -->
      <div class="testi-photo-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/testi_1.jpg" alt="Testimoni Ayumi – DVN Collagen" width="236" height="310" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.cssText=&#39;width:100%;height:100%;object-fit:cover;border-radius:inherit;background:linear-gradient(135deg,#fde8ef,#fcc9da);&#39;;this.src=&#39;data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22%3E%3Ccircle cx=%2250%22 cy=%2240%22 r=%2220%22 fill=%22%23e01055%22 opacity=%22.3%22/%3E%3Cellipse cx=%2250%22 cy=%2280%22 rx=%2230%22 ry=%2220%22 fill=%22%23e01055%22 opacity=%22.2%22/%3E%3C/svg%3E&#39;" draggable="false" oncontextmenu="return false;"><div class="testi-photo-overlay"><div class="testi-photo-quote">"DVN dengan collagen tuh ringan banget, nggak bikin mual. Rasanya enak juga!"</div><div class="testi-photo-name">— Ayumi ✓</div></div></div>
      <div class="testi-photo-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/testi_2.jpg" alt="Testimoni Nur Farida – DVN Collagen" width="236" height="310" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.cssText=&#39;width:100%;height:100%;object-fit:cover;border-radius:inherit;background:linear-gradient(135deg,#fde8ef,#fcc9da);&#39;;this.src=&#39;data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22%3E%3Ccircle cx=%2250%22 cy=%2240%22 r=%2220%22 fill=%22%23e01055%22 opacity=%22.3%22/%3E%3Cellipse cx=%2250%22 cy=%2280%22 rx=%2230%22 ry=%2220%22 fill=%22%23e01055%22 opacity=%22.2%22/%3E%3C/svg%3E&#39;" draggable="false" oncontextmenu="return false;"><div class="testi-photo-overlay"><div class="testi-photo-quote">"ini aku konsumsi bareng vitamin harian. Praktis banget, bantu lengkapi nutrisi dari dalam."</div><div class="testi-photo-name">— Nur Farida ✓</div></div></div>
      <div class="testi-photo-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/testi_3.jpg" alt="Testimoni Riska Angger – DVN Collagen" width="236" height="310" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.cssText=&#39;width:100%;height:100%;object-fit:cover;border-radius:inherit;background:linear-gradient(135deg,#fde8ef,#fcc9da);&#39;;this.src=&#39;data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22%3E%3Ccircle cx=%2250%22 cy=%2240%22 r=%2220%22 fill=%22%23e01055%22 opacity=%22.3%22/%3E%3Cellipse cx=%2250%22 cy=%2280%22 rx=%2230%22 ry=%2220%22 fill=%22%23e01055%22 opacity=%22.2%22/%3E%3C/svg%3E&#39;" draggable="false" oncontextmenu="return false;"><div class="testi-photo-overlay"><div class="testi-photo-quote">"bantu aku ngerasa lebih percaya diri dan ngerawat diri tanpa ribet"</div><div class="testi-photo-name">— Riska Angger ✓</div></div></div>
      <div class="testi-photo-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/testi_4.jpg" alt="Testimoni Laras Novi – DVN Collagen" width="236" height="310" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.cssText=&#39;width:100%;height:100%;object-fit:cover;border-radius:inherit;background:linear-gradient(135deg,#fde8ef,#fcc9da);&#39;;this.src=&#39;data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22%3E%3Ccircle cx=%2250%22 cy=%2240%22 r=%2220%22 fill=%22%23e01055%22 opacity=%22.3%22/%3E%3Cellipse cx=%2250%22 cy=%2280%22 rx=%2230%22 ry=%2220%22 fill=%22%23e01055%22 opacity=%22.2%22/%3E%3C/svg%3E&#39;" draggable="false" oncontextmenu="return false;"><div class="testi-photo-overlay"><div class="testi-photo-quote">"Buat aku, DVN dengan collagen ini tuh reminder kecil untuk sayang sama diri sendiri"</div><div class="testi-photo-name">— Laras Novi ✓</div></div></div>
      <div class="testi-photo-card"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/testi_5.jpg" alt="Testimoni Puji Trisna – DVN Collagen" width="236" height="310" loading="lazy" decoding="async" onerror="this.onerror=null;this.style.cssText=&#39;width:100%;height:100%;object-fit:cover;border-radius:inherit;background:linear-gradient(135deg,#fde8ef,#fcc9da);&#39;;this.src=&#39;data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22%3E%3Ccircle cx=%2250%22 cy=%2240%22 r=%2220%22 fill=%22%23e01055%22 opacity=%22.3%22/%3E%3Cellipse cx=%2250%22 cy=%2280%22 rx=%2230%22 ry=%2220%22 fill=%22%23e01055%22 opacity=%22.2%22/%3E%3C/svg%3E&#39;" draggable="false" oncontextmenu="return false;"><div class="testi-photo-overlay"><div class="testi-photo-quote">"Aku suka banget konsepnya yang simple tapi terasa efeknya di keseharian — kulitku terasa lebih nyaman aja."</div><div class="testi-photo-name">— Puji Trisna ✓</div></div></div>
    </div>
  </div>
  <!-- Dot indicators -->
  <div class="slider-dots" id="sliderDots">
    <div class="slider-dot"></div>
    <div class="slider-dot active"></div>
    <div class="slider-dot"></div>
    <div class="slider-dot"></div>
    <div class="slider-dot"></div>
  </div>
</section>

<!-- ===== COMPARISON ===== -->
<section class="compare-sec section reveal">
  <div style="max-width:440px;margin:0 auto;">
    <span class="sec-tag">Perbandingan Produk</span>
    <h2 class="sec-title">Mengapa Pilih <span>DVN Collagen?</span></h2>
    <p class="sec-body" style="margin-bottom:16px;">Bandingkan sendiri — banyak produk kolagen di pasaran tidak memenuhi standar yang seharusnya.</p>

    

    <table class="dvn-vs-table reveal">
      <thead>
        <tr>
          <th></th>
          <th>❌ Produk Lain</th>
          <th>✅ DVN Collagen</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>BPOM RI</td>
          <td style="color:#cc3333;">Banyak tidak terdaftar</td>
          <td>✅ Terdaftar Resmi</td>
        </tr>
        <tr>
          <td>Halal MUI</td>
          <td style="color:#cc3333;">Sering tanpa sertifikat</td>
          <td>✅ Halal Resmi</td>
        </tr>
        <tr>
          <td>Bahan Aktif</td>
          <td style="color:#cc3333;">1–2 bahan saja</td>
          <td>✅ 5 Bahan Sinergis</td>
        </tr>
        <tr>
          <td>Asal Bahan</td>
          <td style="color:#cc3333;">Tidak jelas asalnya</td>
          <td>✅ Jepang, Korea, Prancis</td>
        </tr>
        <tr>
          <td>Bentuk</td>
          <td style="color:#cc3333;">Serbuk ribet diseduh</td>
          <td>✅ Tablet kunyah praktis</td>
        </tr>
        <tr>
          <td>Penghargaan</td>
          <td style="color:#cc3333;">Tidak ada</td>
          <td>✅ Superbrands 2024</td>
        </tr>
      </tbody>
    </table>

    <!-- DVN Winner Box -->
    <div style="background:linear-gradient(135deg,#fff0f4,#fde8ef);border:2px solid #fcc9da;border-radius:14px;padding:14px 16px;margin-bottom:12px;">
      <div style="font-size:.68rem;font-weight:800;text-transform:uppercase;letter-spacing:.06em;color:#bc0847;margin-bottom:8px;">🏆 431.601 Unit Terjual — Rekor ASEAN</div>
      <div style="display:flex;flex-wrap:wrap;gap:6px;">
        <span style="background:white;border:1.5px solid #fcc9da;border-radius:8px;padding:6px 10px;font-size:.68rem;font-weight:700;color:#bc0847;">🏛️ BPOM: SD235042031</span>
        <span style="background:white;border:1.5px solid #fcc9da;border-radius:8px;padding:6px 10px;font-size:.68rem;font-weight:700;color:#bc0847;">☪️ Halal: ID00410012348610323</span>
        <span style="background:white;border:1.5px solid #fcc9da;border-radius:8px;padding:6px 10px;font-size:.68rem;font-weight:700;color:#bc0847;">🏭 GMP Certified</span>
        <span style="background:white;border:1.5px solid #fcc9da;border-radius:8px;padding:6px 10px;font-size:.68rem;font-weight:700;color:#bc0847;">🌍 Superbrands 2024</span>
      </div>
    </div>

    <div style="background:#fffbeb;border:1.5px solid #fde68a;border-radius:10px;padding:10px 14px;margin-bottom:10px;font-size:.72rem;color:#92400e;line-height:1.55;display:flex;gap:8px;">
      <span style="font-size:1rem;flex-shrink:0;">⚠️</span>
      <span><strong>Hati-hati produk tanpa sertifikasi.</strong> Selalu cek nomor BPOM di cekbpom.pom.go.id dan halal di halalmui.org sebelum membeli.</span>
    </div>

    <p style="font-size:.62rem;color:var(--text-light);margin-top:8px;text-align:center;">DVN Collagen adalah suplemen makanan, bukan obat. Tidak dimaksudkan untuk mendiagnosis, mengobati, menyembuhkan, atau mencegah penyakit apapun.</p>
  </div>
</section>


<!-- ===== OBJECTION / PRICING ===== -->
<section class="pricing-sec section reveal">
  <div style="max-width:440px;margin:0 auto;">
    <span class="sec-tag">Informasi Pembelian</span>
    <h2 class="sec-title"><?php echo wp_kses_post(get_theme_mod('price_title', 'Dapatkan DVN Collagen <span>dari Dealer Resmi</span>')); ?></h2>
    <p class="sec-body">Hubungi dealer resmi kami untuk informasi harga, ketersediaan, dan panduan konsumsi yang tepat sesuai kebutuhan Anda.</p>
    <div class="price-card reveal">
      <div class="price-popular">✦ PRODUK RESMI</div>
      <div class="price-name">DVN Collagen – Suplemen Kolagen</div>
      <div class="price-main">Chat WA</div>
      <div class="price-sub">Hubungi kami untuk informasi harga terkini</div>
      <ul class="price-features">
        <li><span class="check">✓</span> Produk Original &amp; Kemasan Tersegel</li>
        <li><span class="check">✓</span> Terdaftar BPOM RI</li>
        <li><span class="check">✓</span> Bersertifikat Halal MUI</li>
        <li><span class="check">✓</span> Dari Dealer Resmi ID: <?php echo esc_html(get_theme_mod('distributor_id', 'i1684')); ?></li>
        <li><span class="check">✓</span> Informasi Produk via WhatsApp</li>
        <li><span class="check">✓</span> Pengiriman ke Seluruh Indonesia</li>
      </ul>
      <div class="btn-wrap"><a href="<?php echo esc_url(home_url("/produk")); ?>" onclick="trackCTA(&#39;pricing_cta&#39;)" class="btn-main btn-wa-style"><svg width="15" height="15" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"></path><path d="M12.004 0C5.374 0 0 5.373 0 12c0 2.117.554 4.104 1.523 5.827L.057 23.97l6.304-1.454A11.95 11.95 0 0012.004 24C18.63 24 24 18.626 24 12c0-6.627-5.37-12-11.996-12z"></path></svg> Hubungi Dealer Resmi</a></div>
      <p class="btn-micro">Pelanggan kami tersebar di seluruh Indonesia</p>
    </div>
  </div>
</section>

<!-- ===== GUARANTEE ===== -->
<section class="guarantee-sec section reveal">
  <div style="max-width:440px;margin:0 auto;">
    <span class="sec-tag">Kepercayaan Anda adalah Prioritas</span>
    <h2 class="sec-title">Beli dari <span>Sumber Terpercaya</span></h2>
    <div class="guarantee-box reveal">
      <div style="font-size:3rem;margin-bottom:12px;">🛡️</div>
      <h3 style="font-family:&#39;Playfair Display&#39;,serif;font-size:1.3rem;color:var(--rose-700);margin-bottom:12px;">Produk Original dari Dealer Resmi</h3>
      <p style="font-size:.88rem;color:var(--text-mid);line-height:1.7;margin-bottom:16px;">Setiap produk yang kami jual melalui dealer resmi ID <strong>i1684</strong> adalah produk original dengan kemasan tersegel dari distributor resmi. Terdaftar di BPOM RI dan bersertifikat Halal MUI sesuai regulasi yang berlaku.</p>
      <div style="display:flex;flex-wrap:wrap;gap:8px;justify-content:center;">
        <div class="cert-badge">✓ BPOM RI</div>
        <div class="cert-badge">✓ Halal MUI</div>
        <div class="cert-badge">✓ GMP Certified</div>
      </div>
    </div>
  </div>
</section>

<!-- ===== SCARCITY / CTA ===== -->
<section class="scarcity-sec section reveal">
  <div style="position:relative;z-index:2;max-width:440px;margin:0 auto;">
    <span class="sec-tag" style="background:rgba(255,255,255,.2);color:white;">📦 Ketersediaan Stok</span>
    <h2 class="sec-title" style="color:white;">Stok Tersedia <span style="color:#ffc2d4;">untuk Periode Ini</span></h2>
    <p class="sec-body" style="color:rgba(255,255,255,.85);">Hubungi dealer resmi kami untuk mengetahui ketersediaan stok dan informasi harga terkini.</p>
    <div class="countdown-row">
      <div class="cd-box" style="min-width:88px;">
        <div style="font-size:1rem;font-weight:800;color:white;line-height:1.3;">Stok<br>Tersedia</div>
        <div class="cd-label">Hubungi WA</div>
      </div>
      <div class="cd-box" style="min-width:88px;">
        <div style="font-size:1rem;font-weight:800;color:white;line-height:1.3;">Original<br>Tersegel</div>
        <div class="cd-label">Dealer Resmi</div>
      </div>
      <div class="cd-box" style="min-width:88px;">
        <div style="font-size:1rem;font-weight:800;color:white;line-height:1.3;">ID<br>i1684</div>
        <div class="cd-label">Terverifikasi</div>
      </div>
    </div>
    <p style="color:rgba(255,255,255,.8);font-size:.82rem;margin-bottom:20px;">Pastikan Anda mendapatkan produk original dari dealer yang terverifikasi.</p>
    <div class="btn-wrap"><a href="<?php echo esc_url(get_theme_mod('wa_link', 'https://wa.me/6287866888808?text=Halo, saya ingin order DVN Collagen')); ?>" onclick="trackCTA(&#39;scarcity_cta&#39;)" class="btn-main btn-wa-style" target="_blank" rel="noopener noreferrer"><svg width="15" height="15" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"></path><path d="M12.004 0C5.374 0 0 5.373 0 12c0 2.117.554 4.104 1.523 5.827L.057 23.97l6.304-1.454A11.95 11.95 0 0012.004 24C18.63 24 24 18.626 24 12c0-6.627-5.37-12-11.996-12z"></path></svg> Tanya Ketersediaan</a></div>
    <p class="btn-micro" style="color:rgba(255,255,255,.7);">Respon pada jam operasional 08.00–22.00 WIB</p>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section class="faq-sec section reveal">
  <div style="max-width:440px;margin:0 auto;">
    <span class="sec-tag">Pertanyaan Umum</span>
    <h2 class="sec-title">Ada yang <span>Ingin Ditanyakan?</span></h2>
    <div style="margin-top:20px;">
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">
          Apakah DVN Collagen aman dikonsumsi setiap hari?
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </button>
        <div class="faq-a"><div class="faq-a-inner">DVN Collagen adalah suplemen yang telah terdaftar di BPOM RI dan bersertifikat Halal MUI. Konsumsi sesuai anjuran yang tertera pada kemasan atau sesuai saran dari tenaga kesehatan.</div></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">
          Harganya mahal, apakah sebanding?
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </button>
        <div class="faq-a"><div class="faq-a-inner">DVN Collagen menggunakan bahan formulasi internasional (Jepang, Korea, Prancis) dan telah meraih penghargaan Superbrands Worldwide 2024. Sebagai suplemen harian, DVN dirancang untuk melengkapi rutinitas perawatan kulit Anda secara konsisten. Hubungi kami untuk informasi harga terkini.</div></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">
          Kapan bisa mulai merasakan manfaatnya?
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </button>
        <div class="faq-a"><div class="faq-a-inner">Hasil tiap individu berbeda-beda tergantung kondisi kulit dan konsistensi konsumsi. Sebagian pengguna melaporkan perubahan positif setelah konsumsi rutin selama beberapa minggu. Kunci utamanya adalah konsisten sesuai anjuran.</div></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">
          Bagaimana cara memastikan produk yang saya beli asli?
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </button>
        <div class="faq-a"><div class="faq-a-inner">Belilah hanya melalui dealer resmi yang terverifikasi. Kami adalah Dealer Resmi DVN dengan ID Dealer: <?php echo esc_html(get_theme_mod('distributor_id', 'i1684')); ?> yang telah terverifikasi dan resmi. Setiap produk yang kami jual tersegel dan asli.</div></div>
      </div>
      <div class="faq-item">
        <button class="faq-q" onclick="toggleFaq(this)">
          Apakah cocok untuk pria juga?
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
        </button>
        <div class="faq-a"><div class="faq-a-inner">Ya, DVN Collagen dapat dikonsumsi oleh pria maupun wanita yang ingin menjaga kesehatan kulit dari dalam sebagai bagian dari gaya hidup sehat. Pastikan konsumsi sesuai anjuran pada kemasan.</div></div>
      </div>
    </div>
  </div>
</section>

<!-- ===== TEAM / DEALER ===== -->
<section class="team-sec section reveal">
  <div style="max-width:440px;margin:0 auto;">
    <span class="sec-tag">Dealer Resmi Anda</span>
    <h2 class="sec-title">Beli DVN Collagen dari <span>Dealer Resmi Terverifikasi</span></h2>
    <div class="dealer-card reveal">
      <div class="dealer-photo">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dealer-photo.jpg" alt="Dealer Resmi DVN Collagen ID i1684" width="120" height="120" loading="lazy" style="width:120px;height:120px;border-radius:18px;object-fit:cover;box-shadow:0 4px 16px rgba(180,40,80,.15);" draggable="false" oncontextmenu="return false;">
      </div>
      <div class="dealer-id">ID Dealer: <?php echo esc_html(get_theme_mod('distributor_id', 'i1684')); ?></div>
      <p style="font-size:.85rem;color:var(--text-mid);margin-bottom:8px;"><?php echo wp_kses_post(get_theme_mod('dealer_name', 'DVN X RAYA')); ?> — Dealer Resmi DVN Collagen</p>
      <div class="dealer-badges">
        <span class="dealer-badge badge-green">● Online</span>
        <span class="dealer-badge badge-blue">✓ Terverifikasi</span>
        <span class="dealer-badge badge-gold">★ Resmi</span>
      </div>
      <p style="font-size:.85rem;color:var(--text-mid);line-height:1.6;margin-bottom:16px;">Dapatkan DVN original &amp; resmi dengan kualitas terjaga dan kemasan tersegel aman. Konsumsi sesuai anjuran pada kemasan untuk mendukung rutinitas kesehatan Anda sehari-hari.</p>
      <div class="dealer-cert-row">
        <div class="cert-badge"><span>GMP</span></div>
        <div class="cert-badge"><span>BPOM</span></div>
        <div class="cert-badge"><span>Halal</span></div>
      </div>
      <div style="margin-top:20px;">
        <div class="btn-wrap"><a href="<?php echo esc_url(get_theme_mod('wa_link', 'https://wa.me/6287866888808?text=Halo, saya ingin order DVN Collagen')); ?>" onclick="trackCTA(&#39;dealer_cta&#39;)" class="btn-main btn-wa-style" target="_blank" rel="noopener noreferrer"><svg width="15" height="15" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"></path><path d="M12.004 0C5.374 0 0 5.373 0 12c0 2.117.554 4.104 1.523 5.827L.057 23.97l6.304-1.454A11.95 11.95 0 0012.004 24C18.63 24 24 18.626 24 12c0-6.627-5.37-12-11.996-12z"></path></svg> Chat dengan Dealer</a></div>
        <p class="btn-micro">Jam operasional: Mon–Sun 08.00–22.00 WIB</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section style="background:linear-gradient(135deg,#fde8ef 0%,#fcc9da 50%,#fde8ef 100%);padding:60px 20px;text-align:center;" class="section reveal">
  <div style="max-width:440px;margin:0 auto;">
    <div style="font-size:2.8rem;margin-bottom:8px;">🌸</div>
    <h2 class="sec-title">Mulai Lengkapi <span>Rutinitas Harian Anda</span></h2>
    <p class="sec-body" style="max-width:320px;margin:0 auto 24px;">Jadikan DVN Collagen bagian dari gaya hidup sehat Anda sehari-hari. Hubungi dealer resmi untuk informasi lebih lanjut.</p>
    <div class="btn-wrap"><a href="<?php echo esc_url(get_theme_mod('wa_link', 'https://wa.me/6287866888808?text=Halo, saya ingin order DVN Collagen')); ?>" onclick="trackCTA(&#39;final_cta&#39;)" class="btn-main btn-wa-style" target="_blank" rel="noopener noreferrer"><svg width="15" height="15" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"></path><path d="M12.004 0C5.374 0 0 5.373 0 12c0 2.117.554 4.104 1.523 5.827L.057 23.97l6.304-1.454A11.95 11.95 0 0012.004 24C18.63 24 24 18.626 24 12c0-6.627-5.37-12-11.996-12z"></path></svg> Hubungi via WhatsApp</a></div>
    <p class="btn-micro">Produk Original • BPOM RI • Halal MUI • Dealer Resmi ID: <?php echo esc_html(get_theme_mod('distributor_id', 'i1684')); ?></p>
  </div>
</section>

<!-- ===== ARTIKEL KECANTIKAN ===== -->
<section class="blog-sec section reveal" id="blog">
  <div style="max-width:440px;margin:0 auto;">
    <span class="sec-tag">Edukasi &amp; Inspirasi</span>
    <h2 class="sec-title">Artikel <span>Kecantikan Terbaru</span></h2>
    <p class="sec-body">Tips perawatan kulit, wawasan nutrisi, dan panduan gaya hidup sehat — semua ditulis untuk mendukung rutinitas harian Anda.</p>

    <div class="blog-grid">
      <?php
      $args = array('post_type' => 'post', 'posts_per_page' => 3);
      $recent_posts = new WP_Query($args);
      $idx = 1;
      if ($recent_posts->have_posts()) :
          while ($recent_posts->have_posts()) : $recent_posts->the_post();
              $cat = get_the_category();
              $cat_name = !empty($cat) ? $cat[0]->name : 'Artikel';
              $thumbnail_url = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_template_directory_uri().'/assets/dvn-banner-masalah.jpg';
              // Fallbacks based on index just to match aesthetic roughly
              if (!$thumbnail_url || strpos($thumbnail_url, 'dvn-banner-masalah') !== false) {
                  if($idx == 2) $thumbnail_url = get_template_directory_uri().'/assets/dvn-banner-bahan.jpg';
                  if($idx == 3) $thumbnail_url = get_template_directory_uri().'/assets/dvn-banner-manfaat.jpg';
              }
              $title = get_the_title();
              $excerpt = wp_trim_words(get_the_excerpt(), 15);
              $date = get_the_date('j M Y');
              $link = get_the_permalink();
      ?>
      <div class="blog-card reveal">
        <img src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($title); ?>" width="200" height="120" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:inherit;" draggable="false" oncontextmenu="return false;">
        <div class="blog-body">
          <span class="blog-cat"><?php echo esc_html($cat_name); ?></span>
          <div class="blog-title"><?php echo esc_html($title); ?></div>
          <div class="blog-excerpt"><?php echo esc_html($excerpt); ?></div>
          <div class="blog-meta">
            <div class="blog-meta-left">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
              <?php echo esc_html($date); ?>
            </div>
            <a href="<?php echo esc_url($link); ?>" class="blog-readmore" onclick="trackCTA('blog_read_<?php echo $idx; ?>')">
              Baca selengkapnya
              <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
          </div>
        </div>
      </div>
      <?php
          $idx++;
          endwhile;
          wp_reset_postdata();
      else :
      ?>
      <p style="text-align:center;padding:40px;color:var(--txt3);font-weight:600;">Belum ada artikel yang diterbitkan.</p>
      <?php endif; ?>
    </div><!-- end blog-grid -->

    <div style="text-align:center;">
      <a href="<?php echo esc_url(home_url("/blog")); ?>" class="blog-view-all" onclick="trackCTA(&#39;blog_view_all&#39;)">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
        Lihat Semua Artikel Kecantikan
      </a>
    </div>

  </div>
</section>

</main><!-- end #main-content -->

<!-- ===== DISCLAIMER SUPLEMEN (WAJIB BPOM) ===== -->
<div style="background:#fff8fb;border-top:1px solid var(--rose-100);padding:20px 20px;text-align:center;width:100%;">
  <div style="max-width:440px;margin:0 auto;">
    <p style="font-size:.68rem;color:#9b6070;line-height:1.7;">
      <strong style="color:var(--rose-600);">⚠️ Perhatian:</strong>
      DVN Dengan Collagen adalah <strong>suplemen makanan</strong>, bukan obat. Produk ini tidak dimaksudkan untuk mendiagnosis, mengobati, menyembuhkan, atau mencegah penyakit apapun. Konsumsi sesuai anjuran pada kemasan. Hasil penggunaan bersifat individual dan dapat berbeda pada setiap orang. Jika Anda memiliki kondisi kesehatan tertentu, sedang hamil/menyusui, atau sedang mengonsumsi obat-obatan, konsultasikan terlebih dahulu dengan tenaga kesehatan Anda sebelum mengonsumsi suplemen ini. Simpan di tempat sejuk dan kering, jauhkan dari jangkauan anak-anak. <strong>BPOM RI</strong> terdaftar • <strong>Halal MUI</strong> bersertifikat.
    </p>
  </div>
</div>

<!-- ===== FOOTER ===== -->

<!-- ┌──────────────────────────────────────────────────────────────┐
     │  DVN PROMO SLOT C — PRE-FOOTER  (sebelum footer)            │
     │  AKTIFKAN  : ganti  display:none  →  display:block          │
     │  GANTI ISI : edit pf_label, pf_title, pf_sub, teks tombol   │
     └──────────────────────────────────────────────────────────────┘ -->
<div id="dvn-slot-c" class="dvn-promo-zone" style="display: block !important;"><div class="dvn-promo-prefooter"><div class="dvn-pf-label">🎁 Promo Scarf Gratis</div><div class="dvn-pf-title">Beli 2 Box DVN → Bonus Scarf Eksklusif!</div><div class="dvn-pf-sub">Khusus bulan ini — scarf dikirim langsung bersama produk. Stok terbatas, segera klaim sebelum berakhir.</div><a href="<?php echo esc_url(get_theme_mod('wa_link', 'https://wa.me/6287866888808?text=Halo, saya ingin order DVN Collagen')); ?>" class="dvn-pf-btn" target="_blank" rel="noopener noreferrer"><svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"></path><path d="M12.004 0C5.374 0 0 5.373 0 12c0 2.117.554 4.104 1.523 5.827L.057 23.97l6.304-1.454A11.95 11.95 0 0012.004 24C18.63 24 24 18.626 24 12c0-6.627-5.37-12-11.996-12z"></path></svg> Tanya Promo Sekarang</a></div></div>

<!-- ===== FLOATING WA BUTTON ===== -->
<div class="floating-wrap">
  <div class="floating-label" style="transition: opacity 0.5s; opacity: 0;">💬 Chat Dealer Resmi</div>
  <a href="<?php echo esc_url(get_theme_mod('wa_link', 'https://wa.me/6287866888808?text=Halo, saya ingin order DVN Collagen')); ?>" onclick="trackCTA(&#39;floating_wa&#39;)" class="floating-btn" aria-label="Chat WhatsApp" target="_blank" rel="noopener noreferrer">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"></path>
      <path d="M12.004 0C5.374 0 0 5.373 0 12c0 2.117.554 4.104 1.523 5.827L.057 23.97l6.304-1.454A11.95 11.95 0 0012.004 24C18.63 24 24 18.626 24 12c0-6.627-5.37-12-11.996-12zm0 21.818a9.822 9.822 0 01-5.012-1.378l-.36-.213-3.733.861.893-3.621-.234-.373A9.77 9.77 0 012.182 12c0-5.421 4.4-9.818 9.822-9.818 5.42 0 9.819 4.397 9.819 9.818 0 5.421-4.4 9.818-9.819 9.818z"></path>
    </svg>
  </a>
</div>

<script>
// ===== NAVBAR SCROLL SHADOW =====
(function(){
  var nav = document.getElementById('siteNav');
  if(!nav) return;
  window.addEventListener('scroll', function(){
    if(window.scrollY > 40){
      nav.style.boxShadow = '0 4px 24px rgba(180,40,80,.13)';
    } else {
      nav.style.boxShadow = '0 2px 16px rgba(180,40,80,.08)';
    }
  }, { passive: true });
})();


// ===== FALLING PETALS (idle, respects reduced-motion) =====
(function() {
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  var c = document.getElementById('petals-container');
  if (!c) return;
  function spawnPetals() {
    for (var i = 0; i < 8; i++) {
      (function(idx) {
        setTimeout(function() {
          var p = document.createElement('div');
          p.className = 'petal';
          p.style.cssText = 'left:' + (Math.random()*100) + 'vw;animation-duration:' + (7+Math.random()*7) + 's;animation-delay:' + (Math.random()*6) + 's;width:' + (12+Math.random()*12) + 'px;height:' + (15+Math.random()*14) + 'px;transform:rotate(' + (Math.random()*360) + 'deg)';
          c.appendChild(p);
        }, idx * 500);
      })(i);
    }
  }
  if ('requestIdleCallback' in window) { requestIdleCallback(spawnPetals, {timeout:2000}); }
  else { setTimeout(spawnPetals, 1000); }
})();

// ===== SCROLL REVEAL =====
(function() {
  var els = document.querySelectorAll('.reveal');
  var io = new IntersectionObserver(function(entries) {
    entries.forEach(function(e) {
      if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); }
    });
  }, { threshold: 0.12 });
  els.forEach(function(el) { io.observe(el); });
})();

// ===== FAQ TOGGLE =====
function toggleFaq(btn) {
  var ans = btn.nextElementSibling;
  var isOpen = ans.classList.contains('open');
  document.querySelectorAll('.faq-a.open').forEach(function(a) {
    a.classList.remove('open');
    a.previousElementSibling.classList.remove('open');
  });
  if (!isOpen) { ans.classList.add('open'); btn.classList.add('open'); }
}

// ===== FLOATING LABEL HIDE AFTER 3s =====
setTimeout(function() {
  var lbl = document.querySelector('.floating-label');
  if (lbl) { lbl.style.transition = 'opacity .5s'; lbl.style.opacity = '0'; }
}, 3500);

// ===== SLIDER DOT INDICATORS =====
(function(){
  var dots = document.querySelectorAll('#sliderDots .slider-dot');
  var total = 5;
  var cardW = 250; // card 236px + gap 14px
  var cycleMs = 32000; // match sliderScroll animation duration
  var perCard = cycleMs / total;
  var current = 0;
  if(!dots.length) return;
  function setDot(i){
    dots.forEach(function(d,idx){ d.classList.toggle('active', idx===i); });
    current = i;
  }
  setInterval(function(){
    setDot((current + 1) % total);
  }, perCard);
})();

// ── Button ripple on click ──
document.querySelectorAll('.btn-main').forEach(function(btn){
  btn.addEventListener('click', function(e){
    var r = document.createElement('span');
    r.className = 'btn-ripple';
    var rect = btn.getBoundingClientRect();
    var size = Math.max(rect.width, rect.height);
    r.style.cssText = 'width:'+size+'px;height:'+size+'px;left:'+(e.clientX-rect.left-size/2)+'px;top:'+(e.clientY-rect.top-size/2)+'px;';
    btn.appendChild(r);
    setTimeout(function(){ r.remove(); }, 600);
  });
});
</script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dvn-shared.js" defer=""></script>

<script>
// ═══════════════════════════════════════════════════════
// INDEX PROMO ENGINE — membaca DVN_PROMO dari dvn-promo.js
// ═══════════════════════════════════════════════════════
(function(){
  var P = window.DVN_PROMO;
  var strip = document.getElementById('idxPromoStrip');

  // Guard: tidak aktif atau sudah habis
  if (!P || !P.active) {
    if (strip) strip.style.display = 'none';
    return;
  }
  if (P.endTime && Date.now() > P.endTime) {
    if (strip) strip.style.display = 'none';
    return;
  }

  // Tampilkan SEMUA zona promo (strip + detail card + slot-a + slot-c)
  document.querySelectorAll('.dvn-promo-zone').forEach(function(el) {
    // Strip pakai flex, yang lain block
    if (el.id === 'idxPromoStrip') el.style.display = 'flex';
    else el.style.removeProperty('display'); // hapus inline display:none jika ada
    el.style.setProperty('display', el.id === 'idxPromoStrip' ? 'flex' : 'block', 'important');
  });

  // Update konten dari config
  var titleEl = strip ? strip.querySelector('.idx-promo-title') : null;
  var ctaEl   = strip ? strip.querySelector('.idx-promo-cta') : null;
  if (titleEl) titleEl.textContent = 'Beli 2 Box → ' + (P.title || 'Promo Aktif');
  if (ctaEl && P.ctaUrl) ctaEl.href = P.ctaUrl;

  // Countdown dari DVN_PROMO.endTime
  function pad(n){ return String(n).padStart(2,'0'); }
  var endTime = P.endTime;

  function tick(){
    var rem = Math.max(0, endTime - Date.now());
    var h = Math.floor(rem / 3600000);
    var m = Math.floor((rem % 3600000) / 60000);
    var s = Math.floor((rem % 60000) / 1000);
    var elH = document.getElementById('idxCdH');
    var elM = document.getElementById('idxCdM');
    var elS = document.getElementById('idxCdS');
    if(elH) elH.textContent = pad(h);
    if(elM) elM.textContent = pad(m);
    if(elS) elS.textContent = pad(s);
    if(rem > 0) {
      setTimeout(tick, 1000);
    } else {
      // Promo habis — sembunyikan strip
      if(strip) strip.style.display = 'none';
    }
  }

  if(document.readyState === 'loading'){
    document.addEventListener('DOMContentLoaded', tick);
  } else { tick(); }
})();
</script>
<script>
/* ══ PHOTO PROTECTION ══ */
(function(){
  // Block right-click on images
  document.addEventListener('contextmenu', function(e){
    if(e.target.tagName === 'IMG'){ e.preventDefault(); return false; }
  });
  // Block drag
  document.addEventListener('dragstart', function(e){
    if(e.target.tagName === 'IMG'){ e.preventDefault(); return false; }
  });
  // Add draggable=false to all images
  document.querySelectorAll('img').forEach(function(img){
    img.setAttribute('draggable','false');
    img.setAttribute('oncontextmenu','return false;');
  });
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