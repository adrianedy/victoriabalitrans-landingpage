<?php
/**
 * Language detection & base URL for multi-language (default ID, others e.g. /en/)
 * Home = main page; only / and /en/ (no /home in URL).
 */

$supported_langs = ['id', 'en'];
$default_lang = 'en';
$prefixed_langs = array_diff($supported_langs, [$default_lang]);
$og_locales = ['id' => 'id_ID', 'en' => 'en_US'];

$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (!empty($_SERVER['SERVER_PORT']) && (int) $_SERVER['SERVER_PORT'] === 443) ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';

$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
$uri = preg_replace('#\?.*$#', '', $uri);
$uri = rtrim($uri, '/') ?: '/';
$segments = array_values(array_filter(explode('/', trim($uri, '/'))));

$current_lang = $default_lang;
$base_path = '';

$first_looks_like_lang = !empty($segments) && preg_match('/^[a-z]{2,3}$/', $segments[0]);

if ($first_looks_like_lang && $segments[0] === $default_lang) {
  $path_rest = implode('/', array_slice($segments, 1));
  $script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));
  $path_prefix = ($script_dir === '' || $script_dir === '/') ? '' : $script_dir;
  $base_url = $scheme . '://' . $host . $path_prefix;
  if ($path_prefix === '/public') {
    $base_url = $scheme . '://' . $host;
  }
  if (($b = getenv('BASE_URL')) !== false && $b !== '') {
    $base_url = rtrim($b, '/');
  }
  $redirect = $base_url . ($path_rest !== '' ? '/' . $path_rest : '') . '/';
  header('Location: ' . $redirect, true, 301);
  exit;
}

if ($first_looks_like_lang && !in_array($segments[0], $supported_langs, true)) {
  $script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));
  $path_prefix = ($script_dir === '' || $script_dir === '/') ? '' : $script_dir;
  $base_url = $scheme . '://' . $host . $path_prefix;
  if ($path_prefix === '/public') {
    $base_url = $scheme . '://' . $host;
  }
  if (($b = getenv('BASE_URL')) !== false && $b !== '') {
    $base_url = rtrim($b, '/');
  }
  header('Location: ' . $base_url . '/', true, 302);
  exit;
}

$path_rest = [];
if (!empty($segments) && in_array($segments[0], $prefixed_langs, true)) {
  $current_lang = $segments[0];
  $base_path = '/' . $current_lang;
  $path_rest = array_slice($segments, 1);
} else {
  $path_rest = $segments;
}

// Base URL = site root for links (no /public in URL). Prefer BASE_URL from env (like Destinexia).
if (($base_url_env = getenv('BASE_URL')) !== false && $base_url_env !== '') {
  $base_url = rtrim($base_url_env, '/');
} else {
  $req_path = $uri;
  if ($base_path !== '' && (substr($req_path, -strlen($base_path)) === $base_path)) {
    $app_root = rtrim(substr($req_path, 0, -strlen($base_path)), '/');
    $path_prefix = ($app_root === '' || $app_root === '/') ? '' : $app_root;
  } else {
    $script_dir_fs = str_replace('\\', '/', dirname($_SERVER['SCRIPT_FILENAME'] ?? __DIR__ . '/../index.php'));
    $doc_root = isset($_SERVER['DOCUMENT_ROOT']) ? rtrim(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']), '/') : '';
    if ($doc_root !== '' && strpos($script_dir_fs, $doc_root) === 0) {
      $path_prefix = substr($script_dir_fs, strlen($doc_root));
      $path_prefix = ($path_prefix === '' || $path_prefix === '/') ? '' : $path_prefix;
    } else {
      $script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/'));
      $path_prefix = ($script_dir === '' || $script_dir === '/') ? '' : $script_dir;
    }
  }
  $base_url = $scheme . '://' . $host . $path_prefix;
  // When doc root is project root and requests rewrite to public/, path_prefix = /public → strip so links are /
  if ($path_prefix === '/public') {
    $base_url = $scheme . '://' . $host;
  }
}

$base_path_parsed = trim((string) (parse_url($base_url, PHP_URL_PATH) ?? ''), '/');
$base_segments = $base_path_parsed === '' ? [] : explode('/', $base_path_parsed);
$last_seg = end($base_segments);
if ($last_seg !== false && in_array($last_seg, $supported_langs, true)) {
  array_pop($base_segments);
  $new_path = implode('/', $base_segments);
  $base_url = $scheme . '://' . $host . ($new_path !== '' ? '/' . $new_path : '');
}

$page_key = empty($path_rest) ? 'home' : $path_rest[0];

$canonical_url = $base_url . $base_path . '/';
if ($page_key !== 'home') {
  $canonical_url = $base_url . $base_path . '/' . implode('/', $path_rest) . '/';
}
$html_lang = $current_lang;
$og_locale = $og_locales[$current_lang] ?? ($current_lang . '_' . strtoupper($current_lang));

$lang_switcher = [];
foreach ($supported_langs as $l) {
  if ($l === $default_lang) {
    $lang_switcher[$l] = $base_url . '/';
  } else {
    $lang_switcher[$l] = $base_url . '/' . $l . '/';
  }
}

if (!in_array($current_lang, $supported_langs, true)) {
  $current_lang = $default_lang;
  $base_path = '';
  $canonical_url = $base_url . '/';
  $html_lang = $default_lang;
  $og_locale = $og_locales[$default_lang] ?? ($default_lang . '_' . strtoupper($default_lang));
}
