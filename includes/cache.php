<?php
// Simple Page Cache Script
$cache_time = 3600; // 1 hour
$cache_folder = dirname(__FILE__) . '/../cache/';

if (!is_dir($cache_folder)) {
    mkdir($cache_folder, 0777, true);
}

$cache_file = $cache_folder . md5($_SERVER['REQUEST_URI']) . '.html';

// Bypass cache if URL has ?nocache or ?clear
$bypass = isset($_GET['nocache']) || isset($_GET['clear']);

if (!$bypass && file_exists($cache_file) && (time() - $cache_time < filemtime($cache_file))) {
    echo "<!-- Cached copy, generated " . date('H:i', filemtime($cache_file)) . " -->\n";
    include($cache_file);
    exit;
}

// If forcing clear, delete the specific file
if ($bypass && file_exists($cache_file)) {
    unlink($cache_file);
}

ob_start(); // Start output buffering

// This function will be called at the end of the page
function save_cache()
{
    global $cache_file;
    $content = ob_get_clean();
    // Only save if it's a successful response and not bypassing
    if (!isset($_GET['nocache'])) {
        file_put_contents($cache_file, $content);
    }
    echo $content;
}
register_shutdown_function('save_cache');
?>
