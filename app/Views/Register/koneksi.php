<?php
$hostname = "localhost:8080";
$username = "root";
// $name = "";
// $level = "";
$password = "";
$databasename = "db_pemudabaptis";

$conn = mysqli_connect("$hostname", "$username", "$password");
if (!$connect) die("Gagal Melakukan Koneksi");
mysqli_select_db($db, $connect) or die("Database Tidak Ditemukan di Server");
