<?php
//ambil koneksi
include "../config.php";

//terima data dari v_detai_penjualan.php
$id_detail_penjualan = $_POST['id_detail_penjualan'];
$id_pelanggan = $_POST['id_pelanggan'];
$id_barang = $_POST['id_barang'];
$stok_barang = $_POST['stok_barang'];

$harga_barang = $_POST['harga_barang'];
$jumlah_barang = $_POST['jumlah_barang'];

//hitung subTotal
$sub_total = $harga_barang * $jumlah_barang;

//hitung stok barang setelah dikurangi jumlah barang yang dibeli
$total_stok = $stok_barang - $jumlah_barang;



//cek jika stok barang = 0 maka keluar peringatan tidak boleh dibeli
if ($stok_barang == '0') {
  // belum tau 
} else {

  //update di jumlah barang yang dibeli dan sub total tb_detail_penjualan
  $sql = mysqli_query($koneksi, "UPDATE tb_detail_penjualan SET jumlah_barang='$jumlah_barang', sub_total='$sub_total' WHERE id_detail_penjualan ='$id_detail_penjualan'");

  $sql = mysqli_query($koneksi, "UPDATE tb_barang SET stok_barang='$total_stok' WHERE id_barang ='$id_barang'");
  //update stok barang di tb_barang

}
//kembali ke halaman v_detail_penjualan.php
header("location: v_detail_penjualan.php?id_pelanggan=$id_pelanggan");
