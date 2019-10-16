<?php
    session_start();
    if ($_SESSION['status'] != "login"){
        header("location:../login.php?login=mustLogin&redirect=Yes&redirPage=function/comp-register.php?comID=".$_REQUEST['id']);
    } elseif($_SESSION['status'] == "login"){
        header("location:../function/comp-register.php?comID=".$_REQUEST['id']);
    }
?>