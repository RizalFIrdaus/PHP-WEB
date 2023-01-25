<?php
$title = "Query Parameter";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <h1>Hello, <?= $_GET['firstname'] . " " . $_GET['lastname'] ?></h1>
    <?php foreach ($_GET as $key => $value) : ?>
        <h3><?= "$key : $value" ?></h3>
    <?php endforeach ?>
</body>

</html>