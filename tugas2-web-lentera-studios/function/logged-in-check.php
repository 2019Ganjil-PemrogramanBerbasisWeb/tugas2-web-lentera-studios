<?php
  session_start();
  if ($_SESSION['status'] == "login"){
    header("location:../tugas2-web-lentera-studios/");
  }
?>