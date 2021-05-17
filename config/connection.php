<?php
    $server = "127.0.0.1";
    $database = "LAPIF";
    $username = "admin";
    $password = "admin";

    $koneksi = mysqli_connect($server, $username, $password);

    mysqli_select_db($koneksi, $database) or die("Database tidak ditemukan");
?>