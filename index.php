<?php
$url = 'http://' . $_SERVER['HTTP_HOST'];            // Get the server
$url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); // Get the current directory
$url .= '/public/';            // <-- Your relative path
header('Location: ' . $url, true, 302); 
?>
