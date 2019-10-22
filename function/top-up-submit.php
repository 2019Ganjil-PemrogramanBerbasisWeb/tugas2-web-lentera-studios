<?php
    error_reporting(0);
    session_start();
    if ($_SESSION['status'] != "login"){
        header("location:../tugas2-web-lentera-studios/login.php?redirect=Yes&redirPage=function/top-up-submit.php");
    }

    include "../tugas2-web-lentera-studios/dbConnect.php";

    $topUp = $_POST['topUp'] + $_SESSION['balance'];
    $username = $_SESSION['username'];
    $rndm = uniqid();
    
    echo $topUp."cok".$userID."asw".$rndm;
    $addTopUp = "UPDATE `user` SET `balance` = '$topUp' WHERE `user`.`username` = '$username';";
    if ($connect->query($addTopUp) == TRUE) {
        $_SESSION['balance'] = $topUp;
        $newTopUp = "INSERT INTO top_up (`topUp_id`, `user_id`, `amount`) VALUES ('$rndm', '$userID', '$topUp')";
        if ($_REQUEST['redirect'] == 'Yes') {
            header('location:../tugas2-web-lentera-studios/'.$_REQUEST['redirPage']);
        }
    } else {
        echo "Gagal";
    }
    header('location:../tugas2-web-lentera-studios/cart.php');
?>
