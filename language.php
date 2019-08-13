<?php
session_start();
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang']; // записывает метку языка в сессию
    echo 'ok';
}