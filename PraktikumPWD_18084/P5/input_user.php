<?php
include_once("koneksi.php");
$id_user = $_POST['id_user'];
$nama_lengkap = $_POST['nama'];
$email = $_POST['email'];
$password = md5($_POST['']);
$sql = "INSERT INTO users('id_user','password','nama','email') VALUES ('$id_user','$password','$nama_lengkap','$email')";
$query=mysqli_query($con, $sql);

mysqli_close($con);

header('location:tampil_user.php');
?>