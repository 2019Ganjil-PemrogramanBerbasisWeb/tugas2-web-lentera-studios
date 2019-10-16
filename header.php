<?php 
    error_reporting(0);
    session_start();

    include "dbConnect.php";
?>
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
        <meta name="keywords" content="marketplace, easy digital download, digital product, digital, html5">

        <title>Trofhee</title>

        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/lnr-icon.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/trumbowyg.min.css">
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">

        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    </head>

    <body class="preload home1 multi-vendor">
        <div class="menu-area">
            <?php 
                if($_SESSION['status'] == 'login'){
                    include "component/topmenu-in.php";
                } else{
                    include "component/topmenu-out.php";
                }
            ?>
    
            <?php include "component/mainmenu.php"; ?>
        </div>