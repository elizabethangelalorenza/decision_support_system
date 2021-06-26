        <?php include("pages/header.php"); ?>
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Data User</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border-primary">
                            <div class="card-header bg-primary">
                                <h3 class="mb-0 text-white">Form User</h3>
                            </div>
                            <form action="" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Nama User</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="nama" placeholder="Nama User" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Username</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="username" placeholder="Username" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Password</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" type="password" name="password" placeholder="Password" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button class="btn btn-success" type="submit" name="simpan" style="float: left;">
                                                <i class="fas fa-save"></i> Simpan</button>
                                            <button class="btn btn-warning" type="reset">
                                                <i class="fas fa-undo"></i> Reset</button>
                                            <a href="data.php" class="btn btn-danger" type="button">
                                                <i class="fas fa-window-close"></i> Batal</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php
                            if(isset($_POST['simpan']))
                            {
                                $nama = $_POST['nama'];
                                $username = $_POST['username'];
                                $password = md5($_POST['password']);
                                $query = "INSERT INTO user (nama, username, password) 
                                          VALUES ('$nama', '$username', '$password')";
                                $simpan = mysqli_query($koneksi, $query);
                                if($simpan)
                                    {
                                        echo "<script>alert('Simpan data sukses!');
                                        window.location='data.php';</script>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <?php include("pages/footer.php"); ?>
