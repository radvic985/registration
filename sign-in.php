<?php
session_start();
// флаг успешной/неуспешной регистрации для сообщения
$signUp = isset($_GET['sign-up']) && $_GET['sign-up'] == 'success' ? true : false;

// подключает шаблоны навигационной панели, формы авторизации и футера
require_once('layouts/main-layout.php');
require_once('layouts/login.php');
require_once('layouts/footer.php');
