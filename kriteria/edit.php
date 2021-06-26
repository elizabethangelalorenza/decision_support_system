        <?php include("pages/header.php"); ?>
        <?php
            $query = "SELECT * FROM kriteria WHERE id_kriteria='$_GET[id]'";
            $tampil = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($tampil);
        ?>
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
                                                <input class="form-control" type="text" name="nama" placeholder="Nama Kriteria" value="<?php echo "$data[nama_kriteria]"; ?>" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Kode Kriteria</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="kode" placeholder="Kode Kriteria" value="<?php echo "$data[kode_kriteria]"; ?>" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Jenis Kriteria</label>
                                        </h4>
                                        <select class="form-control" name="jenis" required autofocus>
                                            <?php echo "<option value='$data[jenis_kriteria]'> $data[jenis_kriteria]</option>"?>
                                            <option disabled=""></option>
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
                                                <input class="form-control" type="text" name="bobot" placeholder="Bobot Kriteria" value="<?php echo "$data[bobot_kriteria]"; ?>" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Persentase</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="persentase" placeholder="Persentase" value="<?php echo "$data[bobot_persentase]"; ?>" required autofocus>
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
                                $query = "UPDATE kriteria SET
                                            nama_kriteria='$_POST[nama]',
                                            kode_kriteria='$_POST[kode]',
                                            jenis_kriteria='$_POST[jenis]',
                                            bobot_kriteria='$_POST[bobot]',
                                            bobot_persentase='$_POST[persentase]'
                                          WHERE id_kriteria='$_GET[id]'";
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
