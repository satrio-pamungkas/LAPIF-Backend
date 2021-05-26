<?php
    include '../config/connection.php';

    session_start();

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM userAdmin WHERE username='$username'AND password='$password'";
    $result = mysqli_query($koneksi, $query);
    $account = mysqli_fetch_assoc($result);
    $row = mysqli_num_rows($result);

    if ($row > 0) {
        $_SESSION['id'] = $account['id_admin'];
        $_SESSION['username'] = $account['username'];

        // header("Location: ../dashboard/dashboard.php");
    } else {
        header("Location: ../account/login.php");
    }

?>