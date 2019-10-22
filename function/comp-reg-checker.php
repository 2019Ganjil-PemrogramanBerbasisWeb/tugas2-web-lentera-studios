<?php
    session_start();
    if ($_SESSION['status'] != "login"){
        header("location:../tugas2-web-lentera-studios/login.php?login=mustLogin&redirect=Yes&redirPage=function/comp-register.php?comID=".$_REQUEST['id']);
    } elseif($_SESSION['status'] == "login"){
        header("location:../tugas2-web-lentera-studios/function/comp-register.php?comID=".$_REQUEST['id']);
    }
?>