<?php
include "config/config.php";
session_start();
if(isset($_SESSION['user'])) {
     echo "<script>window.location='index.php';</script>";
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SPK Miftahussalam Banyumas">
    <meta name="author" content="SPK Miftahussalam Banyumas">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>SPK Miftahussalam Banyumas</title>
    <link href="assets/dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex justify-content-center align-items-center position-relative"
            style="background:url(assets/images/background.png) no-repeat center center;">
            <div class="col-lg-3 col-md-3 bg-white">
                <div class="p-5">
                    <div class="text-center">
                        <img src="assets/images/logo-icon.png" alt="wrapkit">
                    </div>
                    <h2 class="mt-3 text-center">SPK Miftahussalam</h2>
                    <form class="mt-4" method="post">
                        <div class="input">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" name="username" id="username" type="text" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input class="form-control" name="password" id="password" type="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" name="login" class="btn btn-block btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    if(isset($_POST['login'])) {
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $query = "SELECT * FROM user WHERE username = '$username' AND password = md5('$password')";
                        $hasil = mysqli_query($koneksi, $query);
                        
                        if(mysqli_num_rows($hasil) > 0) {
                            $_SESSION['user'] = $username;
                            echo "<script>window.location='index.php';</script>";
                        } else {
                            echo "<script>alert('Login gagal! Coba ulangi lagi');</script>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/libs/jquery/dist/jquery.min.js "></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>
</html>