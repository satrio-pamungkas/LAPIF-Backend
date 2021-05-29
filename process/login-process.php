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

        if (!empty($_POST['remember'])) {
            echo "Berhasil";
            setcookie("username", $_POST['username'], time() + 30, "/");
            setcookie("password", $_POST['password'], time() + 30, "/");
        }

        $_SESSION['id'] = $account['id_admin'];
        $_SESSION['user'] = $account['username'];

        header("Location: ../dashboard/dashboard-aspirasi.php");
    } else {
        header("Location: ../account/login.php");
    }

?>