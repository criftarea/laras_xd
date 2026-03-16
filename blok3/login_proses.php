<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
$query = mysqli_query($db, $sql);
$cek   = mysqli_num_rows($query);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login"; 
    header("Location:index.php");
}else{
    header("Location:login.php?pesan=gagal");
}
?>