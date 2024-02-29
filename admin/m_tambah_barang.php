<?php
//ambil koneksi
include "../config.php";

//terima kiriman data dari v_tambah_barang.php
$nama_barang = $_POST['nama_barang'];
$stok_barang = $_POST['stok_barang'];
$harga_barang = $_POST['harga_barang'];

//simpan data ke tb_barang
$sql = mysqli_query($koneksi, "INSERT INTO tb_barang VALUES(Null,'$nama_barang','$stok_barang','$harga_barang')");


//jika berhasil maka kembali ke halaman v_daftar_barang.php
if ($sql) {
  header('location: v_daftar_barang.php');
}
