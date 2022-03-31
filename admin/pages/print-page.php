<?php
include "../connect.php";
if (!isset($_SESSION['Username']))
    header("Location: ../index.php");

if (isset($_GET['id']))
    $id=$_GET['id'];
else header("Location: ../index.php");

$sql = $con->prepare("SELECT * FROM `users` WHERE UserID = $id");
$sql->execute();
$user = $sql->fetch();

?>
<!DOCTYPE html>
<html>
<head>
    <title>طباعة كود العميل</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=display-width,initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            display: flex;
            width: 100%;
            height: 100vh;
            justify-content: center;
            align-items: center;
            font-size: 30px;
        }
        .container {
            border: solid 2px #dddcdc;
            padding: 20px 30px;
        }
        .nav {
            border-bottom: solid 2px #dddcdc;
            margin-bottom: 20px;
        }
        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="nav">
        <h3><?php echo $user['Firstname'] . ' ' . $user['Lastname'];?></h3>
    </div>
    <div class="main">
        <p><b>اسم المستخدم : </b><?php echo $user['Username'];?></p>
        <p><b>الرقم السري : </b><?php echo base64_decode($user['Password']);?></p>
    </div>
</div>
</body>
</html>
