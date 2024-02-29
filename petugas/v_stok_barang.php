<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'petugas') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stok Barang</title>
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body style="background-color: aqua;">
  <?php include "navbar.php" ?>
  <div class="container">
  <h1>Stok Barang</h1>
  <table class="table table-striped table-hover">
    <tr>
      <td class="fs-3">ID Barang</td>
      <td class="fs-3">Nama Barang</td>
      <td class="fs-3">Stok</td>
      <td class="fs-3">Harga</td>
      <td colspan="2"class="fs-3">Aksi</td>
    </tr>
    <?php
    //ambil koneksi
    include "../config.php";
    //ambil data di tb_barang
    $sql = mysqli_query($koneksi, 'SELECT * FROM tb_barang ORDER BY id_barang DESC');
    foreach ($sql as $barang) {
    ?>
      <tr>
        <td><?= $barang['id_barang'] ?> </td>
        <td><?= $barang['nama_barang'] ?></td>
        <td><?= $barang['stok_barang'] ?></td>
        <td><?= $barang['harga_barang'] ?></td>
        <td><a href="v_ubah_barang.php?id_barang=<?= $barang['id_barang'] ?>"class="btn btn-outline-primary">Ubah</a></td>
      </tr>
    <?php } ?>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</div>
</body>

</html>