<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user-login.css">
    <title>Daftar</title>
</head>
<body>
    <div class="desa2">
    <img src="img/desa2.png" alt="desa">
    </div>
    <div class="wrapper">
        <div class="div-nav">
            <img src="img/rmh.svg" alt="ini logo">
        </div>
        <form action="user-login2.php" method="POST">
            <div class="kolomnik">
            <label>Masukkan Nomor Induk Kependudukan</label><br>
                <input type="number" name="nik" required><br>
            </div>
            <div class="kolomnama">
                <label>Masukkan Nama Lengkap</label><br>
                <input type="text" name="nama" required>
            </div>
            <div class="next">
                <tr>
                    <td></td>
                    <td><input type="submit" value="Masuk" name="proses"></td>
                </tr>
            </div>
        </form>
    </div>
</body>
</html>