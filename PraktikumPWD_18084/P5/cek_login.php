<?php
    include_once "koneksi.php";
    $id_user = $_POST['id_user'];
    $password = $_POST['password'];
    $sql = "SELECT*FROM users WHERE id_user='$id_user' AND password='$password'";;

    $login=mysqli_query($con,$sql);

    $ketemu=mysqli_num_rows($login);

    if ($ketemu>0){
        session_start();

        $_SESSION['id_user']=$r['id_user'];
        $_SESSION['password']=$r['password'];
        while($r=mysqli_fetc_array($login)){
        echo"USER BERHASIL LOGIN<br>";
        echo"id_user=".$_SESSION['id_user']."<br>";
        echo"password=".$_SESSION['password']."<br>";
        echo"<center><a href=logout.php><b>LOGOUT</b></a></center>";
    }
}
    else{
        echo"<center>Login gagal! username & password tidak benar<br></center>";
        echo"<center><a href=form_login.php><b>ULANGI LAGI</b></a></center>";
    }
    mysqli_close($con);
    ?>