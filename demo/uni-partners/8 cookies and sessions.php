<?php

session_start();

$_SESSION["favcolor"] = "green";

echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";

print_r($_SESSION);

// remove all session variables
session_unset();

// destroy the session
session_destroy();

unset($_SESSION["username"]);

/*
 * COOKIES
 */

//setcookie(name, value, expire, path, domain, secure, httponly);
$cookie_name = "user";
$cookie_value = "Alex Porter";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

// DELETE set the expiration date to one hour ago
setcookie("user", "", time() - 3600);

if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}