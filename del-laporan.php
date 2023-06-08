<?php 
include 'koneksi.php';
$hapus = $_GET['hapus'];
mysqli_query($mysqli,"DELETE FROM data WHERE id_data = $hapus");
header("location:laporan.php");
?>