<?php
include "../connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $day = $_POST['reserve_day'];
    $time = $_POST['reserve_time'];

    $name = trim($_POST['name']);
    $phone    = trim($_POST['phone']);

    // Filtered Name Input
    $name = stripslashes($name);
    $name = htmlspecialchars($name);

    // Filtered Phone Input
    $phone = stripslashes($phone);
    $phone = htmlspecialchars($phone);

    $sql2 = $con->prepare("INSERT INTO `reversation` (`full_name`, `phone`, `day`, `time`)
                                    VALUE (:zname,  :zphone, :zday, :ztime)");
    $sql2->execute(array(
        'zname' => $name,
        'zphone' => $phone,
        'zday' => $day,
        'ztime' => $time,
    ));
    header("Location: contact-us.php");
}
ob_end_flush();
?>