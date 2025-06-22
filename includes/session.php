<?php
// 1. Enable output buffering to safely use header() later
ob_start();

// 2. Determine environment
$isLocal = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;

// 3. Use a custom session path on production

if (!$isLocal) {
    // Load environment configuration
    $env_path = realpath(__DIR__ . '/.env.php');
    if (!$env_path) {
        die("❌ .env.php not found.");
    }
    $env = require $env_path;
    ini_set('session.save_path', $env['SESSION_PATH']); #TODO: This should happen only if the default session.save_path is broken 
}

// 4. Configure secure session cookie
session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => $_SERVER['HTTP_HOST'],
    'secure' => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on',
    'httponly' => true,
    'samesite' => 'Lax'
]);

// 5. Start session
session_start();


// 6. Redirect to login if session is not set
// if (!isset($_SESSION['username'])) {
//     // Optional: debug output for failed session
//     error_log("❌ Session not set. Current PHPSESSID: " . ($_COOKIE['PHPSESSID'] ?? 'not set'));
//     header("Location: " . $base_url . "index.php");
//     exit();
// }

// 6. Allow unauthenticated access only to index.php (login page)
$currentPage = basename($_SERVER['SCRIPT_NAME']);
//echo "<pre>Current Page: " . $currentPage . "</pre>";
if (!isset($_SESSION['username']) && $currentPage !== 'index.php') {
    header("Location: /index.php");
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