<?php
session_start();
if (!isset($_SESSION['Username']))
    header("Location: user-login.php");?>

<!DOCTYPE html>
<html lang="ar">
    <head>
        <title>El-Safwa car</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link rel="icon" href="../img/logo-tran.png">
        <link rel="stylesheet" href="../assets/style.css">
        <link href="../fontawesome-free-6.0.0-web/css/all.min.css" rel="stylesheet">
        <link href="../fontawesome-free-6.0.0-web/css/fontawesome.min.css" rel="stylesheet">
    </head>
    <body>
            <!-------------------- navbar -------------------->
        <section class="login-nav test-nav">
            <a href="../index.php"><i class="fa-solid fa-house"></i></a>
        </section>
            <!-------------------- Exercise-Course -------------------->
        <section class="contact-us grid">
            <div class="get-license test-content grid">
                <h1>اختبارات رخص  القيادة</h1>
                <div class="tests grid">
                    <a href="exam.php">اختبار ١</a>
                    <a href="exam2.php">اختبار ٢</a>
                    <a href="exam3.php">اختبار ٣</a>
                    <a href="exam4.php">اختبار ٤</a>
                    <a href="exam5.php">اختبار ٥</a>
                    <a href="exam6.php">اختبار ٦</a>
                    <a href="exam7.php">اختبار ٧</a>
                    <a href="exam8.php">اختبار ٨</a>
                    <a href="exam9.php">اختبار ٩</a>
                    <a href="exam10.php">اختبار ١٠</a>
                </div>
            </div>
        </section>
        <script src="../assets/Navbar.js"></script>
    </body>
</html>