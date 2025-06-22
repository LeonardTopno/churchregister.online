<?php
// Enable output buffering to safely use header() later
ob_start();

// Determine environment
$isLocal = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;

// Use a custom session path on production
if (!$isLocal) {
    // ini_set('session.save_path', '/home2/churchregister/tmp');  #TODO: Delete if next line is successful
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


// Redirect to login if session is not set
// if (!isset($_SESSION['username'])) {
//     // Optional: debug output for failed session
//     error_log("❌ Session not set. Current PHPSESSID: " . ($_COOKIE['PHPSESSID'] ?? 'not set'));
//     header("Location: " . $base_url . "index.php");
//     exit();
// }

// Allow unauthenticated access only to index.php (login page)
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