<?php 
    include "../config/connection.php";

    $password = md5($_POST['password']);
    $username = $_GET['username'];

    if (isset($_POST['password'])) {
        $query = mysqli_query($koneksi, "UPDATE userAdmin SET password='$password'
        WHERE username='$username'");

        header("Location: ../index.php");
    }
?>