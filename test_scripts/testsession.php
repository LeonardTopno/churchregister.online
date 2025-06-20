<?php
// FORCE custom session setup
session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => 'app.churchregister.in',
    'secure' => false,      // ✅ must match HTTPS
    'httponly' => true,
    'samesite' => 'Lax'
]);

// Set a working session path (optional if /var/cpanel/... is broken)
ini_set('session.save_path', '/home2/churchregister/tmp'); // replace with your actual writable path

session_start();

$sessionPath = session_save_path();
$sessionFile = $sessionPath . "/sess_" . session_id();

echo "Session Save Path: <code>$sessionPath</code><br>";
echo "Session File: <code>$sessionFile</code><br>";


if (!isset($_SESSION['visited'])) {
    $_SESSION['visited'] = 1;
    echo "first visit. Session started. <br>";
} else {
    $_SESSION['visited']++;
    echo "🔁 Visit #" . $_SESSION['visited'];
}

echo "<br><b>Session ID:</b> " . session_id();
echo "<br><b>Session Data:</b><pre>" . print_r($_SESSION, true) . "</pre>";


if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = 'Leo';
    echo "✅ Session created and username set to: <b>" . $_SESSION['username'] . "</b><br>";
} else {
    echo "✅ Session already exists. Logged in as: <b>" . $_SESSION['username'] . "</b><br>";
}

setcookie("debug_cookie", "test_value", time() + 3600, "/");

echo "Session ID: " . session_id() . "<br>";
echo "Headers Sent? ";
echo headers_sent() ? "Yes" : "No";


echo "<hr><b>SESSION:</b><pre>";
print_r($_SESSION);
echo "</pre>";

echo "<hr><b>COOKIE:</b><pre>";
print_r($_COOKIE);
echo "</pre>";

phpinfo(); // to inspect session config (search for session.cookie_*)

