        <?php include("pages/header.php"); ?>
        <!-- ================================================== -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Kriteria</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border-primary">
                            <div class="card-header bg-primary">
                                <h3 class="mb-0 text-white">Form Kriteria</h3>
                            </div>
                            <form action="" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Nama Kriteria</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="nama" placeholder="Nama Kriteria" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Kode Kriteria</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="kode" placeholder="Kode Kriteria" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Jenis Kriteria</label>
                                        </h4>
                                        <select class="form-control" name="jenis" required autofocus>
                                            <option>Cost</option>
                                            <option>Benefit</option>
                                        </select>   
                                    </div>
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Bobot Kriteria</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="bobot" placeholder="Bobot Kriteria" required autofocus>
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
                            if(isset($_POST['simpan'])) {
                                $query  = "INSERT INTO kriteria (nama_kriteria, kode_kriteria, jenis_kriteria, bobot_kriteria)
                                          VALUES ('$_POST[nama]', '$_POST[kode]', '$_POST[jenis]', '$_POST[bobot]')";
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
