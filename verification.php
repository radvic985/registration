<?php
session_start();
require_once('lib/User.php'); // подключает класс для работы с данными пользователя

if (isset($_POST['email']) && isset($_POST['password'])) { // ajax запрос на верификацию авторизации пользователя
    if ($user = User::getUserByEmail($_POST)) { // верифицирует данные пользователя
        $_SESSION['user'] = $user;              // и записывает их в сессию
        print_r($user);
    } else {
        echo 'error'; // или возвращает ошибку авторизации
    }
}
