<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/add-penerima.css">
        <title>DeSmart - add penerima</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="logo">
                <img src="img/rmh.svg" alt="logo">
                <h3>Add Data Penerima</h3>
            </div>
        <form action="add-penerima.php" method="POST" enctype="multipart/form-data" name="penerima">
            <table>
                <div class="nik">
                <tr>
                    <td width = "130">NIK</td>
                    <td>:</td>
                    <td><input type="number" name="nik" required autocomplete="off"></td>
                </tr>
                </div>
                <div class="nama">
                <tr>
                    <td width = "10%">Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required autocomplete="off"></td>
                </tr>
                </div>
                <div class="tgl">
                <tr>
                    <td width = "130">Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name= "tgl_lahir" required autocomplete="off"></td>
                </tr>
                </div>
                <div class="pekerjaan">
                <tr>
                    <td width = "130">Pekerjaan</td>
                    <td>:</td>
                    <td><input type="text" name="pekerjaan" required autocomplete="off"></td>
                </tr>
                </div>
                <div class="rw">
                <tr>
                    <td width = "130">RW</td>
                    <td>:</td>
                    <td><input type="number" name="id_admin" required autocomplete="off"></td>
                </tr>
                <div class="submit">
                <tr>
                    <td></td>
                    <td><input type="submit" value="tambahkan data" name="proses"></td>
                </tr>
                </div>
                </div>
                </div>
            <?php
            include("koneksi.php");
                if(isset($_POST['proses'])){
                    $nik = $_POST['nik'];
                    $nama = $_POST['nama'];
                    $tgl_lahir = $_POST['tgl_lahir'];
                    $pekerjaan = $_POST['pekerjaan'];
                    $id_admin = $_POST['id_admin'];
                    $tgl_menerima = $_POST['tgl_menerima'];
                    $id_bansos = $_POST['id_bansos'];
                    
                    $result = "INSERT INTO penerima(nik,nama,tgl_lahir,pekerjaan,id_admin,tgl_menerima,id_bansos) values
                    ('$nik', '$nama', '$tgl_lahir', '$pekerjaan', '$id_admin','$tgl_menerima','$id_bansos')";
                    mysqli_query($mysqli,$result); 

                    header("location:penerima.php");
             }?>
            </table>
        </form>
    </body>
</html>