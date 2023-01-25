<?php
$parameter = $_GET["number"];
$result = 1;
foreach ($parameter as $value) {
    $result *= $value;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query Array Parameters</title>
</head>

<body>
    <p>Total Perkalian : <?= $result ?></p>
</body>

</html>