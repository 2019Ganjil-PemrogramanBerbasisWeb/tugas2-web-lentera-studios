<?php
    session_start();
    if ($_SESSION['status'] != "login"){
        header("location:../tugas2-web-lentera-studios/login.php?redirect=Yes&redirPage=function/comp-register.php?comID=".$_REQUEST['id']);
    }

    include "../tugas2-web-lentera-studios/dbConnect.php";

    $compID = $_REQUEST['comID'];
    $userID = $_SESSION['user_id'];
    $rndm = uniqid();

    $participationData = mysqli_query($connect, "SELECT * FROM comp_participation WHERE user_id='$userID' AND comp_id='$compID'");
    $participationDataSummary = mysqli_num_rows($participationData);

    echo "$rndm $compID $userID";

    if($participationDataSummary > 0){
        echo "Sudah terdaftar";
    } else {
        $regComp = "INSERT INTO comp_participation (comPartID, comp_id, user_id) VALUES('$rndm', '$compID', '$userID')";
        $updateComp = "UPDATE competition SET member = member + 1 WHERE comp_id = '$compID'";
        if($connect->query($updateComp) == TRUE) {
        echo "Sukses";
        } else {
        echo "Gagal";
        }

        if ($connect->query($regComp) == TRUE) {
        header("location:../tugas2-web-lentera-studios/competition.php?id=".$_REQUEST['comID']);
        } else {
        echo "Gagal";
        }
    }
    header("location:../tugas2-web-lentera-studios/cart.php");
?>
