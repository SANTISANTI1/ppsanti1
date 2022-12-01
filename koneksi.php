<?php
$koneksi = mysqli_connect("localhost", "u312996326_santi", "sU&0H4Ldhz", "u312996326_santi");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
