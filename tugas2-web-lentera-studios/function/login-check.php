<?php
    error_reporting(0);
    session_start();

    include "../tugas2-web-lentera-studios/dbConnect.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $userData = mysqli_query($connect, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $userDataSummary = mysqli_num_rows($userData);

    if($userDataSummary > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        foreach ($userData as $getData) {
            $_SESSION['user_id'] = $getData['user_id'];
            $_SESSION['name'] = $getData['name'];
            $_SESSION['balance'] = $getData['balance'];
        }
        if($_REQUEST['redirect'] == 'Yes'){
            header('location:../tugas2-web-lentera-studios/'.$_REQUEST['redirPage']);
        }else {
            header("location:../tugas2-web-lentera-studios/");
        }
    } else {
        if($_REQUEST['redirect'] == 'Yes'){
            header('location:../tugas2-web-lentera-studios/login.php?login=Failed&redirect=Yes&redirPage='.$_REQUEST['redirPage']);
        }else {
            header("location:../tugas2-web-lentera-studios/login.php?login=Failed");
        }
    }
?>
