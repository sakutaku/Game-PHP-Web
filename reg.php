<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <?php require_once "blocks/header.php"; ?>

    <div class="feedback">
        <div class="container">
            <h2>Register</h2>
            <form method="post" action="/lib/reg.php" >
                <div class="inline">
                    <div>
                        <label>Login</label>
                        <input name="login" type="text">
                    </div>
                    <div>
                        <label>Name</label>
                        <input name="username" type="text">
                    </div>
                </div>
                <label>Email Address</label>
                <input type="email"  name="email" class="one-line">

                <label>Password</label>
                <input type="password" name="password" class="one-line">

                <button type="submit">Send</button>
            </form>
        </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>
</body>

</html>