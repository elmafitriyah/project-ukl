<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bansos.css">
        <title>DeSmart - bansos</title>
    </head>
    <body>
    <div class="logo">
        <img src="img/atas.svg" alt="ini logo">
    </div>
    <div class="nav">
        <a href="penerima.php" class="pn">Data Penerima</a>
        <a href="bansos.php" class="bn">Data Bansos</a>
        <a href="laporan.php" class="lp">Data Laporan</a>
    </div>
    <a href="add-bansos.php" class = "add">+ Tambah Data</a>
    <div class="tabel">
        <table border="1" class = "table">
            <tr>
                <th>No</th>
                <th>Jenis</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Tanggal Masuk</th>
                <th>Aksi</th>
            </tr>
            </div>
            <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($mysqli,"SELECT * FROM bansos")or die(mysql_error());
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['jenis']; ?></td>
                <td><?php echo $data['kategori']; ?></td>
                <td><?php echo $data['jumlah']; ?></td>
                <td><?php echo $data['tgl_masuk']; ?></td>
                <td>
                <a href="edit-bansos.php?edit=<?php echo $data['id_bansos']; ?>" class="edit">Edit</a>
                <a href="del-bansos.php?hapus=<?php echo $data['id_bansos']; ?>" class="delete" onclick="return confirm('Data Akan Dihapus')">Hapus</a>
                </td>
            </tr>
        <?php } ?>
        </table>
    </body>
</html>