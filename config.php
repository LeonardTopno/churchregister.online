<?php
// Dynamically determine the base URL relative to app root
// $base_url = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/') . '/';

// Example:
// From /admin/index.php        → $base_url = /app.churchregister.in/
// From /user/dashboard.php     → $base_url = /app.churchregister.in/




$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST']; //app.churchregister.in

$scriptParts = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'));
$projectFolder = $scriptParts[0] ?? '';
$basePath = $projectFolder ? '/' . $projectFolder : '';

$base_url = rtrim($protocol . $host . $basePath, '/') . '/';


// For debugging
// echo "<pre>Protocol : $protocol</pre>";
// echo "<pre>Host : $host</pre>";
// echo "<pre>Script Directory : $scriptDir</pre>";
// echo "<pre>Base URL : $base_url</pre>";



?>


