<?php
  error_reporting(0);
  session_start();
  include "dbConnect.php";

  $billID = $_REQUEST['id'];
  $userID = $_SESSION['user_id'];
  $bill = $_POST['bill'];

  echo "$billID $userID $bill";

  $newBill = "INSERT INTO bill (bill_id, user_id, bill, method) VALUES('$billID', '$userID', '$bill', '1')";
  if ($connect->query($newBill) == TRUE) {
    $addBill = "UPDATE comp_participation SET bill_id = '$billID', payment = '1' WHERE user_id='$userID' AND payment = '0'";
    if ($connect->query($addBill) == TRUE) {
      echo "Sukses";
    } else {
      echo "Gagal";
    }

    $updateSaldo = "UPDATE user SET balance = balance - $bill WHERE user_id = '$userID'";
    if($connect->query($updateSaldo) == TRUE) {
      $_SESSION['balance'] = $_SESSION['balance'] - $bill;
      echo "Sukses Update Saldo User";
    } else {
      echo "Gagal update saldo user";
    }

    $competition = mysqli_query($connect, "SELECT * FROM comp_participation WHERE bill_id='$billID'");
    foreach ($competition as $getData) {
      $compID = $getData['comp_id'];
      $incRevenue = "UPDATE competition SET revenue = 0.975*price + revenue WHERE comp_id = '$compID'";
      if($connect->query($incRevenue) == TRUE) {
        echo "Sukses update revenue";
      } else {
        echo "Gagal update revenue";
      }
    }
  } else {
    echo "Gagal";
  }
  header("location:../paid.php");
?>
