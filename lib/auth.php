<?php
require "db.php";
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
    $password = trim(filter_var($_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

    if (strlen($login) < 2) {
        echo "Login must be more than 2 symbols!";
        exit;
    }

    if (strlen($password) < 2) {
        echo "Password must be more than 2 symbols!";
        exit;
    }

// Password
$salt = '1234`ojkbv-??0-';
$password = md5($salt.$password);    

// FIND USER IN DB
$sql = 'SELECT id FROM users WHERE login = ? AND password = ?';
$query = $pdo->prepare($sql);
$query->execute([$login, $password]);


if ($query->rowCount() === 0) {
    echo "No such user!";
} else {
    setcookie("login", $login, time() + 3600 * 24 * 30, "/");
    header('Location: /user.php'); 
}

