<?php
include 'User.php';
include 'UserManager.php';
$accountManager = new UserManager("data.json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $account = $_POST['account'];
    $password = $_POST['password'];

    $accountManager->loadData();

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
<body>
<form action="" method="post">
    Tên tài khoản: <input type="text" name="account" id=""><br>
    Mật khẩu:<input type="password" name="password" id=""><br>
    <button type="submit">Đăng nhập</button>
</form>
<a href="trang-dang-ky.php">Đăng ký</a>
</body>
</html>