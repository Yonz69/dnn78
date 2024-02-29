<?php
//ambil koneksi
include "../config.php";

//terima data dari v_detail_penjualan.php
$id_penjualan = $_POST['id_penjualan'];
$id_pelanggan = $_POST['id_pelanggan'];
$total = $_POST['total'];
$bayar = $_POST['bayar'];

$kembali = $bayar - $total;

// echo $kembali;

//update total di tb_penjualan
$sql = mysqli_query($koneksi, "UPDATE tb_penjualan SET total = '$total' WHERE id_penjualan='$id_penjualan'");

// return $kembali;

//kembali ke halaman v_detail_penjualan.php
header("location: v_detail_penjualan.php?id_pelanggan=$id_pelanggan&kembali=$kembali");
