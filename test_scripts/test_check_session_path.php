<?php
$path = '/var/cpanel/php/sessions/ea-php82';

echo "<b>session_save_path():</b>&emsp;" . session_save_path() . "<br><br>";



echo "<b>Checking if writable:</b> " . $path . "<br><br>";

if (is_writable($path)) {
    echo "<b>Writable:</b> Yes";
} else {
    echo "<b>Writable:</b> No";
}
?>
