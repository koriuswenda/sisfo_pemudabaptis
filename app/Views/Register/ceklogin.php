<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * FROM Register WHERE BINARY (username = '$username' OR email = '$username') AND BINARY password = '$password' ");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($ceklogin > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:v_home.php");
} else {
    header("location:v_home.php?pesan=gagal");
}
