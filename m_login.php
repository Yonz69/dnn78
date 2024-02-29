<?php

//koneksi
include "config.php";

//ambil data yang dikirim oleh v_login
$username_login = $_POST['username_login'];
$password_login = $_POST['password_login'];

//cek datanya di database / ditabel tb_login
$sql = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username='$username_login' AND password='$password_login'");

// variabel hasil=0 kalau tidak ada, hasil=1 kalau ada
$hasil = mysqli_num_rows($sql);

//cek kondisi
if ($hasil > 0) {
  //abmil data user yang login
  $data = mysqli_fetch_assoc($sql);

  //cek kondisi status
  if ($data['status'] == "administrator") {
    //buat session untuk security 
    session_start();
    $_SESSION['login'] = 'admin';
    //nama pengguna dan id pengguna
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['id_login'] = $data['id_login'];

    //ke halaman administrator
    header('location: admin/index.php');
  } else 
   if ($data['status'] == "petugas") {
    //buat session untuk security 
    session_start();
    $_SESSION['login'] = 'petugas';
    //nama pengguna dan id pengguna
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['id_login'] = $data['id_login'];

    //ke halaman petugas
    header('location: petugas/index.php');
  }
}












//pengecekan
//if($username_login == "admin" && $password_login == "12345"){
     //masuk kehalaman admin
     //header('location: admin/v_admin.php');
//}else if ($username_login == "petugas" && $password_login == "6789"){
     //masuk kehalaman petugas
  //   header('location: petugas/v_petugas.php');
//}