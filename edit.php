<?php
include("tambahdata.php");

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $nama=$_POST['nama'];
    $merek=$_POST['merek'];
    $plat=$_POST['plat'];
    $telp=$_POST['telp'];
    $email=$_POST['email'];

    $hasil=mysqli_query($connect,"UPDATE motor SET nama='$nama',merek='$merek',plat='$plat',telp='$telp',email='$email' WHERE id=$id ");
    header("location:testi.php");
}
?>
<?php
$id=$_GET['id'];
$hasil=mysqli_query($connect,"SELECT * FROM motor WHERE id=$id ");

while($motor=mysqli_fetch_array($hasil)){
    $nama=$motor['nama'];
    $merek=$motor['merek'];
    $plat=$motor['plat'];
    $telp=$motor['telp'];
    $email=$motor['email'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <style>
        .cancel{
            text-decoration:none;
            color:white;
        }
        .cancel:hover{
            color:white;
        }
        .wid{
            width:50%;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h2>
    Edit Data Pengguna
    </h2>
    <form action="edit.php" method="post" name="formupdate">
        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <div class="container wid">
        <div>
            <input class="form-control" type="text" placeholder="Nama" name="nama" value="<?php echo $nama; ?>">
        </div>
        <div>
            <input class="form-control" type="text" placeholder="Merk" name="merek" value="<?php echo $merek; ?>">
        </div>
        <div>
            <input class="form-control" type="text" placeholder="Plat" name="plat" value="<?php echo $plat; ?>">
        </div>
        <div>
            <input class="form-control" type="text" placeholder="Telp" name="telp" value="<?php echo $telp; ?>">
        </div>
        <div>
            <input class="form-control" type="text" placeholder="Email" name="email" value="<?php echo $email; ?>">
        </div>
        <br>
            <button type="submit" class="btn btn-success" name="update" value="update">Update</button>
            <button type="button" class="btn btn-danger" name="Cancel"><a class="cancel" href="index.php">Cancel</a></button>
    </div>
    </form>
</body>
<footer>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/js/bootstrap.js">

</footer>
</html>