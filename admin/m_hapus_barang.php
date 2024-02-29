<?php
//ambil koneksi
include "../config.php";

//ambil data id_barang dari URL
$id_barang = $_GET['id_barang'];

//hapus barang berdasarkan id_barang 
$sql = mysqli_query($koneksi, "DELETE FROM tb_barang WHERE id_barang='$id_barang'");


//jika berhasil kembali ke v_daftar_barang.php
if ($sql) {
  header('location: v_daftar_barang.php');
}
