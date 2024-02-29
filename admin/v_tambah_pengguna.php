<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>tambah pengguna</title>
</head>
<body style="background-color: aqua;">
     <?php include "navbar.php"?>
     <div class="container">
     <h1>Tambah Pengguna Baru</h1>
     <form action="m_tambah_pengguna.php" method="post">
          <table class="table table-striped">
               <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"  id="" class="form-control"></td>
               </tr>
               <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username"  id="" class="form-control"></td>
               </tr>
               <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="text" name="password"  id="" class="form-control"></td>
               </tr>
               <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td> <select name="status" id=""class="form-control">
                         <option value="administrator">administrator</option>
                         <option value="petugas">petugas</option>
                    </select></td>
               </tr>
               <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan" class="btn btn-outline-warning"></td>
               </tr>
          </table>
     </form>
     </div>
</body>
</html>