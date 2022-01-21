        <?php
        include("pages/header.php");
        $query = 'SELECT * FROM nilai_normalisasi_alternatif a
                  JOIN kriteria b ON a.id_kriteria = b.id_kriteria 
                  WHERE a.id_santri=' . $_GET['id'] . '
                  ORDER BY a.id_kriteria ASC';
        $tampil1 = mysqli_query($koneksi, $query);
        $data_penilaian = mysqli_fetch_assoc($tampil1);
        ?>
        <!-- ================================================== -->
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h1 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Nilai Alternatif</h1>
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
                                            <label class="card-title">Nama Santri</label>
                                        </h4>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <select class="form-control form-control-sm" name="nama" required autofocus>
                                                    <option>Pilih Nama Santri</option>
                                                    <?php
                                                    $query = "SELECT * FROM santri";
                                                    $tampil2 = mysqli_query($koneksi, $query);
                                                    while ($data = mysqli_fetch_assoc($tampil2)) :
                                                        echo '<option value=' . $data["id_santri"] . ' ' . ($data_penilaian['id_santri'] == $data['id_santri'] ? 'selected' : '') . '>' . $data["nama_santri"] . '</option>';
                                                    endwhile;
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $query = 'SELECT * FROM nilai_normalisasi_alternatif a
                                        JOIN kriteria b ON a.id_kriteria = b.id_kriteria 
                                        WHERE a.id_santri=' . $_GET['id'] . '
                                        ORDER BY a.id_kriteria ASC';
                                    $tampil2 = mysqli_query($koneksi, $query);
                                    while ($data2 = mysqli_fetch_assoc($tampil2)) :
                                    ?>
                                        <div class="form-group">
                                            <h4>
                                                <label class="card-title">Kriteria: <?= $data2["nama_kriteria"]; ?> (<?= $data2["kode_kriteria"]; ?>)</label>
                                            </h4>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input class="form-control" type="text" name="nilai_<?= strtolower($data2["kode_kriteria"]); ?>" value="<?= $data2['nilai_alternatif'] ?>" required autofocus>
                                                    <input type="hidden" name="<?= strtolower($data2["kode_kriteria"]); ?>" value="<?= $data2["id_kriteria"]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
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
                            if (isset($_POST['edit'])) {
                                $query1 = 'DELETE FROM nilai_normalisasi_alternatif WHERE id_santri=' . $_POST['nama'];
                                mysqli_query($koneksi, $query1);
                                $santri = $_POST['nama'];
                                $nilai_alternatif = [$_POST['nilai_k1'], $_POST['nilai_k2'], $_POST['nilai_k3'], $_POST['nilai_k4'], $_POST['nilai_k5']];
                                $kriteria = [$_POST['k1'], $_POST['k2'], $_POST['k3'], $_POST['k4'], $_POST['k5']];
                                foreach ($kriteria as $i => $k) {
                                    $query = 'INSERT INTO nilai_normalisasi_alternatif (id_kriteria, id_santri, nilai_alternatif)
                                              VALUES (' . $k . ', ' . $santri . ', ' . $nilai_alternatif[$i] . ')';
                                    $tes = mysqli_query($koneksi, $query);
                                }
                                echo "<script>alert('Edit data sukses!');
                                    window.location='data.php';</script>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ================================================== -->
            <?php include("pages/footer.php"); ?>
