<?php

// Get the current URL
$currentURL = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Check if the client wants to reset attempts
if (isset($_GET['reset'])) {
    setcookie("attempt_$currentURL", "", time() - 3600); // Expire cookie
    die("Attempts for $currentURL have been reset.");
}

// Check if the client has visited this URL before
if (isset($_COOKIE["attempt_$currentURL"])) {
    setcookie("attempt_$currentURL", ++$_COOKIE["attempt_$currentURL"], time() + (86400 * 366), "/"); // 1 year expiry
    echo "Attempt {$_COOKIE["attempt_$currentURL"]}";
} else {
    setcookie("attempt_$currentURL", 1, time() + (86400 * 366), "/"); // 1 year expiry
    echo date("Y-m-d H:i:s");
}
