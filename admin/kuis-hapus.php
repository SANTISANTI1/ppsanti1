<?php
require '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_kuis WHERE id_kuis='$id'");
header("location:kuis.php");