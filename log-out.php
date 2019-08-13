<?php
session_start();
session_destroy(); // удаляет сессию пользователя
header('Location: index.php'); // и перенаправляет на главную страницу
exit;