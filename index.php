<?php
$user_cookie = "Valid Cookie - I would personally store this in a database.";
$user_IP = "Valid User IP - I would store this in a database, being set after each password login.";
if(!$_COOKIE['session']) {
    setcookie("session", "null", time()+3600*24);
}
if($_COOKIE['session'] == $user_cookie && $_SERVER['REMOTE_ADDR'] == $user_IP) {
    echo "<h1>Welcome!</h1>";
} else if($_COOKIE['session'] == $user_cookie && $_SERVER['REMOTE_ADDR'] !== $user_IP) {
    echo "<h1>Your Session could NOT be verified</h1>";
}
?>
