<?php
/**
 * Shared helpers. No output when used only for function definitions.
 */
if (!function_exists('e')) {
    function e($text) {
        return htmlspecialchars((string) $text, ENT_QUOTES, 'UTF-8');
    }
}
if (!function_exists('asset')) {
    /** Return full URL for asset (scheme + host + path) so browser never misresolves. */
    function asset($path) {
        $base = defined('ASSET_BASE_URL') ? rtrim(ASSET_BASE_URL, '/') : '';
        return $base . '/' . ltrim($path, '/');
    }
}
