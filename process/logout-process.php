<?php 
    session_start();
    $_SESSION['user'] = '';
    unset($_SESSION['user']);
    session_unset();
    session_destroy();
    header("Location: ../account/login.php");
?>