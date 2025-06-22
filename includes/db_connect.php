<?php

// Load environment configuration
$env_path = realpath(__DIR__ . '/.env.php');

if (!$env_path) {
    die("❌ .env.php not found.");
}

$env = require $env_path; // Includes the file every time it's called 

// require_once is not used as it might silently fail on later includes in the same request
// — because PHP will skip including the file again, and $env won't get redefined.

// Extract DB config
$dbHost = $env['DB_HOST'];
$dbUser = $env['DB_USER'];
$dbPass = $env['DB_PASS'];
$dbName = $env['DB_NAME'];

// Try connecting
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check connection
if ($conn->connect_error) {
    
    echo "Database connection failed: " . $conn->connect_error;
    die("❌ Database connection failed: " . $conn->connect_error);
}

// Optional: check connection
// echo "Database Connection Successful!";