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
        body{

        }
        nav{
            position: fixed;
        }
        .back{
        }
        .list{  
            display: flex;
            justify-content:center;
            align-items:center;
            margin-top:10px;
            
        }
    </style>
    <title>YC~Shop</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="Hand-drawn-coffee-logos-design-vector-set-0752.jpg" alt="" width="30" height="24" class="d-inline-block align-text-top">
        Chofee Shop
        </a>
        <ul>
            <li><a href="#list">Menu</a></li>
            <li><a href="#pesan">Pesan</a></li>
            <li><a href="tugas.php">Back</a></li>
        </ul>
    </div>
    </nav>
    <div class="row">
        <div class="col"></div>
        <div class="col-sm-6 col-xl-4 border">
        <h4 class="list" id="list">List Menu</h4>
            <hr>
            <p>Regular Chofee....................................10000</p><hr>
            <p>Avocado Chofee....................................18000</p><hr>
            <p>Ginger Chofee.....................................14000</p><hr>
            <p>Mocca Chofee......................................20000</p><hr>
            <p>Manggo Chofee.....................................14000</p><hr>
        </div>
        <div class="col"></div>
    </div>
    <div class="row" id="pesan">
        <div class="col"></div>
        <div class="col">
        <h4>
            Pesan Sini:
        </h4>
        </div>
        <div class="col"></div>
    </div>
</body>
<footer>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/js/bootstrap.js">
    
</footer>
</html>