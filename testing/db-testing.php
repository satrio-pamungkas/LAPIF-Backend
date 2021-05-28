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

    function get_row_by_hard() {
        global $koneksi;

        $batas = 10;
        $data = mysqli_query($koneksi, "SELECT * FROM aspirasi");
        $jumlah_data = mysqli_num_rows($data);
        $total_halaman = ceil($jumlah_data/$batas);

        return $jumlah_data;
    }

    function get_row_by_easy() {
        global $koneksi;

        $batas = 10;
        $data = mysqli_query($koneksi, "SELECT 32 AS jumlah");
        $jumlah_data = mysqli_fetch_assoc($data);
        $total_halaman = ceil($jumlah_data['jumlah']/$batas);

        // return $jumlah_data['jumlah'];
        return $total_halaman;
    }

    function get_multiple_row() {
        global $koneksi;
        
        $query = mysqli_query($koneksi, "SELECT * FROM aspirasi");
        while ($row = mysqli_fetch_array($query)) {
            $ref = $row['id_aspirasi'];
            $query_detail = mysqli_query($koneksi, "SELECT * FROM aspirasi WHERE id_aspirasi='$ref'");
            while ($col = mysqli_fetch_array($query_detail)) {
                echo $col['nama_aspirator'];
                echo $col['id_aspirasi'];
                echo "<br>";
            }
    
        }
    }

    get_multiple_row();
?>