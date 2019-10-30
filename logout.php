<?php
  error_reporting(0);
  session_start();
  session_destroy();

  if(isset($_COOKIE['login']))
    {
    $time = time();
    setcookie("login", $time - 3600);
    }

  header("location:../tugas2-web-lentera-studios/");
?>
