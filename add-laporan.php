<html>
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/add-laporan.css">
        <title>DeSmart - add bansos</title>
    </head>
    <body>
        <div class="wrapper">
        <div class="logo">
                <img src="img/rmh.svg" alt="logo">
            </div>
        <form action="add-laporan.php" method="POST" enctype="multipart/form-data" name="laporan">
        <h3>Add Data Bansos</h3>
            <table>
                <tr>
                    <td width = "130">Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required autocomplete="off"></td>
                </tr>
                <tr>
                    <td width = "130">Tanggal Menerima</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_menerima" required autocomplete="off"></td>
                </tr>
                <tr>
                    <td width="130">RW</td>
                    <td>:</td>
                    <td><input type="number" name="id_admin" required autocomplete="off"></td>
                </tr>
                <tr>
                    <td width = "50%">Tanggal Menerima</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_menerima" required autocomplete="off"></td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td>
                        <select name="id_bansos" id="id_bansos">
                            <option value=" ">Pilih Kategori</option>
                            <option value="111">Warga Miskin</option>
                            <option value="112">Ibu Hamil</option>
                            <option value="113">Balita</option>
                            <option value="114">Siswa SD</option>
                            <option value="115">Siswa SMP</option>
                            <option value="116">Siswa SMA/K</option>
                            <option value="117">Lansia</option>
                            <option value="118">Disabilitas Berat</option>
                        </select>
                    </td>
                </tr>
                </div>
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