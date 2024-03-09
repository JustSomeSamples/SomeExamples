<?php

// Start session
session_start();

// Get the current URL
$currentURL = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Check if the client wants to reset attempts
if (isset($_GET['reset'])) {
    unset($_SESSION['urls'][$currentURL]);
    die("Attempts for $currentURL have been reset.");
}

// Check if the client has visited this URL before
if (isset($_SESSION['urls'][$currentURL])) {
    echo "Attempt " . ++$_SESSION['urls'][$currentURL];
} else {
    $_SESSION['urls'][$currentURL] = 1;
    echo date("Y-m-d H:i:s");
}
