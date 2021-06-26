        <?php include("pages/header.php"); ?>
        <?php
            $query = "SELECT * FROM nilai WHERE id_nilai='$_GET[id]'";
            $tampil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($tampil);
        ?>
        <!-- ================================================== -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Nilai</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border-primary">
                            <div class="card-header bg-primary">
                                <h3 class="mb-0 text-white">Form Nilai</h3>
                            </div>
                            <form action="" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">ID Santri</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="id" placeholder="ID Santri" value="<?php echo "$data[id_santri]"; ?>" required autofocus>
                                            </div>
                                        </div>
                                    </div>
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
                                            <label class="card-title">Kriteria: Rata-rata Nilai Tes Masuk Tertulis (K1)</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="k1" placeholder=" " value="<?php echo "$data[k1]"; ?>" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Kriteria: Rata-rata Nilai Ujian Nasional (K2)</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="k2" placeholder=" " value="<?php echo "$data[k2]"; ?>" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Kriteria: Rata-rata Nilai Rapot Kelas (K3)</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="k3" placeholder=" " value="<?php echo "$data[k3]"; ?>" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Kriteria: Nilai Membaca Al-Qur'an (K4)</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="k4" placeholder=" " value="<?php echo "$data[k4]"; ?>" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Kriteria: Nilai Wawancara Kepribadian (K5)</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="k5" placeholder=" " value="<?php echo "$data[k5]"; ?>" required autofocus>
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
                            if(isset($_POST['edit'])) 
                            {
                                $query = "UPDATE nilai SET
                                            id_santri='$_POST[id]',
                                            nama_santri='$_POST[nama]',
                                            k1='$_POST[k1]',
                                            k2='$_POST[k2]',
                                            k3='$_POST[k3]',
                                            k4='$_POST[k4]',
                                            k5='$_POST[k5]'
                                          WHERE id_nilai='$_GET[id]'";
                                $edit = mysqli_query($koneksi, $query);
                                if($edit)
                                {
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
