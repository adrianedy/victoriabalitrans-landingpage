<?php
/**
 * Loader: shared data (config/{lang}/_shared.php) + page data (config/{lang}/{page}.php).
 * Leading _ = not a page, avoids conflict with page_key.
 */
require __DIR__ . '/lang.php';

$lang_dir = __DIR__ . '/' . $current_lang;

$shared_file = $lang_dir . '/_shared.php';
if (!is_file($shared_file)) {
  $shared_file = __DIR__ . '/id/_shared.php';
}
require $shared_file;

$page_found = false;
if (strpos($page_key, '_') !== 0) {
  $page_file = $lang_dir . '/' . $page_key . '.php';
  if (is_file($page_file)) {
    require $page_file;
    $page_found = true;
  }
}
