<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/laporan.css">
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
    <a href="add-laporan.php" class = "add">+ Tambah Data</a>
    <div class="tabel">
        <table border="1" class = "table">
            <tr>
                <th>No</th>
                <th>Nama Penerima</th>
                <th>Tanggal Penerimaan</th>
                <th>RW</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
            </div>
            <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($mysqli,"SELECT penerima.nama,data.tgl_menerima,data.id_data,admin.id_admin,bansos.kategori FROM data 
        INNER JOIN penerima ON penerima.id_penerima = data.id_penerima
        INNER JOIN admin ON admin.id_admin = data.id_admin
        INNER JOIN bansos ON bansos.id_bansos = data.id_bansos;")or die(mysqli_error($mysqli));
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['tgl_menerima']; ?></td>
                <td><?php echo $data['id_admin']; ?></td>
                <td><?php echo $data['kategori']; ?></td>
                <td>
                <a href="edit-laporan.php?edit=<?php echo $data['id_data'];?>"class="edit">Edit</a>
                <a href="del-laporan.php?hapus=<?php echo $data['id_data'];?>"class="delete" onclick="return confirm('Data Akan Dihapus')">Hapus</a>
                </td>
            </tr>
        <?php } ?>
        </table>
    </body>
</html>