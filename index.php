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
<h1>Login</h1>
<form action="" method="post">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <button name="btn" value="login">Login</button>
    <button name="btn" value="register">Register</button>
</form>
</body>
</html>

<?php
include_once "Auth.php";
if ($_REQUEST['btn'] == 'login') {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $auth = new Auth();
        $auth->isLogin($username, $password);
    }
} elseif ($_REQUEST['btn'] == 'register') {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $userLists = [
            "username" => $username,
            "password" => $password
        ];
        $auth = new Auth();
        $auth->saveData($userLists);
    }
}


?>