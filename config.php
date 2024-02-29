<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_kasir_02";

$koneksi = mysqli_connect($hostname, $username, $password, $database);

if (!$koneksi){
     echo "koneksi Gagal";
}
