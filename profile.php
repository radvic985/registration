<?php
session_start();
require_once('layouts/main-layout.php'); // подключает главный шаблон и навигационную панель
if (isset($_GET['edit'])) {
    if ($_GET['edit'] == 'error') {
        $edit = 'error'; // передается ошибка в шаблон редактирования профиля о неудачном редактировании
    }
    require_once('layouts/edit-profile.php'); // подключает шаблон страницы редактирования профиля
} else {
    require_once('layouts/profile-layout.php'); // подключает шаблон страницы профиля
}
require_once('layouts/footer.php'); // подключает шаблон футера сайта
