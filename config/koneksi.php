<?php
$servername ="localhost";
$database = "contohpwd";
$username = "root";
$password = "";

// membuat koneksi tabel dengan php //
$conn = mysqli_connect ($servername, $username, $password, $database);

//cek koneksi//
if(!$conn){
    die("koneksi gagal". mysqli_connect_error());
}
echo("koneksi berhasil");
mysqli_close ($conn);
?>