<?php
include("tambahdata.php");

$hasil=mysqli_query($connect,"SELECT * FROM motor ORDER by id DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <style>
        .wid{
            width:60%;
        }
        table{
        }
    </style>
    <title>Tambah Data</title>
</head>
<body>
    <div class="container wid">
            <table class="table table-striped table-primary">
                <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Merk</th>
                            <th>Plat</th>
                            <th>Telp</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        <?php
                        while($motor=mysqli_fetch_array($hasil)){
                            echo"<tr>";
                            echo"<td>".$motor['nama']."</td>";
                            echo"<td>".$motor['merek']."</td>";
                            echo"<td>".$motor['plat']."</td>";
                            echo"<td>".$motor['telp']."</td>";
                            echo"<td>".$motor['email']."</td>";
                            echo"<td><a href='edit.php?id=$motor[id]'><button class='btn btn-warning col-sm-12 md-12 lg-12 mx-12'>Edit</button></a><hr>
                            <a href='delete.php?id=$motor[id]'><button class='btn btn-danger col-sm-12 md-12 lg-12 mx-12'>Delete</button></td>";
                            echo"</tr>";
                        }
                        ?>
                    </tbody>
            </table>
        </div>
    </div>
</body>
<footer>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/js/bootstrap.js">
</footer>
</html>