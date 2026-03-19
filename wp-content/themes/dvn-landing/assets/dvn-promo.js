/**
 * DVN-PROMO.JS — Konfigurasi Promo Terpusat
 * Satu file ini mengontrol promo di SEMUA halaman website.
 */

window.DVN_PROMO = window.DVN_PROMO || {
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
  ctaUrl: '/produk' // Gunakan root-relative agar tidak lari ke domain lain
};
