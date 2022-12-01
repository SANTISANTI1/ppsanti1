<?php
require '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tb_lagu WHERE id_lagu='$id'");
header("location:lagu.php");