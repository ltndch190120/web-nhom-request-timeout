<?php
require_once 'init.php';
global $db;
$sql = "SELECT * FROM taikhoan";
$result = $db->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);

?>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script>
        function go_login() {
            location.assign("Login.html");
        }
        function go_register() {
            location.assign("register.html");
        }
        function go_chang() {
            location.assign("Changpassword.html");
        }
        function go_cart() {
            location.assign("Cartshop.php");
        }
        function go_profile() {
            location.assign("profile.php");
        }
        function go_logout() {
            location.assign("logout.php");
        }

    </script>

</head>

<body>
    <div style="font-family: Arial, Helvetica, sans-serif;">
        <div
            style="display: flex;width: 100%; height: 40px;padding-left: 5%;padding-right: 5%;background-color: rgb(24, 158, 255);font-size: 14px;">
            <div style="flex:1">
                <a href="index.php">
                    <img style="height: 100%;width: 100%;" src="Image/supperlogo1.png" />
                </a>
            </div>
            <div style="flex:2 ;display: flex; justify-content: center; align-items: center;position: relative;">
                <input type="text" placeholder="Bạn cần tìm gì"
                    style="width: 100% ; height: 90%;margin-left: 3px; border-width: 1;border-radius: 5px;border-color: white;border-style: solid;outline: none; ">
                <span style="position: absolute;right: 15px;top: 10px;font-size: 20px;"
                    class="glyphicon glyphicon-search"> </span>
            </div>
            <?php if($_SESSION): ?>
            <div style="flex:1 ;display: flex; justify-content: center; align-items: center;">
                <button onclick="go_cart()" 
                    style="width: 90%;height: 90%;background-color: rgb(24, 158, 255);color: white; border-width: 1;border-radius: 5px;border-color: white;border-style: solid;outline: none;">
                    <span style="font-size: 20px;" class="	glyphicon glyphicon-shopping-cart"></span>
                    Giỏ Hàng
                </button>

            </div>
            <div class="hoveritemmenu"
                style="flex:1 ;display: flex;color: white; justify-content: center; align-items: center;cursor: pointer;">
                <b>Lịch Sử Mua Hàng</b>
            </div>
            <div class="hoveritemmenu" onclick="go_profile()"
                style="flex:1 ;display: flex;color: white; justify-content: center; align-items: center;cursor: pointer;">
                <b>Cá Nhân </b>
            </div>
            <div class="hoveritemmenu" onclick="go_logout()"
                style="flex:1 ;display: flex;color: white; justify-content: center; align-items: center;cursor: pointer;">
                <b>Đăng Xuất </b>
            </div>
            <?php else: ?>
            <div class="hoveritemmenu" onclick="go_login()"
                style="flex:1 ;display: flex;color: white; justify-content: center; align-items: center;cursor: pointer;">
                <b>Đăng Nhập </b>
            </div>
            <div class="hoveritemmenu" onclick="go_register()"
                style="flex:1 ;display: flex;color: white; justify-content: center; align-items: center;cursor: pointer;">
                <b>Đăng Ký </b>
            </div>
            <?php endif; ?> 
        </div>
        <div
            style="display: flex;width: 100%; height: 40px;padding-left: 5%;padding-right: 5%;background-color: yellow;">
            <div class="hovermenu"
                style="flex:1;color: black; justify-content: center; align-items: center;display: flex;">
                <span style="color: gray; font-size: 30px;margin-right: 5px;" class="fab fa-apple"> </span>
                <span style=" font-size: 20px;">iPhone</span>
            </div>
            <div class="hovermenu"
                style="flex:1;color: black; justify-content: center; align-items: center;display: flex;">
                <p style="margin: 0%;font-size: 20px;color: blue;">SamSung</p>
            </div>
            <div class="hovermenu"
                style="flex:1;color: black; justify-content: center; align-items: center;display: flex;">
                <p style="margin: 0%;font-size: 20px;"> Xiaomi </p>
            </div>
            <div class="hovermenu"
                style="flex:1;color: black; justify-content: center; align-items: center;display: flex;">
                <p style="margin: 0%;font-size: 20px;color: green;"> OPPO</p>
            </div>
            <div class="hovermenu"
                style="flex:1;color: black; justify-content: center; align-items: center;display: flex;">
                <p style="margin: 0%;font-size: 20px;"> RealMe</p>
            </div>
            <div class="hovermenu"
                style="flex:1;color: black; justify-content: center; align-items: center;display: flex;">

                <span style="font-size: 23px;margin-right: 5px;" class="fas fa-headphones-alt"></span>
                <span style="font-size: 20px;">Phụ Kiện</span>
            </div>
        </div>

  