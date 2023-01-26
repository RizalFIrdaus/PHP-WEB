<?php

session_start();


if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
    header("Location: /session/member.php");
}

$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["username"] == "rizal" && $_POST["password"] == "secret") {
        $_SESSION["login"] = true;
        $_SESSION["user_login"] = "rizal";
        header("Location: /session/member.php");
        exit();
    } else {
        $error = "Login Gagal";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>

<body>

    <h1>FORM LOGIN</h1>
    <?php if ($error != "") : ?>
        <p><?= $error ?></p>
    <?php endif ?>
    <form action="/session/login.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <br>
        <div style="margin-top:20px;margin-bottom:20px;">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <br>
        <button type="submit">Login</button>
    </form>

</body>

</html>