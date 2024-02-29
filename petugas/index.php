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
  <title>Petugas</title>
</head>
<body>

  <?php include "navbar.php"; ?>
  <div class="container">
  <h1>Petugas</h1>
<img src="../img/petugas.jpg" alt="petugas" height="250px">
  <div class="card" style="width: 18rem;">
  <div class="card-header">
  <!-- <h1>Dasboard</h1> -->
  ID : <?= $_SESSION['id_login']; ?> <br> Pengguna : <?= $_SESSION['nama']; ?></li>
  </div>

</div>
</div>
</body>
</html>