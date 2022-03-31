<?php include "connect.php";

if (isset($_SESSION['Username']))
    header("Location: pages/admin-table.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Filtered Username Input
    $user = $_POST['username'];
    $user = stripslashes($user);

    // Filtered Password Input
    $hashPass = $_POST['pass'];
    $hashPass = stripslashes($hashPass);
    $hashPass = sha1($hashPass);

    $sql = $con->prepare("SELECT * FROM `admin` WHERE `Username` = ? AND `Password` = ?");
    $sql->execute(array($user, $hashPass));
    $row = $sql->fetch();
    $count = $sql->rowCount();

    if ($count > 0) {
        $_SESSION['Username'] = $user;
        header("Location: pages/admin-table.php");
        exit();
    }
    else {
        $erorr = "<div style='background: #d32900; color: #fff; padding: 10px 20px; border-radius: 5px; font-size: 16px;'>Your Username Or Password Is Wrong</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="ar">
    <head>
        <title>El-Safwa car</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <link rel="icon" href="img/logo-tran.png">
        <link rel="stylesheet" href="assets/style.css">
        <link href="fontawesome-free-6.0.0-web/css/all.min.css" rel="stylesheet">
        <link href="fontawesome-free-6.0.0-web/css/fontawesome.min.css" rel="stylesheet">
    </head>
    <body>
            <!-------------------- Login -------------------->
        <section class="admin grid">
            <div class="login-content grid">
                <div class="login-icon grid">
                    <i class="fa-solid fa-user"></i>
                </div>
                <h2>Admin</h2>
                <?php if (isset($erorr)) echo $erorr;?>
                <form class="grid" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="pass" placeholder="Password" required>
                    <input type="submit" value="Login" class="submit">
                </form>
            </div>
        </section>
    </body>
</html>