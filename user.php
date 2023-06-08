<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user.css">
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
</body>
</html>

<?php
 include "koneksi.php";
 session_start();
 $id = $_SESSION['id_penerima'];
 $query_mysql = mysqli_query($mysqli, "SELECT penerima.id_penerima, penerima.nik,penerima.nama,penerima.tgl_lahir,penerima.pekerjaan,penerima.id_admin FROM penerima INNER JOIN admin ON admin.id_admin = penerima.id_admin WHERE id_penerima = '$id'");
 $nomor = 1;
 while ($data = mysqli_fetch_array($query_mysql)) {
     ?>
     <table class="ket">
     <tr>
         <td>NIK</td>
    </tr>
    <tr>
         <td>Nama</td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
    </tr>
    <tr>
        <td>Pekerjaan</td>
    </tr>
    <tr>
        <td>RW</td>
    </tr>
    </table>
    <table class="isi">
        <tr><td><?php echo $data['nik']; ?></td></tr>
        <tr><td><?php echo $data['nama']; ?></td></tr>
        <tr><td><?php echo $data['tgl_lahir']; ?></td></tr>
        <tr><td><?php echo $data['pekerjaan']; ?></td></tr>
        <tr><td><?php echo $data['id_admin']; ?></td></tr>
    </table>
<?php }?>