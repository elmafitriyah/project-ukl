<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/penerima.css">
    <title>DeSmart - penerima</title>
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
    <a href="add-penerima.php" class="add">+ Tambah Data</a>
    <div class="tabel">
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Pekerjaan</th>
            <th>RW</th>
            <th>Aksi</th>
        </tr>
        </div>
        <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($mysqli, "SELECT penerima.id_penerima, penerima.nik,penerima.nama,penerima.tgl_lahir,penerima.pekerjaan,penerima.id_admin FROM penerima INNER JOIN admin ON admin.id_admin = penerima.id_admin");
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysql)) {
            ?>
            <tr>
                <td>
                    <?php echo $nomor++; ?>
                </td>
                <td>
                    <?php echo $data['nik']; ?>
                </td>
                <td>
                    <?php echo $data['nama']; ?>
                </td>
                <td>
                    <?php echo $data['tgl_lahir']; ?>
                </td>
                <td>
                    <?php echo $data['pekerjaan']; ?>
                </td>
                <td>
                    <?php echo $data['id_admin']; ?>
                </td>
                <td>
                    <a href="edit-penerima.php?edit=<?php echo $data['id_penerima']; ?>" class="edit">Edit</a>
                    <a href="del-penerima.php?hapus=<?php echo $data['id_penerima']; ?>" class="delete" onclick="return confirm('Data Akan Dihapus')">Hapus</a>
                </td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>