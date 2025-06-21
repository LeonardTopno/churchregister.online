<?php
// Enable output buffering to safely use header() later
ob_start();

// Determine environment
$isLocal = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;

// Use a custom session path on production
if (!$isLocal) {
    ini_set('session.save_path', '/home2/churchregister/tmp');
}

// Configure secure session cookie
session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => $_SERVER['HTTP_HOST'],
    'secure' => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on',
    'httponly' => true,
    'samesite' => 'Lax'
]);

// Start session
session_start();

// Dynamically determine base URL
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$base_url = $protocol . $host . '/';

// Optional fix for localhost subfolder
if ($isLocal) {
    $scriptParts = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'));
    $projectFolder = $scriptParts[0] ?? '';
    $base_url = $protocol . $host . '/' . $projectFolder . '/';
}

// Redirect to login if session is not set
if (!isset($_SESSION['username'])) {
    // Optional: debug output for failed session
    error_log("❌ Session not set. Current PHPSESSID: " . ($_COOKIE['PHPSESSID'] ?? 'not set'));
    header("Location: " . $base_url . "index.php");
    exit();
}

// OPTIONAL: assign username for easy access
$username = $_SESSION['username'];

// Optional: show session status (for dev only)
/* */
// echo "✅ Logged in as: " . $_SESSION['username'];
// echo "<pre>Session Save Path: " . session_save_path() . "</pre>";
// echo "<pre>Session ID: " . session_id() . "</pre>";
// echo "<pre>Is app running locally: {$isLocal} </pre>";
// echo "<pre>Base URL: " . $base_url . "</pre>";