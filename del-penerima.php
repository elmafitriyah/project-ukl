<?php 
include 'koneksi.php';
$hapus = $_GET['hapus'];
mysqli_query($mysqli,"DELETE FROM penerima WHERE id_penerima = $hapus");
header("location:penerima.php");
?>
