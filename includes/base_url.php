<?php

// Dynamically determine base URL

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'];
$base_url = $protocol . $host . '/';

// fix for localhost subfolder
$isLocal = strpos($host, 'localhost') !== false;
if ($isLocal) {
    $scriptParts = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'));
    $projectFolder = $scriptParts[0] ?? '';
    $base_url = $protocol . $host . '/' . $projectFolder . '/';
}
