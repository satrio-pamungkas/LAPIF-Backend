<?php
    include "../config/connection.php";

    $form_aspirasi = "aspirasi";
    $form_laporan = "laporan";

    $kode_aspirasi = "AS1".get_date();
    $kode_laporan = "LP1".get_date();
    $nama = $_POST['nama'];
    $noIdentitas = $_POST['noIdentitas'];
    $status = $_POST['status'];
    $email = $_POST['email'];
    $notel = $_POST['notel'];
    $rujukan = $_POST['rujukan'];
    $kategori = $_POST['kategori'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal = $_POST['tanggal'];
    $status_tabel = "pending";

    function get_date() {
        date_default_timezone_set("Asia/Jakarta");
        return date("mdhis");
    }

    if (isset($_POST[$form_aspirasi])) {
        $query = mysqli_query($koneksi, "CALL insert_aspirasi('$kode_aspirasi','$nama','$noIdentitas',
        '$status','$email','$notel','$rujukan','$kategori','$judul','$deskripsi','$tanggal','$status_tabel')");

        if ($query) {
            header("Location: ../aspirasi.html");
        } else {
            echo "Belum diisi";
        }

    } else if (isset($_POST[$form_laporan])) {
        $query = mysqli_query($koneksi, "CALL insert_laporan('$kode_laporan','$nama','$noIdentitas',
        '$status','$email','$notel','$rujukan','$kategori','$judul','$deskripsi','$tanggal','$status_tabel')");

        if ($query) {
            header("Location: ../pengaduan.html");
        } else {
            echo "Belum diisi";
        }
    } else {
        echo "Ngaco nih";
    }

?>