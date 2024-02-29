<?php
//ambil koneksi
include "../config.php";

//terima kiriman data dari v_ubah_barang.php
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$stok_barang = $_POST['stok_barang'];
$harga_barang = $_POST['harga_barang'];


//simpan hasil ubah ke tb_login
$sql = mysqli_query($koneksi, "UPDATE tb_barang SET id_barang='$id_barang',                                nama_barang='$nama_barang',                   stok_barang='$stok_barang',harga_barang='$harga_barang'                                          WHERE id_barang='$id_barang'");

//jika berhasil kembali ke halaman v_daftar_barang.php
if ($sql) {
  header('location: v_daftar_barang.php');
}
