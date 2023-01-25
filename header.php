<?php
$client = $_SERVER["HTTP_CLIENT_NAME"];
header("Title:BELAJAR WEB PHP");
header("Author:M RIZAL F");
header("Location: /hello.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEADER</title>
</head>

<body>
    <h1><?= $client ?></h1>
</body>

</html>