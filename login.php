<?php
if (isset($_GET['button'])){
    session_start();
    $hostname="127.0.0.1";
    $username="root";
    $password="";
    $database="tugas";

    $koneksi=mysqli_connect($hostname,$username,$password,$database);

    $user = $_GET['username'];
    $pass = $_GET['password'];

    $query = "SELECT * FROM login where username='$user' && password='$pass'";
    $hasil = mysqli_query($koneksi, $query);

    if(mysqli_num_rows($hasil) == 0) {
        $_SESSION['message']='Login gagal, User tidak ditemukan';
        header('location:tugas.php');
    } else {
        $_SESSION['id']=$row['username'];
        header('location:testi.php');
    }
}
?>