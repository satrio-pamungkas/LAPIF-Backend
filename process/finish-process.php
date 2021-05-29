<?php
    include "../config/connection.php";

    $kode = $_GET['kode'];

    if ($_GET['form'] == 'aspirasi') {
        $query = mysqli_query($koneksi, "CALL update_aspirasi('$kode')");

        if ($query) {
            header("Location: ../dashboard/dashboard-aspirasi.php");
        }

    } else if ($_GET['form'] == 'pengaduan') {
        $query = mysqli_query($koneksi, "CALL update_laporan('$kode')");

        if ($query) {
            header("Location: ../dashboard/dashboard-pengaduan.php");
        }
    } else {
        echo "404 Not Found";
    }
?>