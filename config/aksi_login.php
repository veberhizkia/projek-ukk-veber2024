<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $date = mysqli_fetch_array($sql);

    $_SESSION['username'] = $date['username'];
    $_SESSION['userid'] = $date['userid'];
    $_SESSION['status'] ='login';
    echo "<script>
    alert('login berhasil');
    location.href='../admin/index.php';
    </script>";
}else{
    echo "<script>
    alert('username atau password salah!');
    location.href='../login.php';
    </script>";
}
?>