<?php
    include "../config/connection.php";

    if(!$koneksi) {
        echo "Koneksi gagal";
    }

    echo "Koneksi berhasil";
?>