<?php
session_start();

if ($_SESSION["login"] !== true) {
    header("Location: /session/login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
</head>

<body>

    <h1><?= $_SESSION["user_login"] ?></h1>
    <a href="/session/logout.php">Logout</a>
</body>

</html>