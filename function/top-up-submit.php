<?php
    error_reporting(0);
    session_start();
    if ($_SESSION['status'] != "login"){
        header("location:../login.php?redirect=Yes&redirPage=function/top-up-submit.php");
    }

    include "../dbConnect.php";

    $topUp = $_POST['topUp'] + $_SESSION['balance'];
    $username = $_SESSION['username'];
    $rndm = uniqid();
    
    echo $topUp."cok".$userID."asw".$rndm;
    $addTopUp = "UPDATE `user` SET `balance` = '$topUp' WHERE `user`.`username` = '$username';";
    if ($connect->query($addTopUp) == TRUE) {
        $_SESSION['balance'] = $topUp;
        $newTopUp = "INSERT INTO top_up (`topUp_id`, `user_id`, `amount`) VALUES ('$rndm', '$userID', '$topUp')";
        if ($_REQUEST['redirect'] == 'Yes') {
            header('location:../'.$_REQUEST['redirPage']);
        }
    } else {
        echo "Gagal";
    }
    header('location:../cart.php');
?>
