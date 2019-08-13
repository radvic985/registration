<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: profile.php'); // если пользователь авторизировался, тогда перенаправляет его на страницу профайла
    exit;
} else {
    header('Location: sign-in.php'); // если нет, тогда на страницу авторизации
    exit;
}