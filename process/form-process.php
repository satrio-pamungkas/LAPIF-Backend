<?php
    include "../config/connection.php";

    $form_a = "aspirasi";
    $form_l = "laporan";

    $kode_aspirasi = "KAN" + get_count_aspirasi();
    // $kode_laporan = "KPN" + get_count_laporan();
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

    function get_count_aspirasi() {
        $get_aspirasi_query = mysqli_query($koneksi, "SELECT COUNT(*) FROM aspirasi");
        $get_aspirasi_done_query = mysqli_query($koneksi, "SELECT COUNT(*) FROM aspirasiSelesai");

        $total_aspirasi = $get_aspirasi_query + $get_aspirasi_done_query;

        return $total_aspirasi;

    }

    function get_count_laporan() {
        $get_laporan_query = mysqli_query($koneksi, "SELECT COUNT(*) FROM laporan");
        $get_laporan_done_query = mysqli_query($koneksi, "SELECT COUNT(*) FROM laporanSelesai");

        $total_laporan = $get_laporan_query + $get_laporan_done_query;

        return $total_laporan;
    }

    if (isset($_POST[$form_a])) {
        $query = mysqli_query($koneksi, "CALL insert_aspirasi('$kode_aspirasi','$nama','$noIdentitas',
        '$status','$email','$notel','$rujukan','$kategori','$judul','$deskripsi','$tanggal','$status_tabel')");

        if ($query) {
            header("Location: ../aspirasi.php");
        } else {
            echo "Belum diisi";
        }

    } else if (isset($_POST[$form_l])) {
        echo "Ini dari laporan";
    } else {
        echo "Ngaco nih";
    }

?>