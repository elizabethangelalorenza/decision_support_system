        <?php include("pages/header.php"); ?>
        <!-- ================================================== -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Penilaian</h1>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card border-primary">
                            <div class="card-header bg-primary">
                                <h3 class="mb-0 text-white">Form Penilaian</h3>
                            </div>
                            <form action="insert.php" method="post">
                                <div class="card-body">
                                    <div class="form-group">
                                        <h4>
                                            <label class="card-title">Nama Santri</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <select class="form-control form-control-sm" name="nama" required autofocus>
                                                    <option>Pilih Nama Santri</option>
                                                    <?php
                                                    $query = "SELECT * FROM santri";
                                                    $tampil = mysqli_query($koneksi, $query);
                                                    while ($data = mysqli_fetch_assoc($tampil)) :
                                                        echo '<option value=' . $data["id_santri"] . '>' . $data["nama_santri"] . '</option>';
                                                    endwhile;
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $query = "SELECT * FROM kriteria";
                                    $tampil = mysqli_query($koneksi, $query);
                                    while ($data = mysqli_fetch_assoc($tampil)) :
                                    ?>
                                        <div class="form-group">
                                            <h4>
                                                <label class="card-title">Kriteria: <?= $data["nama_kriteria"]; ?> (<?= $data["kode_kriteria"]; ?>)</label>
                                            </h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input class="form-control" type="text" name="nilai_<?= strtolower($data["kode_kriteria"]); ?>" placeholder=" " required autofocus>
                                                    <input type="hidden" name="<?= strtolower($data["kode_kriteria"]); ?>" value="<?= $data["id_kriteria"]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
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
                        </div>
                    </div>
                </div>
            </div>
            <!-- ================================================== -->
            <?php include("pages/footer.php"); ?>
