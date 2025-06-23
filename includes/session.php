<?php
ob_start();

// 1. Environment detection
$isLocal = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;

// 2. Session path for production
if (!$isLocal) {
    ini_set('session.save_path', '/home2/churchregister/tmp');
}

$domain = $_SERVER['HTTP_HOST'];
// Remove port if present (e.g., localhost:8888 becomes localhost)
if (strpos($domain, ':') !== false) {
    $domain = explode(':', $domain)[0];
}


// 3. Session cookie config
session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => $domain, // ✅ clean domain
    'secure' => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on',
    'httponly' => true,
    'samesite' => 'Lax'
]);

// 4. Start session
session_start();

// 5. Base URL logic
require_once __DIR__ . '/base_url.php';

// 8. Define allowed public page(s)
$loginPath = parse_url($base_url . "index.php", PHP_URL_PATH);
$publicPages = [
    $loginPath,
    rtrim($loginPath, '/') . '/', // also allow base if accessed without filename
];

// 6. Public pages allowed without login
$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $publicPages = [
//     '/' . $projectRoot . '/',
//     '/' . $projectRoot . '/index.php',
//     '/index.php' // fallback if needed
// ];

// 7. Protect all non-public routes unless manually skipped 
//empty($skipSessionCheck) && 
if (!isset($_SESSION['username']) && !in_array($currentPath, $publicPages)) {
    header("Location: " . $base_url . "index.php");
    exit();
}

// 8. (Optional) Debug output
//if ($isLocal) {
    echo "✅ Logged in as: " . ($_SESSION['username'] ?? 'Not logged in');
    echo "<pre>Session Save Path: " . session_save_path() . "</pre>";
    echo "<pre>Session ID: " . session_id() . "</pre>";
    echo "<pre>Is app running locally: {$isLocal}</pre>";
    echo "<pre>Base URL: {$base_url}</pre>";
    //echo "<pre>Project Root: {$projectRoot}</pre>";
    echo "<pre>Current Path: {$currentPath}</pre>";
    echo "<pre>Public Pages: " . print_r($publicPages, true) . "</pre>";
//}
