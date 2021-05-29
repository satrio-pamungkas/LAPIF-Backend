<?php 
    include "../config/connection.php";

    $kode = $_GET['kode'];

    if ($_GET['form'] == 'aspirasi') {
        $query = mysqli_query($koneksi, "DELETE FROM aspirasi WHERE id_aspirasi='$kode'");

        if ($query) {
            header("Location: ../dashboard/dashboard-aspirasi.php");
        }

    } else if ($_GET['form'] == 'aspirasiSelesai') {
        $query = mysqli_query($koneksi, "DELETE FROM aspirasiSelesai WHERE id_aspirasi='$kode'");

        if ($query) {
            header("Location: ../dashboard/dashboard-aspirasi-selesai.php");
        }
    } else if ($_GET['form'] == 'pengaduan') {
        $query = mysqli_query($koneksi, "DELETE FROM laporan WHERE id_laporan='$kode'");

        if ($query) {
            header("Location: ../dashboard/dashboard-pengaduan.php")
        }
        
    } else if ($_GET['form'] == 'pengaduanSelesai') {
        $query = mysqli_query($koneksi, "DELETE FROM laporanSelesai WHERE id_laporan='$kode'");
        
        if ($query) {
            header("Location: ../dashboard/dashboard-pengaduan-selesai.php");
        }
    } else {
        echo "404 Not Found";
    }
?>