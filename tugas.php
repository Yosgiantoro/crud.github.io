<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/16a1577772.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>webSaya</title>
    <style>
        h2{
            font-family:' Lobster', cursive;
        }
        p{
            font-family: 'Lobster', cursive;
        }
        button{
            font-family: 'Lobster', cursive;
        }
        input{
            font-family: 'Lobster', cursive;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row border">
            <div class="row">
                <h2>
                    Mau Nambah Pengguna Motor?
                </h2>
                <p>
                    Login Dulu Sini.
                </p>
            </div>
            <form action="login.php" menthod="get">
                <input class="form-control" type="text" placeholder="username or email" name="username">
                <br>
                <input class="form-control" type="password" placeholder="password" name="password">
                <br>
                <button type="submit" class="btn btn-primary" name="button">Login</button>
                <br>
            </form>
        </div>
        <br>
        <div class="row border">
            <p>Belum Punya Akun?<a href="index.php" class="text-decoration:none;">Daftar</a></p>
        </div>
    </div>
</body>
<footer>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/js/bootstrap.js">
</footer>
</html>