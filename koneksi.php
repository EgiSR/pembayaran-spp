<?php

$koneksi = mysqli_connect("localhost" , 'root' , '' , 'pembayaran_spp');

if (!$koneksi) {
    echo "koneksi gagal";
}
?>