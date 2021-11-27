<?php
include_once("koneksi.php");
$sql="delete from users where id_user=$GET['id_user']";
mysqli_query($con,$sql);
mysqli_close($con);


header('localhost:tampil_user.php');
?>