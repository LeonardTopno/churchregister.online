<?php
// Enable output buffering to avoid header issues
ob_start();

// 1. Detect if running locally
$isLocal = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false;

// 2. Set custom session path for production
if (!$isLocal) {
    ini_set('session.save_path', '/home2/churchregister/tmp');
}

// 3. Configure session cookie settings
session_set_cookie_params([
    'lifetime' => 3600, // 1 hour
    'path' => '/',
    'domain' => $_SERVER['HTTP_HOST'],
    'secure' => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on',
    'httponly' => true,
    'samesite' => 'Lax'
]);

// 4. Start the session
session_start();

// 5. Build base URL for redirection or assets
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$base_url = $protocol . $host . '/';

// Optional: fallback for localhost (strip subfolder if any)
$scriptParts = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'));
$projectFolder = $scriptParts[0] ?? '';
$base_url_4_local = $protocol . $host . '/' . $projectFolder . '/';

if ($isLocal) {
    $base_url = $base_url_4_local;
}

// 6. Auth guard: redirect to login if session not set
if (!isset($_SESSION['username'])) {
    // For debugging:
    echo "<script>console.error('Session not set. Redirecting to login.');</script>";
    header("Location: " . $base_url . "index.php");
    exit();
}

// Optional: show session status (for dev only)
/* */
echo "✅ Logged in as: " . $_SESSION['username'];
echo "<pre>Session Save Path: " . session_save_path() . "</pre>";
echo "<pre>Session ID: " . session_id() . "</pre>";
echo "<pre>Is app running locally: {$isLocal} </pre>";
echo "<pre>Base URL: " . $base_url . "</pre>";

?>
