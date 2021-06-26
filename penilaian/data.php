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
                                    <a href="#" class="btn btn-success" type="button" style="float: left;">
                                        <i class="fas fa-print"></i> Cetak Laporan</a>
                                    <a href="tambah.php" class="btn btn-success" type="button">
                                        <i class="fas fa-plus"></i> Tambah</a>
                                </div><br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table text-center table-bordered no-wrap">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th width="2px">No. </th>
                                                <th width="2px">ID Santri </th>
                                                <th>Nama Santri</th>
                                                <th width="2px">K1</th>
                                                <th width="2px">K2</th>
                                                <th width="2px">K3</th>
                                                <th width="2px">K4</th>
                                                <th width="2px">K5</th>
                                                <th width="2px"> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $no = 1;
                                            $query = "SELECT * FROM nilai ORDER BY id_nilai ASC";
                                            $tampil = mysqli_query($koneksi, $query);
                                            while ($data = mysqli_fetch_assoc($tampil)):
                                        ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $data["id_santri"]; ?></td>
                                            <td><?= $data["nama_santri"]; ?></td>
                                            <td><?= $data["k1"]; ?></td>
                                            <td><?= $data["k2"]; ?></td>
                                            <td><?= $data["k3"]; ?></td>
                                            <td><?= $data["k4"]; ?></td>
                                            <td><?= $data["k5"]; ?></td>
                                            <td>
                                                <a href="edit.php?id=<?=$data['id_nilai']?>" type="button" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i> Edit</a>
                                                <a href="hapus.php?id=<?=$data['id_nilai']?>" type="button" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
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
