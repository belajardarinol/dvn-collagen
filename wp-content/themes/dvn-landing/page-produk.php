<?php
/* Template Name: Produk Baru */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<script>
window.DVN_PROMO = {
  active:   <?php echo get_theme_mod('promo_active', true) ? 'true' : 'false'; ?>,
  id:       '<?php echo esc_js(get_theme_mod('promo_id', 'scarf-2box-mar2026')); ?>',
  type:     '<?php echo esc_js(get_theme_mod('promo_type', 'scarf')); ?>',
  endTime:  new Date('<?php echo esc_js(get_theme_mod('promo_endtime', '2026-03-31T23:59:00+07:00')); ?>').getTime(),
  badge:    '<?php echo esc_js(get_theme_mod('promo_badge', '🎁 Promo Aktif')); ?>',
  title:    '<?php echo esc_js(get_theme_mod('promo_title', 'Bonus Scarf Gratis!')); ?>',
  subtitle: '<?php echo esc_js(get_theme_mod('promo_subtitle', 'Khusus pembelian 2 Box DVN dengan collagen')); ?>',
  note:     '<?php echo esc_js(get_theme_mod('promo_note', 'Berlaku pembelian 2 Box · Scarf dikirim bersama produk · Stok terbatas')); ?>',
  motifs: [
    { name: 'Davina Blush',    emoji: '🌸' },
    { name: 'Davina Fiora',    emoji: '🌷' },
    { name: 'Davina Magnolia', emoji: '🌺' }
  ],
  waTextBase: '<?php echo esc_js(get_theme_mod('promo_wa_text', 'Halo Kak, saya mau order 2 Box DVN dengan collagen dan klaim bonus scarf! 🎁')); ?>',
  ctaUrl: '<?php echo esc_url(get_theme_mod("wa_link", "https://wa.me/6287866888808?text=Halo, saya ingin order DVN Collagen")); ?>'
};
</script>
</head>
<body <?php body_class(); ?>>
<a href="/produk?v=8#main" style="position:absolute;left:-9999px;top:4px;z-index:9999;background:var(--r600);color:white;padding:8px 16px;border-radius:4px;font-size:.85rem;font-weight:700;" onfocus="this.style.left=&#39;4px&#39;" onblur="this.style.left=&#39;-9999px&#39;">Lewati ke konten utama</a>

<!-- Topbar -->
<div class="topbar" aria-label="Informasi toko">
  🌸 Distributor Resmi DVN <span>·</span> ID Terverifikasi i1684 <span>·</span> 🏆 Superbrands 2024
</div>

<!-- Navbar -->

<!-- ┌──────────────────────────────────────────────────────────────┐
     │  DVN PROMO SLOT A — TOPBAR  (di atas navbar, 1 baris)       │
     │  AKTIFKAN  : ganti  display:none  →  display:block          │
     │  NONAKTIF  : ganti  display:block →  display:none           │
     │  GANTI ISI : edit teks "label" dan "cta" di bawah           │
     └──────────────────────────────────────────────────────────────┘ -->

<!-- ┌──────────────────────────────────────────────────────────────┐
     │  DVN PROMO SLOT B — CARD  (di dalam konten, setelah hero)   │
     │  AKTIFKAN  : ganti  display:none  →  display:block          │
     │  GANTI ISI : edit icon, tag, title, sub, dan teks tombol    │
     └──────────────────────────────────────────────────────────────┘ -->
<div id="dvn-slot-b" style="display:none;padding:0 16px 8px;">
<div class="dvn-promo-card" style="border-radius:20px;padding:16px 18px;display:flex;flex-direction:column;gap:10px;">
  <div style="display:flex;align-items:flex-start;gap:12px;">
    <div style="font-size:2rem;line-height:1;flex-shrink:0;">🎀</div>
    <div style="flex:1;">
      <div style="display:inline-block;background:var(--r600);color:white;font-size:.6rem;font-weight:900;letter-spacing:.07em;padding:2px 9px;border-radius:99px;text-transform:uppercase;margin-bottom:5px;">🎁 Promo Aktif</div>
      <div style="font-size:.92rem;font-weight:800;color:var(--r700);margin-bottom:3px;">Bonus Scarf Gratis<br>untuk Pembelian 2 Box!</div>
      <div style="font-size:.72rem;color:var(--txt2);line-height:1.5;">Khusus pembelian <strong style="color:var(--r600);">2 Box</strong> DVN dengan collagen. Pilih motif: <strong>Davina Blush 🌸</strong>, <strong>Fiora 🌷</strong>, atau <strong>Magnolia 🌺</strong>.</div>
    </div>
  </div>
  <a href="<?php echo esc_url(get_theme_mod('wa_link', 'https://wa.me/6287866888808?text=Halo, saya ingin order DVN Collagen')); ?>" class="dvn-pc-btn" target="_blank" rel="noopener noreferrer" style="display:flex;align-items:center;justify-content:center;gap:7px;color:white;font-weight:700;font-size:.82rem;padding:10px 18px;border-radius:12px;text-decoration:none;"><svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"></path><path d="M12.004 0C5.374 0 0 5.373 0 12c0 2.117.554 4.104 1.523 5.827L.057 23.97l6.304-1.454A11.95 11.95 0 0012.004 24C18.63 24 24 18.626 24 12c0-6.627-5.37-12-11.996-12z"></path></svg> Order 2 Box &amp; Klaim Bonus Scarf</a>
</div>
</div>
<div id="dvn-slot-a" class="dvn-promo-zone" style="display: block;"><div class="dvn-promo-topbar"><a href="/produk?v=8#scarfCard" style="display:flex;align-items:center;justify-content:center;gap:8px;padding:7px 16px;color:var(--r700);font-size:.72rem;font-weight:700;text-decoration:none;flex-wrap:wrap;"><span class="dvn-pt-badge">🎁 Promo Aktif</span><span>Beli <strong>2 Box</strong> Bonus Scarf Gratis! — Berakhir dalam</span><span class="dvn-cdown-wrap" style="background:var(--r600);"><span class="dvn-cdown" id="cdTopbar">419:25:32</span></span></a></div></div>
<nav class="nav" aria-label="Navigasi produk">
  <div class="nav-inner">
    <a href="<?php echo esc_url(home_url("/")); ?>" class="nav-back" aria-label="Kembali ke halaman utama">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="15 18 9 12 15 6"></polyline></svg>
      Beranda
    </a>
    <div class="nav-title">DVN</div>
    <a href="<?php echo esc_url(home_url("/produk")); ?>" id="navWaBtn" class="nav-cart" aria-label="Hubungi via WhatsApp" onclick="navWaClick(event)">
      <svg width="18" height="18" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"></path><path d="M12.004 0C5.374 0 0 5.373 0 12c0 2.117.554 4.104 1.523 5.827L.057 23.97l6.304-1.454A11.95 11.95 0 0012.004 24C18.63 24 24 18.626 24 12c0-6.627-5.37-12-11.996-12z"></path></svg>
    </a>
  </div>
</nav>

<main id="main-content">

<!-- Breadcrumb -->
<nav class="breadcrumb" aria-label="Navigasi roti remah">
  <a href="<?php echo esc_url(home_url("/")); ?>">Beranda</a>
  <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
  <span>Suplemen</span>
  <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
  <span style="color:var(--txt);font-weight:600">DVN dengan collagen</span>
</nav>

<!-- Product Gallery -->
<section class="product-gallery" aria-label="Gambar produk DVN dengan collagen">
  <div class="gallery-badge-row">
    <span class="gbadge gbadge-cert">
      <span class="cert-title">🛡️ BPOM RI Terdaftar</span>
      <span class="cert-num">POM SD235042031</span>
    </span>
    <span class="gbadge gbadge-cert">
      <span class="cert-title">☪ Halal MUI Resmi</span>
      <span class="cert-num">ID00410012348610323</span>
    </span>
    <span class="gbadge gbadge-gold">🏆 Superbrands 2024</span>
    <span class="gbadge gbadge-green">✓ GMP Certified</span>
  </div>

  <div class="gallery-main" id="galleryMain">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dvn-product-main.jpg" alt="DVN dengan collagen Chewable Tablet — Botol dan Kemasan" class="gallery-main-img" id="mainProductImg" width="600" height="600" style="width:100%;aspect-ratio:1;object-fit:contain;border-radius:16px;padding:8px;background:linear-gradient(135deg,#fff5f8,#fde4ed);" fetchpriority="high" draggable="false" oncontextmenu="return false;">
    <div class="gcert gcert-bpom">✓ BPOM RI<small style="display:block;font-size:.55rem;opacity:.75;margin-top:1px;">POM SD235042031</small></div>
    <div class="gcert gcert-halal">✓ Halal MUI<small style="display:block;font-size:.55rem;opacity:.75;margin-top:1px;">ID00410012348610323</small></div>
  </div>

  <div class="gallery-thumbs" role="list" aria-label="Pilihan gambar produk">
    <div class="gthumb active" onclick="switchImg(this,&#39;dvn-product-main.jpg&#39;)" role="listitem" tabindex="0" aria-label="Produk utama"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dvn-product-main.jpg" alt="DVN Produk" width="56" height="56" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:inherit;" draggable="false" oncontextmenu="return false;"></div>
    <div class="gthumb" onclick="switchImg(this,&#39;dvn-box.png&#39;)" role="listitem" tabindex="0" aria-label="Kemasan box"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dvn-box.png" alt="DVN Box" width="56" height="56" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:inherit;" draggable="false" oncontextmenu="return false;"></div>
    <div class="gthumb" onclick="switchImg(this,&#39;dvn-lifestyle-1.jpg&#39;)" role="listitem" tabindex="0" aria-label="Foto lifestyle"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dvn-lifestyle-1.jpg" alt="DVN Lifestyle" width="56" height="56" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:inherit;" draggable="false" oncontextmenu="return false;"></div>
    <div class="gthumb" onclick="switchImg(this,&#39;dvn-ingredients.jpg&#39;)" role="listitem" tabindex="0" aria-label="Bahan aktif"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dvn-ingredients.jpg" alt="DVN Ingredients" width="56" height="56" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:inherit;" draggable="false" oncontextmenu="return false;"></div>
  </div>
</section>

<!-- Product Info -->
<section class="product-info">

  <div class="product-brand">DVN × Dealer Resmi i1684</div>
  <h1 class="product-name"><?php echo esc_html(get_theme_mod("product_name", "DVN dengan collagen Chewable Tablet")); ?></h1>
  <p class="product-sub"><?php echo esc_html(get_theme_mod("product_sub", "Suplemen makanan tablet kunyah dengan 5 bahan aktif pilihan internasional. Mendukung kesehatan kulit dari dalam sebagai pelengkap rutinitas harian.")); ?></p>

  <!-- Rating Row -->
  <div class="rating-row" aria-label="Penilaian produk">
    <div class="stars-group" aria-label="4.8 bintang dari 5">
      <span class="star">★</span><span class="star">★</span><span class="star">★</span>
      <span class="star">★</span><span class="star" style="position:relative;overflow:hidden;display:inline-block;">
        <span style="position:absolute;left:0;top:0;width:80%;overflow:hidden;color:#f59e0b;">★</span>
        <span style="opacity:.25">★</span>
      </span>
    </div>
    <span class="rating-num"><?php echo esc_html(get_theme_mod("product_rating", "4.8")); ?></span>
    <span class="rating-sep">·</span>
    <span class="rating-count"><?php echo esc_html(get_theme_mod("product_reviews", "132.560 ulasan")); ?></span>
    <span class="rating-sep">·</span>
    <span class="sold-count"><?php echo esc_html(get_theme_mod("product_sold", "✓ 500.000+ terjual*")); ?></span>
  </div>
  <p style="font-size:.72rem;color:var(--txt3);margin-top:-10px;margin-bottom:14px;">*Berdasarkan data kumulatif distributor resmi.</p>

  <!-- Trust Strip -->
  <div class="trust-strip" aria-label="Jaminan produk">
    <div class="trust-chip">
      <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#e01055" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
      Produk Original
    </div>
    <div class="trust-chip">
      <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#e01055" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
      Tersegel
    </div>
    <div class="trust-chip">
      <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="#e01055" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
      Dealer Resmi i1684
    </div>
  </div>

  <!-- Price -->
  <div class="price-section">
    <div class="price-label">Harga</div>
    <div class="price-main-val">Hubungi via WhatsApp</div>
    <div class="price-note">Harga resmi tersedia melalui dealer terverifikasi ID <?php echo esc_html(get_theme_mod('distributor_id', 'i1684')); ?>.<br>Hubungi kami untuk penawaran terbaik hari ini.</div>
  </div>

  <!-- Qty -->
  <div class="qty-row">
    <span class="qty-label">Jumlah Box</span>
    <div class="qty-ctrl" aria-label="Pilih jumlah pembelian">
      <button class="qty-btn" onclick="changeQty(-1)" aria-label="Kurangi">−</button>
      <div class="qty-num" id="qtyNum" aria-live="polite">1</div>
      <button class="qty-btn" onclick="changeQty(1)" aria-label="Tambah">+</button>
    </div>
    <span style="font-size:.7rem;color:var(--txt3);flex:1;text-align:right;">maks. 2 box/order</span>
  </div>

  <!-- Order Summary -->
  <div id="orderSummary" style="background:var(--r50);border:1.5px solid var(--r100);border-radius:14px;padding:12px 14px;margin-bottom:16px;font-size:.8rem;">
    <div style="display:flex;justify-content:space-between;align-items:center;">
      <span style="color:var(--txt2);font-weight:600;">Ringkasan Pesanan</span>
      <span id="summaryBadge" style="background:var(--r600);color:white;padding:2px 10px;border-radius:99px;font-size:.68rem;font-weight:700;">1 Box</span>
    </div>
    <div style="margin-top:8px;font-size:.75rem;color:var(--txt3);line-height:1.6;" id="summaryDetail">📦 <?php echo esc_html(get_theme_mod("product_name", "DVN dengan collagen Chewable Tablet")); ?> × 1<br>🏷️ Dealer Resmi ID: <?php echo esc_html(get_theme_mod('distributor_id', 'i1684')); ?><br>💬 Harga dikonfirmasi via WhatsApp</div>
  </div>


  <!-- Promo + Scarf Selector (satu blok terpadu) -->
  <div class="scarf-promo-card rv dvn-promo-zone vis" id="scarfCard" style="display: block;">
    <!-- Banner header -->
    <div class="sp-banner" id="scarfCard">
      <div class="sp-banner-icon">🎀</div>
      <div class="sp-banner-text">
        <div class="sp-eyebrow">Promo Eksklusif</div>
        <div class="sp-title">Bonus Scarf Gratis!</div>
        <div class="sp-sub">Khusus pembelian <strong style="color:white;">2 Box</strong> DVN dengan collagen</div>
        <div class="sp-countdown-row">
          <span class="sp-cdown-label">⏱ Promo berakhir:</span>
          <span class="sp-cdown-unit"><span class="sp-cdown-num" id="cdH">419</span><span class="sp-cdown-sub">jam</span></span>
          <span style="color:rgba(255,255,255,.7);font-weight:900;font-size:.9rem;align-self:flex-start;margin-top:2px;">:</span>
          <span class="sp-cdown-unit"><span class="sp-cdown-num" id="cdM">25</span><span class="sp-cdown-sub">menit</span></span>
          <span style="color:rgba(255,255,255,.7);font-weight:900;font-size:.9rem;align-self:flex-start;margin-top:2px;">:</span>
          <span class="sp-cdown-unit"><span class="sp-cdown-num" id="cdS">32</span><span class="sp-cdown-sub">detik</span></span>
        </div>
      </div>
    </div>
    <!-- Body -->
    <div class="sp-body">
      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/promo-scarf.jpg" alt="Pilih Motif Scarf DVN" class="sp-img" loading="lazy" draggable="false" oncontextmenu="return false;">
      <div class="sp-motifs" id="scarfMotifContainer"><div class="sp-btn" onclick="pickScarf(&#39;Davina Blush&#39;, this)"><span class="sp-emoji">🌸</span>Davina Blush</div><div class="sp-btn" onclick="pickScarf(&#39;Davina Fiora&#39;, this)"><span class="sp-emoji">🌷</span>Davina Fiora</div><div class="sp-btn" onclick="pickScarf(&#39;Davina Magnolia&#39;, this)"><span class="sp-emoji">🌺</span>Davina Magnolia</div></div>
      <div class="sp-confirm" id="scarfMsg">Ketuk motif pilihanmu 👆</div>
      <p class="sp-note">Berlaku pembelian 2 Box · Scarf dikirim bersama produk · Stok terbatas</p>
    </div>
  </div>

  <!-- CTAs -->
  <div class="cta-row">
    <a id="btnOrder" href="<?php echo esc_url(home_url("/produk")); ?>" onclick="goOrder(event)" class="btn-wa">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"></path><path d="M12.004 0C5.374 0 0 5.373 0 12c0 2.117.554 4.104 1.523 5.827L.057 23.97l6.304-1.454A11.95 11.95 0 0012.004 24C18.63 24 24 18.626 24 12c0-6.627-5.37-12-11.996-12z"></path></svg>
      <span id="btnOrderLabel">Order 1 Box via WhatsApp</span>
    </a>
    <a id="btnInfo" href="<?php echo esc_url(home_url("/produk")); ?>" onclick="goInfo(event)" class="btn-info">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
      Tanya Informasi Produk
    </a>
  </div>

  <!-- Delivery Strip -->
  <div class="delivery-strip rv vis">
    <div class="delivery-item">
      <div class="delivery-icon">📦</div>
      <div><strong style="display:block;font-weight:700;margin-bottom:1px">Pengiriman ke Seluruh Indonesia</strong>Estimasi sesuai jasa kurir yang dipilih</div>
    </div>
    <div class="delivery-item">
      <div class="delivery-icon">🔒</div>
      <div><strong style="display:block;font-weight:700;margin-bottom:1px">Kemasan Tersegel Aman</strong>Produk original dari distributor resmi</div>
    </div>
    <div class="delivery-item">
      <div class="delivery-icon">💬</div>
      <div><strong style="display:block;font-weight:700;margin-bottom:1px">Dukungan via WhatsApp</strong>Jam operasional 08.00–22.00 WIB</div>
    </div>
  </div>

</section><!-- end product-info -->

<!-- Tabs -->

<!-- ═══ PRODUCT TABS (2 only: Info & Ulasan) ═══ -->



<!-- ═══════ TAB NAVIGATION ═══════ -->
<div class="dvn-tabs" id="dvnTabNav">
  <button class="dvn-tab" data-active="true" onclick="dvnTab(&#39;detail&#39;)">Detail</button>
  <button class="dvn-tab" data-active="false" onclick="dvnTab(&#39;ulasan&#39;)">Ulasan (132.560)</button>
  <button class="dvn-tab" data-active="false" onclick="dvnTab(&#39;cara&#39;)">Cara Pakai</button>
  <button class="dvn-tab" data-active="false" onclick="dvnTab(&#39;spek&#39;)">Spesifikasi</button>
</div>

<!-- ═══════ TAB: DETAIL ═══════ -->
<div class="dvn-panel" id="p-detail" style="display:block;">
<!-- ===== PERBANDINGAN ===== -->
  <div class="comp-wrap rv vis">
    <div class="comp-head">
      <span class="comp-eyebrow">INFORMASI PRODUK</span>
      <h2 class="comp-title">Kenali Produk <em>DVN dengan collagen</em></h2>
      <p class="comp-subtitle">Mengapa suplemen dari dalam lebih unggul?</p>
    </div>
    <table class="ctb">
      <thead>
        <tr>
          <th>Fitur</th>
          <th>Produk Topikal</th>
          <th>DVN dengan collagen</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Jenis Produk</td>
          <td><span class="gc">Diaplikasikan di luar</span></td>
          <td class="dc"><span class="ck">✓</span> Suplemen oral</td>
        </tr>
        <tr>
          <td>Terdaftar BPOM RI</td>
          <td><span class="gc">Sebagian besar</span></td>
          <td class="dc"><span class="ck">✓</span> <strong>Terdaftar</strong><span class="cn">No. POM SD235042031</span></td>
        </tr>
        <tr>
          <td>Bersertifikat Halal MUI</td>
          <td><span class="gc">Bervariasi</span></td>
          <td class="dc"><span class="ck">✓</span> <strong>Bersertifikat</strong><span class="cn">No. ID00410012348610323</span></td>
        </tr>
        <tr>
          <td>Standar Produksi</td>
          <td><span class="gc">Bervariasi</span></td>
          <td class="dc"><span class="ck">✓</span> GMP Certified</td>
        </tr>
        <tr>
          <td>Bentuk Konsumsi</td>
          <td><span class="gc">Dioleskan / diaplikasikan</span></td>
          <td class="dc"><span class="ck">✓</span> Tablet kunyah</td>
        </tr>
        <tr>
          <td>Penghargaan</td>
          <td><span class="gc">Bervariasi</span></td>
          <td class="dc"><span class="ck">✓</span> Superbrands 2024</td>
        </tr>
      </tbody>
    </table>
    <p class="comp-note">*Perbandingan umum. DVN dengan collagen adalah suplemen makanan, bukan obat.</p>
  </div>

<!-- Bahan Aktif -->
  <div class="detail-section rv vis">
    <h2 class="detail-heading">Kandungan Bahan Aktif</h2>
    <div class="ingr-grid">

      <div class="ingr-item">
        <div class="ingr-icon">🧬</div>
        <div>
          <div class="ingr-name">Hydrolyzed Collagen</div>
          <div class="ingr-origin">Bahan Aktif Utama</div>
          <div class="ingr-desc">Kolagen yang telah melalui proses hidrolisis sehingga memiliki ukuran molekul lebih kecil. Merupakan sumber protein yang dapat dikonsumsi sebagai suplemen harian.</div>
          <div class="ingr-disclaimer">Suplemen makanan. Bukan pengganti makanan bergizi seimbang.</div>
        </div>
      </div>

      <div class="ingr-item">
        <div class="ingr-icon">⚡</div>
        <div>
          <div class="ingr-name">L-Glutathione</div>
          <div class="ingr-origin">Antioksidan</div>
          <div class="ingr-desc">Antioksidan alami yang diproduksi tubuh. Sebagai suplemen, L-Glutathione digunakan sebagai bagian dari rutinitas gaya hidup sehat.</div>
          <div class="ingr-disclaimer">Konsumsi sesuai anjuran. Tidak ditujukan sebagai obat.</div>
        </div>
      </div>

      <div class="ingr-item">
        <div class="ingr-icon">💧</div>
        <div>
          <div class="ingr-name">Sodium Hyaluronate</div>
          <div class="ingr-origin">Formulasi Prancis</div>
          <div class="ingr-desc">Bentuk garam dari asam hialuronat. Digunakan sebagai komponen dalam formulasi suplemen kecantikan internasional.</div>
          <div class="ingr-disclaimer">Suplemen makanan, bukan produk medis.</div>
        </div>
      </div>

      <div class="ingr-item">
        <div class="ingr-icon">🍊</div>
        <div>
          <div class="ingr-name">Vitamin C (Ascorbic Acid)</div>
          <div class="ingr-origin">Vitamin Esensial</div>
          <div class="ingr-desc">Vitamin yang larut dalam air. Berperan penting dalam berbagai fungsi tubuh dan diakui manfaatnya dalam mendukung kesehatan secara umum.</div>
          <div class="ingr-disclaimer">Kebutuhan harian berbeda tiap individu. Konsultasikan dengan dokter jika perlu.</div>
        </div>
      </div>

      <div class="ingr-item">
        <div class="ingr-icon">🍎</div>
        <div>
          <div class="ingr-name">Pomegranate Extract</div>
          <div class="ingr-origin">Ekstrak Buah</div>
          <div class="ingr-desc">Ekstrak buah delima yang mengandung berbagai senyawa alami. Digunakan dalam formulasi suplemen kesehatan dan kecantikan.</div>
          <div class="ingr-disclaimer">Kandungan ekstrak sesuai formulasi produk. Lihat kemasan untuk detail.</div>
        </div>
      </div>

    </div>
  </div>

  <!-- Manfaat -->
  <div class="detail-section rv vis">
    <h2 class="detail-heading">Manfaat Pendukung*</h2>
    <div class="benefit-list2">
      <div class="benefit-item2">
        <div class="benefit-dot">1</div>
        <div class="benefit-text">
          <strong>Mendukung Asupan Protein Harian</strong>
          Hydrolyzed Collagen sebagai sumber protein tambahan untuk melengkapi kebutuhan nutrisi sehari-hari.
        </div>
      </div>
      <div class="benefit-item2">
        <div class="benefit-dot">2</div>
        <div class="benefit-text">
          <strong>Sumber Antioksidan dari Suplemen</strong>
          Kombinasi L-Glutathione dan Vitamin C sebagai asupan antioksidan tambahan dari suplemen.
        </div>
      </div>
      <div class="benefit-item2">
        <div class="benefit-dot">3</div>
        <div class="benefit-text">
          <strong>Melengkapi Rutinitas Perawatan Diri</strong>
          Tablet kunyah yang praktis dan mudah dikonsumsi sebagai bagian dari gaya hidup sehat harian.
        </div>
      </div>
      <div class="benefit-item2">
        <div class="benefit-dot">4</div>
        <div class="benefit-text">
          <strong>Formulasi Bahan Internasional</strong>
          Menggunakan bahan-bahan yang umum digunakan dalam industri suplemen kecantikan internasional.
        </div>
      </div>
      <div class="benefit-item2">
        <div class="benefit-dot">5</div>
        <div class="benefit-text">
          <strong>Pilihan Praktis &amp; Mudah Dikonsumsi</strong>
          Bentuk tablet kunyah memudahkan konsumsi harian tanpa perlu air, cocok untuk gaya hidup aktif.
        </div>
      </div>
    </div>

    <div class="bpom-note" role="note">
      <strong>⚠️ Perhatian Penting (Sesuai Regulasi BPOM RI):</strong><br>
      *DVN dengan collagen adalah <strong>suplemen makanan</strong>, bukan obat. Produk ini tidak dimaksudkan untuk mendiagnosis, mengobati, menyembuhkan, atau mencegah penyakit apapun. Manfaat yang tercantum merupakan fungsi pendukung gaya hidup sehat, bukan klaim medis. Konsumsi sesuai anjuran pada kemasan. Hasil tiap individu berbeda-beda. Konsultasikan dengan tenaga kesehatan jika memiliki kondisi kesehatan khusus, sedang hamil/menyusui, atau mengonsumsi obat-obatan.
    </div>
</div>

</div>

<!-- ═══════ TAB: ULASAN ═══════ -->
<div class="dvn-panel" id="p-ulasan" style="display:none;">
<div class="review-summary rv">
    <div style="display:flex;gap:16px;align-items:flex-start">
      <div style="text-align:center;">
        <div style="font-size:2.2rem;font-weight:800;color:var(--r600);line-height:1;">4.8</div>
        <div style="color:#f59e0b;font-size:.9rem;margin:4px 0;">★★★★★</div>
        <div style="font-size:.7rem;color:var(--txt3);">132.560 ulasan</div>
      </div>
      <div style="flex:1;">
        <div style="display:flex;align-items:center;gap:6px;margin:3px 0;font-size:.72rem;">
          <span style="width:12px;">5</span>
          <div style="flex:1;height:6px;background:#f3e8ff;border-radius:3px;overflow:hidden;"><div style="width:76%;height:100%;background:#f59e0b;border-radius:3px;"></div></div>
          <span style="color:var(--txt3);width:44px;text-align:right;">100.200</span>
        </div>
        <div style="display:flex;align-items:center;gap:6px;margin:3px 0;font-size:.72rem;">
          <span style="width:12px;">4</span>
          <div style="flex:1;height:6px;background:#f3e8ff;border-radius:3px;overflow:hidden;"><div style="width:24%;height:100%;background:#f59e0b;border-radius:3px;"></div></div>
          <span style="color:var(--txt3);width:44px;text-align:right;">32.200</span>
        </div>
        <div style="display:flex;align-items:center;gap:6px;margin:3px 0;font-size:.72rem;">
          <span style="width:12px;">3</span>
          <div style="flex:1;height:6px;background:#f3e8ff;border-radius:3px;overflow:hidden;"><div style="width:0.5%;height:100%;background:#f59e0b;border-radius:3px;"></div></div>
          <span style="color:var(--txt3);width:44px;text-align:right;">90</span>
        </div>
        <div style="display:flex;align-items:center;gap:6px;margin:3px 0;font-size:.72rem;">
          <span style="width:12px;">2</span>
          <div style="flex:1;height:6px;background:#f3e8ff;border-radius:3px;overflow:hidden;"><div style="width:0.3%;height:100%;background:#f59e0b;border-radius:3px;"></div></div>
          <span style="color:var(--txt3);width:44px;text-align:right;">50</span>
        </div>
        <div style="display:flex;align-items:center;gap:6px;margin:3px 0;font-size:.72rem;">
          <span style="width:12px;">1</span>
          <div style="flex:1;height:6px;background:#f3e8ff;border-radius:3px;overflow:hidden;"><div style="width:0.1%;height:100%;background:#f59e0b;border-radius:3px;"></div></div>
          <span style="color:var(--txt3);width:44px;text-align:right;">20</span>
        </div>
      </div>
    </div>
  </div>

  <div style="display:flex;gap:6px;overflow-x:auto;margin:12px 0;padding-bottom:4px;">
    <button onclick="filterR(this,&#39;all&#39;)" class="filt active" style="padding:5px 12px;border-radius:16px;border:1px solid #fde8ef;background:var(--r600);color:#fff;font-size:.72rem;font-weight:600;cursor:pointer;white-space:nowrap;">Semua</button>
    <button onclick="filterR(this,&#39;5&#39;)" class="filt" style="padding:5px 12px;border-radius:16px;border:1px solid #fde8ef;background:#fff;color:var(--txt2);font-size:.72rem;font-weight:600;cursor:pointer;white-space:nowrap;">★ 5</button>
    <button onclick="filterR(this,&#39;4&#39;)" class="filt" style="padding:5px 12px;border-radius:16px;border:1px solid #fde8ef;background:#fff;color:var(--txt2);font-size:.72rem;font-weight:600;cursor:pointer;white-space:nowrap;">★ 4</button>
    <button onclick="filterR(this,&#39;3&#39;)" class="filt" style="padding:5px 12px;border-radius:16px;border:1px solid #fde8ef;background:#fff;color:var(--txt2);font-size:.72rem;font-weight:600;cursor:pointer;white-space:nowrap;">★ 3</button>
    <button onclick="filterR(this,&#39;foto&#39;)" class="filt" style="padding:5px 12px;border-radius:16px;border:1px solid #fde8ef;background:#fff;color:var(--txt2);font-size:.72rem;font-weight:600;cursor:pointer;white-space:nowrap;">📸 Dengan Foto</button>
  </div>

  <div class="review-cards" id="reviewList">
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">B</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Bunda Sari <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">2 minggu lalu · Yogyakarta</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Alhamdulillah paketnya sudah sampai. Langsung diterapin tips pemakaian dan tips dari dealernya. Praktis banget tablet kunyahnya.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_01.jpg" alt="Foto review Bunda Sari" width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(2847+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (2.847)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">O</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Odya S. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">3 minggu lalu · Jakarta</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Maksi ya paketnya udah sampe! Langsung verifikasi keaslian produk lewat QR code dan ternyata memang original. Seneng banget!”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_02.jpg" alt="Foto review Odya S." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(3291+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (3.291)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">B</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Bunda Rina <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">1 bulan lalu · Semarang</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 2 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Beli 2 box sekaligus biar hemat. Pengiriman aman, dikemas rapi pakai bubble wrap. Produk DVN asli tersegel semua.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_03.jpg" alt="Foto review Bunda Rina" width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(4108+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (4.108)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">L</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Lina M. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">1 bulan lalu · Bandung</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 2 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Repeat order ke-2 karena memang suka sama produknya. Dealer resmi yang ini memang recommended, fast response dan ramah.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_04.jpg" alt="Foto review Lina M." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(1943+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (1.943)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">D</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Dewi A. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">6 minggu lalu · Surabaya</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Baru pertama kali coba suplemen kolagen tablet kunyah. Rasanya enak dan ga bikin mual. Suka banget!”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_07.jpg" alt="Foto review Dewi A." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(2156+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (2.156)</button></div>
</div>
<div class="review-card rv" data-stars="4" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">F</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Fitri N. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">3 minggu lalu · Bekasi</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★<span style="opacity:.2">★</span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Produk bagus, kemasan rapi dan tersegel. Bintang 4 karena baru mulai konsumsi jadi belum bisa review hasilnya.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_08.jpg" alt="Foto review Fitri N." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_09.jpg" alt="Foto review Fitri N." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(1782+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (1.782)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">R</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Ratna W. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">2 bulan lalu · Tangerang</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 2 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Dealer resmi ini pelayanannya top! Dijawab semua pertanyaan saya tentang cara konsumsi. Produk asli 100%.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_10.jpg" alt="Foto review Ratna W." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(3674+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (3.674)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">M</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Mega P. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">1 bulan lalu · Depok</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Senang banget bisa konsumsi suplemen yang sudah terdaftar BPOM dan Halal MUI. Jadi lebih tenang.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_12.jpg" alt="Foto review Mega P." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_13.jpg" alt="Foto review Mega P." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(2518+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (2.518)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">T</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Tari K. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">3 minggu lalu · Bogor</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Kualitas produk sangat baik. Kemasan elegan dan premium. Cocok untuk hadiah juga.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_14.jpg" alt="Foto review Tari K." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(1629+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (1.629)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">V</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Vina R. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">2 bulan lalu · Malang</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 2 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Beli 2 botol sekaligus. Kemasan original dengan segel Wellous. Tablet kunyahnya enak rasa yuzu.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_15.jpg" alt="Foto review Vina R." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(3947+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (3.947)</button></div>
</div>
<div class="review-card rv" data-stars="4" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">S</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Siti H. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">1 bulan lalu · Jakarta</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★<span style="opacity:.2">★</span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Produk sampai dengan selamat. Ukuran botol compact, mudah dibawa kemana-mana. Rasa yuzu segar.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_16.jpg" alt="Foto review Siti H." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_17.jpg" alt="Foto review Siti H." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(15+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (15)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">A</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Anisa D. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">6 minggu lalu · Cirebon</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Unboxing produk DVN, kemasannya cantik banget! Ada logo Halal MUI di boxnya. Produk original tersegel.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_18.jpg" alt="Foto review Anisa D." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(29+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (29)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">N</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Nadia F. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">2 minggu lalu · Solo</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Sudah 3 minggu rutin konsumsi. Suka sama prosesnya, tinggal kunyah dan selesai. Praktis!”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_19.jpg" alt="Foto review Nadia F." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_20.jpg" alt="Foto review Nadia F." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(34+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (34)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">W</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Wulan S. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">1 bulan lalu · Medan</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Pengiriman ke Medan cepat dan aman. Produk sealed dengan scratch code verifikasi keaslian.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_21.jpg" alt="Foto review Wulan S." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_22.jpg" alt="Foto review Wulan S." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(25+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (25)</button></div>
</div>
<div class="review-card rv" data-stars="4" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">I</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Indah L. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">3 minggu lalu · Palembang</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★<span style="opacity:.2">★</span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Bagus sih produknya, cuma mau kasih saran kalau ada varian rasa lain juga pasti lebih menarik.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_23.jpg" alt="Foto review Indah L." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(11+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (11)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">K</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Karina B. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">2 bulan lalu · Denpasar</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 2 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Beli 2 box untuk stok 2 bulan. Worth it banget! Lebih hemat dan ga perlu order tiap bulan.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_25.jpg" alt="Foto review Karina B." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(55+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (55)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">P</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Putri M. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">1 bulan lalu · Makassar</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Sampai ke Makassar aman sentosa. Produk original dengan kemasan tersegel rapi. Recommended dealer!”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_26.jpg" alt="Foto review Putri M." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(17+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (17)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">H</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Hana Y. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">3 minggu lalu · Lampung</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 2 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Satu buat aku, satu buat mamah. Kami berdua suka! Tablet kunyahnya enak, bukan pil yang susah ditelan.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_28.jpg" alt="Foto review Hana Y." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_29.jpg" alt="Foto review Hana Y." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(42+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (42)</button></div>
</div>
<div class="review-card rv" data-stars="4" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">B</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Bella T. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">6 minggu lalu · Pontianak</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★<span style="opacity:.2">★</span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Produk asli dan berkualitas. Pengiriman ke Pontianak agak lama tapi dikemas dengan sangat baik.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_30.jpg" alt="Foto review Bella T." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_31.jpg" alt="Foto review Bella T." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(14+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (14)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">Z</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Zahra A. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">2 minggu lalu · Balikpapan</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Baru mulai konsumsi seminggu. Sejauh ini suka sama rasa dan teksturnya. Semoga hasilnya bagus!”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_32.jpg" alt="Foto review Zahra A." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_33.jpg" alt="Foto review Zahra A." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(20+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (20)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">C</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Citra E. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">1 bulan lalu · Manado</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Seneng banget akhirnya nemu suplemen kolagen yang halal dan BPOM. Banyak yang jual tapi ga jelas legalitasnya.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_34.jpg" alt="Foto review Citra E." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_35.jpg" alt="Foto review Citra E." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(31+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (31)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">D</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Dhia R. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">2 bulan lalu · Batam</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 2 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Reorder! Favorit aku karena praktis dan efisien. Tinggal kunyah 2 tablet sehari, done!”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_36.jpg" alt="Foto review Dhia R." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_37.jpg" alt="Foto review Dhia R." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(39+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (39)</button></div>
</div>
<div class="review-card rv" data-stars="3" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">N</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Novita W. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">3 minggu lalu · Jakarta</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★<span style="opacity:.2">★★</span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Produknya oke, tapi ekspektasi aku yang terlalu tinggi. Perlu konsistensi dan sabar ya ternyata.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_38.jpg" alt="Foto review Novita W." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_39.jpg" alt="Foto review Novita W." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(8+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (8)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">B</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Bu Endang <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">2 bulan lalu · Bandung</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 2 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Alhamdulillah sudah konsumsi DVN rutin. Ini foto wajah saya setelah pemakaian. Merasa lebih percaya diri sekarang.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_40.jpg" alt="Foto review Bu Endang" width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_41.jpg" alt="Foto review Bu Endang" width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(67+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (67)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">D</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Dian N. <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">1 bulan lalu · Surabaya</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Kulit tangan dan badan terasa lebih halus setelah rutin konsumsi. Senang banget sama hasilnya!”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_43.jpg" alt="Foto review Dian N." width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(44+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (44)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">B</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Bu Yanti <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">6 minggu lalu · Jakarta</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 2 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Alhamdulillah udah menipis flek di wajah setelah pemakaian rutin. Muka saya sekarang lebih cerah rasanya.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_44.jpg" alt="Foto review Bu Yanti" width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(72+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (72)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">I</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Ibu Mira <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">1 bulan lalu · Semarang</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 2 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Konsumsi rutin DVN sambil jaga pola makan. Kulit wajah terasa lebih lembab dan kenyal.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_46.jpg" alt="Foto review Ibu Mira" width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_47.jpg" alt="Foto review Ibu Mira" width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(35+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (35)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">B</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Bu Aminah <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">2 bulan lalu · Yogyakarta</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 2 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Ini perbandingan wajah saya sebelum dan setelah konsumsi DVN. Alhamdulillah ada perubahan yang saya rasakan.”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_48.jpg" alt="Foto review Bu Aminah" width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(58+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (58)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">M</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Mbak Eka <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">3 minggu lalu · Bekasi</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Pemakaian 21 hari dan alhamdulillah ada perbedaan yang saya rasakan di kulit wajah. Akan lanjut konsumsi!”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_49.jpg" alt="Foto review Mbak Eka" width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(63+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (63)</button></div>
</div>
<div class="review-card rv" data-stars="5" data-foto="yes">
  <div class="rc-header" style="display:flex;gap:10px;align-items:center;">
    <div style="background:linear-gradient(135deg,#fde8ef,#fcc9da);color:#e01055;width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:.85rem;flex-shrink:0;">M</div>
    <div>
      <div style="font-weight:700;font-size:.82rem;">Mbak Nisa <span style="color:#e01055;font-size:.7rem;">✓ Pembeli Terverifikasi</span></div>
      <div style="font-size:.7rem;color:#888;">1 bulan lalu · Semarang</div>
    </div>
  </div>
  <div style="color:#f59e0b;font-size:.85rem;margin:6px 0 4px;">★★★★★<span style="opacity:.2"></span></div>
  <div style="display:inline-block;font-size:.68rem;background:#fde8ef;color:#e01055;padding:2px 8px;border-radius:4px;font-weight:600;margin-bottom:6px;">DVN dengan collagen – 1 Box</div>
  <p style="font-size:.82rem;line-height:1.6;color:#444;margin:6px 0;">“Ke badan juga alhamdulillah terasa lebih fresh. Seneng banget bisa nemuin produk yang cocok!”</p>
  <div class="rc-photos"><div class="rc-photo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/review_51.jpg" alt="Foto review Mbak Nisa" width="68" height="68" loading="lazy" style="width:100%;height:100%;object-fit:cover;border-radius:9px;" draggable="false" oncontextmenu="return false;"></div></div>
  <div style="font-size:.68rem;color:#888;font-style:italic;margin-top:6px;">Pengalaman pribadi. Hasil dapat berbeda tiap individu.</div>
  <div style="margin-top:6px;"><button onclick="this.textContent=&#39;👍 Ya (&#39;+(47+1)+&#39;)&#39;;this.disabled=true;this.style.opacity=&#39;.5&#39;" style="font-size:.7rem;padding:3px 10px;border:1px solid #eee;border-radius:12px;background:#fff;cursor:pointer;">Apakah membantu? 👍 Ya (47)</button></div>
</div>
</div>
  <div style="font-size:.68rem;color:var(--txt3);text-align:center;margin-top:16px;padding:12px;background:var(--pk);border-radius:8px;">
    Semua ulasan adalah pengalaman pribadi pembeli terverifikasi. Pengalaman dan hasil penggunaan bersifat individual dan dapat berbeda pada setiap orang. DVN dengan collagen adalah suplemen makanan, bukan obat.
  </div>
  <a href="/dvn-ulasan.html?v=8" style="display:block;text-align:center;padding:12px;margin-top:12px;color:var(--r600);font-weight:700;font-size:.85rem;">
    Lihat Semua 132.560 Ulasan →
  </a>
</div>

<!-- ═══════ TAB: CARA PAKAI ═══════ -->
<div class="dvn-panel" id="p-cara" style="display:none;">
<div class="detail-section rv">
    <h2 class="detail-heading">Cara Konsumsi</h2>
    <div class="usage-steps">
      <div class="usage-step">
        <div class="step-num">1</div>
        <div class="step-text"><strong style="display:block;font-weight:700;margin-bottom:2px">Baca Aturan Pakai</strong>Selalu baca dan ikuti aturan konsumsi yang tertera pada kemasan produk.</div>
      </div>
      <div class="usage-step">
        <div class="step-num">2</div>
        <div class="step-text"><strong style="display:block;font-weight:700;margin-bottom:2px">Konsumsi Sesuai Anjuran</strong>Konsumsi tablet kunyah sesuai dosis yang dianjurkan. Kunyah hingga halus sebelum ditelan.</div>
      </div>
      <div class="usage-step">
        <div class="step-num">3</div>
        <div class="step-text"><strong style="display:block;font-weight:700;margin-bottom:2px">Waktu Konsumsi</strong>Dapat dikonsumsi sebelum atau sesudah makan. Untuk konsistensi, pilih waktu yang sama setiap hari.</div>
      </div>
      <div class="usage-step">
        <div class="step-num">4</div>
        <div class="step-text"><strong style="display:block;font-weight:700;margin-bottom:2px">Konsumsi Rutin</strong>Konsumsi secara teratur sesuai anjuran untuk mendapatkan manfaat optimal dari suplemen.</div>
      </div>
    </div>

    <div class="bpom-note" style="margin-top:16px">
      <strong>⚠️ Peringatan Keamanan:</strong><br>
      Simpan di tempat sejuk dan kering, terhindar dari sinar matahari langsung. Jauhkan dari jangkauan anak-anak. Jangan dikonsumsi jika kemasan rusak atau tersegel tidak sempurna. Hentikan konsumsi dan konsultasikan dengan dokter jika terjadi reaksi yang tidak diinginkan. Tidak dianjurkan untuk ibu hamil dan menyusui tanpa konsultasi dokter. Bukan pengganti makanan bergizi seimbang dan pola hidup sehat.
    </div>
  </div>
</div>

<!-- ═══════ TAB: SPESIFIKASI ═══════ -->
<div class="dvn-panel" id="p-spek" style="display:none;">
<div class="detail-section rv">
    <h2 class="detail-heading">Spesifikasi Produk</h2>
    <table class="specs-table">
      <tbody>
        <tr><td>Nama Produk</td><td>DVN dengan collagen Chewable Tablet</td></tr>
        <tr><td>Jenis</td><td>Suplemen Makanan</td></tr>
        <tr><td>Bentuk Sediaan</td><td>Tablet Kunyah</td></tr>
        <tr><td>Registrasi BPOM</td><td>Terdaftar BPOM RI ✓<br><span style="font-size:.7rem;color:var(--r600);font-weight:700;">No. POM SD235042031</span></td></tr>
        <tr><td>Sertifikasi Halal</td><td>Halal MUI ✓<br><span style="font-size:.7rem;color:var(--green);font-weight:700;">No. ID00410012348610323</span></td></tr>
        <tr><td>Standar Produksi</td><td>GMP Certified ✓</td></tr>
        <tr><td>Penghargaan</td><td>Superbrands Worldwide 2024</td></tr>
        <tr><td>Bahan Aktif</td><td>Hydrolyzed Collagen, L-Glutathione, Sodium Hyaluronate, Vitamin C, Pomegranate Extract</td></tr>
        <tr><td>Asal Formulasi</td><td>Internasional (Jepang, Korea, Prancis)</td></tr>
        <tr><td>Target Pengguna</td><td>Dewasa pria dan wanita</td></tr>
        <tr><td>Dealer Resmi</td><td>DVN × RAYA | ID: <?php echo esc_html(get_theme_mod('distributor_id', 'i1684')); ?></td></tr>
        <tr><td>Cara Penyimpanan</td><td>Simpan di tempat sejuk dan kering, hindari sinar matahari langsung</td></tr>
        <tr><td>Catatan</td><td>Suplemen makanan, bukan obat. Tidak mendiagnosis, mengobati, atau menyembuhkan penyakit.</td></tr>
      </tbody>
    </table>
  </div>
</div>

</main>



<!-- ===== BPOM DISCLAIMER ===== -->
<div style="background:#fff8fb;border-top:1.5px solid var(--r100);padding:18px 16px;text-align:center;">
  <div style="max-width:480px;margin:0 auto;">
    <p style="font-size:.65rem;color:var(--txt3);line-height:1.7;">
      <strong style="color:var(--r600);">⚠️ Perhatian (Sesuai BPOM RI):</strong>
      DVN dengan collagen adalah <strong>suplemen makanan</strong>, bukan obat. Tidak dimaksudkan untuk mendiagnosis, mengobati, menyembuhkan, atau mencegah penyakit. Konsumsi sesuai anjuran. Hasil bersifat individual. Konsultasikan dengan tenaga kesehatan jika memiliki kondisi medis tertentu. <strong>BPOM RI</strong> terdaftar · <strong>Halal MUI</strong> bersertifikat · <strong>GMP</strong> Certified.
    </p>
  </div>
</div>

<!-- Footer -->

<!-- ┌──────────────────────────────────────────────────────────────┐
     │  DVN PROMO SLOT C — PRE-FOOTER  (sebelum footer)            │
     │  AKTIFKAN  : ganti  display:none  →  display:block          │
     │  GANTI ISI : edit pf_label, pf_title, pf_sub, teks tombol   │
     └──────────────────────────────────────────────────────────────┘ -->
<div id="dvn-slot-c" class="dvn-promo-zone" style="padding: 0px 16px 16px; display: block;"><div class="dvn-promo-prefooter"><div class="dvn-pf-label" style="font-size:.7rem;font-weight:800;text-transform:uppercase;letter-spacing:.08em;margin-bottom:4px;">🎀 BONUS EKSKLUSIF</div><div class="dvn-pf-title" style="font-size:1rem;font-weight:800;margin:4px 0;">Gratis Scarf untuk Pembelian 2 Box!</div><div class="dvn-pf-sub" style="font-size:.75rem;line-height:1.5;margin-bottom:14px;">Berlaku pembelian 2 Box · Scarf dikirim bersama produk · Stok terbatas</div><a href="/produk?v=8#scarfCard" class="dvn-pf-btn" style="display:inline-flex;align-items:center;gap:8px;background:linear-gradient(135deg,var(--r500),var(--r600));color:white;font-weight:700;font-size:.88rem;padding:12px 22px;border-radius:12px;text-decoration:none;box-shadow:0 4px 14px rgba(224,16,85,.28);">🎀 Pilih Motif Scarf-mu</a></div></div>

<!-- Lightbox -->
<div class="lightbox" id="lightbox" onclick="closeLightbox(event)" role="dialog" aria-modal="true" aria-label="Foto ulasan pengguna">
  <button class="lightbox-close" onclick="document.getElementById(&#39;lightbox&#39;).classList.remove(&#39;open&#39;);document.body.style.overflow=&#39;&#39;;" aria-label="Tutup">✕</button>
  <img id="lightboxImg" src="/produk?v=8" alt="" class="lightbox-img" style="display:none;" loading="lazy" draggable="false" oncontextmenu="return false;">
  <div id="lightboxPlaceholder" class="lightbox-placeholder" style="display:none;">
    <span>📸</span>
    <p id="lightboxCaptionText"></p>
  </div>
  <div class="lightbox-caption" id="lightboxCaptionBar"></div>
</div>

<!-- Sticky Buy Bar -->
<div class="sticky-buy" aria-label="Tombol pembelian">
  <div class="sticky-inner">
    <a id="stickyOrder" href="<?php echo esc_url(home_url("/produk")); ?>" onclick="goOrder(event)" class="sticky-wa">
      <svg width="17" height="17" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"></path><path d="M12.004 0C5.374 0 0 5.373 0 12c0 2.117.554 4.104 1.523 5.827L.057 23.97l6.304-1.454A11.95 11.95 0 0012.004 24C18.63 24 24 18.626 24 12c0-6.627-5.37-12-11.996-12z"></path></svg>
      <span id="stickyOrderLabel">Order 1 Box</span>
    </a>
    <a id="stickyInfo" href="<?php echo esc_url(home_url("/produk")); ?>" onclick="goInfo(event)" class="sticky-info">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
      Tanya Info
    </a>
  </div>
</div>

<script>
// ===== CONFIG – ganti nomor WA di sini =====
var WA_NUMBER    = '6287866888808';
var PRODUCT_NAME = 'DVN dengan collagen Chewable Tablet';
var DEALER_ID    = 'i1684';

// GTM
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
function trackCTA(label){ try{ gtag('event','cta_click',{event_category:'conversion',event_label:label}); }catch(e){} }

// ═══════════════════════════════════════════════════════
// PROMO ENGINE — membaca DVN_PROMO dari dvn-promo.js
// Jika dvn-promo.js tidak ada → semua promo tersembunyi
// ═══════════════════════════════════════════════════════
(function(){
  var P = window.DVN_PROMO;

  // ── 1. Guard: jika config tidak ada atau tidak aktif → selesai
  if (!P || !P.active) {
    // Pastikan semua zona promo tersembunyi (default CSS sudah hide)
    return;
  }

  // ── 2. Cek endTime: jika sudah lewat → nonaktifkan
  if (P.endTime && Date.now() > P.endTime) {
    console.log('[DVN Promo] Promo sudah berakhir:', new Date(P.endTime).toLocaleString());
    return;
  }

  // ── 3. Tampilkan semua dvn-promo-zone
  document.querySelectorAll('.dvn-promo-zone').forEach(function(el){
    // Ribbon (slot-a) wraps a flex container — use block on wrapper is fine
    // Scarf card is block. Slot-c is block. All correct with 'block'.
    el.style.display = 'block';
  });

  // ── 4. Isi konten Slot A ribbon dari config
  var slotALink = document.querySelector('#dvn-slot-a .dvn-promo-topbar a');
  if (slotALink) {
    var waEncoded = encodeURIComponent(P.waTextBase || '');
    slotALink.href = '#scarfCard'; // anchor ke scarf card
    slotALink.innerHTML =
      '<span class="dvn-pt-badge">' + (P.badge || '🎁 Promo') + '</span>' +
      '<span>Beli <strong>2 Box</strong> ' + (P.title || '') + ' — Berakhir dalam</span>' +
      '<span class="dvn-cdown-wrap" style="background:var(--r600);">' +
        '<span class="dvn-cdown" id="cdTopbar">--:--</span>' +
      '</span>';
  }

  // ── 5. Isi teks banner scarf card dari config
  var spTitle = document.querySelector('.sp-banner-text .sp-title');
  var spSub   = document.querySelector('.sp-banner-text .sp-sub');
  var spNote  = document.querySelector('.sp-note');
  if (spTitle) spTitle.textContent = P.title || 'Bonus Scarf Gratis!';
  if (spSub)   spSub.innerHTML = 'Khusus pembelian <strong style="color:white;">2 Box</strong> ' +
    (P.subtitle ? P.subtitle.replace('Khusus pembelian 2 Box DVN dengan collagen','DVN dengan collagen') : 'DVN dengan collagen');
  if (spNote)  spNote.textContent = P.note || '';

  // ── 6. Render motif buttons dari config.motifs
  var container = document.getElementById('scarfMotifContainer');
  if (container && P.motifs && P.motifs.length) {
    container.innerHTML = '';
    P.motifs.forEach(function(m) {
      var btn = document.createElement('div');
      btn.className = 'sp-btn';
      btn.setAttribute('onclick', "pickScarf('" + m.name + "', this)");
      btn.innerHTML = '<span class="sp-emoji">' + (m.emoji||'🎀') + '</span>' + m.name;
      container.appendChild(btn);
    });
  }

  // ── 7. Isi Slot C dari config
  var slotC = document.getElementById('dvn-slot-c');
  if (slotC) {
    slotC.innerHTML =
      '<div class="dvn-promo-prefooter">' +
        '<div class="dvn-pf-label" style="font-size:.7rem;font-weight:800;text-transform:uppercase;' +
          'letter-spacing:.08em;margin-bottom:4px;">🎀 BONUS EKSKLUSIF</div>' +
        '<div class="dvn-pf-title" style="font-size:1rem;font-weight:800;margin:4px 0;">' +
          'Gratis Scarf untuk Pembelian 2 Box!</div>' +
        '<div class="dvn-pf-sub" style="font-size:.75rem;line-height:1.5;margin-bottom:14px;">' +
          P.note + '</div>' +
        '<a href="#scarfCard" class="dvn-pf-btn" style="display:inline-flex;align-items:center;' +
          'gap:8px;background:linear-gradient(135deg,var(--r500),var(--r600));color:white;' +
          'font-weight:700;font-size:.88rem;padding:12px 22px;border-radius:12px;text-decoration:none;' +
          'box-shadow:0 4px 14px rgba(224,16,85,.28);">🎀 Pilih Motif Scarf-mu</a>' +
      '</div>';
  }

  // ── 8. Countdown dari DVN_PROMO.endTime (bukan random sessionStorage)
  function pad(n){ return String(n).padStart(2,'0'); }
  var endTime = P.endTime;

  function tick(){
    var rem = Math.max(0, endTime - Date.now());
    var h = Math.floor(rem / 3600000);
    var m = Math.floor((rem % 3600000) / 60000);
    var s = Math.floor((rem % 60000) / 1000);

    var elH = document.getElementById('cdH');
    var elM = document.getElementById('cdM');
    var elS = document.getElementById('cdS');
    var elTop = document.getElementById('cdTopbar');

    if(elH) elH.textContent = pad(h);
    if(elM) elM.textContent = pad(m);
    if(elS) elS.textContent = pad(s);
    if(elTop) elTop.textContent = pad(h)+':'+pad(m)+':'+pad(s);

    if (rem > 0) {
      setTimeout(tick, 1000);
    } else {
      // Waktu habis — sembunyikan semua promo
      if(elTop) elTop.textContent = 'HABIS';
      document.querySelectorAll('.dvn-promo-zone').forEach(function(el){
        el.style.opacity = '.5';
        el.style.pointerEvents = 'none';
      });
      var banner = document.querySelector('.sp-banner');
      if(banner) {
        banner.style.background = '#999';
        var eyebrow = banner.querySelector('.sp-eyebrow');
        if(eyebrow) eyebrow.textContent = 'Promo Telah Berakhir';
      }
    }
  }

  if(document.readyState === 'loading'){
    document.addEventListener('DOMContentLoaded', tick);
  } else { tick(); }

})();

// ===== SCARF MOTIF PICKER =====
var selectedScarf = '';
function pickScarf(motif, el) {
  // Toggle: klik motif yg sama = batal
  if (selectedScarf === motif) {
    selectedScarf = '';
    document.querySelectorAll('.sp-btn').forEach(function(b){ b.classList.remove('selected'); });
    var m = document.getElementById('scarfMsg');
    if (m) m.textContent = '';
    // Kembali ke 1 box jika batal motif
    if (qty > 1) { qty = 1; document.getElementById('qtyNum').textContent = qty; updateOrderUI(); }
    return;
  }
  selectedScarf = motif;
  document.querySelectorAll('.sp-btn').forEach(function(b){ b.classList.remove('selected'); });
  el.classList.add('selected');
  var m = document.getElementById('scarfMsg');
  if (m) m.textContent = '✓ ' + motif + ' dipilih!';
  // Auto set 2 box saat pilih scarf
  if (qty < 2) { qty = 2; document.getElementById('qtyNum').textContent = qty; updateOrderUI(); }
}

// ===== QTY – max 2 box =====
var qty = 1;
function changeQty(d){
  qty = Math.max(1, Math.min(2, qty + d));
  document.getElementById('qtyNum').textContent = qty;
  // Jika turun ke 1 box, auto deselect scarf motif
  if (qty < 2 && selectedScarf !== '') {
    selectedScarf = '';
    document.querySelectorAll('.sp-btn').forEach(function(b){ b.classList.remove('selected'); });
    var m = document.getElementById('scarfMsg');
    if (m) m.textContent = '';
  }
  updateOrderUI();
}
function updateOrderUI(){
  var label = qty + ' Box';
  document.getElementById('summaryBadge').textContent   = label;
  document.getElementById('summaryDetail').innerHTML    =
    '📦 ' + PRODUCT_NAME + ' &times; ' + qty + '<br>' +
    '🏷️ Dealer Resmi ID: ' + DEALER_ID + '<br>' +
    '💬 Harga dikonfirmasi via WhatsApp';
  document.getElementById('btnOrderLabel').textContent  = 'Order ' + label + ' via WhatsApp';
  document.getElementById('stickyOrderLabel').textContent = 'Order ' + label;
}

// ===== WA MESSAGE BUILDERS =====
function buildOrderMsg(){
  var P = window.DVN_PROMO;
  var promoActive = P && P.active && (!P.endTime || Date.now() < P.endTime);
  var promoSection = '';

  if (promoActive && qty === 2) {
    if (selectedScarf) {
      // Customer pilih 2 box + sudah pilih motif scarf dari config
      promoSection =
        '\n\n🎀 *Bonus Scarf (Promo 2 Box):*\n' +
        '• Motif pilihan saya: ' + selectedScarf + '\n' +
        '• Tolong disertakan bonus scarf-nya ya Kak 🙏';
    } else {
      // Customer pilih 2 box tapi belum pilih motif
      promoSection =
        '\n\n🎀 *Info Promo Bonus Scarf:*\n' +
        '• Saya pesan 2 box, berarti dapat bonus scarf gratis kan?\n' +
        '• Motif akan saya konfirmasi saat chat 😊';
    }
  }

  return encodeURIComponent(
    'Halo Kak, saya ingin memesan DVN dengan collagen 🌸\n\n' +
    '📦 *Detail Pesanan:*\n' +
    '• Produk: ' + PRODUCT_NAME + '\n' +
    '• Jumlah: ' + qty + ' box\n' +
    '• Dealer Resmi ID: ' + DEALER_ID +
    promoSection + '\n\n' +
    'Mohon info harga dan cara pembayarannya ya Kak. Terima kasih! 🙏'
  );
}
function buildInfoMsg(){
  return encodeURIComponent(
    'Halo Kak, saya ingin menanyakan informasi produk DVN dengan collagen 🌸\n\n' +
    '• Produk: ' + PRODUCT_NAME + '\n' +
    '• Dealer Resmi ID: ' + DEALER_ID + '\n\n' +
    'Boleh minta info mengenai:\n' +
    '1. Kandungan dan manfaat produk\n' +
    '2. Harga dan paket yang tersedia\n' +
    '3. Cara pemesanan\n\n' +
    'Terima kasih! 🙏'
  );
}
function waURL(msg){ return 'https://wa.me/' + WA_NUMBER + '?text=' + msg; }

// ===== CTA HANDLERS =====
function goOrder(e){
  e.preventDefault();
  trackCTA('wa_order_' + qty + 'box');
  window.location.href = waURL(buildOrderMsg());
}
function goInfo(e){
  e.preventDefault();
  trackCTA('wa_info');
  window.location.href = waURL(buildInfoMsg());
}

// ===== TABS =====


// ===== GALLERY =====
var thumbContent = ['💊','📦','🍇','🏆'];
var thumbLabels  = ['DVN dengan collagen Chewable Tablet','Kemasan DVN dengan collagen','Bahan Aktif Internasional','Superbrands Worldwide 2024'];
function switchThumb(el, idx){
  document.querySelectorAll('.gthumb').forEach(function(t){ t.classList.remove('active'); });
  el.classList.add('active');
  var ph = document.querySelector('.gallery-main-placeholder');
  if(ph){ ph.querySelector('.pill-icon').textContent = thumbContent[idx]; ph.querySelector('.pill-sub').textContent = thumbLabels[idx]; }
}
document.querySelectorAll('.gthumb').forEach(function(t,i){
  t.addEventListener('keypress',function(e){ if(e.key==='Enter'||e.key===' '){ switchThumb(t,i); } });
});

// ===== LIGHTBOX =====
function openLightbox(src, caption){
  var lb  = document.getElementById('lightbox');
  var img = document.getElementById('lightboxImg');
  var ph  = document.getElementById('lightboxPlaceholder');
  document.getElementById('lightboxCaptionBar').textContent  = caption || '';
  document.getElementById('lightboxCaptionText').textContent = caption || 'Foto testimoni pengguna DVN dengan collagen';
  lb.classList.add('open');
  document.body.style.overflow = 'hidden';
  var t = new Image();
  t.onload  = function(){ img.src=src; img.alt=caption||''; img.style.display='block'; ph.style.display='none'; };
  t.onerror = function(){ img.style.display='none'; ph.style.display='flex'; };
  t.src = src;
}
function closeLightbox(e){
  if(e && e.type==='click'){
    var lb = document.getElementById('lightbox');
    if(e.target!==lb && !e.target.classList.contains('lightbox-close')) return;
  }
  document.getElementById('lightbox').classList.remove('open');
  document.getElementById('lightboxImg').src = '';
  document.body.style.overflow = '';
}
document.addEventListener('keydown',function(e){ if(e.key==='Escape'){ document.getElementById('lightbox').classList.remove('open'); document.body.style.overflow=''; } });
document.querySelectorAll('.rc-photo').forEach(function(el){
  el.addEventListener('keypress',function(e){ if(e.key==='Enter'||e.key===' '){ el.click(); } });
});

// ===== REVIEW FILTER =====
function filterReview(btn){ document.querySelectorAll('.rfilt').forEach(function(b){ b.classList.remove('active'); }); btn.classList.add('active'); }

// ===== HELPFUL =====
function helpful(btn){
  var m = btn.textContent.match(/\((\d+)\)/);
  if(m){ btn.textContent = btn.textContent.replace(/\(\d+\)/,'('+(parseInt(m[1])+1)+')'); btn.disabled=true; btn.style.opacity='.6'; }
}

// ===== SCROLL REVEAL =====
function triggerReveal(){
  var els = document.querySelectorAll('.rv:not(.vis)');
  var io  = new IntersectionObserver(function(entries){
    entries.forEach(function(e){ if(e.isIntersecting){ e.target.classList.add('vis'); io.unobserve(e.target); } });
  },{threshold:0.1});
  els.forEach(function(el){ io.observe(el); });
}
if('requestIdleCallback' in window){ requestIdleCallback(triggerReveal,{timeout:1000}); }
else{ setTimeout(triggerReveal,200); }

// Nav WA button ripple + redirect
function navWaClick(e){
  e.preventDefault();
  var btn = document.getElementById('navWaBtn');
  // remove old ripple
  var old = btn.querySelector('.ripple');
  if(old) old.remove();
  // add new ripple
  var r = document.createElement('span');
  r.className = 'ripple';
  btn.appendChild(r);
  trackCTA('nav_wa_cart');
  setTimeout(function(){
    window.location.href = waURL(buildInfoMsg());
  }, 320);
}

// Init on load
updateOrderUI();
</script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/dvn-shared.js" defer=""></script>

<script>
function switchImg(el, src) {
  var img = document.getElementById('mainProductImg');
  if (img) { img.src = src; }
  document.querySelectorAll('.gthumb').forEach(function(t){ t.classList.remove('active'); });
  el.classList.add('active');
}
</script>

<script>
// Force initial tab state on load

</script>

<!-- VERSION CHECK: v3.1 -->





<!-- ═══════ TAB SWITCH SCRIPT ═══════ -->
<script>
function dvnTab(id){
  var panels = document.querySelectorAll('.dvn-panel');
  for(var i=0;i<panels.length;i++) panels[i].style.display='none';
  var t = document.getElementById('p-'+id);
  if(t) t.style.display='block';
  var tabs = document.querySelectorAll('.dvn-tab');
  for(var j=0;j<tabs.length;j++) tabs[j].setAttribute('data-active','false');
  var map = {'detail':0,'ulasan':1,'cara':2,'spek':3};
  if(map[id]!==undefined) tabs[map[id]].setAttribute('data-active','true');
  document.getElementById('dvnTabNav').scrollIntoView({behavior:'smooth',block:'start'});
}

function filterR(btn, type){
  document.querySelectorAll('.filt').forEach(function(b){
    b.style.background='#fff'; b.style.color='#666';
  });
  btn.style.background='#e01055'; btn.style.color='#fff';
  var cards = document.querySelectorAll('.review-card');
  for(var i=0;i<cards.length;i++){
    var show = false;
    if(type==='all') show=true;
    else if(type==='foto') show=cards[i].getAttribute('data-foto')==='yes';
    else show=cards[i].getAttribute('data-stars')===type;
    cards[i].style.display = show ? 'block' : 'none';
  }
}
</script>

<script>
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