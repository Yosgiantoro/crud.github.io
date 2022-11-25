<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        *,html{
            margin:0;
            font-family: 'Lobster', cursive;
        }
        body{
            height: 100vh;
        }
        h1{
        }
        .border{
            border:solid 2px;
            border-radius:5px;
        }
        .posisi{
            margin:1px;
            
        }
        .form-check{
            border:solid full 1px lightgrey;
            margin:4px;
            border-radius:5px;

        }
    </style>
    <title>Document</title>
</head>
<body>
    <form action="" menthod="get">
    <div class="row">
    <div class="container">
        <div class="row col-md-6 mx-auto border">
            <div class="row">
                <h1>Ohh Belum Punya Akun</h1><br>
                <p>Daftar Dulu Sini!</p>
            </div>
        <div class="row">
            <div class="col-md-6 mx-auto" menthod="post">
                <input type="text" class="form-control" placeholder="First name" name="Firstname">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Last name" name="Lastname">
            </div> 
            <div class="row posisi">
                <input type="text" class="form-control" placeholder="Email" name="Email">
            </div>
            <div class="row posisi">
                <input type="password" class="form-control" placeholder="Sandi" name="Sandi">
            </div>
            <div class="input-group">
            <select class="col-md-3 mx-auto form-control"name="tanggal">
                <option value="0">Tanggal</option>
                <?php
                for($t=1;$t<=31;$t++){
                    echo "<option value ='$t'>$t</option>";
                }
                ?>
            </select>
                <select class="form-control col-md-3 mx-auto" name="tanggal">
                    <option value="0">Bulan</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
            <select class="col-md-3 mx-auto form-control" name="tanggal">
                <option value="tahun">Tahun</option>
            <?php

                for ($i = 1980; $i<= 2022; $i++){
                    echo " <option value = '$i' >$i</option>";
                }
                ?>
            </select>
        </div>
           <div class="row">
           <div class="form-check col-2" name="jenis_kelamin">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Laki-laki" checked>
                    <label class="form-check-label" for="exampleRadios1">Laki-Laki</label>
                </div>
            </div>
            <div class="form-check col-2">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="Perempuan" checked>
                    <label class="form-check-label" for="exampleRadios2">Perempuan</label>
                </div>
            </div>
            <div class="form-check col-2">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="Khusus" checked>
                    <label class="form-check-label" for="exampleRadios3">Khusus</label>
                </div>
           </div>
            </div>
            <div class="row posisi">
                <button type="submit" name="daftar" value="daftar" class="btn btn-primary  col-sm-6 mx-auto">Daftar</button>
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <p><a href="tugas.php">Back</a></p>
                    </div>
                </div>
        </div>
    </div>
    </div>
    
    </div>
    </form>
</body>
<footer>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</footer>
</html>
<p style="color:white">
<?php
$hostname="127.0.0.1";
$username="root";
$password="";
$database="tugas";

$koneksi=mysqli_connect($hostname,$username,$password,$database);

if(!$koneksi){
    die("Connection Failed:" . mysqli_connect_error());
}else {
    echo "koneksi berhasil silahkan lanjut ke query";
}

if(isset($_GET['daftar'])){
    $query="INSERT INTO login(username,password,fname,lname,tanggal,jenisK)
    VALUES(
        '{$_GET['Email']}',
        '{$_GET['Sandi']}',
        '{$_GET['Firstname']}',
        '{$_GET['Lastname']}',
        '{$_GET['tanggal']}',
        '{$_GET['exampleRadios']}'
    );";
    echo $query;

    $exec=mysqli_query($koneksi, $query);

}

?>
</p>