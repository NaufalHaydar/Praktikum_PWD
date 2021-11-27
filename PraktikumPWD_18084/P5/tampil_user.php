<html>
<h2>User</h2>

<body>
<form method="post" action="form_user.php">
<input type=submit value='Tambah User'>
</form>

<table>
<tr>
    <th>No</th>
    <th>Username</th>
    <th>Nama Lengkap</th>
    <th>Aksi</th>
</tr>
<?php
include_once("koneksi.php");
$sql="SELECT*FROM users ORDER BY id_user";
$tampil=mysqli_query($con,$sql);
if (mysqli_num_rows($tampil)>0){
    $no=1;
    while($r=mysqli_fetc_array($tampil)){
        echo"<tr>";
        echo"<td>$no</td><td>".$r['id_user']."</td>";
        echo"<td>".$r['nama']."</td>";
        echo"<td>".$r['email']."</td>";
        echo"<td><a href='hapus_user.php?id=$r[id_user]'>Hapus</a></td>
        </tr>";
        $no++;
    }
}
else{
    echo" ";
}
mysqli_close($con);
?>
</body>