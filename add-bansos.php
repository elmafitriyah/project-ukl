<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/add-bansos.css">
        <title>DeSmart - add bansos</title>
    </head>
    <body>
        <div class="wrapper">
        <div class="logo">
                <img src="img/rmh.svg" alt="logo">
            </div>
        <form action="add-bansos.php" method="POST" enctype="multipart/form-data" name="bansos">
        <h3>Add Data Bansos</h3>
            <table>
                <tr>
                    <td width = "150">Jenis</td>
                    <td>:</td>
                    <td><input type="text" name="jenis" required autocomplete="off"></td>
                </tr>
                <tr>
                    <td width = "150">Kategori</td>
                    <td>:</td>
                    <td><input type="text" name="kategori" required autocomplete="off"></td>
                </tr>
                <tr>
                    <td width="130">Jumlah</td>
                    <td>:</td>
                    <td><input type="number" name="jumlah" required autocomplete="off"></td>
                </tr>
                <tr>
                    <td width="1">Tanggal Masuk50</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_masuk" required autocomplete="off"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="tambahkan data" name="proses"></td>
                </tr>
            </div>
            <?php
            include("koneksi.php");
                if(isset($_POST['proses'])){
                    $jenis = $_POST['jenis'];
                    $kategori = $_POST['kategori'];
                    $jumlah = $_POST['jumlah'];
                    $tgl_masuk = $_POST['tgl_masuk'];

                    $result = "INSERT INTO bansos(jenis,kategori,jumlah,tgl_masuk) values
                    ('$jenis', '$kategori','$jumlah','$tgl_masuk')";
                    mysqli_query($mysqli,$result); 

                    header("location:bansos.php");
             }?>
            </table>
        </form>
    </body>
</html>