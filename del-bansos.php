<?php 
include 'koneksi.php';
$hapus = $_GET['hapus'];
mysqli_query($mysqli,"DELETE FROM bansos WHERE id_bansos = $hapus");
header("location:bansos.php");
?>