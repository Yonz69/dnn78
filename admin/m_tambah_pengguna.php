<?php 
//ambil koneksi
include "../config.php";

//terima kiriman data dari v_tambah_pengguna.php
$nama = $_POST ['nama'];
$username = $_POST ['username'];
$password = $_POST ['password'];
$status = $_POST ['status'];

// simpan data ke tb_login
$sql = mysqli_query($koneksi, "INSERT INTO tb_login VALUES (Null,'$nama','$username','$password','$status')");


//jika berhasil maka kembali ke halaman v_registrasi.php
if($sql){
     header('location: v_registrasi.php');
}
?>