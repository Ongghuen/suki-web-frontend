<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "sukimebel";
$koneksi = mysqli_connect($server, $username, $password, $db);

if (mysqli_connect_errno()) {
    echo "Koneksi gagal :" . mysqli_connect_error();
}
