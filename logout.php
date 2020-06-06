<?php
session_start();
session_unset();
session_destroy();
setcookie('user', '',time() - 3600);
setcookie('category', '',time() - 3600);
header('Location: 10DER.php');
?>