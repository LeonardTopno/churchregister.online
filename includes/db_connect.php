<?php

// More graceful and debuggable
$envPath = realpath(__DIR__ . '/.env.php');

if (!$envPath) {
    die("❌ .env.php not found.");
}

$env = require $envPath;
// $env = require_once __DIR__ . '/../.env.php';

$dbHost = $env['DB_HOST'];
$dbUser = $env['DB_USER'];
$dbPass = $env['DB_PASS'];
$dbName = $env['DB_NAME'];

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die("❌ Database connection failed: " . $conn->connect_error);
}