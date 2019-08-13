<?php
require_once('lib/T.php');
if (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else {
    $lang = 'en';
}
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <title><?= T::lang('Authorization', $lang) ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!--    <link rel="stylesheet" href="/resources/demos/style.css">-->
    <!--    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body class="h-100 d-flex flex-column justify-content-between">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-4 d-flex flex-column">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                <?= T::lang('Language', $lang) ?>
            </a>
            <div class="dropdown-menu">
                <button class="dropdown-item btn btn-link en lang" name="en">English</button>
                <button class="dropdown-item btn btn-link ru lang" name="ru">Russian</button>
                <button class="dropdown-item btn btn-link ua lang" name="ua">Ukrainian</button>
            </div>
        </li>
        <?php if (!isset($_SESSION['user'])) { ?>
            <li class="nav-item">
                <a class="nav-link active" href="/sign-in.php"><?= T::lang('Log In', $lang) ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link register" href="/sign-up.php"><?= T::lang('Sign Up', $lang) ?></a>
            </li>
        <?php } else {
            $user = $_SESSION['user'];
            ?>
            <li class="nav-item">
                <a href="/profile.php">
                    <img src="<?= $user['file'] ?>" alt="photo" class="photo">
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="/profile.php">
                    <?= $user['first_name'] . ' ' . $user['last_name']; ?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link edit" href="/profile.php?edit=yes"><?= T::lang('Edit Profile', $lang) ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/log-out.php"><?= T::lang('Log out', $lang) ?></a>
            </li>
        <?php } ?>
    </ul>
</nav>
<script src="js/language.js"></script>