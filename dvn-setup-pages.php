<?php
/**
 * DVN Landing — Setup Pages (One-Time)
 * Akses: http://dvn-collagen.local/dvn-setup-pages.php
 * Hapus file ini setelah dijalankan!
 */

require_once __DIR__ . '/wp-load.php';

$pages = [
    ['title' => 'Produk', 'slug' => 'produk', 'template' => 'page-produk.php'],
    ['title' => 'Blog',   'slug' => 'blog',   'template' => 'page-blog.php'],
];

$results = [];

foreach ($pages as $page) {
    $existing = get_page_by_path($page['slug']);

    if (!$existing) {
        $id = wp_insert_post([
            'post_title'   => $page['title'],
            'post_name'    => $page['slug'],
            'post_status'  => 'publish',
            'post_type'    => 'page',
            'post_content' => '',
        ]);
        if ($id && !is_wp_error($id)) {
            update_post_meta($id, '_wp_page_template', $page['template']);
            $results[] = ['ok' => true, 'msg' => "Halaman <strong>{$page['title']}</strong> berhasil dibuat (ID: $id) dengan template <code>{$page['template']}</code>"];
        } else {
            $results[] = ['ok' => false, 'msg' => "Gagal membuat halaman <strong>{$page['title']}</strong>"];
        }
    } else {
        update_post_meta($existing->ID, '_wp_page_template', $page['template']);
        wp_update_post(['ID' => $existing->ID, 'post_status' => 'publish']);
        $results[] = ['ok' => true, 'msg' => "Halaman <strong>{$page['title']}</strong> sudah ada (ID: {$existing->ID}), template diperbarui ke <code>{$page['template']}</code>"];
    }
}
?><!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DVN Setup Pages</title>
<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }
  body { font-family: -apple-system, sans-serif; background: #fff0f4; display: flex; align-items: center; justify-content: center; min-height: 100vh; padding: 24px; }
  .card { background: white; border-radius: 20px; padding: 32px; max-width: 520px; width: 100%; box-shadow: 0 8px 32px rgba(224,16,85,.12); }
  h2 { color: #e01055; font-size: 1.4rem; margin-bottom: 20px; }
  .result { border-radius: 10px; padding: 12px 16px; margin: 8px 0; font-size: .88rem; line-height: 1.5; }
  .ok  { background: #e8f7ef; border-left: 4px solid #1a7c4c; }
  .err { background: #fff0f4; border-left: 4px solid #e01055; }
  .links { margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap; }
  .btn { display: inline-block; padding: 10px 20px; border-radius: 99px; font-weight: 700; font-size: .85rem; text-decoration: none; }
  .btn-p { background: #e01055; color: white; }
  .btn-s { background: #f3e8ff; color: #7c3aed; }
  .warning { background: #fef3c7; border-left: 4px solid #d97706; border-radius: 10px; padding: 12px 16px; margin-top: 16px; font-size: .82rem; }
</style>
</head>
<body>
<div class="card">
  <h2>🌸 DVN Setup Halaman</h2>
  <?php foreach ($results as $r): ?>
    <div class="result <?php echo $r['ok'] ? 'ok' : 'err'; ?>">
      <?php echo $r['ok'] ? '✅' : '❌'; ?> <?php echo $r['msg']; ?>
    </div>
  <?php endforeach; ?>

  <div class="links">
    <a href="/" class="btn btn-s">🏠 Beranda</a>
    <a href="/produk" class="btn btn-p">💊 Lihat Produk</a>
    <a href="/blog" class="btn btn-s">📰 Lihat Blog</a>
  </div>

  <div class="warning">
    ⚠️ <strong>Penting:</strong> Hapus file <code>dvn-setup-pages.php</code> dari server setelah setup selesai!
  </div>
</div>
</body>
</html>
