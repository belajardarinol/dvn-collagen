/**
 * @fileoverview DVN Collagen — Shared Utilities Library
 * @version 1.1.0
 * @build 2026-03
 * 
 * @description
 * Centralized JavaScript utility library for the DVN Collagen website system.
 * Eliminates code duplication across 18 HTML files.
 * 
 * Modules included:
 *   - Security:      sanitize(), setText(), setHTML() — XSS prevention
 *   - Storage:       lsGet(), lsSet(), lsDel() — Safe localStorage with error handling
 *   - UI:            toast() — Unified notification system
 *   - Modal:         openModal(), closeModal() — Shared modal management
 *   - Marketing:     trackWA() — WhatsApp conversion tracking (GA4 + Meta + TikTok)
 *   - Analytics:     initScrollTracking(), initTimeTracking() — Engagement events
 *   - Observability: initErrorMonitoring() — JS error capture + GA4 reporting
 *   - Performance:   injectResourceHints() — Preconnect/dns-prefetch injection
 *   - Security:      checkBruteForce(), recordFailedAttempt() — Auth protection
 * 
 * @usage
 *   Include in HTML: <script src="dvn-shared.js" defer></script>
 *   Access via:      DVN.toast('message'), DVN.trackWA('source'), etc.
 * 
 * @author DVN System Architect
 * @license Proprietary — DVN Collagen Internal Use Only
 */

/**
 * DVN-SHARED.js — Shared Utilities Library
 * Version: 1.0.0 | Build: 2026-03
 * Eliminates code duplication across all DVN system files
 * Include this file in all HTML pages: <script src="dvn-shared.js" defer></script>
 */

// ═══════════════════════════════════════════════
//  SECURITY: HTML Sanitizer (prevents XSS)
// ═══════════════════════════════════════════════

/** @const {string} System version */
const DVN_VERSION = '1.2.0';
/** @const {string} Build date */  
const DVN_BUILD   = '2026-03';
/** @const {Object} Module registry */
const DVN_MODULES = {
  web: 11, admin: 7, shared: 1,
  infrastructure: ['service-worker.js','.htaccess','robots.txt','sitemap.xml'],
};

const DVN = {
  /** Safe HTML sanitizer — strips script/iframe/on* attributes */
  sanitize(html) {
    if (typeof html !== 'string') return '';
    return html
      .replace(/<script[\s\S]*?<\/script>/gi, '')
      .replace(/<iframe[\s\S]*?>/gi, '')
      .replace(/on\w+\s*=\s*["'][^"']*["']/gi, '')
      .replace(/javascript:/gi, '')
      .replace(/data:text\/html/gi, '');
  },

  /** Safe text setter — use instead of innerHTML for user content */
  setText(el, text) {
    if (el) el.textContent = String(text || '');
  },

  /** Safe innerHTML setter with sanitization */
  setHTML(el, html) {
    if (el) el.innerHTML = DVN.sanitize(String(html || ''));
  },

// ═══════════════════════════════════════════════
//  LOCALSTORAGE: Safe Read/Write with Error Handling
// ═══════════════════════════════════════════════
  /** Safe localStorage.getItem with JSON parse + error boundary */
  lsGet(key, fallback = null) {
    try {
      const raw = localStorage.getItem(key);
      if (raw === null) return fallback;
      return JSON.parse(raw);
    } catch (e) {
      DVN.logError('lsGet', key, e.message);
      return fallback;
    }
  },

  /** Safe localStorage.setItem with QuotaExceeded detection */
  lsSet(key, value) {
    try {
      localStorage.setItem(key, JSON.stringify(value));
      return true;
    } catch (e) {
      if (e.name === 'QuotaExceededError') {
        DVN.logError('lsSet_quota', key, 'localStorage full — clear old data');
        alert('⚠️ Penyimpanan penuh! Hapus data lama sebelum menyimpan yang baru.');
      } else {
        DVN.logError('lsSet', key, e.message);
      }
      return false;
    }
  },

  /** Safe localStorage.removeItem */
  lsDel(key) {
    try { localStorage.removeItem(key); } catch(e) {}
  },

// ═══════════════════════════════════════════════
//  UI: Toast Notification (replaces 6 duplicate implementations)
// ═══════════════════════════════════════════════
  toast(msg, type = 'ok', duration = 3000) {
    const existing = document.getElementById('dvn-toast');
    if (existing) existing.remove();
    const t = document.createElement('div');
    t.id = 'dvn-toast';
    const colors = { ok: '#0d9f5e', err: '#dc2626', warn: '#d97706', info: '#1a73e8' };
    t.style.cssText = `position:fixed;bottom:24px;left:50%;transform:translateX(-50%);
      background:${colors[type]||colors.info};color:#fff;padding:12px 22px;border-radius:10px;
      font-size:14px;font-weight:600;z-index:99999;box-shadow:0 4px 20px rgba(0,0,0,.25);
      animation:dvnToastIn .25s ease;font-family:sans-serif;max-width:90vw;text-align:center;`;
    t.textContent = msg;
    if (!document.getElementById('dvn-toast-style')) {
      const s = document.createElement('style');
      s.id = 'dvn-toast-style';
      s.textContent = '@keyframes dvnToastIn{from{opacity:0;transform:translateX(-50%) translateY(12px)}to{opacity:1;transform:translateX(-50%) translateY(0)}}';
      document.head.appendChild(s);
    }
    document.body.appendChild(t);
    setTimeout(() => t && t.remove(), duration);
  },

// ═══════════════════════════════════════════════
//  MODAL: Shared open/close (replaces 4 duplicates)
// ═══════════════════════════════════════════════
  openModal(id) {
    const el = document.getElementById(id);
    if (el) { el.style.display = 'flex'; document.body.style.overflow = 'hidden'; }
  },

  closeModal(id) {
    const el = document.getElementById(id);
    if (el) { el.style.display = 'none'; document.body.style.overflow = ''; }
  },

// ═══════════════════════════════════════════════
//  MARKETING: WA Click Conversion Tracking
// ═══════════════════════════════════════════════
  trackWA(source, label) {
    const tag = source || 'unknown';
    try {
      // GA4 event
      if (typeof gtag === 'function') {
        gtag('event', 'wa_click', {
          event_category: 'conversion',
          event_label: tag,
          value: 1,
        });
        // Google Ads conversion (replace CONVERSION_ID/LABEL with real values)
        gtag('event', 'conversion', {
          send_to: 'AW-XXXXXXXXXX/YYYYYYYYYYYY',
          event_label: tag,
        });
      }
      // Facebook Pixel
      if (typeof fbq === 'function') {
        fbq('track', 'Contact', { content_name: tag });
      }
    } catch(e) {}
  },

// ═══════════════════════════════════════════════
//  MARKETING: Scroll Depth Tracking
// ═══════════════════════════════════════════════
  initScrollTracking() {
    if (typeof gtag !== 'function') return;
    const milestones = [25, 50, 75, 90, 100];
    const reached = new Set();
    const check = () => {
      const pct = Math.round((window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100);
      milestones.forEach(m => {
        if (pct >= m && !reached.has(m)) {
          reached.add(m);
          gtag('event', 'scroll', { percent_scrolled: m, page_title: document.title });
        }
      });
    };
    let ticking = false;
    window.addEventListener('scroll', () => {
      if (!ticking) { requestAnimationFrame(() => { check(); ticking = false; }); ticking = true; }
    }, { passive: true });
  },

// ═══════════════════════════════════════════════
//  MARKETING: Time on Page Tracking
// ═══════════════════════════════════════════════
  initTimeTracking() {
    if (typeof gtag !== 'function') return;
    const start = Date.now();
    const milestones = [30, 60, 120, 300]; // seconds
    const reached = new Set();
    setInterval(() => {
      const secs = Math.round((Date.now() - start) / 1000);
      milestones.forEach(m => {
        if (secs >= m && !reached.has(m)) {
          reached.add(m);
          gtag('event', 'time_on_page', { seconds: m, page_title: document.title });
        }
      });
    }, 10000);
    window.addEventListener('beforeunload', () => {
      const secs = Math.round((Date.now() - start) / 1000);
      gtag('event', 'page_exit', { time_spent_seconds: secs });
    });
  },

// ═══════════════════════════════════════════════
//  OBSERVABILITY: Error Monitoring
// ═══════════════════════════════════════════════
  initErrorMonitoring() {
    // Collect errors in localStorage for DVN-MONITOR
    const ERR_KEY = 'dvn_error_log';
    const addError = (type, msg, detail) => {
      try {
        const log = JSON.parse(localStorage.getItem(ERR_KEY) || '[]');
        log.unshift({ type, msg: String(msg).slice(0,200), detail: String(detail||'').slice(0,200), time: new Date().toISOString(), page: location.pathname });
        if (log.length > 50) log.length = 50; // keep last 50 errors
        localStorage.setItem(ERR_KEY, JSON.stringify(log));
      } catch(e) {}
      // Also send to GA4
      if (typeof gtag === 'function') {
        gtag('event', 'exception', { description: type + ': ' + String(msg).slice(0,100), fatal: false });
      }
    };
    window.onerror = (msg, src, line, col, err) => {
      addError('js_error', msg, `${src}:${line}:${col}`);
      return false;
    };
    window.onunhandledrejection = (e) => {
      addError('promise_rejection', e.reason?.message || String(e.reason), '');
    };
  },

// ═══════════════════════════════════════════════
//  PERFORMANCE: Resource Hints Injector
// ═══════════════════════════════════════════════
  injectResourceHints() {
    const hints = [
      { rel: 'preconnect', href: 'https://fonts.googleapis.com' },
      { rel: 'preconnect', href: 'https://fonts.gstatic.com', crossorigin: true },
      { rel: 'dns-prefetch', href: 'https://www.google-analytics.com' },
      { rel: 'dns-prefetch', href: 'https://www.googletagmanager.com' },
    ];
    hints.forEach(h => {
      if (!document.querySelector(`link[href="${h.href}"]`)) {
        const link = document.createElement('link');
        link.rel = h.rel; link.href = h.href;
        if (h.crossorigin) link.crossOrigin = 'anonymous';
        document.head.appendChild(link);
      }
    });
  },

// ═══════════════════════════════════════════════
//  SECURITY: Brute Force Protection
// ═══════════════════════════════════════════════
  checkBruteForce(toolId) {
    const key = `dvn_bf_${toolId}`;
    const LOCKOUT_DURATION = 15 * 60 * 1000; // 15 minutes
    const MAX_ATTEMPTS = 5;
    try {
      const data = JSON.parse(localStorage.getItem(key) || '{"attempts":0,"lockUntil":0}');
      if (Date.now() < data.lockUntil) {
        const remaining = Math.ceil((data.lockUntil - Date.now()) / 60000);
        return { locked: true, remaining };
      }
      return { locked: false, attempts: data.attempts };
    } catch(e) { return { locked: false, attempts: 0 }; }
  },

  recordFailedAttempt(toolId) {
    const key = `dvn_bf_${toolId}`;
    const MAX_ATTEMPTS = 5;
    const LOCKOUT_DURATION = 15 * 60 * 1000;
    try {
      const data = JSON.parse(localStorage.getItem(key) || '{"attempts":0,"lockUntil":0}');
      data.attempts = (data.attempts || 0) + 1;
      if (data.attempts >= MAX_ATTEMPTS) {
        data.lockUntil = Date.now() + LOCKOUT_DURATION;
        data.attempts = 0;
      }
      localStorage.setItem(key, JSON.stringify(data));
      return { attempts: data.attempts, locked: data.lockUntil > Date.now() };
    } catch(e) { return { attempts: 1, locked: false }; }
  },

  clearBruteForce(toolId) {
    try { localStorage.removeItem(`dvn_bf_${toolId}`); } catch(e) {}
  },

// ═══════════════════════════════════════════════
//  UTILITY: Safe log for observability
// ═══════════════════════════════════════════════
  logError(context, detail, msg) {
    try {
      const log = JSON.parse(localStorage.getItem('dvn_error_log') || '[]');
      log.unshift({ type: context, msg: String(msg).slice(0,200), detail: String(detail).slice(0,200), time: new Date().toISOString(), page: location.pathname });
      if (log.length > 50) log.length = 50;
      localStorage.setItem('dvn_error_log', JSON.stringify(log));
    } catch(e) {}
  },

// ═══════════════════════════════════════════════
//  INIT: Auto-initialize on DOM ready
// ═══════════════════════════════════════════════
  init() {
    DVN.initErrorMonitoring();
    DVN.injectResourceHints();
    // Only init tracking on web pages (not admin tools)
    if (!location.pathname.includes('DVN-')) {
      DVN.initScrollTracking();
      DVN.initTimeTracking();
    }
  }
};

// Auto-init
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', DVN.init);
} else {
  DVN.init();
}

// ═══════════════════════════════════════════════
//  SERVICE WORKER: Auto-register
// ═══════════════════════════════════════════════
if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    // DISABLED: navigator.serviceWorker.register('/service-worker.js')
      .then(function(r) { console.log('[DVN SW] OK'); })
      .catch(function(e) { console.warn('[DVN SW] Fail:', e); });
  });
}
