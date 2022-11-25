<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <style>
        *,html{
            margin:0;
        }
        h2{
            display:flex;
            align-items:center;
            justify-content:center;
        }
        .wid{
            width:50%;
        }
        button{
            float:left;
        }
        .button {
            margin-left:10px;
        }
        .button a{
            text-decoration:none;
            color:white;
        }
        .button a:hover{
            color:white;
        }
    </style>
    <title>Tambah Data</title>
</head>
<body>
    <br>
    <h2>
        Tambah Daftar Pengguna Motor
    </h2>
    <form action="testi.php" menthod="get" name="form1">
    <div class="container wid">
            <div>
                <input class="form-control" type="text" placeholder="ID" name="id">
            </div>
            <div>
                <input class="form-control" type="text" placeholder="Nama" name="nama">
            </div>
            <div>
                <input class="form-control" type="text" placeholder="Merk" name="merek">
            </div>
            <div>
                <input class="form-control" type="text" placeholder="Plat" name="plat">
            </div>
            <div>
                <input class="form-control" type="text" placeholder="Telp" name="telp">
            </div>
            <div>
                <input class="form-control" type="text" placeholder="Email" name="email">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="tambahkan">Tambahkan</button>
            <button class="btn btn-danger button" name="back"><a href="tugas.php">Back</a></button>
        </div>
        </div>
    </form>
</body>
<footer>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/js/bootstrap.js">
</footer>
</html>
<p style="color:white;">
<?php
$hostname="127.0.0.1";
$user="root";
$password="";
$database="pure";

$connect=mysqli_connect($hostname,$user,$password,$database);
if(!$connect){
    die("Connection Failed:" . mysqli_connect_error());
}else {
    echo "koneksi berhasil silahkan lanjut ke query";
}
if(isset($_GET['tambahkan'])){
    $query="INSERT INTO motor(id,nama,merek,plat,telp,email)
    VALUES(
        '{$_GET['id']}',
        '{$_GET['nama']}',
        '{$_GET['merek']}',
        '{$_GET['plat']}',
        '{$_GET['telp']}',
        '{$_GET['email']}'
    );";
    echo $query;

    $exec=mysqli_query($connect, $query);
}
?></p>