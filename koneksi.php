<?php
$koneksi = mysqli_connect("localhost", "u312996326_santi", ":y*|K;lp1aR", "u312996326_ppsanti");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
