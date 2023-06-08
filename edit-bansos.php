<?php

include 'koneksi.php';
$id = $_GET['edit'];
$sql = "SELECT * FROM `bansos` WHERE id_bansos = $id";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);
$jenis = $row['jenis'];
$kategori = $row['kategori'];
$jumlah = $row['jumlah'];
$tgl_masuk = $row['tgl_masuk'];

if (isset($_POST['submit'])) {
    $jenis = $_POST['jenis'];
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $tgl_masuk = $_POST['tgl_masuk'];

    $sql = "UPDATE `bansos` SET id_bansos='$id',jenis='$jenis',kategori='$kategori',jumlah='$jumlah',tgl_masuk='$tgl_masuk' WHERE id_bansos=$id ";
    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        header("location:bansos.php");

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
        <title>DeSmart - edit bansos</title>
</head>
<body>
    <div class="wrapper">
            <div class="logo">
                <img src="img/rmh.svg" alt="logo">
            </div>
    <form action="" method="post">
        <table width="25%" border="0">
            <tr>
                <td>Jenis :</td>
                <td><input type="text" name="jenis" placeholder="masukkan jenis bansos" value=<?php echo $jenis; ?>></td>
            </tr>
            <tr>
                <td>Kategori : </td>
                <td><input type="text" name="kategori" placeholder="masukkan kategori" value=<?php echo $kategori; ?>></td>
            </tr>
            <tr>
                <td>Jumlah :</td>
                <td><input type="number" name="jumlah" placeholder="masukkan jumlah" value=<?php echo $jumlah; ?>></td>
            </tr>
            <tr>
                <td>Tanggal Masuk :</td>
                <td><input type="date" name="tgl_masuk" placeholder="masukkan tanggal" value=<?php echo $tgl_masuk; ?>></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Kirim"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>