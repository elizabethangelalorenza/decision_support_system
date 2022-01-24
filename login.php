<?php
    include("pages/koneksi.php");
    session_start();
    if(isset($_SESSION['user'])) {
        echo "<script>window.location='index.php';</script>";
    }
?>
<!-- ================================================== -->
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SPK Miftahussalam Banyumas">
    <meta name="author" content="SPK Miftahussalam Banyumas">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <link href="assets/dist/css/style.min.css" rel="stylesheet">
    <title>SPK Miftahussalam Banyumas</title>
</head>
<!-- ================================================== -->
<body>
    <div class="main-wrapper">
        <div class="auth-wrapper d-flex justify-content-center align-items-center position-relative"
            style="background:url(assets/images/background.png) no-repeat center center;">
            <!-- Form Login -->
            <div class="col-lg-3 col-md-3 bg-white">
                <div class="p-5">
                    <div class="text-center">
                        <img src="assets/images/logo-icon.png" alt="wrapkit">
                    </div>
                    <h2 class="mt-3 text-center">SPK Miftahussalam</h2>
                    <form action="" method="post">
                        <div class="input">
                            <div class="card-body">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="username" placeholder="Username" required autofocus>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="password" placeholder="Password" required autofocus>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="btn btn-block btn-primary" type="submit" name="login">Masuk</button>
                                    <button class="btn btn-block btn-success" type="button" data-toggle="modal" data-target="#register">Daftar akun baru</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Form Register -->
            <div id="register" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header modal-colored-header bg-primary">
                            <h3 class="modal-title" id="tambahModalLabel">Registrasi</h3>
                            <button type="button" class="close" data-dismiss="modal">x</button>
                        </div>
                        <div class="col-lg-12 col-md-12 bg-white">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="assets/images/logo-icon.png" alt="wrapkit">
                                </div>
                                <h2 class="mt-3 text-center">SPK Miftahussalam</h2>
                                <form action="" method="post">
                                    <div class="input">
                                        <div class="card-body">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="nama" placeholder="Nama" required autofocus>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="text" name="username" placeholder="Username" required autofocus>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <input class="form-control" type="password" name="password" placeholder="Password" required autofocus>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <div class="col-lg-12">
                                                    <button class="btn btn-block btn-success" type="submit" name="register">Daftar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- Config Login -->
                                <?php
                                if(isset($_POST['login'])) {
                                    $username = $_POST['username'];
                                    $password = md5($_POST['password']);
                                    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
                                    $hasil = mysqli_query($koneksi, $query);
                                    if(mysqli_num_rows($hasil) > 0) {
                                        $_SESSION['user'] = $username;
                                        echo "<script>window.location='index.php';</script>";
                                    } else {
                                        echo "<script>alert('Login gagal! Coba ulangi lagi');</script>";
                                    }
                                }
                                ?>
                                <!-- Config Register -->
                                <?php
                                if(isset($_POST['register'])) {
                                    $nama  = $_POST['nama'];
                                    $username = $_POST['username'];
                                    $password = md5($_POST['password']);
                                    $query = "INSERT INTO user (nama, username, password)
                                              VALUES ('$nama', '$username', '$password')";
                                    $register = mysqli_query($koneksi, $query);
                                    if($register > 0) {
                                        echo "<script>alert('Registrasi sukses!');
                                        window.location='login.php';</script>";
                                    } else {
                                        echo "<script>alert('Registrasi gagal! Coba ulangi lagi');</script>";
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
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
<!-- ================================================== -->
</html>

<!-- Developt by https://www.facebook.com/Vickry.ID -->
