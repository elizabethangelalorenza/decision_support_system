<?php
    include "config/config.php";
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
    <title>SPK Miftahussalam Banyumas</title>
    <link href="assets/dist/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <div class="auth-wrapper d-flex justify-content-center align-items-center position-relative"
            style="background:url(assets/images/background.png) no-repeat center center;">
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
                                        <input class="form-control" name="nama" type="text" placeholder="Nama" required autofocus>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="username" type="text" placeholder="Username" required autofocus>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" name="password" type="password" placeholder="Password" required autofocus>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" name="register" class="btn btn-block btn-success">Daftar</button>
                                    <a href="login.php" type="button" name="login" title="Daftar" class="btn btn-block btn-primary">Masuk</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                    if(isset($_POST['register']))
                    {
                        $nama = $_POST['nama'];
                        $username = $_POST['username'];
                        $password = md5($_POST['password']);
                        $query = "INSERT INTO user (nama, username, password)
                                  VALUES ('$nama', '$username', '$password')";

                        $register = mysqli_query($koneksi, $query);
                        
                        if($register > 0)
                        {
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
    <script src="assets/libs/jquery/dist/jquery.min.js "></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>
</html>
