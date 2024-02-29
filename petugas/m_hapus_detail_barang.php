<?php
//ambil koneksi
include "../config.php";

//terima data dari v_detail_penjualan.php
$id_detail_penjualan = $_POST['id_detail_penjualan'];
$id_pelanggan = $_POST['id_pelanggan'];

//hapus data di tb_detail_penjualan berdarkan id_detail_penjualan
$sql = mysqli_query($koneksi, "DELETE FROM tb_detail_penjualan WHERE id_detail_penjualan='$id_detail_penjualan'");

//kembali ke halaman v_detail_penjualan.php
header("location: v_detail_penjualan.php?id_pelanggan=$id_pelanggan");
