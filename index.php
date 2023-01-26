<?php
$title = "PHP WEB";
$content = "WEB";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

</head>

<h1><?= $_COOKIE["author"] ?></h1>

<h1><?= $content ?></h1>

<!-- Php Server Global Server -->
<?php foreach ($_SERVER as $key => $data) : ?>
    <p><?= "$key : $data"  ?></p>
<?php endforeach ?>

<body>

</body>

</html>