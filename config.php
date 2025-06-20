<?php
// Dynamically determine the base URL relative to app root
// $base_url = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/') . '/';

// Example:
// From /admin/index.php        → $base_url = /app.churchregister.in/
// From /user/dashboard.php     → $base_url = /app.churchregister.in/




$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];
$scriptParts = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'));
$projectFolder = $scriptParts[0] ?? '';
$basePath = $projectFolder ? '/' . $projectFolder : '';
$base_url_1 = rtrim($protocol . $host . $basePath, '/') . '/';
$base_url = $protocol . $host . '/';