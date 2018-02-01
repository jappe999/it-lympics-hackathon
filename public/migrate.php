<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
$output = shell_exec('php ../artisan migrate');
echo "<pre>$output</pre>";
