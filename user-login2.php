<?php

session_start();

include "koneksi.php";

@$nik = $_POST['nik'];
@$nama = $_POST['nama'];

$sql_login = "SELECT * FROM `penerima` WHERE nik = '$nik' AND nama = '$nama'";
$login = mysqli_query($mysqli, $sql_login);

$data = mysqli_fetch_array($login);

if ($data){ 
    $_SESSION['id_penerima']= $data['id_penerima'];
    $_SESSION['nik'] = $data['nik'];
    $_SESSION['nama'] = $data['nama'];

    header("location:user.php");
}else{
    echo "<script>
            alert('Cek Kembali Username dan Password Anda');
            document.location = 'daftar.php';
        </script>";
}

?>