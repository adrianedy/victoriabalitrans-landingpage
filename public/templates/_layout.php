<?php
/**
 * Layout: head, nav (logo + lang switcher + WA), main content (include by page_key), footer, WA float, scripts.
 */
$content_template = __DIR__ . '/' . $page_key . '.php';
if (strpos($page_key, '_') === 0 || !is_file($content_template)) {
  http_response_code(404);
  echo '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>404</title></head><body><h1>Page not found</h1></body></html>';
  return;
}
$base = rtrim($base_url, '/');
$css_version = filemtime(__DIR__ . '/../styles.css');
$js_version = filemtime(__DIR__ . '/../script.js');
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($html_lang); ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($meta_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
  <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
  <meta name="theme-color" content="#0284c7">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
  <?php foreach ($lang_switcher as $l => $url): ?>
  <link rel="alternate" hreflang="<?php echo $l === 'id' ? 'id' : $l; ?>" href="<?php echo htmlspecialchars($url); ?>">
  <?php endforeach; ?>
  <link rel="alternate" hreflang="x-default" href="<?php echo htmlspecialchars($base_url); ?>/">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Victoria Bali Holiday">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($meta_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($meta_description); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($base); ?>/images/cov%20web2.jpeg">
  <meta property="og:locale" content="<?php echo htmlspecialchars($og_locale); ?>">
  <?php foreach ($supported_langs as $l): if ($l === $current_lang) continue; $alt_locale = $og_locales[$l] ?? ($l . '_' . strtoupper($l)); ?>
  <meta property="og:locale:alternate" content="<?php echo htmlspecialchars($alt_locale); ?>">
  <?php endforeach; ?>
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($meta_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($meta_description); ?>">
  <meta name="twitter:image" content="<?php echo htmlspecialchars($base); ?>/images/cov%20web2.jpeg">
  <link rel="icon" type="image/png" href="<?php echo htmlspecialchars($base . '/' . $logo_path); ?>">
  <link rel="apple-touch-icon" href="<?php echo htmlspecialchars($base . '/' . $logo_path); ?>">

  <!-- Preconnect to external origins for faster resource loading -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://cdn.tailwindcss.com">
  <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

  <!-- Preload critical LCP image with high priority - responsive -->
  <link rel="preload" as="image" href="<?php echo htmlspecialchars($base); ?>/images/hero-768.webp" fetchpriority="high" type="image/webp" media="(max-width: 768px)">
  <link rel="preload" as="image" href="<?php echo htmlspecialchars($base); ?>/images/hero-1280.webp" fetchpriority="high" type="image/webp" media="(min-width: 769px) and (max-width: 1280px)">
  <link rel="preload" as="image" href="<?php echo htmlspecialchars($base); ?>/images/hero-1920.webp" fetchpriority="high" type="image/webp" media="(min-width: 1281px)">

  <!-- Critical CSS inlined for faster FCP -->
  <style>
    *{margin:0;padding:0;box-sizing:border-box}
    :root{--blue-primary:#0284c7;--blue-secondary:#0ea5e9;--blue-light:#e0f2fe;--yellow-primary:#f59e0b}
    body{font-family:'Poppins',system-ui,-apple-system,sans-serif;line-height:1.6;overflow-x:hidden;-webkit-font-smoothing:antialiased}
    h1{font-size:1.5rem!important}
    .hero-bg-image{background-image:url('<?php echo htmlspecialchars($base); ?>/images/hero-768.webp');background-size:cover;background-position:center;background-repeat:no-repeat}
    @media(min-width:769px){.hero-bg-image{background-image:url('<?php echo htmlspecialchars($base); ?>/images/hero-1280.webp')}}
    @media(min-width:1281px){.hero-bg-image{background-image:url('<?php echo htmlspecialchars($base); ?>/images/hero-1920.webp')}}
    .hero-spinner{position:absolute;top:50%;right:50%;width:200%;height:200%;background-color:var(--yellow-primary);border-radius:50%;opacity:.1;transform:translate(50%,-50%);will-change:transform;animation:heroSpin 20s linear infinite;contain:strict}
    @keyframes heroSpin{from{transform:translate(50%,-50%) rotate(0deg)}to{transform:translate(50%,-50%) rotate(360deg)}}
    .hero-title-shadow{text-shadow:0 4px 12px rgba(0,0,0,.9),0 0 25px rgba(0,0,0,.8)}
    .hero-subtitle-shadow{text-shadow:0 2px 10px rgba(0,0,0,.9),0 0 20px rgba(0,0,0,.7)}
    .hero-description-shadow{text-shadow:0 2px 8px rgba(0,0,0,.9)}
    img.lazy-img{opacity:0;transition:opacity .25s ease-in}
    img.lazy-img.lazy-loaded{opacity:1}
    .wa-float{position:fixed;bottom:20px;right:20px;width:60px;height:60px;border-radius:50%;background:#25D366;color:#fff;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 20px rgba(37,211,102,.4);z-index:1000;text-decoration:none}
    .wa-float svg{width:32px;height:32px}
    @media(max-width:768px){.wa-float{width:56px;height:56px;bottom:16px;right:16px}.wa-float svg{width:28px;height:28px}}
  </style>

  <!-- Load fonts with display=optional to prevent layout shift -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=optional" rel="stylesheet">

  <!-- Tailwind CSS - loaded async to prevent render blocking -->
  <script>
    // Load Tailwind asynchronously
    (function(){
      var s=document.createElement('script');
      s.src='https://cdn.tailwindcss.com';
      s.onload=function(){
        tailwind.config={
          theme:{
            extend:{
              colors:{
                'blue-primary':'#0284c7',
                'blue-secondary':'#0ea5e9',
                'blue-light':'#e0f2fe',
                'yellow-primary':'#f59e0b',
                'yellow-secondary':'#fbbf24',
                'yellow-light':'#fef3c7'
              },
              fontFamily:{'poppins':['Poppins','sans-serif']}
            }
          }
        };
      };
      document.head.appendChild(s);
    })();
  </script>

  <!-- Main stylesheet - loaded async -->
  <link rel="preload" href="<?php echo htmlspecialchars($base); ?>/styles.css?v=<?php echo $css_version; ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="<?php echo htmlspecialchars($base); ?>/styles.css?v=<?php echo $css_version; ?>"></noscript>

  <!-- Structured data -->
  <script type="application/ld+json">
  {"@context":"https://schema.org","@type":"TravelAgency","name":"Victoria Bali Holiday","description":"<?php echo htmlspecialchars(addslashes($schema_business_description)); ?>","url":"<?php echo htmlspecialchars($canonical_url); ?>","logo":"<?php echo htmlspecialchars($base); ?>/images/vbt-logo.png","image":"<?php echo htmlspecialchars($base); ?>/images/cov%20web2.jpeg","areaServed":{"@type":"AdministrativeArea","name":"Bali, Indonesia"},"telephone":"+62<?php echo htmlspecialchars($whatsapp); ?>","contactPoint":{"@type":"ContactPoint","telephone":"+62<?php echo htmlspecialchars($whatsapp); ?>","contactType":"customer service","availableLanguage":["en","id"]}}
  </script>
</head>
<body class="font-poppins antialiased overflow-x-hidden">
  <!-- Lang bar: fixed top -->
  <div class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between px-4 py-2 bg-black/30 backdrop-blur-sm">
    <a href="<?php echo htmlspecialchars($canonical_url); ?>" class="flex items-center gap-2">
      <img src="<?php echo htmlspecialchars($base); ?>/images/vbt-logo-80.webp" alt="<?php echo htmlspecialchars($logo_alt); ?>" class="h-10 w-auto object-contain" width="40" height="40" loading="eager" decoding="async">
      <span class="text-white font-semibold text-sm sm:text-base">Victoria Bali Holiday</span>
    </a>
    <div class="flex items-center gap-3">
      <div class="flex rounded-lg overflow-hidden border border-white/30" role="group" aria-label="<?php echo htmlspecialchars($nav_lang_aria); ?>">
        <?php foreach ($lang_switcher as $l => $url): ?>
        <a href="<?php echo htmlspecialchars($url); ?>" class="px-3 py-1.5 text-sm font-medium <?php echo $l === $current_lang ? 'bg-white text-blue-primary' : 'text-white hover:bg-white/20'; ?>" hreflang="<?php echo $l === 'id' ? 'id' : $l; ?>" title="<?php echo $l === 'id' ? 'Indonesia' : 'English'; ?>"><?php echo strtoupper($l); ?></a>
        <?php endforeach; ?>
      </div>
      <a href="https://wa.me/<?php echo htmlspecialchars($whatsapp); ?>?text=<?php echo rawurlencode($nav_wa_message); ?>" target="_blank" rel="noopener noreferrer" class="bg-[#25D366] text-white text-sm font-semibold px-3 py-1.5 rounded-lg hover:bg-[#20ba5a] transition-colors">
        <?php echo htmlspecialchars($nav_wa_text); ?>
      </a>
    </div>
  </div>

  <main>
<?php include $content_template; ?>
  </main>

  <footer class="bg-gray-900 text-white py-6 sm:py-8 px-4 text-center">
    <div class="max-w-7xl mx-auto">
      <p class="text-xs sm:text-sm md:text-base"><?php
        $footer_parts = explode('%year%', $footer_copyright);
        echo htmlspecialchars($footer_parts[0], ENT_QUOTES, 'UTF-8'), '<span id="current-year">', date('Y'), '</span>', htmlspecialchars($footer_parts[1] ?? '', ENT_QUOTES, 'UTF-8');
      ?></p>
    </div>
  </footer>

  <a href="https://wa.me/<?php echo htmlspecialchars($whatsapp); ?>?text=<?php echo rawurlencode($wa_default_message); ?>" target="_blank" rel="noopener noreferrer" class="wa-float" aria-label="<?php echo htmlspecialchars($wa_float_aria); ?>">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
  </a>

  <script>
    window.__whatsappNumber = '<?php echo htmlspecialchars($whatsapp); ?>';
    document.getElementById('current-year').textContent = new Date().getFullYear();
  </script>
  <!-- EmailJS loaded only when needed (deferred) -->
  <script defer src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
  <!-- Main script deferred for better performance -->
  <script defer src="<?php echo htmlspecialchars($base); ?>/script.js?v=<?php echo $js_version; ?>" charset="UTF-8"></script>
</body>
</html>
