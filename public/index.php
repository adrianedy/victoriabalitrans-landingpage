<?php
/**
 * Router: detect language + page, load data (config/{lang}/_shared.php + config/{lang}/{page_key}.php), include layout.
 * Convention: leading _ = not a page. Same as Destinexia.
 */
require __DIR__ . '/config/site-data.php';
require __DIR__ . '/includes/helpers.php';

if (!isset($page_found) || !$page_found) {
  http_response_code(404);
  header('Content-Type: text/html; charset=UTF-8');
  echo '<!DOCTYPE html><html lang="id"><head><meta charset="UTF-8"><title>404</title></head><body><h1>Page not found</h1><p><a href="/">Home</a></p></body></html>';
  exit;
}

include __DIR__ . '/templates/_layout.php';
