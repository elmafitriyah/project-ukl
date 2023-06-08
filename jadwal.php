<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/jadwal.css">
    <title>DeSmart - user</title>
</head>
<body>
    <div class="logo">
        <a href="beranda.php"><img src="img/atas.svg" alt="ini logo"></a>
    </div>
    <div class="nav">
        <a href="user.php" class="u">Data Penerima</a>
        <a href="jadwal.php" class="r">Jadwal Penerimaan</a>
    </div>
    <div class="tabel">
    <table border="1" class="table">
        <tr>
            <th>Nama</th>
            <th>Tanggal Menerima</th>
            <th>RW</th>
            <th>Jumlah Yang Diterima</th>
        </tr>
        </div>


<?php
include "koneksi.php";
session_start();
$id = $_SESSION['id_penerima'];
$query_mysql = mysqli_query($mysqli, "SELECT penerima.nama,data.tgl_menerima,data.id_data,admin.id_admin,bansos.jumlah FROM data 
INNER JOIN penerima ON penerima.id_penerima = data.id_penerima
INNER JOIN admin ON admin.id_admin = data.id_admin
INNER JOIN bansos ON bansos.id_bansos = data.id_bansos WHERE id_data = '$id'");
$nomor = 1;
while ($data = mysqli_fetch_array($query_mysql)) {
?>
     <tr>
         <td><?php echo $data['nama']; ?></td>
         <td><?php echo $data['tgl_menerima']; ?></td>
         <td><?php echo $data['id_admin']; ?></td>
         <td><?php echo $data['jumlah']; ?></td>
    </tr>
     
<?php }?>
</body>
</html>