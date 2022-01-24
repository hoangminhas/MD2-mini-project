<?php
include_once "Auth.php";
$aut = new Auth();
$userlists = $aut->loadData();
 ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <thead>
        <th>STT</th>
        <th>Username</th>
    </thead>
    <tbody>
        <?php foreach ($userlists as $key => $value): ?>
        <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $value['username'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<button><a href="index.php">Log out</a></button>
</body>
</html>
