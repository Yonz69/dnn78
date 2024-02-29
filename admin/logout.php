<?php

session_start();
//hapus session login
unset($_SESSION['login']);
//kembali ke halaman login
header('location: ../index.php');
