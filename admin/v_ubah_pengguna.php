<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>ubah pengguna</title>
     <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body style="background-color: aqua;">
     <?php include "navbar.php" ?>
     <div class="container">
     <h1>ubah pengguna</h1>
     <?php 
     // ambil koneksi
     include "../config.php";
     // ambil id_login dari url
     $id_login = $_GET ['id_login'];
     // cari id_login di tb_login
     $sql = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE id_login='$id_login'");
     //ambil datanya
     $pengguna = mysqli_fetch_assoc($sql);
     ?>
     <form action="m_ubah_pengguna.php" method="post">
          <input type="hidden" name="id_login" id="" value="<?= $pengguna ['id_login'] ?>">
          <table class="table table-striped">
               <tr>
               <td>Nama</td>
               <td>:</td>
               <td><input type="text" name="nama" id="" value="<?= $pengguna['nama'] ?>" class="form-control"></td>
               </tr>
               <tr>
                    <td>username</td>
                    <td>:</td>
                    <td><input type="text" name="username" id="" value="<?= $pengguna['username']?>"class="form-control" ></td>
               </tr>
               <tr>
                    <td>password</td>
                    <td>:</td>
                    <td><input type="text" name="password" id="" value="<?= $pengguna['password']?>"class="form-control" ></td>
               </tr>
               <tr>
                    <td>status</td>
                    <td>:</td>
                    <td> <select name="status" id="" class="form-control">
                         <?php
                         if ($pengguna['status'] == "administrator"){
                              echo "<option value='administrator' selected>administrator</option>";
                         } else {
                              echo "<option value='administrator' >administrator</option>";
                         }

                         if ($pengguna['status'] == "petugas") {
                              echo "<option value='petugas' selected >petugas</option>";
                         } else {
                              echo "<option value='petugas' >petugas</option>";
                         }
                         ?>
                    </select></td>
               </tr>
               <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
               </tr>
          </table>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
     </form>
     </div>
</body>
</html>