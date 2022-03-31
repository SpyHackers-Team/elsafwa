<?php
include "../connect.php";
if (!isset($_SESSION['Username']))
    header("Location: ../index.php");
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

<?php
$sql = $con->prepare("SELECT * FROM `users`");
$sql->execute();
$users = $sql->fetchAll();

$do = '';
$id = '';
if (isset($_GET['do']))
    $do = $_GET['do'];

if ($do == 'add') {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $uname = $_POST['username'];
        $pass = base64_encode($_POST['pass']);
        $phone = $_POST['phone'];

        $sql1 = $con->prepare("SELECT * FROM `users` WHERE `Username` = ?");
        $sql1->execute(array($uname));
        $count = $sql1->rowCount();
        if ($count > 0) {
            echo "Sorry This Username Is Already Exist";
            header("refresh: 2;url=users-info.php");
        }
        else {
            $sql2 = $con->prepare("INSERT INTO `users` (`Firstname`, `Lastname`, `Username`, `Password`, `Phone`)
                                        VALUE (:fname, :lname, :uname, :zpass, :zphone)");
            $sql2->execute(array(
                'fname' => $fname,
                'lname' => $lname,
                'uname' => $uname,
                'zpass' => $pass,
                'zphone' => $phone,
            ));
            header("Location: users-info.php");
        }
    }
}

if ($do == 'delete') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    else header("users-info.php");

    $delete = $con->prepare("DELETE FROM `users` WHERE `UserID` = :zid");
    $delete->bindParam(':zid', $id);
    $delete->execute();
//    header("Location: users-info.php");
}
?>

            <!-------------------- Login -------------------->
        <section class="admin-table grid">
            <div class="table-content grid">
                <table class="table">
                    <caption>
                        <div>
                            <a href="admin-table.php">بيانات التسجيل</a>
                            <a href="users-info.php">بيانات العملاء</a>
                        </div>
                        <h2>بيانات العملاء</h2>
                        <div>
                            <a class="add-btn"><i class="fa-solid fa-circle-plus"></i></a>
                            <a href="../logout.php"><i class="fa-solid fa-right-from-bracket"></i></a>
                        </div>
                    </caption>
                    <tbody>
                        <tr>
                            <th>الاسم</th>
                            <th>رقم الهاتف</th>
                            <th>اسم المسنخدم</th>
                            <th>طباعة</th>
                            <th>حذف العميل</th>
                        </tr>
                        <?php foreach ($users as $user) {?>
                        <tr>
                            <td><?php echo $user['Firstname'] . ' ' . $user['Lastname'];?></td>
                            <td><?php echo $user['Phone'];?></td>
                            <td><?php echo $user['Username']?></td>
                            <td>
                                <button style="font-size: 15px; padding: 5px;cursor: pointer;"
                                        onclick="window.location.href='print-page.php?id=<?php echo $user['UserID'];?>'">
                                    طباعة كود العميل
                                </button>
                            </td>
                            <td>
                                <button style="font-size: 15px; padding: 5px;cursor: pointer;"
                                        onclick="window.location.href='users-info.php?do=delete&id=<?php echo $user['UserID'];?>'">
                                    حذف
                                </button>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <div>
                <div class="modal hidden grid">
                    <button class="close-modal">&times;</button>
                    <div class="caption">
                        <h2>Add User</h2>
                    </div>
                    <form class="grid table-form" action="users-info.php?do=add" method="post">
                        <div class="add-form grid">
                            <div class="grid">
                                <label>First Name</label>
                                <input type="text" name="first_name" placeholder="first name..." required>
                            </div>
                            <div class="grid">
                                <label>Last Name</label>
                                <input type="text" name="last_name" placeholder="last name..." required>
                            </div>
                        </div>
                        <div class="add-form grid">
                            <div class="grid">
                                <label>Username</label>
                                <input type="text" name="username" placeholder="Username..." required>
                            </div>
                            <div class="grid">
                                <label>Phone</label>
                                <input type="text" name="phone" placeholder="Phone No..." required maxlength="112">
                            </div>
                        </div>
                        <div class="add-form grid">
                            <div class="grid">
                                <label>Password</label>
                                <input type="password" name="pass" placeholder="password..." required>
                            </div>
                            <input class="next" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
                <div class="overlay hidden"></div>
            </div>
        </section>
        <script src="../assets/script.js"></script>
    </body>
</html>