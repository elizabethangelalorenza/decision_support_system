        <?php include("pages/header.php"); ?>
        <!-- ============================================================== -->
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
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-right">
                                    <a href="tambah.php" class="btn btn-success" type="button">
                                        <i class="fas fa-plus"></i> Tambah</a>
                                </div><br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table text-center table-bordered no-wrap">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th width="2px">No. </th>
                                                <th width="2px">Nama Santri</th>
                                                <th width="2px">Kriteria 1</th>
                                                <th width="2px">Kriteria 2</th>
                                                <th width="2px">Kriteria 3</th>
                                                <th width="2px">Kriteria 4</th>
                                                <th width="2px">Kriteria 5</th>
                                                <th width="2px"> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $query = "SELECT a.id_santri, GROUP_CONCAT(a.id_kriteria ORDER BY a.id_kriteria ASC) as id_kriteria, GROUP_CONCAT(a.nilai_alternatif ORDER BY a.id_kriteria ASC) as nilai, b.nama_santri
                                                      FROM nilai_normalisasi_alternatif a
                                                      JOIN santri b ON a.id_santri = b.id_santri 
                                                      GROUP BY a.id_santri";
                                            $tampil = mysqli_query($koneksi, $query);
                                            while ($data = mysqli_fetch_assoc($tampil)) :
                                            ?>
                                                <tr>
                                                    <td><?= $no++; ?>.</td>
                                                    <td><?= $data["nama_santri"]; ?></td>
                                                    <?php
                                                    foreach (explode(",", $data['nilai']) as $i => $val) {
                                                        echo '<td>' . $val . '</td>';
                                                    }
                                                    ?>
                                                    <td>
                                                        <a href="edit.php?id=<?= $data['id_santri'] ?>" type="button" class="btn btn-sm btn-warning">
                                                            <i class="fas fa-edit"></i> Edit</a>
                                                        <a href="hapus.php?id=<?= $data['id_santri'] ?>" type="button" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                                            <i class="fas fa-trash-alt"></i> Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ================================================== -->
            <?php include("pages/footer.php"); ?>
