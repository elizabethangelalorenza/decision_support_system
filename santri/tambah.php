        <?php include("pages/header.php"); ?>
        <!-- ================================================== -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Santri</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border-primary">
                            <div class="card-header bg-primary">
                                <h3 class="mb-0 text-white">Form Santri</h3>
                            </div>
                            <form action="" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Nama Santri</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="nama" placeholder="Nama Santri" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Jenis Kelamin</label>
                                        </h4>
                                        <select class="form-control" name="jenis" required autofocus>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>   
                                    </div>
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Asal Sekolah</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="asal" placeholder="Asal Sekolah" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Alamat</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="alamat" placeholder="Alamat" required autofocus>
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
                                $query = "INSERT INTO santri (nama_santri, jenis_kelamin, asal_sekolah, alamat_santri)
                                          VALUES ('$_POST[nama]', '$_POST[jenis]', '$_POST[asal]', '$_POST[alamat]')";
                                $simpan = mysqli_query($koneksi, $query);
                                if($simpan) {
                                    echo "<script>alert('Simpan data sukses!');
                                    window.location='data.php';</script>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <!-- ================================================== -->
        <?php include("pages/footer.php"); ?>
