<?php
include "User.php";
include "UserManager.php";
$accountManager = new UserManager("data.json");

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $account = $_POST["account"];
    $password = $_POST["password"];

    $data = [
        "account" => $account,
        "password" => $password
    ];

    $accountManager->addUser($data);
    header('location: index.php');
}
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
<style>
    form {
        width: 30%;
    }
</style>

<body>
<form action="" method="post">
    <fieldset>
        <legend>Tạo tài khoản</legend>
        Tên tài khoản: <input type="text" name="account"><br>
        Mật khẩu: <input type="password" name="password"<br>
        <button type="submit">Đăng ký</button>
    </fieldset>
</form>
</body>
</html>