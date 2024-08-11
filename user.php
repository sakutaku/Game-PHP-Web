<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User cabinet</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <?php require_once "blocks/header.php"; ?>

    <div class="feedback">
        <div class="container">
            <h2>User cabinet</h2>
            <p>
                <span>Login: </span>
                <b>
                  <?= $_COOKIE['login'] ?>
                </b>
                
            </p>
        </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>
</body>

</html>