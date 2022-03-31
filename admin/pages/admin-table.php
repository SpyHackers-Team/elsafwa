<?php
include "../connect.php";
if (!isset($_SESSION['Username']))
    header("Location: ../index.php");


$sql = $con->prepare("SELECT * FROM `reversation`");
$sql->execute();
$reserves = $sql->fetchAll();

?>

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
            <!-------------------- Login -------------------->
        <section class="admin-table grid">
            <div class="table-content grid">
                <table class="table table2">
                    <caption>
                        <div>
                            <a href="admin-table.php">بيانات التسجيل</a>
                            <a href="users-info.php">بيانات العملاء</a>
                        </div>
                        <h2>بيانات التسجيل</h2>
                            <a href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
                    </caption>
                    <tbody>
                        <tr>
                            <td>الاسم</td>
                            <td>رقم الهاتف</td>
                            <td>ميعاد الحجز</td>
                        </tr>
                        <?php foreach ($reserves as $reserve) {?>
                        <tr>
                            <td><?php echo $reserve['full_name'];?></td>
                            <td><?php echo $reserve['phone'];?></td>
                            <td><?php echo $reserve['day'] . ' : ' . $reserve['time'];?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </section>
    </body>
</html>