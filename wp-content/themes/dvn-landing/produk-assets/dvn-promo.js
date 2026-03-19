/**
 * DVN-PROMO.JS — Konfigurasi Promo Terpusat
 * Generated: 12 Maret 2026
 * Edit via DVN-PROMO-MANAGER-v2.html → Generate → Upload file ini.
 * Satu file ini mengontrol promo di SEMUA halaman website.
 */

window.DVN_PROMO = {

  /* STATUS */
  active:   true,  // ← AKTIF

  /* IDENTITAS */
  id:       'scarf-2box-mar2026',
  type:     'scarf',

  /* WAKTU BERAKHIR — 31 Maret 2026 23:59 WIB */
  endTime:  new Date('2026-03-31T23:59:00+07:00').getTime(),

  /* KONTEN */
  badge:    '🎁 Promo Aktif',
  title:    'Bonus Scarf Gratis!',
  subtitle: 'Khusus pembelian 2 Box DVN dengan collagen',
  note:     'Berlaku pembelian 2 Box · Scarf dikirim bersama produk · Stok terbatas',

  /* MOTIF */
  motifs: [
    { name: 'Davina Blush',    emoji: '🌸' },
    { name: 'Davina Fiora',    emoji: '🌷' },
    { name: 'Davina Magnolia', emoji: '🌺' }
  ],

  /* PESAN WA */
  waTextBase: 'Halo Kak, saya mau order 2 Box DVN dengan collagen dan klaim bonus scarf! 🎁',

  /* LINK */
  ctaUrl: 'produk.html?v=8'

};
