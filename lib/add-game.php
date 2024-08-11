<?php
require "db.php";
$image = trim(filter_var($_POST['image'], FILTER_SANITIZE_SPECIAL_CHARS));
$followers = trim(filter_var($_POST['followers'], FILTER_SANITIZE_SPECIAL_CHARS));

if (strlen($image) < 3) {
    echo "Image must be more than 2 symbols!";
    exit;
}

if (strlen($followers) < 1) {
    echo "Followers must be more than 2 symbols!";
    exit;
}

// SQL 
$sql = 'INSERT INTO trending(image, followers) VALUES(?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$image, $followers]);

header('Location: /trending.php');