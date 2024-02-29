<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'admin') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body style="background-color: aqua;">
  <?php include "navbar.php"; ?>
  <div class="container">
  <h1>Daftar Pengguna</h1>
    <a href="v_tambah_pengguna.php" class="btn btn-outline-secondary">tambah pengguna</a>
    <br><br>
    <table class="table table-hover">
      <tr>
        <td class="fs-3">ID Login</td>
        <td class="fs-3">Nama</td>
        <td class="fs-3">Username</td>
        <td class="fs-3">Password</td>
        <td class="fs-3">Status</td>
        <td class="fs-3">Aksi</td>
      </tr>
      <?php
      //ambil koneksi
      include "../config.php";
      //ambil data di tb_login
      $sql = mysqli_query($koneksi, 'SELECT * FROM tb_login');
      foreach($sql as $pengguna) {
      ?>
      <tr>
        <td><?= $pengguna['id_login']?></td>
        <td><?= $pengguna['nama']?></td>
        <td><?= $pengguna['username']?></td>
        <td><?= $pengguna['password']?></td>
        <td><?= $pengguna['status']?></td>
        <td><a href="v_ubah_pengguna.php?id_login=<?= $pengguna ['id_login'] ?>" class="btn btn-outline-info">ubah</a></td>
      </tr>
      <?php } ?>
    </table>
    </div>
</body>
</html>