<?php

session_start();

include "koneksi.php";

@$username = $_POST['username'];
@$password = $_POST['password'];

$sql_login = "SELECT * FROM admin where username = '$username' and password = '$password'";
$login = mysqli_query($mysqli, $sql_login);

$data = mysqli_fetch_array($login);

if ($data){ 
    $_SESSION['id_admin']= $data['id_admin'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];

    header("location:penerima.php");
}else{
    echo "<script>
            alert('Cek Kembali Username dan Password Anda');
            document.location = 'admin-login.php';
        </script>";
}

?>