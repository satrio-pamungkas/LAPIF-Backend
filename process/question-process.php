<?php 
    include "../config/connection.php";

    $kode_pertanyaan = "PT".get_date();
    $nama = $_POST['nama'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];
    $waktu = date('Y-m-d H:i:s');

    function get_date() {
        date_default_timezone_set("Asia/Jakarta");
        return date("mdhis");
    }

    if (isset($_POST['pertanyaan'])) {
        $query = mysqli_query($koneksi, "INSERT INTO pertanyaan VALUES
        ('$kode_pertanyaan','$nama','$judul','$deskripsi','$kategori','$waktu')");

        if ($query) {
            header("Location: ../forum/buat-pertanyaan.php");
        } else {
            echo "Gagal";
        }
    }
?>