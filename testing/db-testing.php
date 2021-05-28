<?php
    include "../config/connection.php";

    // Fungsi lama untuk memperoleh generate kode
    // Berdasarkan jumlah row pada tabel
    // Semenjak update 25/05/2021
    // Fungsi ini sudah tidak dipakai
    function get_count_aspirasi() {
        global $koneksi;        

        $get_aspirasi_query = mysqli_query($koneksi, "SELECT COUNT(*) FROM aspirasi");
        $get_aspirasi_done_query = mysqli_query($koneksi, "SELECT COUNT(*) FROM aspirasiTest");

        $get_aspirasi = mysqli_fetch_row($get_aspirasi_query);
        $get_aspirasi_done = mysqli_fetch_row($get_aspirasi_done_query);

        $total_aspirasi = intval($get_aspirasi) + intval($get_aspirasi_done);

        return strval($total_aspirasi);

    }

    // Fungsi baru untuk memperoleh generate kode
    // Berdasarkan timestamp waktu di zona WIB
    // Semenjak update 25/05/2021
    // Fungsi ini yang dipakai
    // ===== Return (10) char =====
    // ===== Mixed (13) char =====
    function get_date() {
        date_default_timezone_set("Asia/Jakarta");
        return date("mdhis");
    }

    $kode_aspirasi = "AS1".get_date();

    // Fungsi untuk Select data
    function get_number() {
        global $koneksi;

        $result = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM laporan");
        $num = mysqli_fetch_assoc($result);
        // $total = intval($num);

        return $num['total'];
    }

    // Fungsi untuk get email
    function get_email_address($username) {
        global $koneksi;
        
        $result = mysqli_query($koneksi, "SELECT email FROM userAdmin WHERE 
        username='$username'");
        $email = mysqli_fetch_assoc($result);

        return $email['email'];
    }

    echo get_email_address("satrio");
?>