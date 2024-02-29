<?php
//ambil koneksi
include "../config.php";

//terima kiriman data dari v_tambah_pelanggan.php
$id_pelanggan = $_POST['id_pelanggan'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$alamat_pelanggan = $_POST['Alamat_pelanggan'];
$telepon_pelanggan = $_POST['telepon_pelanggan'];

//data untuk tb_penjualan
$id_login = $_POST['id_login'];
$tgl_penjualan = date('Ymd');
$total = 0;


//simpan data ke tb_pelanggan
$sql = mysqli_query($koneksi, "INSERT INTO tb_pelanggan VALUES('$id_pelanggan','$nama_pelanggan','$alamat_pelanggan','$telepon_pelanggan')");

//simpan data ke tb_penjualan
$data = mysqli_query($koneksi, "INSERT INTO tb_penjualan VALUES(Null,'$tgl_penjualan','$total','$id_pelanggan','$id_login')");

//jika berhasil maka kembali ke halaman v_penjualan.php
if ($sql) {
  header('location: v_penjualan.php');
}
