<?php 
    include "../config/connection.php";

    $kode_komentar = "KM".get_date();
    $kode_pertanyaan = $_GET['kode'];
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];
    $waktu = date('Y-m-d H:i:s');

    function get_date() {
        date_default_timezone_set("Asia/Jakarta");
        return date("mdhis");
    }

    if (isset($_POST['form-komentar'])) {
        $query = mysqli_query($koneksi, "INSERT INTO komentar VALUES
        ('$kode_komentar','$kode_pertanyaan','$nama','$komentar','$waktu')");

        if ($query) {
            header("Location: ../forum/detail-pertanyaan.php?kode=".$kode_pertanyaan);
        } else {
            echo "Eror";
        }
    }
?>