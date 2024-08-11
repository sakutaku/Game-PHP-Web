<?php
require "db.php";
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $username = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS));
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

    if (strlen($login) < 2) {
        echo "Login must be more than 2 symbols!";
        exit;
    }

    if (strlen($username) < 2) {
        echo "Name must be more than 2 symbols!";
        exit;
    }

    if (strlen($email) < 2 && !str_contains($email, '@')) {
        echo "Email error!";
        exit;
    }

    if (strlen($password) < 2) {
        echo "Password must be more than 2 symbols!";
        exit;
    }

// Password
$salt = '1234`ojkbv-??0-';
$password = md5($salt.$password);   

// INSERT
$sql = 'INSERT INTO users(login, username, email, password) VALUES(?, ?, ?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$login, $username, $email, $password]);

header('Location: /');