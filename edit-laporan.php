<?php

include 'koneksi.php';
$id = $_GET['edit'];
$sql = "SELECT * FROM `data` WHERE id_data = $id";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);
$id_penerima = $row['id_penerima'];
$tgl_menerima = $row['tgl_menerima'];
$id_admin = $row['id_admin'];
$id_bansos = $row['id_bansos'];

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tgl_menerima = $_POST['tgl_menerima'];
    $id_admin = $_POST['id_admin'];
    $jumlah = $_POST['jumlah'];

    $sql = "UPDATE `data` SET id_data,='$id',nama='$nama',tgl_menerima='$tgl_menerima',id_admin='$id_admin',jumlah='$jumlah'WHERE id_data=$id";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        header("location:laporan.php");

    } else {
        die(mysqli_error($mysqli));

    }
}
?>
<html>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/edit-bansos.css">
        <title>DeSmart - edit Laporan</title>
</head>
<body>
    <div class="wrapper">
            <div class="logo">
                <img src="img/rmh.svg" alt="logo">
            </div>
            <div class="tabel">
    <form action="" method="post">
        <table width="25%" border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="masukkan kategori" value=<?php echo $nama; ?>></td>
            </tr>
            <tr>
                <td>Tanggal Menerima</td>
                <td><input type="date" name="jumlah" placeholder="masukkan tanggal" value=<?php echo $tgl_menerima; ?>></td>
            </tr>
            <tr>
                <td>RW :</td>
                <td><input type="number" name="id_admin" placeholder="masukkan rw" value=<?php echo $id_admin; ?>></td>
            </tr>
            <tr>
                <td>jumlah :</td>
                <td><input type="number" name="id_bansos" placeholder="masukkan jumlah" value=<?php echo $id_bansos; ?>></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Kirim"></td>
            </tr>
            </div>
        </table>
    </form>
</div>
</body>
</html>