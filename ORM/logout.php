<?php
session_start();

include_once 'db.php';
R::close();

unset($_SESSION);
setcookie("user", "", time(), "/");
session_destroy();
header("Location: /");