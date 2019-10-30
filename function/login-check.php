<?php
    error_reporting(0);
    session_start();

    include "../dbConnect.php";

    $user = 'admin';
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $userData = mysqli_query($connect, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $userDataSummary = mysqli_num_rows($userData);

    if($userDataSummary > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        if (isset($_POST['remember']))
           {
              $time = time();
              setcookie('login', $user, $time + 3600);
           }
        foreach ($userData as $getData) {
            $_SESSION['user_id'] = $getData['user_id'];
            $_SESSION['name'] = $getData['name'];
            $_SESSION['balance'] = $getData['balance'];
        }
        if($_REQUEST['redirect'] == 'Yes'){
            header('location:../'.$_REQUEST['redirPage']);
        }else {
            header("location:../");
        }
    } else {
        if($_REQUEST['redirect'] == 'Yes'){
            header('location:../login.php?login=Failed&redirect=Yes&redirPage='.$_REQUEST['redirPage']);
        }else {
            header("location:../login.php?login=Failed");
        }
    }
?>
