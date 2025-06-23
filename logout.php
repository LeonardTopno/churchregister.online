<?php
// Load base URL
require_once realpath(__DIR__ . '/includes/base_url.php');

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 1. Clear session data
$_SESSION = [];

// 2. Delete session cookie (with proper fallback for domain)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();

    // ✅ Normalize domain (remove port from localhost if present)
    $domain = explode(':', $_SERVER['HTTP_HOST'])[0];

    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $domain,                        // override domain
        $params["secure"],
        $params["httponly"]
    );
}

// 3. Destroy session
session_destroy();

// 4. Optional: Prevent page caching on redirect target
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

// 5. Redirect to login
header("Location: " . $base_url . "index.php");
exit();
