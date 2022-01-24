        <?php include("pages/header.php"); ?>
        <?php
            $query  = "SELECT * FROM santri WHERE id_santri='$_GET[id]'";
            $tampil = mysqli_query($koneksi, $query);
            $data   = mysqli_fetch_assoc($tampil);
        ?>
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
                                                <input class="form-control" type="text" name="nama" placeholder="Nama Santri" value="<?php echo "$data[nama_santri]"; ?>" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Jenis Kelamin</label>
                                        </h4>
                                        <select class="form-control" name="jenis" required autofocus>
                                            <?php echo "<option value='$data[jenis_kelamin]'> $data[jenis_kelamin]</option>"?>
                                            <option disabled=""></option>
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
                                                <input class="form-control" type="text" name="asal" placeholder="Asal Sekolah" value="<?php echo "$data[asal_sekolah]"; ?>" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Alamat</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="alamat" placeholder="Alamat" value="<?php echo "$data[alamat_santri]"; ?>" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button class="btn btn-success" type="submit" name="edit" style="float: left;">
                                                <i class="fas fa-save"></i> Simpan</button>
                                            <a href="data.php" class="btn btn-danger" type="button">
                                                <i class="fas fa-window-close"></i> Batal</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php
                            if(isset($_POST['edit'])) {
                                $query = "UPDATE santri SET
                                            nama_santri   = '$_POST[nama]',
                                            jenis_kelamin = '$_POST[jenis]',
                                            asal_sekolah  = '$_POST[asal]',
                                            alamat_santri = '$_POST[alamat]'
                                          WHERE id_santri = '$_GET[id]'";
                                $edit = mysqli_query($koneksi, $query);
                                if($edit) {
                                    echo "<script>alert('Edit data sukses!');
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
