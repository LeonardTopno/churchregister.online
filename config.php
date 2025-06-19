<?php
// Dynamically determine the base URL relative to app root
$base_url = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/') . '/';

// Example:
// From /admin/index.php        → $base_url = /app.churchregister.in/
// From /user/dashboard.php     → $base_url = /app.churchregister.in/
?>


