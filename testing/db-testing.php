<?php
    include "../config/connection.php";

    function get_count_aspirasi() {
        global $koneksi;        

        $get_aspirasi_query = mysqli_query($koneksi, "SELECT COUNT(*) FROM aspirasi");
        $get_aspirasi_done_query = mysqli_query($koneksi, "SELECT COUNT(*) FROM aspirasiTest");

        $get_aspirasi = mysqli_fetch_row($get_aspirasi_query);
        $get_aspirasi_done = mysqli_fetch_row($get_aspirasi_done_query);

        $total_aspirasi = intval($get_aspirasi) + intval($get_aspirasi_done);

        return strval($total_aspirasi);

    }

    $kode_aspirasi = "KAN".get_count_aspirasi();

    echo $kode_aspirasi;
?>