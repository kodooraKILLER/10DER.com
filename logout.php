<?php
session_start();
session_unset();
session_destroy();
setcookie('user', '',time() - 3600);
setcookie('category', '',time() - 3600);
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}
header('Location: 10DER.php');
?>