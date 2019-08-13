<?php
session_start();
if (isset($_POST['sign_up'])) { // пришли данные регистрации
    require_once('lib/FileUploader.php'); // подключает класс загрузчика файлов
    require_once('lib/User.php'); // подключает класс для работы с данными пользователя

    if (!isset($_POST['file']) || empty($_POST['file'])) {
        $_POST['file'] = FileUploader::uploadFile($_FILES); // вызывается только при регистрации
    }

    if (isset($_POST['edit']) && $_POST['edit'] == 'yes') { // ajax запрос редактирования профайла пользователя
        if (User::saveUser($_POST)) { // сохраняет данные профайла
            if ($user = User::getUserByEmail($_POST)) { // получает данные пользователя
                $_SESSION['user'] = $user;
            }
            echo 'ok';
            exit;
        } else {
            echo 'error';
            exit;
        }
    } elseif (User::saveUser($_POST)) { // сохраняет данные пользователя при регистрации
        header('Location: sign-in.php?sign-up=success'); // редирект на страницу авторизации
        exit;
    } else {
        $signUp = 'error'; // ошибка регистрации
    }
}
// подключает шаблоны навигационной панели, формы регистрации и футера
require_once('layouts/main-layout.php');
require_once('layouts/register.php');
require_once('layouts/footer.php');
