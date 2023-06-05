<?php
session_start();
    $_SESSION['m']="";
    $_SESSION['p']="";
    $_SESSION['id']="";
    
    header("location:home.php");
    exit;
?>