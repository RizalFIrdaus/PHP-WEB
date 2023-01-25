<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM POST</title>
</head>

<body>
    <form action="form-post.php" method="post">
        <label for="name">Name</label>
        <input type="text" id=name name="name" value="<?= isset($_POST['name']) ? $_POST['name'] : "" ?>">
        <label for="age">Age</label>
        <input type="text" id=age name="age" value="<?= isset($_POST['age']) ? $_POST['age'] : "" ?>">
        <button type="submit">Send</button>
    </form>
    <h1>Name: <?= isset($_POST["name"]) ? $_POST["name"] : "" ?></h1>
    <h1>Age : <?= isset($_POST["age"]) ? $_POST["age"] : "" ?></h1>
</body>

</html>